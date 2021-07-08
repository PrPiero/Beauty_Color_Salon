<?php

namespace App\Http\Controllers\Admin;

use App\Events\WorkerWasCreated;
use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class WorkersController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view', new worker);

        if ($request->ajax())
        {
            if (!empty($request->from_date))
            {
                $workers = Worker::with('roles')->whereBetween('created_at', array($request->from_date, $request->to_date))->get();
            }

            else
            {
                $workers = Worker::with('roles')->get();
            }

            return DataTables::of($workers)
                ->addIndexColumn()
                ->addColumn('action', function($workers) {
                    $acciones = '<a href="javascript:void(0)" onclick="editarUsuario(' . $workers->id . ')" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>';
                    $acciones .= '&nbsp&nbsp<button type="button" name="delete" id="' . $workers->id . '" class="delete btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin.users.index');
    }

    public function store(Request $request)
    {
        $this->authorize('create', new Worker);

        $rules = [
            'name' => ['required'],
            'surname' => ['required'],
            'dni' => ['required', 'numeric', 'digits:8', Rule::unique('workers')->ignore($request->id)],
            'state' => ['required'],
            'roles' => ['required'],
            'email' => ['required', Rule::unique('workers')->ignore($request->id)],
            //'password' => ['required', 'min:8', 'confirmed']
        ];

        $rules['password'] = Str::random(8);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        else
        {
            $worker = Worker::create([
                'name' => $request->name,
                'surname' => $request->surname,
                'dni' => $request->dni,
                'state' => $request->state,
                'email' => $request->email,
                'password' => $rules['password']
            ])->syncRoles($request->roles);

            //ENVIAR EMAIL CON LAS CREDENCIALES DEL LOGIN
            WorkerWasCreated::dispatch($worker, $rules['password']);

            return back();
        }
    }

    public function destroy(Worker $id)
    {
        $this->authorize('delete', $id);

        $id->delete();
        return back();
    }

    public function edit(Worker $id)
    {
        $this->authorize('update', $id);

        //$worker = $id->with('roles')->where('id', strval($request->id))->get();
        //$worker = $id->with('roles')->where('id', Auth::user()->id)->get();
        $worker = Worker::with('roles')->find($id);
        return response()->json($worker);
    }

    public function update(Request $request)
    {
        $this->authorize('update', new Worker);

        $rules = [
            'name' => ['required'],
            'surname' => ['required'],
            'dni' => ['required', 'numeric', 'digits:8', Rule::unique('workers')->ignore($request->id)],
            'state' => ['required'],
            'roles' => ['required'],
            'email' => ['required', Rule::unique('workers')->ignore($request->id)]
        ];

        if ($request->filled('password'))
        {
            $rules['password'] = ['min:8', 'confirmed'];
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        else
        {
            DB::table('workers')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'dni' => $request->dni,
                'state' => $request->state,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $worker = Worker::with('roles')->find($request->id);
            $worker->syncRoles($request->roles);

            return back();
        }
    }
}

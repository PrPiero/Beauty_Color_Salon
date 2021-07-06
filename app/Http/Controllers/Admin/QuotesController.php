<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class QuotesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            if (!empty($request->from_date))
            {
                $quotes = Quote::whereBetween('date', array($request->from_date, $request->to_date))->get();
            }

            else
            {
                $quotes = Quote::latest()->get();
                //$quotes = Quote::latest()->with('service')->get();
            }

            return DataTables::of($quotes)
                ->addIndexColumn()
                ->addColumn('action', function($quotes) {
                    $acciones = '<a href="javascript:void(0)" onclick="editarCita('.$quotes->id.')" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.quotes.index');
    }

    public function edit(Quote $id, Request $request)
    {
        //$quote = Quote::with('service')->find($id);
        //$quote = $id->whereIn('id', $request->id)->get();
        //$quote = Quote::find($id);
        $quote = $id->where('id', auth()->id)->get();
        //$quote = DB::select('SELECT id, phone, email, description, state FROM quotes WHERE id IN ('.$request->id.')');
        //$quote = DB::table('quotes')->select('phone', 'email', 'description', 'state')->whereIn('id', $request->id)->get();
        return response()->json($quote);
    }

    public function update(Request $request)
    {
        if ($request->state == "Pendiente")
        {
            DB::table('quotes')->where('id', $request->id)->update(['state' => "Atendida"]);
        }

        else if ($request->state == "Atendida")
        {
            DB::table('quotes')->where('id', $request->id)->update(['state' => "Pendiente"]);
        }

        return back();
    }
}

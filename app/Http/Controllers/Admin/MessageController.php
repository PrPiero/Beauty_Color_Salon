<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = request([
            'client',
            'phone',
            'email',
            'date',
            'description',
            'service_id',
            'state'
        ]);

        Mail::to($request['email'])->queue(new MessageReceived($mensaje));

        return back();
    }
}

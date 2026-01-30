<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function index(){
        $messages = Message::all();

        return response()->json([
            'status' => 'success',
            'data' => $messages
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email' => 'required|string',
            'subject'  => 'nullable|string',
            'message'  => 'required|string'
        ]);

        $message = Message::create($request->only([
            'first_name',
            'last_name',
            'email',
            'subject',
            'message'
        ]));
        return response()->json([$message], 201);
    }
}

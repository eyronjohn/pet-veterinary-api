<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Validator; //for validation

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

    public function store(StoreMessageRequest $request){
        // $validator = Validator::make($request->all(), [
        //     'first_name' => 'required|string',
        //     'last_name'  => 'required|string',
        //     'email'      => 'required|email',
        //     'subject'    => 'nullable|string',
        //     'message'    => 'required|string',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Validation failed',
        //         'errors'  => $validator->errors()
        //     ], 422);
        // }

        //$message = Message::create($validator->validated());

        $message = Message::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully',
            'data'    => $message
        ], 201);
    }
}

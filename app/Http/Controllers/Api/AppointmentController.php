<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function index(){
        $appointments = Appointment::all();

        return response()->json([
            'status' => 'success',
            'data' => $appointments
        ], 200);
    }

    public function store(Request $request){
        $request->validate([
            'pet_id' => 'required|numeric',
            'owner_id'  => 'required|numeric',
            'appointment_date' => 'required|date',
            'appointment_time'  => 'nullable|date_format:H:i',
            'service_type'  => 'required|string',
        ]);

        $appointment = Appointment::create($request->only([
            'pet_id',
            'owner_id',
            'appointment_date',
            'appointment_time',
            'service_type',
        ]));
        return response()->json([$appointment], 201);
    }

    public function getAllAppointments(Request $id){
        $appointments = Appointment::whereIn('owner_id', $id)->get();

        return response()->json([
            'total_found' => $appointments->count(),
            'data' => $appointments
        ], 200);
    }
}

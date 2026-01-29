<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    //
    public function index(){
        $pets = Pet::all();

        return response()->json([
            'status'=> 'success',
            'data' => $pets
        ]);
    }

    // public function store(Request $request){

    //     $request->validate([
    //         'owner_id' => 'required|int',
    //         'name' => 'required|string',
    //         'species' => 'required|string',
    //         'breed'  => 'nullable|string',
    //         'sex' => 'required|string|in:male,female,other',
    //         'birth_date' => 'required|date',
    //         'color' => 'required|string',
    //         'weight' => 'required|numeric'
    //     ]);

    //     $pet = Pet::create($request->only([
    //         'owner_id',
    //         'name',
    //         'species',
    //         'breed',
    //         'sex',
    //         'birth_date',
    //         'color',
    //         'weight'
    //     ]));
    //     return response()->json([$pet], 201);
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'owner_id'   => 'required|integer|exists:users,id',
            'name'       => 'required|string',
            'species'    => 'required|string',
            'sex'        => 'required|string|in:male,female,unknown',
            'birth_date' => 'required|date|before:today',
            'color'      => 'required|string',
            'weight'     => 'required|numeric', 
            'breed'      => 'nullable|string',
        ]);

        $pet = Pet::create($validated);

        return response()->json([
            'message' => 'Pet profile created successfully!',
            'data'    => $pet
        ], 201);
    }
}

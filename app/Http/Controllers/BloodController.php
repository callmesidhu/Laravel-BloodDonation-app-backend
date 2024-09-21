<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blood;

class BloodController extends Controller
{
    // For fetching blood data (GET /api/data)
    public function index()
    {
        $data = Blood::all(); // Fetch all blood records
        return response()->json($data); // Return data in JSON format
    }

    // For storing new blood data (POST /api/add)
    public function store(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits:10',
            'blood' => 'required|string|max:3',
        ]);

        // Create new blood record
        $blood = new Blood();
        $blood->name = $validatedData['name'];
        $blood->phone = $validatedData['phone'];
        $blood->blood = $validatedData['blood'];
        $blood->save();

        // Return success response
        return response()->json([
            'message' => 'Blood data added successfully!',
            'data' => $blood
        ], 201);
    }
}

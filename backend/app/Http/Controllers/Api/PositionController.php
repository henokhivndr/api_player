<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $position = Position::all();

        return response()->json([
            'message'=>'List of position',
            'data'=>$position
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'position_name'=>'required',
            'description'=>'required'
        ]);

        $position = Position::create($validated);

        return response()->json([
            'message'=>'Position added successfully',
            'data'=>$position
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $position = Position::find($id);

        if(!$position) {
            return response()->json([
                'message'=>'Position not found'
            ], 404);
        }

         return response()->json([
            'message'=>'Detail position',
            'data'=>$position
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $position = Position::find($id);

        if(!$position) {
            return response()->json([
                'message'=>'Position not found'
            ], 404);
        }

        $validated = $request->validate([
            'position_name'=>'required',
            'description'=>'required'
        ]);

        $position->update($validated);

        return response()->json([
            'message'=>'Position edited successfully',
            'data'=>$position
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Position::find($id);

        if(!$position) {
            return response()->json([
                'message'=>'Position not found'
            ], 404);
        }

        $position->delete();

        return response()->json([
            'message'=>'Position deleted successfully'
        ]);
    }
}

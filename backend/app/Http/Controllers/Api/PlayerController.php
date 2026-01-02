<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import model
use App\Models\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::with('position')->get();

        return response()->json([
            'message' => 'list of players',
            'data' => $players
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validator
        $validated = $request->validate([
            'player_name'=>'required',
            'position_id'=>'required',
            'skill'=>'required'
        ]);

        //query add
        $player = Player::create($validated);

        //response
        return response()->json([
            'message'=>'Player added succesfully',
            'data'=>$player
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //query pilih berdasarkan id
        $player = Player::find($id);

        if(!$player) {
            return response()->json([
                'message'=>'Player not found'
            ], 404);
        }

        return response()->json([
            'message'=>'Detail of player',
            'data'=>$player
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $player = Player::find($id);

        if(!$player) {
            return response()->json([
                'message'=>'Player not found'
            ], 404);
        }

        //validator
        $validated = $request->validate([
            'player_name'=>'required',
            'position_id'=>'required',
            'skill'=>'required'
        ]);
        
        //query edit
        $player->update($validated);

        //response
        return response()->json([
            'message'=>'Player edited successfully',
            'data'=>$player
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::find($id);

        if(!$player) {
            return response()->json([
                'message'=>'Player not found'
            ], 404);
        }

        $player->delete();

        return response()->json([
            'message'=>'Player deleted successfully'
        ]);
    }
}

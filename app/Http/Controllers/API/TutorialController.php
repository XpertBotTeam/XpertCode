<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TutorialRequest;
use App\Models\Tutorial;
use App\Models\Exercise;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutorial = Tutorial::all();
        return response()->json([
            'status' => true,
            'data' => $tutorial,
            'message' => 'list of tutorials'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TutorialRequest $request)
    {
        $tutorial = Tutorial::create($request->all());
        return response()->json([
            'status' => true,
            'data' => $tutorial,
            'message' => 'tutorial created successfully'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tutorial = Tutorial::find($id);
        if ($tutorial) {
            return response()->json([
                'status' => true,
                'data' => $tutorial,
                'message' => 'tutorial information'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'tutorial not found!'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TutorialRequest $request, string $id)
    {
        $tutorial = Tutorial::find($id);
        $result = $tutorial->update($request->all());
        return response()->json([
            'status' => true,
            'data' => $tutorial,
            'message' => 'tutorial updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Tutorial::destroy($id);
        if ($result) {
            return response()->json([
                'status' => true,
                'data' => null,
                'message' => 'tutorial deleted successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'tutorial not found'
            ]);
        }
    }

    public function exercises($id, Request $request)
    {

        $tutorial = Tutorial::find($id);
        if (!is_null($tutorial)) {

            $exercises = $tutorial->exercises;
            return response()->json([
                'status' => true,
                'data' => $exercises,
                'message' => 'exercises for a specific tutorial'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'tutorial not found'
            ]);
        }
    }


}


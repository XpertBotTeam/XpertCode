<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExerciseRequest;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = Exercise::all();
        return response()->json([
            'status' => true,
            'data' => $exercises,
            'message' => 'all exercises'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExerciseRequest $request)
    {
        $user = auth()->user();
        if ($user->id == $request->get('user_id')) {
            $exercises = Exercise::create($request->all());
            return response()->json([
                'status' => true,
                'data' => $exercises,
                'message' => 'Exercise Created Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'User is not authenticated'
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exercise = Exercise::find($id);
        if (!is_null($exercise)) {
            return response()->json([
                'status' => true,
                'data' => $exercise,
                'message' => 'Exercise data returned successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Exercise data not found '
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExerciseRequest $request, string $id)
    {
        $user = auth()->user();

        if ($user->id == $request->get('user_id')) {
            $exercise = Exercise::find($id);

            if (!is_null($exercise)) {
                $result = $exercise->update($request->all());
                return response()->json([
                    'status' => true,
                    'data' => $exercise,
                    'message' => 'Exercise data Updated successfully'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'data' => null,
                    'message' => 'Exercise data not found '
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Unauthorized'
            ], 403);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exercise = Exercise::destroy($id);
        if (($exercise)) {
            return response()->json([
                'status' => true,
                'data' => null,
                'message' => 'exercise deleted successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'exercise not found'
            ]);
        }
    }
}

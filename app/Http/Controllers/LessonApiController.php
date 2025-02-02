<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::all();
        return response()->json($lessons);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // return Lesson::create($data);
        if (Lesson::create($data)) {
            return response()->json(['msg' => 'create new lesson was done ', 'data' => Lesson::create($data)]);
        } else {
            return response()->json(['msg' => 'add new lesson was faild']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = Lesson::findOrFail($id);
        return response()->json($lesson);
    }

    public function tags(string $id)
    {
        $lesson = Lesson::findOrFail($id)->Tags;
        return response()->json($lesson);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lesson = Lesson::find($id);
        $lesson->update($request->all());
        return response()->json($lesson);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lesson = Lesson::find($id);
        if ($lesson->delete()) {
            return response()->json(['msg' => 'deleting was done']);
        } else {
            return response()->json(['msg' => 'deleting was fail']);
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveStoryRequest;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('stories.index', [
            'stories' => Story::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveStoryRequest $request)
    {
        $story = Story::create($request->input());

        return redirect()->route('stories.show', $story)->with('status', 'Story is wrote successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        return view('stories.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveStoryRequest $request, Story $story)
    {
        $story->update($request->validated());

        return redirect()->route('stories.show', $story);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        $story->delete();

        return redirect()->route('stories.index')->with('status', 'Story Successfully Deleted');
    }
}

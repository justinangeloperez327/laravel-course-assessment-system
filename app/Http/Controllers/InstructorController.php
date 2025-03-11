<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;
use App\Models\Instructor;
use Inertia\Inertia;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('instructors/index', [
            'instructors' => Instructor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('instructors/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstructorRequest $request)
    {
        $instructor = Instructor::create($request->validated());

        return redirect()->route('instructors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        return Inertia::render('instructors/show', [
            'instructor' => $instructor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        return Inertia::render('instructors/edit', [
            'instructor' => $instructor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        $instructor->update($request->validated());

        return redirect()->route('instructors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();

        return redirect()->route('instructors.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseInstructorRequest;
use App\Http\Requests\UpdateCourseInstructorRequest;
use App\Models\CourseInstructor;
use Inertia\Inertia;

class CourseInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('course-instructors/index', [
            'courseInstructors' => CourseInstructor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('course-instructors/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseInstructorRequest $request)
    {
        $courseIntructor = CourseInstructor::create($request->validated());

        return redirect()->route('course-instructors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseInstructor $courseIntructor)
    {
        return Inertia::render('course-instructors/show', [
            'courseIntructor' => $courseIntructor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseInstructor $courseIntructor)
    {
        return Inertia::render('course-instructors/edit', [
            'courseIntructor' => $courseIntructor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseInstructorRequest $request, CourseInstructor $courseIntructor)
    {
        $courseIntructor->update($request->validated());

        return redirect()->route('course-instructors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseInstructor $courseIntructor)
    {
        $courseIntructor->delete();

        return redirect()->route('course-instructors.index');
    }
}

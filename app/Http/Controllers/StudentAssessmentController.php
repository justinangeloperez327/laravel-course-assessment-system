<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentAssessmentRequest;
use App\Http\Requests\UpdateStudentAssessmentRequest;
use App\Models\StudentAssessment;
use Inertia\Inertia;

class StudentAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('student-assessments/index', [
            'studentAssessments' => StudentAssessment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('student-assessments/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentAssessmentRequest $request)
    {
        return redirect()->route('student-assessments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentAssessment $studentAssessment)
    {
        return Inertia::render('student-assessments/show', [
            'studentAssessment' => $studentAssessment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentAssessment $studentAssessment)
    {
        return Inertia::render('student-assessments/edit', [
            'studentAssessment' => $studentAssessment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentAssessmentRequest $request, StudentAssessment $studentAssessment)
    {
        $studentAssessment->update($request->validated());

        return redirect()->route('student-assessments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentAssessment $studentAssessment)
    {
        $studentAssessment->delete();

        return redirect()->route('student-assessments.index');
    }
}

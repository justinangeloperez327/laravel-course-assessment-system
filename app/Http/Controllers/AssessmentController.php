<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use Inertia\Inertia;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('assessments/index', [
            'assessments' => Assessment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('assessments/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssessmentRequest $request)
    {
        $assessment = Assessment::create($request->validated());

        return redirect()->route('assessments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assessment $assessment)
    {
        return Inertia::render('assessments/show', [
            'assessment' => $assessment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessment $assessment)
    {
        return Inertia::render('assessments/edit', [
            'assessment' => $assessment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentRequest $request, Assessment $assessment)
    {
        $assessment->update($request->validated());

        return redirect()->route('assessments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessment $assessment)
    {
        $assessment->delete();

        return redirect()->route('assessments.index');
    }
}

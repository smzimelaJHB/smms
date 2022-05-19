<?php

namespace App\Http\Controllers;
use  App\Http\Resources\AssessmentCollection;
use  App\Http\Resources\AssessmentResource;
use App\Models\Assessments;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{

    public function index()
    {
        return response()->json(new AssessmentCollection(Assessments::all(),200));
    }

    public function store(Request $request)
    {

        $Assessments = Assessments::create($request->only(['grade','subjectName']));
        return new AssessmentResource($Assessments);
    }

    public function show(Assessments $Assessments)
    {
        return new AssessmentResource($Assessments);
    }

    public function update(Request $request, Assessments $Assessments)
    {
        $Assessments->update($request->only(['grade','subjectName']));
        return new AssessmentResource($Assessments);
    }

    public function destroy(Assessments $Assessments)
    {
        $Assessments -> delete();
        return response()->json(null,200);
    }
}
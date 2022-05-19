<?php

namespace App\Http\Controllers;
use  App\Http\Resources\ExamCollection;
use  App\Http\Resources\ExamResource;
use App\Models\Exams;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function index()
    {
        return response()->json(new ExamCollection(Exams::all(),200));
    }

    public function store(Request $request)
    {

        $Exams = Exams::create($request->only(['grade','subjectName']));
        return new ExamResource($Exams);
    }

    public function show(Exams $Exams)
    {
        return new ExamResource($Exams);
    }

    public function update(Request $request, Exams $Exams)
    {
        $Exams->update($request->only(['grade','subjectName']));
        return new ExamResource($Exams);
    }

    public function destroy(Exams $Exams)
    {
        $Exams -> delete();
        return response()->json(null,200);
    }
}
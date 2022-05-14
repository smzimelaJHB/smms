<?php

namespace App\Http\Controllers;
use  App\Http\Resources\SubjectCollection;
use  App\Http\Resources\SubjectResource;
use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        return response()->json(new SubjectCollection(Subjects::all(),200));
    }

    public function store(Request $request)
    {

        $Subjects = Subjects::create($request->only(['SubjectName','SubjectCode']));
        return new SubjectResource($Subjects);
    }

    public function show(Subjects $Subjects)
    {
        return new SubjectResource($Subjects);
    }

    public function update(Request $request, Subjects $Subjects)
    {
        $Subjects->update($request->only(['SubjectName','SubjectCode']));
        return new SubjectResource($Subjects);
    }

    public function destroy(Subjects $Subjects)
    {
        $Subjects -> delete();
        return response()->json(null,200);
    }
}
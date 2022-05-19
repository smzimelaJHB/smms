<?php

namespace App\Http\Controllers;
use  App\Http\Resources\TeacherCollection;
use  App\Http\Resources\TeacherResource;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        return response()->json(new TeacherCollection(Teachers::all(),200));
    }

    public function store(Request $request)
    {

        $Teachers = Teachers::create($request->only(['employeeID','position','idNumber','subjectName', 'password', 'gender', 'fullName','cell', 'email','age']));
        return new TeacherResource($Teachers);
    }

    public function show(Teachers $Teachers)
    {
        return new TeacherResource($Teachers);
    }

    public function update(Request $request, Teachers $Teachers)
    {
        $Teachers->update($request->only(['employeeID','position','subjectName', 'password', 'gender', 'fullName','cell', 'email','age']));
        return new TeacherResource($Teachers);
    }

    public function destroy(Teachers $Teachers)
    {
        $Teachers -> delete();
        return response()->json(null,200);
    }
}
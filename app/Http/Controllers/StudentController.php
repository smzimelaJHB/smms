<?php

namespace App\Http\Controllers;
use  App\Http\Resources\StudentCollection;
use  App\Http\Resources\StudentResource;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return response()->json(new StudentCollection(Students::all(),200));
    }

    public function store(Request $request)
    {

        $Students = Students::create($request->only(['idNumber','subjectName', 'password', 'gender', 'fullName','cell', 'email','age']));
        return new StudentResource($Students);
    }

    public function show(Students $Students)
    {
        return new StudentResource($Students);
    }

    public function update(Request $request, Students $Students)
    {
        $Students->update($request->only(['subjectName', 'password', 'gender', 'fullName','cell', 'email','age']));
        return new StudentResource($Students);
    }

    public function destroy(Students $Students)
    {
        $Students -> delete();
        return response()->json(null,200);
    }
}
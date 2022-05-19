<?php

namespace App\Http\Controllers;
use  App\Http\Resources\SchoolCollection;
use  App\Http\Resources\SchoolResource;
use App\Models\Schools;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public function index()
    {
        return response()->json(new SchoolCollection(Schools::all(),200));
    }

    public function store(Request $request)
    {

        $Schools = Schools::create($request->only(['SchoolName','email','tel','address']));
        return new SchoolResource($Schools);
    }

    public function show(Schools $Schools)
    {
        return new SchoolResource($Schools);
    }

    public function update(Request $request, Schools $Schools)
    {
        $Schools->update($request->only(['SchoolName','email','tel','address']));
        return new SchoolResource($Schools);
    }

    public function destroy(Schools $Schools)
    {
        $Schools -> delete();
        return response()->json(null,200);
    }
}
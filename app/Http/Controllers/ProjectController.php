<?php

namespace App\Http\Controllers;
use  App\Http\Resources\ProjectCollection;
use  App\Http\Resources\ProjectResource;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return response()->json(new ProjectCollection(Projects::all(),200));
    }

    public function store(Request $request)
    {

        $Projects = Projects::create($request->only(['grade','ProjectName','ProjectCode']));
        return new ProjectResource($Projects);
    }

    public function show(Projects $Projects)
    {
        return new ProjectResource($Projects);
    }

    public function update(Request $request, Projects $Projects)
    {
        $Projects->update($request->only(['grade','ProjectName','ProjectCode']));
        return new ProjectResource($Projects);
    }

    public function destroy(Projects $Projects)
    {
        $Projects -> delete();
        return response()->json(null,200);
    }
}
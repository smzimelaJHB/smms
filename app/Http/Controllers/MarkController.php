<?php

namespace App\Http\Controllers;
use  App\Http\Resources\MarkCollection;
use  App\Http\Resources\MarkResource;
use App\Models\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{

    public function index()
    {
        return response()->json(new MarkCollection(Mark::all(),200));
    }

    public function store(Request $request)
    {

        $mark = Mark::create($request->only(['avarage','grade','status']));
        return new MarkResource($mark);
    }

    public function show(Mark $mark)
    {
        return new MarkResource($mark);
    }

    public function update(Request $request, Mark $mark)
    {
        $mark->update($request->only(['avarage','grade','status']));
        return new MarkResource($mark);
    }

    public function destroy(Mark $mark)
    {
        $mark -> delete();
        return response()->json(null,200);
    }
}

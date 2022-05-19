<?php

namespace App\Http\Controllers;
use  App\Http\Resources\TestCollection;
use  App\Http\Resources\TestResource;
use App\Models\Tests;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        return response()->json(new TestCollection(Tests::all(),200));
    }

    public function store(Request $request)
    {

        $Tests = Tests::create($request->only(['subjectName','grade']));
        return new TestResource($Tests);
    }

    public function show(Tests $Tests)
    {
        return new TestResource($Tests);
    }

    public function update(Request $request, Tests $Tests)
    {
        $Tests->update($request->only(['subjectName','grade']));
        return new TestResource($Tests);
    }

    public function destroy(Tests $Tests)
    {
        $Tests -> delete();
        return response()->json(null,200);
    }
}
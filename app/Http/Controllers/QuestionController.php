<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        auth()-user()->question()->create($request->all());
        Question::create($request->all());
        return response('Created', 201);
    }

    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response(null, 204);
    }
}

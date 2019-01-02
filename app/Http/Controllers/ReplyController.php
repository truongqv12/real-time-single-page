<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Resources\ReplyResource;

class ReplyController extends Controller
{

     /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return ReplyResource::collection(Reply::latest()->get());
    }

    public function store(Request $request, Question $question)
    {
        $reply = $question->replies()->create($request->all());
        return response(['reply' => $reply], 201);
    }

    public function show(Question $question, Reply $reply)
    {
        return new ReplyResource($reply);
    }

    public function update(Question $question, Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('Updated', 202);
    }

    public function destroy(Question $question, Reply $reply)
    {
        $reply->delete();
        return response(null, 204);
    }
}

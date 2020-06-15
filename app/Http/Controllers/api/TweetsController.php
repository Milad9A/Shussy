<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index()
    {
        return Tweet::all();
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
        ]);
        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attributes['body']
        ]);

        return response(['message' => 'Tweet created Successfully']);
    }
}

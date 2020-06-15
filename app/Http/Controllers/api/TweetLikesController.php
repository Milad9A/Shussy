<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    public function store(Request $request, $id){
//        dd($request);
        Tweet::findOrFail($id)->like(User::findOrFail($request['user_id']));
        return response(['message' => "You've liked the tweet"]);
    }

    public function destroy(Request $request, $id){
//        dd($request);
        Tweet::findOrFail($id)->dislike(User::findOrFail($request['user_id']));
        return response(['message' => "You've disliked the tweet"]);
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store($id, Request $request)
    {
        $userToBeFollowed = User::findOrFail($id);
        $userToDoTheFollowing = User::findOrFail($request['user_id']);

        $userToDoTheFollowing->toggleFollow($userToBeFollowed);

        if (!$userToDoTheFollowing->following($userToBeFollowed)) {
            return response(['message' => "You've Un-followed " . $userToBeFollowed->name]);
        }
        return response(['message' => "You've started following " . $userToBeFollowed->name]);
    }
}

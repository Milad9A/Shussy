<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index(Request $request, $id)
    {
        return User::findOrFail($id)->timeline();
    }

    public function update($id, Request $request)
    {
//        dd($request);
        $user = User::findOrFail($id);

//        $attributes = request()->validate([
//            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
//            'name' => ['string', 'required', 'max:255'],
//            'avatar' => ['file'],
//            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
//            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
//        ]);

        if (request('avatar')) {
            $request['avatar'] = request('avatar')->store('avatars');
        }
        $request['password'] = bcrypt($request['password']);
        $user->update([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
        ]);

        return response(['message' => 'The profile has been updated']);
    }
}

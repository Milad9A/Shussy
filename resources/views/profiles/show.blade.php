@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            class="rounded-lg"
            src="/images/banner.jpg"
            alt=""
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
                    Follow Me
                </a>
            </div>
        </div>

        <p class="text-sm">
            Hi, I'm Jeffrey. I'm the creator of Laracasts and spend most of my days building the site and thinking of
            new ways to teach confusing concepts. I live in Orlando, Florida with my wife and two kids
            Let's move on and implement a profile page for each user. This page should show their avatar, a short bio,
            and then a timeline their tweets. This lesson will give us the chance to flex our Tailwind chops!
        </p>

        <img
            src="https://avatars.dicebear.com/api/avataaars/m.svg?mood[]=happy"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 185px"
        >

    </header>

    @include('_timeline',[
    'tweets' => $user->tweets
])
@endsection

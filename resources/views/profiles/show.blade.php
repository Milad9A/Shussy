@component('components.app')

    <header class="mb-6 relative">
        <div class="relative">
            <img
                class="rounded-lg"
                src="/images/banner.jpg"
                alt=""
            >

            <img
                src="{{ '/storage/' . $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a
                        href="{{ route('profile.edit', ['user' => $user]) }}"
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                        Edit Profile
                    </a>
                @endcan

                @component('components.follow-button', ['user' => $user])
                @endcomponent

            </div>
        </div>

        <p class="text-sm">
            Hi, I'm Jeffrey. I'm the creator of Laracasts and spend most of my days building the site and thinking of
            new ways to teach confusing concepts. I live in Orlando, Florida with my wife and two kids
            Let's move on and implement a profile page for each user. This page should show their avatar, a short bio,
            and then a timeline their tweets. This lesson will give us the chance to flex our Tailwind chops!
        </p>

    </header>

    @include('_timeline',[
    'tweets' => $tweets,
    ])

@endcomponent

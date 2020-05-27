<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src="https://avatars.dicebear.com/api/avataaars/m.svg?mood[]=happy"
                alt=""
                height="50"
                width="50"
                class="rounded-full mr-2"
            >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p>
            {{ $tweet->body }}
        </p>
    </div>
</div>

@component('components.app')

    <div>
        @foreach($users as $user)
            <a href="{{ route('profile', $user) }}" class="flex items-center mb-5">
                <img
                    src="{{ $user->avatar }}"
                    alt="{{ $user->username }}'s avatar"
                    width="60"
                    class="mr-4 rounded"
                >

                <div>
                    <h4 class="font-bold">
                        {{ '@' . $user->username }}
                    </h4>
                </div>
            </a>
        @endforeach
        {{ $users->links() }}
    </div>

@endcomponent

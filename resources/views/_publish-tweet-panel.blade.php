<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="what's up doc?"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="https://avatars.dicebear.com/api/avataaars/m.svg?mood[]=happy"
                alt="your avatar"
                height="45"
                width="45"
                class="rounded-full mr-2"
            >
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 py-2 text-sm text-white"
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
    @enderror

</div>

<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" placeholder="what's up doc?" autofocus required></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" width="50" height="50" alt="your avatar" class="rounded-full mr-3">

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow px-10 text-white text-sm h-10">Publish</button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

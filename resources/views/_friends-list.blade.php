<div class="bg-gray-200 rounded-lg py-4 px-6">
    @auth
        <h3 class="font-bold text-lg mb-4">Following</h3>
        <ul>
            @foreach(auth()->user()->follows as $user)
                <li class="mb-4">
                    <div >
                        <a href="{{ route('profile', $user) }}" class="flex item-center text-sm">
                        <img src="{{ $user->avatar }}" width="40" height="40" alt="" class="rounded-full mr-3">
                        {{ $user->name }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    @endauth
</div>

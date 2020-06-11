<div class="bg-gray-200 rounded-lg border border-gray-300 py-4 px-6">
    @auth
        <h3 class="font-bold text-lg mb-4">Following</h3>
        <ul>
            @forelse(auth()->user()->follows as $user)
                <li class="{{ $loop->last ? '' : 'mb-4' }}">
                    <div >
                        <a href="{{ route('profile', $user) }}" class="flex item-center text-sm">
                        <img src="{{ $user->avatar }}" width="40" height="40" alt="" class="rounded-full mr-3">
                        {{ $user->name }}
                        </a>
                    </div>
                </li>
            @empty
                <li class="mb-4">No friends yet</li>
            @endforelse
        </ul>
    @endauth
</div>

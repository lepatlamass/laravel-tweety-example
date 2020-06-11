<div class="border border-gray-400 rounded-lg">
    @forelse($tweets as $tweet )
        @include('_tweet')
    @empty
        <P class="p-4"> No tweets yet</P>
    @endforelse

    {{ $tweets->links() }}

</div>

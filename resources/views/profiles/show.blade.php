<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2" src="/image/default-profile-banner.jpg" alt="">
            <img src="{{ $user->avatar }}" alt="" class="rounded-full absolute mr-2 bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" height="150" style="left: 50%" >

        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="width: 270px">
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
{{--                //current_user is a helper function created in helpers.php--}}
              @can('edit', $user)
                    <a href=" {{ $user->path('edit') }}" class=" rounded-full border border-grey-100 py-2 px-4 text-black text-sm mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, facilis impedit libero magni nisi nobis nostrum odio optio pariatur, quos sint suscipit temporibus. Aliquam asperiores delectus illo?
        </p>

    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])

</x-app>

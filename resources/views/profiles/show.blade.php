@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">
        <img class="mb-2" src="/image/default-profile-banner.jpg" alt="">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class=" rounded-full border border-grey-100 py-2 px-4 text-black text-sm mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow Me</a>
            </div>
        </div>

        <p class="text-sm text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi commodi culpa, facilis impedit libero magni nisi nobis nostrum odio optio pariatur, quos sint suscipit temporibus. Aliquam asperiores delectus illo?
        </p>

        <img src="{{ $user->avatar }}" alt="" class="rounded-full absolute mr-2" style="width: 150px; left: calc(50% - 75px); top: 138px">

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])

@endsection

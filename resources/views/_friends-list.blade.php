<h3 class="font-bold text-lg mb-4">Friends</h3>

<ul>
    @foreach(range(1,8) as $index)
        <li class="mb-4">
            <div class="flex item-center text-sm">
                <img src="https://i.pravatar.cc/40" alt="" class="rounded-full mr-3">
                John Doe
            </div>
        </li>
    @endforeach
</ul>

<x-app>
    <form METHOD="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @Csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="mb-2 uppercase block font-bold text-sm text-gray-700">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" value="{{ $user->name }}" required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>  <div class="mb-6">
            <label for="username" class="mb-2 uppercase block font-bold text-sm text-gray-700">username</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" value="{{ $user->username }}" required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="mb-2 uppercase block font-bold text-sm text-gray-700">Avatar</label>
          <div class="flex">
              <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar" >
              <img src="{{ $user->avatar }}" alt="your image" width="40">
          </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="mb-2 uppercase block font-bold text-sm text-gray-700">email</label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id=email" value="{{ $user->email }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password" class="mb-2 uppercase block font-bold text-sm text-gray-700">Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id=password" required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="mb-2 uppercase block font-bold text-sm text-gray-700">Confirm Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id=password_confirmation" required>

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded px-4 py-2 hover:bg-blue-500 mr-4">Submit</button>
            <a href="{{ $user->path() }}" class="hover:underline text-lg text-red-600 font-bold">Cancel</a>
        </div>

    </form>
</x-app>

<x-master>
<div class="container mx-auto flex justify-center">
    <div class="py-6 px-12 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
                <div class="mb-4 font-bold text-lg ">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-sm text-gray-700">Email</label>
                                <input id="email" type="email" class="border border-gray-400 p-2 w-full"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-red-400 text-sm mt-2">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-sm text-gray-700">Password</label>
                                <input id="password" type="password" class="border border-gray-400 p-2 w-full"   name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-400 text-sm mt-2">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                                <div >
                                    <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="uppercase font-bold text-xs text-gray-700" for="remember">
                                      Remember Me
                                    </label>
                                </div>

                        </div>

                        <div>
                                <button type="submit" class=" px-4 py-2 text-white rounded bg-blue-400 uppercase hover:bg-blue-500">
                                   Submit
                                </button>
                                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                        </div>
                    </form>

        </div>
    </div>
</div>
</x-master>

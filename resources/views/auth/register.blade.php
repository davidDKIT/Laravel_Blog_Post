@extends('layouts.app')

@section('content')
<main>
    
    <div class="1xl:container m-auto">
        <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block">
        </div>
        <div class="relative h-full ml-auto">
            <div class="m-auto py-2 px-2 sm:p-20 xl:w-6/12">

                <form class="space-y-6 py-6" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        {{-- <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label> --}}

                        <input id="name" type="text" placeholder="Name" class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        {{-- <label for="email"
                            class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none">
                            {{ __('E-Mail Address') }}:
                        </label> --}}

                        <input id="email" type="email" placeholder="Email Address"
                            class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        {{-- <label for="password"
                            class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none">
                            {{ __('Password') }}:
                        </label> --}}

                        <input id="password" placeholder="Password" type="password"
                            class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none @error('password') border-red-500 @enderror"
                            name="password" required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        {{-- <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label> --}}

                        <input id="password-confirm" type="password" placeholder="Confirm Your Password" class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>


                    <div class="flex items-center">
                        <label
                            class="inline-flex items-center text-sm text-red-500 hover:text-red-800 font-medium tracking-wide"
                            for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{
                                old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                        <div class="form-group row">

                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full px-6 py-3 rounded-xl bg-red-500 transition hover:bg-red-600 focus:bg-red-600 active:bg-red-800">
                            <span class="font-semibold text-white text-lg">{{ __('Register') }}</span>
                        </button>

                        @if (Route::has('login'))
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __("Already have an existing account?") }}
                            <a class="text-red-500 hover:text-red-800 font-medium tracking-wide"
                                href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>
@endsection
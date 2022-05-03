@extends('layouts.app')

@section('content')

<body>
    {{-- <header>
        {{ __('Login') }}
    </header> --}}
    <div class="1xl:container m-auto">
        <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block">
        </div>
        <div class="relative h-full ml-auto">
            <div class="m-auto py-2 px-2 sm:p-20 xl:w-6/12">


                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <a href="{{ route('login.github') }}"
                        class="py-4 px-6 rounded-xl bg-blue-400 transition hover:bg-blue-300 active:bg-blue-200 focus:bg-blue-200">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                viewBox="0 0 48 48" style=" fill:#000000;">
                                <path fill="#FFC107"
                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                </path>
                                <path fill="#FF3D00"
                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                </path>
                                <path fill="#4CAF50"
                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                </path>
                                <path fill="#1976D2"
                                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                </path>
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Google</span>
                        </div>
                    </a>
                    <a href="{{ route('login.github') }}"
                        class="py-4 px-6 rounded-xl bg-gray-900 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Github</span>
                        </div>

                    </a>
                </div>

                <div role="hidden" class="mt-12">
                    <span class="block w-max mx-auto -mt-3 px-4 text-center text-red-500 hover:text-red-800 font-medium tracking-wide">Or</span>
                </div>

                <form class="space-y-6 py-6" method="POST" action="{{ route('login') }}">
                    @csrf

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


                    <div class="flex items-center">
                        <label
                            class="inline-flex items-center text-sm text-red-500 hover:text-red-800 font-medium tracking-wide"
                            for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{
                                old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-red-500 hover:text-red-800 font-medium tracking-wide ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                        <div class="form-group row">

                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full px-6 py-3 rounded-xl bg-red-500 transition hover:bg-red-600 focus:bg-red-600 active:bg-red-800">
                            <span class="font-semibold text-white text-lg">{{ __('Login') }}</span>
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __("Don't have an account?") }}
                            <a class="text-red-500 hover:text-red-800 font-medium tracking-wide"
                                href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
@endsection
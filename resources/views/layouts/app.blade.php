<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DKIT Gaming</title>

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon"
        href="data:image/jpeg;base64,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">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&family=League+Gothic&family=Rubik+Puddles&display=swap"
        rel="stylesheet">


    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-red-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                          </svg>
                    </a>
                </div>
                <nav class="space-x-4 text-red-300 text-sm sm:text-base">
                    <a class="tracking-widetext-white hover:text-white font-medium" href="/">Home</a>
                    <a class="tracking-widetext-white hover:text-white font-medium" href="/blog">Blog</a>
                    @guest
                    <a class="tracking-widetext-white hover:text-white font-medium" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="tracking-widetext-white hover:text-white font-medium" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <a class="tracking-widetext-white hover:text-white font-medium" href="/my-profile">{{ Auth::user()->name }}
                    </a>
                    <a href="{{ route('logout') }}" class="tracking-widetext-white hover:text-white font-medium" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
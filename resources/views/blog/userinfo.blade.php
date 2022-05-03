@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="py-12 h-screen bg-gray-300">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-md">
                <div class="md:flex">
                    <div class="w-full p-2 py-10">

                        <div class="flex justify-center">
                            <span class="text-2xl font-medium">Profile Picture</span>
                        </div>
                        <div class="flex justify-center">
                            <img src="./images/githubinspiredpp.png" width="80" alt="">
                        </div>
                        <div class="flex flex-col text-center mt-3 mb-4">

                            <span class="text-2xl font-medium">My Profile Page</span>
                        </div>
                        <div class="flex flex-col text-center mt-3 mb-4">

                            <span class="text-2xl font-medium">Name</span>
                            <input type="text" class="text-md text-gray-400 text-center"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="flex flex-col text-center mt-3 mb-4">

                            <span class="text-2xl font-medium">Email</span>
                            <input type="text" class="text-md text-gray-400 text-center"
                                value="{{ Auth::user()->email }}">
                        </div>
                        <div class="flex flex-col text-center mt-3 mb-4">
                            <label class="text-2xl font-medium" for=""> About Me </label>
                            <p class="text-md text-gray-400 text-center">{{ Auth::user()->about }}</p>
                        </div>
                        <div class="flex flex-col text-center mt-3 mb-4">
                            <label class="text-2xl font-medium" for="">Recent update</label>
                            <h1 class="text-md text-gray-400 text-center">{{ Auth::user()->updated_at }}</h1>
                        </div>
                        <div class="flex flex-col text-center mt-3 mb-4">
                            <label class="text-2xl font-medium" for="">Created On</label>
                            <h1 class="text-md text-gray-400 text-center">{{ Auth::user()->created_at }}</h1>
                        </div>
                    </div>

                </div>
            </div>

        </div>
</section>
@endsection
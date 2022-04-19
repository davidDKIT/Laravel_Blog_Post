@extends('layouts.app')

@section('content')
<div id="carouselExampleDark" class="carousel carousel-dark slide text-center py-4 " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <a href="https://kotaku.com/rplace-reddit-april-fools-elden-ring-hollow-knight-word-1848747948">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/ca51e06c966a0fc2865026659b865b82.jpg"  class="d-block w-70 h-90 p-2 mx-auto" alt="...">
    </a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="slideshow">Reddit Is Hosting What May Be The Internet's Most Wholesome Fan War</h5>
          <p>Gaming fandoms band together to protect their pixel art in r/place</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <a href ="https://kotaku.com/lego-star-wars-skywalker-saga-review-kotaku-ps5-xbox-tt-1848746867">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/b630506cf871c5859909299c47e1a388.jpg" class="d-block w-70 h-90 p-2 mx-auto" alt="...">
      </a>
            <div class="carousel-caption d-none d-md-block">
          <h5 class="slideshow_text">Lego Star Wars: The Skywalker Saga: The Kotaku Review</h5>
          <p class="slideshow_text">This isn’t the first time Lego and Star Wars have been digitally combined, but it’s easily the best</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/adc5333205f95785c9ecf1192ae30dee.jpg">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/adc5333205f95785c9ecf1192ae30dee.jpg" class="d-block w-70 h-90 p-2 mx-auto" alt="...">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h5>Monkey Island Returns With A New Game From Original Creators Later This Year</h5>
          <p>Ron Gilbert, David Grossman are back after more than 30 years away from the classic Lucasfilm adventure franchise</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <div class="text-center py-0">
        <h2 class="text-4xl font-bold py-2">
            Announcement
        </h2>
        <div class="container">
            <div class="row">
              <div class="col">
                Announcement1
              </div>
              <div class="col order-12">
                Announcement2
              </div>
              <div class="col order-1">
                Announcement3
              </div>
            </div>
          </div>
    </div>
    <div class="text-center py-0">
        <h2 class="text-4xl font-bold py-2">
            Recent Post
        </h2>
        <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
              <p class="text-gray-600 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class="px-6 py-4">
              <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 mr-2">#photography</span>
              <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 mr-2">#travel</span>
              <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600">#winter</span>
            </div>
          </div>
    </div>
    
@endsection
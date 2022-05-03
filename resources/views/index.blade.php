@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Inspiring users across the world
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
          <div id="carouselExampleDark" class="carousel carousel-dark slide text-center py-4 " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <a href="https://kotaku.com/rplace-reddit-april-fools-elden-ring-hollow-knight-word-1848747948">
                <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/ca51e06c966a0fc2865026659b865b82.jpg"  class="d-block w-70 h-90 p-2 mx-auto" width="700" alt="...">
            </a>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <a href ="https://kotaku.com/lego-star-wars-skywalker-saga-review-kotaku-ps5-xbox-tt-1848746867">
                <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/b630506cf871c5859909299c47e1a388.jpg" class="d-block w-70 h-90 p-2 mx-auto" width="700" alt="...">
              </a>
              </div>
              <div class="carousel-item">
                <a href="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/adc5333205f95785c9ecf1192ae30dee.jpg">
                <img src="https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,pg_1,q_60,w_965/adc5333205f95785c9ecf1192ae30dee.jpg" class="d-block w-70 h-90 p-2 mx-auto" width="700" alt="...">
                </a>
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
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to dive deeper into the gaming world?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Let's take a closer look!
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
              In simplistic terms: A person who actively seeks out and plays games. I think most people will not define a person who only plays facebook or mobile games as a "gamer". Unfortunately the term brings with it a lot of elitism, which excludes people who does not care about the community or the knowledge behind the games.            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-red-800 text-white">
        <span class="font-extrabold block text-4xl py-5">
            Quotes from gamers
        </span>
        
        <h2 class="text-2xl pb-5 text-l"> 
            I'm not a player. I'm a gamer. 
        </h2>

        <h2 class="text-2xl pb-5 text-l"> 
            Home is where you are 'Player 1'.
        </h2>
        <h2 class="text-2xl pb-5 text-l"> 
            Failure doesn't mean the game is over, it means try again with experience.
        </h2>

        <h2 class="text-2xl pb-5 text-l"> 
            Education is important, but video games are importanter.
        </h2>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            More
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Videos
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Games don't make you violent, lag does.  </p>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7">
            <div class="embed-responsive embed-responsive-16by9 mbl-video">
                <a href="#"><i class="fa fa-play-circle-o fa-4x centered"></i></a>
<iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/HLLofrwRlBg" frameborder="0" allowfullscreen></iframe>
          </div>
            </div>
          <div class="col-sm-12 col-md-5">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to dive deeper into the gaming world?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Let's take a closer look!
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
              In simplistic terms: A person who actively seeks out and plays games. I think most people will not define a person who only plays facebook or mobile games as a "gamer". Unfortunately the term brings with it a lot of elitism, which excludes people who does not care about the community or the knowledge behind the games.            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
          </div>
        </div>
        
        <!--<div class="modal fade myModal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
           <div class="modal-content">
             <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/RtNuwdOTkvw?rel=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div-->
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class ="container">
        <div class ="row">
            <div class = "col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="h4">My Profile Page</p>
                        <hr>
                        <form action="" method="post">
                            <div class="col-md-4">
                                <div class ="form-group">
                                    <img src="{{ Auth::user()->image }}" class="w-75" alt="">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class ="form-group">
                                <label class="h3" for=""> Name: </label>
                                <input type ="text" class = "form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                            <div class="col-md-4">
                            <div class ="form-group">
                                <label class="h3" for=""> Email  </label>
                                <input type ="text" class = "form-control" value="{{ Auth::user()->email     }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class ="form-group">
                                    <label class="h3" for=""> About Me  </label>
                                    <p class="font-weight-bold" >{{ Auth::user()->about     }}</p>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class ="form-group">
                                <label class="h3" for="">Created On  </label>
                                <h1 >{{ Auth::user()->created_at     }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class ="form-group">
                                <label class="h3" for="">Recent update</label>
                                <h1 >{{ Auth::user()->updated_at }}</h1>
                            </div>
                        </div>
                    </div>


                        </form>    
                    </div>   
                </div> 
            </div> 
        </div> 
    </div> 
</section>                     
@endsection 
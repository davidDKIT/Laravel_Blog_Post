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
                        <form action="">
                            <div class="col-md-4">
                            <div class ="form-group">
                                <label class="h3" for=""> Name: </label>
                                <input type ="text" class = "form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                            <div class="col-md-4">
                            <div class ="form-group">
                                <label class="h3" for=""> E-mail  </label>
                                <input type ="text" class = "form-control" value="{{ Auth::user()->email     }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class ="form-group">
                                <label class="h3" for=""> Your profile updated </label>
                                <button type ="submit" class = "btn btn-primary">Update Profile</button>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class ="form-group">
                                <img src="{{ asset('images/user.png') }}" class="w-75" alt="">
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
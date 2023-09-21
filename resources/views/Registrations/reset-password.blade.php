
@extends('Registrations.authLayout');

@section('main-content')
 
    <!-- Sign In Start -->
    <div class="container-fluid">
        <form action="{{route('forgot.check.email')}}" method="POST">
        @csrf
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Reset Password </h3>
                        </a>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="email" name="useremail" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sent email</button>
                    <p class="text-center mb-0"> <- Back to
                        <a href="{{Route('register')}}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Sign In End -->    
@endsection

@section('title')
    User Login
@endsection
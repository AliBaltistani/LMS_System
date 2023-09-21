
@extends('Registrations.authLayout');

@section('main-content')
 
    <!-- Sign In Start -->
    <div class="container-fluid">
        <form action="" method="POST">
        @csrf
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>New Password</h3>
                        </a>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="npassword" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">New Password</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="cpassword" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Update</button>
                    <p class="text-center mb-0">Go Back
                        <a href="{{Route('register')}}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Sign In End -->    
@endsection

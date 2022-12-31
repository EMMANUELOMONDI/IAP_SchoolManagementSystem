@extends('layouts.login_master')

@section('content')
    <div class="page-content class=" bg-image
  style="
    background-image: url('https://www.teahub.io/photos/full/17-170233_library-background-image-hd.jpg');
    height: 100vh;
  "
>

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center mb-4">


                <!-- Login card -->
                <form class="login-form " method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card rounded-3 text-black border-light border-2">
                        <div class="card-body border-brown-400 border-2 ">
                          
                            <div class="text-center mb-4">
                                
                                <h1 class="mb-4 text-dark font-weight-bold">Account Login</h1>
                                <span class="text-dark font-weight-bold">Please Enter Your Details</span>
                            </div>

                                @if ($errors->any())
                                <div class="alert alert-danger alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <span class="font-weight-semibold">Oops!</span> {{ implode('<br>', $errors->all()) }}
                                </div>
                                @endif


                            <div class="form-group ">
                                <input type="text" class="form-control" name="identity" value="{{ old('identity') }}" placeholder=" Your Username: ">
                            </div>

                            <div class="form-group ">
                                <input required name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">

                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label text-dark">
                                        <input type="checkbox" name="remember" class="form-input-styled" {{ old('remember') ? 'checked' : '' }} data-fouc>
                                        Remember
                                    </label>
                                </div>

                                <a href="{{ route('password.request') }}" class="ml-auto text-brown">Forgot password?</a>
                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-lg btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

                           {{-- <div class="form-group">
                                <a href="#" class="btn btn-light btn-block"><i class="icon-home"></i> Back to Home</a>
                            </div>--}}


                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
    @endsection

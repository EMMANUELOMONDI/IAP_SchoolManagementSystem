@extends('layouts.login_master')

@section('content')
   <div class="page-content class=" bg-image
  style="
    background-image: url('https://www.teahub.io/photos/full/17-170233_library-background-image-hd.jpg');
    height: 100vh;
  "
>


        <div class="content-wrapper">
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Password recovery form -->
        <form class="login-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card mb-0 border-dark">
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if ($errors->has('email'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('email') }}
                            </div>
                        @endif

                    <div class="text-center mb-3">
                       
                        <h3 class="mb-1 text-dark font-weight-bold">Lost your Password? </h3>
                        <span class="text-dark font-weight-bold">Enter you email to recieve instrictions</span>
                    </div>

                    <div class="form-group ">
                        <input name="email" required type="email" class="form-control" value="{{ old('email') }}" placeholder="Your email">
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg btn-block"> Reset password</button>
                </div>
            </div>
        </form>
        <!-- /password recovery form -->

    </div>
    </div>
    </div>
@endsection

{{-- bikin login sendiri --}}

@extends('layouts.app')
@section('content')


<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>LOGIN</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
          <center>
              <img src="{{ url ('image/remove.png') }}" width="100px">
          </center>
        <p class="login-box-msg">Silahkan Login</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12" style="display: flex; align-items: center; justify-content: end; height: 30px;">
                    <a style="font-weight: bold; color: #427BFF;" href="{{ route('password.request') }}">Forgot Password</a>
                </div>
            </div>
          <div class="row">
            <div class="col md-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

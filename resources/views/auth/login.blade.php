@extends('layouts.master')

@section('content')
    <div class="login-page">
        <div class="login-content">
            <h1 class="text-center">
                Log In
            </h1>
            <div class="login-form">
                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Your Password">
                    </div>
                    <input type="submit" class="btn btn-info btn-submit" value="Log In">
                </form>
            </div>
        </div>
    </div>
@endsection
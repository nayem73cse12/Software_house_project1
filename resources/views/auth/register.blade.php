@extends('layouts.master')

@section('content')
    <div class="login-page">
        <div class="login-content">
            <h1 class="text-center">
                Registration
            </h1>
            <div class="login-form">
                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Your Name">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Your Password">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Password Confirmation">
                    </div>

                    <input type="submit" class="btn btn-info btn-submit" value="Register">
                </form>
            </div>
        </div>
    </div>
@endsection
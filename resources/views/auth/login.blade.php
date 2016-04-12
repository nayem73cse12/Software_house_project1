<!DOCTYPE html>
<html>
    <head>
        <title>1st Project</title>
        <style type="text/css" href="/bootstrap/bootstrap.min.css"></style>
        {!! Html::style('bootstrap/css/bootstrap.min.css') !!}

        {!! Html::script('bootstrap/js/jquery.js') !!}
    </head>

    <body>
        <!-- resources/views/auth/login.blade.php -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form class="" method="POST" action="/auth/login">
                        {!! csrf_field() !!}
                        <div class="input-group">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email">
                        </div>
                        
                        <div class="input-group">
                            <input type="password" name="password" id="password" placeholder="Your Password">
                        </div>
                        <input type="submit" class="btn btn-info" value="Log In">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

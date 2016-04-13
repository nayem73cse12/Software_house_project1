@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="">
            <div class="">
                <h1 class="text-center">
                    Form 1
                </h1>
                <div class="">
                    <form method="post" action="/form1">
                        <div class="form-group">
                            {{ Form::label('qstn1', 'How are you?') }} <br>
                            {{ Form::radio('qstn1', 'Good') }} Good <br>
                            {{ Form::radio('qstn1', 'VeryGood') }} VeryGood <br>
                            {{ Form::radio('qstn1', 'Medium') }} VeryGood <br>
                            {{ Form::radio('qstn1', 'Bad') }} Bad <br>
                            {{ Form::radio('qstn1', 'VeryBad') }} Very Bad <br>
                        </div>
                        <div class="form-group">
                            <label for="qstn1">How are you?</label>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="option1" id="option1" value="option1"> Good
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="option1" id="option1" value="option1"> Good
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="option1" id="option1" value="option1"> Good
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="option1" id="option1" value="option1"> Good
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="option1" id="option1" value="option1"> Good
                                </label>
                            </div>
                        </div>
                            

                        <div class="row">
                            <div class="col-md-6">
                                <a href="localhost:8000/auth/login" class="btn btn-info back-btn">Back</a>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-info btn-submit" value="Next">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
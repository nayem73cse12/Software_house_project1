@extends('layouts.master')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <h1 class="text-center">
            Form 1
        </h1>
        <div class="question-form1">
            <form method="post" action="/form1">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1">1.</div>
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="qstn1">How are you?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="option1" id="qstn1" value="very_good"> Very Good
                                        </label>
                                    </div>

                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="option2" id="qstn1" value="good"> Good
                                        </label>
                                    </div>

                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="option3" id="qstn1" value="bad"> Bad
                                        </label>
                                    </div>

                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="option4" id="qstn1" value="very_bad"> Very Bad
                                        </label>
                                    </div>

                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="option5" id="qstn1" value="neutral"> Neutral
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
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
@endsection
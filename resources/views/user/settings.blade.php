@extends('layouts.master')

@section('title')
  <title> Hospital - Settings Page </title>
@endsection

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>settings</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">settings</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="register-box col-xs-12">
            <div class="container">
                <div class="register-inner">
                    <h3>profile setting form</h3>
                    <form action="/user/edit" method="post">
                      {{ csrf_field() }}
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="fullname">full-name</label>
                            <input type="text" id="fullname" name="name" value="{{Auth::user()->name}}" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="birth">birth date</label>
                            <input type="date" id="birth"name="birth_date" value="{{date(Auth::user()->birth_date)}}" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="email">email address</label>
                            <input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="pass">password</label>
                            <input type="password" id="pass" name="password" class="form-control">
                        </div>
                        @if(Auth::user()->Doctor)
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="bio">bio</label>
                            <textarea class="form-control" name="bio" id="bio">{{Auth::user()->Doctor->bio}}</textarea>
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="exp_years">exprience years</label>
                            <input type="text" id="exp_years" name="exp_years" value="{{Auth::user()->Doctor->exp_years}}" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="office_address">office address</label>
                            <input type="text" id="office_address" name="office_address" value="{{Auth::user()->Doctor->office_address}}" class="form-control">
                        </div>
                      @endif
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="no_ph">NO.phone</label>
                            <input type="text" id="no_ph" name="phone_number" value="{{Auth::user()->phone_number}}" class="form-control">
                        </div><div class="form-group col-md-12 col-xs-12">
                                <input type="text" placeholder="www.facebook.com/userID" name="fb_link" value="{{Auth::user()->fb_link}}" class="form-control social-links">
                                <i class="zmdi zmdi-facebook"></i>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="text" placeholder="www.twitter.com/userID" name="tw_link" value="{{Auth::user()->tw_link}}" class="form-control social-links">
                                <i class="zmdi zmdi-twitter"></i>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="text" placeholder="www.linkedin.com/userID" name="linkedin_link" value="{{Auth::user()->linkedin_link}}" class="form-control social-links">
                                <i class="zmdi zmdi-linkedin"></i>
                            </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="full_address">address</label>
                            <textarea class="form-control" name="address" id="full_address">{{Auth::user()->address}}</textarea>
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <input type="submit" value="save" class="btn">
                            <input type="reset" onclick="location.href = '/';" value="cancel" class="btn btn-cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

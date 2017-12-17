@extends('layouts.master')
@section('title')

@endsection
@section('content')
  <div class="public-jumptron col-xs-12">
              <div class="container">
                  <div class="jump-inner col-xs-12">
                      <h2>signup</h2>
                      <ol class="breadcrumb">
                          <li><a href="/">Home</a></li>
                          <li class="active">signup</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="register-box col-xs-12">
              <div class="container">
                  <div class="register-inner">
                      <h3>registeration form</h3>
                      <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="fullname">full-name</label>
                              <input type="text" id="fullname" name="name"  class="form-control" value="{{ old('name') }}" required autofocus>
                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="birth">birth date</label>
                              <input type="date" id="birth_date" name="birth_date" value="{{old('birth_date')}}" required  class="form-control">
                              @if ($errors->has('birth_date'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('birth_date') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="email">email address</label>
                              <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control">
                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="pass">password</label>
                              <input type="password" id="pass" name="password" class="form-control" required>
                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="pass_confirm">retype password</label>
                              <input type="password" id="pass_confirm" name="password_confirmation" required class="form-control">
                              @if ($errors->has('password_confirmation'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="position-role col-xs-12">
                              <h4>position</h4>
                              <div class="form-group col-md-4 col-xs-12">
                                  <input type="radio" name="role" value="doctor" id="doc">
                                  <label for="doc">doctor</label>
                              </div>
                              <div class="form-group col-md-4 col-xs-12">
                                  <input type="radio" name="role" value="receptionist" id="recp">
                                  <label for="recp">receptionist</label>
                              </div>
                              <div class="form-group col-md-4 col-xs-12">
                                  <input type="radio" name="role" value="patient" id="patient">
                                  <label for="patient">patient</label>
                              </div>
                          </div>
                          <div class="doc-role col-xs-12">
                              <div class="form-group col-md-12 col-xs-12">
                                  <label for="pos">position</label>
                                  <select class="form-control" name="position" id="pos">
                                      <option value="pediatrist">pediatrist</option>
                                      <option value="therapist">therapist</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-12 col-xs-12">
                                  <label for="expr">experience</label>
                                  <input type="text" id="expr" class="form-control" name="exp_years" placeholder="ex: 4 years">
                              </div>
                              <div class="form-group col-md-12 col-xs-12">
                                  <label for="of_address">office address</label>
                                  <input type="text" id="of_address" name="office_address" class="form-control">
                              </div>
                              <div class="form-group col-md-12 col-xs-12">
                                  <label for="work_days">work days</label>
                                  <input type="text" id="work_days" class="form-control" name="work_days" placeholder="ex: monday to friday">
                              </div>
                          </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="no_ph">NO.phone</label>
                              <input type="text" id="no_ph" text="phone_number" name="phone_number" required class="form-control">
                          </div><div class="form-group col-md-12 col-xs-12">
                                  <input type="text" placeholder="www.facebook.com/userID" name="fb_link" class="form-control social-links">
                                  <i class="zmdi zmdi-facebook"></i>
                              </div>
                              <div class="form-group col-md-12 col-xs-12">
                                  <input type="text" placeholder="www.twitter.com/userID" name="tw_link" class="form-control social-links">
                                  <i class="zmdi zmdi-twitter"></i>
                              </div>
                              <div class="form-group col-md-12 col-xs-12">
                                  <input type="text" placeholder="www.linkedin.com/userID" name="linkedin_link" class="form-control social-links">
                                  <i class="zmdi zmdi-linkedin"></i>
                              </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <label for="full_address">address</label>
                              <textarea class="form-control" name="address" id="full_address"></textarea>
                          </div>
                          <div class="form-group col-md-12 col-xs-12">
                              <input type="submit" value="signup" class="btn">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
@endsection

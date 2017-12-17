@extends('layouts.master')

@section('content')
  <div class="error-box col-xs-12">
            <div class="container">
                <div class="inner">
                    <h3>404</h3>
                    <p>oops! not find the page you are looking for, please check your search characters.if the problem persists, please send us an email to <a href="mailto:Help.Hospital@Gmail.Com">Help.Hospital@Gmail.Com</a></p>
                    <form action="/search" method="get">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="kw" placeholder="what are you looking for ?" class="form-control">
                            <input type="submit" class="btn" value="search">
                        </div>
                    </form>
                </div>
            </div>
            <img src="/images/img-13.jpg" alt="">
        </div>
@endsection

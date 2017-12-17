@extends('layouts.master')

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>Search Results</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Search Results</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="team-box col-xs-12">
            <div class="container">
              @foreach ($results as $result)
                <div class="block col-md-4 col-sm-6 col-xs-12">
                    <div class="t-item">
                        <div class="t-img">
                            <img src="{{$result->prof_img}}" alt="">
                        </div>
                        <div class="t-data">
                            <h3>
                                <a href="/user/{{$result->id}}">{{$result->name}}</a>
                            </h3>
                            <span>{{$result->title}}</span>
                            <p>{{$result->desc}}</p>
                            <div class="t-social">
                                <ul>
                                    <li>
                                        <a href="{{$result->fb_link}}">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$result->tw_link}}">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$result->linkedin_link}}">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

              @endforeach



            </div>
        </div>
@endsection

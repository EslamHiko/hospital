@extends('layouts.master')

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>our team</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">our team</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="team-box col-xs-12">
            <div class="container">
              @foreach ($teamMembers as $member)

                <div class="block col-md-4 col-sm-6 col-xs-12">
                    <div class="t-item">
                        <div class="t-img">
                            <img src="{{$member->img_path}}" alt="">
                        </div>
                        <div class="t-data">
                            <h3>
                                <a href="/member/{{$member->id}}">{{$member->name}}</a>
                            </h3>
                            <span>{{$member->title}}</span>
                            <p>{{$member->desc}}</p>
                            <div class="t-social">
                                <ul>
                                    <li>
                                        <a href="{{$member->fb_link}}">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$member->tw_link}}">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$member->linkedin_link}}">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

              @endforeach


                <div class="more-doc col-xs-12">
                    <a href="#">view our team</a>
                </div>
            </div>
        </div>
@endsection

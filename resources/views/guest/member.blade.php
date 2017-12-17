@extends('layouts.master')

@section('title')
  <title> Hospital - {{$doctor->name}} </title>
@endsection

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>dr.{{$doctor->name}}</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">dr.{{$doctor->name}}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="profile-box col-xs-12">
            <div class="container">
                <div class="profile-img col-md-3 col-xs-12">
                    <div class="img-outer">
                      <form enctype="multipart/form-data" files="true" action="/user/prof-img" method="post">
                        {{ csrf_field() }}
                        <a href="#" onclick="$('#my_file').click()"><img src="{{$doctor->img_path}}" alt=""></a>
                        <input type="file" name="prof-img" onchange="this.form.submit();" id="my_file" style="display: none;" />
                      </form>
                    </div>
                    <div class="img-social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end profile-img -->
                <div class="profile-data col-md-9 col-xs-12">
                    <div class="data-left col-md-6 col-xs-12">
                        <h3>hello & welcome</h3>
                        <ul>
                            <li>
                                <small>full name:</small>

                            </li>

                        </ul>
                        <ul class="sec-list">
                            <li>
                                <span>{{$doctor->name}}</span>
                            </li>

                        </ul>
                    </div>

                <div class="profile-content col-xs-12">

                    <div class="content-form col-md-6 col-xs-12">
                        <h3>have a questions !</h3>
                        <form action="/doctormsg" method="post">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" name="first_name" placeholder="first name" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" name="last_name" placeholder="first name" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="email" name="email" placeholder="email address" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <textarea name="msg" placeholder="write message" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="submit" value="send" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="team col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>meet our doctor and his professional staff</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="team-slider col-xs-12">
                  @foreach ($teamMembers as $member)
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

                @endforeach
                </div>
            </div>
        </div>
        <div id="education-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Education</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <form action="/addEducation" method="POST">
                          {{ csrf_field() }}

                            <div class="form-group col-md-12 col-xs-12">
                                <label for="forget_mail">Title</label>
                                <input type="text" id="forget_mail" name="title" value="" class="form-control">

                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="forget_mail">Year</label>
                                <input type="text" id="forget_mail" name="year" value="" class="form-control">

                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="forget_mail">Type</label>
                                <input type="text" id="forget_mail" name="type" value="" class="form-control">

                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="forget_mail">University</label>
                                <input type="text" id="forget_mail" name="university" value="" class="form-control">

                            </div>

                            <div class="form-group col-md-12 col-xs-12">
                                <input type="submit" value="Add" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

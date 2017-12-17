@extends('layouts.master')

@section('title')
  <title> Hospital - {{Auth::user()->name}} </title>
@endsection

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>dr.{{Auth::user()->name}}</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">{{Auth::user()->name}}</li>
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
                        <a href="#" onclick="$('#my_file').click()"><img src="{{Auth::user()->prof_img}}" alt=""></a>
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
                            <li>
                                <small>birthday:</small>

                            </li>
                            @if(Auth::user()->Doctor)
                            <li>
                                <small>position:</small>

                            </li>
                            <li>
                                <small>experiences</small>

                            </li>
                            <li>
                                <small>office:</small>

                            </li>
                            <li>
                                <small>work days:</small>

                            </li>
                          @endif
                            <li>
                                <small>NO.phone:</small>

                            </li>
                            <li>
                                <small>email:</small>

                            </li>
                            <li>
                                <small>address:</small>

                            </li>
                        </ul>
                        <ul class="sec-list">
                            <li>
                                <span>{{Auth::user()->name}}</span>
                            </li>
                            <li>
                                <span>{{date('F j, Y',strtotime(Auth::user()->birth_date))}}</span>
                            </li>
                            @if(Auth::user()->Doctor)
                            <li>
                                <span>{{Auth::user()->Doctor->position}}</span>
                            </li>
                            <li>
                                <span>{{Auth::user()->Doctor->exp_years}}</span>
                            </li>
                            <li>
                                <span>{{Auth::user()->Doctor->office_address}}</span>
                            </li>
                            <li>
                                <span>{{Auth::user()->Doctor->work_days}}</span>
                            </li>
                          @endif
                            <li>
                                <span>{{Auth::user()->phone_number}}</span>
                            </li>
                            <li>
                                <span>{{Auth::user()->email}}</span>
                            </li>
                            <li>
                                <span>{{Auth::user()->address}}</span>
                            </li>
                        </ul>
                    </div>
                    @if(Auth::user()->Doctor)
                    <div class="data-right col-md-6 col-xs-12">
                        <h3>education</h3>


                      @foreach (Auth::user()->Education as $E)
                        <div class="ed-item col-xs-12">
                            <p>
                                <span>{{$E->type}}</span>
                                <span>{{$E->year}}</span>
                            </p>
                            <h4>{{$E->title}}</h4>
                            <p class="desc">{{$E->university}}</p>
                        </div>
                      @endforeach
                      <br>
                      @if(isset($myProfile))
                        <a href="javascript:void(0)" data-target="#education-modal" data-toggle="modal">
                        <div class="text-center col-xs-12">
                            <p>Add Education</p>
                        </div>
                        </a>
                      @endif
                    </div>
                  @endif
                </div>
                @if(Auth::user()->Doctor || Auth::user()->role == "receptionist")
                <div class="profile-content col-xs-12">
                  @if(Auth::user()->Doctor)
                    <div class="content-intro col-md-6 col-xs-12">
                        <h3>bio</h3>
                        <p>{{Auth::user()->Doctor->bio}}</p>
                    </div>
                  @endif
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
              @endif
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
                                        <a href="/team/{{$member->id}}">{{$member->name}}</a>
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

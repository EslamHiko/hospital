@extends('admin.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>General Settings
          <small>Here You Can Set Your Settings
          </small>
      </h2>
      <hr>
      <div class="row">
        @foreach ($teamMembers as $member)
          <div class="card profile-view col-sm-4">
                                      <div class="pv-header">
                                          <img src="{{$member->img_path}}" class="pv-main" alt="">
                                      </div>

                                      <div class="pv-body">
                                          <h2>{{$member->name}}</h2>
                                          <h4><small>{{$member->title}}</small></h4>
                                          <small>{{$member->desc}}
                                          </small>
                                          <ul class="pv-contact">
                                              <li><a href="{{$member->fb_link}}"><i class="zmdi zmdi-facebook"></i> </a></li>
                                              <li><a href="{{$member->tw_link}}"><i class="zmdi zmdi-twitter"></i> </a></li>
                                              <li><a href="{{$member->linkedin_link}}"><i class="zmdi zmdi-linkedin"></i> </a></li>
                                          </ul>
                                          <form id="form" action="/admin/remove" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$member->id}}">
                                            <a href="#" onclick="$('#form').submit();" class="pv-follow-btn btn-danger">Remove</a>
                                          </form>
                                      </div>
                                  </div>
        @endforeach
      </div>
      <a href="javascript:void(0)" data-target="#add-team" data-toggle="modal" style="" class="btn btn-success waves-effect">Add</a>

    </div>
  </div>
  <div id="add-team" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content col-xs-12">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Team Member</h4>
              </div>
              <div class="modal-body col-xs-12">
                  <form action="/admin/addMember" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="control-label">Select Photo</label>
                        <input id="input-1" name="img" type="file" class="file">
                      </div>
                  </div>
                </div>
                <br>
                <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <div class="fg-line">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  </div>
              </div>
            </div>
            <br>
            <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
              <div class="fg-line">
                <input type="text" name="title" class="form-control" placeholder="Job Title">
              </div>
              </div>
          </div>
        </div>
            <br>
            <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
              <div class="fg-line">
                <textarea rows="10" type="text" name="description" class="form-control" placeholder="Description"></textarea>
              </div>
              </div>
            </div>
          </div>
        <br>

    <div class="row">

    <div class="col-sm-12">
      <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-facebook"></i></span>
      <div class="fg-line">
        <input type="text" name="fb_link" class="form-control" placeholder="Facebook">
      </div>
      </div>
  </div>
</div>
  <br>
  <div class="row">

  <div class="col-sm-12">
    <div class="input-group">
      <span class="input-group-addon"><i class="zmdi zmdi-twitter"></i></span>
    <div class="fg-line">
      <input type="text" name="tw_link" class="form-control" placeholder="Twitter">
    </div>
    </div>
</div>
</div>
<br>
<div class="row">

<div class="col-sm-12">
  <div class="input-group">
    <span class="input-group-addon"><i class="zmdi zmdi-linkedin"></i></span>
  <div class="fg-line">
    <input type="text" name="linkedin_link" class="form-control" placeholder="Linked In">
  </div>
  </div>
</div>
</div>
<br>
              <br>
                      <div class="form-group col-md-12 col-xs-12">
                          <input type="submit" value="Add" class="btn">
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

@endsection

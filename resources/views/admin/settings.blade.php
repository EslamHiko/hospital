@extends('admin.master')

@section('content')
  <form action="/admin/generalSettings" method="post">
  {{ csrf_field() }}
  <div class="card">
    <div class="card-header">
      <h2>General Settings
          <small>Here You Can Set Your Contact Info
          </small>
      </h2>
      <hr>
      <div class="row">

      <div class="col-sm-12">
        <div class="input-group">
          <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
        <div class="fg-line">
          <input type="text" name="address" class="form-control" value="{{$home_address}}" placeholder="Address">
        </div>
        </div>
    </div>
  </div>
    <br>
    <div class="row">

      <div class="col-sm-12">
        <div class="input-group">
          <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
          <div class="fg-line">
            <textarea rows="3" type="text" name="email" class="form-control" placeholder="emails">{{implode(PHP_EOL,$home_email)}}</textarea>
          </div>
        </div>
      </div>
    </div>
      <br>
      <div class="row">

      <div class="col-sm-12">
        <div class="input-group">
          <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
        <div class="fg-line">
          <textarea rows="3" type="text" name="phones" class="form-control" placeholder="Phones">{{implode(PHP_EOL,$home_phones)}}</textarea>
        </div>
        </div>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-sm-12">
        <div class="input-group">
          <span class="input-group-addon"><i class="zmdi zmdi-link"></i></span>
        <div class="fg-line">
          <textarea rows="5" type="text" name="links" class="form-control" placeholder="Links">{{implode(PHP_EOL,$home_links)}}</textarea>
        </div>
        </div>
      </div>
    </div>
    <br>
    <h2><small>Here You Can Set Your Social Links
    </small>
    </h2>
    <hr>
    <div class="row">

    <div class="col-sm-12">
      <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-facebook"></i></span>
      <div class="fg-line">
        <input type="text" name="fb_link" value="{{$home_fb}}" class="form-control" placeholder="Facebook Link">
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
      <input type="text" name="tw_link" value="{{$home_tw}}" class="form-control" placeholder="Twitter Link">
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
    <input type="text" name="linkedin_link" value="{{$home_linked}}" class="form-control" placeholder="LinkedIn Link">
  </div>
  </div>
</div>
</div>
<br>
<div class="row">

<div class="col-sm-12">
  <div class="input-group">
    <span class="input-group-addon"><i class="zmdi zmdi-skype"></i></span>
  <div class="fg-line">
    <input type="text" name="skype_link" value="{{$home_skype}}" class="form-control" placeholder="Skype Link">
  </div>
  </div>
</div>
</div>
<br>
    <div class="row">
      <div class="col-sm-12">
        <div class="input-group">
          <button type="submit" style="margin-left:25px;" class="btn btn-primary waves-effect">Save</button>
        </div>
      </div>
    </div>
      <br>

    </div>
  </div>
</form>
@endsection

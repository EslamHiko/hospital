@extends('admin.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>Services
          <small>Here You Can Set Your Services
          </small>
      </h2>
      <hr>
      <div class="row">
        @foreach ($services as $service)
          <div class="col-sm-4">
                <div class="card">
                    <div class="card-header bgm-bluegray">
                        <h2>{{$service->title}}
                        </h2>
                    </div>
                    <div class="card-body card-padding">
                      {{$service->desc}}
                    </div>
                </div>
            </div>
        @endforeach
      </div>
      <a href="javascript:void(0)" data-target="#add-service" data-toggle="modal" style="" class="btn btn-success waves-effect">Add</a>
    </div>
  </div>
  <div id="add-service" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content col-xs-12">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Service</h4>
              </div>
              <div class="modal-body col-xs-12">
                  <form action="/admin/addService" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                      <div class="fg-line">
                        <input type="text" name="title" class="form-control" placeholder="Title">
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
                      <div class="form-group col-md-12 col-xs-12">
                          <input type="submit" value="Add" class="btn">
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection

@extends('admin.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>General Settings
          <small>Here You Can Set Your Settings
          </small>
      </h2>
      <hr>
      <div class="card-body card-padding">
            <div class="lightbox photos clearfix">

              @foreach ($galleryPhotos as $photo)
                <div data-src="{{$photo->img_path}}" class="col-md-2 col-sm-4 col-xs-6">
                  <div class="lightbox-item p-item">
                    <img src="{{$photo->img_path}}" alt="" />
                  </div>
                </div>
              @endforeach
            </div>
            <div class="clearfix"></div>
            <br>
            <a href="javascript:void(0)" data-target="#add-gallery" data-toggle="modal" style="" class="btn btn-success waves-effect">Add</a>
    </div>
  </div>
  <div id="add-gallery" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content col-xs-12">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Images</h4>
              </div>
              <div class="modal-body col-xs-12">
                  <form action="/admin/uploadGallery" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="control-label">Select Photo</label>
                        <input id="input-1" type="file" name="img[]" class="file" multiple>
                      </div>
                  </div>
                </div>
                      <div class="form-group col-md-12 col-xs-12">
                          <input type="submit" value="reset" class="btn">
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection

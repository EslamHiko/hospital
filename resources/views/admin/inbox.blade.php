@extends('admin.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>Contact Us Inbox

      </h2>
      <hr>
      @foreach ($contactMsgs as $msg)
        <a href="javascript:void(0)" data-target="#contactus{{$msg->id}}" data-toggle="modal"><div class="block-header">
                          <h2>{{$msg->name}}
                              <small>From: {{$msg->email}}</small>
                          </h2>
                      </div>
        </a>
      @endforeach
      <hr>
      <h2> Doctors Inbox
      </h2>
      <hr>
      @foreach ($doctorMsgs as $msg)
        <a href="javascript:void(0)" data-target="#doctor{{$msg->id}}" data-toggle="modal"><div class="block-header">
                          <h2>{{$msg->first_name . ' ' . $msg->last_name}}
                              <small>From: {{$msg->email}}</small>
                          </h2>
                      </div>
        </a>
      @endforeach
    </div>
  </div>
  @foreach ($contactMsgs as $msg)
    <div id="contactus{{$msg->id}}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content col-xs-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Contact Us Msg</h4>
                </div>
                <div class="modal-body col-xs-12">

                      <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Name</label>
                        <div class="fg-line">
                          <h5>{{$msg->name . ' ' . $msg->last_name}}</h5>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Email</label>
                    <div class="fg-line">
                      <h5>{{$msg->email}}</h5>
                    </div>
                    </div>
                </div>
              </div>
                  <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <div class="fg-line">
                      <label>Message</label>
                      <h5>{{$msg->msg}}</h5>
                    </div>
                    </div>
                  </div>
                </div>
                <br>

                </div>
            </div>
        </div>
    </div>
  @endforeach
  @foreach ($doctorMsgs as $msg)
    <div id="doctor{{$msg->id}}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content col-xs-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Doctor Msg</h4>
                </div>
                <div class="modal-body col-xs-12">

                      <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Name</label>
                        <div class="fg-line">
                          <h5>{{$msg->first_name . ' ' . $msg->last_name}}</h5>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Email</label>
                    <div class="fg-line">
                      <h5>{{$msg->email}}</h5>
                    </div>
                    </div>
                </div>
              </div>


                  <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <div class="fg-line">
                      <label>Message</label>
                      <h5>{{$msg->msg}}</h5>
                    </div>
                    </div>
                  </div>
                </div>
                <br>

                </div>
            </div>
        </div>
    </div>
  @endforeach

@endsection

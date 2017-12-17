@extends('admin.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>Appointments

      </h2>
      <hr>
      @foreach ($Appointments as $Appointment)
        <a href="javascript:void(0)" data-target="#appointment{{$Appointment->id}}" data-toggle="modal"><div class="block-header">
                          <h2>{{$Appointment->first_name . ' ' . $Appointment->last_name}}
                              <small>From: {{$Appointment->email}} - {{$Appointment->service}}</small>
                          </h2>
                      </div>
        </a>
      @endforeach
    </div>
  </div>
@foreach ($Appointments as $Appointment)
  <div id="appointment{{$Appointment->id}}" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content col-xs-12">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Appointment Request</h4>
              </div>
              <div class="modal-body col-xs-12">

                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Name</label>
                      <div class="fg-line">
                        <h5>{{$Appointment->first_name .' '.$Appointment->last_name}}</h5>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Email</label>
                  <div class="fg-line">
                    <h5>{{$Appointment->email}}</h5>
                  </div>
                  </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Phone Number</label>
              <div class="fg-line">
                <h5>{{$Appointment->phone_number}}</h5>
              </div>
              </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Gender</label>
          <div class="fg-line">
            <h5>{{$Appointment->gender}}</h5>
          </div>
          </div>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
        <label>Service</label>
      <div class="fg-line">
        <h5>{{$Appointment->service}}</h5>
      </div>
      </div>
  </div>
</div>
<div class="row">
<div class="col-sm-12">
  <div class="form-group">
    <label>Date & Time</label>
  <div class="fg-line">
    <h5>{{$Appointment->date . ' ' . $Appointment->time}}</h5>
  </div>
  </div>
</div>
</div>
                <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                  <div class="fg-line">
                    <label>Message</label>
                    <h5>{{$Appointment->msg}}</h5>
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

@extends('admin.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h2>Dashboard

      </h2>
      <hr>
      @php
        use App\Appointment;
        use App\DoctorMessage;
        use App\User;
        use App\ContactMessage;
      @endphp
      <div class="row">
      <div class="col-sm-6 col-md-3">
          <div class="mini-charts-item bgm-lightgreen">
              <div class="clearfix">
                  <div class="count">
                      <small>New Appointments</small>
                      <h2>{{Appointment::count()}}</h2>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mini-charts-item bgm-lightgreen">
                <div class="clearfix">
                    <div class="count">
                        <small>New Contact Us Messages</small>
                        <h2>{{ContactMessage::count()}}</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="mini-charts-item bgm-lightgreen">
                  <div class="clearfix">
                      <div class="count">
                          <small>New Messages For Doctors</small>
                          <h2>{{DoctorMessage::count()}}</h2>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="mini-charts-item bgm-lightgreen">
                    <div class="clearfix">
                        <div class="count">
                            <small>New Users</small>
                            <h2>{{User::count()}}</h2>
                        </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
@endsection

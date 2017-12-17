@extends('layouts.master')
@section('title')
  <title> Hospital - Homepage </title>
@endsection
@section('content')
  <div class="main-slider col-xs-12">
      <div class="h-item">
        <img src="images/6.jpg" alt="">
        <div class="h-caption">
          <div class="caption-inner">
            <span>medical services</span>
            <h3>that you can trust</h3>
            <p>Credibly streamline pandemic web-readiness before team building supply chains. Monotonectally leverage existing ubiquitous vortals via resource-leveling </p>
            <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
          </div>
        </div>
      </div>
      <div class="h-item">
        <img src="images/5.jpg" alt="">
        <div class="h-caption">
          <div class="caption-inner">
            <span>medical services</span>
            <h3>that you can trust</h3>
            <p>Credibly streamline pandemic web-readiness before team building supply chains. Monotonectally leverage existing ubiquitous vortals via resource-leveling </p>
            <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
          </div>
        </div>
      </div>
      <div class="h-item">
        <img src="images/2.jpg" alt="">
        <div class="h-caption">
          <div class="caption-inner">
            <span>medical services</span>
            <h3>that you can trust</h3>
            <p>Credibly streamline pandemic web-readiness before team building supply chains. Monotonectally leverage existing ubiquitous vortals via resource-leveling </p>
            <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
          </div>
        </div>
      </div>
      <div class="h-item">
        <img src="images/3.jpg" alt="">
        <div class="h-caption">
          <div class="caption-inner">
            <span>medical services</span>
            <h3>that you can trust</h3>
            <p>Credibly streamline pandemic web-readiness before team building supply chains. Monotonectally leverage existing ubiquitous vortals via resource-leveling </p>
            <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
          </div>
        </div>
      </div>
      <div class="h-item">
        <img src="images/4.jpg" alt="">
        <div class="h-caption">
          <div class="caption-inner">
            <span>medical services</span>
            <h3>that you can trust</h3>
            <p>Credibly streamline pandemic web-readiness before team building supply chains. Monotonectally leverage existing ubiquitous vortals via resource-leveling </p>
            <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
          </div>
        </div>
      </div>
      <div class="h-item">
        <img src="images/1.jpg" alt="">
        <div class="h-caption">
          <div class="caption-inner">
            <span>medical services</span>
            <h3>that you can trust</h3>
            <p>Credibly streamline pandemic web-readiness before team building supply chains. Monotonectally leverage existing ubiquitous vortals via resource-leveling </p>
            <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
          </div>
        </div>
      </div>
    </div>
    <div class="h-details col-xs-12">
      <div class="container">
        <div class="h-welcome col-md-6 col-xs-12">
          <div class="h-img">
            <img src="images/bg1.jpg" alt="">
          </div>
          <div class="h-data">
            <h3>welcome to our hospital</h3>
            <p>Dynamically initiate collaborative alignments and viral web services. Rapidiously maintain impactful ideas whereas 24/365 resources. Quickly supply maintainable architectures with innovative benefits. Continually brand dynamic.</p>
          </div>
        </div>
        <div class="h-cards col-md-6 col-xs-12">
          <div class="block col-md-6 col-xs-6">
            <div class="inner">
              <h3>opening times</h3>
              <ul>
                <li>
                  <span>monday</span>
                  <small>11:30 - 23:00</small>
                </li>
                <li>
                  <span>tuesday</span>
                  <small>11:30 - 23:00</small>
                </li>
                <li>
                  <span>wednesday</span>
                  <small>11:30 - 23:00</small>
                </li>
                <li>
                  <span>thursday</span>
                  <small>11:30 - 23:00</small>
                </li>
                <li>
                  <span>friday</span>
                  <small>11:30 - 23:00</small>
                </li>
                <li>
                  <span>saturday</span>
                  <small>11:30 - 23:00</small>
                </li>
                <li>
                  <span>sunday</span>
                  <small>11:30 - 23:00</small>
                </li>
              </ul>
            </div>
          </div>

          <div class="block col-md-6 col-xs-6">
            <div class="inner">
              <h3>get in touch</h3>
              <ul>
                <li>
                  <div class="inner-icon">
                    <i class="zmdi zmdi-pin"></i>
                  </div>
                  <div class="inner-data">
                    <p>
                      <span>{{$home_address}}</span>
                    </p>
                  </div>
                </li>
                <li>
                  <div class="inner-icon">
                    <i class="zmdi zmdi-phone-in-talk"></i>
                  </div>
                  <div class="inner-data">
                    <p>
                      @foreach ($home_phones as $phone)
                        <span>{{$phone}}</span>
                      @endforeach
                    </p>
                  </div>
                </li>
                <li>
                  <div class="inner-icon">
                    <i class="zmdi zmdi-email"></i>
                  </div>
                  <div class="inner-data">
                    <p>
                      @foreach ($home_email as $email)
                        <span>{{$email}}</span>
                      @endforeach
                    </p>
                  </div>
                </li>
                <li>
                  <div class="inner-icon">
                    <i class="zmdi zmdi-link"></i>
                  </div>
                  <div class="inner-data">
                    <p>
                      @foreach ($home_links as $link)
                        <span>{{$link}}</span>
                      @endforeach
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="features col-xs-12">
      <div class="container">
        <div class="public-head col-xs-12">
          <h3>why choose us</h3>
          <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
        </div>
        <div class="features-body col-xs-12">
          @foreach ($services as $service)
            <div class="block col-md-4 col-sm-6 col-xs-12">
              <div class="inner">
                <h4>{{$service->title}}</h4>
                <p>{{$service->desc}}</p>
              </div>
            </div>
          @endforeach
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="services col-xs-12">
      <div class="container">
        <div class="public-head col-xs-12">
          <h3>the best services just got better</h3>
          <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
        </div>
        <div class="services-body col-xs-12">
          <div class="block col-md-4 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="inner-icon">
                <div class="hexagon">
                  <i class="icon-i-care-staff-area"></i>
                </div>
              </div>
              <div class="inner-data">
                <h4>as request</h4>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
              </div>
            </div>
          </div>
          <div class="block col-md-4 col-sm-6 col-xs-12">
            <div class="inner v2">
              <div class="inner-icon">
                <div class="hexagon">
                  <i class="icon-i-neurology"></i>
                </div>
              </div>
              <div class="inner-data">
                <h4>traumatology</h4>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
              </div>
            </div>
          </div>
          <div class="block col-md-4 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="inner-icon">
                <div class="hexagon">
                  <i class="icon-i-dental"></i>
                </div>
              </div>
              <div class="inner-data">
                <h4>dental</h4>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="block col-md-4 col-sm-6 col-xs-12">
            <div class="inner v2">
              <div class="inner-icon">
                <div class="hexagon">
                  <i class="icon-i-laboratory"></i>
                </div>
              </div>
              <div class="inner-data">
                <h4>laboratory</h4>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
              </div>
            </div>
          </div>
          <div class="block col-md-4 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="inner-icon">
                <div class="hexagon">
                  <i class="icon-i-ultrasound"></i>
                </div>
              </div>
              <div class="inner-data">
                <h4>X-Ray</h4>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
              </div>
            </div>
          </div>
          <div class="block col-md-4 col-sm-6 col-xs-12">
            <div class="inner v2">
              <div class="inner-icon">
                <div class="hexagon">
                  <i class="icon-i-cath-lab"></i>
                </div>
              </div>
              <div class="inner-data">
                <h4>cath-lap</h4>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
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
        </div>
      </div>
    </div>
    <div class="care col-xs-12">
      <div class="container">
        <div class="public-head col-xs-12">
          <h3>the heighest standard of health care</h3>
          <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
        </div>
        <div class="care-body col-xs-12">
          <div class="block col-md-3 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="care-icon">
                <i class="icon-i-cardiology"></i>
              </div>
              <div class="care-data">
                <h3>heart defects</h3>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                <a href="#">
                                    read more
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </a>
              </div>
            </div>
          </div>

          <div class="block col-md-3 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="care-icon">
                <i class="icon-i-dental"></i>
              </div>
              <div class="care-data">
                <h3>dental caries</h3>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                <a href="#">
                                    read more
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </a>
              </div>
            </div>
          </div>

          <div class="block col-md-3 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="care-icon">
                <i class="icon-i-oncology"></i>
              </div>
              <div class="care-data">
                <h3>medication</h3>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                <a href="#">
                                    read more
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </a>
              </div>
            </div>
          </div>

          <div class="block col-md-3 col-sm-6 col-xs-12">
            <div class="inner">
              <div class="care-icon">
                <i class="icon-i-ambulance"></i>
              </div>
              <div class="care-data">
                <h3>first - aid</h3>
                <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                <a href="#">
                                    read more
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="appoint col-xs-12" id="appoint">
      <div class="container">
        <div class="app-form col-xs-12">
          <div class="form-inner">
            <h3>appointment form</h3>
            <form action="/makeAppointment" method="post">
              {{ csrf_field() }}
              <div class="form-group col-md-6 col-xs-12">
                <label for="fname">first name</label>
                <input type="text" name="first_name" id="fname" class="form-control">
              </div>
              <div class="form-group col-md-6 col-xs-12">
                <label for="lname">last name</label>
                <input type="text" name="last_name" id="lname" class="form-control">
              </div>
              <div class="form-group col-md-12 col-xs-12">
                <label for="emailm">email address</label>
                <input type="email" name="email" id="emailm" class="form-control">
              </div>
              <div class="form-group col-md-6 col-xs-12">
                <label for="phnum">phone number</label>
                <input type="text" name="phone_number" id="phnum" class="form-control">
              </div>
              <div class="form-group col-md-6 col-xs-12">
                <label for="gender">your gender</label>
                <select class="form-control" name="gender" id="gender">
                                    <option disabled selected>gender</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>
              </div>
              <div class="form-group col-md-12 col-xs-12">
                <label for="services">your services</label>
                <select class="form-control" name="service" id="services">
                                    <option disabled selected>choose services</option>
                                    <option value="surgery">surgey</option>
                                    <option value="clicnic">clicnic</option>
                                </select>
              </div>
              <div class="form-group col-md-6 col-xs-12">
                <label for="date">date</label>
                <input type="date" id="date" name="date" class="form-control">
              </div>
              <div class="form-group col-md-6 col-xs-12">
                <label for="time">time</label>
                <input type="time" id="time" name="time" class="form-control">
              </div>
              <div class="form-group col-md-12 col-xs-12">
                <label for="msg">your message</label>
                <textarea class="form-control" name="msg" id="msg"></textarea>
              </div>
              <div class="form-group col-md-12 col-xs-12">
                <input type="submit" value="make an appointment" class="btn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

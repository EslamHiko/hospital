@extends('layouts.master')

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>about us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">about us</li>
                    </ol>
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
                                        <a href="#">{{$member->name}}</a>
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

        <div class="testomenal col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>what our patients are saying</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="client-slider col-xs-12">
                    <div class="c-item">
                        <div class="c-img">
                            <img src="images/h1.jpg" alt="">
                        </div>
                        <div class="c-data">
                            <i class="zmdi zmdi-quote"></i>
                            <p>Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web Services</p>
                            <div class="c-name">
                                <h3>amir nageh</h3>
                                <span>kidney patient | egypt</span>
                            </div>
                        </div>
                    </div>

                    <div class="c-item">
                        <div class="c-img">
                            <img src="images/h2.jpg" alt="">
                        </div>
                        <div class="c-data">
                            <i class="zmdi zmdi-quote"></i>
                            <p>Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web Services</p>
                            <div class="c-name">
                                <h3>amir nageh</h3>
                                <span>kidney patient | egypt</span>
                            </div>
                        </div>
                    </div>

                    <div class="c-item">
                        <div class="c-img">
                            <img src="images/h3.jpg" alt="">
                        </div>
                        <div class="c-data">
                            <i class="zmdi zmdi-quote"></i>
                            <p>Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web Services</p>
                            <div class="c-name">
                                <h3>amir nageh</h3>
                                <span>kidney patient | egypt</span>
                            </div>
                        </div>
                    </div>

                    <div class="c-item">
                        <div class="c-img">
                            <img src="images/h4.jpg" alt="">
                        </div>
                        <div class="c-data">
                            <i class="zmdi zmdi-quote"></i>
                            <p>Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web Services</p>
                            <div class="c-name">
                                <h3>amir nageh</h3>
                                <span>kidney patient | egypt</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

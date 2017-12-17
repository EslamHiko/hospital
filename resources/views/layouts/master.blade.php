<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    @yield('title')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/faveicon.png">

    <!-- Css Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/wfmi-style.css" rel="stylesheet" type="text/css">
    <link href="/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/css/lightgallery.css" rel="stylesheet" type="text/css">
    <link href="/css/select2.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
@if(!isset($section))
  @php
    $section = 'none';
  @endphp
@endif
<body>

    <!-- Page Loader -->
    <div class="page-loader">
        <img src="/images/h.gif">
    </div>
    <!-- End Page Loader -->

    <div class="main-wrapper">
        <header class="main-head col-xs-12">
            <div class="login-area">
                <button type="button" class="close-login">
                    <i class="zmdi zmdi-close"></i>
                </button>
                        <div class="container">
                            <div class="login-form col-md-6 col-xs-12">
                                <h2>login area</h2>
                                <form action="{{ route('login') }}" method="POST">
                                  {{ csrf_field() }}

                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="email">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" required placeholder="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rem">
                                        <label for="rem">remember me</label>
                                        <a href="javascript:void(0)" class="forget" data-target="#forget-modal" data-toggle="modal">forget password ?</a>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn" value="login">
                                    </div>
                                </form>
                            </div>
                            <!-- /.login-form -->

                            <div class="signup-form col-md-6 col-xs-12">
                                <h2>signup area</h2>
                                <p>Interactively expedite focused results through installed base potentialities. Credibly restore world-class vortals whereas scalable interfaces.</p>
                                <a href="register">
                                    <i class="zmdi zmdi-account-add"></i> signup
                                </a>
                            </div>
                            <!-- /.signup-form -->

                            <!-- =========================================================================================================================================== -->

                            <div class="panel-pop modal" id="forget">
                                <div class="lost-inner">
                                    <h1>هل نسيت كلمة المرور ؟</h1>
                                    <div class="lost-item">
                                        <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول">
                                    </div>
                                    <!-- /.lost-item -->
                                    <div class="text-center">
                                        <input type="submit" value="إعادة ضبط">
                                    </div>
                                    <!-- /.lost-item -->
                                </div>
                                <!-- /.lost-inner -->
                            </div>
                            <!-- /.modal -->

                            <!-- =========================================================================================================================================== -->

                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.login-area -->
            <div class="top-header col-xs-12">
                <div class="container">
                    <div class="header-contact">
                        <ul>
                          @if(!Auth::user())
                            <li>

                                <a href="javascript:void(0)" class="show-login">
                                    <i class="zmdi zmdi-account-add"></i> login / signup
                                </a>
                            </li>
                          @endif
                            <li>

                                <a href="callto:{{$home_phones[0]}}">
                                    <i class="zmdi zmdi-phone-in-talk"></i> {{$home_phones[0]}}
                                </a>
                            </li>
                            <li>

                                <a href="mailto:{{$home_email[0]}}">
                                    <i class="zmdi zmdi-email"></i> {{$home_email[0]}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-social">
                        <ul>
                            <li>
                                <a href="{{$home_fb}}">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$home_tw}}">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$home_linked}}">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$home_skype}}">
                                    <i class="zmdi zmdi-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert text-center alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (Session::get('success'))
                <div class="alert text-center  alert-success">
                     <p>Success !</p>
                </div>
            @endif
            <!-- end top-header -->
            <div class="header-content {{Auth::user() ? 'inner-header logged-user' : ''}} col-xs-12">
                <div class="container">
                    <div class="logo">
                        <h1>
                            <a href="/">hos<span>pital</span></a>
                        </h1>
                    </div>
                    <div class="h-navigation">
                        <ul class="main-nav">
                            <li>
                                <a href="/" class="{{$section == 'home' ? 'active': ''}}">home</a>
                            </li>
                            <li>
                                <a href="/about" class="{{$section == 'about' ? 'active': ''}}">about us</a>
                            </li>
                            <li>
                                <a href="/services" class="{{$section == 'services' ? 'active': ''}}">services</a>
                            </li>
                            <li>
                                <a href="/gallery" class="{{$section == 'gallery' ? 'active': ''}}">gallery</a>
                            </li>
                            <li>
                                <a href="team" class="{{$section == 'team' ? 'active': ''}}">our team</a>
                            </li>
                            <li>
                                <a href="/contact" class="{{$section == 'contact' ? 'active': ''}}">contact us</a>
                            </li>
                        </ul>
                        <button type="button" class="toggle-menu-button">
                            <i class="toggle-menu-button-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </i>
                        </button>
                        <div class="main-search">
                            <a href="javascript:void(0)" class="open-search">
                                <i class="zmdi zmdi-search"></i>
                            </a>
                            @if (Auth::user())
                                <div class="dropdown">
                                  <a data-toggle="dropdown" class="dropy">
                                      <div class="usr-img">
                                          <img src="{{Auth::user()->prof_img}}" alt="">
                                      </div>
                                      <div class="usr-data">
                                          <span>{{Auth::user()->name}}</span>
                                      </div>
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a href="/profile">profile</a></li>
                                      <li>
                                          <a href="/settings">settings</a>
                                      </li>
                                      <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">logout</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <div class="newsletter col-xs-12">
            <div class="container">
                <div class="news-inner">
                    <i class="zmdi zmdi-calendar-note"></i>
                    <div class="news-data">
                        <p>do you want to visit our hospital ?</p>
                        <h4>make an free appointment !</h4>
                    </div>
                    <div class="news-link">
                        <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer col-xs-12">
            <div class="container">
                <div class="footer-body col-xs-12">
                    <div class="block col-md-5 col-xs-12">
                        <div class="inner">
                            <h3>about us</h3>
                            <p class="desc">Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web Services</p>
                            <p class="desc">Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web ServicesInitiate Collaborative Alignments And Viral Web Services</p>
                            <div class="f-social">
                                <ul>
                                    <li>
                                        <a href="{{$home_fb}}">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$home_tw}}">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$home_linked}}">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$home_skype}}">
                                            <i class="zmdi zmdi-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-2 col-sm-6 col-xs-6">
                        <div class="inner">
                            <h3>useful links</h3>
                            <ul class="maping">
                                <li>
                                    <a href="#">appointments</a>
                                </li>
                                <li>
                                    <a href="#">contact us</a>
                                </li>
                                <li>
                                    <a href="#">support forums</a>
                                </li>
                                <li>
                                    <a href="#">login with account</a>
                                </li>
                                <li>
                                    <a href="#">register an account</a>
                                </li>
                                <li>
                                    <a href="#">help center</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block col-md-2 col-sm-6 col-xs-6">
                        <div class="inner">
                            <h3>our services</h3>
                            <ul class="maping">
                                <li>
                                    <a href="#">dental</a>
                                </li>
                                <li>
                                    <a href="#">laboratory test</a>
                                </li>
                                <li>
                                    <a href="#">general analysis</a>
                                </li>
                                <li>
                                    <a href="#">traumatolgy</a>
                                </li>
                                <li>
                                    <a href="#">prostheses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block col-md-3 col-xs-12">
                        <div class="inner">
                            <h3>contact us</h3>
                            <ul class="addressing">
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
                                          @foreach ($home_email as $email )
                                            <span><a href="mailto:{{$email}}">{{$email}}</a></span>
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
                                            <span><a href="{{$link}}" target="_blank">{{$link}}</a></span>
                                          @endforeach
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-rights col-xs-12">
                <div class="container">
                    <p>&copy; hospital. copyrights 2017. designed by <a href="#">amir nageh</a></p>
                </div>
            </div>
        </footer>
        <div class="search-flood">
            <div class="container">
                <div class="form-inner">
                    <div class="form-close">
                        <button class="close-flood">
                            <i class="zmdi zmdi-close"></i>
                        </button>
                    </div>
                    <form action="/search" method="get">
                        <div class="form-group">
                            <input type="text" name="kw" class="form-control" placeholder="search here...">
                            <input type="submit" value="search" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="appoint-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">APPOINTMENT FORM</h4>
                    </div>
                    <div class="modal-body col-xs-12">
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
        <div id="forget-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">password reset</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <form action="{{ route('password.email') }}" method="POST">
                          {{ csrf_field() }}
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="forget_mail">email reset</label>
                                <input type="email" id="forget_mail" name="email" value="{{ old('email') }}" required class="form-control">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="submit" value="reset" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main-wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="zmdi zmdi-chevron-up"></i>
    </div>
    <!-- /.toTop -->


    <!-- Javascript Files -->
    <script src="/js/jquery-2.2.2.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-smoothscroll.js" type="text/javascript"></script>
    <script src="/js/modernizr.min.js" type="text/javascript"></script>
    <script src="/js/wow.min.js" type="text/javascript"></script>
    <script src="/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/js/select2.full.min.js"></script>
    <script src="/js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="/js/lightgallery.js" type="text/javascript"></script>
    {{-- <script src="/http://maps.google.com/maps/api/js"></script> --}}
    {{-- <script src="/js/gmap3.min.js"></script> --}}
<!--    <script src="/js/gmap3.min.js" type="text/javascript"></script>-->
    <script src="/js/script.js" type="text/javascript"></script>
</body>

</html>

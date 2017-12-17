<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 15:37:41 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Vendor CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
  <link href="/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  <link href="/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
  <link href="/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
  <link href="/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
  <!-- Favicons -->
  <link rel="shortcut icon" href="images/faveicon.png">
  <!-- CSS -->
  <link href="/css/app_1.min.css" rel="stylesheet">
  <link href="/css/app_2.min.css" rel="stylesheet">

</head>

<body>
  <header id="header" class="clearfix" data-ma-theme="blue">
    <ul class="h-inner">
      <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
        <div class="line-wrap">
          <div class="line top"></div>
          <div class="line center"></div>
          <div class="line bottom"></div>
        </div>
      </li>

      <li class="hi-logo hidden-xs">
        <a href="/admin">Admin Panel</a>
      </li>


    </ul>

    <!-- Top Search Content -->
    <div class="h-search-wrap">
      <div class="hsw-inner">
        <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
        <input type="text">
      </div>
    </div>
  </header>

  <section id="main">
    <aside id="sidebar" class="sidebar c-overflow">
      <div class="s-profile">
        <a href="#" data-ma-action="profile-menu-toggle">
          <div class="sp-pic">
            <img src="{{Auth::user()->prof_img}}" alt="">
          </div>

          <div class="sp-info">
            {{Auth::user()->name}}

            <i class="zmdi zmdi-caret-down"></i>
          </div>
        </a>

        <ul class="main-menu">
          <li>
            <a href="/profile"><i class="zmdi zmdi-account"></i> View Profile</a>
          </li>
          <li>
            <a href="/settings"><i class="zmdi zmdi-settings"></i> Settings</a>
          </li>
          <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       <i class="zmdi zmdi-time-restore"></i>logout</a>
          </li>
        </ul>
      </div>

      <ul class="main-menu">
        <li><a href="/admin/settings"><i class="zmdi zmdi-settings"></i> Settings</a></li>
        <li><a href="/admin/team"><i class="zmdi zmdi-accounts-list"></i> Team</a></li>
        <li><a href="/admin/services"><i class="zmdi zmdi-view-module"></i> Services</a></li>
        <li><a href="/admin/gallery"><i class="zmdi zmdi-collection-image"></i> Gallery</a></li>
        <li><a href="/admin/inbox"><i class="zmdi zmdi-email"></i> Mail Box</a></li>
        <li><a href="/admin/appointments"><i class="zmdi zmdi-time"></i> Appointments</a></li>
      </ul>
    </aside>

    <section id="content">
      <div class="container">
        <div class="block-header">
          @if (Session::get('success'))
              <div class="alert text-center  alert-success">
                   <p>Success !</p>
              </div>
          @endif
          @yield('content')
        </div>
      </div>
    </section>
  </section>

  <footer id="footer">
    Copyright &copy; 2017 Admir Nageh & E-H
  </footer>

  <!-- Page Loader -->
  <div class="page-loader">
    <div class="preloader pls-blue">
      <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

      <p>Please wait...</p>
    </div>
  </div>

  <!-- Older IE warning message -->
  <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

  <!-- Javascript Libraries -->
  <script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="/vendors/bower_components/flot/jquery.flot.js"></script>
  <script src="/vendors/bower_components/flot/jquery.flot.resize.js"></script>
  <script src="/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
  <script src="/vendors/sparklines/jquery.sparkline.min.js"></script>
  <script src="/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

  <script src="/vendors/bower_components/moment/min/moment.min.js"></script>
  <script src="/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
  <script src="/vendors/bower_components/Waves/dist/waves.min.js"></script>
  <script src="/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
  <script src="/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="/vendors/bower_components/lightgallery/lib/lightgallery-all.min.js"></script>


  <!-- Placeholder for IE9 -->
  <!--[if IE 9 ]>
            <script src="/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

  <script src="/js/app.min.js"></script>
  <script>
  $(document).on('ready', function() {
      $("#input-1").fileinput({
          browseClass: "btn btn-primary btn-block",
          showCaption: false,
          showRemove: false,
          showUpload: false
      });
  });
  </script>
</body>

<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 15:38:42 GMT -->

</html>

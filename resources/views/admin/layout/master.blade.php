<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Thuma Admin Dashboard
    </title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/Logo/Logo_Update.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/Logo/Logo_Update.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/prism.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/loader/waitMe.css')}}">
    <!-- END APEX CSS-->
    @yield('style')
    <!-- BEGIN Page Level CSS-->
    <style>
        .overlay{
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity:1;
            color: white;
            font-size: 12px;
            padding-right: 5px;
            text-align: right;
        }
    </style>
    <!-- END Page Level CSS-->
</head>
<body data-col="2-columns" class=" 2-columns">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="man-of-steel" data-image="{{-- asset('app-assets/img/sidebar-bg/01.jpg') --}}" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix">
                <a href="{{url('admin/')}}" class="logo-text float-left">
                    <div class="logo-img">
                        <img class="img" src="{{asset('assets/Logo/Logo_Update.png')}}" style="width: 50px; height: auto;" alt="">
                    </div>
                    <span class="text align-middle">THUMA</span>
                </a>
                <a id="sidebarToggle" href="javascript:" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
                    <i data-toggle="expanded" class="ft-toggle-right toggle-icon"></i>
                </a>
                <a id="sidebarClose" href="javascript:" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                    <i class="ft-x"></i>
                </a>
            </div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="nav-item @if(url()->current() == url('/admin')) active @endif"><a href="{{url('admin/')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
                    </li>
                    <li class="nav-item @if(str_contains(url()->current(),url('/admin/member'))) active @endif"><a href="{{url('admin/member')}}"><i class="ft-info"></i><span data-i18n="" class="menu-title">Members' Info</span></a>
                    </li>
                    <li class="nav-item @if(str_contains(url()->current(),url('/admin/category'))) active @endif"><a href="{{url('admin/category')}}"><i class="ft-book"></i><span data-i18n="" class="menu-title">Content Category</span></a>
                    </li>                     
                    <li class="nav-item @if(str_contains(url()->current(),url('/admin/content'))) active @endif"><a href="{{url('admin/content')}}"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Contents</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
    <!-- Navbar (Header) Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
      <div class="container-fluid">
          <div class="">
              <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:" class="open-navbar-container black"><i class=""></i></a></span>
          </div>
          <div class="">
              <div id="navbarSupportedContent" class="">
                  <ul class="navbar-nav">
                      <li class="dropdown nav-item">
                          <a id="dropdownBasic4" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                              <i class="ft-user font-medium-3 blue-grey darken-4"></i>
                              <p class="d-none">User Settings</p>
                          </a>
                          <div aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                              {{-- <form id="form1" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="javascript:;" onclick="document.getElementById('form1').submit();" class="dropdown-item">
                                  <i class="ft-log-out"></i>
                                  <span>Logout</span>
                                </a>
                                <input type="hidden" value="Log out">
                              </form> --}}
                              <a href="{{url('/logout')}}" class="dropdown-item">
                                <i class="ft-log-out"></i>
                                <span>Logout</span>
                            </a>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
    </nav>
    <!-- Navbar (Header) Ends-->
    <div class="main-panel">
      <div class="main-content">
          <div class="container-fluid">
              <div class="container">
                  @include('admin.layout.msg')
                  @yield('content')
              </div>
          </div>
      </div>
      <footer class="footer footer-static footer-light">
        <p class="clearfix text-muted text-sm-center px-2">
            <span>Copyright  &copy; {{date('Y')}} <a href="https://www.thuma4future.org" id="pixinventLink" target="_blank" class="text-bold-800 danger darken-2">Thuma Organization</a>, All rights reserved. </span>
        </p>
        <p class="clearfix text-muted text-sm-center px-2"><span class="text-800-bold success">Developed</span> By <span class="text-800-bold danger">Min Thiha</span></p>
    </footer>
    </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="{{asset('app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/customizer.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/loader/waitMe.js')}}"></script>
<!-- END APEX JS-->
<script>
  let current_effect = 'bounce';

  // document.getElementsByTagName("body")[0].setAttribute("onload", "alert(current_effect)");
  document.getElementsByTagName("body")[0].setAttribute("onload", "waitMe(current_effect)");
  let beforeLoad = (new Date()).getTime();

  function getPageLoadTime(){
      let afterLoad = (new Date()).getTime();
      return (afterLoad - beforeLoad) / 1000;
  }
  $("form").on("submit",function () {
      waitMe(current_effect);
  });

  function waitMe(effect){
      $('body').waitMe({
          effect: effect,
          text: '',
          bg: 'rgba(255,255,255,0.7)',
          color: ['#FFF90C','#2DFF09','#FF1407'],
          maxSize: '',
          waitTime: getPageLoadTime(),
          source: '',
          textPos: 'vertical',
          fontSize: '',
          onClose: function() {}
      });
  }
</script>
@yield('script')
</body>

</html>

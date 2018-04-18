<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="google" content="nositelinksearchbox">
    <meta name="robots" content="noindex,nofollow">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/icon.png') }}">
    <title>Fishmarket Admin Panel</title>

    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">


    <!-- Bootstrap Core CSS -->
    <link href="{{url('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{url('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ url('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/select2.min.css') }}" rel="stylesheet">


    <!-- color CSS -->
    <link href="{{ url('css/colors/default.css') }}" id="theme" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ url('../plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="{{ url('/admin') }}">
                    <img src="images/1979.png" alt="home" class="light-logo" width="190px;" />
                </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right pull-right">

                <li>
                    <a class="profile-pic dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">
                        <b class="hidden-xs">{{ Auth::user()->name }}</b>  <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="{{url('/admin/about-admin')}}" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>About</a>
                </li>
                <li>
                    <a href="{{url('/admin/slider')}}" class="waves-effect"><i class="fa fa-images" aria-hidden="true"></i> &nbsp Slider</a>
                </li>
                <li>
                    <a href="{{url('/admin/services-admin')}}" class="waves-effect"><i class="fa fa-sliders" aria-hidden="true"></i>&nbsp Services</a>
                </li>
                <li>
                    <a href="{{url('/admin/camps-admin')}}" class="waves-effect"><i class="fa fa-compass" aria-hidden="true"></i>&nbsp Camps</a>
                </li>
                <li>
                    <a href="{{url('/admin/products-admin')}}" class="waves-effect"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp Products</a>
                </li>
                <li>
                    <a href="{{url('/admin/blogcats')}}" class="waves-effect"><i class="fa fa-at" aria-hidden="true"></i>&nbsp Blog's Categories</a>
                </li>
                <li>
                    <a href="{{url('/admin/blogs-admin')}}" class="waves-effect"><i class="fa fa-envira"></i> &nbsp Blogs</a>
                </li>
                <li>
                    <a href="{{url('/admin/brands')}}" class="waves-effect"><i class="fa fa-bandcamp"></i> &nbsp Brands</a>
                </li>
                <li>
                    <a href="{{url('/admin/contact-admin')}}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Contact</a>
                </li><li>
                    <a href="{{url('/admin/socials')}}" class="waves-effect"><i class="fa fa-share-square-o" aria-hidden="true"></i> Socials</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->

    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('home')

            @yield('content')

        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2018 &copy; Seafood Admin brought to you by <a href="{{ url('http://jafarli.me') }}" target="_blank">Jafarli</a></footer>
    </div>
    <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>


    <!-- jQuery -->
{{-- <script src="{{ url('../plugins/bower_components/jquery/dist/jquery.min.js') }}"></script> --}}
<!-- Bootstrap Core JavaScript -->
{{-- <script src="{{ url('bootstrap/dist/js/bootstrap.min.js') }}"></script> --}}
<!-- Menu Plugin JavaScript -->
    <script src="{{ url('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ url('js/jquery.slimscroll.js') }}"></script>

    <script src="{{ url('js/select2.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('js/custom.min.js') }}"></script>
</body>

</html>

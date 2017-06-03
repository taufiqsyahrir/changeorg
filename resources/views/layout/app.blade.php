
<html>

<!-- Header Script -->
<head>
    <title>Change.org</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.css"> <!-- AdminLTE Skins. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.css"> <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/complete-set-icons/512/comment512x512.png">
</head>
<!-- ////////////////// -->

<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

    <!-- Header -->
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">

                <div class="navbar-header">
                    <a href="#" class="navbar-brand"><b>Change</b>.org</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Petitions <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">All Petition</a></li>
                                <li class="divider"></li>
                                <li><a href="#">My Petition</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">


                        <!--
                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://image.prntscr.com/image/7f2a2981ae5345728196c631664e5f1d.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Archie Isdiningrat</span>
                            </a>

                            <ul class="dropdown-menu">

                                <li class="user-header">
                                    <img src="https://image.prntscr.com/image/7f2a2981ae5345728196c631664e5f1d.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        Archie Isdiningrat - Web Developer
                                        <small>since May. 2015</small>
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        ganti dengan di bawah ini dari layouts/app.blade.php | layouts dibuat otomatis oleh php artisan make:auth
                        -->

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif



                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- /.header -->

    <div class="content-wrapper">
        <div class="container">

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.Main content -->

        </div>
    </div>

    <!--  Footer  -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2017 <a href="#">Mentoring Studio</a>.</strong> All rights
            reserved.
        </div>
    </footer>
    <!-- /.Footer -->

</div>

<!--  Footer Script  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> <!-- jQuery 3.1.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script> <!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script> <!-- SlimScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.js"></script> <!-- FastClick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.js"></script> <!-- AdminLTE App -->
<!-- /.Footer Script -->


</body>
</html>
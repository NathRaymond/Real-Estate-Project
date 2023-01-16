<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="themelocator">
        <meta name="description" content="">

        <title>DALOCOME | Real Estate .</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oxanium:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">


        <!-- icons -->
        <link rel="icon" href="{{ asset('assets/images/ico/favicon.ico')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/ico/apple-touch-icon-precomposed.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/ico/apple-touch-icon-72-precomposed.html')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/ico/apple-touch-icon-57-precomposed.png')}}">
        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->

    </head>
    <body>
        <header class="tl-header db-header">
            <div class="side-menu-content">
                <span class="tl-toggler"><i class="fa fa-bars" aria-hidden="true"></i></span>
                <div class="side-menu">
                    <ul class="global-list">
                        <li><span class="heading nb">Main</span></li>
                        <li class="active"><a href="{{ route('agent_dashboard') }}"><span><i class="fa fa-tachometer" aria-hidden="true"></i></span> Dashboard</a></li>

                        <li><span class="heading">Listing</span></li>
                        <li><a href="{{ route('agent_properties') }}"><span><i class="fa fa-home" aria-hidden="true"></i></span> My Property</a></li>
                        <li><a href="{{ route('add_property') }}"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Add Property </a></li>

                        <li><a href="my-reviews.html"><span><i class="fa fa-star-o" aria-hidden="true"></i></span> Reviews</a></li>

                        <li><span class="heading">Account</span></li>
                        <li><a href="{{ route('agent_profile') }}"><span><i class="fa fa-user" aria-hidden="true"></i></span> My Profile</a></li>

                        <li><a href="{{ route('logout') }}"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>
                    </ul>
                </div><!-- sidebar -->
            </div>
            <div class="tl-menu menu-absolute menu-sticky">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets/images/logo-white.png')}}" alt="Logo" class="img-fluid logo-lg">
                            <img src="{{ asset('assets/images/logo-sm.png')}}" alt="Logo" class="img-fluid logo-sm">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">

                                <li><a href="/agent">Agent Portal</a></li>

                            </ul>
                        </div>
                        <div class="right-content">
                            <form class="tl-search-form align-self-center" role="search" action="#">
                               <h6 class="text-white">Welcome, {{ Auth::user()->agentRecord()->title ?? '' }} {{substr(Auth::user()->name,0,10) }}</h6>
                            </form>

                            <div class="tl-user-option align-self-center">
                                <ul class="global-list d-flex align-self-center">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>3</span></a></li>
                                    <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="tl-user align-self-center">
                                    <div class="author dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="tl-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid"
                                            @if(Auth::user()->agentRecord()->photo==NULL)
                                            src="{{ asset('user_icon2.jpg') }}"
                                            @else
                                            src='{{ asset("profile_picture/". auth()->user()->agentRecord()->photo) }}'
                                            @endif alt="Image" style="height: 45px"></a>

                                        <div class="dropdown-menu" aria-labelledby="tl-dropdown">
                                            <a class="dropdown-item" href="{{ route('agent_profile') }}"> Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.tl-user-option -->
                        </div>
                    </div><!-- /.container -->
                </nav><!-- /.navbar -->
            </div><!-- /.tl-menu -->
        </header><!-- /.tl-header -->

        @yield('content')

        <!-- JS -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        @yield('scripts')

    </body>

</html>

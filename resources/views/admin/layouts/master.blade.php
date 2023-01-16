<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="themelocator">
        <meta name="description" content="">

        <title>Dalocome| Real Estate .</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oxanium:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">


        <!-- icons -->
        <link rel="icon" href="{{asset('assets/images/ico/favicon.ico')}}"> 
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/ico/apple-touch-icon-precomposed.html')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/ico/apple-touch-icon-72-precomposed.html')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/ico/apple-touch-icon-57-precomposed.png')}}">  
        <!-- icons -->
    </head>
    <body>  
        <header class="tl-header db-header">
            @include('admin.includes.side-bar')          
            <div class="tl-menu menu-absolute menu-sticky">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('assets/images/logo-white.png')}}" alt="Logo" class="img-fluid logo-lg">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="Logo" class="img-fluid logo-sm">
                        </a>                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="tl-dropdown">
                                    <a href="#">Home</a>
                                    <ul class="tl-dropdown-menu">
                                        <li><a href="index.html">Home V-1</a></li>
                                        <li><a href="index1.html">Home V-2</a></li>
                                        <li><a href="dashboard.html">Home Dashboard</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="property.html">Service</a></li>
                                <li class="tl-dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="tl-dropdown-menu">
                                        <li><a href="team.html">Agents</a></li>
                                        <li><a href="blog-list.html">Blog List View</a></li>
                                        <li><a href="blog-list.html">Blog List View</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="agent-details.html">Agent Details</a></li>
                                        <li><a href="property-submit.html">Property Submit</a></li>
                                        <li><a href="property-details.html">Property Details</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="sign-up.html">Sign Up</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>       
                        </div> 
                        <div class="right-content">
                            <form class="tl-search-form align-self-center" role="search" action="#">
                                <input type="search" class="form-control" placeholder="Search here...">
                                <button type="submit" id="search-submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>

                            <div class="tl-search">
                                <div class="search-icon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                                <div class="search-form text-center open-search">
                                    <div class="close-search">
                                        <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                    </div>
                                    <form action="#" id="search" method="get">
                                        <input id="inputhead" name="search" type="text" placeholder="Enter keyword...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form><!-- /form -->
                                </div><!-- /s form -->                    
                            </div><!-- /.tl-search --> 

                            <div class="tl-user-option align-self-center">
                                <ul class="global-list d-flex align-self-center">
                                    <li><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>3</span></a></li>
                                    <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="tl-user align-self-center">
                                    <div class="author dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="tl-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/others/author2.png')}}" alt="Image"></a>

                                        <div class="dropdown-menu" aria-labelledby="tl-dropdown">
                                            <a class="dropdown-item" href="edit-profile.html"> Profile</a>
                                            <a class="dropdown-item" href="#">My Wallet</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                            <a class="dropdown-item" href="#">Lock screen</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="login.html"> Logout</a>
                                        </div>                                          
                                    </div>
                                </div>
                            </div><!-- /.tl-user-option -->
                        </div>
                    </div><!-- /.container -->
                </nav><!-- /.navbar -->                                
            </div><!-- /.tl-menu -->             
        </header><!-- /.tl-header -->  
        
        <div class="tl-section">
            <div class="tl-dashboard bg-color">
                <div class="container-fluid p-0">
                    
                    <div class="main">
                        @yield('content')   
                        @include('admin.includes.footer')
                    </div><!-- main -->             
                </div>
            </div><!-- dashboard -->
        </div><!-- tl-dashboard -->   

        <!-- JS -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui-min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/js/theia-sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/chart.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>  
    </body>

</html> 
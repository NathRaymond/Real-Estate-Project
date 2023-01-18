<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="themelocator">
        <meta name="description" content="">

        <title>DALOCOME | Real Estate HTML Template.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/app.css">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oxanium:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

        <!-- icons -->
        <link rel="icon" href="assets/images/ico/favicon.ico">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/ico/apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Template Developed By themelocator -->
    </head>
    <body>
        <header class="tl-header">
            @include('layouts.components.navbar')
        </header><!-- /.tl-header -->

        <div class="lt-breadcrumb">
            <div class="breadcrumb-content">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="title">
                            <h1>Login</h1>
                        </div>
                        <ol class="breadcrumb align-self-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-content -->
        </div><!-- /.lt-breadcrumb -->

        <div class="lt-page-content bg-color">
            <div class="lt-section">
                <div class="section-content lt-account section-padding">
                    <div class="account-content bg-white">
                        <h2>Login Into Account</h2>
                        <form action="#" class="lt-form">

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address ">
                                <div class="input-addon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-addon">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group tnc">
                                <input type="checkbox" name="tnc" id="tnc">
                                <label for="tnc">Remember Me</label>
                            </div>
                            <a href="dashboard.html" class="btn btn-primary d-block">Login</a>
                            <div class="social-connect">
                                <a class="facebook" href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Connect With Facebook</a>
                                <a class="google-plus" href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i> Connect With Google</a>
                            </div>
                            <div class="account-link justify-content-between d-flex">
                                <span>Don’t have an account? <a href="{{ route('register') }}" class="color">Sign up</a></span>
                                <span><a href="#">Forgot Password? </a></span>
                            </div>
                        </form>
                    </div><!-- container -->
                </div><!-- lt-agent-details -->
            </div><!-- lt-section -->
        </div><!-- /.lt-page-content -->

        <div class="lt-section">
            <div class="section-content section-padding text-center">
                <div class="container">
                    <div class="tl-brand">
                        <div class="brand-slider">
                            <div class="brand">
                                <img src="assets/images/brand/1.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/2.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/3.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/4.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/1.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/2.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/3.png" alt="Brand Image" class="img-fluid">
                            </div>
                            <div class="brand">
                                <img src="assets/images/brand/4.png" alt="Brand Image" class="img-fluid">
                            </div>
                        </div><!-- /.brand-slider -->
                    </div><!-- /.tl-brand -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

       @include('layouts.components.footer')

        <!-- JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery-ui-min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/theia-sticky-sidebar.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>

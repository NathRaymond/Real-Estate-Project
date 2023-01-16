<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:29 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="themelocator">
        <meta name="description" content="">

        <title>Erfassen | Real Estate HTML Template.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/app.css">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oxanium:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">


        <!-- icons -->
        <link rel="icon" href="assets/images/ico/favicon.ico"> 
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/ico/apple-touch-icon-precomposed.html">
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
                            <h1>Sign Up</h1>
                        </div>
                        <ol class="breadcrumb align-self-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                        </ol>                        
                    </div>
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-content -->
        </div><!-- /.lt-breadcrumb -->

        <div class="lt-page-content bg-color">
            <div class="lt-section">
                <div class="section-content lt-account section-padding">
                    <div class="account-content bg-white">
                        <h2>Sign Up For Account</h2>
                        <form action="#" class="lt-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="User Name">
                                <div class="input-addon">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                            </div>

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

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Repeat-Password">
                                <div class="input-addon">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="form-control">
                                    <option value="subscriber">Subscriber Type </option>
                                    <option value="visitor">Visitor</option>
                                    <option value="customer">Customer</option>
                                </select>
                            </div>
                            <div class="form-group tnc">
                                <input type="checkbox" name="tnc" id="tnc">
                                <label for="tnc">I agree with <a href="#">* terms & conditions</a></label>
                            </div>
                            <input type="submit" value="Sign Up" class="btn btn-primary">
                            <div class="account-link justify-content-between d-flex">
                                <span>Have an account? <a href="{{ route('login') }}" class="color">Login</a></span>
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

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:29 GMT -->
</html> 
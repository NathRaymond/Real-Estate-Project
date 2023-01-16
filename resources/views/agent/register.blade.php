<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Agbeniga Ambali">
        <meta name="description" content="">

        <title>DALOCOME | Real Estate.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/app.css">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oxanium:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- icons -->
        <link rel="icon" href="assets/images/ico/favicon.ico">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/ico/apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
        <!-- icons -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
      @include('layouts.components.header')

        <div class="lt-breadcrumb">
            <div class="breadcrumb-content">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="title">
                            <h1>Sign Up</h1>
                        </div>
                        <ol class="breadcrumb align-self-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        <form action="" class="lt-form" method="POST">
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title" name="title" required>
                                <div class="input-addon">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                                <div class="input-addon">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address " required>
                                <div class="input-addon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" accept="0|1|2|3|4|5|6|7|8|9|+" class="form-control" name="phone_number" placeholder="Phone Number" minlength="11"  required>
                                <div class="input-addon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <div class="input-addon">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="confirm-password" placeholder="Repeat-Password" required>
                                <div class="input-addon">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </div>
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

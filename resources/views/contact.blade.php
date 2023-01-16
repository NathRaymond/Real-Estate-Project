<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:46 GMT -->

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
    <link href="https://fonts.googleapis.com/css?family=Oxanium:200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">


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
                        <h1>Contact Us</h1>
                    </div>
                    <ol class="breadcrumb align-self-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </div>
            </div><!-- /.container -->
        </div><!-- /.breadcrumb-content -->
    </div><!-- /.lt-breadcrumb -->

    <div class="lt-page-content bg-color">
        <div class="lt-section">
            <div class="section-content lt-contact section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info bg-white">
                                <div class="icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <span>+234 8146194881</span>
                                <span>+234 8146194881</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-info bg-white">
                                <div class="icon">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                </div>
                                <span><a href="mailto:rockdalocom@gmail.com">rockdalocom@gmail.com</a></span>
                                <span><a href="mailto:rockdalocom@gmail.com">rockdalocom@gmail.com</a></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-info bg-white">
                                <div class="icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <span style="font-size: 14px">Abiola Way Leme, opposite Abadi ,
                                    secondary school Abeokuta, Ogun State</span>
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-8">
                            <div class="get-in-touch">
                                <h3>Get In Touch</h3>
                                <form action="https://angfuzsoft.com/html/erfassen/demo/contact-process.php"
                                    method="post" class="lt-form row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Your Name">
                                        <div class="input-addon">
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email">
                                        <div class="input-addon">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <select class="form-control" name="subject">
                                            <option value="Subject">Subject</option>
                                            <option value="rent-flat">Rent Flat</option>
                                            <option value="sale-flat">Sale Flat</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Phone Number">
                                        <div class="input-addon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Your Message" name="message"></textarea>
                                        <div class="input-addon">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </div>
                                        <input type="submit" value="Send Now" name="send"
                                            class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4">
                            <div class="branch-officers">
                                <h3>Branch Officers</h3>
                                <div class="branch-officer-slider">
                                    <div class="branch-officer bg-white text-center">
                                        <div class="thumb">
                                            <img src="assets/images/others/author2.png" alt="Officer Image"
                                                class="img-fluid">
                                        </div>
                                        <h3>Alexa Jasmine</h3>
                                        <span class="officer-role">Canada Branch Manager</span>
                                        <span class="officer-email"><a
                                                href="mailto:alexa-jasmine@gmail.com">alexa-jasmine@gmail.com</a></span>
                                        <span class="officer-phone"><a href="#">(+244) 1999 256 289</a></span>
                                        <span class="office-location"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i><a href="#">View This Location On
                                                Map</a></span>
                                    </div>

                                    <div class="branch-officer bg-white text-center">
                                        <div class="thumb">
                                            <img src="assets/images/others/author2.png" alt="Officer Image"
                                                class="img-fluid">
                                        </div>
                                        <h3>Alexa Jasmine</h3>
                                        <span class="officer-role">Canada Branch Manager</span>
                                        <span class="officer-email"><a
                                                href="mailto:alexa-jasmine@gmail.com">alexa-jasmine@gmail.com</a></span>
                                        <span class="officer-phone"><a href="#">(+244) 1999 256 289</a></span>
                                        <span class="office-location"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i><a href="#">View This Location On
                                                Map</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- container -->
            </div><!-- lt-agent-details -->
        </div><!-- lt-section -->

        <div class="lt-section">
            <div class="section-content lt-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10425.465618217717!2d-123.0855711998103!3d49.26199450151496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1586379153694!5m2!1sen!2sbd"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div><!-- /section-content -->
        </div><!-- /lt-section -->
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

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:46 GMT -->

</html>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="themelocator">
        <meta name="description" content="">

        <title>DALOCOME | Real Estate.</title>

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
        <header class="tl-header header-style-1">
            <div class="tl-topbar">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="left-content">
                            <ul class="global-list">
                                <li><span class="icon"><img src="assets/images/others/icon1.png" alt="Image" class="img-fluid"></span><a href="tel:+9985260948">+99 852 60948</a></li>
                                <li><span class="icon"><img src="assets/images/others/icon2.png" alt="Image" class="img-fluid"></span><a href="#">info@gmail.com</a></li>
                            </ul>
                        </div><!-- /.left-content -->
                        <div class="right-content align-self-center">
                            <div class="topbar-user">
                                <span><a href="{{ route('login') }}">Login</a> | <a href="{{ route('sign-up') }}">Sign Up</a></span>
                            </div><!-- /.topbar-user -->
                        </div><!-- /.right-content -->
                    </div>
                </div><!-- /.container -->
            </div><!-- /.tl-topbar -->

            <div class="tl-menu menu-absolute menu-sticky">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="container">
                        <a class="navbar-brand" href="index1.html">
                            <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="tl-dropdown active">
                                    <a href="#">Home</a>
                                    <ul class="tl-dropdown-menu">
                                        <li><a href="index.html">Home V-1</a></li>
                                        <li class="active"><a href="index1.html">Home V-2</a></li>
                                        <li><a href="dashboard.html">Home Dashboard</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="property.html">Properties</a></li>
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
                            <div class="lt-button">
                                <a href="property-submit.html" class="btn btn-transparent">Submit Property</a>
                            </div>
                        </div>
                    </div><!-- /.container -->
                </nav><!-- /.navbar -->
            </div><!-- /.tl-menu -->
        </header><!-- /.tl-header -->

        <div class="lt-banner banner-style-1 bg-image" style="background-image: url(assets/images/bg/banner-bg2.jpg);">
            <div id="home-slider" class="carousel slide home-slider banner-content" data-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="banner-text">
                                <h1>Find Your</h1>
                                <h2>Dream Home for Living</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                <form action="#">
                                    <div class="form-content">
                                        <div class="search-content">
                                            <input class="form-control" name="search" type="text" placeholder="Search here..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>City</option>
                                                <option>Washington</option>
                                                <option>New Jersey</option>
                                                <option>Los angeles</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>State</option>
                                                <option>New York</option>
                                                <option>California</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <div class="button">
                                            <input type="submit" value="Search" class="btn btn-primary">
                                        </div>
                                    </div><!-- /.row -->
                                </form>
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <div class="container">
                            <div class="banner-text">
                                <h1>Find Your</h1>
                                <h2>Dream Home for Living</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                <form action="#">
                                    <div class="form-content">
                                        <div class="search-content">
                                            <input class="form-control" name="search" type="text" placeholder="Search here..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>City</option>
                                                <option>Washington</option>
                                                <option>New Jersey</option>
                                                <option>Los angeles</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>State</option>
                                                <option>New York</option>
                                                <option>California</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <div class="button">
                                            <input type="submit" value="Search" class="btn btn-primary">
                                        </div>
                                    </div><!-- /.row -->
                                </form>
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->
                </div>
                <a class="carousel-control-prev" href="#home-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#home-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div><!-- /.home-slider -->
            <div class="mouse-inner-area text-center">
                <div class="container">
                    <div class="mouse-inner">
                        <div class="thumb">
                            <img src="assets/images/others/mouse-thumb.png" alt="Image" class="img-fluid">
                            <a href="#about" class="mouse-icon">
                                <span class="wheel"></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div><!-- /.mouse-inner -->
                </div><!-- /.mouse-inner-area -->
            </div><!-- /.mouse-inner-area -->
        </div><!-- /.lt-banner -->

        <div class="lt-section" id="about">
            <div class="section-content about-content section-padding">
                <div class="about-thumb">
                    <img src="assets/images/about/about.png" alt="Image" class="img-fluid">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-thumb-content">
                                <div class="thumb">
                                    <img src="assets/images/about/about-thumb1.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="thumb thumb-2">
                                    <img src="assets/images/about/about-thumb2.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="lt-video">
                                    <a href="https://www.youtube.com/watch?v=AI3pORAXU4g"><span class="icon"><i class="fa fa-play" aria-hidden="true"></i></span>Watch Video</a>
                                </div>
                            </div><!-- /.about-thumb-content -->
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="lt-about">
                                <div class="section-title">
                                    <span>We have 25 Years of</span>
                                    <h1>Exprience in <span>Real-Estate</span> Business</h1>
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                                <a href="about.html" class="btn btn-primary radius">Read More</a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding bg-color">
                <div class="container">
                    <div class="title-center">
                        <div class="section-title">
                            <h1>Recently Added</h1>
                            <div class="paragraph">
                                <p>Dramatically harness real-time portals whereas distinctive services. Conveniently seize standardized best practices.</p>
                            </div>
                        </div>
                    </div><!-- /.title-center -->

                    <div class="property-slider arrow-style-1">
                        <div class="property style-1">
                            <div class="thumb">
                                <img src="assets/images/property/10.jpg" alt="Image" class="img-fluid">
                                <div class="overlay">
                                    <div class="property-status">
                                        <a href="#">For Rent</a>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            <li><a href="assets/images/property/10.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-info">
                                <div class="info-top">
                                    <h2><a href="property-details.html">Modern Duplex House</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>8514 W. Pennington St</span>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                            <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                            <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="property-footer d-flex justify-content-between">
                                    <div class="price align-self-center">
                                        <h3>$4,500/m</h3>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div><!-- /.author -->
                                </div><!-- /.property-footer -->
                            </div><!-- /.property-info -->
                        </div><!-- /.property -->

                        <div class="property style-1">
                            <div class="thumb">
                                <img src="assets/images/property/11.jpg" alt="Image" class="img-fluid">
                                <div class="overlay">
                                    <div class="property-status">
                                        <a href="#">For Sale</a>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            <li><a href="assets/images/property/11.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-info">
                                <div class="info-top">
                                    <h2><a href="property-details.html">Villa on Grand Avenue</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>8514 W. Pennington St</span>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                            <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                            <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="property-footer d-flex justify-content-between">
                                    <div class="price align-self-center">
                                        <h3>$4,500/m</h3>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div><!-- /.author -->
                                </div><!-- /.property-footer -->
                            </div><!-- /.property-info -->
                        </div><!-- /.property -->

                        <div class="property style-1">
                            <div class="thumb">
                                <img src="assets/images/property/12.jpg" alt="Image" class="img-fluid">
                                <div class="overlay">
                                    <div class="property-status">
                                        <a href="#">For Rent</a>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            <li><a href="assets/images/property/12.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-info">
                                <div class="info-top">
                                    <h2><a href="property-details.html">Maple Penthouse</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>8514 W. Pennington St</span>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                            <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                            <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="property-footer d-flex justify-content-between">
                                    <div class="price align-self-center">
                                        <h3>$4,500/m</h3>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div><!-- /.author -->
                                </div><!-- /.property-footer -->
                            </div><!-- /.property-info -->
                        </div><!-- /.property -->

                        <div class="property style-1">
                            <div class="thumb">
                                <img src="assets/images/property/13.jpg" alt="Image" class="img-fluid">
                                <div class="overlay">
                                    <div class="property-status">
                                        <a href="#">For Rent</a>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            <li><a href="assets/images/property/13.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-info">
                                <div class="info-top">
                                    <h2><a href="property-details.html">Maple Penthouse</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>8514 W. Pennington St</span>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                            <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                            <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="property-footer d-flex justify-content-between">
                                    <div class="price align-self-center">
                                        <h3>$4,500/m</h3>
                                    </div>
                                    <div class="icons">
                                        <ul class="global-list">
                                            <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div><!-- /.author -->
                                </div><!-- /.property-footer -->
                            </div><!-- /.property-info -->
                        </div><!-- /.property -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding" >
                <div class="container">
                    <div class="title-center">
                        <div class="section-title">
                            <h1>Properties</h1>
                            <div class="paragraph">
                                <p>Dramatically harness real-time portals whereas distinctive services. Conveniently seize standardized best practices.</p>
                            </div>
                        </div>
                    </div><!-- /.title-center -->
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="property style-1">
                                <div class="thumb">
                                    <img src="assets/images/property/10.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="property-status">
                                            <a href="#">For Rent</a>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-info">
                                    <div class="info-top">
                                        <h2><a href="#">Modern Duplex House</a></h2>
                                        <div class="d-flex map-location justify-content-between">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>8514 W. Pennington St</span>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-footer d-flex justify-content-between">
                                        <div class="price align-self-center">
                                            <h3>$4,500/m</h3>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- /.author -->
                                    </div><!-- /.property-footer -->
                                </div><!-- /.property-info -->
                            </div><!-- /.property -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property style-1">
                                <div class="thumb">
                                    <img src="assets/images/property/11.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="property-status">
                                            <a href="#">For Sale</a>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-info">
                                    <div class="info-top">
                                        <h2><a href="#">Villa on Grand Avenue</a></h2>
                                        <div class="d-flex map-location justify-content-between">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>8514 W. Pennington St</span>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-footer d-flex justify-content-between">
                                        <div class="price align-self-center">
                                            <h3>$4,500/m</h3>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- /.author -->
                                    </div><!-- /.property-footer -->
                                </div><!-- /.property-info -->
                            </div><!-- /.property -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property style-1">
                                <div class="thumb">
                                    <img src="assets/images/property/12.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="property-status">
                                            <a href="#">For Rent</a>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-info">
                                    <div class="info-top">
                                        <h2><a href="#">Maple Penthouse</a></h2>
                                        <div class="d-flex map-location justify-content-between">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>8514 W. Pennington St</span>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-footer d-flex justify-content-between">
                                        <div class="price align-self-center">
                                            <h3>$4,500/m</h3>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- /.author -->
                                    </div><!-- /.property-footer -->
                                </div><!-- /.property-info -->
                            </div><!-- /.property -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property style-1">
                                <div class="thumb">
                                    <img src="assets/images/property/13.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="property-status">
                                            <a href="#">For Rent</a>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-info">
                                    <div class="info-top">
                                        <h2><a href="#">Villa on Grand Avenue </a></h2>
                                        <div class="d-flex map-location justify-content-between">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>8514 W. Pennington St</span>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-footer d-flex justify-content-between">
                                        <div class="price align-self-center">
                                            <h3>$4,500/m</h3>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- /.author -->
                                    </div><!-- /.property-footer -->
                                </div><!-- /.property-info -->
                            </div><!-- /.property -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property style-1">
                                <div class="thumb">
                                    <img src="assets/images/property/14.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="property-status">
                                            <a href="#">For Rent</a>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-info">
                                    <div class="info-top">
                                        <h2><a href="#">Mikan Lounge</a></h2>
                                        <div class="d-flex map-location justify-content-between">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>8514 W. Pennington St</span>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-footer d-flex justify-content-between">
                                        <div class="price align-self-center">
                                            <h3>$4,500/m</h3>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- /.author -->
                                    </div><!-- /.property-footer -->
                                </div><!-- /.property-info -->
                            </div><!-- /.property -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property style-1">
                                <div class="thumb">
                                    <img src="assets/images/property/15.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="property-status">
                                            <a href="#">For Rent</a>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-info">
                                    <div class="info-top">
                                        <h2><a href="#">Maple Penthouse</a></h2>
                                        <div class="d-flex map-location justify-content-between">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>8514 W. Pennington St</span>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-footer d-flex justify-content-between">
                                        <div class="price align-self-center">
                                            <h3>$4,500/m</h3>
                                        </div>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- /.author -->
                                    </div><!-- /.property-footer -->
                                </div><!-- /.property-info -->
                            </div><!-- /.property -->
                        </div>
                    </div><!-- /.row -->
                    <div class="button mt-4 text-center">
                        <a href="property.html" class="btn btn-primary">View More</a>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding text-center bg-image section-before" style="background-image: url(assets/images/bg/cta.jpg);" >
                <div class="container">
                    <div class="cta-content">
                        <span>Buy and Sell Your Property with</span>
                        <h1>Erfassen Real Estate Agency</h1>
                        <div class="buttons">
                            <a href="#" class="btn btn-transparent">Browes Property</a>
                            <a href="property-submit.html" class="btn btn-primary">Submit Property</a>
                        </div>
                    </div><!-- feature-content -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content lt-get-a-quote section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="quote-info">
                                <div class="thumb">
                                    <img src="assets/images/others/quote-thumb.jpg" alt="Quote Image" class="img-fluid">
                                </div>
                                <div class="quote-text">
                                    <h2>Start Your First Business With Us!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="quote-form">
                                <h1>Get a Free Online Quote Now!</h1>
                                <p>Holisticly pursue front-end web services for reliable models. Quickly disintermediate clicks-and-mortar quality.</p>
                                <span class="border"></span>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                        <input type="email" class="form-control" placeholder="Email*">
                                        <input type="text" class="form-control" placeholder="Subject*">
                                        <textarea name="message" class="form-control" placeholder="Message*" cols="30" rows="10"></textarea>
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding bg-color">
                <div class="container-fluid">
                    <div class="title-center">
                        <div class="section-title">
                            <h1>Our Projects</h1>
                            <div class="paragraph">
                                <p>Competently foster low-risk high-yield platforms and client-centric sources. Phosfluorescently enable client-centered.</p>
                            </div>
                        </div>
                    </div><!-- /.title-center -->
                    <div class="project-content">
                        <div class="project-slider">
                            <div class="project">
                                <div class="thumb">
                                    <img src="assets/images/project/1.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="property-details.html">Melina Corporate</a></h2>
                                    <span>New York</span>
                                </div><!-- /.project-info -->
                            </div><!-- /.project -->
                            <div class="project">
                                <div class="thumb">
                                    <img src="assets/images/project/2.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="#">Globally World</a></h2>
                                    <span>Poland</span>
                                </div><!-- /.project-info -->
                            </div><!-- /.project -->

                            <div class="project">
                                <div class="thumb">
                                    <img src="assets/images/project/3.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="property-details.html">Dramatically Parallel</a></h2>
                                    <span>Germany</span>
                                </div><!-- /.project-info -->
                            </div><!-- /.project -->
                            <div class="project">
                                <div class="thumb">
                                    <img src="assets/images/project/4.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="#">Professionally Matrix </a></h2>
                                    <span>Japan</span>
                                </div><!-- /.project-info -->
                            </div><!-- /.project -->

                            <div class="project">
                                <div class="thumb">
                                    <img src="assets/images/project/5.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="property-details.html">Holisticly Cultivate</a></h2>
                                    <span>China</span>
                                </div><!-- /.project-info -->
                            </div><!-- /.project -->

                            <div class="project">
                                <div class="thumb">
                                    <img src="assets/images/project/3.jpg" alt="Image" class="img-fluid">
                                    <div class="overlay">
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/images/property/1.jpg" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="meta">
                                        <ul class="global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="property-details.html">Holisticly Cultivate</a></h2>
                                    <span>China</span>
                                </div><!-- /.project-info -->
                            </div><!-- /.project -->
                        </div>
                    </div><!-- /.project-content -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content city-content section-padding">
                <div class="container">
                    <div class="title-center">
                        <div class="section-title">
                            <h1>Top Cities</h1>
                            <div class="paragraph">
                                <p>Competently foster low-risk high-yield platforms and client-centric sources. Phosfluorescently enable client-centered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="city style-one">
                                <div class="city-thumb">
                                    <img src="assets/images/city/5.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h2>New York</h2>
                                    <span>15 Properties</span>
                                </div>
                                <div class="city-overlay">
                                    <div class="city-overlay-inner">
                                        <ul class="meta global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                        <h3><a href="property-details.html">Synergistically parallel task user-centric experiences.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="city style-one">
                                <div class="city-thumb">
                                    <img src="assets/images/city/6.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h2>New York</h2>
                                    <span>15 Properties</span>
                                </div>
                                <div class="city-overlay">
                                    <div class="city-overlay-inner">
                                        <ul class="meta global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                        <h3><a href="property-details.html">Synergistically parallel task user-centric experiences.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="city style-one">
                                <div class="city-thumb">
                                    <img src="assets/images/city/7.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h2>New York</h2>
                                    <span>15 Properties</span>
                                </div>
                                <div class="city-overlay">
                                    <div class="city-overlay-inner">
                                        <ul class="meta global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                        <h3><a href="property-details.html">Synergistically parallel task user-centric experiences.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="city style-one">
                                <div class="city-thumb">
                                    <img src="assets/images/city/8.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h2>New York</h2>
                                    <span>15 Properties</span>
                                </div>
                                <div class="city-overlay">
                                    <div class="city-overlay-inner">
                                        <ul class="meta global-list">
                                            <li><a href="#">Market</a></li>
                                        </ul>
                                        <h3><a href="property-details.html">Synergistically parallel task user-centric experiences.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="button text-center">
                        <a href="property.html" class="btn btn-primary">View More</a>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding lt-testimonial bg-image" style="background-image: url(assets/images/bg/testimonial-1.jpg);" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faq-accordion" id="faq-accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why you choose us?</button>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Dynamically impact client-focused synergy without global e-tailers. Appropriately engineer web-enabled resources and state of the art methods of empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is Prashad real estate?</button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Dynamically impact client-focused synergy without global e-tailers. Appropriately engineer web-enabled resources and state of the art methods of empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What is the meaning of real in real estate?</button>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Dynamically impact client-focused synergy without global e-tailers. Appropriately engineer web-enabled resources and state of the art methods of empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">What is the meaning of real in real estate?</button>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Dynamically impact client-focused synergy without global e-tailers. Appropriately engineer web-enabled resources and state of the art methods of empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.faq-accordion -->
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="testimonial-content testimonial-style-1 text-center">
                                <div class="testimonial-nav-slider">
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="assets/images/testimonial/author-1.png" alt="Image" class="img-fluid">
                                        </div>
                                    </div><!-- /testimonial-author -->

                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="assets/images/testimonial/author-2.png" alt="Image" class="img-fluid">
                                        </div>
                                    </div><!-- /testimonial-author -->

                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="assets/images/testimonial/author-2.png" alt="Image" class="img-fluid">
                                        </div>
                                    </div><!-- /testimonial-author -->

                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="assets/images/testimonial/author-3.png" alt="Image" class="img-fluid">
                                        </div>
                                    </div><!-- /testimonial-author -->
                                </div><!-- testimonial-nav-slider -->

                                <div class="testimonial-slider">
                                    <div class="testimonial">
                                        <h2>David Smith</h2>
                                        <span class="client-role">Software Engineer</span>
                                        <p>Efficiently formulate viral data for error-free users. Distinctively provide access to fully tested total linkage rather than process-centric infrastructures.</p>
                                        <div class="quote-icon"><img src="assets/images/testimonial/quote1.png" alt="Image" class="img-fluid"></div>
                                    </div>

                                    <div class="testimonial">
                                        <h2>David Smith</h2>
                                        <span class="client-role">Software Engineer</span>
                                        <p>Efficiently formulate viral data for error-free users. Distinctively provide access to fully tested total linkage rather than process-centric infrastructures.</p>
                                        <div class="quote-icon"><img src="assets/images/testimonial/quote1.png" alt="Image" class="img-fluid"></div>
                                    </div>

                                    <div class="testimonial">
                                        <h2>David Smith</h2>
                                        <span class="client-role">Software Engineer</span>
                                        <p>Efficiently formulate viral data for error-free users. Distinctively provide access to fully tested total linkage rather than process-centric infrastructures.</p>
                                        <div class="quote-icon"><img src="assets/images/testimonial/quote1.png" alt="Image" class="img-fluid"></div>
                                    </div>
                                </div><!-- testimonial-slider -->
                            </div><!-- testimonial-content -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content lt-team section-padding text-center">
                <div class="container">
                    <div class="title-center">
                        <div class="section-title">
                            <h1>Team Members</h1>
                            <div class="paragraph">
                                <p>Dramatically harness real-time portals whereas distinctive services. Conveniently seize standardized best practices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-slider arrow-style-1">
                        <div class="lt-member style-one">
                            <div class="member-thumb">
                                <img src="assets/images/team/1.jpg" alt="Member Image" class="img-fluid">
                                <div class="team-social">
                                    <ul class="global-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                    <div class="share-icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info">
                                <h2><a href="agent-details.html">Elina Amy</a></h2>
                                <span>Civil Engineer</span>
                            </div>
                        </div>

                        <div class="lt-member style-one">
                            <div class="member-thumb">
                                <img src="assets/images/team/2.jpg" alt="Member Image" class="img-fluid">
                                <div class="team-social">
                                    <ul class="global-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                    <div class="share-icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info">
                                <h2><a href="agent-details.html">David Smith</a></h2>
                                <span>Broker</span>
                            </div>
                        </div>

                        <div class="lt-member style-one">
                            <div class="member-thumb">
                                <img src="assets/images/team/3.jpg" alt="Member Image" class="img-fluid">
                                <div class="team-social">
                                    <ul class="global-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                    <div class="share-icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info">
                                <h2><a href="#">Angelina Ammy</a></h2>
                                <span>Civil Engineer</span>
                            </div>
                        </div>

                        <div class="lt-member style-one">
                            <div class="member-thumb">
                                <img src="assets/images/team/4.jpg" alt="Member Image" class="img-fluid">
                                <div class="team-social">
                                    <ul class="global-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                    <div class="share-icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info">
                                <h2><a href="agent-details.html">Abel Breath</a></h2>
                                <span>Civil Engineer</span>
                            </div>
                        </div>
                    </div><!-- team-slider -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding text-center bg-image section-before" style="background-image: url(assets/images/bg/featured-bg-1.jpg);" >
                <div class="container">
                    <div class="feature-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature style-one">
                                    <div class="feature-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <h2>Find Homes First</h2>
                                    <p>Compellingly brand 24/7 e-services whereas functional potentialities. Holisticly restore parallel.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature style-one">
                                    <div class="feature-icon">
                                        <i class="fa fa-bolt" aria-hidden="true"></i>
                                    </div>
                                    <h2>Super Fast Work</h2>
                                    <p>Compellingly brand 24/7 e-services whereas functional potentialities. Holisticly restore parallel.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature style-one">
                                    <div class="feature-icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                    <h2>Give You Very Quickly</h2>
                                    <p>Compellingly brand 24/7 e-services whereas functional potentialities. Holisticly restore parallel.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- feature-content -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content lt-blog section-padding bg-color">
                <div class="container">
                    <div class="title-center">
                        <div class="section-title">
                            <h1>Latest Blog</h1>
                            <div class="paragraph">
                                <p>Dramatically harness real-time portals whereas distinctive services. Conveniently seize standardized best practices.</p>
                            </div>
                        </div>
                    </div><!-- /.title-center -->
                    <div class="blog-slider arrow-style-1">
                        <div class="tl-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="blog-details.html"><img src="assets/images/blog/4.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta">
                                    <ul class="global-list">
                                        <li><a href="#"><span class="mr-1 fa fa-clock-o"></span> 22 May 2020</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title"><a href="blog-details.html">Dramatically leverage</a></h2>
                                <p>Credibly incentivize diverse manufactured products through transparent.</p>
                                <a class="read-more" href="blog-details.html">View More <span class="fa fa-arrow-right"></span></a>
                            </div>
                        </div><!-- /.tl-post  -->
                        <div class="tl-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="blog-details.html"><img src="assets/images/blog/5.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta">
                                    <ul class="global-list">
                                        <li><a href="#"><span class="mr-1 fa fa-clock-o"></span> 22 May 2020</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title"><a href="blog-details.html">Distinctively embrace</a></h2>
                                <p>Credibly incentivize diverse manufactured products through transparent.</p>
                                <a class="read-more" href="blog-details.html">View More <span class="fa fa-arrow-right"></span></a>
                            </div>
                        </div><!-- /.tl-post  -->
                        <div class="tl-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="blog-details.html"><img src="assets/images/blog/6.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta">
                                    <ul class="global-list">
                                        <li><a href="#"><span class="mr-1 fa fa-clock-o"></span> 22 May 2020</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title"><a href="blog-details.html">Proactively orchestrate</a></h2>
                                <p>Credibly incentivize diverse manufactured products through transparent.</p>
                                <a class="read-more" href="blog-details.html">View More <span class="fa fa-arrow-right"></span></a>
                            </div>
                        </div><!-- /.tl-post  -->
                        <div class="tl-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="blog-details.html"><img src="assets/images/blog/1.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta">
                                    <ul class="global-list">
                                        <li><a href="#"><span class="mr-1 fa fa-clock-o"></span> 22 May 2020</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title"><a href="blog-details.html">Collaboratively iterate</a></h2>
                                <p>Credibly incentivize diverse manufactured products through transparent.</p>
                                <a class="read-more" href="blog-details.html">View More <span class="fa fa-arrow-right"></span></a>
                            </div>
                        </div><!-- /.tl-post  -->
                    </div><!-- /.blog-slider -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->

        <div class="lt-section">
            <div class="section-content section-padding text-center">
                <div class="container">
                    <div class="tl-brand">
                        <div class="brand-slider arrow-style-1">
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

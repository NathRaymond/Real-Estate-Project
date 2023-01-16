<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:22:38 GMT -->

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

    <div class="property-content">
        <div class="bg-image" style="background-image: url(assets/images/bg/banner-bg1.jpg);">
            <div id="property-carousel" class="carousel slide property-carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="property-text">
                                        <h1 data-animation="animated fadeInDown">Luxury Mansion</h1>
                                        <p data-animation="animated fadeInDown">9002 Lakes Bulevard, West Palm Beach,
                                            33412 Florida, US</p>
                                        <a href="#" class="btn btn-transparent"
                                            data-animation="animated fadeInUp">Get More Information</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box-content" data-animation="animated fadeInUp">
                                        <h2>$2.235.000</h2>
                                        <span>2 living rooms, 4 bedrooms</span>
                                        <span>3 bathrooms, 2 garages</span>
                                        <a href="{{ route('property-details') }}" class="btn btn-primary">More Details</a>
                                    </div><!-- /.box-content -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="property-text">
                                        <h1 data-animation="animated pulse">Luxury Mansion</h1>
                                        <p data-animation="animated pulse">9002 Lakes Bulevard, West Palm Beach, 33412
                                            Florida, US</p>
                                        <a href="#" class="btn btn-transparent"
                                            data-animation="animated pulse">Get More Information</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box-content" data-animation="animated fadeInRight">
                                        <h2>$2.235.000</h2>
                                        <span>2 living rooms, 4 bedrooms</span>
                                        <span>3 bathrooms, 2 garages</span>
                                        <a href="{{ route('property-details') }}" class="btn btn-primary">More Details</a>
                                    </div><!-- /.box-content -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="property-text">
                                        <h1 data-animation="animated fadeInUp">Luxury Mansion</h1>
                                        <p data-animation="animated fadeInUp">9002 Lakes Bulevard, West Palm Beach,
                                            33412 Florida, US</p>
                                        <a href="#" class="btn btn-transparent"
                                            data-animation="animated fadeInUp">Get More Information</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box-content" data-animation="animated fadeInDown">
                                        <h2>$2.235.000</h2>
                                        <span>2 living rooms, 4 bedrooms</span>
                                        <span>3 bathrooms, 2 garages</span>
                                        <a href="{{ route('property-details') }}" class="btn btn-primary">More Details</a>
                                    </div><!-- /.box-content -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#property-carousel" data-slide-to="0" class="active">01</li>
                    <li data-target="#property-carousel" data-slide-to="1">02</li>
                    <li data-target="#property-carousel" data-slide-to="2">03</li>
                </ol>
            </div><!-- /.property-carousel -->
        </div><!-- /.property-content -->

        <div class="lt-breadcrumb">
            <div class="breadcrumb-content">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="title">
                            <h1>Property</h1>
                        </div>
                        <ol class="breadcrumb align-self-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Property</li>
                        </ol>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-content -->
        </div><!-- /.lt-breadcrumb -->
    </div><!-- /.property-content -->

    <div class="lt-page-content bg-color">
        <div class="lt-section">
            <div class="section-content section-padding">
                <div class="container">
                    <div class="lt-filter-form list-view-tab">
                        <div class="lt-filter-form-content">
                            <div class="lt-filter-form">
                                <form action="#">
                                    <div class="form-content">
                                        <div class="search-content">
                                            <input class="form-control" name="search" type="text"
                                                placeholder="Search here..">
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
                                        <div class="iocn align-self-center">
                                            <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="button">
                                            <input type="submit" value="Search" class="btn btn-primary">
                                        </div>
                                    </div><!-- /.row -->
                                </form>
                            </div>

                            <div class="lt-filter d-flex justify-content-between">
                                <div class="left-content align-self-center">
                                    <h3>Found 4 Agents</h3>
                                </div><!-- /.left-content -->
                                <div class="right-content d-flex">
                                    <ul class="property-tabs global-list d-flex align-self-center">
                                        <li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i>
                                        </li>
                                        <li class="list-view-tab active"> <i class="fa fa-list"
                                                aria-hidden="true"></i></li>
                                    </ul>
                                    <div class="short-by">
                                        <select class="form-control">
                                            <option>Sort by</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.lt-filter-content -->

                        <div class="row">
                            <div class="col-md-7 col-lg-8 lt-sticky">
                                <div class="theiaStickySidebar">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/1.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/1.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>8514 W. Pennington St</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Completely Mansion</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author1.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/2.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/2.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>8205 Myers Dr</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Quickly Simplify
                                                                Services</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author2.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/3.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/3.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>7070 strong Ave. VA 22015</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Globally Services
                                                                Whereas</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author3.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/4.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/4.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>7462 Meadow Street</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Uniquely Deploy
                                                                Strategies</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author4.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/5.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/5.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>764 West Wall Avenue</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Appropriately
                                                                Competitive</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author5.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/6.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/6.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>808 Ryan Rd. GA 30240</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Proactively
                                                                communicate.</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author7.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/7.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/7.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>808 Ryan Rd. GA 30240</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Proactively
                                                                communicate.</a></h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author8.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/8.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="icons">
                                                            <ul class="global-list">
                                                                <li><a href="{{ route('property-details') }}"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="assets/images/property/8.jpg"
                                                                        class="lt-popup"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex map-location justify-content-between">
                                                            <div class="left-content">
                                                                <span class="map-icon"><i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i></span>
                                                                <span>808 Ryan Rd. GA 30240</span>
                                                            </div>
                                                            <div class="heart-iocn">
                                                                <a href="#"><i class="fa fa-heart"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-info">
                                                    <div class="info-top">
                                                        <h2><a href="{{ route('property-details') }}">Architects modern house</a>
                                                        </h2>
                                                        <div class="meta">
                                                            <ul class="global-list">
                                                                <li><span><img src="assets/images/others/icon7.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Badroom</li>
                                                                <li><span><img src="assets/images/others/icon8.png"
                                                                            alt="Image" class="img-fluid"></span>6
                                                                    Bathroom</li>
                                                                <li><span><img src="assets/images/others/icon9.png"
                                                                            alt="Image"
                                                                            class="img-fluid"></span>6000 Sf.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="property-footer d-flex justify-content-between">
                                                        <div class="author d-flex">
                                                            <span class="author-thumb"><img
                                                                    src="assets/images/others/author6.png"
                                                                    alt="Image" class="img-fluid"></span>
                                                            <span class="align-self-center">Anricia Socibalia</span>
                                                        </div><!-- /.author -->
                                                        <div class="price align-self-center">
                                                            <h3>$4,500/m</h3>
                                                        </div>
                                                    </div><!-- /.property-footer -->
                                                </div><!-- /.property-info -->
                                            </div><!-- /.property -->
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="lt-pagination">
                                        <ul class="pagination ">
                                            <li><a class="page-numbers" href="#"><i
                                                        class="fa fa-chevron-left"></i></a></li>
                                            <li><span class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="page-numbers" href="#"><i
                                                        class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div><!-- /.lt-pagination -->
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4 lt-sidebar lt-sticky">
                                <div class="widget-area theiaStickySidebar">
                                    <div class="widget">
                                        <h3 class="widget_title">Featured Properties</h3>
                                        <div class="featured-slider">
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/sm-slider-2.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Hot</a>
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="lt-price">
                                                            <span>$570,600</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.property -->
                                            <div class="property">
                                                <div class="thumb">
                                                    <img src="assets/images/property/sm-slider-2.jpg" alt="Image"
                                                        class="img-fluid">
                                                    <div class="overlay">
                                                        <div class="property-status">
                                                            <a href="#">Hot</a>
                                                            <a href="#">Rent</a>
                                                        </div>
                                                        <div class="lt-price">
                                                            <span>$570,600</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.property -->
                                        </div><!-- /.featured-slider -->
                                    </div><!-- /.widget -->

                                    <div class="widget widget_property">
                                        <h3 class="widget_title">Recently Viewed</h3>
                                        <ul>
                                            <li class="media">
                                                <div class="entry-thumbnail">
                                                    <a href="{{ route('property-details') }}"><img
                                                            src="assets/images/property/1.png" alt="Image"
                                                            class="img-fluid"></a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="{{ route('property-details') }}">Authoritatively harness</a>
                                                    <div class="map-location">
                                                        <span class="map-icon"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i></span>
                                                        <span>780 Lynnway, Lynn MA 1905</span>
                                                    </div>
                                                    <span class="price">$1,000,000</span>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="entry-thumbnail">
                                                    <a href="{{ route('property-details') }}"><img
                                                            src="assets/images/property/2.png" alt="Image"
                                                            class="img-fluid"></a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="{{ route('property-details') }}">Revolutionary markets</a>
                                                    <div class="map-location">
                                                        <span class="map-icon"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i></span>
                                                        <span>780 Lynnway, Lynn MA 1905</span>
                                                    </div>
                                                    <span class="price">$1,000,000</span>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="entry-thumbnail">
                                                    <a href="{{ route('property-details') }}"><img
                                                            src="assets/images/property/3.png" alt="Image"
                                                            class="img-fluid"></a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="{{ route('property-details') }}">Rapidiously coordinate</a>
                                                    <div class="map-location">
                                                        <span class="map-icon"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i></span>
                                                        <span>780 Lynnway, Lynn MA 1905</span>
                                                    </div>
                                                    <span class="price">$1,000,000</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget -->
                                </div><!-- /.widget-area -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.lt-filter-form -->
                </div><!-- /.container -->
            </div><!-- /.section-content -->
        </div><!-- /.lt-section -->
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

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/{{ route('property-details') }} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:24 GMT -->
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

        <div class="property-content">
            <div class="bg-image" style="background-image: url(assets/images/bg/banner-bg1.jpg);">
                <div id="property-carousel" class="carousel slide property-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <div class="property-text">
                                            <h1>Luxury Mansion</h1>
                                            <p>9002 Lakes Bulevard, West Palm Beach, 33412 Florida, US</p>
                                            <a href="#" class="btn btn-transparent">Get More Information</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="box-content">
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
                                            <h1>Luxury Mansion</h1>
                                            <p>9002 Lakes Bulevard, West Palm Beach, 33412 Florida, US</p>
                                            <a href="#" class="btn btn-transparent">Get More Information</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="box-content">
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
                                            <h1>Luxury Mansion</h1>
                                            <p>9002 Lakes Bulevard, West Palm Beach, 33412 Florida, US</p>
                                            <a href="#" class="btn btn-transparent">Get More Information</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="box-content">
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
                                <h1>Property Details</h1>
                            </div>
                            <ol class="breadcrumb align-self-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Property Details</li>
                            </ol>                        
                        </div>
                    </div><!-- /.container -->
                </div><!-- /.breadcrumb-content -->
            </div><!-- /.lt-breadcrumb -->
        </div><!-- /.property-content -->

        <div class="lt-page-content bg-color">
            <div class="lt-section">
                <div class="section-content property-details section-padding" >
                    <div class="container">
                        <div class="property">
                            <div class="property-info">
                                <div class="d-flex">
                                    <div class="property-status">
                                        <a href="#">Hot</a>
                                        <a href="#">Sale</a>
                                    </div>
                                    <ul class="global-list d-flex align-self-center lt-rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>                                    
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="left-content">
                                        <h2>Globally Cooperativeally Mansion</h2>
                                        <div class="d-flex map-location">
                                            <div class="left-content">
                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span>970 Torringford Street, Torrington CT 6790</span>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="lt-price align-self-end">
                                        <span>From</span>
                                        <h3>$249,155.00</h3>
                                    </div>
                                </div>
                                <div class="info-top">
                                    <div class="d-flex justify-content-between">
                                        <div class="meta">
                                            <ul class="global-list">
                                                <li><span><img src="assets/images/others/icon7.png" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                                <li><span><img src="assets/images/others/icon8.png" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                                <li><span><img src="assets/images/others/icon9.png" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                                <li><span><img src="assets/images/others/icon10.png" alt="Image" class="img-fluid"></span>2 Garage</li>
                                            </ul>
                                        </div>
                                        <div class="print-heart align-self-center">
                                            <div class="print">
                                                <a href="#"><i class="fa fa-print" aria-hidden="true"></i> <span>Print</span></a>
                                            </div>
                                            <div class="heart-iocn">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>  
                                        </div>                                      
                                    </div>
                                </div>
                            </div><!-- /.property-info -->
                            
                            <div class="property-details-slider">
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>  
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>  
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>  
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>  
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>  
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>  
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>                                
                            </div><!-- /.property-details-slider -->

                            <div class="details-slider-nav">
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>   
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>   
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>   
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>   
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>   
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>   
                                <div class="thumb">
                                    <img src="assets/images/property/slider1.jpg" alt="Image" class="img-fluid">
                                </div>     
                            </div><!-- /.details-slider-nav -->

                            <div class="row">
                                <div class="col-md-7 col-lg-8 lt-sticky">
                                    <div class="theiaStickySidebar">
                                        <div class="bg-white sub-section property-description">
                                            <div class="title">
                                                <h2>Property Description</h2>
                                                <div class="viewing align-self-center">
                                                    <span><i class="fa fa-check-square" aria-hidden="true"></i> Request Viewing</span>
                                                </div>
                                            </div>
                                            <p>Dramatically provide access to wireless intellectual capital via best-of-breed technologies. Distinctively leverage existing innovative resources for ubiquitous e-services. Intrinsicly communicate revolutionary initiatives through diverse methods of empowerment. Compellingly simplify go forward collaboration and idea-sharing after future-proof services. Professionally seize resource sucking manufactured products through world-class manufactured products.</p>
                                            <p>Dynamically develop cross-media outsourcing before progressive markets. Continually benchmark fully tested process improvements with distinctive channels. Energistically foster efficient customer service with one-to-one alignments. Progressively drive client-centric content before process-centric e-commerce. Objectively repurpose next-generation leadership skills whereas team building data.</p>
                                            <div class="features-list">
                                                <div class="title">
                                                    <h2>Detail and Features</h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul class="global-list">
                                                            <li>
                                                                <span>Type:</span>
                                                                <span>Residential</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-bed" aria-hidden="true"></i></span>Bedrooms:</span>
                                                                <span>3</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-map" aria-hidden="true"></i></span>Plot Size :</span>
                                                                <span>100x200x300</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Orientation :</span>
                                                                <span>Northest</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>Kitchens :</span>
                                                                <span>1</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul class="global-list">
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-car" aria-hidden="true"></i></span>Parking :</span>
                                                                <span>Residential</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-bath" aria-hidden="true"></i></span>Bathrooms :</span>
                                                                <span>3</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-object-group" aria-hidden="true"></i></span>Bathrooms :</span>
                                                                <span>200 sq ft</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-television" aria-hidden="true"></i></span>Living Rooms:</span>
                                                                <span>1</span>
                                                            </li>
                                                            <li>
                                                                <span><span class="icon"><i class="fa fa-building-o" aria-hidden="true"></i></span>Rooms :</span>
                                                                <span>8</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- /.features-list -->
                                        </div><!-- /.property-description -->

                                        <div class="bg-white sub-section amenities">
                                            <div class="title">
                                                <h2>Detail and Features</h2>
                                            </div>
                                            <ul class="global-list">
                                                <li>Air Conditioning</li>
                                                <li>Barbeque</li>
                                                <li>Built-In Wardrobes</li>
                                                <li>Fireplace</li>
                                                <li>Barbeque</li>
                                                <li>Floor Coverings</li>
                                                <li>Dishwasher</li>
                                                <li>Park</li>
                                                <li>Park</li>
                                            </ul>
                                            <div class="floor-plans">
                                                <div class="title">
                                                    <h2>Floor Plans</h2>                     
                                                </div>
                                                <div id="accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="heading-1">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span>First Floor</span>Beds : 2  Bath : 2  Sqft : 750</button>
                                                        </div>

                                                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="thumb">
                                                                    <img src="assets/images/property/details1.jpg" alt="Image" class="img-fluid">
                                                                </div>
                                                                <p>Authoritatively implement customized quality vectors and dynamic applications. Enthusiastically leverage other's out-of-the-box methodologies vis-a-vis superior results. Globally embrace impactful information after seamless content. Dynamically initiate B2B sources without stand-alone manufactured products. Collaboratively synthesize quality schemas via low-risk high-yield core competencies.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="heading-2">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span>First Floor</span>Beds : 2  Bath : 2  Sqft : 750</button>
                                                        </div>
                                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="thumb">
                                                                    <img src="assets/images/property/details1.jpg" alt="Image" class="img-fluid">
                                                                </div>
                                                                <p>Authoritatively implement customized quality vectors and dynamic applications. Enthusiastically leverage other's out-of-the-box methodologies vis-a-vis superior results. Globally embrace impactful information after seamless content. Dynamically initiate B2B sources without stand-alone manufactured products. Collaboratively synthesize quality schemas via low-risk high-yield core competencies.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="heading-3">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"><span>First Floor</span>Beds : 2  Bath : 2  Sqft : 750</button>
                                                        </div>
                                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="thumb">
                                                                    <img src="assets/images/property/details1.jpg" alt="Image" class="img-fluid">
                                                                </div>
                                                                <p>Authoritatively implement customized quality vectors and dynamic applications. Enthusiastically leverage other's out-of-the-box methodologies vis-a-vis superior results. Globally embrace impactful information after seamless content. Dynamically initiate B2B sources without stand-alone manufactured products. Collaboratively synthesize quality schemas via low-risk high-yield core competencies.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /#accordion -->                                               
                                            </div><!-- /.floor-plans -->
                                        </div><!-- /.amenities -->

                                        <div class="bg-white sub-section attachments">
                                            <div class="title">
                                                <h2>Attachments</h2>
                                            </div>
                                            <div class="lt-download">
                                                <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Download All Images</span></a>
                                            </div>
                                        </div><!-- /.attachments -->

                                        <div class="bg-white sub-section">
                                            <div class="title">
                                                <h2>Video</h2>
                                            </div>
                                            <div class="lt-video">
                                                <div class="thumb">
                                                    <img src="assets/images/blog/list1.jpg" alt="Image" class="img-fluid">
                                                </div>
                                                <div class="author-content">
                                                    <div class="author">
                                                        <img class="img-fluid" src="assets/images/others/author2.png" alt="Image">
                                                    </div> 
                                                    <div class="text align-self-center">
                                                        <h3>Conveniently e-enable collaborative mindshare</h3>
                                                        <p>From <span>Erfassen</span></p>
                                                    </div>
                                                </div>                                           
                                                <a href="https://www.youtube.com/watch?v=AI3pORAXU4g"><span class="icon"><i class="fa fa-play" aria-hidden="true"></i></span></a>
                                            </div>
                                        </div><!-- /.attachments -->

                                        <div class="bg-white sub-section lt-nearby">
                                            <div class="title">
                                                <h2>What is Nearby?</h2>
                                            </div>
                                            
                                            <div class="nearby-content">
                                                <h3>Restaurants</h3>
                                                <div class="nearby">
                                                    <div class="left-content">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/4.png" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text align-self-center">
                                                            <p>Bauhaus Restaurant</p>
                                                            <div class="d-flex map-location">
                                                                <div class="left-content">
                                                                    <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                    <span>20 Soojian Dr, Leicester MA 1524</span>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="reviews align-self-center">
                                                        <span>1144 reviews</span>
                                                        <ul class="global-list d-flex">
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.nearby -->

                                                <div class="nearby">
                                                    <div class="left-content">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/5.png" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text align-self-center">
                                                            <p>Bauhaus Restaurant</p>
                                                            <div class="d-flex map-location">
                                                                <div class="left-content">
                                                                    <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                    <span>1775 Washington St, Hanover MA 2339</span>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="reviews align-self-center">
                                                        <span>1144 reviews</span>
                                                        <ul class="global-list d-flex">
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.nearby -->

                                                <div class="nearby">
                                                    <div class="left-content">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/6.png" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text align-self-center">
                                                            <p>Blue Water Cafe</p>
                                                            <div class="d-flex map-location">
                                                                <div class="left-content">
                                                                    <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                    <span>780 Lynnway, Lynn MA 1905</span>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="reviews align-self-center">
                                                        <span>1144 reviews</span>
                                                        <ul class="global-list d-flex">
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.nearby -->
                                            </div><!-- /.nearby-content -->
                                            
                                            <div class="nearby-content">
                                                <h3>Education</h3>
                                                <div class="nearby">
                                                    <div class="left-content">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/7.png" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text align-self-center">
                                                            <p>Bronx High School of Science</p>
                                                            <div class="d-flex map-location">
                                                                <div class="left-content">
                                                                    <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                    <span>20 Soojian Dr, Leicester MA 1524</span>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="reviews align-self-center">
                                                        <span>1144 reviews</span>
                                                        <ul class="global-list d-flex">
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.nearby -->

                                                <div class="nearby">
                                                    <div class="left-content">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/8.png" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text align-self-center">
                                                            <p>Brooklyn College Academy</p>
                                                            <div class="d-flex map-location">
                                                                <div class="left-content">
                                                                    <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                    <span>20 Soojian Dr, Leicester MA 1524</span>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="reviews align-self-center">
                                                        <span>1144 reviews</span>
                                                        <ul class="global-list d-flex">
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.nearby -->

                                                <div class="nearby">
                                                    <div class="left-content">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/9.png" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text align-self-center">
                                                            <p>Brooklyn Latin School</p>
                                                            <div class="d-flex map-location">
                                                                <div class="left-content">
                                                                    <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                    <span>780 Lynnway, Lynn MA 1905</span>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="reviews align-self-center">
                                                        <span>1144 reviews</span>
                                                        <ul class="global-list d-flex">
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.nearby -->
                                            </div><!-- /.nearby-content -->
                                        </div><!-- /.attachments -->

                                        <div class="bg-white sub-section">
                                            <div class="title">
                                                <h2>360° Virtual Tour</h2>
                                            </div>
                                            <div class="thumb">
                                                <img src="assets/images/blog/list1.jpg" alt="Image" class="img-fluid">
                                            </div>
                                        </div><!-- /.sub-section -->

                                        <div class="bg-white sub-section">
                                            <div class="section-content lt-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10425.465618217717!2d-123.0855711998103!3d49.26199450151496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1586379153694!5m2!1sen!2sbd"   allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                <div class="map-address bg-white">
                                                    <div class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                                    <span>374 William S Canning Blvd, Fall River MA 2721</span>
                                                </div>
                                            </div><!-- /section-content -->
                                        </div><!-- /lt-section -->   

                                        <div class="bg-white sub-section">
                                            <div class="title">
                                                <h2>Page Views Statistics</h2>
                                            </div>
                                            <div class="page-views-statistics">
                                                <canvas id="ltChart"></canvas>
                                            </div><!-- page-views-statistics -->
                                        </div>                                   

                                        <div class="rating-review bg-white sub-section">
                                            <div class="title">
                                                <h2>Ratings & Reviews</h2>
                                            </div>
                                            <div class="rating-review-inner">
                                                <div class="rating">
                                                    <ol>
                                                        <li>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span>70%</span>
                                                        </li>
                                                        <li>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span>54%</span>
                                                        </li>
                                                        <li>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span>99%</span>
                                                        </li>
                                                        <li>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span>0%</span>
                                                        </li>
                                                        <li>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span>0%</span>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div class="review">
                                                    <div class="d-flex">
                                                        <div class="rating-number"><span>4.70</span></div>
                                                        <div class="rating-star">
                                                            <span class="title">Overall rating</span>
                                                            <div class="d-flex">
                                                                <ul class="global-list stars">
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <span>based on all ratings</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-parcent">
                                                        <ul class="global-list">
                                                            <li>Value <span>88%</span></li>
                                                            <li>Quality <span>100%</span></li>
                                                            <li>Service <span>100%</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- /.rating-review-inner --> 
                                            <div class="lt-comments-area">          
                                                <h3>1 Review</h3>         
                                                <ul class="comment-list global-list">
                                                    <li class="media">
                                                        <div class="commenter-avatar">
                                                            <a href="#"><img class="img-fluid" src="assets/images/others/author2.png" alt="Image"></a>
                                                        </div>                                            
                                                        <div class="comment-box media-body">
                                                            <div class="comment-meta">
                                                                <span class="title"><a href="#" class="url">Angelina Ammy</a></span>
                                                                <div class="d-flex float-right">
                                                                    <div class="rating-star">
                                                                        <ul class="global-list stars">
                                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="lt-reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting istry  Ipsum hsben the standard dummy.</p>
                                                            </div>
                                                            <span class="lt-date">2 day ago</span>
                                                        </div><!-- /.comment-box -->       
                                                    </li>                          
                                                </ul>                                   
                                            </div><!-- /.lt-comments-area -->                                       
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-4 lt-sticky">
                                    <div class="lt-sidebar theiaStickySidebar">
                                        <div class="widget-area">
                                            <div class="widget">
                                                <h3 class="widget_title">Featured Properties</h3>
                                                <div class="featured-slider">
                                                    <div class="property">
                                                        <div class="thumb">
                                                            <img src="assets/images/property/sm-slider-2.jpg" alt="Image" class="img-fluid">
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
                                                            <img src="assets/images/property/sm-slider-2.jpg" alt="Image" class="img-fluid">
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

                                            <div class="widget contact-widget">
                                                <h3 class="widget_title">Schedule a Tour</h3>
                                                <form action="#" class="lt-form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Your Name">
                                                        <div class="input-addon">
                                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Phone">
                                                        <div class="input-addon">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                        <div class="input-addon">
                                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Tour Date">
                                                        <div class="input-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Tour Time">
                                                        <div class="input-addon">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
                                                        <div class="input-addon">
                                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                </form>
                                            </div><!-- /.widget --> 

                                            <div class="widget calculator-widget">
                                                <h3 class="widget_title">Mortgage Calculator</h3>
                                                <form action="#" class="lt-form">
                                                    <div class="form-group">
                                                        <label for="m-amount">Mortgage Amount (USD)</label>
                                                        <input type="text" id="m-amount" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="interest-rate">Interest Rate (%)</label>
                                                        <input type="text" id="interest-rate" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mortgage-term">Mortgage Term (Year)</label>
                                                        <input type="text" id="mortgage-term" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deposit">Deposit (USD)</label>
                                                        <input type="text" id="deposit" class="form-control" >
                                                    </div>
                                                    <div class="form-group d-flex justify-content-start m-0">
                                                        <input type="submit" class="btn btn-primary" value="Calculate">
                                                        <input type="reset" class="btn" value="Reset">
                                                    </div>
                                                </form>
                                            </div><!-- /.widget -->  

                                            <div class="widget widget_property">
                                                <h3 class="widget_title">Recently Viewed</h3>
                                                <ul>
                                                    <li class="media">
                                                        <div class="entry-thumbnail">
                                                            <a href="{{ route('property-details') }}"><img src="assets/images/property/1.png" alt="Image" class="img-fluid"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="{{ route('property-details') }}">Authoritatively harness</a>
                                                            <div class="map-location">
                                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                <span>780 Lynnway, Lynn MA 1905</span>
                                                            </div>                                                      
                                                            <span class="price">$1,000,000</span>
                                                        </div>
                                                    </li> 
                                                    <li class="media">
                                                        <div class="entry-thumbnail">
                                                            <a href="{{ route('property-details') }}"><img src="assets/images/property/2.png" alt="Image" class="img-fluid"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="{{ route('property-details') }}">Revolutionary markets</a>
                                                            <div class="map-location">
                                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                <span>780 Lynnway, Lynn MA 1905</span>
                                                            </div>                                                      
                                                            <span class="price">$1,000,000</span>
                                                        </div>
                                                    </li> 
                                                    <li class="media">
                                                        <div class="entry-thumbnail">
                                                            <a href="{{ route('property-details') }}"><img src="assets/images/property/3.png" alt="Image" class="img-fluid"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="{{ route('property-details') }}">Rapidiously coordinate</a>
                                                            <div class="map-location">
                                                                <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                <span>780 Lynnway, Lynn MA 1905</span>
                                                            </div>                                                      
                                                            <span class="price">$1,000,000</span>
                                                        </div>
                                                    </li>                                      
                                                </ul>                                        
                                            </div><!-- /.widget -->         
                                        </div><!-- /.widget-area -->                            
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.property -->                        
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
        <script src="assets/js/chart.js"></script>
        <script src="assets/js/main.js"></script> 
        <script>
            
            var ctx = document.getElementById('ltChart');
            var ltChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['3 - 20 - 20', '4 - 20 - 20', '5 - 20 - 20', '6 - 20 - 20', '7 - 20 - 20', '8 - 20 - 20', '9 - 20 - 20', '10 - 20 - 20'],
                    datasets: [{
                        data: [0.5, 2.3, 1, 3.8, 1.9, 3, 1.8, 5.01],
                backgroundColor: [
                    'rgba(255, 99, 132, 0)'
                ],
                borderColor: [
                    '#079bee',
                ],
                borderWidth: 3
                    }]
                },
                defaults: {
                    global: {
                        // example font
                        defaultFontFamily: "'Oxanium'"
                    }
                },
                options: {
                    legend: {
                        display: false,
                    }, 
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display:false
                            }, 
                            ticks: {
                                beginAtZero: true,
                                callback: function (value) { if (Number.isInteger(value)) { return value; } },
                                
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            labelColor: function(tooltipItem, chart) {
                                return {
                                    borderColor: '#179bee',
                                    backgroundColor: '#179bee'
                                };
                            },
                            labelTextColor: function(tooltipItem, chart) {
                                return '#ffffff';
                            }
                        }
                    }
                }
            });

        </script>    
    </body>

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/{{ route('property-details') }} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:29 GMT -->
</html> 
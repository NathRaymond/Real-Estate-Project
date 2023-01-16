<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:22:59 GMT -->
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
                            <h1>Agents</h1>
                        </div>
                        <ol class="breadcrumb align-self-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agents</li>
                        </ol>                        
                    </div>
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-content -->
        </div><!-- /.lt-breadcrumb -->

        <div class="lt-page-content bg-color">            
            <div class="lt-section">
                <div class="section-content lt-team section-padding" >
                    <div class="container">
                        <div class="lt-filter-form list-view-tab">
                            <div class="lt-filter-form-content">
                                <div class="lt-filter d-flex justify-content-between">
                                    <div class="left-content align-self-center">
                                        <h3>Found 4 Agents</h3>
                                    </div><!-- /.left-content -->
                                    <div class="right-content d-flex">
                                        <ul class="property-tabs global-list d-flex align-self-center">
                                            <li class="grid-view-tab active"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                                            <li class="list-view-tab"> <i class="fa fa-list" aria-hidden="true"></i></li>
                                        </ul>
                                        <div class="short-by">
                                            <select class="form-control">
                                                <option>Short by</option>
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
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/1.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Angelina Maty</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/2.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">David Smith</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/3.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Polo Kolpa</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/4.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Abel Breath</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/5.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Aileen Bess</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/6.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Abraham Alfie</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/7.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Albern Caleb</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/8.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Caroline Charis</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lt-member">
                                                    <div class="member-thumb">
                                                        <img src="assets/images/team/9.jpg" alt="Member Image" class="img-fluid">
                                                        <span>Top Seller</span>
                                                    </div>                                
                                                    <div class="member-info">
                                                        <h2><a href="{{ route('agent-details') }}">Bradley Carroll</a></h2>
                                                        <span>Broker</span>
                                                        <div class="paragraph">
                                                            <p>Assertively predominate an expanded array of scenarios rather than bleeding.</p>
                                                        </div>
                                                        <ul class="global-list">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                        </ul>
                                                    </div>                                
                                                </div>
                                            </div>
                                        </div><!-- row --> 
                                        <div class="lt-pagination">
                                            <ul class="pagination ">
                                                <li><a class="page-numbers" href="#"><i class="fa fa-chevron-left"></i></a></li>
                                                <li><span class="page-numbers current">1</span></li>
                                                <li><a class="page-numbers" href="#">2</a></li>
                                                <li><a class="page-numbers" href="#">3</a></li>
                                                <li><a class="page-numbers" href="#"><i class="fa fa-chevron-right"></i></a></li>
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
                                                        <img src="assets/images/property/featured-thumb.jpg" alt="Image" class="img-fluid">
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
                                                        <img src="assets/images/property/featured-thumb.jpg" alt="Image" class="img-fluid">
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
                                        
                                        <div class="widget widget_categories">
                                            <h3 class="widget_title">Categories</h3>    
                                            <ul>
                                                <li><a href="#">Announcement (3)</a></li>
                                                <li><a href="#">Apartment (4)</a></li>
                                                <li><a href="#">Design (3)</a></li>
                                                <li><a href="#">Mortgages (6)</a></li>
                                                <li><a href="#">Properties (6)</a></li>
                                                <li><a href="#">Real Estate (5)</a></li>
                                            </ul>                           
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

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:04 GMT -->
</html> 
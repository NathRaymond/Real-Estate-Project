@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="db-box box-1">
                <div class="db-box-icon">
                    <i class="fa fa-th-large" aria-hidden="true"></i>
                </div>
                <div class="db-box-inner">
                    <span>Property Sale</span>
                    <span class="tl-border"><img src="{{asset('assets/images/db/border.png')}}" alt="Image" class="img-fluid"></span>
                    <h3>7069</h3>
                    <span class="rating">43%</span>
                </div>
            </div>
        </div><!-- db-box -->
        
        <div class="col-sm-6 col-md-3">
            <div class="db-box box-2">
                <div class="db-box-icon">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="db-box-inner">
                    <span>Property View</span>
                    <span class="tl-border"><img src="{{asset('assets/images/db/border.png')}}" alt="Image" class="img-fluid"></span>
                    <h3>22,000</h3>
                    <span class="rating">25%</span>
                </div>
            </div>
        </div><!-- db-box -->
        
        <div class="col-sm-6 col-md-3">
            <div class="db-box box-3">
                <div class="db-box-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="db-box-inner">
                    <span>Property Listed</span>
                    <span class="tl-border"><img src="{{asset('assets/images/db/border.png')}}" alt="Image" class="img-fluid"></span>
                    <h3>200</h3>
                    <span class="rating">30%</span>
                </div>
            </div>
        </div><!-- db-box -->
        
        <div class="col-sm-6 col-md-3">
            <div class="db-box box-4">
                <div class="db-box-icon">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div>
                <div class="db-box-inner">
                    <span>Total View</span>
                    <span class="tl-border"><img src="{{asset('assets/images/db/border.png')}}" alt="Image" class="img-fluid"></span>
                    <h3>10,369</h3>
                    <span class="rating">90%</span>
                </div>
            </div>
        </div><!-- db-box -->
    </div>

    <div class="price-boxes">
        <ul class="global-list">
            <li>$125.33k <small>Sales</small></li>
            <li>5300+ <small>Products</small></li>
            <li>1,058k <small>Visits</small></li>
            <li>$66.55k <small>Shopping</small></li>
        </ul>
    </div><!-- price-boxes -->

    <div class="row">
        <div class="col-lg-8">
            <div class="bg-white sub-section">
                <div class="ds-header d-flex justify-content-between">
                    <div class="title">
                        <h1>View Statistics</h1>
                    </div>

                    <div class="statistics-header">
                        <select name="" id="select-chart">
                            <option value="thirty">Last 30 Days</option>
                            <option value="oneyear">Last 1 Year</option>
                        </select>
                    </div>
                </div>                                    
                <div class="view-statistics">
                    <div class="statistics-content">
                        <canvas id="oneYear" class="lt-chart oneyear"></canvas>
                        <canvas id="thirtyDays" class="lt-chart thirty"></canvas>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-lg-4">  
            <div class="widget">
                <div class="ds-header d-flex justify-content-between">
                    <div class="title">
                        <h1>Featured Properties</h1>
                    </div>
                </div>
                <div class="featured-slider">
                    <div class="property">
                        <div class="thumb">
                            <img src="{{asset('assets/images/property/sm-slider-2.jpg')}}" alt="Image" class="img-fluid">
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
                            <img src="{{asset('assets/images/property/sm-slider-2.jpg')}}" alt="Image" class="img-fluid">
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
        </div>
    </div><!-- /.row -->

    <div class="lt-section">
        <div class="section-content property-content">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="property">
                        <div class="thumb">
                            <img src="{{asset('assets/images/property/1.jpg')}}" alt="Image" class="img-fluid">
                            <div class="overlay">
                                <div class="property-status">
                                    <a href="#">Rent</a>
                                </div>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="{{asset('assets/images/property/2.jpg')}}" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="d-flex map-location justify-content-between">
                                    <div class="left-content">
                                        <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <span>8514 W. Pennington St</span>
                                    </div>
                                    <div class="heart-iocn">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="info-top">
                                <h2><a href="property-details.html">The Quest Strom Architects modern house</a></h2>
                                <div class="meta">
                                    <ul class="global-list">
                                        <li><span><img src="{{asset('assets/images/others/icon7.png')}}" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon8.png')}}" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon9.png')}}" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-footer d-flex justify-content-between">
                                <div class="author d-flex">
                                    <span class="author-thumb"><img src="{{asset('assets/images/others/author1.png')}}" alt="Image" class="img-fluid"></span>
                                    <span class="align-self-center">Anricia Socibalia</span>
                                </div><!-- /.author -->
                                <div class="price align-self-center">
                                    <h3>$4,500/m</h3>
                                </div>
                            </div><!-- /.property-footer -->
                        </div><!-- /.property-info -->
                    </div><!-- /.property -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="property">
                        <div class="thumb">
                            <img src="{{asset('assets/images/property/2.jpg')}}" alt="Image" class="img-fluid">
                            <div class="overlay">
                                <div class="property-status">
                                    <a href="#">Rent</a>
                                </div>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="{{asset('assets/images/property/2.jpg')}}" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="d-flex map-location justify-content-between">
                                    <div class="left-content">
                                        <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <span>8205 Myers Dr</span>
                                    </div>
                                    <div class="heart-iocn">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="info-top">
                                <h2><a href="property-details.html">Dramatically e-enable e-business results</a></h2>
                                <div class="meta">
                                    <ul class="global-list">
                                        <li><span><img src="{{asset('assets/images/others/icon7.png')}}" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon8.png')}}" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon9.png')}}" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-footer d-flex justify-content-between">
                                <div class="author d-flex">
                                    <span class="author-thumb"><img src="{{asset('assets/images/others/author1.png')}}" alt="Image" class="img-fluid"></span>
                                    <span class="align-self-center">Anricia Socibalia</span>
                                </div><!-- /.author -->
                                <div class="price align-self-center">
                                    <h3>$4,500/m</h3>
                                </div>
                            </div><!-- /.property-footer -->
                        </div><!-- /.property-info -->
                    </div><!-- /.property -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="property">
                        <div class="thumb">
                            <img src="{{asset('assets/images/property/3.jpg')}}" alt="Image" class="img-fluid">
                            <div class="overlay">
                                <div class="property-status">
                                    <a href="#">Rent</a>
                                </div>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="{{asset('assets/images/property/2.jpg')}}" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="d-flex map-location justify-content-between">
                                    <div class="left-content">
                                        <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <span>7070 strong Ave.  VA 22015</span>
                                    </div>
                                    <div class="heart-iocn">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="info-top">
                                <h2><a href="property-details.html">Synergistically mesh go forward potentialities</a></h2>
                                <div class="meta">
                                    <ul class="global-list">
                                        <li><span><img src="{{asset('assets/images/others/icon7.png')}}" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon8.png')}}" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon9.png')}}" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-footer d-flex justify-content-between">
                                <div class="author d-flex">
                                    <span class="author-thumb"><img src="{{asset('assets/images/others/author1.png')}}" alt="Image" class="img-fluid"></span>
                                    <span class="align-self-center">Anricia Socibalia</span>
                                </div><!-- /.author -->
                                <div class="price align-self-center">
                                    <h3>$4,500/m</h3>
                                </div>
                            </div><!-- /.property-footer -->
                        </div><!-- /.property-info -->
                    </div><!-- /.property -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="property">
                        <div class="thumb">
                            <img src="{{asset('assets/images/property/4.jpg')}}" alt="Image" class="img-fluid">
                            <div class="overlay">
                                <div class="property-status">
                                    <a href="#">Rent</a>
                                </div>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="property-details.html"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="{{asset('assets/images/property/2.jpg')}}" class="lt-popup"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="d-flex map-location justify-content-between">
                                    <div class="left-content">
                                        <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <span>7462 Meadow Street</span>
                                    </div>
                                    <div class="heart-iocn">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="info-top">
                                <h2><a href="property-details.html">Compellingly empower goal-oriented</a></h2>
                                <div class="meta">
                                    <ul class="global-list">
                                        <li><span><img src="{{asset('assets/images/others/icon7.png')}}" alt="Image" class="img-fluid"></span>6 Badroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon8.png')}}" alt="Image" class="img-fluid"></span>6 Bathroom</li>
                                        <li><span><img src="{{asset('assets/images/others/icon9.png')}}" alt="Image" class="img-fluid"></span>6000 Sf.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-footer d-flex justify-content-between">
                                <div class="author d-flex">
                                    <span class="author-thumb"><img src="{{asset('assets/images/others/author1.png')}}" alt="Image" class="img-fluid"></span>
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
        </div><!-- /.section-content -->
    </div><!-- /.lt-section -->     

    <div class="row">
        <div class="col-md-6">
            <div class="bg-white sub-section">
                <div class="ds-header d-flex justify-content-between">
                    <div class="title">
                        <h1>Recent Listing</h1>
                    </div>
                    <div class="more-icon align-self-center">
                        <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    </div>
                </div><!-- /.ds-header -->

                <div class="recent-listing">
                    <ul class="global-list">
                        <li>
                            <div class="d-flex">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/db/list1.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="info align-self-center">
                                    <h2><a href="#">Energistically whiteboard business paradigms.</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>550 East, BA North Limia.</span>
                                        </div>
                                    </div>                                                    
                                </div>
                            </div>
                            <div class="details align-self-center">
                                <a href="#">Details <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/db/list1.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="info align-self-center">
                                    <h2><a href="#">Energistically whiteboard business paradigms.</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>550 East, BA North Limia.</span>
                                        </div>
                                    </div>                                                    
                                </div>
                            </div>
                            <div class="details align-self-center">
                                <a href="#">Details <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/db/list1.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="info align-self-center">
                                    <h2><a href="#">Energistically whiteboard business paradigms.</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>550 East, BA North Limia.</span>
                                        </div>
                                    </div>                                                    
                                </div>
                            </div>
                            <div class="details align-self-center">
                                <a href="#">Details <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/db/list1.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="info align-self-center">
                                    <h2><a href="#">Energistically whiteboard business paradigms.</a></h2>
                                    <div class="d-flex map-location justify-content-between">
                                        <div class="left-content">
                                            <span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            <span>550 East, BA North Limia.</span>
                                        </div>
                                    </div>                                                    
                                </div>
                            </div>
                            <div class="details align-self-center">
                                <a href="#">Details <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.recent-listing -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="rating-review bg-white sub-section">
                <div class="ds-header d-flex justify-content-between">
                    <div class="title">
                        <h1>Ratings & Reviews</h1>
                    </div>
                </div><!-- /.ds-header -->
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
                                <a href="#"><img class="img-fluid" src="{{asset('assets/images/others/author2.png')}}" alt="Image"></a>
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
    </div><!-- /.row -->   

    <div class="bg-white sub-section project-table-content">
        <div class="ds-header d-flex justify-content-between">
            <div class="title">
                <h1>Project of the Month</h1>
            </div>
            <div class="more-icon align-self-center">
                <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
            </div>
        </div><!-- /.ds-header -->

        <table class="table project-table">
            <thead>
                <tr>
                    <th scope="col"><span><i class="fa fa-square-o" aria-hidden="true"></i></span>ID No</th>
                    <th scope="col">Team Lead</th>
                    <th scope="col">Project</th>
                    <th scope="col">Team</th>
                    <th scope="col">Status</th>
                    <th scope="col">Week</th>
                    <th scope="col">Budget</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="tl-checkbox">
                        <div class="form-group">
                            <input type="checkbox" name="tnc" id="tnc">
                            <label for="tnc"># 000195</label>
                        </div>                
                    </th>
                    <td class="tl-member">
                        <div class="member d-flex">
                            <div class="thumb">
                                <img src="{{asset('assets/images/others/author2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="info align-self-center">
                                <span class="title">David Smith</span>
                                <a href="#">david-smith@gmail.com</a>
                            </div>
                        </div><!-- /.member -->
                    </td>
                    <td class="tl-project">Mannaa Real Estate</td>
                    <td>
                        <div class="team-list d-flex">
                            <ul class="global-list d-flex">
                                <li>Sa</li>
                                <li>Ms</li>
                                <li>Al</li>
                            </ul>
                            <div class="add-item">
                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="color">
                            <span></span>
                        </div>
                    </td>
                    <td>40</td>
                    <td>$100k</td>
                </tr>
                <tr>
                    <th scope="row" class="tl-checkbox">
                        <div class="form-group">
                            <input type="checkbox" name="tnc1" id="tnc1">
                            <label for="tnc1"># 000195</label>
                        </div>                
                    </th>
                    <td class="tl-member">
                        <div class="member d-flex">
                            <div class="thumb">
                                <img src="{{asset('assets/images/others/author2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="info align-self-center">
                                <span class="title">David Smith</span>
                                <a href="#">david-smith@gmail.com</a>
                            </div>
                        </div><!-- /.member -->
                    </td>
                    <td class="tl-project">Mannaa Real Estate</td>
                    <td>
                        <div class="team-list d-flex">
                            <ul class="global-list d-flex">
                                <li>Sa</li>
                                <li>Ms</li>
                                <li>Al</li>
                            </ul>
                            <div class="add-item">
                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="color color-1">
                            <span></span>
                        </div>
                    </td>
                    <td>40</td>
                    <td>$100k</td>
                </tr>
                <tr>
                    <th scope="row" class="tl-checkbox">
                        <div class="form-group">
                            <input type="checkbox" name="tnc2" id="tnc2">
                            <label for="tnc2"># 000195</label>
                        </div>                
                    </th>
                    <td class="tl-member">
                        <div class="member d-flex">
                            <div class="thumb">
                                <img src="{{asset('assets/images/others/author2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="info align-self-center">
                                <span class="title">David Smith</span>
                                <a href="#">david-smith@gmail.com</a>
                            </div>
                        </div><!-- /.member -->
                    </td>
                    <td class="tl-project">Mannaa Real Estate</td>
                    <td>
                        <div class="team-list d-flex">
                            <ul class="global-list d-flex">
                                <li>Sa</li>
                                <li>Ms</li>
                                <li>Al</li>
                            </ul>
                            <div class="add-item">
                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="color color-2">
                            <span></span>
                        </div>
                    </td>
                    <td>40</td>
                    <td>$100k</td>
                </tr>
                <tr>
                    <th scope="row" class="tl-checkbox">
                        <div class="form-group">
                            <input type="checkbox" name="tnc3" id="tnc3">
                            <label for="tnc3"># 000195</label>
                        </div>                
                    </th>
                    <td class="tl-member">
                        <div class="member d-flex">
                            <div class="thumb">
                                <img src="{{asset('assets/images/others/author2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="info align-self-center">
                                <span class="title">David Smith</span>
                                <a href="#">david-smith@gmail.com</a>
                            </div>
                        </div><!-- /.member -->
                    </td>
                    <td class="tl-project">Mannaa Real Estate</td>
                    <td>
                        <div class="team-list d-flex">
                            <ul class="global-list d-flex">
                                <li>Sa</li>
                                <li>Ms</li>
                                <li>Al</li>
                            </ul>
                            <div class="add-item">
                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="color color-3">
                            <span></span>
                        </div>
                    </td>
                    <td>40</td>
                    <td>$100k</td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="form-group">
                            <input type="checkbox" name="tnc4" id="tnc4">
                            <label for="tnc4"># 000195</label>
                        </div>                
                    </th>
                    <td class="tl-member">
                        <div class="member d-flex">
                            <div class="thumb">
                                <img src="{{asset('assets/images/others/author2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="info align-self-center">
                                <span class="title">David Smith</span>
                                <a href="#">david-smith@gmail.com</a>
                            </div>
                        </div><!-- /.member -->
                    </td>
                    <td class="tl-project">Mannaa Real Estate</td>
                    <td>
                        <div class="team-list d-flex">
                            <ul class="global-list d-flex">
                                <li>Sa</li>
                                <li>Ms</li>
                                <li>Al</li>
                            </ul>
                            <div class="add-item">
                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="color">
                            <span></span>
                        </div>
                    </td>
                    <td>40</td>
                    <td>$100k</td>
                </tr>
            </tbody>
        </table>                            
        
    </div><!-- /.sub-section -->  

    <div class="row bottom-content">
        <div class="col-lg-6">
            <div class="bg-white sub-section">
                <div class="ds-header d-flex justify-content-between">
                    <div class="title">
                        <h1>Monthly Price Change</h1>
                    </div>
                    <div class="more-icon align-self-center">
                        <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    </div>
                </div><!-- /.ds-header -->
                <div class="monthly-price-change">
                    <div class="monthly-price-body">
                        <canvas id="monthlyPrice"></canvas>
                    </div>  
                </div><!-- monthly-price-change -->                                                              
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-white sub-section">
                        <div class="ds-header d-flex justify-content-between">
                            <div class="title">
                                <h1>Top Author</h1>
                            </div>
                            <div class="more-icon align-self-center">
                                <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- /.ds-header -->
                        <div class="top-author text-center">
                            <div class="thumb">
                                <img src="{{asset('assets/images/db/top-author.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="author-info">
                                <span class="title">David Smith</span>
                                <span>Broker</span>
                                <p>Interactively impact reliable ROI vis-a-vis e-business e-business.</p>
                                <div class="author-social">
                                    <ul class="global-list">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    </ul>                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white sub-section">
                        <div class="ds-header d-flex justify-content-between">
                            <div class="title">
                                <h1><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</h1>
                            </div>
                            <div class="more-icon align-self-center">
                                <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- /.ds-header -->
                        
                        <div class="chat-conversation">
                            <div class="live-chat">
                                <div class="live-chat-body">
                                    <p>You're Chatting With Jassia</p>
                                    <div class="single-message">
                                        <div class="profile-picture">
                                            <img src="{{asset('assets/images/db/messages/9.png')}}" alt="Profile Picture">    
                                        </div>
                                        <div class="user-massage">
                                            <span class="user-name">Jassia Deo</span>
                                            <p><span class="color">It’s Great opportunity to work.</span></p>
                                            <span class="m-time">8:00 am</span>
                                        </div>
                                    </div>
                                    <div class="single-message self-message text-right">
                                        <div class="user-massage">
                                            <span class="user-name">Sowat Ahsan</span>
                                            <p><span class="color">It’s Great opportunity to work.</span></p>
                                            <span class="m-time">8:00 am</span>
                                        </div>
                                    </div>
                                    <div class="single-message">
                                        <div class="profile-picture">
                                            <img src="{{asset('assets/images/db/messages/9.png')}}" alt="Profile Picture">    
                                        </div>
                                        <div class="user-massage">
                                            <span class="user-name">Jassia Deo</span>
                                            <p><span class="color">It’s Great opportunity to work.</span></p>
                                            <span class="m-time">8:00 am</span>
                                        </div>
                                    </div>
                                    <p class="text-right">Jassia is typing</p>
                                </div>
                                <div class="live-chat-footer">
                                    <div class="send-message">
                                        <form action="#" class="lt-form">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" placeholder="Type Your Message">
                                                <input type="submit" value="Send">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                                                
                        </div><!-- /.chat-conversation -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </div><!-- /.row -->



@endsection
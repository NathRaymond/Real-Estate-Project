<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/property-submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:24 GMT -->
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
                            <h1>Property Submit</h1>
                        </div>
                        <ol class="breadcrumb align-self-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Property Submit</li>
                        </ol>                        
                    </div>
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-content -->
        </div><!-- /.lt-breadcrumb -->

        <div class="lt-page-content bg-color">
            <div class="lt-section">
                <div class="section-content lt-property-submit section-padding">
                    <div class="container">
                        <form action="#" class="property-submit lt-form">
                            <div class="title">
                                <h2>Title & Description</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Title of your property">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="type" id="type" class="form-control">
                                                <option value="property-type">Property Type</option>
                                                <option value="duplex">Duplex</option>
                                                <option value="triplex">Triplex</option>
                                                <option value="bungalow">Bungalow</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="status" id="status" class="form-control">
                                                <option value="property-status">Property Status</option>
                                                <option value="residential">Residential</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="villa">Villa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="label" id="label" class="form-control">
                                                <option value="property-label">Property Label</option>
                                                <option value="label-one">Label One</option>
                                                <option value="label-two">Label Two</option>
                                                <option value="label-three">Label Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Property Description"></textarea>
                                </div>
                            </div>
                            <div class="title">
                                <h2>Price Option</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Price">
                                            <div class="input-addon">
                                                <span>$</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Price Label Monthly">
                                            <div class="input-addon">
                                                <span>$</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="price-postfix">Price Postfix</option>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Sceond Price">
                                            <div class="input-addon">
                                                <span>$</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Price Label Monthly">
                                            <div class="input-addon">
                                                <span>$</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="price-postfix">Price Postfix</option>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <h2>Location & Map</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Address">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter City">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="state">Select State</option>
                                                <option value="california">California</option>
                                                <option value="florida">Florida</option>
                                                <option value="new-york">New York</option>
                                                <option value="Washington">Washington</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="zip">Select Zip Code</option>
                                                <option value="california">902</option>
                                                <option value="florida">320</option>
                                                <option value="new-york">100</option>
                                                <option value="Washington">980</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="country">Select Country</option>
                                                <option value="usa">USA</option>
                                                <option value="uk">UK</option>
                                                <option value="bangladesh">Bangladesh</option>
                                                <option value="australia">Australia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="neighborhood">Neighborhood</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="lake-lots">Lake Lots</option>
                                                <option value="urban-core">Urban Core</option>
                                                <option value="family-urban">Family Urban</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10425.465618217717!2d-123.0855711998103!3d49.26199450151496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1586379153694!5m2!1sen!2sbd"   allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>                                
                            </div>
                            <div class="title">
                                <h2>Property Details</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Property ID">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Property Size">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Land Size">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Beds">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Baths">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Garage">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Garage Size">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Build Year">
                                        </div>
                                    </div>
                                </div>
                                <div class="property-features">
                                    <h3>Property Features</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="checkbox" name="ac" id="ac">
                                                <label for="ac">Air Conditioning</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="wifi" id="wifi">
                                                <label for="wifi">Wifi</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="barbeque" id="barbeque">
                                                <label for="barbeque">Barbeque</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="microwave" id="microwave">
                                                <label for="microwave">Microwave</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="checkbox" name="dryer" id="dryer">
                                                <label for="dryer">Dryer</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="refrigerator" id="refrigerator">
                                                <label for="refrigerator">Refrigerator</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="window" id="window">
                                                <label for="window">Window</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="gym" id="gym">
                                                <label for="gym">Gym</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="checkbox" name="laundry" id="laundry">
                                                <label for="laundry">Laundry</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="lawn" id="lawn">
                                                <label for="lawn">Lawn</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="outdoor-shower" id="outdoor-shower">
                                                <label for="outdoor-shower">Outdoor Shower</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="sauna" id="sauna">
                                                <label for="sauna">Sauna</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="title">
                                <h2>Additional Details</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title Your Deposit">
                                        </div>
                                    </div>

                                    <div class="col-9 col-md-7">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="floor">Deposit Value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-3 col-md-1">
                                        <div class="form-group">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title Your Deposit">
                                        </div>
                                    </div>

                                    <div class="col-9 col-md-7">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="floor">Deposit Value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-3 col-md-1">
                                        <div class="form-group">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <a href="#" class="form-control">+ Add More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="title">
                                <h2>Floor Plan</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title Of Your Floor">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="floor">Which Floor</option>
                                                <option value="ground">Ground</option>
                                                <option value="first">First</option>
                                                <option value="urban-core">Second</option>
                                                <option value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="beds">Beds</option>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="baths">Baths</option>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="garage">Garage</option>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Price">
                                    <div class="input-addon">
                                        <span>$</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Floor Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="add-photo">
                                        <input type="file" name="add-photo" id="add-photo" class="inputfile form-control inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                        <label for="add-photo"><i class="fa fa-camera" aria-hidden="true"></i> <span>Add Photo</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="title">
                                <h2>Photos, Videos & 360° Virtual Tour</h2>
                            </div>
                            <div class="bg-white sub-section m-0">
                                <h3>Video</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Paste Video Link">
                                </div>
                                <h3>360° Virtual Tour</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Paste 360° Virtual Tour Link">
                                </div>
                                <div class="property-thumbs">
                                    <div class="property-thumb">
                                        <img src="assets/images/property/10.jpg" alt="Property Thumb" class="img-fluid">
                                    </div>
                                    <div class="property-thumb">
                                        <img src="assets/images/property/11.jpg" alt="Property Thumb" class="img-fluid">
                                    </div>
                                    <div class="add-photo">
                                        <input type="file" name="add-photo-1" id="add-photo-1" class="inputfile form-control inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                        <label for="add-photo-1"><i class="fa fa-camera" aria-hidden="true"></i> <span>Add Photo</span></label>
                                    </div>
                                </div>
                                <input type="submit" value="Submit Property" class="btn btn-primary">
                                <input type="reset" value="Reset" class="btn btn-transparent">
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

<!-- Mirrored from angfuzsoft.com/html/erfassen/demo/property-submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 11:23:24 GMT -->
</html> 
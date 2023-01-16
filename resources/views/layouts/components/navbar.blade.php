<div class="tl-topbar">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="left-content">
                <ul class="global-list">
                    <li><span class="icon"><img src="{{ asset('assets/images/others/icon1.png') }}" alt="Image"
                                class="img-fluid"></span><a href="tel:+9985260948">+234 8146194881</a></li>
                    <li><span class="icon"><img src="{{ asset('assets/images/others/icon2.png') }}" alt="Image"
                                class="img-fluid"></span><a href="#">rockdalocom@gmail.com</a></li>
                </ul>
            </div><!-- /.left-content -->
            <div class="right-content align-self-center">
                <div class="topbar-user">
                    <span><a href="login.html">Login</a> | <a href="sign-up.html">Sign Up</a></span>
                </div><!-- /.topbar-user -->
            </div><!-- /.right-content -->
        </div>
    </div><!-- /.container -->
</div><!-- /.tl-topbar -->

<div class="header-middle">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/logo.jpeg') }}" alt="Logo" class="img-fluid">
        </a>
        <div class="contacts align-self-center">
            <ul class="global-list">
                <li>
                    <div class="info-box">
                        <div class="icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <div class="text align-self-center">
                            <span>07:00 AM - 05: 00 PM</span>
                            <strong>Sunday - Saturday</strong>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="info-box">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text align-self-center">
                            <span>Abiola Way Leme, opposite Abadi ,</span>
                            <p>secondary school <strong>Abeokuta, Ogun State</strong></p> 
                        </div>
                    </div>
                </li>
                <li>
                    <div class="info-box">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text align-self-center">
                            <span>Service Available</span>
                            <strong>+234 8146194881</strong>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.contacts -->
    </div>
</div><!-- /.header-middle -->

<div class="tl-menu menu-absolute menu-sticky">

    <nav class="navbar navbar-expand-lg p-0">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/images/logo.jpeg') }}" alt="Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('property') }}">Properties</a></li>
                    {{--  <li class="tl-dropdown">
                        <a href="#">Pages</a>
                        <ul class="tl-dropdown-menu">
                            <li><a href="{{ route('team') }}">Agents</a></li>
                            <li><a href="{{ route('agent-details') }}">Agent Details</a></li>
                            <li><a href="{{ route('property-submit') }}">Property Submit</a></li>
                            <li><a href="{{ route('property-details') }}">Property Details</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    </li>  --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="right-content">
                <div class="tl-search">
                    <div class="search-icon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div class="search-form text-center open-search">
                        <div class="close-search">
                            <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                        </div>
                        <form action="#" id="search" method="get">
                            <input id="inputhead" name="search" type="text" placeholder="Enter keyword...">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form><!-- /form -->
                    </div><!-- /s form -->
                </div><!-- /.tl-search -->
                <div class="lt-button">
                    <a href="property-submit.html" class="btn btn-transparent">Submit Property</a>
                </div>
            </div>
        </div><!-- /.container -->
    </nav>
</div><!-- /.tl-menu -->

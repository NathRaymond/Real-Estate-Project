@extends('layouts.agent_master')

@section('content')


<div class="tl-section">
    <div class="tl-dashboard bg-color">
        <div class="container-fluid p-0">
            <div class="main">
                <div class="main-header">
                    <div class="main-title">
                        <h1 class="db-title">My Properties</h1>
                    </div>
                    <div class="search-box">
                        <form action="#" class="search-form">
                            <input type="search" class="search-field" placeholder="Search Properties">
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </div>
                    <div class="short d-flex align-self-center">
                        <span>Short by :</span>
                        <select name="" id="">
                            <option value="default">Default</option>
                            <option value="a">A to Z</option>
                            <option value="z">Z to A</option>
                        </select>
                    </div>
                </div>
                <div class="properties properties-table bg-white">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Titile</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                <th scope="col">Edit Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="property-image"><img src="{{ asset('assets/images/db/property-one.jpg')}}" alt="Package Image" class="img-fluid"></td>
                                <td class="property-title">
                                    <h2>New House Mansion For Sale</h2>
                                    <span class="address"><span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 11 Jungle Road, Leominster MA 1453</span>
                                    <span class="price">$250,369</span>
                                </td>
                                <td class="property-status">
                                    <span>View: <span class="black">2500</span></span>
                                    <span>Published: <span class="black">12 Jun 2020</span></span>
                                    <span>Expiry: <span class="black"> 12 Nov 2020</span></span>
                                </td>
                                <td class="property-rating">
                                    <ul class="global-list d-flex rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </td>
                                <td class="property-option">
                                    <a href="#" class="edit"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="property-image"><img src="{{ asset('assets/images/db/property-two.jpg')}}" alt="Package Image" class="img-fluid"></td>
                                <td class="property-title">
                                    <h2>Content before tactical technology</h2>
                                    <span class="address"><span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 11 Jungle Road, Leominster MA 1453</span>
                                    <span class="price">$320,369</span>
                                </td>
                                <td class="property-status">
                                    <span>View: <span class="black">2500</span></span>
                                    <span>Published: <span class="black">12 Jun 2020</span></span>
                                    <span>Expiry: <span class="black"> 12 Nov 2020</span></span>
                                </td>
                                <td class="property-rating">
                                    <ul class="global-list d-flex rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </td>
                                <td class="property-option">
                                    <a href="#" class="edit"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="property-image"><img src="{{ asset('assets/images/db/property-three.jpg')}}" alt="Package Image" class="img-fluid"></td>
                                <td class="property-title">
                                    <h2>Holisticly orchestrate dynamic</h2>
                                    <span class="address"><span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 11 Jungle Road, Leominster MA 1453</span>
                                    <span class="price">$569,369</span>
                                </td>
                                <td class="property-status">
                                    <span>View: <span class="black">2500</span></span>
                                    <span>Published: <span class="black">12 Jun 2020</span></span>
                                    <span>Expiry: <span class="black"> 12 Nov 2020</span></span>
                                </td>
                                <td class="property-rating">
                                    <ul class="global-list d-flex rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </td>
                                <td class="property-option">
                                    <a href="#" class="edit"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="property-image"><img src="{{ asset('assets/images/db/property-four.jpg')}}" alt="Package Image" class="img-fluid"></td>
                                <td class="property-title">
                                    <h2>Professionally scale client-focused</h2>
                                    <span class="address"><span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 11 Jungle Road, Leominster MA 1453</span>
                                    <span class="price">$258,369</span>
                                </td>
                                <td class="property-status">
                                    <span>View: <span class="black">2500</span></span>
                                    <span>Published: <span class="black">12 Jun 2020</span></span>
                                    <span>Expiry: <span class="black"> 12 Nov 2020</span></span>
                                </td>
                                <td class="property-rating">
                                    <ul class="global-list d-flex rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </td>
                                <td class="property-option">
                                    <a href="#" class="edit"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="property-image"><img src="{{ asset('assets/images/db/property-five.jpg')}}" alt="Package Image" class="img-fluid"></td>
                                <td class="property-title">
                                    <h2>Synergistically reinvent adaptive</h2>
                                    <span class="address"><span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 11 Jungle Road, Leominster MA 1453</span>
                                    <span class="price">$326,369</span>
                                </td>
                                <td class="property-status">
                                    <span>View: <span class="black">2500</span></span>
                                    <span>Published: <span class="black">12 Jun 2020</span></span>
                                    <span>Expiry: <span class="black"> 12 Nov 2020</span></span>
                                </td>
                                <td class="property-rating">
                                    <ul class="global-list d-flex rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </td>
                                <td class="property-option">
                                    <a href="#" class="edit"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="property-image"><img src="{{ asset('assets/images/db/property-six.jpg')}}" alt="Package Image" class="img-fluid"></td>
                                <td class="property-title">
                                    <h2>Proactively aggregate backend</h2>
                                    <span class="address"><span class="map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 11 Jungle Road, Leominster MA 1453</span>
                                    <span class="price">$584,369</span>
                                </td>
                                <td class="property-status">
                                    <span>View: <span class="black">2500</span></span>
                                    <span>Published: <span class="black">12 Jun 2020</span></span>
                                    <span>Expiry: <span class="black"> 12 Nov 2020</span></span>
                                </td>
                                <td class="property-rating">
                                    <ul class="global-list d-flex rating">
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </td>
                                <td class="property-option">
                                    <a href="#" class="edit"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <a href="#" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- packages -->
                <div class="text-center">
                    <div class="lt-pagination">
                        <ul class="pagination ">
                            <li><a class="page-numbers" href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
               @include('layouts.components.copywright')
            </div><!-- main -->
        </div>
    </div><!-- dashboard -->
</div><!-- tl-dashboard -->

@endsection

@section('scripts')
<script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/slick.min.js')}}"></script>
<script src="{{ asset('assets/js/counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui-min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('assets/js/theia-sticky-sidebar.min.js')}}"></script>
<script src="{{ asset('assets/js/chart.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>


@endsection

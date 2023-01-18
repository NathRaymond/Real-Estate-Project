@extends('admin.layouts.master')

@section('content')
<div class="main-header">
    <div class="main-title">
        <h1 class="db-title">All Agents</h1>
    </div>
    <div class="search-box">
        <form action="#" class="search-form">
            <input type="search" class="search-field" placeholder="Search Properties">
            <input type="submit" class="search-submit" value="Search">
        </form>
    </div>
    <div class="short d-flex align-self-center">
        <span>Short by</span>
        <select name="" id="">
            <option value="default">Default</option>
            <option value="a">A to Z</option>
            <option value="z">Z to A</option>
        </select>
    </div>
</div>
<div class="all-agent properties-table bg-white">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Titile</th>
                <th scope="col">Status</th>
                <th scope="col">Edit Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agents as $agent)
            <tr>
                <td class="agent-image">
                    <div class="thumb">
                        <img src="{{asset('assets/images/db/agent-one.jpg')}}" alt="Agent Image" class="img-fluid">
                    </div>
                </td>
                <td class="agent-name">
                    <h2>{{$agent->name}}</h2>
                    <span class="agent-role">Real-Estate Agent</span>
                    <ul class="global-list d-flex rating">
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    </ul>
                </td>
                <td class="agent-status">
                    <a href="mailto:david-smith@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> david-smith@gmail.com</a>
                    <a href="tel:+787236923694"><i class="fa fa-phone" aria-hidden="true"></i> +787 2369 23694</a>
                    <a href="tel:+787236923694"><i class="fa fa-home" aria-hidden="true"></i> 12 Properties</a>
                </td>
                <td class="property-option">
                    <div class="db-action">
                        <a class="edit btn" href="#"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a>
                        <a class="delete" href="#"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><!-- packages -->
@endsection
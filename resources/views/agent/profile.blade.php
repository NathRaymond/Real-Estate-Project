@extends('layouts.agent_master')

@section('content')
<script>
    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];
        var numb = file.size / 1024 / 1024;
        numb = numb.toFixed(3);


        if (numb > 2) {
            // alert('to big, maximum is 2MiB. You file size is: ' + numb + ' MiB');
            $("#submit_btn").attr("disabled", true);
            $("#passport").html('too big, maximum is 2iB. You file size is: ' + numb + ' MB')
            $("#passport").attr("style", "color:#F64E60 !important");
        } else {
            $("#passport").html('It is okay, your file has ' + numb + 'MiB')
            $("#passport").attr("style", "color:#1BC5BD !important");
            $("#submit_btn").attr("disabled", false);
        }
        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#previewImg").show();
                $("#previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }
</script>
<div class="tl-section">
    <div class="tl-dashboard bg-color">
        <div class="container-fluid p-0">
            <div class="main">
                <h1 class="db-title">Edit Profile</h1>
                <form action="" method="POST" class="lt-form edit-profile bg-white sub-section" enctype="multipart/form-data">
                    @csrf
                    <div class="edit-profile-picture">
                        <div class="profile-picture">
                            <img
                            @if($myprofile->photo==NULL)
                            src="{{ asset('user_icon2.jpg') }}"
                            @else
                            src='{{ asset("profile_picture/$myprofile->photo") }}'
                            @endif
                             alt="Profile Picture" class="img-fluid">
                        </div>
                    </div><!-- edit-profile -->

                    <div class="personal-information">
                        <h2>Personal Information</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title"  value="{{ auth()->user()->agentRecord()->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" name="fullname"  value="{{ auth()->user()->agentRecord()->fullname }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"  value="{{ auth()->user()->agentRecord()->email }}" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" name="phone_number" value="{{ auth()->user()->agentRecord()->phone_number }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="whatsap_number">Whatsap Number</label>
                                    <input type="text" name="whatsap_number" value="{{ auth()->user()->agentRecord()->whatsap_number }}" class="form-control">
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="country">Nationality</label>
                                    <select class="form-control" name="country" id="mycountry" aria-label="Default select country">
                                        <option value="">Choose Country</option>
                                        @foreach ($countries as $country )
                                        <option value="{{$country->id}}"  {{$myprofile->country==$country->id? 'selected': ''}}>{{$country->name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4" id="hidden-div" @if($myprofile->country != 156) style="display:none" @endif>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select class="form-control select2-container--below state" name="state_id" id="mystate" aria-label="Default select " >
                                        <option value="">Choose State</option>
                                        @foreach ($states as $state )
                                        <option value="{{$state->id_no}}" {{$state->id_no == $myprofile->state_id?"selected": ''}}>{{$state->state}}</option>

                                        @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4" id="hidden-govt" @if($myprofile->country != 156) style="display:none" @endif>
                                <div class="form-group">
                                    <label for="lga">LGA</label>
                                    <select class="form-control select2-container--below lgaa" name="lga_id" aria-label="Default select example" >
                                        <option value="">Choose LGA</option>
                                        @foreach ($lgas->where('state_id',$myprofile->state_id) as $lga )
                                        <option value="{{$lga->id_no}}" {{$lga->id_no == $myprofile->lga_id?"selected": ''}}>{{$lga->local_govt}}</option>

                                        @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" value="{{ auth()->user()->agentRecord()->address }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="job_title">Job Title</label>
                                    <input type="text" name="job_title" value="{{ auth()->user()->agentRecord()->job_title }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="col-md-4 pro-pic">
                                <label>Profile Picture</label>
                                <div class="d-flex align-items-center">
                                    {{-- <div class="upload-images"> --}}
                                        <img id="previewImg" src="#"
                                        alt="Preview your image" style="height: 150px; width: 150px; display:none" >

                                    {{-- </div> --}}

                                        <div class="add-photo" style="margin-left: 10px">
                                            <input type="file" name="photo" id="add-photo" onchange="previewFile(this);" class="inputfile form-control inputfile-4" accept=".png,.jpg, .jpeg" />
                                            <label for="add-photo"><i class="fa fa-camera" aria-hidden="true"></i> <span>Add Photo</span></label>
                                        </div>

                                </div>
                                <span class="form-text text-muted" id="passport">Please upload your picture</span>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="overview">Overview</label>
                                    <textarea name="overview" title="let us know little about who you are." id="overview" cols="30" rows="10" class="form-control" >{{ $myprofile->overview }}</textarea>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!-- personal-information -->

                    <div class="location-map">





                            <div class="col-md-12">

                                <input type="submit" value="Update Profile" class="btn btn-primary">
                            </div>
                        </div><!-- row -->
                    </div><!-- location-map -->
                </form>
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


<script>
    $(document).ready(function() {
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

        $("#thissignup").on('submit', async function(e) {
    // e.preventDefault();
    $("#myloader").show();
    $("#indicator").show();



        })

       $("#mystate").on("change click", function(e) {
           $(".lgaa").empty()
           var id = $(this).val(); // $(this).data('id');
              //    alert(id);
           $.ajax({
               url: '{{ route('get_state_lga') }}?id=' + id,
               type: "GET",
               dataType: "json",
               success: function(response) {
                   var len = 0;
                   len = response['data'].length;
                   if (len > 0) {
                       for (var i = 0; i < len; i++) {
                           console.log(response);
                           var id = response['data'][i].id_no;
                           var descr = response['data'][i].local_govt;
                           var option = "<option value='" + id + "'>" + descr + "</option>";
                           $(".lgaa").append(option);
                       }
                   }
               }
           });
       });
       $("#mycountry").on("change click", function(e) {

           var id = $(this).val(); // $(this).data('id');
              //    alert(id);
              if (id == 156) {

            $('#hidden-div').show();
            $('#hidden-govt').show();
            // $('#main').show();
            } else {
            $('#hidden-div').hide();
            $('#hidden-govt').hide();
            // $('#main').show();
            }
       });
   });
</script>

@endsection

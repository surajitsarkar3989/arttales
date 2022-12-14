@extends('layout.master')
@section('master')


<!-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet">     -->
<link rel="stylesheet" href="{{URL('build/css/intlTelInput.css')}}">




	<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
       
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                            <div class="page-header-title">

                            <a href="{{ route('dashboard') }}"><h5 class="m-b-10">Dashboard</h5></a>
                        </div>
                        <div class="page-header-title">
                           <a href="{{ route('artist.detail',$artist->register_id) }}">
                                <h5 class="m-b-10"> Seller Detalis
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header">
                        <h5>Add Seller</h5>
                    </div>
                     {{-- @include('alertmessage') --}}
                    <form  action="{{URL('seller/store')}}"  enctype="multipart/form-data" method="post">
                         @csrf
                    <div class="card-body">
                        <div class="row">
                      <div class="form-group col-md-3">    
                           
                            <img style="height:200px;" src="{{URL('public/images/register/')}}/{{$artist->image}}" alt="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="demo-input-file" class="col-form-label">Enter Name</label>
                           <input class="form-control p" readonly value="{{$artist->name}}" type="text"  id="demo-text-input" name="name"placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="demo-input-file" class="col-form-label">Country Code</label>
                            <input class="form-control p" type="text" readonly value="{{$artist->country_code}}"  id="demo-text-input" name="country_code" placeholder="CountryCode">

                        </div>
                        <div class="form-group col-md-5">
                            <label for="demo-input-file" class="col-form-label">Mobile Numnber</label>
                            <input class="form-control" type="tel" readonly value="{{$artist->mobile}}"  id="demo-tel-input" placeholder="Enter Your Number" name="mobile">
                        </div>
                    </div>
                        
                       <div class="row">
                          <div class="form-group col-md-4">
                            <label for="demo-date-only" class="col-form-label">Date Of Birth</label>
                            <input class="form-control" type="date" name="dob" readonly value="{{$artist->dob}}"  id="demo-date-only">
                        </div>
                         <div class="form-group col-md-4">
                            <label for="demo-date-only" class="col-form-label">Email</label>
                            <input class="form-control" type="email" name="email" readonly value="{{$artist->email}}"  id="demo-email-input" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="demo-option-input " class="col-form-label " name="role">Select Role</label>
                         <select class="form-control p" disabled id="selectUser"name="role">
                                  <option value="select">Select</option>
                                  <option value="Seller" selected>Seller</option>
                                  </select>
                  
                        </div>
                         
                    </div>
                        <input type="hidden" name="user_type" value="seller">
                       
                        <button type="submit" onclick="history.back()" class="btn btn-primary mr-2">Back</button>
                    </div>
                     
                       
                    </form>
                </div>
            </div>        
        </div>   
    </div>    
    
</section>
<script type="text/javascript">

$(document).ready(function () {
 
      
    $('#artistForm').validate({ // initialize the plugin
     
        rules: {
            name: { 
                required: true
            },
     
            email: {
                required: true,
                email: true

            },
     
            mobile: {
                required: true,
                digits: true,
                minlength:10
            },
     
            country_code: {
                required: true,
                minlength: 3
            },
     
            website: {
                required: true,
                url:true
            },
     
            password: {
     
                required: true,
                minlength: 6
     
            },
     
            repassword: {
                required: true,
                minlength:6,
                equalTo : "#password"
            },
     
            genres: {
              required: true,
            },
     
            major_achivement: {
                required: true,
            },

            work_at: {
                required: true,
            },     


            performance: {
                required: true,
            },        

            category: {
                required: true,
            },        

     
            subcategory: {
                required: true,
            },        

     
            role: {
                required: true,
            },        

            description: {
                required: true,
            }, 
     
            dob:{
                required:true,

            },
            image: {
                required: true,
                extension: "jpeg,png,jpg,gif,svg"

            },
     
        }
     
    });
    
 
});

function fetchSubcategory(id){
    var categoryId = $('#category').val();

     $.ajax({
        url: "{{ route('artist.fetchSubCategory') }}",
        type: "post",

        data: { 
            "_token": "{{ csrf_token() }}",
            "categoryId" : categoryId,

        },
        success: function (response) {
            $('#subcategory').html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    

}
</script>

@endsection
<script src="{{URL('assets/js/vendor-all.min.js')}}"></script>
<script src="{{URL('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{URL('assets/js/plugins/feather.min.js')}}"></script>
<script src="{{URL('assets/js/pcoded.min.js')}}"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="{{URL('assets/js/plugins/clipboard.min.js')}}"></script>
<script src="{{URL('assets/js/uikit.min.js')}}"></script>


<script>
    // header option
    $('#pct-toggler').on('click', function() {
        $('.pct-customizer').toggleClass('active');

    });
    // header option
    $('#cust-sidebrand').change(function() {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    // Header Color
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
            $('.m-header').addClass(temp);
        }
    });
    // Header Color
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    // sidebar option
    $('#cust-sidebar').change(function() {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>
<!-- country code script -->
<!-- Use as a Vanilla JS plugin -->
<script src="{{URL('build/js/intlTelInput.min.js')}}"></script> 

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{URL('build/js/intlTelInput-jquery.min.js')}}"></script> 

<script type="text/javascript">
    
    // Vanilla Javascript
var input = document.querySelector("#telephone");
intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: function(success, failure) {
        $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            success(countryCode);
        });
    },
    utilsScript: "js/utils.js"
});
</script>



<!-- <script type="text/javascript">
    // Vanilla Javascript

$("#telephone").intlTelInput({
  // options here
  intinalCountry : "auto",
  geoIpLookup : function(callback){
    jquery.get('https://info.io', function() {}, "jsonp").always(function(resp){
            var countryCode = (resp && resp.country) ? resp.country :"";
            callback(countryCode);


        });
},
  utilsScript : 'js/utils.js'

});
</script> -->
<!-- Mirrored from html.phoenixcoded.net/nextro-able/bootstrap/default/form2_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Nov 2020 06:35:58 GMT -->

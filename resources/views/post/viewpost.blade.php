@extends('layout.master')
@section('master')

<!-- <!DOCTYPE html>
<html lang="en"> -->

<!-- Mirrored from html.phoenixcoded.net/nextro-able/bootstrap/default/dt_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Nov 2020 06:37:23 GMT -->
<!-- <head> -->
 <!-- data tables css -->
    <link rel="stylesheet" href="{{URL('assets/css/plugins/dataTables.bootstrap4.min.css')}}">
    <!-- font css -->
  

    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1951099,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            <img src="assets/images/logo.svg" alt="" class="logo logo-lg">
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!-- <i data-feather="menu"></i> -->
            </a>
            <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                <i data-feather="align-right"></i>
            </a>
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    

<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Artist List</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Zero config table start -->
          


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                     
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Post Image</th>
                                         <th>Description</th>
                                         <th>tags</th>
                                         <th>type</th>
                                         <th>user name</th>
                                         <th>views</th>
                                        <th>delete</th>
                                      
                                    </tr>
                                </thead>
                                @foreach ($postlist as $no => $post)
                                <tbody>
                                    <tr>
                                  <td>{{ $no +1 }}</td>
                                            <td><img src="{{ URL('public/images/post') }}/{{ $post->post_image }}" alt="" height="50px" width="50px"></td>
                                            <td>{{ $post->descriptions }}</td>
                                             <td>{{ $post->tags }}</td>
                                            <td>{{ $post->type }}</td>
                                            <td>{{ $post->name }}</td>
                                            <td>
                                           
                                               
                                                <a href="{{URL('/post/viewpost/show/'.$post->post_id)}}" type="submit"class="btn btn-danger btn-sm" >View</a>
                                                
                                            </td>
                                            <td>
                                                  <form action="{{URL('/user/viewpost/destroy',$post->post_id)}}" method="post">
                                                     @csrf
                                                 @method('DELETE')
                                                <button type="submit"class="btn btn-danger btn-sm"  ><i class="feather icon-trash-2"></i>Delete</button>
                                                 </form>
                                               <script>
                                                  function myFunction() {
                                                      if(!confirm("Are You Sure to delete this"))
                                                      event.preventDefault();
                                                  }
                                                 </script>
                                            </td>
                                </tbody>
                                @endforeach
                                <tfoot>
                            
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero config table end -->
           
      
      
            
          
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
</div>
@endsection
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="{{URL('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{URL('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{URL('assets/js/plugins/feather.min.js')}}"></script>
    <script src="{{URL('assets/js/pcoded.min.js')}}"></script>
    <script src="{{URL('assets/js/highlight.min.js')}}"></script>
    <script src="{{URL('assets/js/plugins/clipboard.min.js')}}"></script>
    <script src="{{URL('assets/js/uikit.min.js')}}"></script>

<!-- datatable Js -->
<script src="{{URL('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{URL('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL('assets/js/pages/data-basic-custom.js')}}"></script>

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

<script type="text/javascript">
    function ChangeStatus(Id, Status)
    {
        $("#LoadingProgress").fadeIn('fast');
        
        $.ajax({
            url: "{{ URL('/users/ChangeStatus') }}/"+Id+"/"+Status,
            type: "GET",
            contentType: false,
            cache: false,
            processData:false,
            success: function( data, textStatus, jqXHR ) {
                window.location.reload();
                $("#LoadingProgress").fadeOut('fast');
            },
            error: function( jqXHR, textStatus, errorThrown ) {
            
            }
        });
    }
</script>


<!-- </body> -->

<!-- Mirrored from html.phoenixcoded.net/nextro-able/bootstrap/default/dt_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Nov 2020 06:37:24 GMT -->
<!-- </html> -->

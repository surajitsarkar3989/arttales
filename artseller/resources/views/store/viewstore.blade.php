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
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 1951099,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
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
                                <h5 class="m-b-10">Store List</h5>
                            </div>
                            <a data-toggle="modal" data-target="#addPrefrence" class="btn btn-danger mr-2 text-white" style="float:right;">
                                Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="addPrefrence" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Store</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('store.store') }}" enctype="multipart/form-data" method="post" id="storeForm">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Enter Store Image</label>
                                        <input type="file" name="store_image[]" required="required" class="form-control" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Store Details</label>
                                        <input class="form-control" type="text" id="detail" name="detail" placeholder="Enter Store Details">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Store Name</label>
                                        <input class="form-control" type="text" id="store_name" name="store_name" placeholder="Enter Store Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Category</label>
                                        <input class="form-control" type="text" id="category" name="category" placeholder="Enter Category">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Mobile</label>
                                        <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Enter Mobile">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Website</label>
                                        <input class="form-control" type="text" id="website" name="website" placeholder="Enter Website">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Address</label>
                                        <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Asttachment</label>
                                        <input class="form-control" type="file" id="attachment" name="attachment" placeholder="Enter Asttachment">
                                    </div>
                                </div>
                                    <center><button type="submit" class="btn btn-primary mr-2" style="width: 150px;">Submit</button></center>
                            </form>
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
                                            <th>store Image</th>
                                            <th>store code</th>
                                            <th>store Name</th>
                                            <!-- <th>category</th>
                                            <th>mobile</th>
                                            <th>email</th>
                                            <th>website</th>
                                            <th>address</th>
                                            <th>attachment</th> -->
                                            <th>store details</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                            <th>Block</th>
                                        </tr>
                                    </thead>
                                    @foreach ($storelist as $no => $store)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no +1 }}</td>
                                            <td>
                                                @foreach(explode(',',$store->store_image) as $images)
                                                <img src="{{ URL('public/images/store') }}/{{ $images }}" alt="" height="50px" width="50px">
                                                @endforeach
                                            </td>
                                            
                                            </td>
                                            <td>{{ $store->store_code }}</td>
                                            <td>{{ $store->store_name }}</td>
                                            <!-- <td>{{ $store->category }}</td>
                                            <td>{{ $store->mobile }}</td>
                                            <td>{{ $store->email }}</td>
                                            <td>{{ $store->website }}</td>
                                            <td>{{ $store->address }}</td> -->

                                            <!-- <td><a href="{{URL('public/uploads') }}/{{ $store->attachment }}">Download</a></td> -->
                                            <td><a href="{{route('store.detail',$store->store_id) }}"  id="{{ $store->store_id }}" >View</a>
                                            <td>
                                                <a href="{{route('store.edit',$store->store_id) }}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            </td>

                                            <td>
                                                <form action="{{route('store.destroy',$store->store_id)}}" method="get ">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return myFunction();"><i class="feather icon-trash-2"></i>Delete</button>
                                                </form>
                                                <script>
                                                    function myFunction() {
                                                        if (!confirm("Are You Sure to delete this"))
                                                            event.preventDefault();
                                                    }
                                                </script>
                                            </td>
                                            <td class="thandtd">
                                                @if($store->isban == 1)
                                                <a onClick="Block({{$store->store_id}}, 0)" style="cursor:pointer">
                                                    <button class="btn btn-primary btn-sm">
                                                        Unblock

                                                    </button>
                                                </a>
                                                @else
                                                <a onClick="Block({{$store->store_id}}, 1)" style="cursor:pointer">

                                                    <button class="btn btn-danger btn-sm">
                                                        Block
                                                    </button>
                                                </a>
                                                @endif()
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
    <div class="modal fade" id="modal_view">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Store Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <span class="fetch_data_user"></span>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

    <script type="text/javascript">
        // this function is called when view icon for particular record is clicked this function fetch all details of that selected record and display that details in view model (this function display data of particular record)
        function view_modal(id) {

            $.ajax({
                type: 'get',
                url: "{{ route('store.detail',$store->store_id) }}/" + id,

                success: function(data) {
                    $('.fetch_data_user').html(data);
                }
            });
        };
    </script>

    <script type="text/javascript">
        function Block(Id, Status) {
            $("#LoadingProgress").fadeIn('fast');

            $.ajax({
                url: "{{ URL('/store/Block') }}/" + Id + "/" + Status,
                type: "GET",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                    window.location.reload();
                    $("#LoadingProgress").fadeOut('fast');
                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        }
    </script>
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

    <!-- </body> -->

    <!-- Mirrored from html.phoenixcoded.net/nextro-able/bootstrap/default/dt_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Nov 2020 06:37:24 GMT -->
    <!-- </html> -->
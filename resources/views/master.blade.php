<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DEV</title>
    <!-- new template -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    @yield('before-css')
    {{-- theme css --}}
    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-blue.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/perfect-scrollbar.css')}}">
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/jquery-ui.js') }}">></script>
    <link  href="{{ asset('assets/styles/vendor/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/select2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/select2.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <style>
    .select2-container .select2-selection--single{
        height:34px;    
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 4px;
    }
    </style>
    @yield('css')
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <a href="">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>
            </div>
            
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">
                <div class="search-bar" style="display:none;">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->
                
            </div>
        </div>
        <!-- Left side column. contains the logo and sidebar -->
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item" data-item="user"><a class="nav-item-hold" href="#"><i class="nav-icon i-Add-User"></i><span class="nav-text">User Management</span></a>
                        <div class="triangle"></div>
                    </li>                    
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <!-- Submenu Dashboards-->
                <ul class="childNav" data-parent="user">
                    <li class="nav-item"><a href="{!! route('contacts.index') !!}"><i class="nav-icon i-Add-User"></i><span class="item-name">Contact</span></a></li>
                    <li class="nav-item"><a href="{!! route('groups.index') !!}"><i class="nav-icon i-Couple-Sign"></i><span class="item-name">Group</span></a></li>                    
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
            </div>

<!-- =============== Left side End ================-->

         <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1 class="mr-2">@yield('title')</h1>
                    <ul>
                    <li><a href="">@yield('menu')</a></li>
                    <li>@yield('title')</li>
                    </ul>
                </div>
                @yield('content')
            </div>
        <!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="">
                        <div>
                            <p class="m-0">&copy; {{ date('Y') }} Dev</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
    </div>
     <!-- new theme -->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/sidebar.large.script.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v1.script.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/customizer.script.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
    <!-- jQuery 3.1.1 -->
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap3/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/datatables.script.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready( function () {
    $('#table').DataTable();
     });
    </script>
</body>
</html>

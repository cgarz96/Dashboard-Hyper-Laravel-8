<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="hyper/assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="hyper/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="hyper/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="hyper/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">


    </head>

    <body class="loading" >
        <script type="text/javascript">
            element = document.querySelector('body');
            if (localStorage.getItem('mode')=='dark') {
                element.setAttribute("data-layout-config", '{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": true}');

            }else{
                element.setAttribute("data-layout-config", '{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}');
            }
        </script>

        <!-- Pre-loader -->
        <div id="preloader">
            <div id="status">
                <div class="bouncing-loader"><div></div><div></div><div></div></div>
            </div>
        </div>
        <!-- End Preloader-->

        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="hyper/assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="hyper/assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="hyper/assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="hyper/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    @include('layouts.admin.side-menu')
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    @include('layouts.admin.navbar')
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        @include('layouts.admin.page-title')    
                        <!-- end page title --> 
                        @section('content')
{{ var_dump(\Cookie::get()) }}
                        {{\Cookie::make("low-carb","almond cookie",30)}}
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.admin.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
            @include('layouts.admin.right-sidebar')
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="hyper/assets/js/vendor.min.js"></script>
        <script src="hyper/assets/js/app.min.js"></script>

        <!-- Todo js -->
        <script src="hyper/assets/js/ui/component.todo.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- end demo js-->
    </body>
</html>


<script type="text/javascript">

//Swal.fire('Any fool can use a computer')
</script>


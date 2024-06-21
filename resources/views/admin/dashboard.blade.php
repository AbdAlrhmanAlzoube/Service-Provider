<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
   @include('admin.layouts.css.main_css')
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>
<body class="with-welcome-text">
<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
               @yield('content')
            </div>
            <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.layouts.js.main_js')
<!-- End custom js for this page-->
</body>
</html>

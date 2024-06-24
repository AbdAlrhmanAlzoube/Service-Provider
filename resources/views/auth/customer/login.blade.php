<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('auth/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('auth/assets/images/favicon.png') }}" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <h4>Hello! Let's get started</h4>
                        <h6 class="fw-light">Sign in to continue.</h6>
                        <form method="POST" action="{{ route('user.login') }}" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email" required autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password" required>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
                            </div>

                            <div class="text-center mt-4 fw-light">
                                Don't have an account? <a href="{{ route('user.register') }}" class="text-primary">Create</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('auth/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('auth/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{ asset('auth/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('auth/assets/js/template.js') }}"></script>
<script src="{{ asset('auth/assets/js/settings.js') }}"></script>
<script src="{{ asset('auth/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('auth/assets/js/todolist.js') }}"></script>
<!-- endinject -->
</body>
</html>

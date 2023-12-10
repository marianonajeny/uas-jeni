<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset( 'assets' )}}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset( 'assets' )}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset( 'assets' )}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset( 'assets' )}}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <form method="POST" action="{{ route('login') }}">
                  @csrf          
                <div>
                  <input type="email"  name="email" value="{{old('email')}}" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit"  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="form-check">
                  <label class="form-check-label text-muted">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" >
                <input type="checkbox"  class="form-check-input">
                    Keep me signed in
                  </label>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
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
  <!-- base:js -->
  <script src="{{ asset( 'assets' )}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset( 'assets' )}}/js/off-canvas.js"></script>
  <script src="{{ asset( 'assets' )}}/js/hoverable-collapse.js"></script>
  <script src="{{ asset( 'assets' )}}/js/template.js"></script>
  <script src="{{ asset( 'assets' )}}/js/settings.js"></script>
  <script src="{{ asset( 'assets' )}}/js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>

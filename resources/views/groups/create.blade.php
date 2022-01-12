 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>{{ $title }}</title>
     <!-- plugins:css -->
     <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
     <!-- endinject -->
     <!-- Plugin css for this page -->
     <!-- End plugin css for this page -->
     <!-- inject:css -->
     <!-- endinject -->
     <!-- Layout styles -->
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <!-- End layout styles -->
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
 </head>

 <body>
     <div class="container-scroller">
         <div class="row p-0 m-0 proBanner" id="proBanner">
             <div class="col-md-12 p-0 m-0">
                 <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                     <div class="ps-lg-1">
                         <div class="d-flex align-items-center justify-content-between">
                             <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                 and
                                 more with this template!</p>
                             <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                 target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                         </div>
                     </div>
                     <div class="d-flex align-items-center justify-content-between">
                         <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                                 class="mdi mdi-home me-3 text-white"></i></a>
                         <button id="bannerClose" class="btn border-0 p-0">
                             <i class="mdi mdi-close text-white me-0"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
         <!-- partial:partials/_navbar.html -->

         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
             <!-- partial:partials/_sidebar.html -->
             <nav class="sidebar sidebar-offcanvas" id="sidebar">
                 <ul class="nav">
                     <li class="nav-item">
                         <a class="nav-link" href="/dashboard">
                             <span class="menu-title">Dashboard</span>
                             <i class="mdi mdi-home menu-icon"></i>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/friends">
                             <span class="menu-title">Friends</span>
                             <i class="mdi mdi-account-circle menu-icon"></i>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/groups">
                             <span class="menu-title">Groups</span>
                             <i class="mdi mdi-account-circle menu-icon"></i>
                         </a>
                     </li>
                 </ul>
             </nav>
             <!-- partial -->
             <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title">
                             <span class="page-title-icon bg-gradient-primary text-white me-2">
                                 <i class="mdi mdi-home"></i>
                             </span> Dashboard
                         </h3>
                         <nav aria-label="breadcrumb">
                             <ul class="breadcrumb">
                                 <li class="breadcrumb-item active" aria-current="page">
                                     <span></span>Overview <i
                                         class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                     <div class="col-12 grid-margin stretch-card">
                         <div class="card">
                             <div class="card-body">
                                 <h4 class="card-title">Basic form elements</h4>
                                 <p class="card-description"> Basic form elements </p>
                                 <form action="/groups" method="POST" class="forms-sample">
                                     @csrf
                                     <div class="form-group">
                                         <label for="exampleInputName1">Name</label>
                                         <input type="text" class="form-control" name="nama" id="exampleInputName1"
                                             placeholder="Nama" value="{{ old('nama') }}">
                                         @error('nama')
                                             <div class="alert alert-danger">{{ $massage }}</div>
                                         @enderror
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputPassword4">Description</label>
                                         <input type="text" class="form-control" name="description"
                                             id="exampleInputPassword4" placeholder="description"
                                             value="{{ old('description') }}">
                                         @error('description')
                                             <div class=" alert alert-danger">{{ $massage }}
                                             </div>
                                         @enderror
                                     </div>
                                     <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                     <button class="btn btn-light">Cancel</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- content-wrapper ends -->
                 <!-- partial:partials/_footer.html -->
                 <footer class="footer">
                     <div class="container-fluid d-flex justify-content-between">
                         <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                             bootstrapdash.com 2021</span>
                         <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                                 href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                 target="_blank">Bootstrap
                                 admin template</a> from Bootstrapdash.com</span>
                     </div>
                 </footer>
                 <!-- partial -->
             </div>
             <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
     </div>
     <!-- container-scroller -->
     <!-- plugins:js -->
     <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
     <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
     <script src="{{ asset('assets/js/misc.js') }}"></script>
     <!-- endinject -->
     <!-- Custom js for this page -->
     <script src="{{ asset('assets/js/dashboard.js') }}"></script>
     <script src="{{ asset('assets/js/todolist.js') }}"></script>
     <!-- End custom js for this page -->
 </body>

 </html>

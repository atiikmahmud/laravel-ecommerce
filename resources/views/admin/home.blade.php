<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel Ecommerce</title>
    
    @include('admin.css')

    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        
        @include('admin.header')

        <!-- partial -->
        
        @include('admin.body')
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    @include('admin.script')

  </body>
</html>
<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
      .collapse list-unstyled {
    transition: max-height 1.0s ease-in-out;
}
    </style>
  </head>
  <body>
    @include('admin.header')
      <!-- Sidebar Navigation -->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('admin.body')
      @include('admin.footer')
  </body>
</html>
<!DOCTYPE html >
<html >
  <head>
    @include('backend.base_layout.header.header')
    @stack('css')
    <title>@yield('title')</title>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
   
    <div class="wrapper">
      @include('backend.base_layout.aside')
      @include('backend.base_layout.nav')
      <div class="content-wrapper">
        @yield('content')
      </div>
       @include('backend.base_layout.footer.footer')
     </div>
     @include('backend.base_layout.footer.footer-meta')
    @stack('js')
  </body>
</html>

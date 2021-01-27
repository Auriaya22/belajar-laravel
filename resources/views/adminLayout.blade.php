<!DOCTYPE html>
<html lang="en">
<head>
  @include('adminLayouts.head')
</head>
<body>
  <div class="wrapper">
    @include('adminLayouts.nav')
    @include('adminLayouts.sidebar')
    @yield('content')
    @include('adminLayouts.footer')
  </div>
  @include('adminLayouts.footer-scripts')
  @stack('custom-script')
</body>
</html>

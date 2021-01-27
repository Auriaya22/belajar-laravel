<!DOCTYPE html>
<html lang="en">
<head>
  @include('adminLayouts.bloglayout.head')
</head>
<body>
  @include('adminLayouts.bloglayout.nav')
  @yield('content')
  @include('adminLayouts.bloglayout.footer-scripts')
</body>
</html>

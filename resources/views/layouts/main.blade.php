<!doctype html>
<html lang="en">
  <head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-- Bootstrap icon -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
      </head>
  </head>
  <body>
    
    <!-- Navbar  -->
    @include('partials.navbar')
    
    <!-- Main Content  -->
    @yield('container')
    
    <!-- Footer  -->
    @include('partials.footer')
    
    <script src="/js/app.js"></script>
  </body>
</html>
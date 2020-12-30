<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      @yield('css')
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
        @include('frontsite.layouts.header')
        @yield('content')
        @include('frontsite.layouts.footer')
        <!--main js--> 
        <script src="js/jquery-1.12.4.min.js"></script> 
        <!--bootstrap js--> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/slick.min.js"></script> 
         @yield('script')
        <script src="js/wow.min.js"></script>
        <!--custom js--> 
        <script src="js/custom.js"></script>
        
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
      @include('home.custom_css')
      @include('home.res_css')
   </head>
   <!-- body -->
   <body class="main-layout" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-ofset="90">
      @include('home.header')
      @include('home.product')
      @include('home.footer')
      @include('home.js')
   </body>
</html>
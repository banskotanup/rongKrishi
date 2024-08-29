<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
      @include('home.custom_css')
      @include('home.res_css')
   </head>
   <!-- body -->
   <body class="main-layout" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-ofset="90">
      @include('home.loader')
      @include('home.header')
      @include('home.top')   
      @include('home.about')
      @include('home.service')
      @include('home.customers')
      @include('home.choose')
      @include('home.news')
      @include('home.contact')
      @include('home.footer')
      @include('home.js')
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
      @include('home.custom_css')
      @include('home.res_css')
      <style>
        .about{
            margin-bottom: 20px;
        }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-ofset="90">
      @include('home.header')
         <!-- about -->
      <div class="about">
        <div class="container-fluid">
           <div class="row d_flex">
              <div class="col-lg-6 col-md-12">
                 <div class="titlepage text_align_left">
                    <span>About Us</span>
                    <h2>AGRICULTURE MARKET</h2>
                    <p>fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that itfact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that itfact th</p>
                    <a class="main-btn primary-btn" href="about.html">Learn More</a>
                 </div>
              </div>
              <div class="col-lg-6 col-md-12">
                 <div class="row d_flex">
                  <div class="col-md-7">
                    <div class="about_img">
                       <figure><img src="images/about_img.jpg" alt="#"/>
                       </figure>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="about_img">
                       <figure><img src="images/about_img1.jpg" alt="#"/>
                       </figure>
                    </div>
                  </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end about -->
      @include('home.footer')
      @include('home.js')
   </body>
</html>
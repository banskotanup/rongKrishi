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
      <section id="services" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <h2 style="margin-top: 10px;">ORGANIC PRODUCTS</h2>
                    <p style="color: #000000;">
                        We help farmers adopt sustainable organic farming practices, offering guidance on natural fertilizers, eco-friendly pest control, and organic certification. We provide market access for organic produce, along with post-harvest packaging and storage solutions to maintain quality. Additionally, we offer training programs to support farmers in achieving long-term organic success.</p>

                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="images/services-img/9.jpg" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Organic Farming Support</h5>
                        <p>RongKrishi provides guidance on organic farming practices, including the use of natural fertilizers, composting, and eco-friendly pest control. We help farmers transition from conventional to organic farming, ensuring compliance with organic standards and promoting sustainable soil health.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/11.jpg" style="height: 200px;">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Organic Certification Assistance</h5>
                        <p>We assist farmers in obtaining organic certifications that meet local and international standards. This certification ensures that their products are officially recognized as organic, opening up access to premium markets and building consumer trust.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/12.jpg">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Market Access for Organic Products</h5>
                        <p>RongKrishi helps farmers connect with markets that demand organic products, both locally and globally. By offering distribution channels and market insights, we enable farmers to sell their organic produce at competitive prices and reach health-conscious consumers.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/10.jpg" style="height: 200px;">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3"> Natural Pest and Disease Control
                        </h5>
                        <p>Our services include providing organic, eco-friendly pest and disease control solutions that help protect crops without the use of harmful chemicals. These methods maintain the integrity of organic produce while promoting a healthier farming environment.</p>
                    </div>
                </div>
                <p style="color: #000000;">RongKrishi's Organic Products services are dedicated to helping farmers transition to and thrive in organic agriculture. We provide comprehensive support in adopting sustainable practices, such as the use of natural fertilizers, composting, and eco-friendly pest control methods. By guiding farmers through the organic certification process, we ensure their products meet stringent organic standards, opening up new markets and increasing their profitability. Our natural pest and disease control solutions maintain the integrity of the crops while promoting healthier ecosystems, ensuring that organic produce is grown in harmony with the environment.

                </p>
                <p style="color: #000000;">In addition to farming support, RongKrishi offers post-harvest handling, eco-friendly packaging, and storage solutions to preserve the freshness and quality of organic products. We connect farmers with local and global markets that value organic produce, helping them reach health-conscious consumers and secure premium prices. Through our training programs and workshops, farmers gain essential skills in organic farming, crop rotation, and soil management, empowering them to maintain high productivity and sustainability over the long term.</p>
            </div>
        </div>
    </section>
    <!--Service Exit-->
      @include('home.footer')
      @include('home.js')
   </body>
</html>
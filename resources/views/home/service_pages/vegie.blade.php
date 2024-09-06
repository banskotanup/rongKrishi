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
                    <h2 style="margin-top: 10px;">FRESH VEGETABLES</h2>
                    <p style="color: #000000;">We focus on providing fresh, high-quality vegetables
                            to meet the growing demand for healthy and sustainable produce. Here's an overview of the services related to fresh vegetables:</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="images/services-img/1.jpg" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Supply Chain Management</h5>
                        <p>We ensures a streamlined and efficient supply chain that connects farmers with markets. By leveraging advanced logistics and tracking systems, we guarantee that fresh vegetables are harvested, transported, and delivered to consumers quickly, preserving their quality and nutritional value.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/2.jpg">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Cold Storage and Preservation</h5>
                        <p>To maintain freshness and minimize spoilage, we offer cold storage solutions that keep vegetables in optimal conditions from the time they are harvested to when they reach the market. This helps prolong the shelf life of produce, ensuring that consumers receive the freshest products possible.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/3.jpg">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Sustainable Farming Practices
                        </h5>
                        <p>We promote environmentally-friendly farming methods to produce fresh vegetables. We encourage the use of natural fertilizers, crop rotation, and water conservation techniques, which not only yield healthier produce but also reduce the ecological footprint.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/4.jpg">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Market Access and Distribution</h5>
                        <p>Our services include connecting local farmers to larger markets, both domestically and internationally. By creating this bridge, we help small-scale farmers reach a wider audience and ensure consumers have access to fresh, locally-grown vegetables.</p>
                    </div>
                </div>
                <p style="color: #000000;">Our Fresh Vegetables service is designed to ensure that farmers and consumers alike benefit from high-quality, sustainably-grown produce. We provide a seamless supply chain, from farming to market, ensuring that fresh vegetables reach their destination quickly while maintaining their nutritional value and freshness. By working directly with local farmers, we help them adopt sustainable farming methods, such as organic practices, natural pest control, and water-efficient irrigation. This not only produces healthier vegetables but also reduces the environmental impact, contributing to long-term agricultural sustainability.</p>
                <p style="color: #000000;">Our services also include cold storage solutions and efficient logistics, allowing farmers to store their produce at optimal temperatures, preventing spoilage and extending shelf life. We provide farmers with market access, helping them sell their vegetables both locally and internationally, which improves their income and broadens their reach. Additionally, RongKrishi supports farmers with organic certification, proper labeling, and consulting on best practices, ensuring that their produce meets health standards and consumer expectations. By connecting farmers with consumers through both traditional markets and direct-to-consumer sales, we help deliver fresh, nutritious vegetables to the end user while promoting fair pricing and supporting local agriculture.</p>
            </div>
        </div>
    </section>
    <!--Service Exit-->
      @include('home.footer')
      @include('home.js')
   </body>
</html>
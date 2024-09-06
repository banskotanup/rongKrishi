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
                    <h2 style="margin-top: 10px;">AGRICULTURE PRODUCTS</h2>
                    <p style="color: #000000;">We provide farmers with modern equipment, irrigation systems, and eco-friendly crop protection solutions to boost productivity and sustainability. We offer post-harvest storage, logistics, and market access, ensuring crops remain fresh and profitable. Additionally, we provide expert consulting and training to help farmers adopt innovative, sustainable practices.</p>

                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="images/services-img/5.jpg" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Modern Farming Equipment</h5>
                        <p>RongKrishi offers a wide range of advanced agricultural equipment, including tractors, plows, seeders, and harvesters. These tools are designed to increase efficiency and reduce manual labor, enabling farmers to maximize their crop yields while minimizing operational costs.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/6.jpg">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Crop Protection Solutions</h5>
                        <p>RongKrishi offers a variety of eco-friendly crop protection products, such as organic pesticides, herbicides, and fertilizers, to ensure that farmers can protect their crops from pests and diseases while maintaining soil health and minimizing environmental impact.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/7.jpg" style="height: 200px;">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Post-Harvest Solutions
                        </h5>
                        <p>Our post-harvest services include storage solutions, packaging, and logistics to ensure that crops remain fresh and undamaged after harvesting. We provide cold storage facilities and transportation services to extend the shelf life of produce and reduce waste.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img decoding="async" src="./images/services-img/8.jpg">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Farm Management Consulting</h5>
                        <p>RongKrishi provides expert consulting services to help farmers implement best practices for crop rotation, soil management, and sustainable farming techniques. Our team of agricultural experts works closely with farmers to improve productivity while conserving natural resources.</p>
                    </div>
                </div>
                <p style="color: #000000;">RongKrishi’s Agricultural Products services offer a comprehensive suite of tools and solutions designed to enhance the efficiency and productivity of farming operations. We provide farmers with access to state-of-the-art equipment, such as tractors, plows, and seeders, which streamline various farming tasks and reduce manual labor. Our advanced irrigation systems help optimize water usage, ensuring crops receive adequate hydration while conserving resources. Additionally, we offer crop protection solutions, including eco-friendly pesticides and fertilizers, to safeguard crops from pests and diseases while maintaining soil health.</p>
                <p style="color: #000000;">Beyond equipment and protection, RongKrishi supports farmers with post-harvest solutions that include cold storage, packaging, and logistics to preserve the quality of produce and reduce spoilage. We also facilitate market access, helping farmers connect with both local and international buyers to achieve better prices and broader reach. Our expert consulting services and training programs guide farmers in adopting best practices for crop management, soil conservation, and sustainable farming techniques, ensuring they can achieve long-term success and contribute to a more sustainable agricultural sector.</p>
            </div>
        </div>
    </section>
    <!--Service Exit-->
      @include('home.footer')
      @include('home.js')
   </body>
</html>
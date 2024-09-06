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
            <!-- about -->
            <div class="about">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-lg-6 col-md-12">
                        <div class="titlepage text_align_left">
                           <h2>AGRICULTURE MARKET</h2>
                           <p>The agriculture market involves the buying and selling of products related to farming and growing crops. It includes a wide range of goods and services, such as seeds, fertilizers, machinery, and tools, as well as the produce itself, like fruits, vegetables, grains, and livestock.</p>
       
                            <p>Farmers are the key players in this market. They grow crops and raise animals, and then sell their products to wholesalers, retailers, or directly to consumers. The market also involves businesses that provide support services, such as agricultural technology, transportation, and storage facilities.</p>
                            
                            <p>The agriculture market is influenced by factors like weather conditions, government policies, and global trade. For instance, a drought can reduce crop yields, affecting supply and prices. Conversely, advances in technology can improve efficiency and productivity.</p>
                            
                            <p>This market is crucial for feeding the world’s population and supports many jobs. Prices and demand can vary based on seasonality, consumer preferences, and economic conditions. Overall, the agriculture market is essential for ensuring a stable food supply and supporting economies around the globe.</p>
                           
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
     <!-- end about -->
      @include('home.footer')
      @include('home.js')
   </body>
</html>
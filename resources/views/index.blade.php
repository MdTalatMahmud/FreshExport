@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Fresh Export Australia (FEA) is a worldwide exporter of Fresh Harvest fruits and vegetable supplying to superstores and wholesalers all throughout the field. Fresh Export Australia (FEA) is an Australian Export/Import business corporation based in Sydney, Australia. We source and supply our products right from farms,distribution warehouses and packing warehouses in Australia. Our product items comprise of fresh fruits, vegetables, dry fruits, nuts, grain, dairy, spices which are organically harvested and distributed to the global marketplaces at very reasonable rates all throughout the year." />
@endsection
@section ('title')
<title>Welcome to Fresh Export Australia (FEA)</title>
@endsection
@section('content') 
@include ('layouts.mainslider')
    
    <section>
        <div class="fea-story">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                    <div class="fea-story-left">
                       <h2>Our Story</h2>
                       <hr class="fea-hr">

                       <p><strong>Fresh Export Australia (FEA)</strong> is a worldwide exporter of Fresh Harvest fruits and vegetable supplying to superstores and wholesalers all throughout the field.</p>
                       <p>Fresh Export Australia (FEA) is an Australian Export/Import business corporation based in Sydney, Australia. We source and supply our products right from farms, distribution warehouses and packing warehouses in Australia. Our product items comprise of fresh fruits, vegetables, dry fruits, nuts, grain, dairy, spices which are organically harvested and distributed to the global marketplaces at very reasonable rates all throughout the year.</p>
                    </div> <!-- fea-story-left -->
                  </div>
                  <div class="col-md-6">
                    <div class="fea-story-right">
                       
                    </div> <!-- fea-story-right -->
                  </div>
              </div><!-- row -->
          </div><!-- container -->
        </div><!-- fea-story -->
    </section>
    <section>
        <div class="fea-products-services">
            <div class="container">
              <div class="row">
                  <div class="col-md-4">
                    <div class="fea-pro-ser-block">
                      <img class="img-responsive" src="images/freeb.jpg" alt="">
                      <div class="fea-pro-ser-details">
                      <h2>Our Services</h2>
                      <hr class="fea-hr">
                      <p>Fresh Export Australia have connections with an extensive grower network to create a service that allows you to gain access to the freshest harvest products and widest variety accessible throughout the Australian and New Zealand seasons. </p>
                    </div>
                    </div><!-- fea-pro-ser-block -->
                  </div><!-- col -->
                  <div class="col-md-4">
                    <div class="fea-pro-ser-block">
                        <img class="img-responsive" src="images/b11.png" alt="">
                      <div class="fea-pro-ser-details">
                        <h2>Our Product</h2>
                        <hr class="fea-hr">
                        <p>Fresh Export Australia provides custom-made services to suit your needs and are a full 'end-to-end' service provider. We have well customary supply chain etiquettes for air and sea freight for our customers to receive quality fresh produce on time.</p>
                      </div>
                      </div><!-- fea-pro-ser-block -->
                  </div><!-- col -->
                  <div class="col-md-4">
                    <div class="fea-pro-ser-block">
                        <img class="img-responsive" src="images/freeb3.jpg" alt="">
                        <div class="fea-pro-ser-details">
                        <h2>EXPORT</h2>
                        <hr class="fea-hr">
                        <p>Exporting goods from one country to another is a multipart process, it comprises many events with many guidelines, endorsements and compliance processes. If you are exporting any goods, you can save time and money with FEA export services.</p>
                      </div>
                    </div><!-- fea-pro-ser-block -->
                  </div><!-- col -->
              </div><!-- row -->
            </div><!-- container -->
        </div><!-- fea-products-services -->
    </section>
    <section>
      <div class="fea-details-services">
        <div class="container">
         <div class="row">
            <div class="col-md-6 d-md-block d-lg-none">
                <img class="img-responsive" src="images/1342400111.jpg" alt="">
              </div>
           <div class="col-md-6">
             <div class="fea-d-s-block">
              <h2>Warehousing</h2>
              <hr class="fea-hr">
                <p>With utmost industrial solutions, Fresh Export Australia provides you incorporated, energy efficient storage solutions for all types of supplies. To reserve the freshness, we always provide our customer with a basis to deliver the best products which are essential to be kept in fitting temperature and storage conditions.</p>
              </div><!-- fea-d-s-block -->
         </div>
         <div class="col-md-6 d-lg-block d-none">
          <img class="img-responsive" src="images/1342400111.jpg" alt="">
        </div>
        <div class="col-md-6">
          <img class="img-responsive" src="images/88218493.webp" alt="">
        </div>
        <div class="col-md-6">
        <div class="fea-d-s-block">
            <h2>Customs</h2>
            <hr class="fea-hr">
            <p>Fresh Export Australia provides assistance with the entire multipart of customs clearance amenities for all produce. Many stringent border regulatory requirements in Australia is an indispensable linkage in the supply chain course. FEA customs broker team possess a mutual experience in this industry.</p>
            
        </div><!-- fea-d-s-block -->
       </div>
         </div><!-- row -->
        </div><!-- container -->
      </div><!-- fea-details-services -->
    </section>
    
      <!-- === PARTNER SLIDER === -->
      @include ('layouts.partnerslider')

<section>
    <div class="fea-contact">
      <div class="container">
        <div class="contact-header">
          <h2>Get In Touch</h2>
          <hr class="fea-hr">
          <h4>PLEASE FILL OUT THE FORM BELOW, AND WE'LL BE IN TOUCH</h4>
        </div><!-- contact-header -->
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <form action="">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Full Name">
                    </div>
              </div>
              <div class="col-md-6 col-sm-6">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Phone Number">
                    </div>
              </div>
              <div class="col-md-12 col-sm-12">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                      </div>
                      <input type="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email Address">
                    </div>
              </div>
              <div class="col-md-12 col-sm-12">
                  <div class="input-group">
                      <textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
                  </div>
              </div>
              <div class="sub-button col-md-12 col-sm-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </div><!-- row -->
          </form>
        </div>
        <div class="col-sm-2"></div>
       </div><!-- row -->
      </div><!-- container -->
    </div><!-- fea-contact -->
</section>
@endsection
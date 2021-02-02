@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Fresh Export Australia (FEA) is an Australian Export/Import business corporation based in Sydney, Australia." />
@endsection
@section ('title')
<title>Welcome to Fresh Export Australia (FEA)</title>
@endsection
@section('content') 
<section>
      <div class="pages-header">
          <h2>About</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container">
        <div class="row">
            <div class="col-md-6 about-img">
                <img class="img-responsive" src="images/a-b.png" alt="">
            </div>
            <div class="col-md-6">
        <p class="a-p"> <strong>Fresh Export Australia (FEA)</strong>  is an Australian Export/Import business corporation based in Sydney, Australia. We source and supply our products right from farms, distribution warehouses and packing warehouses in Australia. Our product items comprise of fresh fruits, vegetables, dry fruits, nuts, grain, dairy and spices which are organically harvested and distributed to the global marketplaces at very reasonable rates all throughout the year. </p>
            
            <p>We vanity ourselves on fresh produce, organic and dry produce items.</p>
            <p>Our differences consist of:</p>
            <ul>
                <li>Safe and Healthy Fresh/dry Produce items</li>
                <li>Beautiful colours of produce items</li>
                <li>Admirable flavours/ taste</li>
            </ul>
        </div>
        </div>
        </div><!-- container -->
    </div><!-- page-about -->
</section>
<section>
    <div class="about-fruits">
        <div class="container">
        <div class="fruit-header">
         <h2>Fruits</h2>
         <hr class="fea-hr">
         <p>Fruits are good source of vitamins, dietary fibre and folate.</p>
        </div>   
       <div class="fruit-images">
         <div class="row">
           <div class="col-md-3">
               <img class="img-responsive" src="images/a1.jpg" alt="">
           </div>
           <div class="col-md-3">
                <img class="img-responsive" src="images/a2.jpg" alt="">
            </div>
            <div class="col-md-3">
                    <img class="img-responsive" src="images/a3.jpg" alt="">
            </div>
            <div class="col-md-3">
                    <img class="img-responsive" src="images/a4.jpg" alt="">
            </div>
         </div><!-- row -->
         <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" src="images/a5.jpg" alt="">
                </div>
                <div class="col-md-4">
                     <img class="img-responsive" src="images/a6.jpg" alt="">
                 </div>
                 <div class="col-md-4">
                         <img class="img-responsive" src="images/a7.jpg" alt="">
                 </div>
              </div><!-- row -->
       </div><!-- fruit-images -->
     </div><!-- container -->
    </div><!-- about-fruits -->
</section>


<section>
        <div class="about-fruits about-vegetable">
            <div class="container">
             <div class="fruit-header">
             <h2>Vegetables</h2>
             <hr class="fea-hr">
             <p>Excellent source of vitamins.  Good source of dietary fibre and folate.</p>.
            </div>   
           <div class="fruit-images">
                <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/a5.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                             <img class="img-responsive" src="images/a6.jpg" alt="">
                         </div>
                      </div><!-- row -->
             <div class="row">
               <div class="col-md-4">
                   <img class="img-responsive" src="images/a1.jpg" alt="">
               </div>
               <div class="col-md-4">
                    <img class="img-responsive" src="images/a2.jpg" alt="">
                </div>
                <div class="col-md-4">
                        <img class="img-responsive" src="images/a3.jpg" alt="">
                </div>
             </div><!-- row -->
             
           </div><!-- fruit-images -->
         </div><!-- container -->
        </div><!-- about-fruits -->
    </section>
    @include ('layouts.partnerslider');
    @endsection
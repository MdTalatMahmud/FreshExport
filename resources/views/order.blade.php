@extends('layouts.master')
@section ('page_meta')
    <meta name="description" content="Fresh Export Australia (FEA) is a worldwide exporter of Fresh Harvest fruits and vegetable supplying to superstores and wholesalers all throughout the field.Fresh Export Australia (FEA) is an Australian Export/Import business corporation based in Sydney, Australia. We source and supply our products right from farms, distribution warehouses and packing warehouses in Australia. Our product items comprise of fresh fruits, vegetables, dry fruits, nuts, grain, dairy, spices which are organically harvested and distributed to the global marketplaces at very reasonable rates all throughout the year." />
@endsection
@section ('title')
    <title>Welcome to Fresh Export Australia (FEA)</title>
@endsection
@section('content')
    <section>
        <div class="fea-contact page-contact">
            <div class="container">
                <div class="contact-header">
                    <h2>Send Your Order Details</h2>
                    <hr class="fea-hr">
                    <h4>PLEASE FILL OUT THE FORM BELOW. WE WILL CONTACT YOU SOON!</h4>
                </div><!-- contact-header -->
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message_sent')}}
                            </div>

                        @endif
                        <form action="{{ route('order.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Full Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Phone Number" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-map"></i></div>
                                        </div>

                                            <select class="form-control" aria-label=".form-select-lg example" name="country">
                                                <option selected>Country</option>
                                                <option value="Australia">Australia</option>
                                                <option value="NewZealand">New Zealand</option>
                                                <option value="Canada">Canada</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <textarea class="form-control" aria-label="With textarea" placeholder="Message" name="msg"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <h2 style="color: #ffffff; margin-top: 20px;">What do you want?</h2>
                                    <div class="form-check" style="padding-right: 30px;">
                                        <input class="form-check-input" type="checkbox" value="Fruits" id="flexCheckDefault" name="fruits">
                                        <label class="form-check-label" for="flexCheckDefault" style="color: #ffffff;">
                                            Fruits
                                        </label>
                                    </div>
                                    <div class="form-check" style="padding-right: 30px;">
                                        <input class="form-check-input" type="checkbox" value="Vegetables" id="flexCheckChecked" name="vegetables">
                                        <label class="form-check-label" for="flexCheckChecked" style="color: #ffffff;">
                                            Vegetables
                                        </label>
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
    <section>
        <div class="page-location text-center">

            <div class="f-l-first">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="share-social">
                                <p>Follow Us on Social Media</p>
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i> </a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div><!-- share-social -->
                        </div>

                        <div class="col-md-4">
                            <div class="last-location">
                                <p>Contact Details</p>
                                <ul>
                                    <li>Level 1, Suite 11/35-39 Auburn Road</li>
                                    <li>Auburn New South Wales 2144</li>
                                    <li>Tel: 02 87333549</li>
                                    <li>Fax: 02 94236947</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- last-location -->
                        </div>
                        <div class="col-md-2"></div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- f-l-first -->
            <div class="f-l-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="loc-block">
                                <p>SYDNEY OFFICE</p>
                                <ul>
                                    <li>Level 34, AMP Tower, 50 Bridge Street</li>
                                    <li>Sydney New South Wales 2000</li>
                                    <li>Landline: (02) 8216 0934</li>
                                    <li>FAX: (02) 9475 0522</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- loc-block -->
                        </div>
                        <div class="col-md-4">
                            <div class="loc-block">
                                <p>BRISBANE OFFICE</p>
                                <ul>
                                    <li>Level 5, City Central, Tower 2 </li>
                                    <li>121 King William Street</li>
                                    <li>Adelaide South Australia 5000</li>
                                    <li>Landline: (02) 8733 3549</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- loc-block -->
                        </div>
                        <div class="col-md-4">
                            <div class="loc-block">
                                <p>MELBOURNE OFFICE</p>
                                <ul>
                                    <li>G05, 55 Produce Drive</li>
                                    <li>Epping VIC 3076</li>
                                    <li>Melbourne</li>
                                    <li>Landline: (02) 8733 3549</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- loc-block -->
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- f-l-sec -->

            <div class="f-l-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="loc-block">
                                <p>ADELAIDE OFFICE</p>
                                <ul>
                                    <li>Level 5, City Central, Tower 2</li>
                                    <li>121 King William Street </li>
                                    <li>Adelaide South Australia 5000</li>
                                    <li>Landline: (02) 8733 3549</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- loc-block -->
                        </div>
                        <div class="col-md-4">
                            <div class="loc-block">
                                <p>PERTH, Forrest Centre</p>
                                <ul>
                                    <li>Level 29/221 St Georges Terrace</li>
                                    <li>Perth Western Australia WA 6000</li>
                                    <li>Landline: (02) 8733 3549</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- loc-block -->
                        </div>
                        <div class="col-md-4">
                            <div class="loc-block">
                                <p>AUBURN OFFICE</p>
                                <ul>
                                    <li>Level 1, Suite 11/35-39 Auburn Road</li>
                                    <li>Auburn New South Wales 2144</li>
                                    <li>Landline: (02) 8733 3549</li>
                                    <li>FAX: (02) 9423 6947</li>
                                    <li>Email: info@freshexport.com.au</li>
                                </ul>
                            </div><!-- loc-block -->
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- f-l-sec -->
        </div><!-- page-location -->
    </section>
@endsection

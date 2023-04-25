<!-- Start Main Services -->
<section class="main-services section-padding p-relative">
    <div class="side-lines"> <span class="box"></span>
        <span class="text">Loanly</span>
        <span class="line"></span>
    </div>
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-black fw-700">{{$service->title}}</h3>
                <div class="section-description">
                    <p class="text-light-white">{{$service->description}}</p>
                </div>
            </div>
            <!-- <div class="section-btn"> <a href="service.html" class="btn-first btn-submit text-light-blue">View More</a>
            </div> -->
        </div>
        <div class="row">
            @foreach($service->serviceBlock as $serviceBlock)
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="{{$serviceBlock->icon}}"></i>
                        </div>
                        <h5 class="fw-700"><a class="text-custom-black">{{$serviceBlock->title}}</a></h5>
                        <p class="text-light-white no-margin">{{$serviceBlock->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-kidnapping"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Security Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-hook"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Real Estate Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xl-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-book"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Education Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-md-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-wounded"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Personal Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-md-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-auction"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Business Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative mb-xs-30">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-LOANLY"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Corporate Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="main-services-box p-relative">
                    <div class="main-service-wrapper padding-20">
                        <div class="icon-box"> <i class="flaticon-balance-scale"></i>
                        </div>
                        <h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Property Loan</a></h5>
                        <p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Main Services -->

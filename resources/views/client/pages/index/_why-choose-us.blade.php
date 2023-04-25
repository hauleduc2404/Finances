<!-- Start why choose us -->
<section class="why-choose-us-style-2 section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-black fw-700">{{$service->title}}</h3>
                <div class="section-description">
                    <p class="text-custom-black">{{$service->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="square-tabs">
                    <ul class="nav nav-tabs custom mb-xl-20">
                        @foreach ($service->practiveArea as $practiveArea)
                        <li class="nav-item"> <a data-toggle="tab" href="#practive-area-{{$practiveArea->id}}" @if ($loop->last) class="nav-link active" @else class="nav-link" @endif>{{$practiveArea->title}}</a>
                        </li>
                        @endforeach
                        <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#cosmetic-dentistry">Car Loan</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#pediatric-dentistry">Real Estate Loan</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#preventive-dentistry">Education Loan</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#dental-crowns">Business Loan</a>
                        </li> -->
                    </ul>
                    <div class="tab-content padding-20 bx-wrapper bg-custom-white">
                        @foreach ($service->practiveArea as $practiveArea)
                        <div id="practive-area-{{$practiveArea->id}}" @if ($loop->last) class="tab-pane container active" @else class="tab-pane container" @endif>
                            <div class="tab-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img-sec mb-md-40">
                                            <img src="{{$practiveArea->image}}" class="full-width" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="content-box">
                                            <h4 class="text-custom-black">{{$practiveArea->content}}</h4>
                                            <p class="text-light-white">{{$practiveArea->description}}</p>
                                            <div class="list">
                                                <div class="row no-gutters">
                                                    @foreach ($practiveArea->practiveAreaItem as $item)
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">{{$item->title}}</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="{{$item->icon}}" alt="img"></div>
                                                                    <p class="text-light-white no-margin">{{$item->content}}</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!-- <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Top Agent </h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic2.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Best Effort</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic3.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Quick Charges</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic4.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="tab-pane container fade" id="cosmetic-dentistry">
                            <div class="tab-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img-sec mb-md-40">
                                            <img src="/client/assets/images/whyus2.jpg" class="full-width" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="content-box">
                                            <h4 class="text-custom-black">What does Car Loan Advisordo?</h4>
                                            <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                            <div class="list">
                                                <div class="row no-gutters">
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Well Documented</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic1.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Top Agent </h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic2.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Best Effort</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic3.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Quick Charges</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic4.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="pediatric-dentistry">
                            <div class="tab-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img-sec mb-md-40">
                                            <img src="/client/assets/images/whyus3.jpg" class="full-width" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="content-box">
                                            <h4 class="text-custom-black">What does Real State Advisor do?</h4>
                                            <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                            <div class="list">
                                                <div class="row no-gutters">
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Well Documented</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic1.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Top Agent </h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic2.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Best Effort</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic3.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Quick Charges</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic4.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="preventive-dentistry">
                            <div class="tab-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img-sec mb-md-40">
                                            <img src="/client/assets/images/whyus4.jpg" class="full-width" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="content-box">
                                            <h4 class="text-custom-black">What does Business Loan Advisor do?</h4>
                                            <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                            <div class="list">
                                                <div class="row no-gutters">
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Well Documented</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic1.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Top Agent </h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic2.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Best Effort</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic3.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Quick Charges</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic4.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="dental-crowns">
                            <div class="tab-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img-sec mb-md-40">
                                            <img src="/client/assets/images/whyus2.jpg" class="full-width" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="content-box">
                                            <h4 class="text-custom-black">What Business Loan Advisor do?</h4>
                                            <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                            <div class="list">
                                                <div class="row no-gutters">
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Well Documented</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic1.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Top Agent </h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic2.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Best Effort</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic3.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="grid-box">
                                                            <div class="grid-box-inner">
                                                                <a href="index.html#" class="d-block clearfix">
                                                                    <h5 class="text-custom-black">Quick Charges</h5>
                                                                    <div class="icon-box mb-xl-20"> <img src="/client/assets/images/homepage/ic4.png" alt="img"></div>
                                                                    <p class="text-light-white no-margin">Lorem Ipsum is simply</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End why choose us -->

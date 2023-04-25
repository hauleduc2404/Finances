<!-- Start section process-->
<section class="section-padding exp-cal parallax ln-process">
    <div class="overlay overlay-bg-black"></div>
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-white fw-700">{{$service->title}}</h3>
                <div class="section-description">
                    <p class="text-custom-white">{{$service->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($service->process as $process)
            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img mb-md-30">
                    <img src="{{$process->icon}}" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">{{$process->title}}</h4>
                    <p class="text-custom-white">{{$process->content}}</p>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img mb-md-30">
                    <img src="/client/assets/images/homepage/icon1b.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">Apply Loan Online</h4>
                    <p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
                    <a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img mb-xs-30">
                    <img src="/client/assets/images/homepage/icon1c.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">Provide Details online</h4>
                    <p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
                    <a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="exp-cal-img">
                    <img src="/client/assets/images/homepage/icon1d.png" class="mb-xl-20" alt="whyexp">
                    <h4 class="text-custom-white fw-600">Get Loan Immidiately</h4>
                    <p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
                    <a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End section process-->

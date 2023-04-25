<!-- Start Team Doctors -->
<section class="section-padding bg-gradient doctors-team-style-2">
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
            <div class="col-12 no-padding">
                <div class="doctors-slider">
                    @foreach($service->ourTeam as $ourTeam)
                    <div class="slide-item col-12">
                        <div class="team-block p-relative">
                            <div class="inner-box">
                                <div class="image animate-img">
                                    <img src="{{$ourTeam->avatar}}" alt="img" class="full-width">
                                    <div class="overlay-box">
                                        <div class="overlay-inner p-relative full-height">
                                            <ul class="team-social-box custom">
                                                <li class="youtube">
                                                    <a href="{{$ourTeam->youtube_url}}" class="fab fa-youtube fs-16"></a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="{{$ourTeam->linkedin_url}}" class="fab fa-linkedin fs-16"></a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="{{$ourTeam->facebook_url}}" class="fab fa-facebook-f fs-16"></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="{{$ourTeam->twitter_url}}" class="fab fa-twitter fs-16"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content p-relative text-center">
                                    <h4><a class="text-custom-black fw-600 fs-20">{{$ourTeam->fullname}}</a></h4>
                                    <p class="designation text-light-white">{{$ourTeam->position}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="slide-item col-12">
                        <div class="team-block p-relative">
                            <div class="inner-box">
                                <div class="image animate-img">
                                    <img src="/client/assets/images/doctors/doctor2.jpg" alt="img" class="full-width">
                                    <div class="overlay-box">
                                        <div class="overlay-inner p-relative full-height">
                                            <ul class="team-social-box custom">
                                                <li class="youtube">
                                                    <a href="index.html#" class="fab fa-youtube fs-16"></a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="index.html#" class="fab fa-linkedin fs-16"></a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="index.html#" class="fab fa-facebook-f fs-16"></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="index.html#" class="fab fa-twitter fs-16"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content p-relative text-center">
                                    <h4><a href="team.html" class="text-custom-black fw-600 fs-20"> Addison Smith</a></h4>
                                    <p class="designation text-light-white">Business Loan Advisor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="team-block p-relative">
                            <div class="inner-box">
                                <div class="image animate-img">
                                    <img src="/client/assets/images/doctors/doctor3.jpg" alt="img" class="full-width">
                                    <div class="overlay-box">
                                        <div class="overlay-inner p-relative full-height">
                                            <ul class="team-social-box custom">
                                                <li class="youtube">
                                                    <a href="index.html#" class="fab fa-youtube fs-16"></a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="index.html#" class="fab fa-linkedin fs-16"></a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="index.html#" class="fab fa-facebook-f fs-16"></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="index.html#" class="fab fa-twitter fs-16"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content p-relative text-center">
                                    <h4><a href="team.html" class="text-custom-black fw-600 fs-20"> Sarah Taylor</a></h4>
                                    <p class="designation text-light-white">Loan Advisor </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="team-block p-relative">
                            <div class="inner-box">
                                <div class="image animate-img">
                                    <img src="/client/assets/images/doctors/doctor4.jpg" alt="img" class="full-width">
                                    <div class="overlay-box">
                                        <div class="overlay-inner p-relative full-height">
                                            <ul class="team-social-box custom">
                                                <li class="youtube">
                                                    <a href="index.html#" class="fab fa-youtube fs-16"></a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="index.html#" class="fab fa-linkedin fs-16"></a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="index.html#" class="fab fa-facebook-f fs-16"></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="index.html#" class="fab fa-twitter fs-16"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content p-relative text-center">
                                    <h4><a href="team.html" class="text-custom-black fw-600 fs-20"> Aiken Ward</a></h4>
                                    <p class="designation text-light-white">Corporate Loan Advisor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="team-block p-relative">
                            <div class="inner-box">
                                <div class="image animate-img">
                                    <img src="/client/assets/images/doctors/doctor5.jpg" alt="img" class="full-width">
                                    <div class="overlay-box">
                                        <div class="overlay-inner p-relative full-height">
                                            <ul class="team-social-box custom">
                                                <li class="youtube">
                                                    <a href="index.html#" class="fab fa-youtube fs-16"></a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="index.html#" class="fab fa-linkedin fs-16"></a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="index.html#" class="fab fa-facebook-f fs-16"></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="index.html#" class="fab fa-twitter fs-16"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content p-relative text-center">
                                    <h4><a href="team.html" class="text-custom-black fw-600 fs-20">Babatunde Jon</a></h4>
                                    <p class="designation text-light-white">Home Loan Advisor</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Doctors -->

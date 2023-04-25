<!-- Start Apply Today/faqs -->
<section class="book-appointment parallax section-padding" id="book-appointment">
    <div class="overlay overlay-bg-black"></div>
    <div class="pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appointment-sec">
                    <div class="row no-gutters">
                        <div class="col-lg-6 ">
                            <div class="padding-40 full-height bg-white">
                                @foreach ($loanAdviser as $adviser)
                                <div class="align-self-center">
                                    <div class="section-heading">
                                        <h3 class="text-custom-blue fw-600 ">{{$adviser->title}}</h3>
                                    </div>
                                    <p class="text-dark">{{$adviser->description}}</p>
                                    <h6 class="fs-20 mt-4 text-dark">{{$adviser->content}}</h6>
                                    <div class="LOANLY-address">
                                        <p class="text-dark "><span class="fw-600">Address</span> : {{$adviser->address}}</p>
                                        <p class="text-dark "><span class="fw-600">Email</span> : {{$adviser->email}}</p>
                                    </div>
                                    <button type="submit" class="btn-first btn-submit-fill"><i class="fas fa-phone mr-2 fs-16"></i><span class="fs-16">{{$adviser->phone}}</span>
                                    </button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-side full-height bg-border">
                                <div class="section-heading">
                                    <h3 class="text-white fw-600">Make An Apply Today</h3>
                                </div>
                                <form class="form-style-2 form-style-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group"> <span class="input-group-preappend"><i class="fas fa-user"></i></span>
                                                    <input type="text" name="#" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group"> <span class="input-group-preappend"><i class="fas fa-envelope"></i></span>
                                                    <input type="email" name="#" class="form-control" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group"> <span class="input-group-preappend"><i class="fas fa-phone-alt"></i></span>
                                                    <input type="text" name="#" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-first btn-submit full-width">Book Apply Today</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Apply Today/faqs -->

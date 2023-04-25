<!-- start Loan Calculator -->
<section class="section-padding pb-0 exp-cal2">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-white fw-700">{{$service->title}}</h3>
                <div class="section-description">
                    <p class="text-light-white">{{$service->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-2 col-lg-8 ">
                <div class="exp-cal2-loan">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="fw-600 text-center">Enter your loan amount</p>
                            <div class="exp-cal2-input">
                                <input placeholder="$0" maxlength="10" name="calculator" type="text" value="100" id="num1">
                                <input placeholder="$0" maxlength="10" class="d-none" name="calculator" value="2" type="text" id="num2">
                            </div>
                            <p class="fw-600 mt-2 fs-13">please enter amount $100 to $1000</p>
                        </div>
                        <div class="col-md-2 align-self-center">
                            <div class=exp-cal-icon>
                                <button type="button" id="calculate"><i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <p class="fw-600 text-center exp-cal2-content">You could be saving</p>
                            <div class="ex-calculate-value">
                                <input type="text" name="sum" id="sum" value="$50" readonly> <a href="index.html#">How do we calculate this?</a>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center"> <a href="loan-step.html" class="btn-first btn-submit-fill ">Find my Rates</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Loan Calculator -->

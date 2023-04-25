<!-- Start About -->
<!-- start aboutus-2 -->
<section class="section-padding lw-about-section p-relative">
    <div class="side-lines right-side"> <span class="box"></span>
        <span class="text">Loanly</span>
        <span class="line"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ln-about-left-side p-relative full-height">
                    <div class="first-img full-height">
                        @if (isset($aboutUs->image_2))
                        <img src="{{$aboutUs->image_2}}" class="image-fit" alt="img">
                        @else
                        <img src="/client/assets/images/homepage/about2.jpg" class="image-fit" alt="img">
                        @endif
                    </div>
                    <div class="second-img">
                        @if (isset($aboutUs->image_1))
                        <img src="{{$aboutUs->image_1}}" class="image-fit" alt="img">
                        @else
                        <img src="/client/assets/images/homepage/about1.jpg" class="image-fit" alt="img">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="lw-about-section-right">
                    <h3 class="p-relative lw-about-right-heading">{{$aboutUs->title ?? ''}}</h3>
                    <div class="lw-about-right-content">
                        <p>{{$aboutUs->content ?? ''}}</p>
                        <div class="lw-about-right-list">
                            <ul>
                                @if (isset($aboutUs->commit_1))
                                <li> <i class="fas fa-check"></i>
                                    {{$aboutUs->commit_1}}</li>
                                @endif
                                @if (isset($aboutUs->commit_2))
                                <li> <i class="fas fa-check"></i>
                                    {{$aboutUs->commit_2}}</li>
                                @endif
                                @if (isset($aboutUs->commit_3))
                                <li> <i class="fas fa-check"></i>
                                    {{$aboutUs->commit_3}}</li>
                                @endif
                                @if (isset($aboutUs->commit_4))
                                <li> <i class="fas fa-check"></i>
                                    {{$aboutUs->commit_4}}</li>
                                @endif
                            </ul>
                        </div>
{{--                        <div class="lw-about-right-author">--}}
{{--                            <div class="lw-about-signature">--}}
{{--                                <h5>Hamza Shatela</h5>--}}
{{--                                <p>Founder of LOANLY</p>--}}
{{--                            </div>--}}
{{--                            <div class="lw-about-sign-image">--}}
{{--                                <img src="/client/assets/images/signature.png" alt="sign">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End aboutus-2 -->

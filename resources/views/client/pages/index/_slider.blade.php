<!-- Start Slider -->
<div class="slider parallax overlay-bg" id="banner-animation">
    <div class="side-lines"> <span class="box"></span>
        <span class="text">Loanly</span>
        <span class="line"></span>
    </div>
    <div class="transform-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-slider">
                        @foreach ($sliders as $slider)
                        <div class="slide-item">
                            <div class="banner-text">
                                <h1 class="text-custom-white fw-700">{{$slider->title}}</h1>
                                <p class="text-custom-white">{{$slider->content}}</p> <a href="{{$slider->link}}" class="btn-first btn-submit-fill">
                                    Explore
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider -->

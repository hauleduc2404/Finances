<!-- Start Intro -->
<section class="genmed-intro">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($intros as $intro)
                <div class="col-lg-3  col-sm-6">
                    <div class="intro-box bg-dark-brown mb-md-20" data-wow-duration="1s">
                        <div class="intro-wrapper text-center"> <i class="flaticon-flag"></i>
                            <h6 class="text-custom-white fw-700">{{$intro->title ?? ''}}</h6>
                            <p class="text-custom-white">{{$intro->content}}</p>
                            @if($intro->link && strlen($intro->link) > 0)
                                <a href="{{$intro->link}}" class="btn-first btn-submit fw-600">Xem thêm</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Intro -->

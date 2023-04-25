<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm {{$service->title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.ourteam.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>avatar</label>
                    <input type="text" name="avatar" class="form-control" required placeholder="Nhập đường dẫn ảnh">
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="fullname" class="form-control" required placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Vị trí</label>
                    <input type="text" name="position" class="form-control" required placeholder="Nhập vị trí">
                </div>
                <div class="form-group">
                    <label>Youtube</label>
                    <input type="text" name="youtube_url" class="form-control" placeholder="Nhập Youtube url">
                </div>
                <div class="form-group">
                    <label>LinkedIn</label>
                    <input type="text" name="linkedin_url" class="form-control" placeholder="Nhập LinkedIn url">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebook_url" class="form-control" placeholder="Nhập Facebook url">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="twitter_url" class="form-control" placeholder="Nhập Twitter url">
                </div>
                <input type="hidden" name="landing_service_id" value="{{$service->id}}" class="form-control" required placeholder="Nhập tiêu đề">
            </div>
            <!-- /.card-body -->
            @if($ourTeams->count() >= config('landing.limit.ourteam'))
                <div class="card-footer">
                    <button type="button" disabled class="btn btn-primary">Đã đạt số lượng {{$service->title}} tối đa</button>
                </div>
            @else
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            @endif
        </form>
    </div>
</div>

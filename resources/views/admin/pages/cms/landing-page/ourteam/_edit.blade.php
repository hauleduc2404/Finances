<div class="col-sm-12 col-md-4">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.ourteam.update', ['id' => $detail->id])}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" value="{{$detail->id}}" disabled readonly class="form-control" required placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input type="text" name="avatar" value="{{$detail->avatar}}" class="form-control" required placeholder="Nhập đường dẫn ảnh đại diện">
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="fullname" value="{{$detail->fullname}}" class="form-control" required placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Vị trí</label>
                    <input type="text" name="position" value="{{$detail->position}}" class="form-control" required placeholder="Nhập vị trí">
                </div>
                <div class="form-group">
                    <label>Youtube</label>
                    <input type="text" name="youtube_url" value="{{$detail->youtube_url}}" class="form-control" placeholder="Nhập Youtube url">
                </div>
                <div class="form-group">
                    <label>LinkedIn</label>
                    <input type="text" name="linkedin_url" value="{{$detail->linkedin_url}}" class="form-control" placeholder="Nhập Facebook url">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebook_url" value="{{$detail->facebook_url}}" class="form-control" placeholder="Nhập Facebook url">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="twitter_url" value="{{$detail->twitter_url}}" class="form-control" placeholder="Nhập Twitter url">
                </div>
                <input type="hidden" name="landing_service_id" value="{{$detail->landing_service_id}}" class="form-control" required placeholder="Nhập tiêu đề">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

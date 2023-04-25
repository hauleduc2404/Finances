<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm {{$service->title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.practive-area.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="content" class="form-control" required placeholder="Nhập nội dung">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="description" class="form-control" required placeholder="Nhập mô tả">
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="text" name="image" class="form-control" required placeholder="Nhập đường dẫn ảnh">
                </div>
                <input type="hidden" name="landing_service_id" value="{{$service->id}}" class="form-control" required placeholder="Nhập tiêu đề">
            </div>
            <!-- /.card-body -->
            @if($practiveAreas->count() >= config('landing.limit.practive-area'))
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

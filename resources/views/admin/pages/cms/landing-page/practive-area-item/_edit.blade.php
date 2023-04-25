<div class="col-sm-12 col-md-4">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.practive-area-item.update', ['id' => $detail->id])}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" value="{{$detail->id}}" disabled readonly class="form-control" required placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" value="{{$detail->icon}}" class="form-control" required placeholder="Nhập đường dẫn ảnh">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" value="{{$detail->title}}" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="content" value="{{$detail->content}}" class="form-control" required placeholder="Nhập nội dung">
                </div>
                <input type="hidden" name="landing_practive_area_id" value="{{$detail->landing_practive_area_id}}" class="form-control" required placeholder="">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

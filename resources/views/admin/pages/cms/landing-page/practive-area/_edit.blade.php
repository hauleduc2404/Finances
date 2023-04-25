<div class="col-sm-12 col-md-4">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.practive-area.update', ['id' => $detail->id])}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" value="{{$detail->id}}" disabled readonly class="form-control" required placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" value="{{$detail->title}}" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="content" value="{{$detail->content}}" class="form-control" required placeholder="Nhập nội dung">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="description" value="{{$detail->description}}" class="form-control" required placeholder="Nhập mô tả">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="image" value="{{$detail->image}}" class="form-control" required placeholder="Nhập đường dẫn ảnh">
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

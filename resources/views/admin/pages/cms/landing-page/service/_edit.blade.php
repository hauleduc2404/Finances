<div class="col-sm-12 col-md-4">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.service.update', ['id' => $detail->id])}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" value="{{$detail->id}}" disabled readonly class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" value="{{$detail->title}}" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="description" value="{{$detail->description}}" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Thứ tự hiển thị</label>
                    <input type="number" name="display_order" value="{{$detail->display_order}}" class="form-control" required placeholder="Nhập thứ tự hiển thị">
                </div>
                <div class="form-group">
                    <label>Loại dịch vụ</label>
                    <select name="service_type" class="form-control" value='{{$detail->service_type}}'>
                    @foreach($serviceTypes as $key => $value)
                        @if($detail->service_type === $value)
                        <option value='{{$value}}' selected='true'>{{$key}}</option>
                        @else
                        <option value='{{$value}}'>{{$key}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm dịch vụ</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.service.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="description" class="form-control" required placeholder="Nhập nội dung">
                </div>
                <div class="form-group">
                    <label>Thứ tự hiển thị</label>
                    <input type="number" name="display_order" class="form-control" required placeholder="Nhập thứ tự hiển thị">
                </div>
                <div class="form-group">
                    <label>Loại dịch vụ</label>
                    <select name="service_type" class="form-control">
                    @foreach($serviceTypes as $key => $value)
                        <option value='{{$value}}'>{{$key}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            @if($services->count() >= config('landing.limit.services'))
                <div class="card-footer">
                    <button type="button" disabled class="btn btn-primary">Đã đạt số lượng tối đa</button>
                </div>
            @else
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            @endif
        </form>
    </div>
</div>

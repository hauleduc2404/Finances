<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Slide</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.slider.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="content" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Đường dẫn (Link)</label>
                    <input type="text" name="link" class="form-control" required placeholder="Nhập tiêu đề">
                </div>

            </div>
            <!-- /.card-body -->
            <!-- @if($sliders->count() >= config('landing.limit.intro'))
                <div class="card-footer">
                    <button type="button" disabled class="btn btn-primary">Đã đạt số lượng intro tối đa</button>
                </div>
            @else
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            @endif -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
        </form>
    </div>
</div>

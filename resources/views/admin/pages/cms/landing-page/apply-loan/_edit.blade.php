<div class="col-sm-12 col-md-4">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.apply-loan.update', ['id' => $detail->id])}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" value="{{$detail->id}}" disabled readonly class="form-control" required placeholder="">
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="fullname" value="{{$detail->fullname}}" class="form-control" required placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$detail->email}}" class="form-control" required placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" value="{{$detail->phone}}" class="form-control" required placeholder="Nhập số điện thoại">
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

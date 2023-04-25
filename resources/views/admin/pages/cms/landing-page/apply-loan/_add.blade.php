<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Apply Loan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.apply-loan.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="fullname" class="form-control" required placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" class="form-control" required placeholder="Nhập số điện">
                </div>

            </div>
            <!-- /.card-body -->
            @if($applyLoans->count() >= config('landing.limit.apply-loan'))
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

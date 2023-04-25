<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Loan Adviser</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.loan-adviser.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" class="form-control" required placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="description" class="form-control" required placeholder="Nhập mô tả">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="content" class="form-control" required placeholder="Nhập nội dung">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" name="address" class="form-control" required placeholder="Nhập địa chỉ">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" class="form-control" required placeholder="Nhập số điện thoại">
                </div>
            </div>
            <!-- /.card-body -->
            @if($loanAdvisers->count() >= config('landing.limit.adviser'))
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

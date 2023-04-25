<div class="col-sm-12 col-md-4">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.loan-calculator.update', ['id' => $detail->id])}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" value="{{$detail->id}}" disabled readonly class="form-control" required placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Lãi suất</label>
                    <input type="text" name="interest_rate" value="{{$detail->interest_rate}}" class="form-control" required placeholder="Nhập lãi suất">
                </div>
                <div class="form-group">
                    <label>Ngày bắt đầu hiệu lực</label>
                    <input type="date" name="start_date" value="{{$detail->start_date->format('mm/dd/yyyy')}}" class="form-control" required placeholder="">
                </div>
                <div class="form-group">
                    <label>Ngày hết hiệu lực</label>
                    <input type="date" name="end_date" value="{{$detail->end_date->format('mm/dd/yyyy')}}" class="form-control" required placeholder="">
                </div>
                <input type="hidden" name="landing_service_id" value="{{$detail->landing_service_id}}" class="form-control" required placeholder="">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

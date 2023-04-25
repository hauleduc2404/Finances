<div class="col-sm-12 col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm {{$service->title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('dashboard.cms.landing.loan-calculator.add')}}">
            <div class="card-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Lãi suất</label>
                    <input type="number" name="interest_rate" class="form-control" required placeholder="Nhập lãi suất">
                </div>
                <div class="form-group">
                    <label>Ngày bắt đầu hiệu lực</label>
                    <input type="date" name="start_date" class="form-control" required placeholder="">
                </div>
                <div class="form-group">
                    <label>Ngày hết hiệu lực</label>
                    <input type="date" name="end_date" class="form-control" required placeholder="">
                </div>
                <input type="hidden" name="landing_service_id" value="{{$service->id}}" class="form-control" required placeholder="Nhập tiêu đề">
            </div>
            <!-- /.card-body -->
            @if($loanCalculators->count() >= config('landing.limit.loan-calculator'))
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

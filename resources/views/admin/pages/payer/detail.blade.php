@extends('admin.layouts.master')

@push('styles')

@endpush

@push('scripts')
  <script>
    function removeReadOnlyInput() {
      $(".money-paid-by-period").removeAttr('readonly')
      $(".interest-money-by-period").removeAttr('readonly')
    }

    $('.period-selector').on('change', function () {
      console.log($(this).val());
      const currentValue = $(this).val();
      $(".money-paid-by-period").attr('readonly', true)
      $(".interest-money-by-period").attr('readonly', true)
      //interest-money-by-period
      // money-paid-by-period
      switch (currentValue) {
        case '0':
          break;
        case '1':
          break;
        case '2':

          break;
        default:
          break;
      }
    });
  </script>
@endpush
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết hồ sơ</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tạo phiếu trả nợ</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('dashboard.payer.create-bill')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="loanId" value="{{$loan->id}}">
                <div class="card-body">
                  <!-- /.row -->
                  <h5>Thông tin cơ bản</h5>
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" value="{{$user->kycIdentity ? $user->kycIdentity->full_name : 'Chưa cung cấp'}}" readonly>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>CMND/CCCD</label>
                        <input type="text" class="form-control" value="{{$user->kycIdentity ? $user->kycIdentity->identify_number : 'Chưa cung cấp'}}" readonly>
                      </div>
                    </div>
                    <div class="col-4">
                      <label>Số điện thoại</label>
                      <input type="text" class="form-control" value="{{$user->phone}}" readonly>
                    </div>
                  </div>
                  <h5>Thông tin trả nợ</h5>
                  <div class="row">
                    <div class="col-3">
                      <div class="form-group">
                        <label>Chọn kỳ trả nợ</label>
                        <select name="periodType" class="form-control period-selector" required disabled readonly="">
                          <option>Lựa chọn kỳ hạn trả nợ</option>
{{--                          <option value="0">Trả một phần của kỳ ({{$nextPeriodLabel}})</option>--}}
                          <option value="1" selected>Kỳ tiếp theo ({{$nextPeriodLabel}})</option>
                          <option value="2">Trả tất cả</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-3 d-none">
                      <div class="form-group">
                        <label>Tiền gốc</label>
                        <input type="text" class="form-control money-paid-by-period" value="" readonly>
                      </div>
                    </div>
                    <div class="col-3 d-none">
                      <div class="form-group">
                        <label>Tiền lãi</label>
                        <input type="text" class="form-control interest-money-by-period" value="" readonly>
                      </div>
                    </div>
                    <div class="col-3 d-none">
                      <div class="form-group">
                        <label>Tổng tiền gốc + lãi</label>
                        <input type="text" class="form-control total-money-pay" value="" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  @if($loan->is_activate == 0 || $loan->is_activate == false)
                    <div class="alert alert-warning" role="alert">
                      Vui lòng kích hoạt khoản vay để tạo phiếu trả nợ
                    </div>
                  @else
                    <button type="submit" class="btn btn-success">Tạo phiếu</button>
                  @endif
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Chi tiết gói vay</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- /.row -->
                <div class="form-group">
                  <label>Tổng tiền vay</label>
                  <input type="text" class="form-control" value="{{vnd_format($loan->loan_money)}}" readonly>
                </div>
                <div class="form-group">
                  <label>Lãi suất</label>
                  <div class="input-group mb-3">
                    <input type="number" min="0" value="{{$loan->interest_rate * 100}}" class="form-control" readonly>
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Thời gian vay</label>
                  <input type="text" class="form-control" value="{{$loan->duration_month}} tháng" readonly>
                </div>
                <div class="form-group">
                  <label>Trạng thái: </label>
                  @if($loan->is_activate)
                    <span class="badge badge-success">Đã kích hoạt</span>
                  @else
                    <span class="badge badge-danger">Chưa kích hoạt</span>
                  @endif
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{route('dashboard.loan.detail', ['loanId' => $loan->id])}}" type="submit" class="btn btn-primary">Điều chỉnh gói vay</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lịch sử trả nợ theo kỳ hạn</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- /.row -->
                <div class="table-responsive p-0" style="height: 600px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                      <th>STT</th>
                      <th>Kỳ trả nợ</th>
                      <th>Số tiền gốc còn lại</th>
                      <th>Tiền gốc</th>
                      <th>Tiền lãi</th>
                      <th>Tổng tiền đã trả (gốc + lãi)</th>
                      <th>Mã GD</th>
                      <th>Thời gian ghi nhận</th>
{{--                      <th>Tuỳ chọn</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($historiesPaid as $historyPaid)
                      <tr>
                        <td>{{$historyPaid->index}}</td>
                        <td>{{$historyPaid->periodLabel}}</td>
                        <td>{{$historyPaid->loanMoneyRemainLabel}}</td>
                        <td>{{$historyPaid->loanMoneyPaidLabel}}</td>
                        <td>{{$historyPaid->interestMoneyPaidLabel}}</td>
                        <td>{{$historyPaid->loanMoneyAndInterestMoneyPaidLabel}}</td>
                        <td>{{$historyPaid->transactionId}}</td>
                        <td>{{$historyPaid->commitTime}}</td>
{{--                        @if(!$loop->first)--}}
{{--                          <td>{{'HI'}}</td>--}}
{{--                        @endif--}}
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>

@endsection

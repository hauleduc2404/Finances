@extends('admin.layouts.master')

@push('styles')
@endpush

@push('scripts')
  <script>
    $(function () {
      function convertMoneyHumanDisplay(rawMoneyDisplay) {
        if (typeof rawMoneyDisplay === "string") {
          rawMoneyDisplay = parseInt(rawMoneyDisplay);
        }
        if (isNaN(rawMoneyDisplay)) {
          return '';
        }
        return rawMoneyDisplay.toLocaleString('en-US').replaceAll(',', '.') + 'đ';
      }

      const defaultMoneyRaw = $('.money-raw').val()

      const humanMoneyDisplay = convertMoneyHumanDisplay(defaultMoneyRaw)
      $('.money-human').val(humanMoneyDisplay);

      $('.money-raw').on('input', function () {
        const currentRawMoneyValue = $(this).val()
        $('.money-human').val(convertMoneyHumanDisplay(currentRawMoneyValue))
      });
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
            <h1>Chi tiết khoản vay</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if(isset($isLoanDone) && $isLoanDone)
          <div class="alert alert-warning" role="alert">
            Khoản vay này đã được hoàn thành! Không thể thay đổi tuỳ chọn
          </div>
        @elseif(isset($isLoanProcessing) && $isLoanProcessing)
          <div class="alert alert-warning" role="alert">
            Khoản vay này đã có phát sinh ít nhất 1 chu kỳ, không thể thay đổi một số tuỳ chọn
          </div>
        @endif
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Chi tiết khoản vay</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('dashboard.loan.detail.update')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="loan_id" value="{{$loan->id}}">
                <div class="card-body">
                  <!-- /.row -->
                  <h5>Thông tin cơ bản</h5>
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" value="{{$loan->user->kycIdentity->full_name ?? ''}}"
                               readonly="">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>CMND/CCCD</label>
                        <input type="text" class="form-control"
                               value="{{$loan->user->kycIdentity->identify_number ?? ''}}" readonly="">
                      </div>
                    </div>
                    <div class="col-4">
                      <label>Số điện thoại</label>
                      <input type="text" class="form-control" value="{{$loan->user->phone}}" readonly="">
                    </div>
                  </div>
                  <h5 class="pt-3">Thông tin khoản vay</h5>
                  <div class="row">
                    <div class="col-3">
                      <div class="form-group">
                        <label>Số tiền vay (Gói vay)</label>
                        <input type="number" min="100000" name="loan_money" value="{{$loan->loan_money}}"
                               class="form-control money-raw" @if($isLoanDone || $isLoanProcessing) readonly @endif>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label>Số tiền vay (Gói vay)</label>
                        <input type="text" value="" readonly class="form-control money-human">
                      </div>
                    </div>
                    <div class="col-3">
                      <label>Lãi suất %/ năm</label>
                      <div class="input-group mb-3">
                        <input type="number" min="0" @if($isLoanDone || $isLoanProcessing) readonly @endif name="interest_rate" step="any" value="{{($loan->interest_rate * 100)}}"
                               class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label>Thời gian vay</label>
                        <select class="custom-select" name="duration_time" @if($isLoanDone || $isLoanProcessing) disabled @endif>
                          @foreach($rangeLoan as $key => $value)
                            <option value="{{$value}}" {{$loan->duration_month == $value ? 'selected': ''}}>{{$value}} tháng</option>
                          @endforeach
                          @if(!in_array($loan->duration_month, $rangeLoan))
                            <option value="{{$loan->duration_month}}" selected>{{$loan->duration_month}} tháng</option>
                          @endif
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label>Thông báo khi rút tiền</label>
                        <input type="text" name="message_withdraw" value="{{$loan->message_withdraw}}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <h5 class="pt-3">Trạng thái khoản vay</h5>
                  <div class="row">
                    <div class="col-3">
                      <div class="form-group">
                        <label>Trạng thái hiện tại:</label>
                        <select class="custom-select" name="is_activate">
                          <option value="0" {{$loan->is_activate == 0 ? 'selected': ''}}>Huỷ kích hoạt</option>
                          <option value="1" {{$loan->is_activate == 1 ? 'selected': ''}}>Đang kích hoạt</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                @if($isLoanDone)
                  <div class="card-footer">
                    <input type="hidden" name="only_submit" value="1">
                    <input type="hidden" name="duration_time" value="zzz">
                    <button type="submit" class="btn btn-success">Thay đổi khoản vay</button>
                  </div>
                @elseif(!$isLoanDone && $isLoanProcessing)
                  <div class="card-footer">
                    <input type="hidden" name="only_submit" value="1">
                    <input type="hidden" name="duration_time" value="zzz">
                    <button type="submit" class="btn btn-success">Thay đổi khoản vay</button>
                  </div>
                @else
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">Thay đổi khoản vay</button>
                  </div>
                @endif
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>

@endsection

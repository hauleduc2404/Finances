@extends('admin.layouts.master')

@push('styles')
@endpush

@push('scripts')
  <script>
    $(function() {
      function convertMoney(rawMoney) {
        rawMoney = parseInt(rawMoney.replaceAll('.', ''))
        if (isNaN(rawMoney)) {
          return ''
        }

        return rawMoney.toLocaleString('en-US').replaceAll(',', '.');
      }

      $('.human-money-text').each(function(){
        const rawMoney = $(this).val()
        $(this).val(convertMoney(rawMoney))
      })

      $('.human-money-text').on('input', function(){
        let currentValue = $(this).val();
        $(this).val(convertMoney(currentValue))
      })

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
            <h1>Thiết lập</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Thiết lập chung</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="setting" action="{{route('dashboard.setting.change')}}" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Chu kỳ trả theo kỳ hạn</label>
                      <input type="text" name="loan_month" value="{{str_replace(' ', '', $setting->loan_month)}}" required
                             class="form-control" placeholder="VD: 3,6,9,12">
                      <small class="text-danger"><b>Lưu ý!</b> Mỗi chu kỳ cách nhau bởi dấu "," VD: 3,6,9,12</small>
                    </div>
                    <div class="form-group col-6">
                      <label>Link CSKH/Hỗ trợ</label>
                      <input type="text" name="support_link" value="{{$setting->support_link}}" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label>Lãi suất mặc định %/Năm</label>
                      <div class="input-group mb-3">
                        <input type="number" min="0" step="any" name="interest_rate" value="{{$setting->interest_rate * 100}}"
                               class="form-control" required>
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-3">
                      <label>Mức vay tối thiểu</label>
                      <input type="text" name="min_loan" value="{{$setting->min_loan}}" required class="form-control human-money-text">
                    </div>
                    <div class="form-group col-3">
                      <label>Mức vay tối đa</label>
                      <input type="text" name="max_loan" value="{{$setting->max_loan}}" required class="form-control human-money-text">
                    </div>
                    <div class="form-group col-3">
                      <label>Chênh lệch mỗi lần điều chỉnh</label>
                      <input type="text" name="limit_per_switch_loan" value="{{$setting->limit_per_switch_loan}}" required class="form-control human-money-text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-2">
                      <label>Mật khẩu rút tiền</label>
                      <input type="text" name="withdraw_password" value="{{$setting->withdraw_password}}" required class="form-control">
                    </div>
                    <div class="form-group col-10">
                      <label>Thông báo rút tiền mặc định</label>
                      <input type="text" name="default_message_withdraw" value="{{$setting->default_message_withdraw}}" required class="form-control">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button form="setting" type="submit" class="btn btn-success">Cập nhật</button>
              </div>
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

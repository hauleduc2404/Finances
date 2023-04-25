@extends('admin.layouts.master')

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@push('scripts')
  <!-- DataTables  & Plugins -->
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/adminlte/plugins/jszip/jszip.min.js"></script>
  <script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
    $(function () {
      // Initialize datatable
      $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        buttons: ["csv", "excel", "pdf", "print"],
        ajax: "{{ route('dashboard.loan.list') }}",
        searchDelay: 800,
        columns: [
          {data: 'user.phone', name: 'phone'},
          {data: 'full_name', name: 'full_name', orderable: true, searchable: true},
          {data: 'loan_money_format', name: 'loan_money_format', orderable: true, searchable: true},
          {data: 'interest_rate', name: 'interest_rate', orderable: true, searchable: true},
          {data: 'duration_month', name: 'duration_month', orderable: true, searchable: true},
          {data: 'paid_month', name: 'paid_month', orderable: true, searchable: true},
          {data: 'is_activate', name: 'is_activate', orderable: true, searchable: true},
          {data: 'is_kyc_verified', name: 'is_kyc_verified', orderable: true, searchable: true},
          {data: 'time_verify', name: 'time_verify', orderable: true, searchable: true},
          {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        columnDefs: [
                    {
            targets: 3,
            render: function (data, type, row) {
              return data+' %/Tháng'
            }
          },
          {
            targets: 4,
            render: function (data, type, row) {
              return data+' tháng'
            }
          },
          {
            "render": function (data, type, row) {
              if (data == null) {
                return `<span class="badge bg-warning">Chưa có thông tin</span>`;
              }
              if (data != null && data == 1) {
                return `<span class="badge bg-success">Đã duyệt</span>`;
              }

              return `<span class="badge bg-danger">Chưa duyệt</span>`;

            },
            "targets": [6]
          },
          // { "visible": false,  "targets": [ 1 ] }
        ]
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
            <h1>Danh sách vay</h1>
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
                <h3 class="card-title">Danh sách các yêu cầu vay</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Số điện thoại</th>
                    <th>Họ và tên</th>
                    <th>Số tiền vay</th>
                    <th>Lãi suất</th>
                    <th>Thời gian vay</th>
                    <th>Số tháng đã trả</th>
                    <th>Trạng thái vay</th>
                    <th>Trạng thái hồ sơ</th>
                    <th>Ngày bắt đầu (ngày duyệt)</th>
                    <th>Tuỳ chọn</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
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

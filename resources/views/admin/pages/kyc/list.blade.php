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
        ajax: "{{ route('dashboard.kyc.list') }}",
        searchDelay: 800,
        columns: [
          {data: 'id', name: 'id'},
          {data: 'phone', name: 'phone'},
          {data: 'kyc_bank', name: 'kyc_bank', orderable: false, searchable: false},
          {data: 'kyc_signature', name: 'kyc_signature', orderable: false, searchable: false},
          {data: 'kyc_identity', name: 'kyc_identity', orderable: false, searchable: false},
          {data: 'kyc_info', name: 'kyc_info', orderable: false, searchable: false},
          {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        columnDefs: [
          {
            "render": function (data, type, row) {
              if (data == null) {
                return `<span class="badge bg-warning">Chưa đăng ký</span>`;
              }
              if (data.is_verified != null && data.is_verified === 1) {
                return `<span class="badge bg-success">Đã duyệt</span>`;
              }
              return `<span class="badge bg-danger">Chưa duyệt</span>`;

            },
            "targets": [2, 3, 4, 5]
          },
          // { "visible": false,  "targets": [ 1 ] }
        ]
      });

      // Remove overlay & clear old states
      function removeOverlayAndClearData() {
        $('#overlay-modal-xl').remove();
        $(".modal-body").empty()
      }

      function KYCInfoTemplate() {
        return `
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Thông tin liên quan</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label>Trình độ học vấn</label>
                        <input type="text" class="form-control" value="{trinh_do_hoc_van}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Thu thập cá nhân</label>
                        <input type="text" class="form-control" value="{thu_nhap_ca_nhan}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Mục đích vay</label>
                        <input type="text" class="form-control" value="{muc_dich_vay}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Đã có nhà cửa</label>
                        <input type="text" class="form-control" value="{co_nha_cua_khong}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Đã có xe cộ</label>
                        <input type="text" class="form-control" value="{co_xe_co_khong}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Tiền lương hằng tháng</label>
                        <input type="text" class="form-control" value="{tien_luong_hang_thang}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" value="{dia_chi_chi_tiet}" readonly>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label>Họ tên gia đình 1</label>
                        <input type="text" class="form-control" value="{gia_dinh_ho_ten}" readonly>
                      </div>
                      <div class="form-group">
                        <label>SĐT gia đình 1</label>
                        <input type="text" class="form-control" value="{gia_dinh_sdt}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Mối quan hệ</label>
                        <input type="text" class="form-control" value="{gia_dinh_moi_quan_he}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Họ tên gia đình 2</label>
                        <input type="text" class="form-control" value="{gia_dinh_2_ho_ten}" readonly>
                      </div>
                      <div class="form-group">
                        <label>SĐT gia đình 2</label>
                        <input type="text" class="form-control" value="{gia_dinh_2_sdt}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Mối quan hệ</label>
                        <input type="text" class="form-control" value="{gia_dinh_2_moi_quan_he}" readonly>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        `
      }

      function KYCIdentityTemplate() {
        return `
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Thông tin cá nhân</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Họ và tên</label>
                  <input type="text" class="form-control" value="{full_name}" readonly>
                </div>
                <div class="form-group">
                  <label>CMND/CCCD</label>
                  <input type="text" class="form-control" value="{identify_number}" readonly>
                </div>
                <div class="form-group">
                  <label>Ảnh mặt trước CMND/CCCD</label>
                  <div><img src="{identify_front_side_path}" width="100%" /></div>
                </div>
                <div class="form-group">
                  <label>Ảnh mặt sau CMND/CCCD</label>
                  <div><img src="{identify_back_side_path}" width="100%"/></div>
                </div>
                <div class="form-group">
                  <label>Ảnh chân dung & CMND/CCCD</label>
                  <div><img src="{identify_portrait_path}" width="100%" /></div>
                </div>
              </div>

            </div>
          </div>
        `
      }

      function KYCBankTemplate() {
        return `
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin ngân hàng</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Số tài khoản</label>
                <input type="text" class="form-control" value="{card_number}" readonly>
              </div>
              <div class="form-group">
                <label>ID chủ thẻ</label>
                <input type="text" class="form-control" value="{card_identity_owner}" readonly>
              </div>
              <div class="form-group">
                <label>Tên chủ thẻ</label>
                <input type="text" class="form-control" value="{card_placeholder_name}" readonly>
              </div>
              <div class="form-group">
                <label>Tên ngân hàng</label>
                <input type="text" class="form-control" value="{bank_vendor}" readonly>
              </div>
            </div>
          </div>
        </div>
        `
      }

      function KYCSignatureTemplate() {
        return `
          <div class="col-sm-12 col-md-12 cold-lg-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Chữ ký</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group text-center">
                  <svg>{signature}</svg>
                </div>
              </div>
            </div>
          </div>
        `
      }

      // Verify KYC
      $(document).on("click", ".verify-kyc", function () {
        $(this).attr('disabled', true)
        let url = ''
        const type = $(this).data('type');
        const userId = $(this).data('userid');

        // console.log('type', type)
        // console.log('user_id', userId)
        switch (type) {
          case 1: //Signature
            url = '{{route('dashboard.kyc.verify.signature')}}'
            break;
          case 2: //Bank
            url = '{{route('dashboard.kyc.verify.bank')}}'
            break;
          case 3: //Identity
            url = '{{route('dashboard.kyc.verify.identity')}}'
            break;
          case 4: //Info
            url = '{{route('dashboard.kyc.verify.info')}}'
            break;
          case 5: //all
            url = '{{route('dashboard.kyc.verify.all')}}'
            break;
          default:
            console.log('KYC Type is not valid')
            return;
        }
        const request = $.ajax({
          url: url,
          type: "POST",
          data: {
            userId: userId,
            _token: '{{csrf_token()}}'
          },
          dataType: "JSON"
        }).done(function() {
          location.reload();
        });

      });

      $('#modal-xl').on('hidden.bs.modal', function () {
        removeOverlayAndClearData()
      })

      function fetchDetailUserKyc(userId) {
        $('.modal-content').append(
          `<div class="overlay" id="overlay-modal-xl">
            <i class="fas fa-2x fa-sync-alt fa-spin"></i>
           </div>`
        )

        var request = $.ajax({
          url: "{{route('dashboard.kyc.details')}}",
          type: "GET",
          data: {userId: userId},
          dataType: "JSON"
        });

        // On Ajax success
        request.done(function (data) {
          removeOverlayAndClearData()
          $('.modal-title').html('Thông tin định danh KYC')

          let template = ``
          if (data.kycInfo != null) {
            let infoTemplate = KYCInfoTemplate()
            infoTemplate = infoTemplate.replace('{trinh_do_hoc_van}', data.kycInfo.trinh_do_hoc_van)
            infoTemplate = infoTemplate.replace('{thu_nhap_ca_nhan}', data.kycInfo.thu_nhap_ca_nhan)
            infoTemplate = infoTemplate.replace('{muc_dich_vay}', data.kycInfo.muc_dich_vay)
            infoTemplate = infoTemplate.replace('{co_nha_cua_khong}', data.kycInfo.co_nha_cua_khong)
            infoTemplate = infoTemplate.replace('{co_xe_co_khong}', data.kycInfo.co_xe_co_khong)
            infoTemplate = infoTemplate.replace('{tien_luong_hang_thang}', data.kycInfo.tien_luong_hang_thang)
            infoTemplate = infoTemplate.replace('{dia_chi_chi_tiet}', data.kycInfo.dia_chi_chi_tiet)
            infoTemplate = infoTemplate.replace('{gia_dinh_ho_ten}', data.kycInfo.gia_dinh_ho_ten)
            infoTemplate = infoTemplate.replace('{gia_dinh_sdt}', data.kycInfo.gia_dinh_sdt)
            infoTemplate = infoTemplate.replace('{gia_dinh_moi_quan_he}', data.kycInfo.gia_dinh_moi_quan_he)
            infoTemplate = infoTemplate.replace('{gia_dinh_2_ho_ten}', data.kycInfo.gia_dinh_2_ho_ten)
            infoTemplate = infoTemplate.replace('{gia_dinh_2_sdt}', data.kycInfo.gia_dinh_2_sdt)
            infoTemplate = infoTemplate.replace('{gia_dinh_2_moi_quan_he}', data.kycInfo.gia_dinh_2_moi_quan_he)
            template += infoTemplate
          }
          template += `<div class="row">`
          if (data.kycIdentity != null) {
            let identityTemplate = KYCIdentityTemplate()
            identityTemplate = identityTemplate.replace('{full_name}', data.kycIdentity.full_name)
            identityTemplate = identityTemplate.replace('{identify_number}', data.kycIdentity.identify_number)
            identityTemplate = identityTemplate.replace('{identify_front_side_path}', data.kycIdentity.identify_front_side_path)
            identityTemplate = identityTemplate.replace('{identify_back_side_path}', data.kycIdentity.identify_back_side_path)
            identityTemplate = identityTemplate.replace('{identify_portrait_path}', data.kycIdentity.identify_portrait_path)
            template += identityTemplate
          }

          if (data.kycBank != null) {
            let bankTemplate = KYCBankTemplate()
            bankTemplate = bankTemplate.replace('{card_number}', data.kycBank.card_number)
            bankTemplate = bankTemplate.replace('{card_identity_owner}', data.kycBank.card_identity_owner)
            bankTemplate = bankTemplate.replace('{card_placeholder_name}', data.kycBank.card_placeholder_name)
            bankTemplate = bankTemplate.replace('{bank_vendor}', data.kycBank.bank_vendor)
            template += bankTemplate
          }

          if (data.kycSignature != null) {
            let signatureTemplate = KYCSignatureTemplate()
            signatureTemplate = signatureTemplate.replace('{signature}', data.kycSignature.signature)
            signatureTemplate = signatureTemplate.replace('{userId}', data.kycSignature.user_id)
            signatureTemplate = signatureTemplate.replace('{kycType}', '1')
            template += signatureTemplate
          }

          // Append close row tag
          template += `</div>`


          // Invalid for verify
          if (
            data.kycIdentity == null || data.kycBank == null
          ) {
            template += `<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">Tuỳ chọn</div>
                  <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        Chưa đủ thông tin để phê duyệt (KYC Bank & KYC Thông tin cá nhân là bắt buộc)
                    </div>
                  </div>
                </div>
              </div>
            </div>`
          }

          if (data.kycIdentity != null && data.kycBank != null){
            // Verified
            if (data.kycIdentity.is_verified == 1 && data.kycBank.is_verified == 1) {
              template += `<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">Tuỳ chọn</div>
                  <div class="card-body">
                    <div class="alert alert-success" role="alert">
                      Hồ sơ này đã được phê duyệt!
                    </div>
                  </div>
                </div>
              </div>
            </div>`
            }

            // Still not verified
            console.log('Still not verified', )
            if (data.kycIdentity.is_verified != 1 || data.kycBank.is_verified != 1) {
              template += `
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">Tuỳ chọn</div>
                    <div class="card-body">
                      <button class="btn btn-app bg-success verify-kyc" data-type="5" data-userid="${data.id}">
                        <i class="fas fa-check"></i> Duyệt hồ sơ ngay
                      </button>
<!--                      <button class="btn btn-app bg-danger">-->
<!--                        <i class="fas fa-undo"></i> Xoá hồ sơ-->
<!--                      </button>-->
                    </div>
                  </div>
                </div>
              </div>
              `
            }
          }

          // Empty kyc list
          if (data.kycInfo == null && data.kycIdentity == null && data.kycBank == null && data.kycSignature == null) {
            template = `<div class="d-flex justify-content-center">
              <div>Người dùng này chưa cung cấp bất kỳ thông tin cá nhân nào</div>
            </div>`
          }

          $(".modal-body").append(template)
        });

        // On Ajax fail
        request.fail(function (jqXHR, textStatus) {
          removeOverlayAndClearData()
        });
      }

      // On fetch detail KYC event
      $(document).on("click", ".extra-modal-btn", function () {
        const userId = $(this).data('userid');
        fetchDetailUserKyc(userId)
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
            <h1>Danh sách hồ sơ KYC</h1>
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
                <h3 class="card-title">Danh sách hồ sơ cần phê duyệt</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Số điện thoại</th>
                    <th>KYC - Ngân hàng</th>
                    <th>KYC - Chữ ký</th>
                    <th>KYC - Thông tin cá nhân</th>
                    <th>KYC - Thông tin khác</th>
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

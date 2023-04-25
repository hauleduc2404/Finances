@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý Dịch vụ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý Dịch vụ</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách Dịch vụ</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Thứ tự hiển thị</th>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th>Tuỳ chọn</th>
                                        <th>Mở rộng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->display_order}}</td>
                                            <td>{{$service->title}}</td>
                                            <td>{{$service->description}}</td>
                                            <td>
                                                <a href="{{route('dashboard.cms.landing.service.detail', ['id' => $service->id])}}" class="btn badge bg-warning">Chỉnh sửa</a>
                                                <form action="{{route('dashboard.cms.landing.service.remove')}}" method="POST" class="">
                                                    <input type="hidden" name="id" value="{{$service->id}}">
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn badge bg-danger">Xoá</button>
                                                </form>
                                            </td>
                                            <td>
                                                @if($service->service_type === config('constants.service_type.loan_calculator'))
                                                <a href="{{route('dashboard.cms.landing.loan-calculator', ['service_id' => $service->id])}}" class="btn badge bg-info">Dịch vụ</a>
                                                @elseif($service->service_type === config('constants.service_type.our_team'))
                                                <a href="{{route('dashboard.cms.landing.ourteam', ['service_id' => $service->id])}}" class="btn badge bg-info">Dịch vụ</a>
                                                @elseif($service->service_type === config('constants.service_type.practive_area'))
                                                <a href="{{route('dashboard.cms.landing.practive-area', ['service_id' => $service->id])}}" class="btn badge bg-info">Dịch vụ</a>
                                                @elseif($service->service_type === config('constants.service_type.process'))
                                                <a href="{{route('dashboard.cms.landing.process', ['service_id' => $service->id])}}" class="btn badge bg-info">Dịch vụ</a>
                                                @elseif($service->service_type === config('constants.service_type.service_block'))
                                                <a href="{{route('dashboard.cms.landing.service-block', ['service_id' => $service->id])}}" class="btn badge bg-info">Dịch vụ</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    @if($mode && $mode === 'view')
                        @include('admin.pages.cms.landing-page.service._add')
                    @else
                        @include('admin.pages.cms.landing-page.service._edit')
                    @endif
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

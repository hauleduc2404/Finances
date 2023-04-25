@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý Tên website</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý Tên website</li>
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
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            @if (isset($domainName))
                            <!-- form start -->
                            <form method="POST"
                                  action="{{route('dashboard.cms.landing.domain-name.update', ['id' => $domainName->id])}}">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" value="{{$domainName->id}}" disabled readonly
                                               class="form-control" required placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên website</label>
                                        <input type="text" name="name" value="{{$domainName->name}}" class="form-control"
                                               required placeholder="Nhập tên website">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                            @else
                            <form method="POST"
                                  action="{{route('dashboard.cms.landing.domain-name.add')}}">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Tên website</label>
                                        <input type="text" name="name" class="form-control"
                                               required placeholder="Nhập tên website">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

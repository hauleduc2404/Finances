@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý Loan Adviser</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý Loan Adviser</li>
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
                                <h3 class="card-title">Danh sách Loan Adviser</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Nội dung</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Tuỳ chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($loanAdvisers as $loanAdviser)
                                        <tr>
                                            <td>{{$loanAdviser->title}}</td>
                                            <td>{{$loanAdviser->description}}</td>
                                            <td>{{$loanAdviser->content}}</td>
                                            <td>{{$loanAdviser->address}}</td>
                                            <td>{{$loanAdviser->email}}</td>
                                            <td>{{$loanAdviser->phone}}</td>
                                            <td>
                                                <a href="{{route('dashboard.cms.landing.loan-adviser.detail', ['id' => $loanAdviser->id])}}" class="btn badge bg-warning">Chỉnh sửa</a>
                                                <form action="{{route('dashboard.cms.landing.loan-adviser.remove')}}" method="POST" class="">
                                                    <input type="hidden" name="id" value="{{$loanAdviser->id}}">
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn badge bg-danger">Xoá</button>
                                                </form>
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
                        @include('admin.pages.cms.landing-page.loan-adviser._add')
                    @else
                        @include('admin.pages.cms.landing-page.loan-adviser._edit')
                    @endif
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

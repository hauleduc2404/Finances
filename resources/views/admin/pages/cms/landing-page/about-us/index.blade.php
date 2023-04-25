@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý About-Us</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý About-US</li>
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
                            <!-- form start -->
                            <form method="POST"
                                  action="{{route('dashboard.cms.landing.about-us.update', ['id' => $aboutUs->id])}}">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" value="{{$aboutUs->id}}" disabled readonly
                                               class="form-control" required placeholder="Nhập tiêu đề">
                                    </div>
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="title" value="{{$aboutUs->title}}" class="form-control"
                                               required placeholder="Nhập tiêu đề">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea type="text" name="content" class="form-control" required >{{$aboutUs->content}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Thêm ảnh</label>
                                        <input type="text" name="image_1" value="{{$aboutUs->image_1}}" class="form-control"
                                               required placeholder="Nhập đường dẫn ảnh"> </br>
                                        <input type="text" name="image_2" value="{{$aboutUs->image_2}}" class="form-control"
                                               required placeholder="Nhập đường dẫn ảnh">
                                    </div>
                                    <div class="form-group">
                                        <label>Lựa chọn</label>
                                        <input type="text" name="commit_1" value="{{$aboutUs->commit_1}}" class="form-control"
                                            required placeholder="Nhập lựa chọn 1"> </br>
                                        <input type="text" name="commit_2" value="{{$aboutUs->commit_2}}" class="form-control"
                                            required placeholder="Nhập lựa chọn 2"> </br>
                                        <input type="text" name="commit_3" value="{{$aboutUs->commit_3}}" class="form-control"
                                            required placeholder="Nhập lựa chọn 3"> </br>
                                        <input type="text" name="commit_4" value="{{$aboutUs->commit_4}}" class="form-control"
                                            required placeholder="Nhập lựa chọn 4">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

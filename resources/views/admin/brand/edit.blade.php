@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Sửa Thương Hiệu <a href="{{ route('admin.brand.index') }}" type="button" class="btn btn-primary"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
            @if ($errors->any()) <!-- kiểm tra có bất kỳ lỗi nào -->
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Thương Hiệu</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('admin.brand.update',['id' => $brand->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                                <input value="{{ $brand->name }}" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên thương hiệu">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="exampleInputFile" name="image">
                                <img width="100" src="{{ asset($brand->image) }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Website</label>
                                <input value="{{ $brand->website }}" type="text" class="form-control" id="website" name="website" placeholder="Url">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input name="position" type="number" class="form-control" id="exampleInputEmail1" value="{{ $brand->position }}">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="is_active" {{ ($brand->is_active == 1) ? 'checked' : '' }}> Hiển thị
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection





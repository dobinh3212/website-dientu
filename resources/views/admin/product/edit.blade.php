@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Chỉnh Sửa Sản Phẩm <a href="{{ route('admin.product.index') }}" class="btn btn-primary"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>

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
            <form role="form" action="{{ route('admin.product.update',['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-9 col-lg-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thông Tin Sản Phẩm</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh sản phẩm</label>
                                <input type="file" class="" id="image" name="image">
                                <img src="{{ asset($product->image) }}" alt="" width="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm 1</label>
                                <input type="file" id="exampleInputFile" name="image1">
                                <img width="100" src="{{ asset($product->image1) }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm 2</label>
                                <input type="file" id="exampleInputFile" name="image2">
                                <img width="100" src="{{ asset($product->image2) }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm 3</label>
                                <input type="file" id="exampleInputFile" name="image3">
                                <img width="100" src="{{ asset($product->image3) }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm 4</label>
                                <input type="file" id="exampleInputFile" name="image4">
                                <img width="100" src="{{ asset($product->image4) }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Số lượng</label>
                                <input value="{{ $product->stock }}" style="width: 100px" type="number" class="form-control" id="stock" name="stock"  min="1">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Giá gốc (vnđ)</label>
                                        <input value="{{ $product->price }}" type="number" class="form-control" id="price" name="price" min="0">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Giá khuyến mại (vnđ)</label>
                                        <input value="{{ $product->sale }}" type="number" class="form-control" id="sale" name="sale" min="0">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control w-50" name="category_id">
                                    <option value="0">-- chọn Danh Mục --</option>
                                    @foreach($categories as $category)
                                        <option {{ $product->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nhà cung cấp</label>
                                <select class="form-control w-50" name="vendor_id">
                                    <option value="0">-- chọn NCC --</option>
                                    @foreach($vendors as $vendor)
                                        <option {{ $product->vendor_id == $vendor->id ? 'selected' : '' }} value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã hàng (SKU)</label>
                                <input value="{{ $product->sku }}" type="text" class="form-control w-50" id="sku" name="sku" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control w-50" id="position" name="position" value="{{ $product->position }}">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ $product->is_active == 1 ? 'checked' : '' }} type="checkbox" value="1" name="is_active"> <b>Hiển Thị</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ $product->is_hot == 1 ? 'checked' : '' }} type="checkbox" value="1" name="is_hot"> <b>Sản phẩm Hot</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url) tùy chỉnh</label>
                                <input value="{{ $product->url }}" type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="10" >{{ $product->summary }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" >{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <textarea name="meta_title" class="form-control" rows="3" >{{ $product->meta_title }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="5" >{{ $product->meta_description }}</textarea>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor1 = CKEDITOR.replace('summary');
            _ckeditor1.config.height = 200; // thiết lập chiều cao

            var _ckeditor2 = CKEDITOR.replace('description');
            _ckeditor2.config.height = 650; // thiết lập chiều cao
        });
    </script>
@endsection




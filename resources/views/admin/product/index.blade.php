@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-database"></i> Quản Lý Sản Phẩm <a href="{{ route('admin.product.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><a href="http://webdev.local:8888/admin/product">Danh Sách sản phẩm</a></h3>

                        <div class="box-tools pull-right">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="input-group input-group-sm hidden-xs" style="width: 250px;">
                                    <input type="text" name="search" class="form-control pull-right" placeholder="Tìm Kiếm...">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>TT</th>
                                <th width="35%">Tên</th>
                                <th class="text-center">Hình ảnh</th>
                                <th class="text-center">Mã SKU</th>
                                <th class="text-center">Thương Hiệu</th>
                                <th>Số Lượng</th>
                                <th class="text-center">Vị Trí</th>
                                <th class="text-center">Giá Sale</th>
                                <th class="text-center">Giá Gốc</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Hành Động</th>
                            </tr>
                            @foreach($data as $index => $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-center">
                                        @if($item->image)
                                            <img width="100px" height="100px" src="{{ asset($item->image) }}">
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $item->sku }}</td>
                                    <td class="text-center">{{ $item->brand_id }}</td>
                                    <td class="text-center">{{ $item->stock }}</td>
                                    <td class="text-center">{{ $item->position }}</td>
                                    <td class="text-center">{{ $item->sale }}</td>
                                    <td class="text-center">{{ $item->price }}</td>
                                    <td class="text-center">
                                        {!! ($item->is_active == 1) ? '<span class="badge bg-green"> hiển thị </span>' : '<span class="badge bg-red">ẩn</span>'  !!}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.product.edit', ['id' => $item->id]) }}" class="btn btn-primary">
                                            <i class="fa fa-fw fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btnDelete" data-id="{{ $item->id }}">
                                            <i class="fa fa-fw fa-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{ $data->appends(request()->all())->links() }}
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

        </div>

    </section>
@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {

            // đính kèm token vào mỗi request ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // suAbidEneUPjfI5mHvWdFbSQ1PsM4OYSm73vF7kZ
                }
            });

            $('.btnDelete').click(function () {
                var id = $(this).attr('data-id'); // attr : lấy giá trị của thuộc tính của thẻ HTML
                var me = this;

                var result = confirm("Bạn có chắc chắn muốn xóa ?");
                if (result == true) { // neu nhấn == ok , sẽ send request ajax
                    $.ajax({
                        url: '/admin/product/'+id,
                        type: 'DELETE', // method
                        data: {}, // dữ liệu truyền sang nếu có
                        dataType: "json", // kiểu dữ liệu nhận về
                        success: function (res) { // success : kết quả trả về sau khi gửi request ajax
                            if (res.status == true) {
                                $(me).closest('tr').remove();
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection


@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-fw fa-image"></i> Quản Lý Banner <a href="{{ route('admin.banner.create') }}" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Thêm Banner</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header" style="padding: 15px 10px 5px 10px">
                        <h3 class="box-title" style="padding-top: 5px"><a href="{{ route('admin.banner.index') }}" title="">Danh Sách Banner</a></h3>

                        <div class="box-tools" style="top: 12px">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="input-group input-group-sm hidden-xs" style="width: 250px;">
                                    <input type="text" name="search" class="form-control pull-right" placeholder="Search" value="{{ request('search') }}">
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
                                <th style="width: 10px">STT</th>
                                <th>Tiêu Đề</th>
                                <th>Hình ảnh</th>
                                <th style="width: 20%">Url</th>
                                <th>Target</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center">Vị trí</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            @foreach($data as $index => $item)
                                <tr>
                                    <td>{{ $index }}</td>
                                    <td style="max-width:400px;">{{ $item->title }}</td>
                                    <td>
                                        @if($item->image)
                                            <img width="250px" height="70px" src="{{ asset($item->image) }}">
                                        @endif
                                    </td>
                                    <td>{{ (strlen($item->url) > 30)?substr($item->url, 0 , 30).' ...':$item->url }}</td>
                                    <td>{{ ($item->target == 1) ? '_blank' : '_self' }}</td>
                                    <td class="text-center">
                                        @if($item->type == 1)
                                            slider
                                        @elseif($item->type == 2)
                                            background
                                        @else
                                            banner right
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $item->position }}</td>
                                    <td class="text-center">
                                        {!! ($item->is_active == 1) ? '<span class="badge bg-green"> hiển thị </span>' : '<span class="badge bg-red">ẩn</span>'  !!}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.banner.edit', ['id' => $item->id]) }}" class="btn btn-primary">
                                            <i class="fa fa-fw fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btnDelete" data-id="{{ $item->id }}">
                                            <i class="fa fa-fw fa-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            @if($data->count() == 0)
                                <tr>
                                    <td colspan="9" class="text-center text-danger" style="padding: 20px">Không tồn tại bản ghi nào phù hợp với kết quả tìm kiếm của bạn !!!</td>
                                </tr>
                            @endif
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
    <!-- /.content -->
@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {
            // đính kèm token vào mỗi request ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.btnDelete').click(function () {
                var id = $(this).attr('data-id'); // lấy thuộc tính của thẻ HTML
                var me = this;
                var result = confirm("Bạn có chắc chắn muốn xóa ?");
                if (result == true) { // neu nhấn == ok , sẽ send request ajax
                    $.ajax({
                        url: '/admin/banner/'+id,
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



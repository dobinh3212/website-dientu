@extends('admin.layouts.main')

@section('content')
    <style>tr td:first-child {max-width: 250px}</style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-fw fa-newspaper-o"></i> Quản Lý Tin Tức <a href="{{ route('admin.article.create') }}" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Thêm tin tức</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-tools pull-right" style="padding: 10px">
                        <form action="" method="get" accept-charset="utf-8">
                            <div class="input-group input-group-sm hidden-xs" style="width: 250px;">
                                <input type="text" name="search" class="form-control pull-right" placeholder="Tìm Kiếm....">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>TT</th>
                                <th>Tiêu đề bài viết</th>
                                <th>Hình ảnh</th>
                                <th>Loại Danh Mục</th>
                                <th>Vị trí</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            @foreach($data as $key => $item)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ mb_substr($item->title, 0 , 100) }} {{ (strlen($item->title) > 99 ) ?'...':'' }}</td>
                                    <td>
                                    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                        <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->type === 1)
                                            <span>Tin tức</span>
                                        @elseif ($item->type === 2)
                                            <span>Tin khuyến mại</span>
                                        @else
                                            <span>Tin nổi bật</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->position }}</td>
                                    <td class="text-center">
                                        {!! ($item->is_active == 1) ? '<span class="badge bg-green"> hiển thị </span>' : '<span class="badge bg-red">ẩn</span>'  !!}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.article.edit', ['id' => $item->id]) }}" class="btn btn-primary">
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
                                    <td colspan="7" class="text-center text-danger">Không tồn tại bản ghi nào</td>
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
                var id = $(this).attr('data-id'); // lấy thuộc tính của thẻ HTML
                var me = this;
                var result = confirm("Bạn có chắc chắn muốn xóa ?");
                if (result == true) { // neu nhấn == ok , sẽ send request ajax
                    $.ajax({
                        url: '/admin/article/'+id,
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




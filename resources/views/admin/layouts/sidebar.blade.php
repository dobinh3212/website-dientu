<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @if(Auth::check())
                    <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                @if(Auth::check())
                    <p>{{ Auth::user()->name }}</p>
                @endif
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">TRANG ĐIỀU HƯỚNG CHÍNH</li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-fw fa-dashboard"></i> <span>Bảng điều khiển</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.order.index') }}">
                    <i class="fa fa-fw fa-cart-plus"></i> <span>QL Đơn Hàng</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}">
                    <i class="fa fa-fw fa-folder-open-o"></i> <span>QL Danh Mục</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.product.index') }}">
                    <i class="fa fa-fw fa-database"></i> <span>QL Sản Phẩm</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.article.index') }}">
                    <i class="fa fa-fw fa-newspaper-o"></i> <span>QL Tin Tức</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.banner.index') }}">
                    <i class="fa fa-fw fa-image"></i> <span>QL Banner</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.brand.index') }}">
                    <i class="fa fa-fw fa-fire"></i> <span>QL Thương Hiệu</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.vendor.index') }}">
                    <i class="fa fa-fw fa-cube"></i> <span>QL Nhà Cung Cấp</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.user.index') }}">
                    <i class="fa fa-fw fa-group"></i> <span>QL Người Dùng</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.setting.index') }}">
                    <i class="fa fa-fw fa-gears"></i> <span>Cấu Hình Website</span>
                </a>
            </li>
        </ul>
    </section>

</aside>



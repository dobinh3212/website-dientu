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

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">TRANG ĐIỀU HƯỚNG CHÍNH</li>

            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.order.index') }}">
                    <i class="fa fa-cart-plus"></i> <span>QL Đơn Hàng</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.category.index') }}">
                    <i class="fa fa-folder-open-o"></i> <span>QL Danh Mục</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.product.index') }}">
                    <i class="fa fa-database"></i> <span>QL Sản Phẩm</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.article.index') }}">
                    <i class="fa fa-newspaper-o"></i> <span>QL Tin Tức</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.banner.index') }}">
                    <i class="fa fa-image"></i> <span>QL Banner</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.brand.index') }}">
                    <i class="fa fa-fire"></i> <span>QL Thương Hiệu</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.vendor.index') }}">
                    <i class="fa fa-cube"></i> <span>QL Nhà Cung Cấp</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.user.index') }}">
                    <i class="fa fa-group"></i> <span>QL Người Dùng</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.contact.index') }}">
                    <i class="fa fa-phone"></i> <span>QL Liên Hệ</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.setting.index') }}">
                    <i class="fa fa-gears"></i> <span>Cấu hình Website</span>
                </a>
            </li>
        </ul>
    </section>

</aside>



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nguyễn Thế Hiển</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">BÀI VIẾT</li>
                <li class="nav-item">
                    <a href="{{route('ListNewPost')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Danh mục bản tin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('listPost')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Danh sách bài viết
                        </p>
                    </a>
                </li>
                <li class="nav-header">SẢN PHẨM</li>
                <li class="nav-item">
                    <a href="{{route('listCategoryProduct')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Danh mục sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('listProduct')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Danh sách sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-header">TÀI KHOẢN</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Quản lý admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>Username : </p>
                                <p>{{ Auth::user()->name }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a href="{{route('logout')}}" class="nav-link">
                                <p onclick="event.preventDefault();this.closest('form').submit();"> {{ __('Đăng xuất') }}</p>
                            </a>
                            </form>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('listUser')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Danh sách người dùng
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

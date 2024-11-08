<!-- views/admin/layouts/app.blade.php -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('css/admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('css/admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('css/admin/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><strong style="margin-left: 40px;">SEVEN STORE</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}"><i class="fa fa-list-alt"></i> DANH MỤC</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.products.index') }}"><i class="fa fa-qrcode"></i> SẢN PHẨM</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.orders.index') }}"><i class="fa fa-edit"></i> ĐƠN HÀNG</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.reports.index') }}"><i class="fa fa-tasks"></i> THỐNG KÊ</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Nội dung trang quản trị -->
        <div id="page-wrapper">
            <div class="header">
                <div class="page-header">
                    @yield('content_admin') <!-- Phần nội dung động -->
                </div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('css/admin/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('css/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('css/admin/js/custom-scripts.js') }}"></script>
</body>

</html>

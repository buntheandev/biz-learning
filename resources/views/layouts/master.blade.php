<!DOCTYPE html>
<html lang="en">
<head>
    @yield('meta')

   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- Fevicon -->
    <link rel="shortcut icon" href="">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{asset('backend/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!-- Apex css -->
    <link href="{{asset('backend/assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{asset('backend/assets/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/custom.css')}}" rel="stylesheet" type="text/css">
    @yield('css')
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                  <h3 style="color: #0058ea">Biz Learning</h3>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li>
                            <a href="{{route('dashboard')}}">
                                <img src="{{asset('backend/assets/images/svg-icon/dashboard.svg')}}" class="img-fluid" alt="dashboard">
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li >
                            <a href="javaScript:void();">
                                <i class="fa fa-user"></i>
                                <span>Users</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu in">
                                <li ><a href="{{ route('user') }}" >All Users</a></li>
                                <li><a href="{{ route('user.create') }}">Add User</a></li>
                            </ul>
                        </li>

                        <li >
                            <a href="javaScript:void();">
                                <i class="fa fa-folder"></i>
                                <span>Categories</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu in">
                                <li ><a href="{{ route('category.index') }}" >All Categories</a></li>
                                <li><a href="{{ route('category.create') }}">Add Category</a></li>
                            </ul>
                        </li>

                        <li >
                            <a href="javaScript:void();">
                                <i class="fa fa-shopping-bag"></i>
                                <span>Product</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu in">
                                <li ><a href="{{ route('product') }}" >All Products</a></li>
                                <li><a href="{{ route('product.create') }}">Add Product</a></li>
                            </ul>
                        </li>

                        <li >
                            <a href="{{ route('order') }}">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Order Product</span>
                            </a>
                        </li>

                         <li >
                            <a href="{{ route('report') }}">
                                <i class="fa fa-pie-chart"></i>
                                <span>Report</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                               <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <h3 style="color: #0058ea">Biz Learning</h3>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="{{asset('backend/assets/images/svg-icon/horizontal.svg')}}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="{{asset('backend/assets/images/svg-icon/verticle.svg')}}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                        <img src="{{asset('backend/assets/images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="{{asset('backend/assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                        <img src="{{asset('backend/assets/images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="{{asset('backend/assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                              <button class="btn" type="submit" id="button-addon2"><img src="{{asset('backend/assets/images/svg-icon/search.svg')}}" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">

                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{asset('backend/assets/images/users/profile.svg')}}" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                    <h5></h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="{{asset('backend/assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="user">{{ Auth::user()->name }}</a>
                                                        </li>

                                                        <li class="media dropdown-item">
                                                        <a href="{{ route('logout') }}" class="profile-icon"><img src="{{asset('backend/assets/images/svg-icon/logout.svg')}}" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Topbar -->

            <!-- Start Contentbar -->
            <div class="contentbar">
               @yield('content')
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">Biz Solution Learning - Create By Sorn Bunthean &copy; 2020</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->

    <!-- Footer Section ---------------->
     <!-- Start js -->
    <script src="{{asset('backend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/detect.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/assets/js/vertical-menu.js')}}"></script>
        <!-- Switchery js -->
    <script src="{{asset('backend/assets/plugins/switchery/switchery.min.js')}}"></script>
        <!-- Apex js -->
    <script src="{{asset('backend/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/apexcharts/irregular-data-series.js')}}"></script>
        <!-- Slick js -->
    <script src="{{asset('backend/assets/plugins/slick/slick.min.js')}}"></script>
        <!-- Custom Dashboard js -->
    <script src="{{asset('backend/assets/js/custom/custom-dashboard.js')}}"></script>

        <!-- Core js -->
    <script src="{{asset('backend/assets/js/core.js')}}"></script>
        <!-- End js -->
        @yield('js')
    </body>



<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>洪加煌博客系统</title>
        <link rel="stylesheet" href="{{ homePlugin('/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ homePlugin('/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ homePlugin('/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{homePlugin('/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{homePlugin('/whirl/dist/whirl.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{asset('/css/angle.css')}}">
        <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
        @yield('admincss')

        <script src="{{ homePlugin('/jquery/dist/jquery.js') }}"></script>
        <script src="{{ homePlugin('/jQuery-Storage-API/jquery.storageapi.js') }}"></script>

        <script src="{{ homePlugin('/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/js/angle.js') }}"></script>
        @yield('adminjs')
        <style>
         .table-top{
             margin-top: 20px;
         }
         .btn_form{
             float: right;
             margin-right: 5px;
         }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <!-- top navbar-->
            <header class="topnavbar-wrapper">
                <!-- START Top Navbar-->
                <nav role="navigation" class="navbar topnavbar">
                    <!-- START navbar header-->
                    <div class="navbar-header">
                       <a href="/" class="navbar-brand">
                            <div class="brand-logo">
                                <img src="{{asset('images/logo-white.png')}}" alt="App Logo" class="img-responsive">
                            </div>
                            <div class="brand-logo-collapsed">
                                <img src="{{asset('images/logo-white-mini.png')}}" alt="App Logo" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <!-- END navbar header-->
                    <!-- START Nav wrapper-->
                    <div class="nav-wrapper">
                        <!-- START Left navbar-->
                        <ul class="nav navbar-nav">
                            <li>
                                <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                                <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                                    <em class="fa fa-navicon"></em>
                                </a>
                                <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                                <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                                    <em class="fa fa-navicon"></em>
                                </a>
                            </li>
                            <!-- START User avatar toggle-->
                            <li>
                                <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                                <a id="user-block-toggle" href="#user-block" data-toggle="collapse">
                                    <em class="icon-user"></em>
                                </a>
                            </li>
                            <!-- END User avatar toggle-->
                        </ul>
                        <!-- END Left navbar-->
                        <!-- START Right Navbar-->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a alt="系统退出" title="系统退出" href="{{url('backend/auth/logout')}}">
                                    <em class="fa fa-sign-out"></em>
                                </a>
                            </li>
                            <li><a></a></li>
                        </ul>
                        <!-- END Right Navbar-->
                    </div>
                    <!-- END Nav wrapper-->
                </nav>
                <!-- END Top Navbar-->
            </header>
            <!-- sidebar-->
            <aside class="aside">
                <!-- START Sidebar (left)-->
                <div class="aside-inner">
                    <nav data-sidebar-anyclick-close="" class="sidebar">
                        <!-- START sidebar nav-->
                        <ul class="nav">
                            <!-- START user info-->
                            <li class="has-user-block">
                                <div id="user-block" class="collapse">
                                    <div class="item user-block">
                                        <!-- User picture-->
                                        <div class="user-block-picture">
                                            <div class="user-block-status">
                                                <img src="{{asset('uploads/'.Auth::user()->photo)}}" alt="头像" width="60" height="60" class="img-thumbnail img-circle">
                                                <div class="circle circle-success circle-lg"></div>
                                            </div>
                                        </div>
                                        <!-- Name and Job-->
                                        <div class="user-block-info">
                                            <span class="user-block-name">Hello, {{Auth::user()->name}}</span>
                                            <span class="user-block-role">全栈工程师</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- END user info-->
                            <!-- Iterates over all sidebar items-->
                            <!-- Iterates over all sidebar items-->
                            <li class="nav-heading ">
                                <span data-localize="sidebar.heading.HEADER">网站主页</span>
                            </li>
                            <li>
                                <a href="{{url('/backend/home')}}" title="网站主页">
                                    <em class="fa fa-home"></em>
                                    <span>网站主页</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/backend/user')}}" title="用户管理">
                                    <em class="fa fa-users"></em>
                                    <span>用户管理</span>
                                </a>
                            </li>

                            <li class="nav-heading ">
                                <span data-localize="sidebar.heading.MORE">文章管理</span>
                            </li>
                            <li>
                                <a href="{{url('/backend/article')}}" title="文章管理">
                                    <em class="fa fa-book"></em>
                                    <span data-localize="sidebar.nav.chart.CHART">文章管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/backend/cate')}}"title="文章分类">
                                    <em class="fa fa-list-ol "></em>
                                    <span data-localize="sidebar.nav.chart.CHART">文章分类</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/backend/tags')}}"title="文章标签">
                                    <em class="fa fa-tags"></em>
                                    <span data-localize="sidebar.nav.chart.CHART">文章标签</span>
                                </a>
                            </li>
                            <li class="nav-heading ">
                                <span data-localize="sidebar.heading.MORE">系统设置</span>
                            </li>
                            <li class="">
                                <a href="{{url('/backend/system/index')}}" title="网站信息">
                                    <em class="fa fa-cogs"></em>
                                    <span data-localize="sidebar.nav.DOCUMENTATION">网站信息</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('/backend/nav')}}" title="导航设置">
                                    <em class="fa fa-bars"></em>
                                    <span data-localize="sidebar.nav.DOCUMENTATION">导航设置</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('/backend/links')}}" title="友情链接">
                                    <em class="fa fa-link"></em>
                                    <span data-localize="sidebar.nav.DOCUMENTATION">友情链接</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END sidebar nav-->
                    </nav>
                </div>
                <!-- END Sidebar (left)-->
            </aside>
            <!-- Main section-->
            <section>
                @yield('content')
            </section>
            <!-- Page footer-->
            <footer>
                <span>Designed and Developed by 洪加煌. All rights reserved. &copy; 2016</span>
            </footer>

        </div>
        @yield('modules')

	    <!-- Scripts -->
	    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        @yield('header')
        <link rel="stylesheet" href="{{ homePlugin('/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ homePlugin('/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ homeAsset('/css/globals/home.css') }}">
        @yield('homecss')
        <meta property="og:type" content="article">
        <meta property="og:locale" content="zh_CN" />
        <link rel="icon" href="{{ asset('favicon.png') }}">
        <!-- talkingdata -->
        <script src="http://sdk.talkingdata.com/app/h5/v1?appid=CA7156ED75114910BED0ACD39274EDDD&vn=fidding博客&vc=1.0.0"></script>
        <!-- google ad scene -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-7837642167534676",
                enable_page_level_ads: true
            });
        </script>
    </head>
    <body class="home">
        <header class="header">
            <div id="header-search-form" class="navbar-search collapse">
                <form class="container" action="{{url('search/keyword')}}" method="get">
                    <input type="search" id="navbar_search" name="keyword" class="form-control" placeholder="请输入搜索内容，回车搜索..."/>
                    <button id="search_submit" type="submit" title="搜索">
                        <em class="fa fa-search"></em>
                    </button>
                </form>
            </div>
            <nav class="navbar navbar-white">
                <div class="navbar-top clearfix">
                    <div class="container">
                        <div class="pull-left">
                            <a><em class="fa fa-user"></em>&nbsp;&nbsp;洪加煌技术博客</a>
                        </div>
                        <div class="pull-right social-icons">
                            <a rel="alternate" type="application/rss+xml" href="{{ url('rss') }}" title="RSS Feed {{ config('blog.title') }}">
                                &nbsp;
                                <em class="fa fa-rss"></em>
                            </a>
                        </div>
                        <div class="pull-right social-icons">
                            <a class="social-icon pull-right" rel="nofollow" href="https://github.com/fidding" target=_blank>
                                &nbsp;
                                <em class="fa fa-github"></em>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container navbar-inner">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <em class="fa fa-navicon"></em>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img title="洪加煌博客" alt="洪加煌博客" src="/images/logo.png" />
                        </a>
                        <button type="button" class="navbar-btn btn-icon btn-circle pull-right visible-xs" data-toggle="collapse" data-target="#header-search-form" aria-expanded="true">
                            <em class="fa fa-search"></em>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="cate dropdown nav-cate">
                                <a href="{{url('/')}}">首页</a>
                            </li>
                            @foreach($cateArr as $cate)
                                <li class="cate dropdown nav-cate">
                                    <a href="{{url('category').'/'.$cate->as_name}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        {{$cate->cate_name}}
                                        <em class="fa fa-angle-down hidden-xs"></em>
                                    </a>
                                    @if(count($cate->list))
                                        <ul class="cate-list dropdown-menu">
                                            @foreach($cate->list as $list)

                                                <li><a href="{{url('/category').'/'.$list->as_name}}">{{$list->cate_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                            @foreach($navList as $nav)
                                <li class="cate dropdown nav-cate">
                                    <a href="{{$nav->url}}" class="dropdown-toggle" >
                                        {{$nav->name}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                        <button id="navbar_btn_search" class="pull-right navbar-btn hidden-xs" data-toggle="collapse" data-target="#header-search-form">
                            <em class="fa fa-search"></em>
                        </button>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>

        <!-- / header -->
        @yield('content')
        <footer class="">
            <div class="site-footer" role="contentinfo">
                <div class="container">
                    <blockquote class="blockquote-reverse">
                        <p>每天起床，我看见的世界上的每个人，都好像都披着一层膜，无法穿透。这种感觉很奇怪，有点悲哀，可是没有办法改变。这些人的动作举止，为什么这么不一样？是不是因为，他们来的世界就是这么不一样？若是这样，那我要更努力、更努力，把我自己推到那个世界去。
                        </p>
                        <footer><cite title="Source Title">风雨哈佛路</cite></footer>
                    </blockquote>
                </div>
                <div class="copyright text-center">
                    Copyright © 2016 <a href="{{url('/')}}">fidding</a> All Rights Reserved
                    @if(systemConfig('put_on_record'))
                        | <a rel="nofollow" href="http://www.miitbeian.gov.cn/"> {{ systemConfig('put_on_record') }}</a>
                    @endif
                </div>
            </div>
        </footer>
        <!-- / footer -->
        <script src="{{ homePlugin('/jquery/dist/jquery.js') }}"></script>
        <script src="{{ homePlugin('/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/js/baidupush.js') }}"></script>
        <script src="{{asset('js/home.js')}}"></script>
        @yield('homejs')
    </body>
</html>

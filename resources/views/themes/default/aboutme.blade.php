@extends('themes.default.layouts')

@section('header')
    <title>关于我-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="关于我 洪加煌 fidding 技术博客 全栈工程师" />
    <meta name="description" content="关于我 洪加煌 fidding 技术博客 全栈工程师">
@endsection

@section('content')
    <section class="banner-about">
        <h1>关于我</h1>
    </section>
    <section class="container container-about">
        <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
            <p>博客于2016年6月22日正式上线。</p>
            <header class="title-block text-center mt50">
                <h2 class="title-underblock dark">
                    <span class="light color-red">个人</span>简介
                </h2>
            </header>
            <p class="mt30">
                我的真实姓名叫洪加煌(fidding)，1991年出生于福建省南安市，2015年毕业于<a rel="nofollow" target="_blank" href="http://baike.baidu.com/link?url=QHDOALtwlSpsM62i3iXiIM7YmJ5zezY2EOtuNey3cdnkHvCoZLlFp8vWwZ1e8eh1v62uGh2RUiVkjpyF4gU7Za">辽宁工程技术大学</a>，所学专业地理信息科学(简称GIS)，目前从事web开发，致力成为一名优异的<a rel="nofollow" target="_blank" href="http://baike.baidu.com/link?url=WiuEF85BN0Z1_fSZivdy-iiDIH5E_PoE54To6o4WYgigUVMvqkxKUrlW_e7il8XZww5dE2sSWIwT4Zjkx7pwDq">全栈开发工程师</a>。
            </p>
            <header class="title-block text-center mt50">
                <h2 class="title-underblock dark">
                    <span class="light color-red">职业</span>技能
                </h2>
            </header>
            <p class="mt30">
                编程语言：php，javascript，nodejs，c#，asp.net，python</br>
                web框架：laravel，express，angularjs，mean，bootstrap，jquery</br>
                数据库：mysql，mongodb，sqlserver</br>
                软件开发：margis，arcgis
            </p>
            <header class="title-block text-center mt50">
                <h2 class="title-underblock dark">
                    <span class="light color-red">项目</span>经验
                </h2>
            </header>
            <p class="mt30">
                2017初-2017.04&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.fidding.me/yezi/" alt="倩女幽魂叶子手游" target="_blank">倩女幽魂手游自动辅助</a>，作者
               <span></span> 
                2016初-至今&nbsp;&nbsp;&nbsp;&nbsp;fidding个人技术博客，网站建设者
                <span>此博客用于纪录技术历程，源码已上传到<a rel="nofollow" href="https://www.github.com/fidding/laravel-blog" alt="FiddingBlog源码" title="FiddingBlog源码" target="_blank">github</a>上，欢迎start & fork！</span>
                2015初-至今&nbsp;&nbsp;&nbsp;&nbsp;<a rel="nofollow" href="http://www.baseblue.cn" alt="基蓝云矿山" title="基蓝云矿山" target="_blank">基蓝云矿山系统</a>，开发工程师
                <span>一个基于云计算的矿山web系统，糅合多项技术，如：php，nodejs,websocket,redis，canvas等。</span>
                2014.07-2014.10&nbsp;&nbsp;&nbsp;&nbsp;全国GIS大赛管线管理系统（二等奖）, 组长
                <span>结合使用javascript,jquery和地图开发openlayer(js类库)，实现地图的基本浏览，管线决策等，拥有数据上传下载，在线音乐，在线QQ，天气查看等其他功能。</span>
                2013.05-2013.06&nbsp;&nbsp;&nbsp;&nbsp;辽宁工程技术大学安全院网站，后台开发
                <span>实现图片文件上传下载，导航栏管理，管理员登陆权限，公告栏信息和图片轮播更换。</span>
                2012.10-2012.12&nbsp;&nbsp;&nbsp;&nbsp;简易图书管理系统，整站建设者
</br>
                <span>实现注册，登陆，借阅，续期以及管理员账户注销，账户管理，修改密码，查看用户资料等。</span>
            </p>
            <header class="title-block text-center mt50">
                <h2 class="title-underblock dark">
                    <span class="light color-red">联系</span>方式
                </h2>
            </header>
            <p class="mt30">QQ：395455856&nbsp;&nbsp;&nbsp;&nbsp;邮箱：395455856@qq.com</p>

        </div>
    </section>
@endsection

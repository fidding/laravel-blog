@extends('themes.default.layouts')

@section('header')
    <title>{{ $article->title }}-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ $article->title }},{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{!! str_limit(preg_replace('/\s/', '',strip_tags(conversionMarkdown($article->content))),100) !!}">
@endsection

@section('homecss')
    <link rel="stylesheet" href="{{ homeAsset('/css/globals/common.css') }}">
    <link rel="stylesheet" href="{{ homePlugin('/prism/prism.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/vendor/share.js/dist/css/share.min.css') }}">
@endsection

@section('homejs')
    <script src="{{ homePlugin('/prism/prism.js') }}"></script>
    <script src="{{ homeAsset('/vendor/share.js/dist/js/jquery.qrcode.min.js') }}"></script>
    <script src="{{ homeAsset('/vendor/share.js/dist/js/share.min.js') }}"></script>

@endsection
@section('content')
    <section class="banner">
        <div class="collection-head">
            <div class="container">
                <div class="collection-title">
                    <h1 class="collection-header">{{ $article->title }}</h1>
                    <div class="collection-info">
                        <span class="meta-info">
                            @if(count($article->tags))
                                <em class="fa fa-tag"></em>
                                @foreach($article->tags as $tag)
                                    {{$tag->name}}
                                @endforeach
                            @endif
                            &nbsp;&nbsp;
                            <em class="fa fa-calendar"></em> {{ $article->created_at->format('Y/m/d') }}
                            &nbsp;&nbsp;
                            <em class="fa fa-eye"></em> {{ $article->click }}
                        </span>

                    </div>
                    <div class="collection-info">
                        <span class="meta-info">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.banner -->
    <section class="container content">
        <div class="">
            <div class="col-md-9 mt30">
                <article class="article-content markdown-body">
                    {!! conversionMarkdown($article->content) !!}
                </article>
                <!-- donate -->
                <div class="donate clearfix">
                    <p>每一个不曾起舞的日子,都是对生命的辜负 ^-^</p>
                    <!-- <p>如果喜欢我的文章，不介意的话请杯咖啡吧~</p> -->
                    <div class="donate-box col-md-3 col-sm-4 col-xs-10">
                        <p class="text-center bold">支付宝</p>
                        <img src="/donate/alipay.jpeg" />
                    </div>
                    <div class="donate-box col-md-3 col-sm-4 col-xs-10">
                        <p class="text-center bold">微信</p>
                        <img src="/donate/wxpay.jpeg" />
                    </div>
                </div>
                <div class="share">
                    <div class="share-bar"><span style="color: #999">分享: </span>&nbsp;</div>
                </div>
                <!-- 来必力City版安装代码 -->
                <div id="lv-container" data-id="city" data-uid="MTAyMC8zNDE1Ny8xMDY5NA==">
                    <script type="text/javascript">
                     (function(d, s) {
                         var j, e = d.getElementsByTagName(s)[0];

                         if (typeof LivereTower === 'function') { return; }

                         j = d.createElement(s);
                         j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
                         j.async = true;

                         e.parentNode.insertBefore(j, e);
                     })(document, 'script');
                    </script>
                    <noscript>为正常使用来必力评论功能请激活JavaScript</noscript>
                </div>
                <!-- City版安装代码已完成 -->
                <!-- <div class="comment"> -->
                <!-- <div class="comments"> -->
                <!-- <div id="disqus_thread"></div> -->
                <!-- <script type="text/javascript"> -->
                <!-- var disqus_shortname = "{{ config('disqus.disqus_shortname') }}"; -->
                <!-- (function() { -->
                <!-- var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true; -->
                <!-- dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js'; -->
                <!-- (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq); -->
                <!-- })(); -->
                <!-- </script> -->
                <!-- <noscript>Please enable JavaScript to view the &lt;a href="http://disqus.com/?ref_noscript"&gt;comments powered by Disqus.&lt;/a&gt;</noscript> -->
                <!-- </div> -->
                <!-- </div> -->
            </div>

            <div class="col-md-3 mt30">
                <div class="widget">
                    <div class="about-cover">
                        <img src="/images/bg_me.jpg" />
                        <div class="about-detail">
                            <div class="about-inner">
                                <a  href="{{ url('about') }}" title="{{ $article->user->name }}">
                                    <img class="img-circle" src="{{ asset('uploads'.'/'.$article->user->photo) }}" alt="{{ $article->user->name }}" title="{{ $article->user->name }}"/>
                                    {{ $article->user->name }}<br/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about-me">
                        <p>持久不退的热情才是天分
                        </p>
                        <div class="social-icons text-center">
                            <a class="social-icon" href="https://github.com/fidding/" title="github" target="_blank">
                                <em class="fa fa-github"></em>
                            </a>
                        </div>
                    </div>


                </div>
                @include('themes.default.right')
            </div>
        </div>
    </section>
@endsection

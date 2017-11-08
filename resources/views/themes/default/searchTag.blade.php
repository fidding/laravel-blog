@extends('themes.default.layouts')

@section('header')
    <title>搜索标签{{ $tagName }}-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="collection-head">
            <div class="container">
                <div class="collection-title">
                    <h1 class="collection-header">Tag：{{ $tagName }}</h1>
                </div>
                <span class="meta-info">
                </span>
            </div>
        </div>
    </section>

    <!-- /.banner -->
    <section class="container content">
        <div class="columns">
            <div class="column two-thirds col-md-9" >
                @include('themes.default.left')
                @if(!empty($articleList))
                    @if(empty($articleList['data']))
                        <div class="repo-list-item">
                            <h3 class="repo-list-name">
                                暂时没搜到关于标签 <span style="color: #f4645f">{{ $tagName }}</span> 的内容，换个关键字试试吧～
                            </h3>
                        </div>
                    @endif
                @endif
            </div>
            <div class="column one-third col-md-3">
                @include('themes.default.right')
            </div>
        </div>
    </section>
    <!-- /section.content -->

@endsection

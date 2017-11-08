@extends('themes.default.layouts')

@section('header')
    <title>搜索{{ $keyword }}-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="collection-head">
            <div class="container">
                <div class="collection-title">
                    <h1 class="collection-header">{{ $keyword }}</h1>
                </div>
                <span class="meta-info">
                </span>
            </div>
        </div>
    </section>

    <!-- /.banner -->
    <section class="container content">
        <div class="row">
            <div class="col-md-9 mt30" >
                @include('themes.default.left')
                @if(!empty($articleList))
                    @if(empty($articleList['data']))
                        <div class="repo-list-item">
                            <h3 class="repo-list-name">
                                暂时没搜到关于关键字 <span style="color: #f4645f">{{ $keyword }}</span> 的内容，换个关键字试试吧～
                            </h3>
                        </div>
                    @endif
                @endif
            </div>
            <div class="col-md-3 mt30">
                @include('themes.default.right')
            </div>
        </div>
    </section>
    <!-- /section.content -->
@endsection

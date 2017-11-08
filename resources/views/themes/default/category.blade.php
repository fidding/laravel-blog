@extends('themes.default.layouts')

@section('header')
    <title>{{ $category->cate_name }}-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ $category->cate_name }},{{ $category->seo_key }},{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ $category->seo_desc }}">
@endsection

@section('content')
    <section class="banner">
        <div class="collection-head">
            <div class="container">
                <div class="collection-title">
                    <h1 class="collection-header">{{ $category->cate_name }}</h1>
                    <div class="collection-info">
                    <span class="meta-info">
                        {{ $category->seo_desc }}
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.banner -->
    <section class="container content">
        <div class="row">
            <div class="col-md-9 mt30" >
                @include('themes.default.left')
            </div>
            <div class="col-md-3 mt30">
                @include('themes.default.right')
            </div>
        </div>
        <!-- /pagination -->
    </section>
    <!-- /section.content -->

@endsection

@extends('themes.default.layouts')

@section('header')
    <title>关于我-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ $userInfo->name }},{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{!! str_limit(preg_replace('/\s/', '',strip_tags(conversionMarkdown($userInfo->desc))),100) !!}">
@endsection

@section('content')
    <section class="banner-about">
        <h1>关于我</h1>
    </section>
    <section class="container container-about">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <article class="article-content markdown-body">
                {!! conversionMarkdown($userInfo->desc) !!}
            </article>
        </div>
    </section>
@endsection

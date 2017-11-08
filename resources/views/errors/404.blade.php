@extends('themes.default.layouts')

@section('header')
    <title>404_{{ systemConfig('title','Fidding Blog') }}_Powered By{{ systemConfig('subheading','Fidding Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="collection-head">
            <div class="container">
                <div class="collection-title">
                    <h1 class="collection-header">404 Page</h1>
                    <div class="collection-info">
                        <span class="meta-info">
                            哎呀，您访问的页面去冥王星旅游去了
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container container-404">
            <div class="text-center">
                <h1>404</h1>
        </div>
    </section>
    {{ viewInit() }}
@endsection

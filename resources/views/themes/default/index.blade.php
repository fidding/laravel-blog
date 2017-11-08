@extends('themes.default.layouts')

@section('header')
    <title>{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('content')
<section class="banner">
    <div class="collection-head">
        <div class="container">
            <div class="collection-title">
                <h1 class="collection-header">fidding & 洪加煌</h1>
                <div class="collection-info">
                    <span class="meta-info">
                        get busy living or get busy dying.</br>
                        持久不退的热情才是天分
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
</section>
<!-- /section.content -->

@endsection

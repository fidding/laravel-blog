@extends('themes.default.layouts')

@section('header')
    <title>留言-{{ systemConfig('title','fidding Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="collection-head">
            <div class="container">
                <div class="collection-title">
                    <h1 class="collection-header">留言</h1>
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
            <div class="col-md-9 mt30 mb30" >
                {!! Notification::showAll() !!}
                @if ($errors->has('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <strong>Error!</strong>
                        {{ $errors->first('error', ':message') }}
                        <br />
                        请联系开发者！
                    </div>
                @endif
                <!-- <h3 class="title-underblock dark">留言</h3> -->
                <form action="{{url('message')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label class="input-desc" for="username">
                            姓名
                            <font color="red">{{ $errors->first('username')}}</font>
                        </label>
                        <input type="text" class="form-control input-border-bottom" name="username" placeholder="请输入您的姓名"  />
                    </div>
                    <div class="form-group">
                        <label for="email" class="input-desc">
                            邮箱
                            <font color="red">{{$errors->first('email')}}</font>
                        </label>
                        <input type="email" class="form-control input-border-bottom" id="email" name="email" placeholder="请输入您的邮箱">
                    </div><!-- End .from-group -->
                    <div class="form-group">
                        <label for="content" class="input-desc">
                            内容
                            <font color="red">{{$errors->first('content')}}</font>
                        </label>
                        <textarea class="form-control input-border-bottom" rows="6" id="contactmessage" name="content" placeholder="请输入留言内容" ></textarea>
                    </div><!-- End .from-group -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-dark btn-border min-width no-radius" value="留言">
                    </div><!-- End .from-group -->
                </form>
            </div>
            <div class="col-md-3 mt30">
                <h4>联系我</h4>
                <ul class="contact-list">
                    <li>
                        Q Q：395455856
                    </li>
                    <li>邮箱：395455856@qq.com</li>
                </ul>
                <h4>更多</h4>
                <div class="social-icons">
                    <a rel="nofollow" href="https://github.com/fidding" target="_blank" alt="github" title="github"><em class="fa fa-github"></em></a>
                </div>

            </div>
        </div>
    </section>
    <!-- /section.content -->

@endsection

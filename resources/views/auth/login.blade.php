<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="{{ homePlugin('/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/angle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <script src="{{ homePlugin('/jquery/dist/jquery.js') }}"></script>
        <script src="{{ homePlugin('/bootstrap/dist/js/bootstrap.js') }}"></script>
    </head>
    <body>
        <div class="block-center mt-xl wd-xl">
            <!-- START panel-->
            <div class="panel panel-dark panel-flat">
                <div class="panel-heading text-center">
                    <a href="#">
                        <img src="{{asset('images/logo-white.png')}}" alt="Image" class="login-logo block-center img-rounded">
                    </a>
                </div>
			    <div class="panel-body">
                    <p class="text-center pv">管理员登陆</p>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}</br>
							@endforeach
						</div>
					@endif
					<form class="mb-lg" role="form" method="POST" action="{{ url('/backend/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group has-feedback">
							<input type="email" class="form-control" name="email" placeholder="邮箱" value="{{ old('email') }}">
                            <span class="fa fa-envelope form-control-feedback text-muted"></span>
						</div>

						<div class="form-group has-feedback">
							<input type="password" class="form-control" name="password" placeholder="密码">
                            <span class="fa fa-lock form-control-feedback text-muted"></span>
						</div>
                        <div class="clearfix">
                            <div class="checkbox c-checkbox pull-left mt0">
                                <label>
                                    <input type="checkbox" value="" name="remember" checked>
                                    <span class="fa fa-check"></span>记住我</label>
                            </div>
                            <div class="pull-right">
                                <!-- <a href="/backend/password/email" class="text-muted">忘记密码?</a> -->
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary mt-lg">登 陆</button>
					</form>
			    </div>
		    </div>
            <!-- END panel-->
            <div class="p-lg text-center">
                Copyright © 2016 fidding All Rights Reserved
                @if(systemConfig('put_on_record'))
                    | <a href="http://www.miitbeian.gov.cn/"> {{ systemConfig('put_on_record') }}</a>
                @endif
            </div>
        </div>
    </body>
</html>

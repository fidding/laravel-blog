@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>添加用户</h3>
        <div class="col-xs-12">
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
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="/backend/user" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="name" class="">用户名</label>
                            <div class="">
                                <input type="text" class="form-control" name="name" placeholder="Username" />
                                <font color="red">{{ $errors->first('name') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">邮箱</label>
                            <div class="">
                                <input type="text" class="form-control" name="email" placeholder="Email" />
                                <font color="red">{{ $errors->first('email') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">密码</label>
                            <div class="">
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                                <font color="red">{{ $errors->first('password') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="">头像</label>
                            <div class="">
                                <input type="file" class="photo" name="photo">
                                <font color="red">{{ $errors->first('photo') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="">简介</label>
                            <div class="editor">
                                @include('editor::head')
                                <textarea name="desc" class="form-control" id="myEditor"></textarea>
                                <font color="red">{{ $errors->first('desc') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input type="submit" class="ml btn btn-success" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>修改用户</h3>
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
                    <form action="/backend/user/{{$user->id}}" method="POST" class="" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="name" class="">用户名</label>
                            <div class="">
                                <input name="name" type="text" class="form-control" placeHolder="Username" value="{{$user->name?$user->name:''}}" />
                                <font color="red">{{ $errors->first('name') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="">邮箱</label>
                            <div class="">
                                <input name="email" type="email" class="form-control" placeHolder="Email" value="{{$user->email?$user->email:''}}" />
                                <font color="red">{{ $errors->first('email') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="">密码</label>
                            <div class="">
                                <input name="password" type="password" class="form-control" placeHolder="Password" />
                                <font color="red">{{ $errors->first('password') }}</font>
                                <font color="#8a2be2">为空则不修改</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="">头像</label>
                            <div class="">
                                <input type="file" name="photo" />
                                <font color="red">{{ $errors->first('photo') }}</font>
                                <br />
                                <div class="">
                                    @if(!empty($user->photo))
                                        <img src="{{ asset('uploads'.'/'.$user->photo) }}" width="300px"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label  class="">描述</label>
                        <div class="editor">
                            @include('editor::head')
                            <textarea class="form-control" id="myEditor" name="desc">{{$user->desc?$user->desc:''}}</textarea>
                            <font color="red">{{ $errors->first('desc') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="ml">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    {!! Form::model($user, ['route' => ['backend.user.update', $user->id], 'method' => 'put','class'=>'','enctype'=>'multipart/form-data']) !!}

                    <div class="form-group">
                        <label for="name" class="">用户名</label>
                        <div class="">
                            {!! Form::text('name', $user->name, ['class' => 'form-control','placeholder'=>'Username']) !!}
                            <font color="red">{{ $errors->first('name') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="">邮箱</label>
                        <div class="">
                            {!! Form::text('email', $user->email, ['class' => 'form-control','placeholder'=>'Email']) !!}
                            <font color="red">{{ $errors->first('email') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="">密码</label>
                        <div class="">
                            {!! Form::text('password', '', ['class' => 'form-control','placeholder'=>'Password']) !!}
                            <font color="red">{{ $errors->first('password') }}</font>
                            <font color="#8a2be2">为空则不修改</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="">头像</label>
                        <div class="">
                            {!! Form::file('photo') !!}
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
                            {!! Form::textarea('desc', $user->desc, ['class' => 'form-control','id'=>'myEditor']) !!}
                            <font color="red">{{ $errors->first('desc') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="ml">
                            {!! Form::submit('修改', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.app')
@section('adminjs')
    <script>
     $(function(){
         $('.btn-delete-form').submit(function(){
             return confirm('是否删除该用户，此操作不可逆，请谨慎处理！');
         })
     })
    </script>
@endsection

@section('content')
    <div class="content-wrapper clearfix">
        <h3>用户管理</h3>
        <div class="col-xs-12">
            <div class="text-left">
                <a class="btn btn-info mb-sm" href="{{ URL::route('backend.user.create')}}">添加用户</a>
            </div>
            {!! Notification::showAll() !!}
            <div class="panel panel-default">
                <div class="panel-heading">内容管理</div>
                <div class="table-response">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>姓名</th>
                                <th>邮箱</th>
                                <th>创建时间</th>
                                <th class="text-right">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $k=> $v)
                                <tr>
                                    <th scope="row">{{ $v->id }}</th>
                                    <td>{{ $v->name }}</td>
                                    <td>{{ $v->email }}</td>
                                    <td>{{ $v->created_at }}</td>
                                    <td class="text-right">
                                        <form action="/backend/user/{{ $v->id }}" method="POST" class="btn_form btn-delete-form">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <button type="submit" class="btn btn-danger">
                                                <em class="fa fa-remove" aria-hidden="true"></em>
                                                删除
                                            </button>
                                        </form>
                                        <form action="/backend/user/{{$v->id}}/edit" method="get" class="btn_form">
                                            <button type="submit" class="btn btn-info">
                                                <em class="fa fa-pencil-square-o" aria-hidden="true"></em>
                                                修改
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

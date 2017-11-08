@extends('backend.app')
@section('adminjs')
    <script>
     $(function(){
         $('.btn-delete-form').submit(function(){
             return confirm('是否删除该导航，此操作不可逆，请谨慎处理！');
         })
     })
    </script>
@endsection

@section('content')
    <div class="content-wrapper clearfix">
        <h3>导航管理</h3>
        <div class="col-xs-12">
            {!! Notification::showAll() !!}
            <div class="text-left">
                <a class="mb-sm btn btn-success" href="{{ URL::route('backend.nav.create')}}">添加导航</a>
            </div>
            <div class="panel panel-default">
                <div class="table-response">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>名称</th>
                                <th>地址</th>
                                <th>创建时间</th>
                                <th class="text-right">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $k=> $v)
                                <tr>
                                    <th scope="row">{{ $v->id }}</th>
                                    <td>{{ $v->name }}</td>
                                    <td>{{ $v->url }}</td>
                                    <td>{{ $v->created_at }}</td>
                                    <td class="text-right">
                                        <form action="/backend/nav/{{$v->id}}" method="post" class="btn_form btn-delete-form">
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                            <button type="submit" class="btn btn-danger">
                                                <em class="fa fa-remove" aria-hidden="true"></em>
                                                删除
                                            </button>
                                        </form>
                                        <form action="/backend/nav/{{$v->id}}/edit" method="get" class="btn_form">
                                            <button type="submit" class="btn btn-info">
                                                <em class="fa fa-pencil-square-o"></em>修改
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.app')

@section('adminjs')
    <script>
     $(function(){
         $('.btn-delete-form').submit(function(){
             return confirm('是否删除该链接，此操作不可逆，请谨慎处理！');
         })
     })
    </script>
@endsection

@section('content')
    <div class="content-wrapper clearfix">
        <h3>友情链接</h3>
        <div class="col-xs-12">
            {!! Notification::showAll() !!}
            <div class="">
                <a class="mb-sm btn btn-success" href="{{ URL::route('backend.links.create')}}">添加链接</a>
            </div>
            <div class="panel panel-default">
                <div class="table-response">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>名称</th>
                                <th>地址</th>
                                <th>排序</th>
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
                                    <td>{{ $v->sequence }}</td>
                                    <td>{{ $v->created_at }}</td>
                                    <td class="text-right">
                                        {!! Form::open([
                                            'route' => array('backend.links.destroy', $v->id),'method' => 'delete','class'=>'btn_form btn-delete-form' ]) !!}

                                        <button type="submit" class="btn btn-danger">
                                            <em class="fa fa-remove"></em>
                                            删除
                                        </button>
                                        {!! Form::close() !!}
                                        {!! Form::open([
                                            'route' => array('backend.links.edit', $v->id),'method' => 'get','class'=>'btn_form']) !!}
                                        <button type="submit" class="btn btn-info">
                                            <em class="fa fa-pencil-square-o" aria-hidden="true"></em>
                                            修改
                                        </button>
                                        {!! Form::close() !!}

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

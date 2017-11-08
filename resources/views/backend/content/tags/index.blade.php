@extends('backend.app')

@section('adminjs')
    <script>
     $(function(){
         $('.btn-delete-form').submit(function(){
             return confirm('是否删除该标签，此操作不可逆，请谨慎处理！');
         })
     })
    </script>
@endsection

@section('content')
    <div class="content-wrapper clearfix">
        <h3>标签管理</h3>
        <div class="col-sm-12">
            {!! Notification::showAll() !!}
            <div class="text-left">
                <a class="mb-sm btn btn-success" href="{{ URL::route('backend.tags.create')}}">添加标签</a>
            </div>
            <div class="panel panel-default">
                <div class="table-response">
                    <table class="table table-striped table-bordered table-hove">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>标签名</th>
                                <th>引用次数</th>
                                <th class="text-right">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $k=> $v)
                                <tr>
                                    <th scope="row">{{ $v->id }}</th>
                                    <td>{{ $v->name }}</td>
                                    <td>{{ $v->number }}</td>
                                    <td class="text-right">
                                        {!! Form::open([
                                            'route' => array('backend.tags.destroy', $v->id),'method' => 'delete','class'=>'btn_form btn-delete-form']) !!}

                                        <button type="submit" class="btn btn-danger">
                                            <em class="fa fa-remove"></em>删除
                                        </button>
                                        {!! Form::close() !!}
                                        {!! Form::open(['route' => array('backend.tags.edit', $v->id),'method' => 'get','class'=>'btn_form']) !!}
                                        <button type="submit" class="btn btn-info">
                                            <em class="fa fa-pencil-square-o"></em>修改
                                        </button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $tags->render() !!}
            </div>
        </div>
@endsection

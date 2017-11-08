@extends('backend.app')

@section('adminjs')
    <script>
     $(function(){
         $('.btn-delete-form').submit(function(){
             return confirm('是否删除该文章，此操作不可逆，请谨慎处理！');
         })
     })
    </script>
@endsection

@section('content')
    <div class="content-wrapper clearfix">
        <h3>文章管理</h3>
        {!! Notification::showAll() !!}
        <div class="col-xs-12">
            <div class="text-left">
                <a class="mb-sm btn btn-info" href="{{ URL::route('backend.article.create')}}">写文章</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">文章列表</div>
                <div class="table-response">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>所属分类</th>
                                <th>作者</th>
                                <th>游览次数</th>
                                <th>创建时间</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($article as $k=> $v)
                                <tr>
                                    <th scope="row">{{ $v->id }}</th>
                                    <td><a href="{{asset('article/'.$v->id)}}" target="_blank">{{ $v->title }}</a></td>
                                    <td>{{ App\Model\Category::getCategoryNameByCatId($v->cate_id) }}</td>
                                    <td>{{ App\User::getUserNameByUserId($v->user_id) }}</td>
                                    <td>{{ $v->status->view_number }}</td>
                                    <td>{{ $v->created_at }}</td>
                                    <td class="text-right">
                                        {!! Form::open([
                                            'route' => array('backend.article.destroy', $v->id),
                                                'method' => 'delete',
                                                'class'=>'btn_form btn-delete-form'
                                            ]) !!}

                                        <button type="submit" class="btn btn-danger btn-delete">
                                            <em class="fa fa-remove"></em>
                                            删除
                                        </button>

                                        {!! Form::close() !!}

                                        {!! Form::open([
                                            'route' => array('backend.article.edit', $v->id),
                                                'method' => 'get',
                                                'class'=>'btn_form'
                                            ]) !!}

                                        <button type="submit" class="btn btn-info">
                                            <em class="fa fa-pencil-square-o"></em>
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
            <div class="text-center">
                {!! $article->render() !!}
            </div>
        </div>
    </div>
@endsection

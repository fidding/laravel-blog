@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>网站信息</h3>
        <div class="col-xs-12">
            {!! Notification::showAll() !!}
            <div class="text-left">
                <a class="mb-sm btn btn-success" href="{{ url('/backend/system/create') }}">创建设置</a>
            </div>
            <div class="panel panel-default clearfix">
                <form action="{{ url('backend/system/store')}}" method="post" class="" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="table-response">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>名称</th>
                                    <th>值</th>
                                    <th class="text-right">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($system as $k=> $v)
                                    <tr>
                                        <th scope="row">{{ $v->id }}</th>
                                        <td>
                                            {{Lang::get('backend_config.'.$v->system_name)}}
                                        </td>
                                        <td>
                                            {!! Form::text('system['.$v->system_name.']', $v->system_value, ['class' => 'form-control']) !!}
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ url('/backend/system/delete',['id'=>$v->id]) }}" class="btn btn-danger" >
                                                <em class="fa fa-remove"></em>删除
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mt ml btn btn-success">
                            保存
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

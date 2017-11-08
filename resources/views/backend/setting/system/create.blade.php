@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>创建信息</h3>
        <div class="col-md-10 col-xs-12">
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
                    <form action="{{ url('backend/system/create')}}" method="post" class="" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="cate">分类</label>
                            <div class="">
                                <select name="cate" class="form-control">
                                    @foreach (App\Model\System::$cate as $k => $c)
                                        <option value="{{$k}}">{{$c}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="system_name">代码</label>
                            <div class="">
                                <input type="text" name="system_name" class="form-control" placeholder="code" />
                                <font color="red">{{ $errors->first('system_name') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="system_value">值</label>
                            <div>
                                <input type="text" name="system_value" class="form-control" placeholder="system_value" />
                                <font color="red">{{ $errors->first('system_value') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="submit"  value="创建" class="btn btn-success" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

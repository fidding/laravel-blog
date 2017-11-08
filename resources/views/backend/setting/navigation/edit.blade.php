@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>修改导航</h3>
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
                    <form action="/backend/nav/{{$nav->id}}" method="post" class="">
                        <input type="hidden" name="_method" value="put"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label for="sequence">排序</label>
                        <div class="">
                            <input type="text" name="sequence" value="{{$nav->sequence?$nav->sequence:''}}" placeholder="sequence" class="form-control" />
                            <font color="red">{{ $errors->first('sequence') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name"">导航名称</label>
                        <div class="">
                            <input type="text" name="name" value="{{$nav->name?$nav->name:''}}" placeholder="name" class="form-control" />
                            <font color="red">{{ $errors->first('name') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url">链接地址</label>
                        <div>
                            <input type="text" name="url" value="{{$nav->url?$nav->url:''}}" placeholder="/about" class="form-control" />
                            <font color="red">{{ $errors->first('url') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <input type="submit" value="修改" class="btn btn-success">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

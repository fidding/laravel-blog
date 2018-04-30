@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>创建分类</h3>
        <div class="col-sm-12">
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
                    <form action="/backend/cate" method="post" class="cate-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="parent_id">上级分类</label>
                            <div class="">
                                <select name="parent_id" class="form-control">
                                    @foreach ($catArr as $k => $v)
                                        <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cate_name">分类名称</label>
                            <div class="">
                                <input type="text" name="cate_name" class="form-control" placeholder="category_name">
                                <font color="red">{{ $errors->first('cate_name') }}</font>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="as_name">英文别名</label>
                            <div class="">
                                <input type="text" name="as_name" class="form-control" placeholder="as_name">
                                <font color="red">{{ $errors->first('as_name') }}</font>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="seo_title">seo 标题</label>
                            <div class="">
                                <input type="text" name="seo_title" class="form-control" placeholder="seo_title">
                                <font color="red">{{ $errors->first('seo_title') }}</font>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="seo_key">seo 关键字</label>
                            <div>
                                <input type="text" name="seo_key" class="form-control" placeholder="seo_key">
                                <font color="red">{{ $errors->first('seo_key') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="seo_desc">seo 描述</label>
                            <div>
                                <input type="text" name="seo_desc" class="form-control" placeholder="seo_desc">
                                <font color="red">{{ $errors->first('seo_desc') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input type="submit" value="创建" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

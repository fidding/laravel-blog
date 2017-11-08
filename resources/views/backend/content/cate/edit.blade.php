@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>修改分类</h3>
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
                    {!! Form::model($cate, ['route' => ['backend.cate.update', $cate->id], 'method' => 'put','class'=>'']) !!}
                    <div class="form-group">
                        <label for="parent_id" class="">上级分类</label>
                        <div class="">
                            {!! Form::select('parent_id', App\Model\Category::getCategoryTree() , $cate->parent_id , ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cate_name">分类名称</label>
                        <div class="">
                            {!! Form::text('cate_name', $cate->cate_name, ['class' => 'form-control','placeholder'=>'category_name']) !!}
                            <font color="red">{{ $errors->first('cate_name') }}</font>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="as_name">别名</label>
                        <div>
                            {!! Form::text('as_name', $cate->as_name, ['class' => 'form-control','placeholder'=>'as_name']) !!}
                            <font color="red">{{ $errors->first('as_name') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="seo_title">seo 标题</label>
                        <div>
                            {!! Form::text('seo_title', $cate->seo_title, ['class' => 'form-control','placeholder'=>'seo_title']) !!}
                            <font color="red">{{ $errors->first('seo_title') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="seo_key">seo 关键字</label>
                        <div class="">
                            {!! Form::text('seo_key', $cate->seo_key, ['class' => 'form-control','placeholder'=>'seo_key']) !!}
                            <font color="red">{{ $errors->first('seo_key') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="seo_desc">seo 描述</label>
                        <div class="">
                            {!! Form::textarea('seo_desc', $cate->seo_desc, ['class' => 'form-control']) !!}
                            <font color="red">{{ $errors->first('seo_desc') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('修改', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

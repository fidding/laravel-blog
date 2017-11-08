@extends('backend.app')

@section('content')
    <!-- Tokenfield CSS -->
    <link href="{{ asset('/plugin/tags/css/bootstrap-tokenfield.css') }}" type="text/css" rel="stylesheet">
    <div class="content-wrapper clearfix">
        <h3>编写文章</h3>
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
                    {!! Form::open(['route' => 'backend.article.store', 'method' => 'post','class'=>'','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        <label for="title">标题</label>
                        {!! Form::text('title', '', ['class' => 'form-control','placeholder'=>'标题']) !!}
                        <font color="red">{{ $errors->first('title') }}</font>
                    </div>

                    <div class="form-group">
                        <label for="cate_id" class="">所属分类</label>
                        <div class="">
                            {!! Form::select('cate_id', $catArr , null , ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tags" class="">标签</label>
                        <div class="">
                            {!! Form::text('tags', '', ['class' => 'form-control','placeholder'=>'回车确定','id'=>'tags']) !!}
                            <font color="red">{{ $errors->first('tags') }}</font>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="pic" class="">封面图</label>
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                {!! Form::file('pic') !!}
                            </div>
                            <font color="red">{{ $errors->first('pic') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="">内容</label>
                        <div class="editor">
                            @include('editor::head')
                            {!! Form::textarea('content', '', ['class' => 'form-control','id'=>'myEditor']) !!}
                            <font color="red">{{ $errors->first('content') }}</font>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            {!! Form::submit('创建', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{ asset('/plugin/tags/bootstrap-tokenfield.js ') }}" charset="UTF-8"></script>

    <script type="text/javascript">
     $('#tags').tokenfield({
         autocomplete: {
             source: <?php echo  \App\Model\Tag::getTagStringAll()?>,
             delay: 100
         },
         showAutocompleteOnFocus: !0,
         delimiter: [","]
     })
    </script>
@endsection

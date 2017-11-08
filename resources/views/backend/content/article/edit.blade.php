@extends('backend.app')

@section('content')
    <!-- Tokenfield CSS -->
    <link href="{{ asset('/plugin/tags/css/bootstrap-tokenfield.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/plugin/tags/css/jquery-ui.css ') }}" type="text/css" rel="stylesheet">
    <div class="content-wrapper clearfix">
        <h3>编辑文章</h3>
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
                    {!! Form::model($article, ['route' => ['backend.article.update', $article->id], 'method' => 'put','class'=>'','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        <label for="title" class="">标题</label>
                        <div class="">
                            {!! Form::text('title', $article->title, ['class' => 'form-control','placeholder'=>'title']) !!}
                            <font color="red">{{ $errors->first('title') }}</font>
                        </div>
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
                            {!! Form::file('pic') !!}
                            <font color="red">{{ $errors->first('pic') }}</font>
                            @if(!empty($article->pic))
                                <img  src="{{ asset('/uploads').'/'.$article->pic }}" width="300px" height="100"/>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">内容</label>
                        <div class="">
                            <div class="editor">
                                @include('editor::head')
                                {!! Form::textarea('content', $article->content, ['class' => 'form-control','id'=>'myEditor']) !!}
                            </div>
                            <font color="red">{{ $errors->first('content') }}</font>
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
    <script type="text/javascript" src="{{ asset('/plugin/tags/jquery-ui.js ') }}"></script>
    <script type="text/javascript" src="{{ asset('/plugin/tags/bootstrap-tokenfield.js ') }}" charset="UTF-8"></script>

    <script type="text/javascript">
     $('#tags').tokenfield({
         autocomplete: {
             source: <?php echo  \App\Model\Tag::getTagStringAll()?>,
             delay: 100

         },
         showAutocompleteOnFocus: !0,
         delimiter: [","],
         tokens: <?php echo  \App\Model\Tag::getTagStringByTagIds($article->tags)?>
     })
    </script>
@endsection

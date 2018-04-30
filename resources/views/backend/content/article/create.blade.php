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
                    <form action="/backend/article" method="post" class="article-form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="title">标题</label>
                            <input type="text" name="title" class="form-control" placeholder="标题">
                            <font color="red">{{ $errors->first('title') }}</font>
                    </div>
                    <div class="form-group">
                        <label for="cate_id" class="">所属分类</label>
                        <div class="">
                            <select name="cate_id" class="form-control">
                                @foreach ($catArr as $k => $v)
                                    <option value="{{$k}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tags" class="">标签</label>
                        <div class="">
                            <input type="text" name="tags" class="form-control" placeholder="回车确定" id="tags">
                            <font color="red">{{ $errors->first('tags') }}</font>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="pic" class="">封面图</label>
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <input type="file" name="pic" />
                            </div>
                            <font color="red">{{ $errors->first('pic') }}</font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="">内容</label>
                        <div class="editor">
                            @include('editor::head')
                            <textarea name="content" class="form-control" id="myEditor"></textarea>
                            <font color="red">{{ $errors->first('content') }}</font>
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

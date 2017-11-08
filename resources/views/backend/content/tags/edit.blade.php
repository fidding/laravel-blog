@extends('backend.app')

@section('content')
    <div class="content-wrapper clearfix">
        <h3>修改标签</h3>
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
                    {!! Form::model($tag, ['route' => ['backend.tags.update', $tag->id], 'method' => 'put','class'=>'']) !!}
                    <div class="form-group">
                        <label for="name">标签名</label>
                        <div class="">
                            {!! Form::text('name', $tag->name, ['class' => 'form-control','placeholder'=>'Tag Name']) !!}
                            <font color="red">{{ $errors->first('name') }}</font>
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

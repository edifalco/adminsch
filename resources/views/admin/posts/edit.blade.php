@extends('layouts.master')

@section('title', 'Edit Post')

@section('content_header')
  <h1>
    Edit or Delete Post
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Post</li>
  </ol>
@stop

@section('content')
    @include('includes.tinyeditor')

    <div class="row">
        
        <div class="col-sm-3">
            <img class="img-responsive" src="{{ $post->photo ? $post->photo->file : "/images/place_holder.jpg" }}" alt="">
        </div>
        
        <div class="col-sm-9">
            <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Category</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Content:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>20]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category:') !!}
                        {!! Form::select('category_id', [''=>'Choose a category'] + $categories , null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Post', ['class'=>'btn btn-primary pull-left']) !!}
                    </div>
                {!! Form::close() !!}
                
                {!! Form::model($post, ['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger pull-right']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
        </div>
    </div>
    
    <div class="row">
        @include('includes.form_errors')
    </div>
    
@endsection
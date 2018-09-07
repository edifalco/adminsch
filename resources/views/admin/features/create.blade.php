@extends('layouts.master')

@section('title', 'Create Feature')

@section('content_header')
  <h1>
    Create Feature
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Feature</li>
  </ol>
@stop

@section('content')
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Create New Feature</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
    
        {!! Form::open(['method'=>'POST', 'action'=>'FeaturesController@store', 'files'=>true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>3]) !!}
            </div>
            <div class="form-group">
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Feature', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
        </div>
    
    @include('includes.form_errors')
    
@endsection

@section('scripts')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
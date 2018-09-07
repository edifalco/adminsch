@extends('layouts.master')

@section('title', 'Create Subfeature')

@section('content_header')
  <h1>
    Create Subfeature
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Subfeature</li>
  </ol>
@stop

@section('content')
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Create New Subfeature</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
    
        {!! Form::open(['method'=>'POST', 'action'=>'SubfeaturesController@store', 'files'=>true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('feature_id', 'Feature:') !!}
                {!! Form::select('feature_id', [''=>'Choose a feature'] + $features , null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('order', 'Order:') !!}
                {!! Form::number('order', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Subfeature', ['class'=>'btn btn-primary']) !!}
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
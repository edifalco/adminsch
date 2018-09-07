@extends('layouts.master')

@section('title', 'Edit Categories')

@section('content_header')
  <h1>
    Edit or Delete Categories
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Categories</li>
  </ol>
@stop

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id], 'files'=>true]) !!}
            {{ csrf_field() }}
            
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update Category', ['class'=>'btn btn-primary pull-left']) !!}

            </div>
        {!! Form::close() !!}
        
        {!! Form::model($category, ['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
            {{ csrf_field() }}

                <div class="form-group">
                    {!! Form::submit('Delete Category', ['class'=>'btn btn-danger pull-right']) !!}
                </div>

        {!! Form::close() !!}
            </div>
@endsection
@extends('layouts.master')

@section('title', 'Edit Subfeature')

@section('content_header')
  <h1>
    Edit or Delete Subfeature
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Subfeature</li>
  </ol>
@stop

@section('content')
    @include('includes.tinyeditor')

    <div class="row">
        
        <div class="col-sm-3">
            <img class="img-responsive" src="{{ $subfeature->photo ? $subfeature->photo->file : "/images/place_holder.jpg" }}" alt="">
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
                {!! Form::model($subfeature, ['method'=>'PATCH', 'action'=>['SubfeaturesController@update', $subfeature->id], 'files'=>true]) !!}
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
                        {!! Form::text('order', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>5]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Subfeature', ['class'=>'btn btn-primary pull-left']) !!}
                    </div>
                {!! Form::close() !!}
                
                {!! Form::model($subfeature, ['method'=>'DELETE', 'action'=>['SubfeaturesController@destroy', $subfeature->id]]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::submit('Delete Subfeature', ['class'=>'btn btn-danger pull-right']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
        </div>
    </div>
    
    <div class="row">
        @include('includes.form_errors')
    </div>
    
@endsection
@extends('layouts.master')

@section('title', 'Edit Feature')

@section('content_header')
  <h1>
    Edit or Delete Feature
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Feature</li>
  </ol>
@stop

@section('content')
    @include('includes.tinyeditor')

    <div class="row">
        
        <div class="col-sm-3">
            <img class="img-responsive" src="{{ $feature->photo ? $feature->photo->file : "/images/place_holder.jpg" }}" alt="">
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
                {!! Form::model($feature, ['method'=>'PATCH', 'action'=>['FeaturesController@update', $feature->id], 'files'=>true]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::textarea('content', null, ['class'=>'form-control', 'row'=>3]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Feature', ['class'=>'btn btn-primary pull-left']) !!}
                    </div>
                {!! Form::close() !!}
                
                {!! Form::model($feature, ['method'=>'DELETE', 'action'=>['FeaturesController@destroy', $feature->id]]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::submit('Delete Feature', ['class'=>'btn btn-danger pull-right']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
        </div>
    </div>
    
    <div class="row">
        @include('includes.form_errors')
    </div>
    
@endsection
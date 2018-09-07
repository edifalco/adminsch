@extends('layouts.master')

@section('title', 'Categories')

@section('content_header')
  <h1>
    Categories
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Categories</li>
  </ol>
@stop

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-4">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store', 'files'=>true]) !!}
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">All Categories</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                    <th>Edit</th>
                </tr>
                    @if($categories)    
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                <td>{{ $category->updated_at->diffForHumans() }}</td>
                                <td><a href="{{ route('admin.categories.edit', $category->id) }}/">Edit</a></td>
                            </tr>
                        @endforeach
                    @endif
              </tbody></table>
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>
@endsection

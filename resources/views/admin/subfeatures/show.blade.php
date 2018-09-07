@extends('layouts.master')

@section('title', 'All Subfeatures')

@section('content_header')
  <h1 class="inline-block">All Subfeatures</h1>
  
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All Subfeatures</li>
  </ol>
@stop

@section('content')
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">All Subfeatures</h3>
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
            @if(count($subfeatures) > 0)
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Photo</th>
                    <th>Author</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                    <th>Feature Title</th>
                    <th>Order</th>
                    <th>Show Feature</th>
                    <th>Publish/Unpublish</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($subfeatures as $subfeature)
                        <tr>
                            <td>{{ $subfeature->id }}</td>
                            <td>{{ str_limit($subfeature->title, 50) }}</td>
                            <td>{{ str_limit($subfeature->body, 50) }}</td>
                            <td><img width="50px" src="{{ $subfeature->photo ? $subfeature->photo->file : "/images/place_holder.jpg" }}" alt=""></td>
                            <td>{{ $subfeature->author ? $subfeature->author : "subfeature has no author" }}</td>
                            <td>{{ $subfeature->created_at->diffForHumans() }}</td>
                            <td>{{ $subfeature->updated_at->diffForHumans() }}</td>
                            <td>{{ $subfeature->feature ? $subfeature->feature->title : "Feature has no title" }}</td>
                            <td>{{ $subfeature->order }}</td>
                            <td><a target="_blank" href="{{ route('home.feature', $subfeature->feature_id) }}/">Show</a></td>
                            <td>
                                @if($subfeature->is_active == 1)
                                    {!! Form::open(['method'=>'PATCH', 'action'=>['SubfeaturesController@update', $subfeature->id]]) !!}
                                        {{ csrf_field() }}
                                        <input type="hidden" name="is_active" value="0">
                                        <div class="form-group">
                                            {!! Form::submit('Unpublish', ['class'=>'btn-sm btn-info']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['method'=>'PATCH', 'action'=>['SubfeaturesController@update', $subfeature->id]]) !!}
                                        {{ csrf_field() }}
                                        <input type="hidden" name="is_active" value="1">
                                        <div class="form-group">
                                            {!! Form::submit('Publish', ['class'=>'btn-sm btn-info']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                @endif
                            </td>
                            <td><a href="{{ route('admin.subfeatures.edit', $subfeature->id) }}/">Edit</a></td>
                            <td>
                                {!! Form::model($subfeature, ['method'=>'DELETE', 'action'=>['SubfeaturesController@destroy', $subfeature->id]]) !!}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        {!! Form::submit('Delete', ['class'=>'btn-sm btn-danger']) !!}
                                    </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
    @else
        <p>There are no subfeatures.</p>
    @endif
    </div>

@endsection
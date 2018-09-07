@extends('layouts.master')

@section('title', 'Dashboard')

@section('content_header')
  <h1>
    All Features
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All Features</li>
  </ol>
@stop

@section('content')

    @if(Session::has('feature_deleted'))
        <p class="alert alert-success alert-dismissible"><strong>Success!</strong> {{ session('feature_deleted') }}</p>
    @endif
    @if(Session::has('feature_updated'))
        <p class="alert alert-success alert-dismissible"><strong>Success!</strong> {{ session('feature_updated') }}</p>
    @endif
    
    <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">All Features</h3>

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
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Owner</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                    <th>View</th>
                    <th>View Subfeatures</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                    @if($features)    
                        @foreach($features as $feature)
                            <tr>
                                <td>{{ $feature->id }}</td>
                                <td><img width="150px" src="{{ $feature->photo ? $feature->photo->file : "/images/place_holder.jpg" }}" alt=""></td>
                                <td>{{ str_limit( $feature->title, 30) }}</td>
                                <td>{{ str_limit( $feature->content, 70) }}</td>
                                <td>{{ $feature->user ? $feature->user->name : "Feature has no user" }}</td>
                                <td>{{ $feature->created_at->diffForHumans() }}</td>
                                <td>{{ $feature->updated_at->diffForHumans() }}</td>
                                <td><a target="_blank" href="{{ route('home.feature', $feature->slug) }}/">Show</a></td>
                                <td><a href="{{ route('admin.subfeatures.show', $feature->id) }}/">Show</a></td>
                                <td><a href="{{ route('admin.features.edit', $feature->id) }}/">Edit</a></td>
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
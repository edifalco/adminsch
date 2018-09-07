@extends('layouts.master')

@section('title', 'Users')

@section('content_header')
  <h1>
    All Users
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All Users</li>
  </ol>
@stop

@section('content')
    @if(Session::has('user_deleted'))
        <p class="alert alert-success"><strong>Success!</strong> {{ session('user_deleted') }}</p>
    @endif

    <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">All Users</h3>

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
        @if(count($users) > 0)
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                    @if($users)    
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><img width="50px" src="{{ $user->photo ? $user->photo->file : "/images/place_holder.jpg" }}" alt=""></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role ? $user->role->name : "User has no role" }}</td>
                                <td>{{ $user->is_active == 1 ? "Active" : "Not Active" }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>{{ $user->updated_at->diffForHumans() }}</td>
                                <td><a href="{{ route('admin.users.edit', $user->id) }}/">Edit</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>
              <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
            @endif
        </div>
        
@endsection
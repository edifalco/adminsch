@extends('layouts.master')

@section('title', 'Dashboard')

@section('content_header')
  <h1>
    All Messages
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All Messages</li>
  </ol>
@stop

@section('content')

    @if(Session::has('message_deleted'))
        <p class="alert alert-success alert-dismissible"><strong>Success!</strong> {{ session('message_deleted') }}</p>
    @endif
    @if(Session::has('message_updated'))
        <p class="alert alert-success alert-dismissible"><strong>Success!</strong> {{ session('message_updated') }}</p>
    @endif
    
    <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">All Messages</h3>

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
                    <th>Email</th>
                    <th>School</th>
                    <th>Website</th>
                    <th>Message</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                    @if($messages)    
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->school }}</td>
                                <td>{{ $message->website }}</td>
                                <td>{{ str_limit($message->message, 100) }}</td>
                                <td>{{ $message->created_at->diffForHumans() }}</td>
                                <td>{{ $message->updated_at->diffForHumans() }}</td>
                                <td><a href="{{ route('admin.messages.show', $message->id) }}/">Show</a></td>
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
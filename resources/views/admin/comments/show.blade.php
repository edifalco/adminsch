@extends('layouts.master')

@section('title', 'Show Comments')

@section('content_header')
  <h1>
    Show Comments
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Show Comments</li>
  </ol>
@stop

@section('content')
    
    @if(count($comments) > 0)
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Photo</th>
                <th>Content</th>
                <th>Created</th>
                <th>Last Updated</th>
                <th>Post</th>
                <th>Approve/Unaprove</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->author ? $comment->author : "comment has no author" }}</td>
                        <td><img width="50px" src="{{ $comment->photo ? $comment->photo : "/images/place_holder.jpg" }}" alt=""></td>
                        <td>{{ str_limit($comment->body, 50) }}</td>
                        <td>{{ $comment->created_at->diffForHumans() }}</td>
                        <td>{{ $comment->updated_at->diffForHumans() }}</td>
                        <td><a target="_blank" href="{{ route('home.post', $comment->post_id) }}/">Show</a></td>
                        <td>
                            @if($comment->is_active == 1)
                                {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="0">
                                    <div class="form-group">
                                        {!! Form::submit('Unaprove', ['class'=>'btn-sm btn-info']) !!}
                                    </div>
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="1">
                                    <div class="form-group">
                                        {!! Form::submit('Approve', ['class'=>'btn-sm btn-info']) !!}
                                    </div>
                                {!! Form::close() !!}
                            @endif
                        </td>
                        <td><a href="{{ route('admin.comments.edit', $comment->id) }}/">Edit</a></td>
                        <td>
                            {!! Form::model($comment, ['method'=>'DELETE', 'action'=>['PostCommentsController@destroy', $comment->id]]) !!}
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
    @else
        <p>There are no comments.</p>
    @endif

@endsection
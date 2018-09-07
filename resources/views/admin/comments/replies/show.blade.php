@extends('layouts.master')

@section('content')

    <h1>Replies</h1>
    
    @if(count($replies) > 0)
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
                @foreach($replies as $reply)
                    <tr>
                        <td>{{ $reply->id }}</td>
                        <td>{{ $reply->author ? $reply->author : "reply has no author" }}</td>
                        <td><img width="50px" src="{{ $reply->photo ? $reply->photo : "/images/place_holder.jpg" }}" alt=""></td>
                        <td>{{ str_limit($reply->body, 50) }}</td>
                        <td>{{ $reply->created_at->diffForHumans() }}</td>
                        <td>{{ $reply->updated_at->diffForHumans() }}</td>
                        <td><a target="_blank" href="{{ route('home.post', $reply->comment->post->id) }}/">Show</a></td>
                        <td>
                            @if($reply->is_active == 1)
                                {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="0">
                                    <div class="form-group">
                                        {!! Form::submit('Unaprove', ['class'=>'btn-sm btn-info']) !!}
                                    </div>
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="is_active" value="1">
                                    <div class="form-group">
                                        {!! Form::submit('Approve', ['class'=>'btn-sm btn-info']) !!}
                                    </div>
                                {!! Form::close() !!}
                            @endif
                        </td>
                        <td><a href="{{ route('admin.comments.edit', $reply->id) }}/">Edit</a></td>
                        <td>
                            {!! Form::model($reply, ['method'=>'DELETE', 'action'=>['CommentRepliesController@destroy', $reply->id]]) !!}
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
        <p>There are no replies.</p>
    @endif

@endsection
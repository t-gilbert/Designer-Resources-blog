@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="spacer">
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="text-center">
    <h1>{{$post->title}}</h1>
    <h3>{!!$post->sub_info!!}</h3>
    <div class="post_img">
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
  </div>
    <br><br>
        {!!$post->body!!}
    <hr>

    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
      </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            </div>
          </div>
        @endif
    @endif

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
      <h2 class="text-center">Recent Posts From Designers</h2>
    @if(count($posts) > 0)
        @foreach($posts as $post)
                <div class="row">
                  <div class="col-md-6 spacer">
                    <small>Written on {{$post->created_at}}
 by <span class="glyphicon glyphicon-user"></span> {{$post->user->name}}</small>
                      <h3>{{$post->title}}</h3>
                      {!!$post->sub_info!!}
                          <a href="/posts/{{$post->id}}">Read More</a>
                  </div>

                    <div class="col-md-6 spacer">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                </div>

        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
  </div>
  <!-- footer that is in the inc folder -->
    @include('inc.footer')
@endsection

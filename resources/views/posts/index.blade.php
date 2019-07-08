@extends('layouts.app')

@section('content')
<h1>Posts</h1>

@if(count($posts) > 0)

  @foreach($posts as $post)
  <div class="card card-body bg-lights">
    <div class="row">
      <div class="col-md-2 col-sm-2"></div>

      <div class="col-md-4 col-sm-4">
        <img style="width:200px;" src="/storage/cover_images/{{$post->cover_image}}">
      </div>

        <div class="col-md-4 col-sm-4">
          <h3><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h3>
          <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
        </div>

        <div class="col-md-2 col-sm-2"></div>
    </div>
  </div>
  @endforeach
  {{ $posts->links()}}
  @else
    <p>No posts found</p>
@endif

@endsection

@extends('layouts.app')

@section('content')
<a class="btn btn-info" href="/posts">Go Back</a>

<h1>{{ $post->title}}</h1>
<img style="width:25%;margin-bottom:1%;" src="/storage/cover_images/{{$post->cover_image}}">
<br><br>
<div>
  {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
<hr>
@if(!Auth::guest())
  @if(Auth::user()->id == $post->user_id)
<a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a>

{{-- Delete post --}}
{!! Form::open([
  'action'=> ['PostController@destroy', $post->id],
  'method' => 'POST',
  'class' => 'pull-right'
]) !!}
{{Form::hidden('_method','DELETE')}}

{{Form::submit('Delete', [
  'class' => 'btn btn-danger',
  ])}}
{!! Form::close() !!}
@endif
@endif
@endsection

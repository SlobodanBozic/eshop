@extends('layouts.dashboard')

@section('content')

<main class="page-content">
  <div class="container-fluid">

<h2>{{ $product->title}}</h2>
<hr>
<img style="width:25%;margin-bottom:1%;" src="/storage/cover_images/{{$product->cover_image}}">
<br><br>
<div>
  {!!$product->description!!}
</div>
<hr>
<small>Written on {{$product->created_at}} by <b>{{$product->user->name}}</b></small>
<hr>
@if(!Auth::guest())
  @if(Auth::user()->id == $product->user_id)
<a class="btn btn-primary" href="/products/{{$product->id}}/edit">Edit</a>

{{-- Delete post --}}
{!! Form::open([
  'action'=> ['PostController@destroy', $product->id],
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
</div>
<a class="btn btn-info" href="/dashboard">Go Back</a>
</main>
@endsection

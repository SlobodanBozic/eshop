@extends('layouts.dashboard')

@section('content')
  <main class="page-content">
    <a class="btn btn-info" href="/dashboard">Go Back</a>
    <div class="container-fluid">
  <h1>{{ $product->title}}</h1>

{!! Form::open(['action' => ['ProductController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', $product->title, [
    'class' => 'form-control',
    'placeholder' => 'Title'
    ])}}
</div>

<div class="form-group">
  {{Form::label('body', 'Body')}}
  {{Form::textarea('body', $product->description, [
    'id' => 'article-ckeditor',
    'class' => 'form-control',
    'placeholder' => 'Body Text'
    ])}}
</div>

{{-- Edit image --}}
<div class="form-group">
{{ Form::file('cover_image')}}
</div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Update', [
  'class' => 'btn btn-primary'
  ])}}
{!! Form::close() !!}

</div>
</main>
@endsection

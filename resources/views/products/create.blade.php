@extends('layouts.dashboard')

@section('content')
  <main class="page-content">
    <div class="container-fluid">
      <h2>Create New Product</h2>
      <hr>
        <div class="row">
        {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', '', [
            'class' => 'form-control',
            'placeholder' => 'Title'
            ])}}
        </div>

        <div class="form-group">
          {{Form::label('description', 'Description')}}
          {{Form::textarea('description', '', [
            'id' => 'article-ckeditor',
            'class' => 'form-control',
            'placeholder' => 'Description Text'
            ])}}
        </div>

        <div class="form-group">
          {{Form::label('list_price', 'List Price')}}
          {{Form::text('list_price', '', [
            'class' => 'form-control',
            'placeholder' => 'List Price'
            ])}}
        </div>

        <div class="form-group">
          {{Form::label('price', 'Price')}}
          {{Form::text('price', '', [
            'class' => 'form-control',
            'placeholder' => 'Price'
            ])}}
        </div>

        <div class="form-group">
        {{ Form::file('cover_image')}}
        </div>


        {{Form::submit('Submit', [
          'class' => 'btn btn-primary'
          ])}}
        {!! Form::close() !!}
      </div>

    </div>
  </main>

@endsection

@section('editor-scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script> CKEDITOR.replace( "article-ckeditor" )</script>
@endsection

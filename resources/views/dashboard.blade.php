
@extends('layouts.dashboard')

{{-- @section('content')
  <main class="page-content">
    <div class="container-fluid">
      <h2>Products</h2>
      <hr>
      <div class="row">

      </div>
      <h5>More templates</h5>
      <hr>
        <div class="row">

      </div>
    </div>
  </main>
@endsection --}}

@section('content')
  <main class="page-content">
    <div class="container-fluid">
      <h2>Products</h2>
      <hr>
<div class="row">
@if(count($products) > 0)

  <div class="col-md-12">
  @foreach($products as $product)
  <div class="card card-body bg-lights">
    <div class="row">
      <div class="col-md-2 col-sm-2"></div>

      <div class="col-md-4 col-sm-4">
        <img style="width:200px;" src="/storage/cover_images/{{$product->cover_image}}">
      </div>

        <div class="col-md-4 col-sm-4">
          <h3><a href="/products/{{$product->id}}">{{ $product->title}}</a></h3>
          <small>Written on {{$product->created_at}} by <b>{{$product->user->name}}</b></small>
        </div>

        <div class="col-md-2 col-sm-2"></div>
    </div>
  </div>
  @endforeach
  </div>
  {{-- {{ $products->links()}} --}}
  @else
    <p>No product found</p>
@endif
</div>
@endsection

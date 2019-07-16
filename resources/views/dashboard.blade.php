
@extends('layouts.dashboard')

@section('content')

  <main class="page-content">
    <article class="container">
      <h2>Published Products</h2>
      <hr>


  <div class="row card">
  <table class="table table-hover shopping-cart-wrap">
  <thead class="text-muted">
  <tr>
    <th scope="col">Product</th>
    <th scope="col" width="120">Quantity</th>
    <th scope="col" width="120">Price</th>
    <th scope="col" width="200" class="text-right">Action</th>
  </tr>
  </thead>

  <tbody>
  @if(count($products) > 0)
  @foreach($products as $product)
  <tr>
  	<td>

  <figure class="media">
  	<div class="img-wrap"><img src="/storage/product_images/{{$product->product_image}}" class="img-thumbnail img-sm"></div>
  	<figcaption class="media-body">
  		<h6 class="title text-truncate"><a href="/products/{{$product->id}}/edit">{{ $product->title}}</a></h6>
  		<dl class="param param-inline small">
  		  <dt>Color: </dt>
  		  <dd>{{$product->color}}</dd>
  		</dl>
      <dl class="param param-inline small">
        <dt>Published on: </dt>
        <dd>{{$product->created_at}} by <b>{{$product->user->name}}</dd>
      </dl>
  	</figcaption>
  </figure>
  	</td>
    <td>
  		<div class="price-wrap">
  			<var class="price">{{$product->price}} €</var>
  			<small class="text-muted">({{$product->price}} each)</small>
  		</div> <!-- price-wrap .// -->
  	</td>
  	<td>
  		<div class="price-wrap">
  			<var class="price">{{$product->price}} €</var>
  			<small class="text-muted">({{$product->price}} each)</small>
  		</div> <!-- price-wrap .// -->
  	</td>
  	<td class="text-right">
    <a href="/products/{{$product->id}}/edit" class="btn btn-outline-success float-left">Edit</a>
  	<a href="" class="btn btn-outline-danger float-right">Remove</a>
  	</td>
  </tr>
@endforeach


@else
  <p>No product found</p>
@endif
  </tbody>
  </table>
  </div> <!-- card.// -->

</article>



{{-- My order product --}}

<article class="container">
  <h2>Order products</h2>
  <hr>


<div class="row card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
<th scope="col">Product</th>
<th scope="col" width="120">Quantity</th>
<th scope="col" width="120">Price</th>
<th scope="col" width="200" class="text-right">Action</th>
</tr>
</thead>

<tbody>
@if(count($products) > 0)
@foreach($products as $product)
<tr>
<td>
<figure class="media">
<div class="img-wrap"><img src="/storage/product_images/{{$product->product_image}}" class="img-thumbnail img-sm"></div>
<figcaption class="media-body">
  <h6 class="title text-truncate"><a href="/products/{{$product->id}}">{{ $product->title}}</a></h6>
  <dl class="param param-inline small">
    <dt>Price: </dt>
    <dd>{{$product->price}}</dd>
  </dl>
  <dl class="param param-inline small">
    <dt>Color: </dt>
    <dd>{{$product->color}}</dd>
  </dl>
</figcaption>
</figure>
</td>
<td>
  <div class="price-wrap">
    <var class="price">{{$product->price}} €</var>
    <small class="text-muted">({{$product->price}} each)</small>
  </div> <!-- price-wrap .// -->
</td>
<td>
  <div class="price-wrap">
    <var class="price">{{$product->price}} €</var>
    <small class="text-muted">({{$product->price}} each)</small>
  </div> <!-- price-wrap .// -->
</td>
<td class="text-right">
<a href="/products/{{$product->id}}" class="btn btn-outline-success float-left">Show</a>
<a href="" class="btn btn-outline-danger float-right">Remove</a>
</td>
</tr>
@endforeach


@else
<p>No product found</p>
@endif
</tbody>
</table>
</div> <!-- card.// -->

</article>

  </main>


  {{-- <main class="page-content">
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
        <img style="width:200px;" src="/storage/product_images/{{$product->product_image}}">
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

  @else
    <p>No product found</p>
@endif
</div> --}}
@endsection

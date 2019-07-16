@extends('layouts.dashboard')

@section('content')
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
          <div class="card-header">
            <nav class="header-navigation">
              <a href="{{ url('/dashboard') }}" class="btn btn-link">Back to the list</a>

              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show Product</li>
              </ol>

              <div class="btn-group">
                <a href="#" class="btn btn-link btn-share">Share</a>
                <a href="#" class="btn btn-link">Sell item like this</a>
              </div>
            </nav>
          </div>
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
                <div class="product-gallery-thumbnails">
                  <ol class="thumbnails-list list-unstyled">
                    <li><img src="/storage/product_images/{{$product->product_image}}" alt=""></li>
                    <li><img src="/storage/product_images/{{$product->product_image}}" alt=""></li>
                    <li><img src="/storage/product_images/{{$product->product_image}}" alt=""></li>
                    <li><img src="/storage/product_images/{{$product->product_image}}" alt=""></li>
                    <li><img src="/storage/product_images/{{$product->product_image}}" alt=""></li>
                  </ol>
                </div>
                <div class="product-gallery-featured">
                  <img src="/storage/product_images/{{$product->product_image}}" alt="">
                </div>
              </div>

              <div class="product-seller-recommended">

                <div class="product-description mb-5">
                  <h2 class="mb-5">Features</h2>
                  <dl class="row mb-5">
                    <dt class="col-sm-3">Brand</dt>
                    <dd class="col-sm-9">Nickony</dd>
                    <dt class="col-sm-3">Color</dt>
                    <dd class="col-sm-9">Red</dd>
                    <dt class="col-sm-3">Size</dt>
                    <dd class="col-sm-9">XXL</dd>
                    <dt class="col-sm-3">Fabric</dt>
                    <dd class="col-sm-9">Cottom</dd>
                  </dl>
                  <h2 class="mb-5">Description</h2>

                  <p>{{$product->description}}</p>
                </div>

                <h3 class="mb-5">More from David's Store</h3>
                <div class="recommended-items card-deck">
                  <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div>
                </div>
                <!-- /.recommended-items-->
                <p class="mb-5 mt-5"><a href="#">See all ads from this seller</a></p>

                <div class="product-faq mb-5">
                  <h2 class="mb-3">Questions and Answers</h2>
                  <p class="text-muted">What information do you need?</p>
                  <div class="main-questions d-inline" data-container="body" data-toggle="popover" data-placement="right" data-content="Are you in doubt? these shortcuts can help you!">
                    <a href="#" class="btn btn-outline-primary">Cost and Delivery time</a>
                    <a href="#" class="btn btn-outline-primary">Warranty</a>
                    <a href="#" class="btn btn-outline-primary">Payment options</a>
                  </div>
                </div>
                <div class="product-comments">
                  <h5 class="mb-2">Or ask to David's Store</h5>
                  <form action="" class="form-inline mb-5">
                    <textarea name="" id="" cols="50" rows="2" class="form-control mr-4" placeholder="write a question"></textarea><button class="btn btn-lg btn-primary">Ask</button>
                  </form>
                  <h5 class="mb-5">Lastest Questions</h5>
                  <ol class="list-unstyled last-questions-list">
                    <li><i class="fa fa-comment"></i> <span>Hello david, can i pay with credit card?</span></li>
                    <li><i class="fa fa-comment"></i> <span>can i send it to another address?</span></li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="product-payment-details">
              <p class="last-sold text-muted"><small>145 items sold</small></p>
              <h4 class="product-title mb-2">{{$product->title}}</h4>
              <h2 class="product-price display-4">{{$product->price}}€</h2>
              <p class="text-success"><i class="fa fa-credit-card"></i> 12x or  5x $ 5.00</p>
              <p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
              <div class="text-muted mb-2"><small>know more about delivery time and shipping forms</small></div>
              <label for="quant">Quantity</label>
              <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Choose the quantity">
              <button class="btn btn-primary btn-lg btn-block">Buy Now</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<script>
// select all thumbnails
const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
// select featured
const galleryFeatured = document.querySelector(".product-gallery-featured img");

// loop all items
galleryThumbnail.forEach((item) => {
item.addEventListener("mouseover", function () {
  let image = item.children[0].src;
  galleryFeatured.src = image;
});
});

// show popover
$(".main-questions").popover('show');
</script>


{{-- <main class="page-content">
  <div class="container-fluid">

<h2>{{ $product->title}}</h2>
<hr>
<img style="width:25%;margin-bottom:1%;" src="/storage/product_images/{{$product->product_image}}">
<br><br>
<div>
  {!!$product->description!!}
</div>
<hr>
<small>Written on {{$product->created_at}} by <b>{{$product->user->name}}</b></small>
<hr>
@if(!Auth::guest())
  @if(Auth::user()->id == $product->user_id)
<a class="btn btn-primary" href="/products/{{$product->id}}/edit">Edit</a> --}}

{{-- Delete post --}}
{{-- {!! Form::open([
  'action'=> ['ProductController@destroy', $product->id],
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
</main> --}}



@endsection

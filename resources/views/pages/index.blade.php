
@extends('layouts.home')

@section('jumbotron_header')
  <div class="container-fluid">
      <div class="row">
      		<div class="col-md-12">
      			<h2>Trending <b>Products</b></h2>
      			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      			<!-- Wrapper for carousel items -->
      			<div class="carousel-inner">
      				<div class="item carousel-item active">
      					<div class="row">
                  @if(count($products) > 0)
                  @foreach($products as $product)
      						<div class="col-sm-2">
      							<div class="thumb-wrapper">
      								<div class="img-box">
      									<img src="/storage/product_images/{{$product->product_image}}" class="img-responsive img-fluid" alt="">
      								</div>
      								<div class="thumb-content">
      									<h4>{{$product->title}}</h4>
      									<p class="item-price"><strike>${{$product->list_price}}</strike> <span>${{$product->price}}</span></p>
      									<div class="star-rating">
      										<ul class="list-inline">
      											<li class="list-inline-item"><i class="fa fa-star"></i></li>
      											<li class="list-inline-item"><i class="fa fa-star"></i></li>
      											<li class="list-inline-item"><i class="fa fa-star"></i></li>
      											<li class="list-inline-item"><i class="fa fa-star"></i></li>
      											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
      										</ul>
      									</div>
      									<button type="button" class="btn btn-primary add2cart btn-product" data-url="{{url('modal-view'). '?uid=' . $product->id }}">Add to Cart</button>
      								</div>
      							</div>
      						</div>
                @endforeach
              @endif

      					</div>
      				</div>
      				<div class="item carousel-item">
      					<div class="row">

                  @if(count($products) > 6)
                  @foreach($products as $product)
                  <div class="col-sm-2">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="/storage/product_images/{{$product->product_image}}" class="img-responsive img-fluid" alt="">
                      </div>
                      <div class="thumb-content">
                        <h4>Apple iPad</h4>
                        <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                        <div class="star-rating">
                          <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                        </div>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif

      					</div>
      				</div>

      			</div>
      			<!-- Carousel controls -->
      			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
      				<i class="fa fa-angle-left"></i>
      			</a>
      			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
      				<i class="fa fa-angle-right"></i>
      			</a>
      		</div>
      		</div>
      	</div>
</div>
@endsection

@section('sidebar')
<div class='col-md-2'>
  <aside>
    <form action="search.php" method="post">
          <h2>Filter<b>s</b></h2>
          <div class="card mb-3">
            <article class="card-group-item">
              <header class="card-header">
                <h6 class="title">Range input </h6>
              </header>
              <div class="filter-content">
                <div class="card-body">
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Min</label>
                  <input type="number" name="min_price" class="form-control" id="inputEmail4" placeholder="$0">
                </div>
                <div class="form-group col-md-6 text-right">
                  <label>Max</label>
                  <input type="number" name="max_price" class="form-control" placeholder="$1,0000">
                   </div>
                   </div>
                   </div>
                </div>
               </article>
              </div>

              <!-- Select Brand -->
              <div class="card mb-3">
            <article class="card-group-item">
              <header class="card-header">
                <h6 class="title">Select Brand</h6>
              </header>
              <div class="filter-content">
            <div class="card-body">
              <div class="custom-control custom-checkbox">
                  <input name="brand" type="checkbox" class="custom-control-input" value="" id="Brand">
                  <label class="custom-control-label" for="Brand">Iphone</label>
                  <span class="float-right badge badge-light round">52</span>
              </div>
            </div>
          </div>
        </article>
        </div>
              <!-- Select Category -->
              <div class="card mb-3">
            <article class="card-group-item">
              <header class="card-header">
                <h6 class="title">Select Category</h6>
              </header>
              <div class="filter-content">

                <div class="card-body">

                  <div class="custom-control custom-checkbox">
                      <input name="category" type="checkbox" class="custom-control-input" id="Check" value="">
                      <label class="custom-control-label" for="Check">TV</label>
                      <span class="float-right badge badge-light round">52</span>
                  </div>

                </div>
              </div>
            </article>
            <div class="card-body">
              <input type="submit" value="Search" class="btn btn-xs btn-primary">
            </div>
            <div>
          </div>
    </form>
  </aside>
</div>

@endsection


@section('content')
  <div class="modal fade" id="loadModal" tabindex="-1"></div>

  <div class='col-md-10'>
    <!-- Start Portfolio Section -->
    <div class="col-md-9 wrapper-middle-sector">

      	<h2>All <b>Items</b></h2>
    <div class="row">

            @if(count($products) > 0)
            @foreach($products as $product)

                          <div class="col-md-3">
                            <div class="card text-center myHover wrapper-articals">
                              <img class="card-img img" src="/storage/product_images/{{$product->product_image}}">
                                <div class="card-body">
                                  <h4 class="modal-title">{{$product->title}}</h4>
                                  <p class="item-price"><strike>${{$product->list_price}}</strike> <span>${{$product->price}}</span></p>

                                <div class="star-rating">
                                  <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                                </div>

                                <button type="button" class="btn add2cart btn-lg btn-product" data-url="{{url('modal-view'). '?uid=' . $product->id }}">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                        @endforeach
                          @endif
                    {!! $products->render() !!}
                  </div>
                </div>
              </div>
          @endsection


@section('newsletter')
  <!-- NEWSLETTER -->
  <div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="newsletter">

            <p>Sign Up for the <strong>NEWS</strong><strong>LETTER</strong></p>
            <form action="include/widgets/add_to_newsletter.php">
              <input class="input" type="email" placeholder="Enter Your Email">
              <button class="newsletter-btn btn-outline-blue"><i class="fa fa-envelope"></i> Subscribe</button>
            </form>
            <ul class="newsletter-follow">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /NEWSLETTER -->
@endsection

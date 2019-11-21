<?php
use App\Http\Controllers\Controller;
use App\Product;
$mainCategories =  Controller::mainCategories();
$cartCount = Product::cartCount();
?>
<header id="header"><!--header-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ url('./')}}"><img src="{{ asset('images/frontend_images/home/logo.png') }}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								EU
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">USA</a></li>
									<li><a href="#">Bosnia and Herzegovina</a></li>
									<li><a href="#">EU</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									EURO
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">US Dollar</a></li>
									<li><a href="#">BAM</a></li>
									<li><a href="#">EURO</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

								<li><a href="{{ url('/wish-list') }}"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="{{ url('/orders') }}"><i class="fa fa-crosshairs"></i> Orders</a></li>
								<li><a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> Cart ({{ $cartCount }})</a></li>
								@if(empty(Auth::check()))
									<li><a href="{{ url('/login-register') }}"><i class="fa fa-lock"></i> Login</a></li>
								@else
									<li><a href="{{ url('/account') }}"><i class="fa fa-user"></i> Account</a></li>
									<li><a href="{{ url('/user-logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
								@endif
								<li><a href="{{ url('/admin') }}"><i class="fa fa-lock" aria-hidden="true"></i><span style="color:orange">Admin</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{ url('/') }}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    	@foreach($mainCategories as $cat)
                                        	<li><a href="{{ asset('products/'.$cat->url) }}">{{ $cat->name }}</a></li>
										@endforeach
                                    </ul>
                                </li>

								{{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> --}}

								<li><a href="{{ url('page/post') }}">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="{{ url('/search-products') }}" method="post">{{ csrf_field() }}
								<input type="text" placeholder="Search Product" name="product" />
								<button type="submit" style="border:0px; height:33px; margin-left:-3px">Go</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

<?php use App\Product; ?>
<form action="{{ url('/products-filter') }}" method="post">{{ csrf_field() }}
	@if(!empty($url))
	<input name="url" value="{{ $url }}" type="hidden">
	@endif
	<div class="left-sidebar">
<h2>FILTER<b>S</b></h2>
		<div class="panel-group category-products" id="accordian">
			@foreach($categories as $cat)
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#{{$cat->id}}">
								<span class="badge pull-right"><i class="fa fa-plus"></i></span>
								{{$cat->name}}
							</a>
						</h4>
					</div>
					<div id="{{$cat->id}}" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								@foreach($cat->categories as $subcat)
									<?php $productCount = Product::productCount($subcat->id); ?>
									@if($subcat->status==1)
									<li><a href="{{ asset('products/'.$subcat->url) }}">{{$subcat->name}} </a> ({{ $productCount }})</li>
									@endif
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			@endforeach
		</div>

		@if(!empty($url))

			<h2>Colors</h2>
			<div class="panel-group">
				@foreach($colorArray as $color)
					@if(!empty($_GET['color']))
						<?php $colorArr = explode('-',$_GET['color']) ?>
						@if(in_array($color,$colorArr))
							<?php $colorcheck="checked"; ?>
						@else
							<?php $colorcheck=""; ?>
						@endif
					@else
						<?php $colorcheck=""; ?>
					@endif
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<input name="colorFilter[]" onchange="javascript:this.form.submit();" id="{{ $color }}" value="{{ $color }}" type="checkbox" {{ $colorcheck }}>&nbsp;&nbsp;<span class="products-colors">{{ $color }}</span>
							</h4>
						</div>
					</div>
				@endforeach
			</div>

			<div>&nbsp;</div>

			<h2>Product Condition</h2>
			<div class="panel-group">
				@foreach($conditionArray as $condition)
					@if(!empty($_GET['condition']))
						<?php $conditionArr = explode('-',$_GET['condition']) ?>
						@if(in_array($condition,$conditionArr))
							<?php $conditioncheck="checked"; ?>
						@else
							<?php $conditioncheck=""; ?>
						@endif
					@else
						<?php $conditioncheck=""; ?>
					@endif
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<input name="conditionFilter[]" onchange="javascript:this.form.submit();" id="{{ $condition }}" value="{{ $condition }}" type="checkbox" {{ $conditioncheck }}>&nbsp;&nbsp;<span class="products-condition">{{ $condition }}</span>
							</h4>
						</div>
					</div>
				@endforeach
			</div>

			<div>&nbsp;</div>

			<h2>Display Size in Inc</h2>
			<div class="panel-group">
				@foreach($sizesArray as $size)
					@if(!empty($_GET['size']))
						<?php $sizeArr = explode('-',$_GET['size']) ?>
						@if(in_array($size,$sizeArr))
							<?php $sizecheck="checked"; ?>
						@else
							<?php $sizecheck=""; ?>
						@endif
					@else
						<?php $sizecheck=""; ?>
					@endif
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<input name="sizeFilter[]" onchange="javascript:this.form.submit();" id="{{ $size }}" value="{{ $size }}" type="checkbox" {{ $sizecheck }}>&nbsp;&nbsp;<span class="products-sizes">{{ $size }}</span>
							</h4>
						</div>
					</div>
				@endforeach
			</div>

			<div>&nbsp;</div>

			<h2>Owner of product</h2>
			<div class="panel-group">
				@foreach($product_ownerArray as $product_owner)
					@if(!empty($_GET['product_owner']))
						<?php $product_ownerArr = explode('-',$_GET['product_owner']) ?>
						@if(in_array($product_owner,$product_ownerArr))
							<?php $product_ownercheck="checked"; ?>
						@else
							<?php $product_ownercheck=""; ?>
						@endif
					@else
						<?php $product_ownercheck=""; ?>
					@endif
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<input name="product_ownerFilter[]" onchange="javascript:this.form.submit();" id="{{ $product_owner }}" value="{{ $product_owner }}" type="checkbox" {{ $product_ownercheck }}>&nbsp;&nbsp;<span class="products-product_owners">{{ $product_owner }}</span>
							</h4>
						</div>
					</div>
				@endforeach
			</div>

		@endif

	</div>
</form>

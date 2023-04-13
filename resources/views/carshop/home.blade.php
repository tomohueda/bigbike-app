<!-- Featured Items
============================================= -->
<section id="featuredItems" class="shop">
		<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/62HtBkD95wo" title="Japanese RV Driving Experience"></iframe>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UCQYr8VAHbE" title="How to turn the RV Dinette into a Bed"></iframe>
				</div>
			</div>
		</div>
		</div>
		<!-- .container end -->
		<div class="m-md"></div>

		<!--RV rental-->

		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">{{$categories[0]->name}}</p>
					<h2>{{$categories[0]->detail}}</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>{!!$categories[0]->description!!}</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary" href="{{route('category.show', $categories[0]->id)}}">View All >></a>
				</div>
				<!-- .client end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
		<div class="container">
			<div class="row product-carousel text-center">

			@foreach ($products_0 as $product)

				<!-- Product #1 -->
				<div class="product">
					<div class="product-img">
						<img class="product-img" alt="{{$product->name}}" src="{{ asset('storage/images/' . $product->images[0]->name) }}">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{route('product.show', $product->id)}}">View Details</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="{{route('product.show', $product->id)}}">{{$product->copy}}</a>
						</div>
						<!-- .product-cat end -->
						<div class="prodcut-title">
							<h3>
								<a href="{{route('product.show', $product->id)}}">{{$product->name}}</a>
							</h3>
						</div>
						<!-- .product-title end -->
						<div class="product-price">
							<span class="symbole"></span><span>{{$product->rentalClass->day_price}}</span>
						</div>
						<!-- .product-price end -->
						
					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->
				
				@endforeach
				
			</div>
			<!-- .row end -->
			
		</div>

		<!--BIKE rental-->
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">{{$categories[1]->name}}</p>
					<h2>{{$categories[1]->detail}}</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>{!!$categories[1]->description!!}</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary" href="{{route('category.show', $categories[1]->id)}}">View All >></a>
				</div>
				<!-- .client end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
		<div class="container">
			<div class="row product-carousel text-center">

			@foreach ($products_1 as $product)

				<!-- Product #1 -->
				<div class="product">
					<div class="product-img">
						<img class="product-img" alt="{{$product->name}}" src="{{ asset('storage/images/' . $product->images[0]->name) }}">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{route('product.show', $product->id)}}">View Details</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="{{route('product.show', $product->id)}}">{{$product->copy}}</a>
						</div>
						<!-- .product-cat end -->
						<div class="prodcut-title">
							<h3>
								<a href="{{route('product.show', $product->id)}}">{{$product->name}}</a>
							</h3>
						</div>
						<!-- .product-title end -->
						<div class="product-price">
							<span class="symbole"></span><span>{{$product->rentalClass->day_price}}</span>
						</div>
						<!-- .product-price end -->
						
					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->
				
				@endforeach
				
			</div>
			<!-- .row end -->
			
		</div>

		<!-- .container end -->
	</section>
	<!-- #featuredItems end -->


<!-- Featured Items
============================================= -->
<section id="featuredItems" class="shop">
		<div class="container">
			<div class="row product-boxes">
				<!-- Product Box #1 -->
				<div class="col-xs-12 col-sm-4 col-md-4 product-box">
					<a href="#">
					<div class="product-img">
						<img  src="assets/images/shop/small/1.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-link">
								<h3>Car Wheels</h3>
								<p>Best Metal</p>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					</a>
				</div>
				<!-- .product-box end -->
				
				<!-- Product Box #2 -->
				<div class="col-xs-12 col-sm-4 col-md-4 product-box">
					<a href="#">
					<div class="product-img">
						<img  src="assets/images/shop/small/3.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-link">
								<h3>Car Engines</h3>
								<p>Best Prices</p>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					</a>
				</div>
				<!-- .product-box end -->
				
				<!-- Product Box #3 -->
				<div class="col-xs-12 col-sm-4 col-md-4 product-box">
					<a href="#">
					<div class="product-img">
						<img  src="assets/images/shop/small/3.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-link">
								<h3>Car Batteries</h3>
								<p>Best Quality</p>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					</a>
				</div>
				<!-- .product-box end -->
				
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">{{$categories[0]->name}}</p>
					<h2>{{$categories[0]->detail}}</h2>
				</div>
				<!-- .col-md-12 end -->
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
							<a href="#">{{$product->copy}}</a>
						</div>
						<!-- .product-cat end -->
						<div class="prodcut-title">
							<h3>
								<a href="#">{{$product->name}}</a>
							</h3>
						</div>
						<!-- .product-title end -->
						<div class="product-price">
							<span class="symbole">$</span><span>28.00</span>
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
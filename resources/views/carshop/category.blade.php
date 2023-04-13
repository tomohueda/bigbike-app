@include("carshop.common.header")

@include("carshop.common.nav")

	<!-- Page Title
============================================= -->
    <section id="page-title" class="page-title">
		<div class="container">
					@if($category->id == 3)
					<img  src="{{asset('/assets/img/rvcars.jpg')}}" alt="{{$category->name}}" width="100%" style="margin-bottom:20px;"/>
					@elseif($category->id == 1)
					<img  src="{{asset('/assets/img/bikers.jpg')}}" alt="{{$category->name}}" width="100%" style="margin-bottom:20px;"/>
					@endif
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<!--<p class="subheading">{{$category->name}}</p>-->
							<h2>{{$category->detail}}</h2>
						</div>
						<!-- .col-md-12 end -->
					</div>
					<!-- .row end -->
					
					<div class="row heading-desc">
						<div class="col-xs-12 col-sm-12 col-md-10">
							<p>{!!$category->description!!}</p>
						</div>
						<!-- .client end -->
					</div>
				<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #page-title end -->
	
	<!-- Shop Single right sidebar
============================================= -->
	<section id="shopgrid" class="shop shop-grid"  style="margin-top:-100px;">
        <div class="container">
            <div class="row">

                <div class="row">
                @foreach ($products as $product)
                    <div class="col-xs-12 col-sm-6 col-md-3 product">
						<div class="product-img">
							<img  src="{{ asset('storage/images/' . $product->images[0]->name) }}" alt="{{$product->name}}"/>
							<div class="product-hover">
								<div class="product-action">
									<a class="btn btn-primary" href="{{route('product.show', $product->id)}}">Item Details</a>
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
                @endforeach
                </div>
            </div>
        </div>
		<!-- .container end -->
	</section>
	<!-- #blog end -->

@include("carshop.common.footer")
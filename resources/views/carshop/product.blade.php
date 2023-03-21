@include("carshop.common.header")

@include("carshop.common.nav")

	<!-- Page Title
============================================= -->
<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h5>{{$product->productCategory->name}}</h5>
					<h1>{{$product->name}}</h1>
				</div>
				<!-- .col-md-6 end -->
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<ol class="breadcrumb text-right">
						<!--<li>
							<a href="index.html">Home</a>
						</li>
						-->
						<!--
						<li class="active">{{$product->productCategory->name}}</li>
						-->
					</ol>
				</div>
				
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #page-title end -->
	
	<!-- Shop Single right sidebar
============================================= -->
	<section id="shopgrid" class="shop shop-single">
		<div class="container shop-content">

			<!-- .row end -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-5">
					<div class="prodcut-images">
						<div class="product-img-slider">
						@foreach ($product->images as $image)
							<img alt="{{$product->name}}" src="{{ asset('storage/images/' . $image->name) }}">
						@endforeach
						</div>
						<div class="product-img-nav">
						@foreach ($product->images as $image)
							<img alt="{{$product->name}}" src="{{ asset('storage/images/' . $image->name) }}">
						@endforeach
						</div>
					</div>
					<!-- .product-img end -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="product-title text-center-xs">
						<h3>{{$product->name}}</h3>
					</div>
					<!-- .product-name end -->
					
					<div class="product-desc text-center-xs">
						<p class="mb-0">{!!$product->copy!!}</p>
					</div>
					<!-- .product-desc end -->

					<div class="product-meta mb-30">
						<div class="product-price pull-left pull-none-xs">
							<p>{{$product->rentalClass->day_price}}</p>
						</div>
						<!-- .product-price end -->
					</div>

					<hr class="mt-30 mb-30">
					<div class="product-details text-center-xs">
						<h5>Other Details :</h5>
						{!!$product->detail!!}
					</div>
					<hr class="mt-15 mb-15">
					<div class="product-details text-center-xs">
						<h5>Specification :</h5>
						{!!$product->spec!!}
					</div>
					<!-- .product-detail end -->

							

					<hr class="mt-30 mb-30">
					<!--<div class="product-share  text-center-xs">
						<h5 class="share-title">share product: </h5>
						<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
						<a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
						<a class="share-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
					</div>-->
					<!-- .product-share end -->
					<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
					<a class="btn btn-primary" href="{{$product->url}}" target="_blank">Request for a quote</a>
					<p>Go to our partner site.</p>
					</div>
				</div>
			</div>
			<!-- .row end -->
			<div class='m-md'></div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="product-tabs">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#description" aria-controls="description" role="tab" data-toggle="tab">Rental fee: {{$product->rentalClass->name}} </a>
							</li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="description">
							{!!$product->rentalClass->detail!!}
							</div>
						</div>
						<!-- #tab-content end -->
					</div>
					<!-- .product-tabs end -->
				</div>
			</div>
			<!-- .row end -->
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<!-- Alert Message -->
					<div class="alert">
						<div class="alert-icon">
							<i class="fa fa-check-circle"></i>
						</div>
						<div class="alert-content">
							<h4>We may offer different models on the availability.</h4>
							<p>Please contact us for more information.</p>
						</div>
					</div>
					<!-- .aret end -->
				</div>
			</div>

		</div>

		<!-- .container end -->
	</section>
	<!-- #blog end -->

@include("carshop.common.footer")
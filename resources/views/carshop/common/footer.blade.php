<!-- Footer #2
============================================= -->
<footer id="footer" class="footer footer-2">

		
		<!-- Footer Widget
	============================================= -->
		<div class="footer-widget">
			<div class="container">
				<div class="row">

					
					<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Information</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="{{route('category.show', $categories[0]->id)}}">RENT RVs</a>
								</li>
								<li>
									<a href="{{route('category.show', $categories[1]->id)}}">RENT MOTORCYCLE</a>
								</li>
								<li>
									<a href="{{route('about')}}">Contact</a>
								</li>
								<li>
									<a href="{{route('faq')}}">FAQ</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
					
					
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-widget end -->
		
		<!-- Footer Bar
	============================================= -->
		<div class="footer-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="powered">
							<p>Copyright &copy;2023 BIG BIKE CO.,LTD All rights reserved.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="payment-methods text-right">
							<ul class="list-inline mb-0">
								<li><img src="{{asset('assets/images/footer/visa.png')}}" alt="payment"></li>
								<li><img src="{{asset('assets/images/footer/mastercard.png')}}" alt="payment"></li>
								<li><img src="{{asset('assets/images/footer/american-express.png')}}" alt="payment"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-copyright end -->
	</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
</body>
</html>
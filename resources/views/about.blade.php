@include("parts.common", [ "title" => "About us" ])
@include("parts.nav")

<!-- Image Showcases -->
<section class="showcase">
   <div class="container-fluid p-0">
     <div class="row no-gutters">
       <div class="col-lg-6 order-lg-1 my-auto showcase-text">
		<h2>About us</h2>
		
		<p class="lead mb-0">
			
            We would like to inform you about the company profile of BIG BIKE CO.,LTD.<br />
			 {{ $current_time }} <br />
			<br />
			
			<ul>
				<li>Company name: BIG BIKE CO.,LTD</li>
				<li>Founded: December 31, 2020</li>
				<li>Representative: △△</li>
				<li>Location:  Harada Building 1F 3-1-25 Minamikannon, Nishi Ward, Hiroshima City, Hiroshima Prefecture, Japan</li>
                <li>Phone:  082-928-5959</li>
                <li>Business hours: 10:00-19:00</li>
                <li>Regular holiday: Tuesday, Wednesday</li>
			</ul>
		</p>
       </div>
	  </div>
	</div>
</section>

@include("parts.footer")
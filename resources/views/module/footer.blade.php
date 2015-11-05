<footer>
	<div class="footer-img">
		<a target="_blank" title="Palm Vietnam Travel Blog" href="{{ URL::to('blog') }}">
			{!! HTML::image('footer/footer-img.jpg', 'Discover Indochina - Travel Blog', ['class' => 'img-responsive']) !!}
		</a>
	</div>
	<div class="container">
		<div class="footer-center">
			<ul class="footer-menu">
				<li>
					<h2 class="f12">Our Tours</h2>
					<a title="VIETNAM TOURS" href="{{ URL::to('travel-to-vietnam') }}">Vietnam Tours</a>
					{{-- <a title="LAOS TOURS" href="./travel-to-laos/">Laos Tours</a>
					<a title="CAMBODIA TOURS" href="./travel-to-cambodia/">Cambodia Tours</a>
					<a title="MYANMAR TOURS" href="./travel-to-myanmar/">Myanmar Tours</a>
					<a title="Indochina tours +" href="./travel-to-indochina/">Indochina Tours</a> --}}
				</li>
				<li>
					<h2 class="f12">Information</h2>
					<a title="Payment guide" href="{{ URL::to('payment-refund') }}">Payment guide</a>
					<a title="NewsLetters" href="{{ URL::to('newsletters') }}">NewsLetters</a>
					<a title="Terms &amp; Conditions" href="{{ URL::to('terms-conditions') }}">Terms &amp; Conditions</a>
					<a title="Privacy Policy" href="{{ URL::to('privacy-policy') }}">Privacy Policy</a>
					<a title="Site Map" href="{{ URL::to('site-map') }}">Site Map</a>
				</li>
				<li>
					<h2 class="f12">About us</h2>
					<a title="Tour Reviews" href="{{ URL::to('tour-reviews') }}">Tour Reviews</a>
					<a title="Travel Photos" href="{{ URL::to('travel-photos') }}">Travel Photos</a>
					<a title="About us" href="{{ URL::to('about-us') }}">About us</a>
					<a title="Contact us" href="{{ URL::to('contact') }}">Contact us</a>
					<a title="Our Blog" href="{{ URL::to('blog') }}">Our Blog</a>
				</li>
				<li>
					<h2 class="f12">Connect</h2>
					<a class="s1" title="Visit us on Fabebook" target="_blank" href="https://www.facebook.com/PalmVietnamTravel">Facebook</a>
					<a class="s2" title="Visit us on Twitter" target="_blank" href="https://twitter.com/palmvietnam">Twitter</a>
					<a class="s4" title="Visit us on Google+" target="_blank" href="https://plus.google.com/u/0/b/110980452575102254365/110980452575102254365/posts">Google+</a>
					<a class="s4" title="Visit us on Youtube+" target="_blank" href="https://www.youtube.com/channel/UCnLa98saGFIPM4AOxvDHigA/feed">Youtube</a><a class="s4" title="Visit us on Pinterest" target="_blank" href="http://www.pinterest.com/palmvietnam/">Pinterest</a>
				</li>
				<li>
					<h2 class="f12">Head Office</h2>
					<p><strong>Palm Vietnam Travel</strong></p>
					<p>102 Suite DMC building, 223 Dien Bien Phu, W.15, Binh Thanh Dist, HCMC</p>
					<p>Tel: {{ Config::get('myconfig.TELL') }} - Fax: {{ Config::get('myconfig.FAX') }}</p>
					<p>Hotline: <a title="Call!" href="tel:+84902626729">+84 902 626 729</a> - <a href="mailto:info@palmvietnam.com" title="Email contact">Email: info@palmvietnam.com</a></p><p>International License: 79-064/2010/TCDL-GPLHQT</p>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-6">
					<div class="address-brand">
						{{-- <p><strong>Hanoi Branch Office:</strong></p>
						<p>6 Ma May St., Hoan Kiem Dist., Hanoi, Vietnam</p>
						<p>Hotline 24/7: (+84) 902 626 729</p> --}}
					</div>
					<div class="pay">
						<strong>In association with:</strong>
						<a title="ABTA" target="_blank" href="http://www.abta.com/">ABTA</a>
						<a title="PATA - Pacific Asia Travel Association" target="_blank" href="http://www.pata.org/">PATA - Pacific Asia Travel Association</a>
						<a title="ASTA - American Society of Travel Agents" target="_blank" href="http://www.asta.org/">ASTA - American Society of Travel Agents</a>
						<a title="AITA - International Air Transport Association" target="_blank" href="http://www.iata.org/">AITA -International Air Transport Association</a>
					</div>
					<div class="clearfix"></div>
					<div class="social social-foot">
						<strong>Follow us:</strong>
						@include ('module.social')
					</div>
				</div>
				<div class="col-sm-6">
					<div class="address-brand">
						{{-- <p><strong>Danang branch office:</strong></p>
						<p>20 Dong Da Road, Thuan Phuoc ward, Hai Chau Dist, Danang, Vietnam.</p>
						<p>Hotline 24/7: (+84) 902 626 729</p> --}}
					</div>
					<div class="payment-card">
						<strong>We accept:</strong>
						<a class="pull-left" title="Payment" href="http://www.palmvietnamtravel.com/transfer-money-online">
							{!! HTML::image('footer/payment.png', 'Payment Cards', ['class' => 'img-responsive']) !!}
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container text-center">
			<p class="f11">&copy; {{ date('Y') }} - Palm Vietnam Travel. All Rights Reserved.</p>
			</div>
		</div>
</footer>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5613922248732bfb" async="async"></script>
@yield('footer-script')
<script>
	// (function(d, s, id) {
	//   	var js, fjs = d.getElementsByTagName(s)[0];
	//   	if (d.getElementById(id)) return;
	//   	js = d.createElement(s); js.id = id;
	//   	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId={{ Config::get('myconfig.FACEBOOK_API') }}";
	//   	fjs.parentNode.insertBefore(js, fjs);
	// }(document, 'script', 'facebook-jssdk'));
</script>
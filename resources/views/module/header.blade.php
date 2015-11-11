<header>
	<div class="header-top-menu-full">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="top-bar-style">
						<div class="data-time pull-left">{{ date('D, d/m/Y') }}</div>
						<div class="header-top-menu pull-left">
							<ul>
								<li><a href="">Blog</a></li>
								<li><a href="">Forums</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
						<div class="header-top-widget pull-right">
							<ul>
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href=""><i class="fa fa-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="pull-left">
					<a class="logo" title="Vietnam Travel - Top Vietnam tour operators" href="{{ URL::to('/') }}">
						{!! HTML::image('header/logo.png', 'Vietnam Travel' ) !!}
					</a>
				</div>
				<div class="pull-left des-site">
					<h3 class="f20 name">Vietnam Saigon Travel</h3>
					<p class="f11">Best tours in Vietnam & Vietnam discovery tours - Travel to Vietnam</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-4">
						<a href="" class="btn btn-main btn-green btn-customized">Customized Tours</a>
					</div>
					<div class="col-sm-8">
						<ul class="topplus">
							<li class="support text-right">
								<a class="phone" title="MOBILE FRIENDLY" href="tel:{{ Config::get('myconfig.HOTLINE') }}">{{ Config::get('myconfig.HOTLINE') }}</a>
								<a class="email" title="Email contact" href="mailto:{{ Config::get('myconfig.MAIL_INFO') }}">{{ Config::get('myconfig.MAIL_INFO') }}</a>
							</li>
							
							<!--<li class="plug-icon">

								<span>24/7:</span>
								<a class="chat" title="My name Hong Diep, Skype chat with me!" href="skype:palmvietnam?chat"></a>
								<a class="chat" title="My name Alex, Skype chat with me!" href="skype:palmvietnam01?chat"></a>
								<a class="yahoo" title="Yahoo chat with Diep" href="ymsgr:sendIM?tranhongdiep1980">
									<img alt="Ms.Hong Diep" src="http://opi.yahoo.com/online?u=tranhongdiep1980&amp;m=g&amp;t=1">
								</a>
								<a class="yahoo ylast" title="Yahoo chat with Alex" href="ymsgr:sendIM?palmvietnam01">
									<img alt="Ms.Alex" src="http://opi.yahoo.com/online?u=palmvietnam01&amp;m=g&amp;t=1">
								</a> 
							</li>-->
							<li>
								<div class="row">
									<div class="col-sm-4">
										<a class="tripadvisor" rel="nofollow" target="_blank" title="Palm Vietnam Travel on Tripadvisor" href="">Vietnam Travel on Tripadvisor</a>
									</div>
									<div class="col-sm-8">
										<form method="GET" id="form-site-seach" action="{{ URL::asset('/quitsearch') }}">
											<div class="input-group">
												<input type="text" placeholder="Goolge search..." class="form-control input-site-seach" name="q">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default btn-site-search"><span class="glyphicon glyphicon-search"></span></button>
												</span>
										    </div>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="main-nav" data-spy="affix" data-offset-top="0" data-offset-bottom="0">
		<div class="container">
			<ul class="sf-menu">
				<li><a href="{{ url() }}"><i class="fa fa-home"></i></a></li>
				<li><a href="{{ url('/phap-luat') }}">Pháp Luật</a></li>
				<li><a href="{{ url('/thoi-su') }}">Thời Sự</a>
					<div class="sub-menu">
						<div class="td-mega-row">

									<div class="td-mega-span">
								        <div class="td_module_mega_menu td_mod_mega_menu">
								            <div class="td-module-image">
								            	<a href="">
								            		{!! HTML::image('uploads/2015/11/7-218x150.jpg', '' ,['class' => 'img-responsive']) !!}
								            	</a>
								            </div>
								            <div class="item-details">
								                <h3 class="entry-title td-module-title" itemprop="name">
								                	<a title="{{ 'title' }}" rel="" href="{{ '#alias' }}" itemprop="url">How to drive growth through customer support</a>
								            	</h3>            
								            </div>
								        </div>
								    </div>
	

									<div class="td-mega-span">
								        <div class="td_module_mega_menu td_mod_mega_menu">
								            <div class="td-module-image">
								            	<a href="">
								            		{!! HTML::image('uploads/2015/11/14-218x150.jpg', '' ,['class' => 'img-responsive']) !!}
								            	</a>
								            </div>
								            <div class="item-details">
								                <h3 class="entry-title td-module-title" itemprop="name">
								                	<a title="{{ 'title' }}" rel="" href="{{ '#alias' }}" itemprop="url">Gadgets</a>
								            	</h3>            
								            </div>
								        </div>
								    </div>


									<div class="td-mega-span">
								        <div class="td_module_mega_menu td_mod_mega_menu">
								            <div class="td-module-image">
								            	<a href="">
								            		{!! HTML::image('uploads/2015/11/10-218x150.jpg', '' ,['class' => 'img-responsive']) !!}
								            	</a>
								            </div>
								            <div class="item-details">
								                <h3 class="entry-title td-module-title" itemprop="name">
								                	<a title="{{ 'title' }}" rel="" href="{{ '#alias' }}" itemprop="url">Gadgets</a>
								            	</h3>            
								            </div>
								        </div>
								    </div>


									<div class="td-mega-span">
								        <div class="td_module_mega_menu td_mod_mega_menu">
								            <div class="td-module-image">
								            	<a href="">
								            		{!! HTML::image('uploads/2015/11/4-218x150.jpg', '' ,['class' => 'img-responsive']) !!}
								            	</a>
								            </div>
								            <div class="item-details">
								                <h3 class="entry-title td-module-title" itemprop="name">
								                	<a title="{{ 'title' }}" rel="" href="{{ '#alias' }}" itemprop="url">Gadgets</a>
								            	</h3>            
								            </div>
								        </div>
								    </div>


									<div class="td-mega-span">
								        <div class="td_module_mega_menu td_mod_mega_menu">
								            <div class="td-module-image">
								            	<a href="">
								            		{!! HTML::image('uploads/2015/11/11-218x150.jpg', '' ,['class' => 'img-responsive']) !!}
								            	</a>
								            </div>
								            <div class="item-details">
								                <h3 class="entry-title td-module-title" itemprop="name">
								                	<a title="{{ 'title' }}" rel="" href="{{ '#alias' }}" itemprop="url">Gadgets</a>
								            	</h3>            
								            </div>
								        </div>
								    </div>
						</div>
						<div class="td-next-prev-wrap">
							<a href="#" class="td_ajax-prev-pagex ajax-page-disabled" data-wrapper-id="td_uid_16_56373f8b264a8" data-moving="left" data-control-start="">
							<i class="fa fa-angle-left"></i></a>
							<a href="#" class="td_ajax-next-pagex td-trending-now-nav-right" data-wrapper-id="td_uid_16_56373f8b264a8" data-moving="right" data-control-start=""><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</li>
				<li><a href="{{ url('/the-thao') }}">Thể Thao</a></li>
				<li><a href="{{ url('/kinh-doanh') }}">Kinh Doanh</a></li>
				<li><a href="{{ url('/cong-nghe') }}">Công Nghệ</a>

				</li>
				<li><a href="{{ url('/video') }}">Video</a></li>
			</ul>
			<div class="dropdown">
			  	<a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-search"></i></a>

			  	<ul class="dropdown-menu" aria-labelledby="dLabel">
			    	<div class="td-drop-down-search input-group" aria-labelledby="td-header-search-button">
			    		{!! Form::open(['url' => 'search', 'method' => 'get', 'role' => 'form', 'class' => 'form-horizontal td-search-form', 'name' => 'frmSearch', 'id' => 'frmSearch', 'enctype' => 'multipart/form-data']) !!}
						
							<div class="td-head-form-search-wrap input-group">
								<input id="td-header-search" class="form-control" type="text" value="" name="s" autocomplete="off">
								<span class="input-group-btn">
									<input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Search">
								</span>
							</div>
						{!! Form::close() !!}
						<div id="td-aj-search"></div>
					</div>
			  	</ul>
			</div>
		</div>
	</nav>
</header>
<!--<nav>
	<div class="container">
		<ul class="menu">
			<li>
				<a href="{{ URL::asset('') }}">Home</a>
			</li>
			<li>
				<a href="{{ URL::asset('vietnam') }}">Vietnam</a>
			</li>
			<li>
				<a href="{{ URL::asset('day-tour') }}">Day Tours</a>
			</li>
			<li>
				<a href="{{ URL::asset('popular-tours') }}">Things To Do</a>
			</li>
			<li>
				<a href="{{ URL::asset('about-us') }}">About Us <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom f8"></span></a>
				<ul>
					<li>
						<a href="{{ URL::asset('tour-reviews') }}">Tour Reviews</a>
					</li>
					<li>
						<a href="{{ URL::asset('payment-refund') }}">Payment Guide</a>
					</li>
					<li>
						<a href="{{ URL::asset('transfer-money-online') }}">Online Transation</a>
					</li>
					<li>
						<a href="{{ URL::asset('terms-conditions') }}">Terms & Conditions</a>
					</li>
					<li>
						<a href="{{ URL::asset('privacy-policy') }}">Privacy Policy</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="{{ URL::asset('contact') }}">Contact</a>
			</li>
		</ul>
	</div>
</nav>-->
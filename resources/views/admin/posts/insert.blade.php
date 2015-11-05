@extends('layout.admin')

@section('page-content')
	<div class="collapse settings-screen" id="collapseExample">
		<form id="adv-settings" method="post">
	   		<h5>Show on screen</h5>
	   		<div class="metabox-prefs">
		      	<label for="categorydiv-hide"><input class="hide-postbox-tog" name="categorydiv-hide" type="checkbox" id="categorydiv-hide" value="categorydiv" checked="checked">Categories</label>
		      	<label for="tagsdiv-post_tag-hide"><input class="hide-postbox-tog" name="tagsdiv-post_tag-hide" type="checkbox" id="tagsdiv-post_tag-hide" value="tagsdiv-post_tag" checked="checked">Tags</label>
		      	<label for="postimagediv-hide"><input class="hide-postbox-tog" name="postimagediv-hide" type="checkbox" id="postimagediv-hide" value="postimagediv" checked="checked">Featured Image</label>
		      	<label for="wpseo_meta-hide"><input class="hide-postbox-tog" name="wpseo_meta-hide" type="checkbox" id="wpseo_meta-hide" value="wpseo_meta" checked="checked">Yoast SEO</label>
		      	<label for="postexcerpt-hide"><input class="hide-postbox-tog" name="postexcerpt-hide" type="checkbox" id="postexcerpt-hide" value="postexcerpt">Excerpt</label>
		      	<label for="trackbacksdiv-hide"><input class="hide-postbox-tog" name="trackbacksdiv-hide" type="checkbox" id="trackbacksdiv-hide" value="trackbacksdiv">Send Trackbacks</label>
		      	<label for="postcustom-hide"><input class="hide-postbox-tog" name="postcustom-hide" type="checkbox" id="postcustom-hide" value="postcustom">Custom Fields</label>
		      	<label for="commentstatusdiv-hide"><input class="hide-postbox-tog" name="commentstatusdiv-hide" type="checkbox" id="commentstatusdiv-hide" value="commentstatusdiv">Discussion</label>
		      	<label for="slugdiv-hide"><input class="hide-postbox-tog" name="slugdiv-hide" type="checkbox" id="slugdiv-hide" value="slugdiv">Slug</label>
		      	<label for="authordiv-hide"><input class="hide-postbox-tog" name="authordiv-hide" type="checkbox" id="authordiv-hide" value="authordiv" checked="checked">Author</label>
	   		</div>
   			<h5 class="screen-layout">Screen Layout</h5>
   			<div class="columns-prefs">Number of Columns: 
	   			<label class="columns-prefs-1">
	      			<input type="radio" name="screen_columns" value="1"> 1				
	      		</label>
	      		<label class="columns-prefs-2">
	      			<input type="radio" name="screen_columns" value="2" checked="checked"> 2				
	      		</label>
	   		</div>
	   		<div class="editor-expand hidden">
	   			<label for="editor-expand-toggle">
	   				<input type="checkbox" id="editor-expand-toggle" checked="checked">Enable full-height editor and distraction-free functionality.
	   			</label>
	   		</div>
	   		<div>
	   			<input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="534908c598">
	   		</div>
	</form>
	</div>
	<a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		<i class="linecons-cog"></i>
	</a>
	<form action="" class="form-horizontal">
		<div class="row">
			<div class="col-sm-12 wrap">
				<h1>Add New Post</h1>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" tabindex="1" id="to" class="form-control" placeholder="Enter title here">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="ckeditor" rows="10" cols="40" name="content" id="content"></textarea>
					</div>
				</div>
			</div>
			<div id="postbox-container-1" class="col-sm-12 postbox-container">
				<div class="form-group">
					<div class="col-sm-12">
						<div class="publish-options">
							<div id="submitdiv" class="postbox">
								<div class="handlediv" title="Click to toggle"><br></div>
								<h3 class="hndle ui-sortable-handle"><span>Publish</span></h3>
								<div class="inside">
									<div id="submitpost" class="submitbox">
									<div class="timestamp-wrap">
										<label>
											<span class="screen-reader-text">Month</span>
											<select id="mm" name="mm">
												<option value="01" data-text="Jan" {{ (date('M') == 'Jan')?'selected=selected':'' }}>01-Jan</option>
												<option value="02" data-text="Feb" {{ (date('M') == 'Feb')?'selected=selected':'' }}>02-Feb</option>
												<option value="03" data-text="Mar" {{ (date('M') == 'Mar')?'selected=selected':'' }}>03-Mar</option>
												<option value="04" data-text="Apr" {{ (date('M') == 'Apr')?'selected=selected':'' }}>04-Apr</option>
												<option value="05" data-text="May" {{ (date('M') == 'May')?'selected=selected':'' }}>05-May</option>
												<option value="06" data-text="Jun" {{ (date('M') == 'Jun')?'selected=selected':'' }}>06-Jun</option>
												<option value="07" data-text="Jul" {{ (date('M') == 'Jul')?'selected=selected':'' }}>07-Jul</option>
												<option value="08" data-text="Aug" {{ (date('M') == 'Aug')?'selected=selected':'' }}>08-Aug</option>
												<option value="09" data-text="Sep" {{ (date('M') == 'Sep')?'selected=selected':'' }}>09-Sep</option>
												<option value="10" data-text="Oct" {{ (date('M') == 'Oct')?'selected=selected':'' }}>10-Oct</option>
												<option value="11" data-text="Nov" {{ (date('M') == 'Nov')?'selected=selected':'' }}>11-Nov</option>
												<option value="12" data-text="Dec" {{ (date('M') == 'Dec')?'selected=selected':'' }}>12-Dec</option>
											</select>
										</label> 
										<label>
											<span class="screen-reader-text">Day</span>
											<input type="text" id="jj" name="jj" value="{{ date('d') }}" size="2" maxlength="2" autocomplete="off">
										</label>, 
										<label>
											<span class="screen-reader-text">Year</span>
											<input type="text" id="aa" name="aa" value="{{ date('Y') }}" size="4" maxlength="4" autocomplete="off">
										</label> @ 
										<label>
											<span class="screen-reader-text">Hour</span>
											<input type="text" id="hh" name="hh" value="{{ date('H') }}" size="2" maxlength="2" autocomplete="off">
										</label>:
										<label>
											<span class="screen-reader-text">Minute</span>.
											<input type="text" id="mn" name="mn" value="{{ date('i') }}" size="2" maxlength="2" autocomplete="off">
										</label>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="categories-options">
							<div class="postbox " id="categorydiv">
<div title="Click to toggle" class="handlediv"><br></div><h3 class="hndle ui-sortable-handle"><span>Categories</span></h3>
<div class="inside">
	<div class="categorydiv" id="taxonomy-category">
		<ul class="category-tabs" id="category-tabs">
			<li class=""><a href="#category-all">All Categories</a></li>
			<li class="hide-if-no-js tabs"><a href="#category-pop">Most Used</a></li>
		</ul>

		<div style="" class="tabs-panel" id="category-pop">
			<ul class="categorychecklist form-no-clear" id="categorychecklist-pop">
				
		<li class="popular-category" id="popular-category-31">
			<label class="selectit">
				<input type="checkbox" value="31" id="in-popular-category-31">
				Tin mới			</label>
		</li>

		
		<li class="popular-category" id="popular-category-3">
			<label class="selectit">
				<input type="checkbox" value="3" id="in-popular-category-3">
				Pháp luật			</label>
		</li>

		
		<li class="popular-category" id="popular-category-199">
			<label class="selectit">
				<input type="checkbox" value="199" id="in-popular-category-199">
				Thời sự			</label>
		</li>

		
		<li class="popular-category" id="popular-category-190">
			<label class="selectit">
				<input type="checkbox" value="190" id="in-popular-category-190">
				Thế giới			</label>
		</li>

		
		<li class="popular-category" id="popular-category-26">
			<label class="selectit">
				<input type="checkbox" value="26" id="in-popular-category-26">
				Công nghệ			</label>
		</li>

		
		<li class="popular-category" id="popular-category-62">
			<label class="selectit">
				<input type="checkbox" value="62" id="in-popular-category-62">
				Thể thao			</label>
		</li>

		
		<li class="popular-category" id="popular-category-23">
			<label class="selectit">
				<input type="checkbox" value="23" id="in-popular-category-23">
				Kinh doanh			</label>
		</li>

		
		<li class="popular-category" id="popular-category-1706">
			<label class="selectit">
				<input type="checkbox" value="1706" id="in-popular-category-1706">
				Chuyện lạ			</label>
		</li>

		
		<li class="popular-category" id="popular-category-2287">
			<label class="selectit">
				<input type="checkbox" value="2287" id="in-popular-category-2287">
				Khoa học			</label>
		</li>

		
		<li class="popular-category" id="popular-category-85">
			<label class="selectit">
				<input type="checkbox" value="85" id="in-popular-category-85">
				Điện thoại			</label>
		</li>

					</ul>
		</div>

		<div class="tabs-panel" id="category-all" style="display: none;">
			<input type="hidden" value="0" name="post_category[]">			<ul class="categorychecklist form-no-clear" data-wp-lists="list:category" id="categorychecklist">
				
<li id="category-68"><label class="selectit"><input type="checkbox" id="in-category-68" name="post_category[]" value="68"> Âm nhạc</label><ul class="children">

<li id="category-71"><label class="selectit"><input type="checkbox" id="in-category-71" name="post_category[]" value="71"> Âu Mỹ</label></li>

<li id="category-70"><label class="selectit"><input type="checkbox" id="in-category-70" name="post_category[]" value="70"> K-POP</label></li>

<li id="category-69"><label class="selectit"><input type="checkbox" id="in-category-69" name="post_category[]" value="69"> V-POP</label></li>
</ul>
</li>

<li id="category-102"><label class="selectit"><input type="checkbox" id="in-category-102" name="post_category[]" value="102"> Ảnh</label></li>

<li class="popular-category" id="category-1706"><label class="selectit"><input type="checkbox" id="in-category-1706" name="post_category[]" value="1706"> Chuyện lạ</label></li>

<li class="popular-category" id="category-26"><label class="selectit"><input type="checkbox" id="in-category-26" name="post_category[]" value="26"> Công nghệ</label><ul class="children">

<li id="category-2338"><label class="selectit"><input type="checkbox" id="in-category-2338" name="post_category[]" value="2338"> Camera</label></li>

<li class="popular-category" id="category-2287"><label class="selectit"><input type="checkbox" id="in-category-2287" name="post_category[]" value="2287"> Khoa học</label></li>

<li id="category-3122"><label class="selectit"><input type="checkbox" id="in-category-3122" name="post_category[]" value="3122"> Máy chơi game</label></li>

<li id="category-1620"><label class="selectit"><input type="checkbox" id="in-category-1620" name="post_category[]" value="1620"> Máy tính</label>	<ul class="children">

<li id="category-3047"><label class="selectit"><input type="checkbox" id="in-category-3047" name="post_category[]" value="3047"> Máy tính Apple - Mac OS X</label></li>

<li id="category-3864"><label class="selectit"><input type="checkbox" id="in-category-3864" name="post_category[]" value="3864"> Máy tính Windows</label></li>
	</ul>
</li>

<li id="category-86"><label class="selectit"><input type="checkbox" id="in-category-86" name="post_category[]" value="86"> Máy tính bảng</label></li>

<li id="category-27"><label class="selectit"><input type="checkbox" id="in-category-27" name="post_category[]" value="27"> Nhân vật</label></li>

<li id="category-28"><label class="selectit"><input type="checkbox" id="in-category-28" name="post_category[]" value="28"> Sản phẩm ứng dụng</label></li>

<li id="category-2532"><label class="selectit"><input type="checkbox" id="in-category-2532" name="post_category[]" value="2532"> Thiết bị ngoại vi</label></li>

<li id="category-1758"><label class="selectit"><input type="checkbox" id="in-category-1758" name="post_category[]" value="1758"> Thông tin</label></li>

<li id="category-87"><label class="selectit"><input type="checkbox" id="in-category-87" name="post_category[]" value="87"> Ứng dụng di động</label></li>

<li class="popular-category" id="category-85"><label class="selectit"><input type="checkbox" id="in-category-85" name="post_category[]" value="85"> Điện thoại</label>	<ul class="children">

<li id="category-1867"><label class="selectit"><input type="checkbox" id="in-category-1867" name="post_category[]" value="1867"> Android</label>		<ul class="children">

<li id="category-1868"><label class="selectit"><input type="checkbox" id="in-category-1868" name="post_category[]" value="1868"> Tin tức - Đánh giá</label></li>
		</ul>
</li>

<li id="category-2785"><label class="selectit"><input type="checkbox" id="in-category-2785" name="post_category[]" value="2785"> BlackBerry</label>		<ul class="children">

<li id="category-2786"><label class="selectit"><input type="checkbox" id="in-category-2786" name="post_category[]" value="2786"> [BB] Tin tức - Đánh giá</label></li>
		</ul>
</li>

<li id="category-1849"><label class="selectit"><input type="checkbox" id="in-category-1849" name="post_category[]" value="1849"> iOS</label>		<ul class="children">

<li id="category-1850"><label class="selectit"><input type="checkbox" id="in-category-1850" name="post_category[]" value="1850"> Tin tức - Đánh giá</label></li>
		</ul>
</li>

<li id="category-2388"><label class="selectit"><input type="checkbox" id="in-category-2388" name="post_category[]" value="2388"> Windows Phone</label>		<ul class="children">

<li id="category-2389"><label class="selectit"><input type="checkbox" id="in-category-2389" name="post_category[]" value="2389"> Tin tức - Đánh giá</label></li>
		</ul>
</li>
	</ul>
</li>

<li id="category-1857"><label class="selectit"><input type="checkbox" id="in-category-1857" name="post_category[]" value="1857"> Điện tử</label></li>

<li id="category-4111"><label class="selectit"><input type="checkbox" id="in-category-4111" name="post_category[]" value="4111"> Đồng hồ thông minh</label></li>
</ul>
</li>

<li id="category-96"><label class="selectit"><input type="checkbox" id="in-category-96" name="post_category[]" value="96"> Du lịch</label><ul class="children">

<li id="category-1381"><label class="selectit"><input type="checkbox" id="in-category-1381" name="post_category[]" value="1381"> Ảnh</label></li>

<li id="category-99"><label class="selectit"><input type="checkbox" id="in-category-99" name="post_category[]" value="99"> Cộng đồng</label></li>

<li id="category-521"><label class="selectit"><input type="checkbox" id="in-category-521" name="post_category[]" value="521"> Quốc tế</label>	<ul class="children">

<li id="category-665"><label class="selectit"><input type="checkbox" id="in-category-665" name="post_category[]" value="665"> Hàn Quốc</label></li>
	</ul>
</li>

<li id="category-98"><label class="selectit"><input type="checkbox" id="in-category-98" name="post_category[]" value="98"> Tư vấn</label></li>

<li id="category-1293"><label class="selectit"><input type="checkbox" id="in-category-1293" name="post_category[]" value="1293"> Việt Nam</label></li>

<li id="category-97"><label class="selectit"><input type="checkbox" id="in-category-97" name="post_category[]" value="97"> Điểm đến</label></li>
</ul>
</li>

<li id="category-57"><label class="selectit"><input type="checkbox" id="in-category-57" name="post_category[]" value="57"> Giải trí</label><ul class="children">

<li id="category-58"><label class="selectit"><input type="checkbox" id="in-category-58" name="post_category[]" value="58"> Giới sao</label>	<ul class="children">

<li id="category-588"><label class="selectit"><input type="checkbox" id="in-category-588" name="post_category[]" value="588"> Quốc tế</label></li>

<li id="category-587"><label class="selectit"><input type="checkbox" id="in-category-587" name="post_category[]" value="587"> Trong nước</label></li>
	</ul>
</li>

<li id="category-60"><label class="selectit"><input type="checkbox" id="in-category-60" name="post_category[]" value="60"> Phim</label></li>

<li id="category-59"><label class="selectit"><input type="checkbox" id="in-category-59" name="post_category[]" value="59"> Thời trang</label></li>

<li id="category-2828"><label class="selectit"><input type="checkbox" id="in-category-2828" name="post_category[]" value="2828"> Truyền hình</label></li>
</ul>
</li>

<li id="category-56"><label class="selectit"><input type="checkbox" id="in-category-56" name="post_category[]" value="56"> Giáo dục</label><ul class="children">

<li id="category-485"><label class="selectit"><input type="checkbox" id="in-category-485" name="post_category[]" value="485"> Học tiếng Anh</label></li>

<li id="category-604"><label class="selectit"><input type="checkbox" id="in-category-604" name="post_category[]" value="604"> Tuyển sinh</label></li>
</ul>
</li>

<li id="category-7416"><label class="selectit"><input type="checkbox" id="in-category-7416" name="post_category[]" value="7416"> Infographic</label></li>

<li id="category-29"><label class="selectit"><input type="checkbox" id="in-category-29" name="post_category[]" value="29"> Kiến thức</label></li>

<li class="popular-category" id="category-23"><label class="selectit"><input type="checkbox" id="in-category-23" name="post_category[]" value="23"> Kinh doanh</label><ul class="children">

<li id="category-1747"><label class="selectit"><input type="checkbox" id="in-category-1747" name="post_category[]" value="1747"> Bất động sản</label></li>

<li id="category-1892"><label class="selectit"><input type="checkbox" id="in-category-1892" name="post_category[]" value="1892"> Chứng khoán</label></li>

<li id="category-51"><label class="selectit"><input type="checkbox" id="in-category-51" name="post_category[]" value="51"> Doanh nghiệp</label>	<ul class="children">

<li id="category-52"><label class="selectit"><input type="checkbox" id="in-category-52" name="post_category[]" value="52"> Doanh nghiệp viết</label></li>
	</ul>
</li>

<li id="category-61"><label class="selectit"><input type="checkbox" id="in-category-61" name="post_category[]" value="61"> Hàng hóa</label>	<ul class="children">

<li id="category-357"><label class="selectit"><input type="checkbox" id="in-category-357" name="post_category[]" value="357"> Sản phẩm mới</label>		<ul class="children">

<li id="category-358"><label class="selectit"><input type="checkbox" id="in-category-358" name="post_category[]" value="358"> Khuyến mãi</label></li>
		</ul>
</li>
	</ul>
</li>

<li id="category-25"><label class="selectit"><input type="checkbox" id="in-category-25" name="post_category[]" value="25"> Hướng nghiệp</label></li>

<li id="category-1290"><label class="selectit"><input type="checkbox" id="in-category-1290" name="post_category[]" value="1290"> Quốc tế</label></li>

<li id="category-24"><label class="selectit"><input type="checkbox" id="in-category-24" name="post_category[]" value="24"> Thương trường</label></li>
</ul>
</li>

<li id="category-72"><label class="selectit"><input type="checkbox" id="in-category-72" name="post_category[]" value="72"> Nhịp sống</label><ul class="children">

<li id="category-73"><label class="selectit"><input type="checkbox" id="in-category-73" name="post_category[]" value="73"> Ẩm thực</label></li>

<li id="category-74"><label class="selectit"><input type="checkbox" id="in-category-74" name="post_category[]" value="74"> Cười</label></li>

<li id="category-75"><label class="selectit"><input type="checkbox" id="in-category-75" name="post_category[]" value="75"> Trắc nghiệm</label></li>
</ul>
</li>

<li class="popular-category" id="category-3"><label class="selectit"><input type="checkbox" id="in-category-3" name="post_category[]" value="3"> Pháp luật</label></li>

<li id="category-1124"><label class="selectit"><input type="checkbox" id="in-category-1124" name="post_category[]" value="1124"> Phim</label></li>

<li id="category-88"><label class="selectit"><input type="checkbox" id="in-category-88" name="post_category[]" value="88"> Số hóa</label><ul class="children">

<li id="category-89"><label class="selectit"><input type="checkbox" id="in-category-89" name="post_category[]" value="89"> Sản phẩm</label></li>

<li id="category-90"><label class="selectit"><input type="checkbox" id="in-category-90" name="post_category[]" value="90"> Đánh giá</label></li>

<li id="category-91"><label class="selectit"><input type="checkbox" id="in-category-91" name="post_category[]" value="91"> Đời sống số</label></li>
</ul>
</li>

<li id="category-4"><label class="selectit"><input type="checkbox" id="in-category-4" name="post_category[]" value="4"> Sống</label><ul class="children">

<li id="category-5"><label class="selectit"><input type="checkbox" id="in-category-5" name="post_category[]" value="5"> Chất</label></li>

<li id="category-6"><label class="selectit"><input type="checkbox" id="in-category-6" name="post_category[]" value="6"> Lạ</label></li>

<li id="category-7"><label class="selectit"><input type="checkbox" id="in-category-7" name="post_category[]" value="7"> Nhảm</label></li>

<li id="category-8"><label class="selectit"><input type="checkbox" id="in-category-8" name="post_category[]" value="8"> Vui</label></li>

<li id="category-9"><label class="selectit"><input type="checkbox" id="in-category-9" name="post_category[]" value="9"> Đẹp</label></li>
</ul>
</li>

<li id="category-30"><label class="selectit"><input type="checkbox" id="in-category-30" name="post_category[]" value="30"> Sự kiện</label></li>

<li id="category-76"><label class="selectit"><input type="checkbox" id="in-category-76" name="post_category[]" value="76"> Sức khỏe</label><ul class="children">

<li id="category-4706"><label class="selectit"><input type="checkbox" id="in-category-4706" name="post_category[]" value="4706"> Giảm cân</label></li>

<li id="category-77"><label class="selectit"><input type="checkbox" id="in-category-77" name="post_category[]" value="77"> Giới tính</label></li>

<li id="category-78"><label class="selectit"><input type="checkbox" id="in-category-78" name="post_category[]" value="78"> Thẩm mỹ</label></li>

<li id="category-335"><label class="selectit"><input type="checkbox" id="in-category-335" name="post_category[]" value="335"> Tin tức</label></li>

<li id="category-79"><label class="selectit"><input type="checkbox" id="in-category-79" name="post_category[]" value="79"> Tư vấn</label></li>
</ul>
</li>

<li class="popular-category" id="category-190"><label class="selectit"><input type="checkbox" id="in-category-190" name="post_category[]" value="190"> Thế giới</label><ul class="children">

<li id="category-1205"><label class="selectit"><input type="checkbox" id="in-category-1205" name="post_category[]" value="1205"> Cuộc sống đó đây</label></li>

<li id="category-615"><label class="selectit"><input type="checkbox" id="in-category-615" name="post_category[]" value="615"> Người Việt 5 châu</label></li>

<li id="category-3878"><label class="selectit"><input type="checkbox" id="in-category-3878" name="post_category[]" value="3878"> Phân tích</label></li>

<li id="category-339"><label class="selectit"><input type="checkbox" id="in-category-339" name="post_category[]" value="339"> Tư liệu</label></li>
</ul>
</li>

<li class="popular-category" id="category-62"><label class="selectit"><input type="checkbox" id="in-category-62" name="post_category[]" value="62"> Thể thao</label><ul class="children">

<li id="category-1884"><label class="selectit"><input type="checkbox" id="in-category-1884" name="post_category[]" value="1884"> Ảnh</label></li>

<li id="category-1331"><label class="selectit"><input type="checkbox" id="in-category-1331" name="post_category[]" value="1331"> Bóng đá</label></li>

<li id="category-65"><label class="selectit"><input type="checkbox" id="in-category-65" name="post_category[]" value="65"> Bóng đá Anh</label></li>

<li id="category-67"><label class="selectit"><input type="checkbox" id="in-category-67" name="post_category[]" value="67"> Bóng đá TBN</label></li>

<li id="category-3387"><label class="selectit"><input type="checkbox" id="in-category-3387" name="post_category[]" value="3387"> Các môn khác</label></li>

<li id="category-66"><label class="selectit"><input type="checkbox" id="in-category-66" name="post_category[]" value="66"> Cúp Châu Âu</label></li>

<li id="category-1305"><label class="selectit"><input type="checkbox" id="in-category-1305" name="post_category[]" value="1305"> Tennis</label></li>

<li id="category-64"><label class="selectit"><input type="checkbox" id="in-category-64" name="post_category[]" value="64"> Thể thao thế giới</label></li>

<li id="category-63"><label class="selectit"><input type="checkbox" id="in-category-63" name="post_category[]" value="63"> Việt Nam</label></li>
</ul>
</li>

<li id="category-1"><label class="selectit"><input type="checkbox" id="in-category-1" name="post_category[]" value="1"> Thị trường</label></li>

<li id="category-10"><label class="selectit"><input type="checkbox" id="in-category-10" name="post_category[]" value="10"> Thời cuộc</label><ul class="children">

<li id="category-12"><label class="selectit"><input type="checkbox" id="in-category-12" name="post_category[]" value="12"> Bình luận</label></li>

<li id="category-11"><label class="selectit"><input type="checkbox" id="in-category-11" name="post_category[]" value="11"> Góc nhìn</label></li>

<li id="category-13"><label class="selectit"><input type="checkbox" id="in-category-13" name="post_category[]" value="13"> Nhân vật</label></li>

<li id="category-14"><label class="selectit"><input type="checkbox" id="in-category-14" name="post_category[]" value="14"> Tản mạn</label></li>
</ul>
</li>

<li class="popular-category" id="category-199"><label class="selectit"><input type="checkbox" id="in-category-199" name="post_category[]" value="199"> Thời sự</label><ul class="children">

<li id="category-304"><label class="selectit"><input type="checkbox" id="in-category-304" name="post_category[]" value="304"> Giao thông</label></li>

<li id="category-4985"><label class="selectit"><input type="checkbox" id="in-category-4985" name="post_category[]" value="4985"> Photo</label></li>
</ul>
</li>

<li id="category-5688"><label class="selectit"><input type="checkbox" id="in-category-5688" name="post_category[]" value="5688"> Tiếp thị</label></li>

<li class="popular-category" id="category-31"><label class="selectit"><input type="checkbox" id="in-category-31" name="post_category[]" value="31"> Tin mới</label></li>

<li id="category-139"><label class="selectit"><input type="checkbox" id="in-category-139" name="post_category[]" value="139"> Tin tức</label></li>

<li id="category-15"><label class="selectit"><input type="checkbox" id="in-category-15" name="post_category[]" value="15"> Tri thức</label><ul class="children">

<li id="category-16"><label class="selectit"><input type="checkbox" id="in-category-16" name="post_category[]" value="16"> Chính trị - Triết học</label></li>

<li id="category-17"><label class="selectit"><input type="checkbox" id="in-category-17" name="post_category[]" value="17"> Khoa học</label></li>

<li id="category-18"><label class="selectit"><input type="checkbox" id="in-category-18" name="post_category[]" value="18"> Kinh tế</label></li>

<li id="category-19"><label class="selectit"><input type="checkbox" id="in-category-19" name="post_category[]" value="19"> Lịch sử</label></li>

<li id="category-20"><label class="selectit"><input type="checkbox" id="in-category-20" name="post_category[]" value="20"> Nghệ thuật</label></li>

<li id="category-21"><label class="selectit"><input type="checkbox" id="in-category-21" name="post_category[]" value="21"> Quân sự</label></li>

<li id="category-22"><label class="selectit"><input type="checkbox" id="in-category-22" name="post_category[]" value="22"> Tôn giáo - Tâm linh</label></li>
</ul>
</li>

<li id="category-101"><label class="selectit"><input type="checkbox" id="in-category-101" name="post_category[]" value="101"> Video</label><ul class="children">

<li id="category-110"><label class="selectit"><input type="checkbox" id="in-category-110" name="post_category[]" value="110"> Camera bạn đọc</label></li>

<li id="category-104"><label class="selectit"><input type="checkbox" id="in-category-104" name="post_category[]" value="104"> Chân dung</label></li>

<li id="category-105"><label class="selectit"><input type="checkbox" id="in-category-105" name="post_category[]" value="105"> Giải trí</label>	<ul class="children">

<li id="category-118"><label class="selectit"><input type="checkbox" id="in-category-118" name="post_category[]" value="118"> Du lịch</label></li>

<li id="category-113"><label class="selectit"><input type="checkbox" id="in-category-113" name="post_category[]" value="113"> Nhạc</label></li>

<li id="category-115"><label class="selectit"><input type="checkbox" id="in-category-115" name="post_category[]" value="115"> Phim</label>		<ul class="children">

<li id="category-1125"><label class="selectit"><input type="checkbox" id="in-category-1125" name="post_category[]" value="1125"> Hoạt hình</label></li>
		</ul>
</li>

<li id="category-117"><label class="selectit"><input type="checkbox" id="in-category-117" name="post_category[]" value="117"> Sao</label></li>

<li id="category-116"><label class="selectit"><input type="checkbox" id="in-category-116" name="post_category[]" value="116"> Thời trang</label></li>

<li id="category-114"><label class="selectit"><input type="checkbox" id="in-category-114" name="post_category[]" value="114"> Truyền hình</label></li>
	</ul>
</li>

<li id="category-109"><label class="selectit"><input type="checkbox" id="in-category-109" name="post_category[]" value="109"> Hot trong tuần</label></li>

<li id="category-108"><label class="selectit"><input type="checkbox" id="in-category-108" name="post_category[]" value="108"> Thế giới muôn màu</label>	<ul class="children">

<li id="category-128"><label class="selectit"><input type="checkbox" id="in-category-128" name="post_category[]" value="128"> Camera giao thông</label></li>

<li id="category-127"><label class="selectit"><input type="checkbox" id="in-category-127" name="post_category[]" value="127"> Chuyện lạ</label></li>

<li id="category-129"><label class="selectit"><input type="checkbox" id="in-category-129" name="post_category[]" value="129"> Cười</label></li>
	</ul>
</li>

<li id="category-106"><label class="selectit"><input type="checkbox" id="in-category-106" name="post_category[]" value="106"> Thể thao</label>	<ul class="children">

<li id="category-119"><label class="selectit"><input type="checkbox" id="in-category-119" name="post_category[]" value="119"> Bóng đá</label></li>

<li id="category-121"><label class="selectit"><input type="checkbox" id="in-category-121" name="post_category[]" value="121"> Các môn khác</label></li>

<li id="category-122"><label class="selectit"><input type="checkbox" id="in-category-122" name="post_category[]" value="122"> Hậu trường</label></li>

<li id="category-120"><label class="selectit"><input type="checkbox" id="in-category-120" name="post_category[]" value="120"> Tennis</label></li>
	</ul>
</li>

<li id="category-103"><label class="selectit"><input type="checkbox" id="in-category-103" name="post_category[]" value="103"> Thời sự</label>	<ul class="children">

<li id="category-112"><label class="selectit"><input type="checkbox" id="in-category-112" name="post_category[]" value="112"> Thế giới</label></li>

<li id="category-111"><label class="selectit"><input type="checkbox" id="in-category-111" name="post_category[]" value="111"> Trong nước</label></li>
	</ul>
</li>

<li id="category-107"><label class="selectit"><input type="checkbox" id="in-category-107" name="post_category[]" value="107"> Tư vấn</label>	<ul class="children">

<li id="category-124"><label class="selectit"><input type="checkbox" id="in-category-124" name="post_category[]" value="124"> Công nghệ</label></li>

<li id="category-123"><label class="selectit"><input type="checkbox" id="in-category-123" name="post_category[]" value="123"> Kỹ năng cuộc sống</label></li>

<li id="category-125"><label class="selectit"><input type="checkbox" id="in-category-125" name="post_category[]" value="125"> Tiền của bạn</label></li>

<li id="category-126"><label class="selectit"><input type="checkbox" id="in-category-126" name="post_category[]" value="126"> Xe</label></li>
	</ul>
</li>
</ul>
</li>

<li id="category-134"><label class="selectit"><input type="checkbox" id="in-category-134" name="post_category[]" value="134"> videogallery</label></li>

<li id="category-92"><label class="selectit"><input type="checkbox" id="in-category-92" name="post_category[]" value="92"> Xã hội</label><ul class="children">

<li id="category-95"><label class="selectit"><input type="checkbox" id="in-category-95" name="post_category[]" value="95"> Ảnh &amp; Video</label></li>

<li id="category-94"><label class="selectit"><input type="checkbox" id="in-category-94" name="post_category[]" value="94"> Từ thiện</label></li>

<li id="category-93"><label class="selectit"><input type="checkbox" id="in-category-93" name="post_category[]" value="93"> Đô thị</label></li>
</ul>
</li>

<li id="category-80"><label class="selectit"><input type="checkbox" id="in-category-80" name="post_category[]" value="80"> Xe 360</label><ul class="children">

<li id="category-3869"><label class="selectit"><input type="checkbox" id="in-category-3869" name="post_category[]" value="3869"> Giao thông &amp; PTVC khác</label></li>

<li id="category-82"><label class="selectit"><input type="checkbox" id="in-category-82" name="post_category[]" value="82"> Ô-tô</label></li>

<li id="category-84"><label class="selectit"><input type="checkbox" id="in-category-84" name="post_category[]" value="84"> Siêu xe</label></li>

<li id="category-81"><label class="selectit"><input type="checkbox" id="in-category-81" name="post_category[]" value="81"> Xe máy</label></li>

<li id="category-83"><label class="selectit"><input type="checkbox" id="in-category-83" name="post_category[]" value="83"> Xe độ</label></li>
</ul>
</li>

<li id="category-329"><label class="selectit"><input type="checkbox" id="in-category-329" name="post_category[]" value="329"> Đời sống</label><ul class="children">

<li id="category-330"><label class="selectit"><input type="checkbox" id="in-category-330" name="post_category[]" value="330"> Gia đình</label></li>
</ul>
</li>
			</ul>
		</div>
				<div class="wp-hidden-children" id="category-adder">
				<h4>
					<a class="hide-if-no-js" href="#category-add" id="category-add-toggle">
						+ Add New Category					</a>
				</h4>
				<p class="category-add wp-hidden-child" id="category-add">
					<label for="newcategory" class="screen-reader-text">Add New Category</label>
					<input type="text" aria-required="true" value="New Category Name" class="form-required form-input-tip" id="newcategory" name="newcategory">
					<label for="newcategory_parent" class="screen-reader-text">
						Parent Category:					</label>
					<select class="postform" id="newcategory_parent" name="newcategory_parent">
	<option value="-1">&mdash; Parent Category &mdash;</option>
	<option value="68" class="level-0">Âm nhạc</option>
	<option value="71" class="level-1">&nbsp;&nbsp;&nbsp;Âu Mỹ</option>
	<option value="70" class="level-1">&nbsp;&nbsp;&nbsp;K-POP</option>
	<option value="69" class="level-1">&nbsp;&nbsp;&nbsp;V-POP</option>
	<option value="102" class="level-0">Ảnh</option>
	<option value="1706" class="level-0">Chuyện lạ</option>
	<option value="26" class="level-0">Công nghệ</option>
	<option value="2338" class="level-1">&nbsp;&nbsp;&nbsp;Camera</option>
	<option value="2287" class="level-1">&nbsp;&nbsp;&nbsp;Khoa học</option>
	<option value="3122" class="level-1">&nbsp;&nbsp;&nbsp;Máy chơi game</option>
	<option value="1620" class="level-1">&nbsp;&nbsp;&nbsp;Máy tính</option>
	<option value="3047" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Máy tính Apple &ndash; Mac OS X</option>
	<option value="3864" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Máy tính Windows</option>
	<option value="86" class="level-1">&nbsp;&nbsp;&nbsp;Máy tính bảng</option>
	<option value="27" class="level-1">&nbsp;&nbsp;&nbsp;Nhân vật</option>
	<option value="28" class="level-1">&nbsp;&nbsp;&nbsp;Sản phẩm ứng dụng</option>
	<option value="2532" class="level-1">&nbsp;&nbsp;&nbsp;Thiết bị ngoại vi</option>
	<option value="1758" class="level-1">&nbsp;&nbsp;&nbsp;Thông tin</option>
	<option value="87" class="level-1">&nbsp;&nbsp;&nbsp;Ứng dụng di động</option>
	<option value="85" class="level-1">&nbsp;&nbsp;&nbsp;Điện thoại</option>
	<option value="1867" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android</option>
	<option value="1868" class="level-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tin tức &ndash; Đánh giá</option>
	<option value="2785" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BlackBerry</option>
	<option value="2786" class="level-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[BB] Tin tức &ndash; Đánh giá</option>
	<option value="1849" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS</option>
	<option value="1850" class="level-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tin tức &ndash; Đánh giá</option>
	<option value="2388" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows Phone</option>
	<option value="2389" class="level-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tin tức &ndash; Đánh giá</option>
	<option value="1857" class="level-1">&nbsp;&nbsp;&nbsp;Điện tử</option>
	<option value="4111" class="level-1">&nbsp;&nbsp;&nbsp;Đồng hồ thông minh</option>
	<option value="96" class="level-0">Du lịch</option>
	<option value="1381" class="level-1">&nbsp;&nbsp;&nbsp;Ảnh</option>
	<option value="99" class="level-1">&nbsp;&nbsp;&nbsp;Cộng đồng</option>
	<option value="521" class="level-1">&nbsp;&nbsp;&nbsp;Quốc tế</option>
	<option value="665" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hàn Quốc</option>
	<option value="98" class="level-1">&nbsp;&nbsp;&nbsp;Tư vấn</option>
	<option value="1293" class="level-1">&nbsp;&nbsp;&nbsp;Việt Nam</option>
	<option value="97" class="level-1">&nbsp;&nbsp;&nbsp;Điểm đến</option>
	<option value="57" class="level-0">Giải trí</option>
	<option value="58" class="level-1">&nbsp;&nbsp;&nbsp;Giới sao</option>
	<option value="588" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quốc tế</option>
	<option value="587" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trong nước</option>
	<option value="60" class="level-1">&nbsp;&nbsp;&nbsp;Phim</option>
	<option value="59" class="level-1">&nbsp;&nbsp;&nbsp;Thời trang</option>
	<option value="2828" class="level-1">&nbsp;&nbsp;&nbsp;Truyền hình</option>
	<option value="56" class="level-0">Giáo dục</option>
	<option value="485" class="level-1">&nbsp;&nbsp;&nbsp;Học tiếng Anh</option>
	<option value="604" class="level-1">&nbsp;&nbsp;&nbsp;Tuyển sinh</option>
	<option value="7416" class="level-0">Infographic</option>
	<option value="29" class="level-0">Kiến thức</option>
	<option value="23" class="level-0">Kinh doanh</option>
	<option value="1747" class="level-1">&nbsp;&nbsp;&nbsp;Bất động sản</option>
	<option value="1892" class="level-1">&nbsp;&nbsp;&nbsp;Chứng khoán</option>
	<option value="51" class="level-1">&nbsp;&nbsp;&nbsp;Doanh nghiệp</option>
	<option value="52" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doanh nghiệp viết</option>
	<option value="61" class="level-1">&nbsp;&nbsp;&nbsp;Hàng hóa</option>
	<option value="357" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sản phẩm mới</option>
	<option value="358" class="level-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khuyến mãi</option>
	<option value="25" class="level-1">&nbsp;&nbsp;&nbsp;Hướng nghiệp</option>
	<option value="1290" class="level-1">&nbsp;&nbsp;&nbsp;Quốc tế</option>
	<option value="24" class="level-1">&nbsp;&nbsp;&nbsp;Thương trường</option>
	<option value="72" class="level-0">Nhịp sống</option>
	<option value="73" class="level-1">&nbsp;&nbsp;&nbsp;Ẩm thực</option>
	<option value="74" class="level-1">&nbsp;&nbsp;&nbsp;Cười</option>
	<option value="75" class="level-1">&nbsp;&nbsp;&nbsp;Trắc nghiệm</option>
	<option value="3" class="level-0">Pháp luật</option>
	<option value="1124" class="level-0">Phim</option>
	<option value="88" class="level-0">Số hóa</option>
	<option value="89" class="level-1">&nbsp;&nbsp;&nbsp;Sản phẩm</option>
	<option value="90" class="level-1">&nbsp;&nbsp;&nbsp;Đánh giá</option>
	<option value="91" class="level-1">&nbsp;&nbsp;&nbsp;Đời sống số</option>
	<option value="4" class="level-0">Sống</option>
	<option value="5" class="level-1">&nbsp;&nbsp;&nbsp;Chất</option>
	<option value="6" class="level-1">&nbsp;&nbsp;&nbsp;Lạ</option>
	<option value="7" class="level-1">&nbsp;&nbsp;&nbsp;Nhảm</option>
	<option value="8" class="level-1">&nbsp;&nbsp;&nbsp;Vui</option>
	<option value="9" class="level-1">&nbsp;&nbsp;&nbsp;Đẹp</option>
	<option value="30" class="level-0">Sự kiện</option>
	<option value="76" class="level-0">Sức khỏe</option>
	<option value="4706" class="level-1">&nbsp;&nbsp;&nbsp;Giảm cân</option>
	<option value="77" class="level-1">&nbsp;&nbsp;&nbsp;Giới tính</option>
	<option value="78" class="level-1">&nbsp;&nbsp;&nbsp;Thẩm mỹ</option>
	<option value="335" class="level-1">&nbsp;&nbsp;&nbsp;Tin tức</option>
	<option value="79" class="level-1">&nbsp;&nbsp;&nbsp;Tư vấn</option>
	<option value="190" class="level-0">Thế giới</option>
	<option value="1205" class="level-1">&nbsp;&nbsp;&nbsp;Cuộc sống đó đây</option>
	<option value="615" class="level-1">&nbsp;&nbsp;&nbsp;Người Việt 5 châu</option>
	<option value="3878" class="level-1">&nbsp;&nbsp;&nbsp;Phân tích</option>
	<option value="339" class="level-1">&nbsp;&nbsp;&nbsp;Tư liệu</option>
	<option value="62" class="level-0">Thể thao</option>
	<option value="1884" class="level-1">&nbsp;&nbsp;&nbsp;Ảnh</option>
	<option value="1331" class="level-1">&nbsp;&nbsp;&nbsp;Bóng đá</option>
	<option value="65" class="level-1">&nbsp;&nbsp;&nbsp;Bóng đá Anh</option>
	<option value="67" class="level-1">&nbsp;&nbsp;&nbsp;Bóng đá TBN</option>
	<option value="3387" class="level-1">&nbsp;&nbsp;&nbsp;Các môn khác</option>
	<option value="66" class="level-1">&nbsp;&nbsp;&nbsp;Cúp Châu Âu</option>
	<option value="1305" class="level-1">&nbsp;&nbsp;&nbsp;Tennis</option>
	<option value="64" class="level-1">&nbsp;&nbsp;&nbsp;Thể thao thế giới</option>
	<option value="63" class="level-1">&nbsp;&nbsp;&nbsp;Việt Nam</option>
	<option value="1" class="level-0">Thị trường</option>
	<option value="10" class="level-0">Thời cuộc</option>
	<option value="12" class="level-1">&nbsp;&nbsp;&nbsp;Bình luận</option>
	<option value="11" class="level-1">&nbsp;&nbsp;&nbsp;Góc nhìn</option>
	<option value="13" class="level-1">&nbsp;&nbsp;&nbsp;Nhân vật</option>
	<option value="14" class="level-1">&nbsp;&nbsp;&nbsp;Tản mạn</option>
	<option value="199" class="level-0">Thời sự</option>
	<option value="304" class="level-1">&nbsp;&nbsp;&nbsp;Giao thông</option>
	<option value="4985" class="level-1">&nbsp;&nbsp;&nbsp;Photo</option>
	<option value="5688" class="level-0">Tiếp thị</option>
	<option value="31" class="level-0">Tin mới</option>
	<option value="139" class="level-0">Tin tức</option>
	<option value="15" class="level-0">Tri thức</option>
	<option value="16" class="level-1">&nbsp;&nbsp;&nbsp;Chính trị &ndash; Triết học</option>
	<option value="17" class="level-1">&nbsp;&nbsp;&nbsp;Khoa học</option>
	<option value="18" class="level-1">&nbsp;&nbsp;&nbsp;Kinh tế</option>
	<option value="19" class="level-1">&nbsp;&nbsp;&nbsp;Lịch sử</option>
	<option value="20" class="level-1">&nbsp;&nbsp;&nbsp;Nghệ thuật</option>
	<option value="21" class="level-1">&nbsp;&nbsp;&nbsp;Quân sự</option>
	<option value="22" class="level-1">&nbsp;&nbsp;&nbsp;Tôn giáo &ndash; Tâm linh</option>
	<option value="101" class="level-0">Video</option>
	<option value="110" class="level-1">&nbsp;&nbsp;&nbsp;Camera bạn đọc</option>
	<option value="104" class="level-1">&nbsp;&nbsp;&nbsp;Chân dung</option>
	<option value="105" class="level-1">&nbsp;&nbsp;&nbsp;Giải trí</option>
	<option value="118" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Du lịch</option>
	<option value="113" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nhạc</option>
	<option value="115" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phim</option>
	<option value="1125" class="level-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hoạt hình</option>
	<option value="117" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sao</option>
	<option value="116" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thời trang</option>
	<option value="114" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Truyền hình</option>
	<option value="109" class="level-1">&nbsp;&nbsp;&nbsp;Hot trong tuần</option>
	<option value="108" class="level-1">&nbsp;&nbsp;&nbsp;Thế giới muôn màu</option>
	<option value="128" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camera giao thông</option>
	<option value="127" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chuyện lạ</option>
	<option value="129" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cười</option>
	<option value="106" class="level-1">&nbsp;&nbsp;&nbsp;Thể thao</option>
	<option value="119" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bóng đá</option>
	<option value="121" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Các môn khác</option>
	<option value="122" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hậu trường</option>
	<option value="120" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tennis</option>
	<option value="103" class="level-1">&nbsp;&nbsp;&nbsp;Thời sự</option>
	<option value="112" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thế giới</option>
	<option value="111" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trong nước</option>
	<option value="107" class="level-1">&nbsp;&nbsp;&nbsp;Tư vấn</option>
	<option value="124" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công nghệ</option>
	<option value="123" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kỹ năng cuộc sống</option>
	<option value="125" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiền của bạn</option>
	<option value="126" class="level-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xe</option>
	<option value="134" class="level-0">videogallery</option>
	<option value="92" class="level-0">Xã hội</option>
	<option value="95" class="level-1">&nbsp;&nbsp;&nbsp;Ảnh &amp; Video</option>
	<option value="94" class="level-1">&nbsp;&nbsp;&nbsp;Từ thiện</option>
	<option value="93" class="level-1">&nbsp;&nbsp;&nbsp;Đô thị</option>
	<option value="80" class="level-0">Xe 360</option>
	<option value="3869" class="level-1">&nbsp;&nbsp;&nbsp;Giao thông &amp; PTVC khác</option>
	<option value="82" class="level-1">&nbsp;&nbsp;&nbsp;Ô-tô</option>
	<option value="84" class="level-1">&nbsp;&nbsp;&nbsp;Siêu xe</option>
	<option value="81" class="level-1">&nbsp;&nbsp;&nbsp;Xe máy</option>
	<option value="83" class="level-1">&nbsp;&nbsp;&nbsp;Xe độ</option>
	<option value="329" class="level-0">Đời sống</option>
	<option value="330" class="level-1">&nbsp;&nbsp;&nbsp;Gia đình</option>
</select>
					<input type="button" value="Add New Category" class="button category-add-submit" data-wp-lists="add:categorychecklist:category-add" id="category-add-submit">
					<input type="hidden" value="fdb8f919ef" name="_ajax_nonce-add-category" id="_ajax_nonce-add-category">					<span id="category-ajax-response"></span>
				</p>
			</div>
			</div>
	</div>
</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="featured-options">
							
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="tags-options">
							
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="author-options">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
{!! nation_list('slNation', ['class'=>'form-control'], '----') !!}
{!! number_list('slNation', ['class'=>'form-control'], '----', 20, true, 'Days') !!}
@stop

@section('script')
	<script>

	</script>
	{!! HTML::style('admin.css') !!}
	@include('module.ckeditor.index')
	<script>
		CKEDITOR.replace( 'content' ,{ filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' });

	</script>
	{!! HTML::script('postbox.min.js') !!}
	<style type="text/css" media="screen">
		.hndle {
			cursor: move;
		}
		.postbox {
			min-width: 255px;
			border: 1px solid #e5e5e5;
			background: #fff;
			font-family: "Open Sans",sans-serif !important;
		}
		.postbox h3 {
			font-size: 14px;
		    padding: 8px 12px;
		    margin: 0;
		    line-height: 1.4;
		    font-weight: bold;

		}
		.postbox .handlediv {
		    float: right;
		    width: 27px;
		    height: 30px;
		    cursor: pointer;	
		}
		.postbox .handlediv:before {
			right: 12px;
		    font: 400 20px/1 FontAwesome;
		    speak: none;
		    display: inline-block;
		    padding: 8px 10px;
		    top: 0;
		    position: relative;
		    text-decoration: none!important;
		    content: '\f0dd';
		}
		.postbox .inside {
			margin: 6px 0 0;
			padding: 0 12px 12px;
			font-size: 13px;
			border-top: 1px solid #e5e5e5;
		}

	</style>
@stop
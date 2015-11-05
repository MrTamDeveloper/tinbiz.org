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
						<input type="text" tabindex="1" id="to" class="form-control f16" placeholder="Enter title here">
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
								<div class="col-sm-6">
									<h3 class="hndle ui-sortable-handle"><span>Publish</span></h3>
								</div>
								<div class="handlediv" title="Click to toggle"><br></div>
								<div class="clearfix"></div>
								<div class="inside">
									<div id="submitpost" class="submitbox col-sm-12">
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
								<div class="clearfix"></div>
								<div class="inside-footer">
									<div class="col-sm-6">
										<a class="submitdelete deletion" href="http://tinbiz.org/wp-admin/post.php?post=16107&action=trash&_wpnonce=43a555b773">Move to Trash</a>
									</div>
									<div class="col-sm-6 text-right">
										<input name="original_publish" type="hidden" id="original_publish" value="Publish">
										<input type="submit" name="publish" id="publish" class="btn btn-blue" value="Publish">
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
								<div class="col-sm-6">
									<h3 class="hndle ui-sortable-handle"><span>Categories</span></h3>
								</div>
								<div class="handlediv" title="Click to toggle"><br></div>
								<div class="clearfix"></div>
								<div class="inside">
									<div id="taxonomy-category" class="categorydiv col-sm-12">
										<ul id="category-tabs" class="nav nav-tabs">
											<li class="active">
												<a data-toggle="tab" href="#category-pop" aria-expanded="true">
													<span class="visible-xs"><i class="fa-home"></i></span>
													<span class="hidden-xs">All Categories</span>
												</a>
											</li>
											<li class="">
												<a data-toggle="tab" href="#category-all" aria-expanded="false">
													<span class="visible-xs"><i class="fa-user"></i></span>
													<span class="hidden-xs">Most Used</span>
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div id="category-pop" class="tab-pane active">
												<ul id="categorychecklist" class="categorychecklist">
													<li id="category-71"><label class="selectit"><input value="71" type="checkbox" name="post_category[]" id="in-category-71"> Âu Mỹ</label></li>

													<li id="category-70"><label class="selectit"><input value="70" type="checkbox" name="post_category[]" id="in-category-70"> K-POP</label></li>

													<li id="category-69"><label class="selectit"><input value="69" type="checkbox" name="post_category[]" id="in-category-69"> V-POP</label></li>

													<li id="category-102"><label class="selectit"><input value="102" type="checkbox" name="post_category[]" id="in-category-102"> Ảnh</label></li>

													<li id="category-1706" class="popular-category"><label class="selectit"><input value="1706" type="checkbox" name="post_category[]" id="in-category-1706"> Chuyện lạ</label></li>
												</ul>
											</div>
											<div id="category-all" class="tab-pane">
												<ul id="categorychecklist-pop" class="categorychecklist">
													<li id="category-71"><label class="selectit"><input value="71" type="checkbox" name="post_category[]" id="in-category-71"> Âu Mỹ</label></li>

													<li id="category-70"><label class="selectit"><input value="70" type="checkbox" name="post_category[]" id="in-category-70"> K-POP</label></li>

													<li id="category-69"><label class="selectit"><input value="69" type="checkbox" name="post_category[]" id="in-category-69"> V-POP</label></li>
												</ul>
											</div>
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
<?php 
	if (Request::is('administrator/post-new'))
	{
	    echo "lalalaaaaaaaaaaaaaa";
	}
?>
{!! nation_list('slNation', ['class'=>'form-control'], '----') !!}
{!! number_list('slNation', ['class'=>'form-control'], '----', 20, true, 'Days') !!}
@stop

@section('script')
	<script>

	</script>
	{!! HTML::style('admin.css') !!}
	@include('module.ckeditor.index')
	<script>

		CKEDITOR.replace( 'content' ,{ filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=', height: 350 });
	</script>
	{!! HTML::script('postbox.min.js') !!}
	<style type="text/css" media="screen">
		.hndle {
			cursor: move;
		}

		.f16 {
			font-size: 16px;
		}

		.submitdelete {
			color: #a00;
			line-height: 28px;
		}


		.postbox {
			min-width: 255px;
			border: 1px solid #e5e5e5;
			background: #fff;
			font-family: "Open Sans",sans-serif !important;
			overflow: hidden;
		}
		.postbox h3 {
			font-size: 14px;
		    padding-top: 8px;
		    padding-bottom: 8px;
		    margin: 0;
		    line-height: 1.4;
		    font-weight: bold;

		}
		.postbox .handlediv {
		    width: 36px;
		    cursor: pointer;
		    float: right;	
		}
		.postbox .handlediv:before {
		    font: 400 20px/1 FontAwesome;
		    speak: none;
		    display: inline-block;
		    padding: 4px 10px;
		    top: 0;
		    position: relative;
		    text-decoration: none!important;
		    content: '\f0dd';
		}
		.postbox .inside {
			padding: 12px 0;
			font-size: 13px;
			border-top: 1px solid #e5e5e5;
			overflow: hidden;
		}

		.postbox .inside-footer {
			padding: 10px 0;
			background: #f5f5f5;
			border-top: 1px solid #ddd;
			overflow: hidden;
		}

		.postbox .inside-footer .btn {
			margin-bottom: 0;
		}

	</style>
@stop
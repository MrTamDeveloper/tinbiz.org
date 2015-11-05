@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Tour</h1>
		<p class="description">Create tour new</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="{{ asset('administrator') }}"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="">Tour</a>
			</li>
			<li class="active">
				<strong>Add New</strong>
			</li>
		</ol>
	</div>
</div>
{!! Form::open(['route' => 'administrator.tour.store', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add New Tour</h3>
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" placeholder="Enter title here" data-validate="required">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">URL alias</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="alias" placeholder="Enter alias here">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Depart From</label>
						<div class="col-sm-10">
							<select name="depart_from" id="depart-from" class="form-control">
								@foreach($destinations as $destination)
									<option value="{{ $destination->id }}"> {{ $destination->name }} </option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">To</label>
						<div class="col-sm-10">
							<select name="going_to" id="going-to" class="form-control">
								@foreach($destinations as $destination)
									<option value="{{ $destination->id }}"> {{ $destination->name }} </option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Duration</label>
						<div class="col-sm-10">
							{!! number_list('duration', ['class'=>'form-control'], '', 30, '', 'days') !!}
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Destinations</label>
						<?php 
							$arr = [];
							foreach ($destinations as $destination) {
								$arr[] = $destination->name;	
							}
						?>
						<input type="hidden" id="autocomplete" value="{{ json_encode($arr) }}">
						<input type="hidden" >
						<div class="col-sm-10">
							<textarea id="destinations" class="form-control"></textarea>
						</div>
						<input type="hidden" name="destinations" id="list-destination">
						<input type="hidden" id="selected-destinations" value="[]">
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Price</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="price" name="price" placeholder="" data-validate="number,required">
						</div>
						<label for="price" class="custom-label">USD</label>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" cols="40" name="description" id="description"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Summary</label>
						<div class="col-sm-12">
							<textarea class="ckeditor" rows="5" cols="40" name="summary" id="summary"></textarea>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Content</label>
						<div class="col-sm-12">
							<textarea class="ckeditor" rows="5" cols="40" name="content" id="content"></textarea>
						</div>
					</div>
				</div>
			</div>
			<section class="gallery-env">
				<div class="row">
					<!-- Gallery Album Optipns and Images -->
					<div class="col-sm-12 gallery-left">

						<!-- Album Header -->
						<div class="album-header">
							<h2>Photos</h2>
							<ul class="album-options list-unstyled list-inline">
								<li>
									<input type="checkbox" class="cbr" id="select-all" />
									<label for="select-all">Select all</label>
								</li>
								<li>
									<a data-id="photo" data-toggle="modal" data-target="#myModal">
										<i class="fa-upload"></i>
										Add Images
									</a>
								</li>
								<li>
									<a href="#" data-action="sort">
										<i class="fa-arrows"></i>
										Re-order
									</a>
								</li>
								<li>
									<a href="#" data-action="edit">
										<i class="fa-edit"></i>
										Edit
									</a>
								</li>
								<li>
									<a data-action="trash">
										<i class="fa-trash"></i>
										Trash
									</a>
								</li>
							</ul>
						</div>

						<!-- Sorting Information -->
						<div class="album-sorting-info">
							<div class="album-sorting-info-inner clearfix">
								<a href="#" class="btn btn-secondary btn-xs btn-single btn-icon btn-icon-standalone pull-right" data-action="sort">
									<i class="fa-save"></i>
									<span>Save Current Order</span>
								</a>

								<i class="fa-arrows-alt"></i>
								Drag images to sort them
							</div>
						</div>

						<!-- Album Images -->
						<div class="album-images row">
							<input type="hidden" id="photo">
							<!-- Album Image -->
							<div class="col-md-3 col-sm-4 col-xs-6 new-image">
								<div class="album-image">
									<a class="thumb" data-action="edit">
										{!! HTML::image('icon/album-img.png', 'Album image photos tour', ['class' => 'img-responsive']) !!}
									</a>
									<a class="name" data-id="photo" data-toggle="modal" data-target="#myModal">
										<i class="fa fa-plus"></i>
									</a>
									<div class="image-options">
									</div>
								</div>
							</div>
						</div>


						<button class="btn btn-white btn-block">
							<i class="fa-bars"></i>
							Load More Images
						</button>

					</div>

				</div>
			</section>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Publish</h3>
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="submit" id="submit" class="btn btn-blue" value="Save">
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Thumbnail</h3>
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group panel-thumbnail">
						<div class="col-sm-12">
							<input type="hidden" value="" name="thumbnail" class="form-control" class="thumbnail">
							<a id="thumbnail" class="link-insert-img" data-id="thumbnail" data-toggle="modal" data-target="#myModal">Insert image</a>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Map</h3>
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group panel-map">
						<div class="col-sm-12">
							<input type="hidden" value="" name="map" class="form-control" class="map">
							<a id="map" class="link-insert-img" data-id="map" data-toggle="modal" data-target="#myModal">Insert image</a>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Option Tour</h3>
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-4 control-label">Day Tour</label>
						<div class="col-sm-8">
							<label class="radio-inline">
								<input type="radio" value="1" name="day_tour" class="cbr cbr-primary">
								Yes
							</label>
							<label class="radio-inline">
								<input type="radio" value="0" name="day_tour" checked="checked" class="cbr cbr-primary">
								No
							</label>
						</div>
					</div>
					<div class="form-group start-tour" style="display:none">
						<label class="col-sm-4 control-label">Start</label>
						<div class="col-sm-8">
							<input type="text" name="day_tour_start_time" class="form-control" data-validate="required" placeholder="7:00 AM" value="">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Throughout</label>
						<div class="col-sm-8">
							<label class="radio-inline">
								<input type="radio" value="1" name="throughout" class="cbr cbr-primary">
								Yes
							</label>
							<label class="radio-inline">
								<input type="radio" value="0" name="throughout" checked="checked" class="cbr cbr-primary">
								No
							</label>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Popular Tour</label>
						<div class="col-sm-8">
							<label class="radio-inline">
								<input type="radio" value="1" name="popular_tour" class="cbr cbr-primary">
								Yes
							</label>
							<label class="radio-inline">
								<input type="radio" value="0" name="popular_tour" checked="checked" class="cbr cbr-primary">
								No
							</label>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Publish</label>
						<div class="col-sm-8">
							<label class="radio-inline">
								<input type="radio" value="1" name="active" checked="checked" class="cbr cbr-primary">
								Yes
							</label>
							<label class="radio-inline">
								<input type="radio" value="0" name="active" class="cbr cbr-primary">
								No
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">SEO</h3>
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-4 control-label">SEO Title</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="meta_title" placeholder="" data-required="required">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Meta Keyword</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="meta_key" placeholder="">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Meta description</label>
						<div class="col-sm-8">
							<textarea rows="5" class="form-control" cols="40" name="meta_desc" id="meta-desc"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
{!! Form::close() !!}
@stop

@section('script')
	@include('admin.module.tour')
@stop
<div class="modal fade custom-width" id="myModal">
		<div class="modal-dialog" style="width: 80%;">
			<div class="modal-content">
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Modal Image -->
	<div class="modal fade" id="gallery-image-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-gallery-image">
					<img src="assets/images/album-image-full.jpg" class="img-responsive" />
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-1" class="control-label">Title</label>
								<input type="text" class="form-control" id="field-1" placeholder="Enter image title">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<div class="form-group">
								<label for="field-1" class="control-label">Description</label>
								<textarea class="form-control autogrow" id="field-2" placeholder="Enter image description" style="min-height: 80px;"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer modal-gallery-top-controls">
					<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-xs btn-info">Crop Image</button>
				</div>
			</div>
		</div>
	</div>
	{!! HTML::script('jquery.validate.min.js') !!}
	{!! HTML::style('tags/jquery.tag-editor.css')!!}
	{!! HTML::script('tags/jquery-ui.min.js') !!}
	{!! HTML::script('tags/jquery.caret.min.js') !!}
	{!! HTML::script('tags/jquery.tag-editor.min.js') !!}
	
	@include('module.ckeditor.index')
	<script>
		jQuery(document).ready(function($) {

			//Select multiple tool
			$("#destinations").tagEditor({
				initialTags: JSON.parse($('#selected-destinations').val()),
                autocomplete: { delay: 0, position: { collision: 'flip' }, source: JSON.parse($('#autocomplete').val()) },
                forceLowercase: false,
                placeholder: 'Choose tour destinations',
                onChange: function(field, editor, tags) { $('#list-destination').val((tags.length ? tags.join(', ') : '')); }
            });
	

			//function get value select or remove for list
			function getListDataSelect(nameSelect, idPush) {
				var arrId = [];
				var arrName = [];
				var destinations = $(nameSelect).select2('data');
				for (var i = 0; i < destinations.length; i++) {
					arrId.push(destinations[i].id);
					arrName.push(destinations[i].text);
				};
				$(idPush).val(arrId+':'+arrName);
			}

			//select day tour
			$('input[name=day_tour]').on('change', function(ev) {
				if($(this).val() == 1) {
					$('.start-tour').show('blind');
				}else {
					$('.start-tour').hide('blind');
					$('input[name=day_tour_start_time]').val('');
				}
			});

			// Photos gallery
			$("#select-all").on('change', function(ev)
			{
				var is_checked = $(this).is(':checked');
				$(".album-image input[type='checkbox']").prop('checked', is_checked).trigger('change');
			});

			// Delete all gallery
			$('.gallery-env a[data-action="trash"]').on('click', function(ev)
			{
				$(".album-image input[type='checkbox']:checked").closest('.has-image').remove();
				$("#select-all").prop('checked', false);
				$("#select-all").closest('.cbr-replaced').removeClass('cbr-checked');
			});


			// Sortable
			$('.gallery-env a[data-action="sort"]').on('click', function(ev)
			{
				ev.preventDefault();
				var is_sortable = $(".album-images").sortable('instance');
				if( ! is_sortable)
				{
					$(".gallery-env .album-images").sortable({
						items: '> div',
						containment: 'parent'
					});
					$(".album-sorting-info").stop().slideDown(300);
				}
				else
				{
					$(".album-images").sortable('destroy');
					$(".album-sorting-info").stop().slideUp(300);
				}
			});

			//when show modal insert iframe of resposive filemanager into modal-body
			$('#myModal').on('shown.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
					var id = button.data('id');
			  	$('#myModal .modal-body').html("<iframe width=\"100%\" height=\"400\" frameborder=\"0\" src=\"{{asset('public')}}/filemanager/dialog.php?type=2&field_id="+id+"'&fldr=\"></iframe>");
			});

			//when hidden modal delete html in modal-body
			$('#myModal').on('hide.bs.modal', function (event) {
			  	$('#myModal .modal-body').html("");
			});

			//when gallery edit image show, add image set value to title and description for image
			$('#gallery-image-modal').on('shown.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
					var id = button.data('id');
			  	$('#gallery-image-modal .modal-gallery-image img').attr('src',$('.image-'+id+' img').attr('src'));
			  	$('#field-1').val($('.image-'+id+' .title_img').val());
			  	$('#field-2').val($('.image-'+id+' .desc_img').val());
			  	$('.modal-gallery-top-controls').append('<button type="button" class="btn btn-xs btn-secondary" onclick="insertData('+id+')">Save</button>')
			});

			//when gallery edit image hidden, remove url of image and remove button save title and description in modal edit
			$('#gallery-image-modal').on('hide.bs.modal', function (event) {
			  	$('#gallery-image-modal .modal-gallery-image img').attr('src','');
			  	$('#gallery-image-modal .btn-secondary').remove();
			});
		});

		//add value for title and description (input hidden value)
		function insertData(id) {
			$('.image-'+id+' .title_img').val($('#field-1').val());
			$('.image-'+id+' .desc_img').val($('#field-2').val());
			$('#gallery-image-modal').modal('hide');
		}

		//remove image in thumbnail and map
		function RemoveImage(field_id) {
			$('#'+field_id).html('Insert image');
			$('input[name='+field_id+']').val('');
			$('.panel-'+field_id).find('.remove-img').remove();
		}

		//remove image in gallery
		function removeGroup(id) {
			$('.image-'+id).remove();
		}

		//Insert image in gallery
		var m_names = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

		var d = new Date();
		var count = 0;

		//function callback after select image
		function responsive_filemanager_callback(field_id){
			var url = $('#'+field_id).val();
			var element = $('.album-images .new-image');

			//check has image in gallery, count image
			if($('.has-image').length != 0) {
				count = element.prev().data('group')+1;
			}

			//if field_id is photo, insert html has image selected into gallery
			if(field_id == 'photo') {
				element.before("<div data-group=\""+count+"\" class=\"col-md-3 col-sm-4 col-xs-6 has-image image-"+count+"\"><div class=\"album-image\"><a data-id=\""+count+"\" data-toggle=\"modal\" data-target=\"#gallery-image-modal\" class=\"thumb\"><img src=\""+url+"\" class=\"img-responsive\"></a><a href=\"#\" class=\"name\"><span>"+url.replace(/^.*[\\\/]/, '')+"</span><em>"+d.getDate()+" "+m_names[d.getMonth()]+" "+d.getFullYear()+"</em></a><input type=\"hidden\" name=\"photo[]\" value=\""+url+"\"><input type=\"hidden\" name=\"title_img[]\" class=\"title_img\"><input type=\"hidden\" name=\"desc_img[]\" class=\"desc_img\"><div class=\"image-options\"><a data-id=\""+count+"\" data-toggle=\"modal\" data-target=\"#gallery-image-modal\"><i class=\"fa-pencil\"></i></a><a onclick=\"removeGroup("+count+")\"><i class=\"fa-trash\"></i></a></div><div class=\"image-checkbox\"><input type=\"checkbox\" class=\"cbr\" /></div></div></div>");
			}else {
				$('input[name='+field_id+']').val(url);
				$('#'+field_id).html("<img src='"+url+"' width='100%' height='177'>");
				if($('.panel-'+field_id+' .remove-img').length) {

				}else {
					$('#'+field_id).after("<a onclick='RemoveImage(\""+field_id+"\")' class='remove-img'>Remove image</a>");
				}
			}
		}
		// Add ckeditor tool into summary and content
		CKEDITOR.replace( 'summary' ,{ filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=', height: 150});
		CKEDITOR.replace( 'content' ,{ filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=', height: 350});
	</script>
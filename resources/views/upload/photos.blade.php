@extends('layout.main')
@section('title')
<title>Upload Photos | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="Upload Photos | Moef Gaga Disco | Best party in Lloret de Mar, Spain">
<meta name="keywords" content="best, disco, lloret de mar, spain, remix, music">
@stop
@section('content')

<div class="under_header">
	<img src="images/assets/breadcrumbs5.png" alt="#">
</div><!-- under header -->

<div class="page-content back_to_up">
	<div class="row clearfix mb">
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
				<li> Upload Photos </li>
			</ul>
		</div><!-- breadcrumb -->
	</div><!-- row -->

	<div class="row row-fluid clearfix mbf">
		<div class="span12 posts">
			<div class="def-block clearfix">
				<h4> Upload Photos </h4><span class="liner"></span>
				<p>Upload the photos from here</p>

				{{ Form::open(array('url' => '/upload-photos', 'files' => true)) }}

					<div>

						<input type="file" id="file" name="file[]" required multiple>

					</div>

					<input type="submit" id="submit" name="uploadPhotos" value="Upload Photos" />
                    
                    <div class="bar">
                        <span class="bar-fill" id="pb"><span class="bar-fill-text" id="pt"></span></span>
                    </div>
					<div id="uploads" class="uploads">
					    The uploaded pictures will appear here with a link for quick view...
					</div>
					<script src="/_/js/upload.js"></script>
					<script>

					    document.getElementById('submit').addEventListener('click', function(e) {
					    	e.preventDefault();
					    	var f = document.getElementById('file'),
						        pb = document.getElementById('pb'),
						        pt = document.getElementById('pt');

						    app.uploader({
						    	files: f,
						    	progressBar: pb,
						    	progressText: pt,
						    	processor: '/upload-photos',

						    	finished: function(data) {
	                                var uploads = document.getElementById('uploads'),
	                                    succeeded = document.createElement('div'),
	                                    failed = document.createElement('div'),

	                                    anchor,
	                                    span,
	                                    x;

	                                if(data.failed.length) {
	                                	failed.innerHTML = '</p> Unfortunately, the following pictures failed to upload:</p>';
	                                }

	                                uploads.innerText = '';

	                                for(x = 0; x < data.succeeded.length; x = x + 1) {
	                                	anchor = document.createElement('a');
	                                	anchor.href = 'images/gallery/' + data.succeeded[x].file;
	                                	anchor.innerText = data.succeeded[x].name;
	                                	anchor.target = '_blank';
	                                	succeeded.appendChild(anchor);
	                                }

	                                for(x = 0; x < data.failed.length; x = x + 1) {
	                                	span = document.createElement('span');
	                                	span.innerText = data.failed[x].name;

	                                	failed.appendChild(span);
	                                }

	                                uploads.appendChild(succeeded);
	                                uploads.appendChild(failed);

						    	},

						    	error: function() {
						    		console.log('Not working');
						    	}
						    });
					    });
					    
					</script>
                    {{Form::token()}}
				{{Form::close()}} <!-- end form -->

			</div><!-- def block -->
		</div><!-- span8 posts -->

		
	</div><!-- row clearfix -->
</div><!-- end page content -->

@stop


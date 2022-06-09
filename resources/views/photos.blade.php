@extends('layouts.main')
@section('title')
<title>Photo Gallery | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="View Photos from Moef Gaga Disco and experience the best party in Lloret de Mar - Spain">
<meta name="keywords" content="best, disco, club, lloret de mar, spain, music, dance, party">
@stop
@section('content')

<div class="under_header">
	<picture>
        <!--[if IE 9]><video hidden=""><![endif]-->
        <source
            srcset="/images/assets/breadcrumbs1-w480.png"
            media="(max-width: 480px)" />
        <source
            srcset="/images/assets/breadcrumbs1.png"
            media="(min-width: 481px)" />
        <!--[if IE 9]></video(max-width: 1400px)><![endif]-->
        <img
            src="/images/assets/breadcrumbs1.png"
            alt="Photos Page" />
	</picture>
</div><!-- under header -->

		<div class="page-content">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" original-title="Homepage"> <i class="icon-home"></i> </a></li>
						<li> Photo Gallery </li>
					</ul>
				</div><!-- breadcrumbIn -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block" style="min-height: 400px;">

						<div class="topbar">
							<div id="close" class="tbutton small tback"><span> Back to Albums</span></div>
							<h4 id="name">Photo Gallery</h4><span class="liner"></span>
						</div>

						<ul id="tp-grid" class="tp-grid">

                        @foreach ($photos as $photo)
                            <li data-pile="{{$photo->album}}" class="grid_3"><a href="/images/gallery/{{$photo->name}}.jpg" data-gal="photo[{{$photo->album}}]"><img src="/images/gallery/{{$photo->name}}.jpg" alt="#1" /></a></li>
                        @endforeach

						</ul>

					</div><!-- def block -->

				</div><!-- posts -->
            </div>

            <div class="row row-fluid clearfix mbf">
                <div class="posts">
                    <div class="def-block">
                        <div id="evcal_list" class="eventon_events_list" style="display: block;">
							<div class="eventon_list_event">
								<a href="http://fb.com/MoefGagaLloret" target="_blank" class="evcal_list_a desc_trig mul_val">
									<p class="evcal_cblock">CHECK OUT ALL PHOTOS ON OUR FACEBOOK PAGE</p>
								</a>
							</div>
                        </div>
                    </div>
                </div>
			</div><!-- row clearfix / Check all photos on FB-->

		</div><!-- end page content -->
@stop

@section('postscripts')

<script type="text/javascript" src="/_/js/jquery.stapel.js"></script>
<script type="text/javascript" src="/_/js/jquery.prettyPhoto.js"></script>

@stop

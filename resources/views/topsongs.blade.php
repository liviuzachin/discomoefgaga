@extends('layout.main')
@section('title')
<title>Popular Tracks | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="Popular tracks playlist that DJs are playing at Moef Gaga Disco. We make best parties in Lloret de Mar - Spain - great house elektro progressive techno hip-hop music">
<meta name="keywords" content="best, disco, lloret de mar, spain, dance, club, music, house, elektro, progressive, techno">
@stop
@section('content')

<div class="under_header">
	<picture>
	    <!--[if IE 9]><video hidden=""><![endif]-->
	    <source
	        srcset="/images/assets/breadcrumbs4-w480.png"
	        media="(max-width: 480px)" />
	    <source
	        srcset="/images/assets/breadcrumbs4.png"
	        media="(min-width: 481px)" />
	    <!--[if IE 9]></video(max-width: 1400px)><![endif]-->
	    <img
	        src="/images/assets/breadcrumbs4.png"
	        alt="Top 10 Songs Page" />
	</picture>
</div><!-- under header -->


<div class="page-content">

<div class="row clearfix mb">
	<div class="breadcrumbIn">
		<ul>
			<li><a href="/" class="toptip" original-title="Homepage"> <i class="icon-home"></i> </a></li>
			<li><a href="/"> Popular Tracks </a></li>
			<li>{{$song->artist}} - {{$song->name}} </li>
		</ul>
	</div><!-- breadcrumbIn -->
</div><!-- row -->

	<div class="row row-fluid clearfix mbf">
		<div class="posts">
			<div class="def-block">
				<div class="post row-fluid clearfix">

				    <div class="video-container">
				    <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/{{$song->link}}?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
					</div>

					<h3 class="post-title"> <a href="#">{{$song->artist}} - {{$song->name}}</a> </h3>
					<p>{{$song->description}}</p>

					<p>
						<span> Tags: </span>
						<a href="#" class="#"> video </a>,
						<a href="#" class="#"> player </a>,
						<a href="#" class="#"> youtube </a>,
						<a href="#" class="#"> vimeo </a>
					</p><!-- tags -->

					<div class="meta">
						<span> <i class="icon-user mi"></i> Admin </span>
						<span> <i class="icon-time mi"></i>August 10, 2014 2:00 AM </span>
					</div><!-- meta -->

				</div><!-- post -->

				<div class="post-links clearfix">
					<a class="fll" href="/popular-tracks/{{str_replace(' ', '-', str_replace(',', ' ', $prev_video->artist))}}_{{str_replace(' ', '-', str_replace(',', ' ', $prev_video->name))}}" title="#"><i class="icon-long-arrow-left"></i> Prev</a>
					<a class="flr" href="/popular-tracks/{{str_replace(' ', '-', str_replace(',', ' ', $next_video->artist))}}_{{str_replace(' ', '-', str_replace(',', ' ', $next_video->name))}}" title="#">Next <i class="icon-long-arrow-right"></i></a>
				</div><!-- post links -->

			</div><!-- def block -->
		</div><!-- span8 posts -->

	</div><!-- row clearfix -->
</div><!-- end page content -->


@stop

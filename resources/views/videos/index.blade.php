@extends('layouts.main')
@section('title')
<title>Videos | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="Videos | Moef Gaga Disco | Best party in Lloret de Mar, Spain">
<meta name="keywords" content="best, disco, lloret de mar, spain, remix, music">
@stop
@section('content')

<div class="under_header">
	<picture>
        <!--[if IE 9]><video hidden=""><![endif]-->
        <source
            srcset="/images/assets/breadcrumbs10-w480.png"
            media="(max-width: 480px)" />
        <source
            srcset="/images/assets/breadcrumbs10.png"
            media="(min-width: 481px)" />
        <!--[if IE 9]></video(max-width: 1400px)><![endif]-->
        <img
            src="/images/assets/breadcrumbs10.png"
            alt="Videos Page" />
	</picture>
</div><!-- under header -->

<div class="page-content">

    <div class="row clearfix mb">
        <div class="breadcrumbIn">
            <ul>
                <li><a href="/" class="toptip" original-title="Homepage"> <i class="icon-home"></i> </a></li>
                <li> Videos </li>
            </ul>
        </div><!-- breadcrumbIn -->
    </div><!-- row -->
	<div class="row row-fluid clearfix mbf">
		<div class="posts">
			<div class="def-block">
				<ul class="tabs">
					<li><a href="#Latest" class="active"> Latest Videos </a></li>
				</ul><!-- tabs -->

				<ul class="tabs-content">
					<li id="Latest" class="active">

						<div class="video-grid">
                            @foreach ($videos as $video)

							<a href="/videos/{{str_replace(' ', '-', str_replace(',', ' ', $video->name))}}" class="grid_3 vid">
								<img src="http://img.youtube.com/vi/{{$video->link}}/0.jpg" alt="#">
								<span><strong>{{substr($video->name, 0, 15), "..."}}</strong></span>
							</a>
							@endforeach
						</div><!-- video grid -->
					</li><!-- tab content -->
				</ul><!-- end tabs -->
			</div><!-- def block -->
		</div><!-- posts -->

	</div><!-- row clearfix -->
</div><!-- end page content -->

@stop

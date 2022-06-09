@extends('layouts.main')
@section('title')
<title>Contact us | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="Contact us at Moef Gaga Disco to stay in touch with latest best parties in Lloret de Mar, Spain">
<meta name="keywords" content="best, disco, lloret de mar, spain, music, dance, club, house, elektro, progressive, techno">
@stop
@section('content')

<div class="under_header">
    <picture>
        <!--[if IE 9]><video hidden=""><![endif]-->
        <source
            srcset="/images/assets/breadcrumbs5-w480.png"
            media="(max-width: 480px)" />
        <source
            srcset="/images/assets/breadcrumbs5.png"
            media="(min-width: 481px)" />
        <!--[if IE 9]></video(max-width: 1400px)><![endif]-->
        <img
            src="/images/assets/breadcrumbs5.png"
            alt="Contact Us Page" />
    </picture>
</div><!-- under header -->

<div class="page-content">
	<div class="row clearfix mb">
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
				<li> Contact </li>
			</ul>
		</div><!-- breadcrumb -->
	</div><!-- row -->

	<div class="row row-fluid clearfix mbf">
		<div class="span8 posts">
			<div class="def-block clearfix">
				<h4> Contact Us </h4><span class="liner"></span>

				<p class="paragraph">Write to us ... We are social!</p>

				<form action="{{URL::route('contact')}}" method="post" id="contactForm" class="form">
                    @csrf
					<div class="clearfix">
						<div class="grid_6 alpha fll">

							<input type="text" name="senderName" {{(old('senderName')) ? ' value="' . old('senderName') .'"' : ''}} id="senderName" placeholder="Name *" class="requiredField" />

                            @if($errors->has('senderName'))
                                {{$errors->first('senderName')}}
                            @endif

						</div>
						<div class="grid_6 omega flr">

							<input type="text" name="senderEmail" {{(old('senderEmail')) ? ' value="' . old('senderEmail') .'"' : ''}} id="senderEmail" placeholder="Email Address *" class="requiredField email" />

							@if($errors->has('senderEmail'))
                                {{$errors->first('senderEmail')}}
                            @endif

						</div>
					</div>

					<div>

						<textarea name="message" {{(old('message')) ? ' value="' . old('message') .'"' : ''}} id="message" placeholder="Message *" class="requiredField" rows="8"></textarea>

                        @if($errors->has('message'))
                            {{$errors->first('message')}}
                        @endif

					</div>

					<input type="submit" id="sendMessage" name="sendMessage" value="Send Email" />

					<span>  </span>
				</form><!-- end form -->

			</div><!-- def block -->
			<br />
			<!-- work with us -->
			<div class="def-block clearfix">
				<h4> Do you want to work with us?</h4><span class="liner"></span>
				<a href="/work-with-us" class="tbutton large" style="padding: 5px 0;width: 100%;text-align: center;">APPLY NOW</a>
			</div>
			<!-- end work with us -->
		</div><!-- span8 posts -->

		<div class="span4 sidebar">
			<div class="def-block widget">
				<h4> Get in Touch </h4><span class="liner"></span>
				<div class="widget-content">
					<div id="map" class="mb"></div>
					<p>Come and visit us anyday from 15:00 to 19:00 and 21:00 to 06:00 </p>
					<p>Phone: <strong> 0034 646032937</strong> <br> Email: <strong>contact@discomoefgaga.com</strong></p>
				</div><!-- widget content -->
			</div><!-- def block widget details -->

			<div class="def-block widget">
				<h4> NewsLetters </h4><span class="liner"></span>
				<div class="widget-content">
                    @if (Session::has('message'))
                        {{ Session::get('message') }}
                    @else
					<p>It has survived not only centuries, but also leaded the clubbing scene in Lloret de Mar. Subscribe now and get hot informations about upcoming events and tickets selling.</p>
					@endif
					<form id="newsletters" method="post" action="{{URL::to('/subscription-to-newsletter')}}" onsubmit="return alert('Thank you for subscribing!');">
						<input type="email" name="email" class="check-exists" data-type="email" onfocus="if (this.value=='Type Your Email') this.value = '';" onblur="if (this.value=='') this.value = 'Type Your Email';" value="Type Your Email" placeholder="Type Your Email" required="required">
						<button type="submit" id="newsLetterBtnSubscribe"><i class="icon-ok"></i></button>
					</form>
					<br><p><span class="check-exists-feedback" data-type="email"></span></p>
				</div><!-- widget content -->
			</div><!-- def block widget NewsLetters -->

		</div><!-- span4 sidebar -->
	</div><!-- row clearfix -->
</div><!-- end page content -->

@stop

@section('postscripts')
    <script type="text/javascript" src="_/js/existscheck.jquery.js"></script>
    <script>
        $('.check-exists').existsChecker();
    </script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="_/js/gmap3.js"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(function () {
		    jQuery("#map").gmap3({
		        marker: {
		            address: "Calle Santa Cristina 14 Lloret de Mar"
		        },
		        map: {
		            options: {
		                zoom: 16
		            }
		        }
		    });
		});
	/* ]]> */
	</script>
@stop

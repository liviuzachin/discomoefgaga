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

							<input type="text" name="name" {{(old('name')) ? ' value="' . old('name') .'"' : ''}} id="name" placeholder="Name *" class="requiredField" style="box-sizing: border-box; width: 100%" />

                            @if($errors->has('name'))
                                {{$errors->first('name')}}
                            @endif

						</div>
						<div class="grid_6 omega flr">

							<input type="text" name="email" {{(old('email')) ? ' value="' . old('email') .'"' : ''}} id="email" placeholder="Email Address *" class="requiredField email" style="box-sizing: border-box; width: 100%" />

							@if($errors->has('email'))
                                {{$errors->first('email')}}
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
					<div id="map" class="mb">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2979.0075559984657!2d2.8429891161369727!3d41.6987725845949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bb173a535b79c3%3A0xaa3bae7535e3c5b3!2sMoef%20Gaga!5e0!3m2!1sen!2smt!4v1654929816451!5m2!1sen!2smt" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
					<p>Come and visit us anyday from 22:00 to 05:30 </p>
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
    {{--
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="_/js/gmap3.js"></script>
        <script type="text/javascript">
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
        </script>
    --}}
@stop

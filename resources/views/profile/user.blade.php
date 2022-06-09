@extends('layout.main')
@section('title')
<title>Register Account | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="Create Account | Moef Gaga Disco | Best party in Lloret de Mar, Spain">
<meta name="keywords" content="best, disco, lloret de mar, spain, remix, music">
@stop
@section('content')

<div class="under_header">
	<img src="{{URL::to('/')}}/images/assets/breadcrumbs5.png" alt="#">
</div><!-- under header -->

<div class="page-content">
	<div class="row clearfix mb">
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
				<li> User Profile </li>
			</ul>
		</div><!-- breadcrumb -->
	</div><!-- row -->

	<div class="row row-fluid clearfix mbf">
		<div class="span8 posts">
			<div class="def-block clearfix">
				<h4> User Profile </h4><span class="liner"></span>

				@if(Session::has('global'))
                <p><strong>{{Session::get('global')}}</strong></p>
				@else
				<p>This is the profile page of {{$user->username}} ({{$user->email}})</p>
                @endif


				{{Form::open(array('route' => 'account-create-post', 'method' => 'post', 'class' => 'primary-form'))}}
                <div class="clearfix">

                    <div class="grid_6 alpha fll">
                        {{Form::label('username', 'Username')}}
                        {{Form::text('username', (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : '', array('id' => 'senderName'))}}

                    </div>

                    <div class="grid_6 omega flr">
                        {{Form::label('email', 'E-Mail Address')}}
                        {{Form::email('email', (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '', array('id' => 'senderEmail'))}}

                    </div>

                    <div class="grid_6 alpha fll">
                        {{Form::label('password', 'Password')}}
                        {{Form::password('password', array('id' => 'senderPassword'))}}

                    </div>
                    <div class="grid_6 omega flr">
                        {{Form::label('repeat_password', 'Repeat Password')}}
                        {{Form::password('repeat_password', array('id' => 'repeatPassword'))}}

                    </div>

                    <div class="grid_12 alpha fll">
                        <p>
                        @if($errors->has('username'))
                        {{'*' . $errors->first('username')}}
                        @endif
                        @if($errors->has('email'))
                        {{'*' . $errors->first('email')}}
                        @endif
                        @if($errors->has('password'))
                        {{'*' . $errors->first('password')}}
                        @endif
                        @if($errors->has('repeat_password'))
                        {{'*' . $errors->first('repeat_password')}}
                        @endif
                        </p>
                    </div>

                </div>

                {{Form::submit('Register', array('id' => 'sendMessage'))}}
				{{Form::close()}}

			</div><!-- def block -->
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

    <script type="text/javascript" src="{{URL::to('/')}}/_/js/existscheck.jquery.js"></script>
    <script>
      $('.check-exists').existsChecker();
    </script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{URL::to('/')}}/_/js/gmap3.js"></script>
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

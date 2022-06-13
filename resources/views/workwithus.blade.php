@extends('layouts.main')
@section('title')
<title>Work with us @ Moef GaGa Disco Club and have fun in Lloret de Mar, Spain</title>
<meta name="description" content="Vacancies at Disco Moef Gaga - Apply for work"/>
<meta name="keywords" content="best, disco, lloret de mar, spain, music, dance, club, house, elektro, progressive, techno"/>
<meta property="og:url" content="http://discomoefgaga.com/work-with-us" />
<meta property="og:title" content="Disco Moef Gaga is looking for moeffies. Join Now." />
<meta property="og:description" content="Is Summer your favorite season? Do you like to have fun while working and probably party every night? Apply now for one of the available positions in our club and this summer you might just have the best time of your life. Good luck!" />
<meta property="og:site_name" content="Moef Gaga Disco" />
<meta property="og:image" content="/images/hiring2015.png" />
<meta property="fb:app_id" content="563795573722396" />
@stop
@section('content')

<div id="fb-root"></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=563795573722396&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	<!-- form popup -->
	<div id="popupForm">
		<div class="def-block widget">
			<!-- <h4> There was an error proccessing your form </h4><span class="liner"></span> -->
			<div id="popupFormContent"></div>
			<a id="popupFormClose">CLOSE</a>
		</div><!-- widget -->
	</div><!-- #popupFormError -->
	<div id="FormBackgroundPopup"></div>
	<!-- end form popup -->

    <div class="under_header">
        <picture>
            <!--[if IE 9]><video hidden=""><![endif]-->
            <source
                srcset="/images/assets/work-with-us-w480.png"
                media="(max-width: 480px)" />
            <source
                srcset="/images/assets/work-with-us.png"
                media="(min-width: 481px)" />
            <!--[if IE 9]></video(max-width: 1400px)><![endif]-->
            <img
                src="/images/assets/work-with-us.png"
                alt="Work With Us Page" />
        </picture>
    </div><!-- under header -->

<div class="page-content">
	<div class="row clearfix mb">
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
				<li> Work with us </li>
			</ul>
		</div><!-- breadcrumb -->
	</div><!-- row -->

	<div class="row row-fluid clearfix mbf">
		<div class="span12 posts">
			<div class="def-block clearfix">
				<h4> Work with us </h4><span class="liner"></span>

				<p class="paragraph">Is Summer your favorite season? Do you like to have fun while working and probably party every night?<br>
				Apply now for one of the available positions in our club and this summer you might just have the best time of your life. Good luck!
				</p>

                <form id="applyWork" action="work-with-us" enctype="multipart/form-data" class="form work-form">
                    @csrf
					<div class="clearfix">
						<div class="grid_6 alpha fll">
							<input type="text" name="senderName" id="senderName" placeholder="Name *" class="requiredField" required/>
						</div>
						<div class="grid_6 omega flr">
							<input type="email" name="senderEmail" id="senderEmail" placeholder="Email Address *" class="requiredField email" required />
						</div>
						<div class="grid_6 alpha fll">
							<input type="text" name="country" id="senderCountry" placeholder="Country *" class="requiredField" style="width:100%;" required>
						</div>
						<div class="grid_6 omega flr">
							<input type="text" name="age" id="senderAge" placeholder="Age *" class="requiredField" style="width:100%;" required>
						</div>
						<div class="grid_6 alpha fll">
							<select name="gender" style="width: 100%; height: 54px;">
								<option value="">Your Gender *</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="grid_6 omega flr">
							<select name="position" class="flr" style="width: 100%; height: 54px;">
								<option value="">Select a Position *</option>
                                <option value="Anything Available">Anything</option>
								<option value="Bartender">Bartender</option>
                                <option value="DJ">DJ</option>
                                <option value="Public Relations">Public Relations</option>
								<option value="Security">Security</option>
                                <option value="Waiter">Waiter</option>
							</select>
						</div>

						<div class="grid_6 alpha fll">
							<label for="picture" style="padding-left: 10px; color: #F2F2F2; cursor: text;">Recent picture of yourself</label>
							<input type="file" name="pic" id="uploadPic" accept="image/*" required style="padding-left: 10px;"/>
						</div>

						<div class="grid_6 omega flr">
							<label for="cv" style="padding-left: 10px; color: #F2F2F2; cursor: text;">Copy of your CV/Resume</label>
							<input type="file" name="cv" id="uploadCv" required style="padding-left: 10px;"/>
						</div>

					</div>

					<div style="margin-top: 10px">
						<textarea name="message" id="message" placeholder="Tell us something about yourself. Ex: Why should we employ you?" class="requiredField" rows="8" required></textarea>
					</div>

					<input type="submit" id="sendApplication" name="send_application" value="Send Application" class="tbutton large" style="width: 100%;"/>

					<p>* Please make sure to complete all the fields before submitting the form.</p>

                </form>
                <!-- <div id="popupFormSuccess">
                    <h4> Your application have been succesfully submitted! </h4><span class="liner"></span>
                    <p>Someone from the recruiting department is going to process your application and we will contact you soon.</p>
                </div> -->

                <div class="notification-box notification-box-success" id="popupFormSuccess">
                    <p><i class="icon-ok"></i>Thanks!
                    Your application have been succesfully submitted!. We check Our email all the time, so we should be in touch soon.
                    </p>
                    <p style="padding-left: 35px">Good Luck!</p>
                </div>
			</div><!-- def block -->
		</div><!-- span12 posts -->
		<div class="span12 posts">
			<div class="fb-share-button" data-href="/work-with-us" data-layout="button_count" style="float: right;padding: 30px;"></div>
		</div>
	</div><!-- row clearfix -->
	<br /><br />
</div><!-- end page content -->

@stop

@section('postscripts')
<script type="text/javascript" src="/_/js/apply-work-ajax.js"></script>
@stop

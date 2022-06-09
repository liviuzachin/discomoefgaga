@extends('layouts.main')
@section('title')
<title>Events | Moef GaGa Discotheque | Best club in Lloret de Mar - Spain</title>
<meta name="description" content="Upcoming Events at Moef Gaga Disco with open air terrace and shisha lounge. Experience best party in Lloret de Mar, Spain">
<meta name="keywords" content="best, disco, lloret de mar, spain, dance, club music">
@stop
@section('content')

<div class="under_header">
	<picture>
	    <!--[if IE 9]><video hidden=""><![endif]-->
	    <source
	        srcset="images/assets/breadcrumbs8-w480.png"
	        media="(max-width: 480px)" />
	    <source
	        srcset="images/assets/breadcrumbs8.png"
	        media="(min-width: 481px)" />
	    <!--[if IE 9]></video(max-width: 1400px)><![endif]-->
	    <img
	        src="images/assets/breadcrumbs8.png"
	        alt="Events" />
	</picture>
</div><!-- under header -->

<div class="page-content">
	<div class="row clearfix mb">
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/" class="toptip" original-title="Homepage"> <i class="icon-home"></i> </a></li>
				<li> Events </li>
			</ul>
		</div><!-- breadcrumbIn -->
	</div><!-- row -->

	<div class="row row-fluid clearfix mbf">
		<div class="posts">
			<div class="def-block">
				<h4 id="name">Events</h4><span class="liner"></span>
				<p class="paragraph">
                    <!-- Check out upcoming events for this month...  -->
                    We are planning our next event. Please come back later :)
				</p>
				<!-- Event Calendar -->
					<div id="evcal_calendar_1" class="ajde_evcal_calendar clearfix">
						<div id="evcal_head" class="calendar_header">
							<a id="evcal_prev" class="evcal_arrows evcal_btn_prev"><i class="icon-angle-left"></i></a>
							<p id="evcal_cur"> {{ date('F') }} - {{ date('Y') }}</p>
							<a id="evcal_next" class="evcal_arrows evcal_btn_next"><i class="icon-angle-right"></i></a>
							<div class="clear"></div>
						</div>
					</div>

					<div class="eventon_fullcal">
						<div class="eventon_fc_daynames">
							<p class="evo_fc_day">Mon</p>
							<p class="evo_fc_day">Tue</p>
							<p class="evo_fc_day">Wed</p>
							<p class="evo_fc_day">Thu</p>
							<p class="evo_fc_day">Fri</p>
							<p class="evo_fc_day">Sat</p>
							<p class="evo_fc_day">Sun</p>
							<div class="clear"></div>
						</div><!-- week days -->

						<div class="eventon_fc_days">
                            <p class="evo_fc_day"></p>
							<p class="evo_fc_day"></p>
							<p class="evo_fc_day"></p>
							<p class="evo_fc_day"></p>
							<p class="evo_fc_day"></p>
							<p class="evo_fc_day"></p>
							<p class="evo_fc_day">1</p>
							<p class="evo_fc_day">2</p>
							<p class="evo_fc_day">3</p>
							<p class="evo_fc_day">4</p>
							<p class="evo_fc_day">5</p>
							<p class="evo_fc_day">6</p>
							<p class="evo_fc_day">7</p>
							<p class="evo_fc_day">8</p>
							<p class="evo_fc_day">9</p>
							<p class="evo_fc_day">10</p>
							<p class="evo_fc_day">11</p>
							<p class="evo_fc_day">12</p>
							<p class="evo_fc_day">13</p>
							<p class="evo_fc_day">14</p>
							<p class="evo_fc_day">15</p>
							<p class="evo_fc_day">16</p>
							<p class="evo_fc_day">17</p>
							<p class="evo_fc_day">18</p>
							<p class="evo_fc_day">19</p>
							<p class="evo_fc_day">20</p>
							<p class="evo_fc_day">21</p>
							<p class="evo_fc_day">22</p>
							<p class="evo_fc_day">23</p>
							<p class="evo_fc_day">24</p>
							<p class="evo_fc_day">25</p>
							<p class="evo_fc_day">26</p>
							<p class="evo_fc_day">27</p>
							<p class="evo_fc_day">28</p>
							<p class="evo_fc_day">29</p>
							<p class="evo_fc_day on_focus">30</p>
							<p class="evo_fc_day has_events">31</p>

							<div class="clear"></div>
						</div><!-- days -->
					</div><!-- fullcal -->

					<div id="evcal_list" class="eventon_events_list" style="display: block;">
						<div class="eventon_list_event">
							<a class="evcal_list_a desc_trig mul_val">
								<p class="evcal_cblock">?<span> /{{ date('m') }} </span><em class="evo_month"></em></p>
								<p class="evcal_desc">
									<span class="evcal_desc2 evcal_event_title">Coming Soon | Next Party</span>
									<span class="evcal_desc_info"><em class="evcal_time">in {{ date('F') }} | 22:00 - 05:30 </em> </span>
								</p>
							</a>
						</div>
					</div><!-- event list -->
				<!-- Event Calendar -->
			</div><!-- def block -->
		</div><!-- posts -->
	</div><!-- row clearfix -->
</div><!-- end page content -->

@stop

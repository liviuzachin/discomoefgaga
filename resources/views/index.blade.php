@extends('layouts.main')
@section('title')
<title>Moef GaGa Discotheque | Lloret de Mar - Coasta Brava - Spain</title>
<meta name="description" content="Located in the heart of Lloret de Mar, Disco Moef Gaga is a five-room disco that offers various styles of music and atmosphere. It's main room, lounge and open air terrace are the best in town.">
<meta name="keywords" content="best, disco, lloret de mar, spain, dance, club, music">
@stop
@section('content')

    <!-- Start Revolution Slider -->
    <div id="tp-slider" class="slider-bg-static">
        <div class="tp-banner-container">
            <div class="tp-banner">
            <ul>
                <!-- SLIDE 1 Neon Party -->
                <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-saveperformance="on"  data-title="Neon Glow">
                <!-- MAIN IMAGE -->
                <img src="images/slides/neon/neon-glow-party.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption very_large_text customin customout"
                    data-x="right" data-hoffset="-80"
                    data-y="240"
                    data-splitin="words"
                    data-elementdelay="0.25"
                    data-speed="800"
                    data-start="2000"
                    data-easing="Back.easeOut"
                    data-customin="x:0;y:-20;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-splitout="words"
                    data-endelementdelay="0.1"
                    data-customout="x:0;y:0;z:0;rotationX:40;rotationY:70;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endspeed="500"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 3; font-weight:500;">THE BEST</div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption very_large_text customin customout"
                    data-x="right" data-hoffset="-40"
                    data-y="320"
                    data-splitin="words"
                    data-elementdelay="0.25"
                    data-speed="800"
                    data-start="2500"
                    data-easing="Back.easeOut"
                    data-customin="x:0;y:-20;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-splitout="words"
                    data-endelementdelay="0.1"
                    data-customout="x:0;y:0;z:0;rotationX:40;rotationY:70;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endspeed="500"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 3; font-weight:700;">NEON PARTY</div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption very_large_text customin customout"
                    data-x="right" data-hoffset="-100"
                    data-y="400"
                    data-splitin="words"
                    data-elementdelay="0.25"
                    data-speed="800"
                    data-start="3000"
                    data-easing="Back.easeOut"
                    data-customin="x:0;y:-20;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-splitout="words"
                    data-endelementdelay="0.1"
                    data-customout="x:0;y:0;z:0;rotationX:40;rotationY:70;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endspeed="500"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 3; font-weight:500;">IN TOWN</div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                    data-x="0"
                    data-y="500"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="800"
                    data-start="500"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.1"
                    style="z-index: 1; font-weight:normal;"><img src="images/slides/neon/neon.png" alt=""> </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                    data-x="650"
                    data-y="500"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="800"
                    data-start="1000"
                    data-easing="Back.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 1; font-weight:normal;"><img src="images/slides/neon/glow.png" alt=""> </div>

                </li>

                <!-- SLIDE 2 - Foam party -->
                <li data-transition="random" data-slotamount="5" data-masterspeed="700"  data-saveperformance="on"  data-title="Foam Party">
                <!-- MAIN IMAGE -->
                <img src="images/slides/foam/foam-party.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                    data-x="right" data-hoffset="20"
                    data-y="50"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="1000"
                    data-easing="Back.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.1"
                    style="z-index: 1; font-weight:normal;"><img src="images/slides/foam/wattersplash.png" alt=""> </div>

                </li>

                <!-- SLIDE 3 Summer Carnival -->
                <li data-transition="random" data-slotamount="5" data-masterspeed="700"  data-saveperformance="on"  data-title="Summer Carnival">
                <!-- MAIN IMAGE -->
                <img src="images/slides/summer-carnival/summer-carnival-party.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                    data-x="left"
                    data-y="118"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="1000"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.1"
                    style="z-index: 1; font-weight:normal;"><img src="images/slides/summer-carnival/party-info.png" alt=""> </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                    data-x="right" data-hoffset="300"
                    data-y="300"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="1600"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.1"
                    style="z-index: 1; font-weight:normal;"><img src="images/slides/summer-carnival/bule.png" alt=""> </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                    data-x="left" data-hoffset="-300"
                    data-y="300"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="2000"
                    data-easing="Power1.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.1"
                    style="z-index: 1; font-weight:normal;"><img src="images/slides/summer-carnival/bule.png" alt=""> </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div> <!-- End Revolution Slider -->

    <div class="page-content">
        <div class="row row-fluid clearfix mbf">
            <div class="span8">
            <div class="def-block">
                <h4> Latest News </h4><span class="liner"></span>

                <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                <div class="span5"><img class="four-radius" src="images/assets/moeffies.jpg" alt="Apply for a job at Disco Moef Gaga"></div>
                <div class="span7">
                    <h3 class="news-title"> <a href="/work-with-us">We are looking for Moeffies</a> </h3>
                    <p>Is Summer your favorite season? Do you like to have fun while working and probably party every night? Apply now for one of the available positions in our club and this summer you might just have the best time of your life. Good luck!</p>
                    <div class="meta">
                    <span> <i class="icon-time mi"></i>March 22, 2015 1:15 PM </span> | <span> <a href="/work-with-us"><i class="icon-comments-alt"></i> 0</a> </span>
                    </div><!-- meta -->
                    <a href="/work-with-us" class="sign-btn tbutton small"><span>Apply Now</span></a>
                </div><!-- span7 -->
                </div><!-- news -->

                <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                <div class="span5"><img class="four-radius" src="images/assets/news2.jpg" alt="#"></div>
                <div class="span7">
                    <h3 class="news-title"> <a href="#">Summer Carnival 2022</a> </h3>
                    <p>The most expected weekly party of the year is here. Starting this evening, together with the dutch team of Beachmasters we are hosting the amazing Summer Carnival party. Expect crazy dutch sounds, floral decoration and summer vibe. Are you ready for it? </p>
                    <div class="meta">
                    <span> <i class="icon-time mi"></i>June 28, 2022 1:15 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 5</a> </span>
                    </div><!-- meta -->
                    <a href="#" class="sign-btn tbutton small"><span>Read More</span></a>
                </div><!-- span7 -->
                </div><!-- news -->

                <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                <div class="span5"><img class="four-radius" src="images/assets/news3.jpg" alt="#"></div>
                <div class="span7">
                    <h3 class="news-title"> <a href="#">Ladies have priority</a> </h3>
                    <p>We believe that girls are the most important ingredient to a great party! and so we decided to offer to all the girls special reduced price to our parties. Now let's see how many will attend to Moef Gaga this summer. We're waiting for ya :*</p>
                    <div class="meta">
                    <span> <i class="icon-time mi"></i>June 24, 2022 2:00 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 27</a> </span>
                    </div><!-- meta -->
                    <a href="#" class="tbutton small"><span>Read More</span></a>
                </div><!-- span7 -->
                </div><!-- news -->

                <div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
                <div class="span5"><img class="four-radius" src="images/assets/summer-opening-party-small.jpg" alt="#"></div>
                <div class="span7">
                    <h3 class="news-title"> <a href="#">SUMMER 2022 - OPENING PARTY</a> </h3>
                    <p>We're officially ready for the Summer Season of 2022. Last night we had a smashing party! We wanna thank you all for making this possible. Looking forward for the upcoming nights...let's make it unforgetable :)  </p>
                    <div class="meta">
                    <span> <i class="icon-time mi"></i>June 22, 2022 4:30 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>
                    </div><!-- meta -->
                    <a href="#" class="sign-btn tbutton small"><span>Read More</span></a>
                </div><!-- span7 -->
                </div><!-- news -->

                <!-- <div class="load-news tac"><a href="#" class="tbutton small"><span>Load More</span></a></div> -->
            </div><!-- def block -->
            </div><!-- span8 news -->

            <div class="span4">
            <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                <h4> Upcoming Events </h4><span class="liner"></span>

                <div class="widget-content row-fluid">
                <div class="span3 tac">
                    <span class="event-date">?</span>
                    <span class="event-month">{{ date('F') }}</span>
                </div>
                <div class="span9">
                    <p>Planning...</p>
                    <a href="#" class="tbutton buy-ticket small"><span>Reserve</span></a>
                </div>
                </div> <!-- widget content -->

            </div><!-- def block widget events -->

            <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                <h4> Featured Videos </h4><span class="liner"></span>
                <div class="widget-content row-fluid">
                <div class="videos clearfix flexslider">
                    <ul class="slides">
                        {{-- <li class="featured-video">
                            <a href="/videos/Extended-Schaumparty-im-Moef-Gaga">
                                <img src="http://img.youtube.com/vi/RkTf15if3ZY/0.jpg" alt="#">
                                <i class="icon-play-sign"></i>
                                <h3>Extended Schaumparty im Moef Gaga</h3>
                                <span>Jam Reisen</span>
                            </a>
                        </li> --}}
                        <li class="featured-video">
                            <a href="/videos/Moef-GaGa-Festival-der-Meister">
                            <img src="http://img.youtube.com/vi/5AodCHRhpmw/0.jpg" alt="#">
                            <i class="icon-play-sign"></i>
                            <h3>Moef Gaga Festival der Meister</h3>
                            <span>FUN Reisen</span>
                            </a>
                        </li><!-- slide -->
                        <li class="featured-video">
                            <a href="/videos/The-best-Foam-Party-in-Lloret-de-Mar-at-Moef-Gaga-Disco">
                            <img src="http://img.youtube.com/vi/7DkR-2VlZxw/0.jpg" alt="#">
                            <i class="icon-play-sign"></i>
                            <h3>The best Foam Party in Lloret de Mar at Moef Gaga</h3>
                            <span>FUN Reisen</span>
                            </a>
                        </li><!-- slide -->
                    </ul>
                </div>
                </div><!-- widget content -->
            </div><!-- def block widget videos -->

            <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                <h4> Popular Tracks </h4><span class="liner"></span>
                <div class="widget-content row-fluid">
                <div class="mtracks">
                    <div class="content">
                    <ul class="tab-content-items">

                        @foreach ($songs as $song)
                        <li class="clearfix">
                            <a class="m-thumbnail" href="/popular-tracks/{{str_replace(' ', '-', str_replace(',', ' ', $song->artist))}}_{{str_replace(' ', '-', str_replace(',', ' ', $song->name))}}" title="{{$song->artist}} - {{$song->name}}"><img width="50" height="50" src="http://img.youtube.com/vi/{{$song->link}}/0.jpg" alt="#"></a>
                            <h3><a href="/popular-tracks/{{str_replace(' ', '-', str_replace(',', ' ', $song->artist))}}_{{str_replace(' ', '-', str_replace(',', ' ', $song->name))}}" title="{{$song->artist}} - {{$song->name}}">{{$song->name}}</a></h3>
                            <span> {{$song->artist}} </span>
                            <span> {{$song->plays}} Plays </span>
                        </li>
                        @endforeach

                    </ul>
                    </div>
                </div>
                </div><!-- widget content -->
            </div><!-- def block widget popular tracks -->

            <div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
                <h4> Partners 2022 </h4><span class="liner"></span>
                <div class="widget-content row-fluid">
                <div class="videos clearfix flexslider">
                    <ul class="slides">
                    <li class="featured-video">
                        <a href="http://beachmasters.nl" target="_blank">
                        <img src="images/partners/beach-masters.jpg" alt="#">

                        <h3>Beach Masters</h3>
                        <span>www.beachmasters.nl</span>
                        </a>
                    </li>
                    <li class="featured-video">
                        <a href="http://www.jam-reisen.de" target="_blank">
                        <img src="images/partners/jam-reisen.jpg" alt="#">

                        <h3>Jam Reisen</h3>
                        <span>www.jam-reisen.de</span>
                        </a>
                    </li><!-- slide -->
                    <li class="featured-video">
                        <a href="http://www.fun-reisen.de" target="_blank">
                        <img src="images/partners/fun-reisen.jpg" alt="#">

                        <h3>Fun Reisen</h3>
                        <span>www.fun-jugendreisen.de</span>
                        </a>
                    </li><!-- slide -->
                    <li class="featured-video">
                        <a href="http://www.mango-tours.de" target="_blank">
                        <img src="images/partners/mango-tours.jpg" alt="#">

                        <h3>Mango Tours</h3>
                        <span>www.mango-tours.de</span>
                        </a>
                    </li><!-- slide -->
                    <li class="featured-video">
                        <a href="http://www.max-tours.de" target="_blank">
                        <img src="images/partners/max-tours.jpg" alt="#">

                        <h3>Max Tours</h3>
                        <span>www.max-tours.de</span>
                        </a>
                    </li><!-- slide -->
                    </ul>
                </div>
                </div><!-- widget content -->
            </div><!-- def block widget partners -->

            </div><!-- span4 sidebar -->
        </div><!-- row clearfix -->
    </div><!-- end page content -->
@stop

@section('postscripts')

<script type="text/javascript">
  /* <![CDATA[ */
    var tpj=jQuery;
    tpj.noConflict();
    tpj(document).ready(function() {
    if (tpj.fn.cssOriginal!=undefined)
        tpj.fn.css = tpj.fn.cssOriginal;
        var api= tpj('.revolution').revolution({
            delay:9000,
            startheight:380,
            startwidth:960,
            hideThumbs:200,
            thumbWidth:80,
            thumbHeight:50,
            thumbAmount:5,
            navigationType:"none",
            navigationArrows:"verticalcentered",
            navigationStyle:"square",
            touchenabled:"on",
            onHoverStop:"on",
            navOffsetHorizontal:0,
            navOffsetVertical:20,
            shadow:0
        });
    });
  /* ]]> */
</script>

@stop

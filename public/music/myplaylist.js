var myPlaylist = [
	
	{
		oga:'music/tracklist/Calvin Harris - Summer.mp3',
		title:'Summer',
		artist:'Calvin Harris',
		rating:5,
		buy:'#',
		price:'',
		duration:'3:45',
		cover:'music/tracklist/thumbnails/calvin-harris-summer.jpg'	
	},
	{
		oga:'music/tracklist/Pitbull feat. Kesha - Timber.mp3',
		title:'Timber feat. Kesha',
		artist:'Pitbull',
		rating:5,
		buy:'#',
		price:'',
		duration:'3:35',
		cover:'music/tracklist/thumbnails/pitbull-kesha-timber.jpg'	
	},		
	{
		mp3:'music/tracklist/R3hab - Samurai (Go Hard) (Original Mix).mp3',
		oga:'music/1.ogg',
		title:'Samurai (Go Hard)',
		artist:'R3hab',
		rating:5,
		buy:'#',
		price:'',
		duration:'4:56',
		cover:'music/tracklist/thumbnails/r3hab-samurai-go-hard.jpg'
	},
	{
		mp3:'http://2.s3.envato.com/files/62716273/preview.mp3',
		oga:'music/6.ogg',
		title:'A Happy Carefree Day',
		artist:'JoshKramerMusic',
		rating:5,
		buy:'#',
		price:'13',
		duration:'2:45',
		cover:'music/6.jpg'	
	},
	{
		mp3:'http://3.s3.envato.com/files/41975807/preview.mp3',
		oga:'music/2.ogg',
		title:'Through the Clouds',
		artist:'Dejans',
		rating:4,
		buy:'#',
		price:'17',
		duration:'5:56',
		cover:'music/2.jpg'	
	},
	{
		mp3:'http://3.s3.envato.com/files/2229255/preview.mp3',
		oga:'music/3.ogg',
		title:'Live My Life',
		artist:'Metrolightmusic',
		rating:5,
		buy:'#',
		price:'17',
		duration:'2:31',
		cover:'music/3.jpg'	
	}
];
jQuery(document).ready(function ($) {
	$('.music-player-list').ttwMusicPlayer(myPlaylist, {
		currencySymbol:'+',
		buyText:'VOTE UP',
		tracksToShow:3,
		ratingCallback:function(index, playlistItem, rating){
			//some logic to process the rating, perhaps through an ajax call
		},
		jPlayer:{
			swfPath:'http://www.jplayer.org/2.1.0/js'
		},
		autoPlay:true
	});
});
<!DOCTYPE html>
<html>
<head>
<title>CVMaker</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="{{ asset('./css/style.css')}}">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="{{url('uploads/'.$image)}}" alt="Alan Smith" />
		</div>
		
		<div id="name">
		<h1 class="quickFade delayTwo">{{ $name }}</h1>
			<h2 class="quickFade delayThree">{{ $job }}</h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
			<li>Birth Date : {{ date('d-M-Y', strtotime($date)) }}</li>
			<li>Address : {{ $address }}</li>
			<li>Mobile : {{ $mobile	}}</li>
			<li>Email : {{ $email }}</li>
			<li>LinkedIn : {{ $linkedin }}</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
				<p>{{ $profile}}</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<article>
				<h2>{{$collage}}</h2>
				<p class="subDetails">From</p>
				<p>{{ date('d-M-Y', strtotime($fcollage)) }}</p>
				<p class="subDetails">To</p>
				<p>{{ date('d-M-Y', strtotime($tcollage)) }}</p>
				</article>
				
				<article>
				<h2>{{$school}}</h2>
				<p class="subDetails">From</p>
				<p>{{ date('d-M-Y', strtotime($fschool)) }}</p>
				<p class="subDetails">To</p>
				<p>{{ date('d-M-Y', strtotime($tschool)) }}</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			@foreach ((array)$works['workplace'] as $key1 => $item)
				@foreach ((array)$item as $key2 => $val)
				
				<div class="sectionContent">
					<article>
					<h2>{{$item}}</h2>

					<p class="subDetails">{{$works['role'][$key1]}}</p>
					<p>From : {{ date('d-M-Y', strtotime($works['fw'][$key1])) }}</p>
					<p>To : {{ date('d-M-Y', strtotime($works['tw'][$key1])) }}</p>
					</article>
				</div>

				@endforeach
			@endforeach
			
			<div class="clear"></div>
		</section>		
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
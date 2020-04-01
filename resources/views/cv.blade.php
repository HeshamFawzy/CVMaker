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
				<p>{{$fcollage}}</p>
				<p class="subDetails">To</p>
				<p>{{$tcollage}}</p>
				</article>
				
				<article>
				<h2>{{$school}}</h2>
				<p class="subDetails">From</p>
				<p>{{$fschool}}</p>
				<p class="subDetails">To</p>
				<p>{{$tschool}}</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
	
						<article>
							<h2></h2>
							<p class="subDetails">April 2011 - Present</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
						</article>
				
			</div>
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
@extends('cvlayout')

@section('content')
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
			<a class="btn btn-success" style="float:right" href="{{ url('download')}}">Download</a>
		</section>		
		
	</div>
</div>
@endsection
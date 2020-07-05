@extends('front-end.master')


@section('pageTitle')
	{{$post->title}}
@endsection

@section('headerScriptArea')
	<!-- Share button for single page -->
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eff1dd20e7bec0012bd75cf&product=inline-share-buttons" async="async"></script>
@endsection

@section('body')
	<div class="container">
		<h1 class="single-page-heading">{{$post->title}}</h1>
		<hr>

		@if(!empty($post->video_id))
			<div class="youtube-div">
				<a class="btn btn-default" href="https://www.youtube.com/watch?v={{$post->video_id}}" target="_blank">Watch this video on YouTube</a>
				<a class="video-link" href="https://www.youtube.com/watch?v={{$post->video_id}}" target="_blank">https://www.youtube.com/watch?v={{$post->video_id}}</a>		
			</div>
			<hr>
		@endif


		@if($post->type == 0)
			<div class="video">
				<iframe src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		@else
			@if($post->image == NULL)
				<img class="single-page-image" src="{{ asset('/') }}front-end/img/default-thumb.jpg">
			@else
				<img class="single-page-image" src="{{ asset('/') }}uploads/post-images/{{$post->image}}">	
			@endif
		@endif


		<hr>


		

		<div class="single-page-excerpt">
			<span>{{$post->excerpt}}</span>
		</div>

		<div class="single-page-content">
			{!!$post->body!!}
		</div>

		<div class="sharethis-inline-share-buttons"></div>

	</div>
@endsection

@section('footerScriptArea')


@endsection
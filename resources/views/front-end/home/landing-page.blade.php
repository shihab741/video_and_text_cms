@extends('front-end.master')


@section('pageTitle')
Home
@endsection

@section('headerScriptArea')

@endsection

@section('body')
<div class="container home-content">


	<div class="row">
		<!-- Section one -->
		<div class="col-md-8">
			<span class="section-heading">Section one</span>
			<hr>
			<div class="section-content grid-container">
  		

			@php($i = 1)
			@foreach($posts as $post)
				@if($post->section == 1)
					@if($i == 1)
	  					<div class="item1">
							<a href="{{ route('single-page', $post->id) }}" class="ImageLink">
								
									@if($post->image == NULL)
										@if($post->video_id == NULL)
											<img class="img-thumbnail"  src="{{ asset('/') }}front-end/img/default-thumb.jpg">
										@else
											<img class="img-thumbnail" src="http://i3.ytimg.com/vi/{{$post->video_id}}/hqdefault.jpg">
										@endif
									@else
										<img class="img-thumbnail" src="{{ asset('/') }}uploads/post-images/{{$post->image}}">
									@endif

									@if($post->type == 0)
										<img class="OverlayIcon" src="{{ asset('/') }}front-end/img/play-button.png">
									@endif
							</a>
							<a href="{{ route('single-page', $post->id) }}">
								<div>
									<span class="post-heading-large">{{$post->title}}</span>
									<div class="home-excerpt">
										<span>{{$post->excerpt}}</span>
									</div>							
								</div>
							</a>												
	  					</div>
						@php($i++)
					@else
						<div>
							<a href="{{ route('single-page', $post->id) }}" class="ImageLink">	

									@if($post->image == NULL)
										@if($post->video_id == NULL)
											<img class="img-thumbnail"  src="{{ asset('/') }}front-end/img/default-thumb.jpg">
										@else
											<img class="img-thumbnail" src="http://i3.ytimg.com/vi/{{$post->video_id}}/hqdefault.jpg">
										@endif
									@else
										<img class="img-thumbnail" src="{{ asset('/') }}uploads/post-images/{{$post->image}}">
									@endif



									@if($post->type == 0)
										<img class="OverlayIcon" src="{{ asset('/') }}front-end/img/play-button.png">
									@endif					
							</a>
							<a href="{{ route('single-page', $post->id) }}">
								<span class="post-heading-small">{{$post->title}}</span>
								<div class="home-excerpt">
									<span>{{$post->excerpt}}</span>
								</div>
							</a>													
						</div>					
					@endif
				@endif
			@endforeach
			
				
			</div>

		</div>
		<!-- /Section one ends -->

		<!-- Section two -->
		<div class="col-md-4 well">
			<span class="section-heading">Section two</span>
			<hr>
			<div class="section-content grid-container-section-two">

			@php($j = 1)
			@foreach($posts as $post)
				@if($post->section == 2)
					@if($j == 1)
	  					<div class="item1">
							<a href="{{ route('single-page', $post->id) }}" class="ImageLink">
								
									@if($post->image == NULL)
										@if($post->video_id == NULL)
											<img class="img-thumbnail"  src="{{ asset('/') }}front-end/img/default-thumb.jpg">
										@else
											<img class="img-thumbnail" src="http://i3.ytimg.com/vi/{{$post->video_id}}/hqdefault.jpg">
										@endif
									@else
										<img class="img-thumbnail" src="{{ asset('/') }}uploads/post-images/{{$post->image}}">
									@endif
									
									@if($post->type == 0)
										<img class="OverlayIcon" src="{{ asset('/') }}front-end/img/play-button.png">
									@endif	
							</a>
							<a href="{{ route('single-page', $post->id) }}">
								<div>
									<span class="post-heading-large">{{$post->title}}</span>
									<div class="home-excerpt">
										<span>{{$post->excerpt}}</span>
									</div>							
								</div>
							</a>												
	  					</div>
						@php($j++)
					@else
						<div>
							<a href="{{ route('single-page', $post->id) }}" class="ImageLink">				
									@if($post->image == NULL)
										@if($post->video_id == NULL)
											<img class="img-thumbnail"  src="{{ asset('/') }}front-end/img/default-thumb.jpg">
										@else
											<img class="img-thumbnail" src="http://i3.ytimg.com/vi/{{$post->video_id}}/hqdefault.jpg">
										@endif
									@else
										<img class="img-thumbnail" src="{{ asset('/') }}uploads/post-images/{{$post->image}}">
									@endif

									@if($post->type == 0)
										<img class="OverlayIcon" src="{{ asset('/') }}front-end/img/play-button.png">
									@endif						
							</a>
							<a href="{{ route('single-page', $post->id) }}">
								<span class="post-heading-small">{{$post->title}}</span>
							</a>													
						</div>
					@endif
				@endif
			@endforeach
															
  							
			</div>

		</div>
		<!-- /section two ends -->
	</div>


</div>
@endsection

@section('footerScriptArea')


@endsection
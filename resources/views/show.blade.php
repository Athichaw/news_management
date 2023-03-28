@extends('master')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('news.index') }}" class="btn btn-primary btn-sm float-end">Back</a>
			</div>
		</div>
	</div>
	<div class="card-body">
    	<!--<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Content Type</b></label>
			<div class="col-sm-10">
				{{ $news->contentType }}
			</div>-->
        </div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Topic</b></label>
			<div class="col-sm-10">
				{{ $news->topicName }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Article</b></label>
			<div class="col-sm-10">
				{{ $news->articleContent }}
			</div>
		</div>
        		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Article</b></label>
			<div class="col-sm-10">
				{{ $news->articleContent }}
			</div>
		</div>
		<!--<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Status</b></label>
			<div class="col-sm-10">
				{{ $news->newsStatus }}
			</div>-->
		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Publish</b></label>
			<div class="col-sm-10">
				{{ $news->publishDate }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Highlight Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $news->mediaHighlight) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Content Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $news->mediaContent) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')

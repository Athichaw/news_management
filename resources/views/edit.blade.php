@extends('master')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Edit News Detail</b></div>
			<div class="col col-md-6">
				<a href="{{ route('news.index') }}" class="btn btn-primary btn-sm float-end">Back</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<form method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
            <!--<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Content Type</label>
				<div class="col-sm-10">
					<select name="contentType" class="form-control">
						<option value="Thailand">Thailand</option>
						<option value="World">World</option>
						<option value="Business">Business</option>
						<option value="Opinion">Opinion</option>
					</select>
				</div>
			</div>-->
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Topic</label>
				<div class="col-sm-10">
					<input type="text" name="topicName" class="form-control" value="{{ $news->topicName }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Article</label>
				<div class="col-sm-10">
					<input type="text" name="articleContent" class="form-control" value="{{ $news->articleContent }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Publish Date</label>
				<div class="col-sm-10">
					<input type="date" name="publishDate" class="form-control" value="{{ $news->publishDate }}" />
				</div>
			</div>
			<!--<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Content Type</label>
				<div class="col-sm-10">
					<select name="newsStatus" class="form-control">
                        <option value="dratf">dratf</option>
					    <option value="enable">enable</option>
					    <option value="disable">disable</option>
					    <option value="delete">delete</option>
					</select>
				</div>
			</div>-->
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Highlight Image</label>
				<div class="col-sm-10">
					<input type="file" name="mediaHighlight" />
					<br />
					<img src="{{ asset('images/' . $news->mediaHighlight) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_mediaHighlight" value="{{ $news->mediaHighlight }}" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Content Image</label>
				<div class="col-sm-10">
					<input type="file" name="hidden_mediaContent" />
					<br />
					<img src="{{ asset('images/' . $news->mediaContent) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_mediaContent" value="{{ $news->mediaContent }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $news->id }}" />
				<input type="submit" class="btn btn-primary" value="Submit" />
			</div>	
		</form>
	</div>
</div>
<!--<script>
//document.getElementsByName('contentType')[0].value = "{{ $news->contentType }}";
//document.getElementsByName('newsStatus')[0].value = "{{ $news->newsStatus }}";
</script>-->

@endsection('content')

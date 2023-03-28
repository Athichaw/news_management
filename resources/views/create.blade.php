@extends('master')
@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add News</div>
	<div class="card-body">
		<form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
			@csrf
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
					<input type="text" name="topicName" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Article</label>
				<div class="col-sm-10">
					<input type="text" name="articleContent" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Highlight Image</label>
				<div class="col-sm-10">
					<input type="file" name="mediaHighlight" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Content Image</label>
				<div class="col-sm-10">
					<input type="file" name="mediaContent" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Publish Date</label>
				<div class="col-sm-10">
					<input type="date" name="publishDate" class="form-control" />
				</div>
			</div>
            <!--<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Status</label>
				<div class="col-sm-10">
					<select name="newsStatus" class="form-control">
                        <option value="dratf">dratf</option>
					    <option value="enable">enable</option>
					    <option value="disable">disable</option>
					    <option value="delete">delete</option>
					</select>
				</div>
			</div>-->
			<div>
				<input type="submit" class="btn btn-primary my-3" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')

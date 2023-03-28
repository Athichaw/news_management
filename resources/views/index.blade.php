@extends('master')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>News Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('news.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Topic</th>
				<!--<th>Content Type</th>-->
                <th>Highlight Image</th>
				<!--<th>Status</th>-->
                <th>Publish Date</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>						
						<td>{{ $row->topicName }}</td>
						<!--<td>{{ $row->contentType }}</td>-->
                        <td><img src="{{ asset('images/' . $row->mediaHighlight) }}" width="75" /></td>
						<!--<td>{{ $row->newsStatus }}</td>-->
                        <th>{{ $row->publishDate }}</th>
						<td>
							<form method="POST" action="{{ route('news.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('news.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('news.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection

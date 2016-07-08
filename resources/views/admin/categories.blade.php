@extends('layouts.admin')
@section('head')
<link href="/css/styles.css" rel="stylesheet">
@stop
@section('content')
<div class="col-md-10">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">Basic Table</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>categories</th>
								<th>edit</th>
								<th>delete</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cat as $cats)
							<tr>
								<td>{{$cats->cat_name}}</td>
								<td><a href="{{ url('/cat/'.$cats->id.'/edit') }}" class="btn btn-primary" >Edit</a></td>
								<td>{{ Form::open(['method' => 'DELETE', 'url' => '/cat/'.$cats->id]) }}
									{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
								{{ Form::close() }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<a href="{{ url('/cat/create') }}" class="btn btn-success" >add category</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
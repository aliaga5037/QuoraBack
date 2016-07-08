@extends('layouts.app')
@section('head')
{{-- expr --}}
@stop

@section('content')
<div class="container">
<table class="table table-bordered">
<th>id</th>
<th>name</th>
<th>surname</th>
<th>username</th>
<th>email</th>
<th>role</th>
<th>created_at</th>
<th>updated_at</th>
<th>Delete</th>
@foreach ($users as $user)
	
		@unless ($user->role == "admin")
			
		
		<tr>
			<td>{!!$user->id!!}</td>
			<td>{!!$user->name!!}</td>
			<td>{!!$user->surname!!}</td>
			<td>{!!$user->username!!}</td>
			<td>{!!$user->email!!}</td>
			<td>
				{!!$user->role!!}
				{{ Form::open(['url' => 'user/'.$user->id.'/edit','method' => 'PATCH']) }}
					Mentor {{Form::radio('role', 'mentor')}}<br>
					Muellim {{Form::radio('role', 'muellim')}}<br>
					{{ Form::submit('Change', ['class' => 'btn btn-primary']) }}

            {{ Form::close() }}
			</td>
			<td>{!!$user->created_at!!}</td>
			<td>{!!$user->updated_at!!}</td>


			<td>{{ Form::open(['method' => 'DELETE', 'url' => 'user/'.$user->id]) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}</td>
		</tr>
	@endunless
	
@endforeach

</table>
<a href="users/create" class="btn btn-success" style="width: 84%;">Add</a>

</div>

@stop

@section('footer')
{{-- expr --}}
@stop
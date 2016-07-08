@extends('layouts.admin')
@section('content')
<div class="col-md-10">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title"></div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						{!! Form::open(['url' => "/cat/$cat->id" , 'method'=> 'PATCH']) !!}
						{!!Form::text('cat_name',"$cat->cat_name",['class'=>'form-control'])!!}
						{!!Form::submit('Edit Category!',['class'=>'form-control btn btn-success'])!!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
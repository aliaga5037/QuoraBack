@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
    @foreach($catName->question as $question)
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$catName->cat_name}}/{{$question->user->name}}</div>
				
				
                <div class="panel-body">
                    {{$question->sual}}
                </div>
                
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
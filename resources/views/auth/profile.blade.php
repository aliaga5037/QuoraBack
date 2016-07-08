@extends('layouts.app')
@section('head')
<style>
form{

    clear: both;
}
.btn-file {
    position: relative;
    overflow: hidden;
    top: 34px;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div>
                        <img src="/uploads/avatar/{{$user->avatar}}" alt="" style="height: 300px;width: 300px;float: left;border-radius:50%;">
                    </div>
                    <div>{{ $user->name }}'s Profile</div>
                    <div>{{ $user->email }}</div>
                    {!! Form::open(array('url' => 'profile' , 'files'=>'true')) !!}
                    
                        <div class="col-md-4">
                        <span class="btn btn-primary btn-file form-group">
                        Browse {!!Form::file('avatar',['id'=>'image'])!!}                        
                        </span>
                        {!! Form::text('image','',['class'=>'image form-control', 'readonly']); !!}
                        {!!Form::submit('submit',['class'=>'btn btn-primary','style'=>'float:right;'])!!}
                        </div>
                    
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
</div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('#image').change(function() {
           
           $('.image').val($('#image').val());

           
        });
    });
</script>
@stop
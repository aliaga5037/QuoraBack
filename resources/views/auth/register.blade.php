@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





{{-- <!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reg.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
  </head>
  <body>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="card white darken-1 size">
              <div class="card-content valign center">
                <span class="card-title">Registration</span>
              </div>
              {!! Form::open(array('url' => '')) !!}
              <div class="col s12">
                <div class="input-field col s6">
                 {!!Form::text('username')!!}
                  <label for="text" data-error="wrong" data-success="right">First Name *</label>
                </div>
                <div class="input-field col s6">
                  <input id="text" type="text" class="validate">
                  <label for="text" data-error="wrong" data-success="right">Last Name *</label>
                </div>
              </div>
              <div class="input-field col s12">
                <input id="mail" type="email" class="validate">
                <label for="mail" data-error="wrong" data-success="right">Email *</label>
              </div>
              <div class="col s12">
                <div class="input-field col s6">
                  <input id="text" type="password" class="validate">
                  <label for="text" data-error="wrong" data-success="right">Password *</label>
                </div>
                <div class="input-field col s6">
                  <input id="text" type="password" class="validate">
                  <label for="text" data-error="wrong" data-success="right">Confirm Password *</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field col s6">
                  <input placeholder="+994" id="first_name" type="text" class="validate">
                  <label for="first_name">Phone Number</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix" style="color:grey;">today</i>
                  <input type="date" class="datepicker" id="icon_telephone">
                  <label for="icon_telephone">Birth date</label>
                </div>
              </div>
              <div class="col s12">
                <button class="subcol" type="submit" style="width: 100%"><span>Submit</span></button>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    <script>
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    
    </script>
  </body>
</html>













 --}}
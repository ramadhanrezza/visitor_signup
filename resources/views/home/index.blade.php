<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Visitors</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style type="text/css">
    .align-left {
        text-align: left !important;
    }
    </style>
</head>
<body>
@if(Session::has('error'))
<div class="alert-box success">
    <h2>{{ Session::get('error') }}</h2>
</div>
@endif
    <div class="container">
        <div class="col-sm-3">&nbsp;</div>
        <div class="col-sm-6">
            <br><br>
            {!! Form::open(['route' => 'sign-up', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label align-left']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        <p class="errors text-danger">{{ $errors->first('name') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label align-left']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        <p class="errors text-danger">{{ $errors->first('email') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Phone', ['class' => 'col-sm-3 control-label align-left']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        <p class="errors text-danger">{{ $errors->first('phone') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('occupation', 'Occupation', ['class' => 'col-sm-3 control-label align-left']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
                        <p class="errors text-danger">{{ $errors->first('occupation') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-sm-3">&nbsp;</div>
    </div>
</body>
</html>
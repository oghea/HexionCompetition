@extends('layouts.app')

@section('content')
    {!!Form::open(['action' => 'KompetisiController@store' , 'role' => 'form','class' => 'form-horizontal' ,'files' => true])!!}
    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">Email :</label>
        <div class="col-xs-8">
            {!! Form::text('email', NULL, array('placeholder' => 'Email','class' => 'form-control')) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">First Name:</label>
        <div class="col-xs-8">
            {!! Form::text('first_name', NULL, array('placeholder' => 'First Name','class' => 'form-control')) !!}
            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Last Name:</label>
        <div class="col-xs-8">
            {!! Form::text('last_name', NULL, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">Phone :</label>
        <div class="col-xs-8">
            {!! Form::text('phone', NULL, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">Alamat :</label>
        <div class="col-xs-8">
            {!! Form::text('address', NULL, array('placeholder' => 'Alamat Anda','class' => 'form-control')) !!}
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">City :</label>
        <div class="col-xs-8">
            {!! Form::text('city', NULL, array('placeholder' => 'Your City','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Photo 1 (max 2MB)</label>
        <div class="col-xs-8">
            {!! Form::file('photo1') !!}
            @if ($errors->has('photo1'))
                <span class="help-block">
                    <strong>{{ $errors->first('photo1') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Photo 2 (max 2MB)</label>
        <div class="col-xs-8">
            {!! Form::file('photo2') !!}
            @if ($errors->has('photo2'))
                <span class="help-block">
                    <strong>{{ $errors->first('photo2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Photo 3 (max 2MB)</label>
        <div class="col-xs-8">
            {!! Form::file('photo3') !!}
            @if ($errors->has('photo3'))
                <span class="help-block">
                    <strong>{{ $errors->first('photo3') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label"></label>
        <div class="col-xs-8">
            <input type="submit" class="btn btn-primary" value="Save Changes">
            <span></span>
            <input type="reset" class="btn btn-default" value="Cancel">
        </div>
    </div>
    {!! Form::close() !!}
@endsection
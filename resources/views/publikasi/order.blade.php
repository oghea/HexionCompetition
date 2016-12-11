@extends('layouts.app')

@section('content')
    {!!Form::open(['action' => 'PublikasiController@postOrder' , 'role' => 'form','class' => 'form-horizontal'])!!}
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
        <label class="col-xs-3 control-label">Address :</label>
        <div class="col-xs-8">
            {!! Form::text('address', NULL, array('placeholder' => 'Alamat Anda','class' => 'form-control')) !!}
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">Zip Code :</label>
        <div class="col-xs-8">
            {!! Form::text('zip', NULL, array('placeholder' => 'Kode Pos','class' => 'form-control')) !!}
            @if ($errors->has('zip'))
                <span class="help-block">
                    <strong>{{ $errors->first('zip') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">City :</label>
        <div class="col-xs-8">
            {!! Form::text('city', NULL, array('placeholder' => 'Kota','class' => 'form-control')) !!}
            @if ($errors->has('city'))
                <span class="help-block">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
        <label class="col-xs-3 control-label">State :</label>
        <div class="col-xs-8">
            {!! Form::text('state', NULL, array('placeholder' => 'Provinsi','class' => 'form-control')) !!}
            @if ($errors->has('state'))
                <span class="help-block">
                    <strong>{{ $errors->first('state') }}</strong>
                </span>
            @endif
        </div>
    </div>
    {{--<div class="form-group">--}}
        {{--<script--}}
                {{--src="https://checkout.stripe.com/checkout.js" class="btn btn-primary"--}}
                {{--data-key="{{ env('STRIPE_KEY') }}"--}}
                {{--data-amount="30000000"--}}
                {{--data-name="Stripe.com"--}}
                {{--data-description="Widget"--}}
                {{--data-locale="auto"--}}
                {{--data-currency="idr">--}}
        {{--</script>--}}
    {{--</div>--}}
    <div class="form-group">
        <label class="col-xs-3 control-label"></label>
        <div class="col-xs-8">
            {{--<input type="submit" class="btn btn-primary" value="Save Changes">--}}
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="{{ env('STRIPE_KEY') }}"
                    data-amount="30000000"
                    data-name="Stripe.com"
                    data-description="Widget"
                    data-locale="auto"
                    data-currency="idr">
            </script>
            <span></span>
            <input type="reset" class="btn btn-default" value="Cancel">
        </div>
    </div>
    {!! Form::close() !!}
@endsection
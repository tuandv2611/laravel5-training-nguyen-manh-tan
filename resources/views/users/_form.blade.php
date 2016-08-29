<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('name', trans('labels.users.name'), ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', trans('labels.users.email'), ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', trans('labels.users.password'), ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password', ['class' => 'form-control']) !!}

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    {!! Form::label('password-confirm', trans('labels.users.password_confirmation'), ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password_confirmation', ['id' => 'password-confirm', 'class' => 'form-control']) !!}

        @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit(trans('labels.users.'.$action), ['class' => 'btn btn-primary']) !!}
    </div>
</div>

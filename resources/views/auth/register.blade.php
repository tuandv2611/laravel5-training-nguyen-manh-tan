@extends('layouts.app')

@section('title', trans('titles.users.register'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('labels.users.register') }}</div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal']) !!}

                        @include('users._form', ['action' => 'register'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', trans('titles.users.edit'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('labels.users.edit') }}</div>
                <div class="panel-body">
                    {!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                        @include('users._form', ['action' => 'save'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

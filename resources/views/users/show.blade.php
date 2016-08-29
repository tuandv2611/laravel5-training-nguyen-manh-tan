@extends('layouts.app')

@section('title', trans('titles.home'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user->name }}</div>

                <div class="panel-body">
                @can('edit', $user)
                    {!! link_to_route('user.edit', trans('labels.users.edit'), ['user' => $user->id], ['class' => 'btn btn-info']) !!}
                @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

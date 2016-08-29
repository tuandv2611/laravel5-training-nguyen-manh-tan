@extends('layouts.app')

@section('title', trans('titles.home'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    {{ trans('messages.welcome') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

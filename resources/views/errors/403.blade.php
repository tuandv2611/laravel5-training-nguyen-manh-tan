@extends('layouts.app')

@section('title', trans('titles.unauthor'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {{ trans('messages.unauthor') }}
        </div>
    </div>
</div>
@endsection

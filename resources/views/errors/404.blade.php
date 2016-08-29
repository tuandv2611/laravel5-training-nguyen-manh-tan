@extends('layouts.app')

@section('title', trans('titles.notfound'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {{ trans('messages.notfound') }}
        </div>
    </div>
</div>
@endsection

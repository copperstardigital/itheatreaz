@extends('layouts.home')

@section('title', 'Staff Biographies | Phoenix, AZ')
@section('meta', 'Meet Chris Haines and Rosemary Close, our artistic director and managing director, respectively.')

@section('content')
<div class="content">
    <div class="container">
        @foreach ($staffers as $staff)
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <img class="img-responsive" src="{{ url('images/' . $staff->image) }}" />
            </div>
            <div class="col-md-8">
                <h1>{{{ $staff->headline }}}</h1>
                {!! $staff->article !!}
            </div>
        </div>
        @endforeach
    </div>
@stop
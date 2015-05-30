@extends('layouts.home')

@section('title', 'Our Mission and Vision | Phoenix, AZ')
@section('meta', 'iTheatre Collaborative will produce distinctive theatre that cultivates the visceral, innervating and divergent experiences intrinsic to live performance.')

@section('content')
<div class="content">
    <div class="container">
        @foreach ($articles as $article)
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-4">
                    <img class="img-responsive" src="{{ url('images/' . $article->image) }}" />
                </div>
                <div class="col-md-8">
                    <h1>{{{ $article->headline }}}</h1>
                    {!! $article->article !!}
                </div>
           </div>
        @endforeach
    </div>
@stop
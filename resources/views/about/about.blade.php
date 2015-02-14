@extends('layouts.home')

@section('title', 'About iTheatre Collaborative | Phoenix, AZ')
@section('meta', 'iTheatre Collaborative was borne on the idea that live theater is an opportunity to affect, almost viscerally, both audience and artist. We have electrified audiences with work that was distinctive and divergent. ')

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
                {!! str_replace('---', '', $article->article) !!}
            </div>
        </div>
        @endforeach
    </div>
@stop
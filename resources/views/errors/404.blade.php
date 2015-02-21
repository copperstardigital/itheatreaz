@extends('layouts.home')

@section('title', 'Page Not Found | Phoenix, AZ')
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
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12">
                <h3>{{ getCurrentSeason() }} Season</h3>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            @foreach ($season as $show)
                <div class="col-md-3 col-xs-6">
                    <a href="/productions/{{ getCurrentSeason() }}/{{ $show->production_url }}">
                        <img style="margin-bottom: 20px;" class="img-responsive" src="/images/shows/{{ getCurrentSeason() }}/{{ $show->show_image }}" alt="{{$show->title}}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
 @stop


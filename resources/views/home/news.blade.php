@extends('layouts.home')

@section('title', 'News | Phoenix, AZ')
@section('meta', 'Get the latest information about iTheatre Collaborative.')

@section('content')
<div class="content">
    <div class="container">
        <h1>iTheatre News</h1>
        @if (count($newsItems))
            @foreach ($newsItems as $news)
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-4">
                        <img style="border: 2px dotted #FFF;" class="img-responsive" src="{{ url('images/news/' . $news->image) }}" />
                    </div>
                    <div class="col-md-8">
                        <h1>{{{ $news->headline }}}</h1>
                        {{ $news->story }}
                    </div>
                </div>
            @endforeach
        @else
            <p>There are no current news items.  Please check back later.</p>
        @endif
    </div>
@stop
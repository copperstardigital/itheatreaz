@extends('layouts.home')

@section('title', 'News | Phoenix, AZ')
@section('meta', 'Get the latest information about iTheatre Collaborative.')

@section('content')
<div class="content">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-7 col-sm-12">
                <h1>iTheatre News</h1>
                @if (count($newsItems))
                    @foreach ($newsItems as $news)
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="{{ url('images/news/' . $news->image) }}" />
                            </div>
                            <div class="col-md-8">
                                <h1>{{{ $news->headline }}}</h1>
                                {!! $news->story !!}
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>There are no current news items.  Please check back later.</p>
                @endif
            </div>
            <div class="col-md-5 col-sm-12">
                <h2>Open Mic Night</h2>

                <img class="img-responsive img-thumbnail" src="/images/open_mic_2016_2017.jpg" alt="Open Mic Night" />
            </div>
        </div>
    </div>
@stop
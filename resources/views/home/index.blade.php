@extends('layouts/index')

@section('title', 'Behind the Herberger Theatre | Phoenix, AZ')
@section('meta', 'ITheatre Collaborative is located behind the Herberger Theatre, which is located at 222 E. Monroe St in Phoenix.  Enter from Van Buren Street')

@section('content')

<div class="news content">
    <div class="container">
        <div class="row margin-bottom-20">
            <div class="col-md-6 col-xs-12">
                <h2>Director's Corner</h2>

                   <h4>{{ $corner->headline }}</h4>

                   {!! $corner->corner !!}

                   <p>&mdash; iTC Artistic Director Christopher Haines</p>

                   <a href="/directors-corner" class="btn btn-primary pull-right">Read Past Director's Corners</a>
            </div>
            <div class="col-md-2 hidden-xs">
                <img src="{{ url('images/chair.png') }}" alt="Director's chair"/>
            </div>
            <!-- News -->
            <div class="col-md-4 col-xs-12">
                <h3>News</h3>
                @if (count($newsItems))
                    <ul class="list-group news-list">
                        @foreach ($newsItems as $news)
                            <li class="list-group-item"><a href="/news">{{ $news->headline }}<br/><small>{{ $news->created_at->diffForHumans() }}</small></a></li>
                         @endforeach
                    </ul>
                @else
                    <p>There currently are no news items.  Please check back later.</p>
                @endif
            </div>
        </div>

@stop



@extends('layouts.home')

@section('title', 'Our History | Phoenix, AZ')
@section('meta', 'iTheatre Collaborative has produced cutting edge theatre in Phoenix since 2003.')

@section('content')
<div class="content">
    <div class="container">
        <h1>iTheatre Programming History</h1>
        @foreach ($seasons as $season)
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4 col-sm-4">
                <h2 style="margin-top: 0px;">{{{ $season['season'] }}}</h2>
                <img style="margin-bottom: 20px;" class="img-responsive" src="{{ url('images/history/' . $season['image']) }}" />
            </div>
            <div class="col-md-8 col-sm-8">
                <ul class="list-group">
                @foreach ($season['productions'] as $production)
                    <li class="list-group-item">{{{ $production->title }}}</li>
                @endforeach
                </ul>
                <a href="/history/productions/{{$season['season']}}" class="btn btn-primary pull-right">Season Details</a>
            </div>
        </div>
        @endforeach
    </div>
@stop


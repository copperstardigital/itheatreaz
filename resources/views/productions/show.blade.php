@extends('layouts.home')

@section('title', $season . ' Productions | ' . $production->title . ' by ' . $production->playwright)

@section('meta', substr(strip_tags(str_replace('"', '\'', $production->show_description)), 0, 200))

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $season }} Season</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive" src="/images/shows/{{ $season }}/{{ $production->show_image }}" />
            </div>
            <div class="col-sm-6">
                <h1>&ldquo;{{ $production->title }}&rdquo;</h1>
                <h2>By {{ $production->playwright}}</h2>
                <h4>{{ (date('Y-m-d', strtotime($production->show_closes)) < date('Y-m-d')) ? 'Premiered' : 'Premiering' }} {{ $production->premiere }}</h4>
                <hr />
                @if (!empty($production->location))
                    {{ $production->location }}
                @endif
                <p>{{ $production->presenter }}</p>
                <p>{{ $production->run }}</p>
                <p><strong>{{ $production->dates }}</strong></p>

                {!! $production->show_description !!}

                <br/><br/>

                @if (date('Y-m-d') < date('Y-m-d', strtotime($production->show_closes)) && !empty($production->ticket_id))
                    <a href="http://herbergertheater.ticketforce.com/eventperformances.asp?evt=<?php echo $production->ticket_id; ?>" target="_blank" class="btn btn-primary">Buy Tickets</a>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
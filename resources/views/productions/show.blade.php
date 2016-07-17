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
                <img class="img-responsive img-thumbnail" src="/images/shows/{{ $season }}/{{ $production->show_image }}" />
            </div>
            <div class="col-sm-6">
                <h1>&ldquo;{{ $production->title }}&rdquo;</h1>
                <h2>By {{ $production->playwright}}</h2>
                <h4>{{ (date('Y-m-d', strtotime($production->show_closes)) < date('Y-m-d')) ? 'Premiered' : 'Premiering' }} {{ $production->premiere }}</h4>
                <hr />
                @if (!empty($production->location))
                    {{ $production->location }}
                @endif
                <h4>{!! $production->presenter !!}</h4>
                <h4>{{ $production->run }}</h4>
                <p><strong>{!! $production->dates !!}</strong></p>

                {!! $production->show_description !!}

                <br/><br/>

                @if (date('Y-m-d') < date('Y-m-d', strtotime($production->show_closes)) && !empty($production->ticket_id))
                    <a href="http://herbergertheater.ticketforce.com/eventperformances.asp?evt=<?php echo $production->ticket_id; ?>" target="_blank" class="btn btn-primary">Buy Tickets</a>
                @endif

                <br/><br/>

            </div>
        </div>

        @if (count($production->actors) || count($production->crew) || count($production->playwrights))

            <hr />

            <div class="row">
                <div class="col-md-6">

                    <div class="well production-staff">
                        <h2>Cast</h2>

                        @forelse ($production->actors as $actor)

                            @if (File::exists('uploads/headshots/' . $actor->headshot))

                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">

                                        <img class="img-responsive img-thumbnail" src="/uploads/headshots/{{ $actor->headshot }}" alt="{{ $actor->first_name }} {{ $actor->last_name }}" />

                                    </div>
                                    <div class="col-md-8">
                                        <p><strong>{{ $actor->first_name }} {{ $actor->last_name }}{{ ($actor->equity) ? '*' : ''}}</strong> (<em>{{ $actor->pivot->roles }}</em>) {!! $actor->bio !!}</p>

                                        {!! (!empty($actor->equity)) ? '<em>*Member of Actors’ Equity Association, the Union of Professional Actors and Stage Managers in the United States.</em>' : '' !!}

                                    </div>
                                </div>

                            @else

                                <p><strong>{{ $actor->first_name }} {{ $actor->last_name }}</strong> (<em>{{ $actor->pivot->roles }}</em>) {!! $actor->bio !!}</p>

                            @endif

                        @empty

                            <p>This show has no actors.</p>

                        @endforelse

                    </div>

                </div>
                <div class="col-md-6">

                    <div class="well">
                        <h2>Playwright{{ (count($production->playwrights) == 1) ? '' : 's' }}</h2>

                        @forelse ($production->playwrights as $playwright)

                            <p><strong>{{ $playwright->first_name }} {{ $playwright->last_name }}</strong> {!! $playwright->bio !!}</p>

                        @empty

                            <p>This show has no playwrights.</p>

                        @endforelse

                        <h2>Creative Team</h2>

                        @forelse ($production->crew as $crew)

                            <p><strong>{{ $crew->first_name }} {{ $crew->last_name }}</strong> (<em>{{ $crew->pivot->roles }}</em>)</p>

                        @empty

                            <p>This show has no creative team.</p>

                        @endforelse

                    </div>

                </div>
            </div>

        @endif

        <?php $carousel = glob(public_path() . '/images/slideshows/' . $production->production_url . '/*'); ?>

        @if (count($carousel))

            <hr />

            <div class="well hidden-xs" style="margin-bottom: 100px;">

                <div class="row">

                    <div class="col-sm-8">

                        <h2>Show Images</h2>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                            <!--<ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1">
                                <li data-target="#myCarousel" data-slide-to="2">
                                <li data-target="#myCarousel" data-slide-to="3">
                            </ol>-->

                            <div class="carousel-inner">
                                <?php $counter = 1; ?>


                                @foreach ($carousel as $photo)
                                    <div class="item {{ ($counter == 1) ? 'active' : '' }}">
                                        <img class="img-responsive img-thumbnail" src="/images/slideshows/{{ $production->production_url }}/{{ basename($photo) }}" alt="{{ $production->title }}" />
                                    </div>
                                    <?php $counter++; ?>
                                @endforeach

                            </div>

                            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>

                </div>

            </div>

        @endif
    </div>

</div>
@stop

@section('css')

    <style>
        @media screen and (min-width: 766px) {
            .carousel-inner > .item img {
                max-width: 97%;
                float: left !important;
            }
        }

        @media screen and (max-width: 766px) {
            .carousel-inner > .item img {
                max-width: 100%;
                float: left !important;
            }
        }
    </style>


@stop
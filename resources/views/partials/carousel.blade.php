<div class="curtain-top"></div>

<div class="container stage">
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <!--<ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1">
        <li data-target="#myCarousel" data-slide-to="2">
        <li data-target="#myCarousel" data-slide-to="3">
    </ol>-->

    <div class="carousel-inner">
        <?php $counter = 1; ?>
        @foreach ($carousel as $c)
            <div class="item {{ ($counter == 1) ? 'active' : '' }}">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img alt="{{ $c->title }}" class="img-responsive img-center" style="width: 100%; max-width: 354.5px;" src="/images/shows/{{ getCurrentSeason() }}/{{ $c->show_image }}" />

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h1>&ldquo;{{ $c->title }}&rdquo;</h1>
                        <h2 class="hidden-xs">By {{ $c->playwright}}</h2>
                        <h4 class="hidden-xs">Premiering {{ $c->premiere }}</h4>
                        <hr />

                        <p class="hidden-xs">{{ $c->presenter }}</p>
                        <p class="hidden-xs">{{ $c->run }}</p>
                        <p><strong>{{ $c->dates }}</strong></p>

                        <a href="/productions/{{ getCurrentSeason() }}/{{ $c->production_url }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php $counter++; ?>
        @endforeach

    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>
<div class="curtain-left"></div>
<div class="curtain-right"></div>
<div class="stage-bottom-bar hidden-xs">
    @if (!empty($next->ticket_id))
        <div class="arrow-box">
            <h3 style="padding-top: 5px">Next iTC Event:</h3>
        </div>
        <h3 class="next-show">{{ $next->title }} <small>{{ $next->run }}</small>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://herbergertheater.ticketforce.com/eventperformances.asp?evt={{ $next->ticket_id }}" target="_blank" class="btn btn-primary">Buy Tickets</a>
    @endif
</h3>
</div>
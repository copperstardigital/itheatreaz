@extends('layouts.home')

@section('title', 'Our Mission and Vision | Phoenix, AZ')
@section('meta', 'iTheatre Collaborative will produce distinctive theatre that cultivates the visceral, innervating and divergent experiences intrinsic to live performance.')

@section('content')
<div class="content">
    <div class="container">

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <?php $i = 0; ?>
                @foreach ($productions as $production)
                    @if ($i == 0)
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <img style="margin: 30px 0 10px 0" class="img-responsive" src="{{ url('images/history/' . $production->image1) }}" />
                            <p>{{ $production->caption1 }}</p>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <img style="margin: 30px 0 10px 0" class="img-responsive" src="{{ url('images/history/' . $production->image2) }}" />
                            <p>{{ $production->caption2 }}</p>
                        </div>
                    </div>


                    @endif
                    <?php $i++; ?>
                @endforeach
            </div>
            <div class="col-md-8">
                <h1>Programming History</h1>
                <h2>{{{ $production->season }}}</h2>
                <ul class="list-group">
                    @foreach ($productions as $production)
                    <li class="list-group-item"><strong>{{{ $production->title }}}</strong> by {{{ $production->playwright }}}, {{{ $production->premiere }}}</li>
                    @endforeach
                </ul>

                <p>*Unless otherwise noted, all performances at the Herberger Theater Center's Performance OutReach Theater.</p>

                <h3>View By Season</h3>

                <div class="btn-group" style="margin: 20px 0;">
                    <a class="btn btn-default {{ ($season == '2003-2004') ? 'active' : '' }}" href="/history/productions/2003-2004">2003-2004</a>
                    <a class="btn btn-default {{ ($season == '2004-2005') ? 'active' : '' }}" href="/history/productions/2004-2005">2004-2005</a>
                    <a class="btn btn-default {{ ($season == '2005-2006') ? 'active' : '' }}" href="/history/productions/2005-2006">2005-2006</a>
                    <a class="btn btn-default {{ ($season == '2006-2007') ? 'active' : '' }}" href="/history/productions/2006-2007">2006-2007</a>
                    <a class="btn btn-default {{ ($season == '2007-2008') ? 'active' : '' }}" href="/history/productions/2007-2008">2007-2008</a>
                    <a class="btn btn-default {{ ($season == '2008-2009') ? 'active' : '' }}" href="/history/productions/2008-2009">2008-2009</a>
                    <a class="btn btn-default {{ ($season == '2009-2010') ? 'active' : '' }}" href="/history/productions/2009-2010">2009-2010</a>
                    <a class="btn btn-default {{ ($season == '2010-2011') ? 'active' : '' }}" href="/history/productions/2010-2011">2010-2011</a>
                    <a class="btn btn-default {{ ($season == '2011-2012') ? 'active' : '' }}" href="/history/productions/2011-2012">2011-2012</a>
                    <a class="btn btn-default {{ ($season == '2012-2013') ? 'active' : '' }}" href="/history/productions/2012-2013">2012-2013</a>
                    <a class="btn btn-default {{ ($season == '2013-2014') ? 'active' : '' }}" href="/history/productions/2013-2014">2013-2014</a>
                    <a class="btn btn-default {{ ($season == '2014-2015') ? 'active' : '' }}" href="/history/productions/2014-2015">2014-2015</a>
                </div>
            </div>
        </div>

    </div>
@stop
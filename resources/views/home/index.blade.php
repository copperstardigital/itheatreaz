@extends('layouts/index')

@section('title', 'Behind the Herberger Theatre | Phoenix, AZ')
@section('meta', 'ITheatre Collaborative is located behind the Herberger Theatre, which is located at 222 E. Monroe St in Phoenix.  Enter from Van Buren Street')

@section('content')
<div class="news content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2>Director's Corner</h2>
                <p>Well, it’s July. It’s hot. And we’re waiting for the next haboob to hit. For us at iTheatre, we are hunkered down in the iTC Command Center planning Season #13. Yes, you read that right, our 13th Season. And what a dozy of a season.</p>

                 <p>First off, we scored “Grounded.” This play just closed at The Public starring Anne Hathaway, and rumors are that it may move to Broadway. But not before iTheatre has a crack at it. This play is a one-woman show about an Air Force fighter pilot who has a baby. When she returns from leave, she is grounded by the Air Force and stationed in a windowless trailer outside Las Vegas flying Predator drones in Iraq and Afghanistan. It is a harrowing examination of our country’s drone program and the real costs of war. I wish I could tell you who the one-woman is, but we have auditions on July 13th. So check back in a couple of weeks.</p>

                  <p>I was drawn to this show mostly because of the subject matter. Our drone program is drawing more and more attention and it is not all good. While the idea of a drone going into combat instead of a human, sounds like a good idea, there is still a human being "driving" that drone. And in war there is always a price to be paid. Also, this play is beautifully written (by George Brant) and is more poetry than prose.</p>

                  <p>Next up, for this spot will be the second show in our season. Currently it is “Port Authority,” but that might be changing. How’s that for a teaser?</p>

                  <p>&mdash; iTC Artistic Director Christopher Haines</p>
            </div>
            <div class="col-md-2 hidden-xs">
                <img src="{{ url('images/chair.png') }}" alt="Director's chair"/>
            </div>
            <!-- News -->
            <div class="col-md-4 col-xs-12">
                <h3>News</h3>
                @if (!empty($newsItems))
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



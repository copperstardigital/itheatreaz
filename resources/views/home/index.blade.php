@extends('layouts/index')

@section('title', 'Behind the Herberger Theatre | Phoenix, AZ')
@section('meta', 'ITheatre Collaborative is located behind the Herberger Theatre, which is located at 222 E. Monroe St in Phoenix.  Enter from Van Buren Street')

@section('content')
<div class="news content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2>Director's Corner</h2>
                <!--<p>Well, it’s July. It’s hot. And we’re waiting for the next haboob to hit. For us at iTheatre, we are hunkered down in the iTC Command Center planning Season #13. Yes, you read that right, our 13th Season. And what a dozy of a season.</p>

                 <p>First off, we scored “Grounded.” This play just closed at The Public starring Anne Hathaway, and rumors are that it may move to Broadway. But not before iTheatre has a crack at it. This play is a one-woman show about an Air Force fighter pilot who has a baby. When she returns from leave, she is grounded by the Air Force and stationed in a windowless trailer outside Las Vegas flying Predator drones in Iraq and Afghanistan. It is a harrowing examination of our country’s drone program and the real costs of war. I wish I could tell you who the one-woman is, but we have auditions on July 13th. So check back in a couple of weeks.</p>

                  <p>I was drawn to this show mostly because of the subject matter. Our drone program is drawing more and more attention and it is not all good. While the idea of a drone going into combat instead of a human, sounds like a good idea, there is still a human being "driving" that drone. And in war there is always a price to be paid. Also, this play is beautifully written (by George Brant) and is more poetry than prose.</p>

                  <p>Next up, for this spot will be the second show in our season. Currently it is “Port Authority,” but that might be changing. How’s that for a teaser?</p>-->

                <!--<p>Is it me or did July just whip past?</p>

                <p>August and we are rapidly approaching the opening show of our 13th season. That show, "Grounded," is already in rehearsal. Caitlin Newman is playing the Pilot in this one-woman show. Caitlin literally just moved to the Valley from New York. We hope you will welcome her to Phoenix by coming to see this gripping, contemporary play opening August 21st.</p>

                <p>Next up, in October, will be...well, I’m not sure. We have "Port Authority," a play I’ve wanted to do for some time. Or there is a play by one of the best Arab-American playwrights writing today and also an old friend and professor from my college days at Duke. His name is Yussef El Guindi. The play is "Hostages" which is about two Westerners taken hostage somewhere in the Middle East. It is a play about the mental trauma of being a hostage.</p>

                <p>Both are great plays. I thought since "Grounded" is about the mental aspects of our military drone program, "Hostages" would be nice companion piece. Yussef is very excited about our producing it (not surprising, since he wrote it), but I am waiting on word from his agent to finalize the agreement. Then, I’ll pull the plug on "Port Authority." Well, actually, I’ll probably put it back in my back pocket. Probably should do an entire season of those plays that are back there; my back pocket is getting pretty full.</p>-->

                <p>So…</p>

                <p>First of all, “Grounded.” What a ride! Thank you to everyone who came. Critical <em>and</em> popular success. Incredible! Thank you Caitlin Newman, the star of the show. Thank you for sharing your talent. (She will also be sharing her talents with us at Christmas. Shhhhh ... you didn’t hear that from me).</p>

                <p>Ok, now the bad news. For several years now we have received a general operating support grant from the City of Phoenix. This season we are not receiving that grant. Oh well. We could wring our collective hands and cry, “Poor us!” We’re not that kind of theater company. This is a business, after all. So, you lose a $5K grant (which, for us, is typically the budget for a show), we have to drop a show. Out of the five we were planning to produce this season, we decided that “Port Authority,” our next scheduled play, would be the one we are dropping from the season. I hope you hadn’t bought tickets yet. My apologies if you had (to make up for it, I’ll come cook you dinner).</p>

               <p>Now the good news. We are adding one more performance of the ever-popular Christmas Cabaret. Monday, December 14th at 8pm. It’s a little awkward on a Monday, but it is certainly better than a sharp, pointy stick in the eye. Oh, by the way, the title of the show is “That’s Christmas to Me.”</p>

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



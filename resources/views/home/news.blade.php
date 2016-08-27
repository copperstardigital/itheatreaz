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
                <div class="well">
                    <h2>Open Mic Night</h2>

                    <img class="img-responsive img-thumbnail" src="/images/open_mic_2016_2017.jpg" alt="Open Mic Night" />
                    <br /><br />

                    <p>Your talent is requested at our Open Mic from 4 pm-7 pm.

                    <p>The Downtown Phoenix Open Mic is a monthly event at the Kax Stage of the Herberger Theater Center.  Providing professional quality lighting and sound, the DPOM offers local performers of all types—musicians, comics, spoken word, actors, dancers, and more—an opportunity to practice their skills in front of a live audience and, if they wish, to make videos of those performances. This is a free event for participants and audience. The DPOM is also the impetus behind the Facebook group, Sharing in Phoenix, which tries to publicize all local cultural and artistic activities.</p>

                    <p>The open mic occurs on Sunday afternoons (4 pm-7 pm), usually on the fourth Sunday of the month. For additional information and to join the DPOM email, contact: <a href="mailto:KWeene1941@gmail.com">KWeene1941@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
@stop
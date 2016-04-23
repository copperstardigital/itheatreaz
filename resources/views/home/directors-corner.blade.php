@extends('layouts.home')

@section('title', 'Director\'s Corner | Phoenix, AZ')
@section('meta', 'Read Director\'s Corners by iTC Creative Director Chris Haines.')
@section('content')
    <div class="content">
        <div class="container" style="margin-top: 20px;">

            <div class="row">

                <div class="col-sm-3 col-md-3 col-lg-3">

                    <h3>Chris Haines</h3>

                    <img class="img-responsive" src="/images/chris.jpg" />

                    <h5>iTheatre Collaborative Creative Director</h5>

                </div>


                <div class="col-sm-9 col-md-9 col-lg-9">

                    <h1>Director's Corners</h1>

                    @if (count($corners))

                        @foreach ($corners as $corner)

                            <h2>{{ $corner->headline }}</h2>

                            {!! $corner->corner !!}

                            <hr />

                        @endforeach

                    @else

                        <p>There are no Director's Corners available.</p>

                    @endif

                </div>

            </div>

        </div>

    </div>

@stop
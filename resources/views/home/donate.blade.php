@extends('layouts.home')

@section('title', 'Donate to iTheatre Collaborative | Phoenix, AZ')
@section('meta', 'Donate to iTheatre Collaborartive to help us fulfill our mission in providing cutting-edge theatre.')
@section('content')
<div class="content">
    <div class="container">
        @foreach ($articles as $article)
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <img class="img-responsive" src="{{ url('images/' . $article->image) }}" />
            </div>
            <div class="col-md-8">
                <h1>{{ $article->headline }}</h1>
                {!! $article->article !!}

                <form>

                <input class="btn btn-primary" type="submit" onclick="window.open('https://secure.acceptiva.com/?cst=589ae0')" value="Donate Online"></input>

                </form>
            </div>
        </div>
        @endforeach
        <h2>Donors</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Collaborators ($5,000+)</h3>
                @forelse ($collaborators as $collaborator)
                    <p>{{ $collaborator->name }}</p>
                @empty
                    <p>There are no contributors at this level</p>
                @endforelse
                <h3>Sustainer ($1,000+)</h3>
                @forelse ($sustainers as $sustainer)
                    <p>{{ $sustainer->name }}</p>
                @empty
                    <p>There are no contributors at this level</p>
                @endforelse
                <h3>Partners ($500+)</h3>
                @forelse ($partners as $partner)
                    <p>{{ $partner->name }}</p>
                @empty
                    <p>There are no contributors at this level</p>
                @endforelse
                <h3>Contributors ($200+)</h3>
                @forelse ($contributors as $contributor)
                    <p>{{ $contributor->name }}</p>
                @empty
                    <p>There are no contributors at this level</p>
                @endforelse
            </div>
            <div class="col-md-4">
                <h3>Allies ($100+)</h3>
                @forelse ($allies as $ally)
                    <p>{{ $ally->name }}</p>
                @empty
                    <p>There are no contributors at this level</p>
                @endforelse
            </div>
            <div class="col-md-4">
                <h3>Supporters ($25+)</h3>
                @forelse ($supporters as $supporter)
                    <p>{{ $supporter->name }}</p>
                @empty
                    <p>There are no contributors at this level</p>
                @endforelse
            </div>
        </div>
    </div>
 @stop
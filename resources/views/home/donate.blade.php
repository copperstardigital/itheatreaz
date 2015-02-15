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
    </div>
 @stop
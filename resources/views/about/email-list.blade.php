@extends('layouts.home')

@section('title', 'Email List | Phoenix, AZ')
@section('meta', 'Join Our Email List to stay informed about iTheatre productions and events.')

@section('content')
<div class="content">
    <div class="container">
        @foreach ($articles as $article)
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <img class="img-responsive" src="{{ url('images/' . $article->image) }}" />
            </div>
            <div class="col-md-8">
                <h1>{{{ $article->headline }}}</h1>
                {{ str_replace('---', '', $article->article) }}
            </div>
        </div>
        @endforeach
    </div>
 @stop
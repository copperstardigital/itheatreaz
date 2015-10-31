@extends('layouts.home')

@section('title', 'Carousels')

@section('meta', 'See a selection of carousels of images of past seasons')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Season Carousels</h1>

                    {{ Storage::disk('s3')->get('https://s3.us-west-2.amazonaws.com/itheatreaz/images/carousel/2003-2004/61.jpg') }}
                </div>
            </div>
        </div>
    </div>
@stop
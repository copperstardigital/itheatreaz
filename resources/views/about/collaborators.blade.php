@extends('layouts.home')

@section('title', 'iTheatre Collaborators | Phoenix, AZ')
@section('meta', 'Our partners in providing cutting-edge theatre to the Phoenix Metro area')

@section('content')
    <div class="container">
        <h1>iTheatre Collaborators</h1>
        @foreach ($collaborators as $collaborator)
        <div class="row">
            <div class="col-md-12">
                <h2>{{{ $collaborator->collaborator }}}</h2>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-2">
                <img class="img-responsive" src="{{ url('images/collaborators/' . $collaborator->image) }}" />
            </div>
            <div class="col-md-5">
               <dl class="dl-horizontal">
                   @if (!empty($collaborator->contact))
                       <dt>Contact</dt>
                       <dd>{{{ $collaborator->contact }}}</dd>
                   @endif
                   @if (!empty($collaborator->location))
                       <dt>Location</dt>
                       <dd>{{{ $collaborator->location }}}</dd>
                   @endif
                   @if (!empty($collaborator->email))
                       <dt>Email Address</dt>
                       <dd><a href="mailto:{{ $collaborator->email }}">{{{ $collaborator->email}}}</a></dd>
                   @endif
                   @if (!empty($collaborator->phone))
                       <dt>Phone Number</dt>
                       <dd>{{{ $collaborator->phone }}}</dd>
                   @endif
                   @if (!empty($collaborator->website))
                       <dt>Website</dt>
                       <dd><a href="http://www.{{{ $collaborator->website }}}" target="_blank">{{{ $collaborator->website }}}</a></dd>
                   @endif
                   @if (!empty($collaborator->special_offer))
                       <dt>Special Offer</dt>
                       <dd>{{ $collaborator->special_offer }}</dd>
                   @endif
               </dl>
            </div>
            <div class="col-md-5">
                {!! $collaborator->description !!}
            </div>
        </div>
        @endforeach
    </div>
 @stop
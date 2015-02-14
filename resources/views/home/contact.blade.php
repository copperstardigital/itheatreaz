@extends('layouts.home')

@section('title', 'Contact Us | Phoenix, AZ')
@section('meta', 'Contact us for more information about iTheatre Collaborative.')

@section('content')
<div class="content">
    <div class="container">
        @foreach ($articles as $article)
        <div class="row" style="margin: 20px 0;">
            <div class="col-md-4">
                <img class="img-responsive" src="{{ url('images/' . $article->image) }}" />
            </div>
            <div class="col-md-8">
                <h1>{{{ $article->headline }}}</h1>
                {!! $article->article !!}

                {!! Form::open() !!}
                    {!! Form::textField('name', 'Name:', Input::old('name')) !!}

                    {!! $errors->first('name', '<p class="error">:message</p>') !!}

                    {!! Form::textField('email', 'Email Address:', Input::old('email')) !!}

                    {!! $errors->first('email', '<p class="error">:message</p>') !!}

                    {!! Form::textField('phone', 'Phone:', Input::old('phone')) !!}

                    {!! Form::textBox('comments', 'Comments/Question:', Input::old('comments')) !!}

                    {!! $errors->first('comments', '<p class="error">:message</p>') !!}

                    {!! Form::submitButton('Send Email', 'primary') !!}
                {!! Form::close() !!}
            </div>
        </div>
        @endforeach
    </div>
@stop
@extends('layouts.home')

@section('title', $season . ' Productions')

@section('meta', 'View a list of our ' . $season . ' productions, wiht links to more information about them.')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $season }} Season</h1>
            </div>
        </div>
        <?php $counter = 0; ?>
        <div class="row" style="margin: 20px 0;">
            <?php if (is_dir(public_path() . "/images/carousel/$season/")) : ?>
            <div class="col-sm-12 col-md-5 col-lg-5">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <?php $intCounter = 0; ?>
                    <!--<ol class="carousel-indicators">
                        <?php if ($strHandle = opendir(public_path() . "/images/carousel/$season/")) {
                            while (false !== ($strEntry = readdir($strHandle))) { ?>
                                <?php if ($strEntry != '.' && $strEntry != '..') : ?>
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $intCounter; ?>" class="active"></li>
                                <?php endif; ?>
                                <?php $intCounter++; ?>
                            <?php } ?>
                            <?php closedir($strHandle); ?>
                        <?php } ?>
                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        $intCounter = 0;

                        if ($strHandle = opendir(public_path() . "/images/carousel/$season/")) {
                            while (false !== ($strEntry = readdir($strHandle))) {
                                if ($strEntry != '.' && $strEntry != '..') : ?>
                                    <div class="item <?php echo ($intCounter == 2 ) ? 'active' : ''; ?>">
                                        <img src="/images/carousel/<?php echo $season; ?>/<?php echo $strEntry; ?>" alt="...">
                                        <!--<div class="carousel-caption">
                                            ...
                                        </div>-->
                                    </div>
                                <?php endif;
                                $intCounter++;
                            }
                            closedir($strHandle);
                        } ?>


                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                @foreach ($productions as $production)
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img class="img-responsive" src="{{ url('images/shows/' . $production->season . '/' . $production->show_image) }}" />
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h2 style="margin-top: 0">{{ $production->title }}</h1>
                            <h3>{{ $production->run }}</h2>
                        {!! substr($production->show_description, 0, 200) !!}
                        @if (strlen($production->show_description) > 200)
                        {{ '...' }}
                        @endif

                        <br/><a class="btn btn-primary pull-right" href="/productions/{{ $production->season }}/{{ $production->production_url }}">Details</a>
                    </div>
                </div>
            @endforeach

        </div>
            </div>
        </div>
@stop
@extends('layouts.home')

@section('title', 'Our Location | Phoenix, AZ')
@section('meta', 'iTheatre has resided in the Herberger\'s best kept secret. Our backstage blackbox theater is located on the Center\'s northside on Van Buren Street just west of 3rd Street. ')

@section('content')
<div class="content">
    <div class="container">
        <div class="row" style="margin-top:75px;">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div id="map" style="width: 100%; height: 600px;">
                    <!-- Map here -->
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                @foreach ($articles as $article)
                    <h1>{{{ $article->headline }}}</h1>
                    {!! $article->article !!}
                @endforeach
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBft2lKnOhFyZSzTwPROTMU49D2nsa6gyI&sensor=false">
    </script>
    <script type="text/javascript">
        $(function() {
            initialize();
        });
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(33.476396,-112.047792),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"),
                mapOptions);

            var itc = new google.maps.Marker({
                position: new google.maps.LatLng(33.451248,-112.070366),
                draggable: false,
                //title: "Lambda Phoenix Center"
                //icon: 'http://www.pozsocialphx.com/images/redribbon.png'
            });

            itc.setMap(map);

            var infowindow = new google.maps.InfoWindow();

            var itcInfo = {
                company: 'iTheatre Collaborative',
                address: '222 E. Monroe St.',
                city: 'Phoenix',
                state: 'AZ',
                zip: '85005',
                website: 'itheatreaz.org.org',
                image: 'itc-logo.png'
            }

            infowindow.setContent(infowindowContent(itcInfo));

            infowindow.open(map, itc);
        }

        function infowindowContent(info) {
            html  = '<h3><a href="http://www.' + info.website + '" target="_blank" rel="nofollow"><img src="http://www.itheatreaz.org/images/' + info.image + '" width="100"/></a></h3>';
            html += '<p style="margin-bottom:5px;">' + info.address + '</p>';
            html += '<p style="margin-bottom:5px;">' + info.city + ' ' + info.state + ' ' + info.zip + '</p>';

            return html;
        }
    </script>
@stop
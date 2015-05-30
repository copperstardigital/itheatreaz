</div></div></div></div>

<footer id="footer">
    <div id="collaborators-box">
            <h4>Collaborators<a href="/donate">Support iTheatre &raquo;</a></h4>
            <ul id="collaborators">
                <li><a id="aca" href="http://www.azarts.gov" target="_blank"></a></li>
                <li><a id="art-works" href="http://arts.gov" target="_blank"></a></li>
                <li><a id="phoenix" href="http://www.phoenix.gov" target="_blank"></a></li>
                <li><a id="arizona-center" href="http://www.arizonacenter.com" target="_blank"></a></li>
                <li><a id="scott-hummel" href="http://www.scotthummel.net" target="_blank"></a></li>
            </ul>
    </div>
    <div id="links">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <a href="/">Home</a> <span>&bull;</span>
                    <a href="/productions/2014-2015">Current Season</a> <span>&bull;</span>
                    <a href="/location">Location</a> <span>&bull;</span>
                    <a href="/about">About</a> <span>&bull;</span>
                    <a href="/news">News</a> <span>&bull;</span>
                    <a href="/contact">Contact</a><br/>
                    <span>&copy; {{ date('Y') }} iTheatre Collaborative &bull;
                    Website Design/Development by </span><a href="http://www.scotthummel.net" target="_blank">Scott Hummel Interactive</a>
                </div>
                <div class="col-lg-6 col-xs-6">
                    {!! Form::open(['url' => 'mailchimp']) !!}
                        <div class="row">
                            <div class="col-sm-5"><label class="email">Join the Email List:</label></div>
                            <div class="col-sm-5"><input type="text" class="form-control" placeholder="Email Address" name="email"></div>
                            <div class="col-sm-2"><button type="submit" class="btn btn-primary">Go</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</footer>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/modernizr.js') }}"></script>
<script src="{{ url('js/mobile-nav.js') }}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48869160-1', 'itheatreaz.org');
    ga('send', 'pageview');

</script>
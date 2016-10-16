<?php require_once('../incl/header.php'); ?>

<header class="imageheader crisisheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span>Crisis Committees</span></h1>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-lg-12">
                <h1 style="font-size: 32px;">CRISIS COMMITTEES WILL BE RELEASED ON MONDAY, OCTOBER 31<sup>ST</sup></h1>
                <div id="countdown">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$extra_bottom = <<<HERE
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.6/moment-timezone-with-data.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script>
$(function() {
    var release = moment.tz("2016-10-31 12:00", "America/Chicago");
    /*
    $("#countdown").countdown(release.toDate(), function(event) {
        $(this).text( event.strftime('%D days %H:%M:%S') );
    });*/
});
</script>
HERE;

require_once('../incl/footer.php');
?>

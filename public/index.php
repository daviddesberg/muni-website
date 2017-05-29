<?php require_once('../incl/header.php'); ?>

<style type="text/css">
    .count-down {
        margin: 0 0 0 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        text-align: center;
        height: 240px;
        height: auto;
    }
    .count-down li {
        margin: 0;
        padding: 0;
        list-style: none;
        font-size: 28px;
        display: inline-block;
        min-height: 250px;
    }
    .count-down li div {
        margin: 0 !important;
        padding: 0;
    }
    .count-down li input {
        font-family: 'Roboto', sans-serif !important;
        font-size: 88px!important;
        width: 154px!important;
        height: 98px!important;
        margin: 70px 0 0 -210px !important;
        font-weight: normal!important;
    }
    #days-title,
    #hours-title,
    #mins-title,
    #secs-title {
        display: block;
        text-transform: uppercase;
        margin-top: -94px;
        font-size: 24px;
        position: relative;
        z-index: 9 !important;
    }

    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        .count-down li input {
            margin-top: 60px !important;
        }
    }

    @media only screen and (max-width: 1280px) {
        .count-down li div,
        .count-down li canvas {
            width: 230px !important;
            height: 230px !important;
        }
        .count-down li input {
            margin: 36px 0 0 -193px !important;
        }
    }
</style>
<header class="imageheader mainheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span class="illinois-orange-text">Model United Nations</span> <small>at</small> <span class="illinois-blue-text">Illinois</span> <span class="illinois-blue-text">XXIII</span></h1>
            <hr>
            <h2>March 9th, 2018 - March 11th, 2018</h2>
        </div>
    </div>
</header>

<section id="letter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align: center;">
                <h1 style="font-size: 72px;" class="illinois-blue-text">COUNTDOWN TO <span class="illinois-orange-text">MUNI XXIII</span></h1>
            </div>
            <div class="col-lg-12">
                <section class="count-down-wrapper fade-down" style="margin-bottom: 0;">
                    <ul class="row count-down">
                        <li class="col-md-3 col-sm-6">
                            <input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
                            <span id="days-title">days</span>
                        </li>
                        <li class="col-md-3 col-sm-6">
                            <input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
                            <span id="hours-title">hours</span>
                        </li>
                        <li class="col-md-3 col-sm-6">
                            <input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
                            <span id="mins-title">minutes</span>
                        </li>
                        <li class="col-md-3 col-sm-6">
                            <input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
                            <span id="secs-title">seconds</span>
                        </li>
                    </ul>
                </section>
                <hr style="margin-top: 0; margin-bottom: 0;">
                <h1><span class="illinois-blue-text">Letter from the</span> <span class="illinois-orange-text">Secretary-General</span></h1>
                <h4>Monday, May 29, 2017</h4><br>
                <div>
                    <!--
                    <div class="pull-right" style="text-align:center; margin-left: 25px;">
                        <img style="height: 350px;" alt="Stuart J. Polen" src="assets/images/stuart.jpg"><br>
                    </div>-->

                    <p>
                    Prospective Advisors, Delegates, and Sponsors,
                    </p>
                    <p>
                        It is my honor to welcome you to the twenty-third session of Model United Nations at the University of Illinois at Urbana-Champaign (MUNI)! This upcoming academic year, MUNI will be held from Friday, March 9th through Sunday, March 11th on UIUC’s campus.
                    </p>

                    <p>
                        Currently, myself and the Secretariat are on a much needed Summer Break. We have many familiar faces returning to the Secretariat this year and some exciting new members as well. Be sure to check out each member’s bio under the Secretariat tab! I hope those of you who attended MUNI XXII this past March had as great of an experience as I did serving you all as the USG of Registration. Now, I am even more excited to serve you all as your Secretary-General.                    </p>
                    <p>
                        MUNI XXIII is poised to be the most professionally ran, intellectually challenging, and well rounded experience that a Secretariat here at the University of Illinois at Urbana-Champaign has ever had the honor to host. Currently, myself and the Secretariat are hard at work this summer to make sure that statement becomes a reality for all those who become involved with MUNI in any capacity from now through the conference. As the conference takes shape this summer, we will be updating the website and possibly be sending out a few emails to alert you to new changes. We have many exciting things planned for MUNI that are based off of our own ideas, the debrief of our staff, and of course, the feedback received from all of the wonderful advisors who attended MUNI XXII.                    </p>
                    <p>
                        I will be updating this letter again in mid to late August once the conference has taken shape a bit more. Be sure, however, to check back on the website in the coming weeks for new updates. We plan on getting a lot of the big picture work and registration policies done very soon so you can all prepare accordingly with ample time.
                    </p>
                    <p>
                        Finally, on behalf of the Secretariat of MUNI XXIII, thank you very much for considering to add MUNI to your plans for the upcoming academic year or to sponsor our conference. We all hope to work with you closely over the coming months so we can welcome you to the University of Illinois at Urbana-Champaign for the most rewarding MUNI experience yet! If you have any questions at all or wish to be put on our email list for updates, please do not hesitate to contact our USG of Registration, Daniel Benson, at <a href="mailto:registration@illinoismun.org">registration@illinoismun.org</a>.
                    </p>
                    <p>
                    Sincerely,<br>
                    John Hall<br>
                    Secretary General | MUNI XXIII
                    </p>

                    <?php /*
                    <p>
                    Prospective Advisors and Delegates,</p>

                    <p style="text-indent: 30px;">
                    Welcome to the twenty-second session of Model United Nations at the University of Illinois (MUNI XXII)! The conference will be held between <strong>March 10-12, 2017</strong> at the University of Illinois at Urbana-Champaign.
                    </p>

                    <p style="text-indent: 30px;">
                        We have been working diligently to ensure that you have the best experience on the Midwestern circuit. We are currently working on redesigning our website and streamlining our registration process. Our staff would like to thank you for being patient while we update our website. As committees are finalized and when registration opens on October 1, 2016, the website will be updated and new features will be introduced. Be sure to check regularly for updates.                    </p>

                    <p style="text-indent: 30px;">
                        On behalf of the Secretariat, I hope you consider adding MUNI XXII to your schedule. We take great pride in our conference and we hope to see you in March! If you have any questions about registering for MUNI XXII, please do not hesitate to contact our Undersecretary-General of Registration at registration@illinoismun.org.
                    </p>
                    */ ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
$extra_bottom = <<<'HERE'
    <script>
    // Offset for Main Navigation
    $(function() { $('#site-nav').affix({
        offset: {
            top: 100
        }
    }) });
    </script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.6/moment-timezone-with-data.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>

<script>
(function($) {
	$.fn.ccountdown = function(_yr, _m, _d, _t) {
		var $this = this;
		var _montharray = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")
		var _today = new Date();
		// calling function first time so that it wll setup remaining time
		var _changeTime = function() {
			var _today = new Date();
			var _todayy = _today.getYear();
			if (_todayy < 1000)
				_todayy += 1900;
			var _todaym = _today.getMonth();
			var _todayd = _today.getDate();
			var _todayh = _today.getHours();
			var _todaymin = _today.getMinutes();
			var _todaysec = _today.getSeconds();
			_todaysec = "0" + _todaysec;
			_todaysec = _todaysec.substr(_todaysec.length - 2);
			var _todaystring = _montharray[_todaym] + " " + _todayd + ", " + _todayy + " " + _todayh + ":" + _todaymin + ":" + _todaysec;
			var _futurestring = _montharray[_m - 1] + " " + _d + ", " + _yr + " " + _t;
			/* calculation of remaining days, hrs, min, and secs */
			_dd = Date.parse(_futurestring) - Date.parse(_todaystring);
			_dday = Math.floor(_dd / (60 * 60 * 1000 * 24) * 1);
			_dhour = Math.floor((_dd % (60 * 60 * 1000 * 24)) / (60 * 60 * 1000) * 1);
			_dmin = Math.floor(((_dd % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) / (60 * 1000) * 1);
			_dsec = Math.floor((((_dd % (60 * 60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) % (60 * 1000)) / 1000 * 1);
			var el = $($this);
			var $ss = el.find(".second"), $mm = el.find(".minute"), $hh = el.find(".hour"), $dd = el.find(".days");
			$ss.val(_dsec).trigger("change");
			$mm.val(_dmin).trigger("change");
			$hh.val(_dhour).trigger("change");
			$dd.val(_dday).trigger("change");
};
		_changeTime();
		setInterval(_changeTime, 1000);
	};
 
})(jQuery);

$(function() {
            $(".knob").knob({
                /*change : function (value) {
                    //console.log("change : " + value);
                },
                release : function (value) {
                    console.log("release : " + value);
                },
                cancel : function () {
                    console.log("cancel : " + this.value);
                },*/
                draw : function () {
                    // "tron" case
                    if(this.$.data('skin') == 'tron') {

                        var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = true;

                        this.g.lineWidth = this.lineWidth;

                        this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.value);
                            this.o.cursor
                                && (sa = ea + 0.3)
                                && (ea = ea - 0.3);
                            this.g.beginPath();
                            this.g.strokeStyle = this.previousColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                        return false;
                    }
                }
            });

            // Example of infinite knob, iPod click wheel
            var v, up=0,down=0,i=0
                ,$idir = $("div.idir")
                ,$ival = $("div.ival")
                ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
            $("input.infinite").knob(
                                {
                                min : 0
                                , max : 20
                                , stopper : false
                                , change : function () {
                                                if(v > this.cv){
                                                    if(up){
                                                        decr();
                                                        up=0;
                                                    }else{up=1;down=0;}
                                                } else {
                                                    if(v < this.cv){
                                                        if(down){
                                                            incr();
                                                            down=0;
                                                        }else{down=1;up=0;}
                                                    }
                                                }
                                                v = this.cv;
                                            }
                                });
        });
$(function() {
    var release = moment.tz("2016-10-31 12:00", "America/Chicago");
    $(".count-down").ccountdown(2018,3,9,'17:00');
    var cancel = false;
    $(".second").change(function() {
        if(cancel) { $(this).unbind(); return; }
    });
});
</script>
HERE;

require_once('../incl/footer.php');
?>

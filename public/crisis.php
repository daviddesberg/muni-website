<?php require_once('../incl/header.php'); ?>

<style type="text/css">
    .count-down {
        margin: 0 0 85px 0;
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

    @media only screen and (max-width: 1024px) {
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

                <section class="count-down-wrapper fade-down">
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
            </div>
        </div>
    </div>
</section>

<?php
$extra_bottom = <<<'HERE'
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
    $(".count-down").ccountdown(2016,10,31,'12:00');
});
</script>
HERE;

require_once('../incl/footer.php');
?>

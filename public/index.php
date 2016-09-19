<?php require_once('../incl/header.php'); ?>

<header class="imageheader mainheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span class="illinois-orange-text">Model United Nations</span> <small>at</small> <span class="illinois-blue-text">Illinois</span> <span class="illinois-blue-text">XXII</span></h1>
            <hr>
            <h2>March 10th, 2017 - March 12th, 2017</h2>
        </div>
    </div>
</header>

<section id="letter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1><span class="illinois-blue-text">Letter from the</span> <span class="illinois-orange-text">Secretary-General</span></h1>
                <h4>Sunday, September 18, 2016</h4><br>
                <div>
                    <div class="pull-right" style="text-align:center; margin-left: 25px;">
                        <img style="height: 350px;" alt="Stuart J. Polen" src="assets/images/stuart.jpg"><br>
                    </div>
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

                    Sincerely,<br>
                    Stuart J. Polen<br>
                    Secretary General MUNI XXII
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$extra_bottom = <<<HERE
    <script>
    // Offset for Main Navigation
    $(function() { $('#site-nav').affix({
        offset: {
            top: 100
        }
    }) });
    </script>
HERE;

require_once('../incl/footer.php');
?>

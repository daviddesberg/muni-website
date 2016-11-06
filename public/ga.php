<?php require_once('../incl/header.php'); ?>

<header class="imageheader committeeheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span>General Assembly Committees</span></h1>
        </div>
    </div>
</header>

<style>
    a.comlink {
        color: black !important;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="text-align: center;">
                <p>
                    <ul style="list-style-type: none; font-size: 48px;" class="headerfont">
                        <li><a class="comlink" href="gapage.php?c=disec">DISEC</a></li>
                        <li><a class="comlink" href="gapage.php?c=ecosoc">ECOSOC</a></li>
                        <li><a class="comlink" href="gapage.php?c=ecofin">ECOFIN</a></li>
                    </ul>
                </p>
            </div>
            <div class="col-lg-6" style="text-align: center;">
                <p>

                <ul style="list-style-type: none; font-size: 48px;" class="headerfont">
                    <li><a class="comlink" href="gapage.php?c=who">WHO</a></li>
                    <li><a class="comlink" href="gapage.php?c=unhrc">UNHRC</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once('../incl/footer.php'); ?>

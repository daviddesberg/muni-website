<?php require_once('../incl/header.php'); ?>

<header class="imageheader crisisheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span>Crisis Committees</span></h1>
        </div>
    </div>
</header>

<style>
    #crisislinks a {
        color: black !important;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: left;">
                <table id="crisislinks" class="table" style="font-size: 36px; width: 100%;">
                    <tr>
                        <td><a href="crisispage.php?c=baldwin">Kingdom of Heaven: The Court of Baldwin IV of Jerusalem</a></td>
                        <td><a href="crisispage.php?c=fifa">The Next Great City: The FIFA Executive Board Committee</a></td>
                    </tr>
                    <tr>
                        <td><a href="crisispage.php?c=iraqjcc">Destiny Awaits: Iraqi Government (JCC)</a></td>
                        <td><a href="crisispage.php?c=coalitionjcc">Responsibility to Protect: Coalition Forces (JCC)</a></td>
                    </tr>
                    <tr>
                        <td><a href="crisispage.php?c=nehru">Independence: Nehru&#39;s Cabinet of 1947</a></td>
                        <td><a href="adhoc.php"><em>Ad Hoc</em> Committee of the Secretary-General</a></td>
                    </tr>
                    <tr>
                        <td><a href="crisispage.php?c=roanoke">Island of Mystery: The Roanoke Colony</a></td>
                        <td><a href="crisispage.php?c=unsc">UNSC 2017: The World at Crossroads</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require_once('../incl/footer.php'); ?>
<?php
$cid = -1;
if(isset($_GET['c'])) {
    $cid = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['c']);
    if(strlen($cid) > 25) {
        die();
    }
} else {
    header('Location: crisis.php');
    die();
}
// so shitty
$data = file_get_contents("./committee_data/{$cid}.json");
$data = json_decode($data, true);

?>
<?php require_once('../incl/header.php'); ?>

<header class="imageheader crisisheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span><?php echo $data['title']; ?></span></h1>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align: left;">
                <h3>Description</h3>
                <p>
                    <?php echo $data['description']; ?>
                </p>
                <h3>Crisis Director: <?php echo $data['director']; ?></h3>
                <p>
                    <?php echo $data['bio']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once('../incl/footer.php'); ?>

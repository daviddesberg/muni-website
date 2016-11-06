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
$data = file_get_contents("./committee_data/crisis/{$cid}.json");
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
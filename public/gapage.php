<?php
$cid = -1;
if(isset($_GET['c'])) {
    $cid = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['c']);
    if(strlen($cid) > 25) {
        die();
    }
} else {
    header('Location: ga.php');
    die();
}
// so shitty
$data = file_get_contents("./committee_data/ga/{$cid}.json");
$data = json_decode($data, true);
$headerclass = "committeeheader";
if($cid == "ilga" || $cid == "1917duma") {
    $headerclass="crisisgaheader";
}
?>
<?php require_once('../incl/header.php'); ?>

<header class="imageheader <?=$headerclass?>">
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
                <h3>Director: <?php echo $data['director']; ?></h3>
                <h3>Topics</h3>
                <p>
                <?php
                foreach($data['topics'] as $i => $topic) {
                   echo "Topic " . ($i+1) . ": $topic<br>";
                }
                ?>
                </p>
                <h3>Description</h3>
                <p>
                    <?php echo $data['description']; ?>
                </p>
                <p>
                    <?php echo $data['bio']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once('../incl/footer.php'); ?>

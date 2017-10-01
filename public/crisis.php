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
                <p>
                This year the Department of Simulations is striving to be better than it ever has been before
                </p>
                <p>
                The crisis committees run by Department of Simulations has always been a branch of MUNI that has taken on many different rolls whether it be presenting modern topics or representing historical governments.  While all committees at MUNI strive to provide an education and entertaining experience when it comes to crisis committees an entirely different aspect rears its head.  Delegates are forced to quickly adapt to situations as they arise and use the resources that are available to them both as characters and as a body.  This year will be my third time serving in the Department of Simulations and as its leader I am striving to bring my own vision of what a crisis committee should be to life.   Committees this year will touch on both contemporary and historical topics that are regularly overlooked by most educational systems.  A main change that I have made in order to further the educational goals this year is that all background guides will be filled with extensive academic citations because it is my belief that the best MUN experiences come when committees are grounded in realism.  Lastly, by selecting the best and brightest directors that Illinois Model United Nations has to offer the crisis committees of MUNI XXIII are guaranteed to be both invigorating and academically stimulating
                </p>
                <p>
                I cannot wait till March to see my vison for the department become reality and I hope to see everyone who has read this letter there.
                </p>
                <p>Regards,</p>
                <p>Michael Lawlor</p>
                <p>Undersecretary-General of Simulations | MUNI XXIII</p>
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

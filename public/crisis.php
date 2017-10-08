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
<h1><span class="illinois-blue-text">Letter from the</span> <span class="illinois-orange-text">Under-Secretary-General of Simulations</span></h1>
                <p>
                This year the Department of Simulations is striving to be better than it ever has been before!
                The crisis committees run by Department of Simulations has always been a branch of MUNI that has taken on many different roles whether it be presenting modern topics or representing historical governments.  While all committees at MUNI strive to provide an educational and entertaining experience when it comes to crisis committees an entirely different aspect rears its head.  Delegates are forced to quickly adapt to situations as they arise and use the resources that are available to them both as characters and as a body.  This year will be my third time serving in the Department of Simulations and as its leader I am striving to bring my own vision of what a crisis committee should be to life.   Committees this year will touch on both contemporary and historical topics that are regularly overlooked by most educational systems.  A main change that I have made in order to further the educational goals this year is that all background guides will be filled with extensive academic citations because it is my belief that the best MUN experiences come when committees are grounded in realism.  In addition to my educational goals skill development has always been an integral part of the Department of Simulations.  In addition to the educational aspects skill development is also very important to not only me but also MUNI as a whole.  Delegates can expect to learn how to:
                <ul style="list-style-type:bullets">
                    <li>React swiftly and decisively to problems</li>
                    <li>Work within the confines of their setting</li>
                    <li>Utilize any and all resources at their disposal</li>
                    <li>Negotiate and compromise in situations where it may not seem possible at first</li>
                </ul>  
                Lastly, by selecting the best and brightest directors that Illinois Model United Nations has to offer the crisis committees of MUNI XXIII are guaranteed to be both invigorating and academically stimulating.
                While my vision for the department will be reflected in each committee the directors also have their own specific goals that they aim to accomplish which is articulated in their personal letters that can be seen under the “committees” tab.  I cannot wait till March to see my vision for the department become reality and I hope to see everyone who has read this letter there.  Feel free to contact me with any questions at simulations@illinoismun.org
                </p>
                <p>Regards,<br>
                Michael Lawlor<br>
                Under-Secretary-General of Simulations | MUNI XXIII</p>
<hr>
            <h2>Committees</h2>
		<ul style="list-style-type: square; font-size: 18px;">
		    <li>Ad-Hoc Committee of the Secretary-General</li>
            <li>Joint Crisis Committee: The Taiping Rebellion</li>
            <li>United Nations Security Council</li>
            <li>The Truman Cabinet</li>
            <li>Enron Board of Directors</li>
            <li>Victorian London: Metropolitan Board of Works</li>
            <li>The Münster Rebellion</li>
            <li>Feudal Japan</li>
        </ul>
            </div>
            <hr>


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

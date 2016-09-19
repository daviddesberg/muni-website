<?php
$displayError = false;
$displaySuccess = false;

if(isset($_POST['mail']) && $_POST['mail'] === 'mail') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    if(empty($email) || empty($name) || empty($message) ) {
        $displayError = true;
    } else {
        $displaySuccess = true;
        $body = "MUNI XXII Contact Form Submission\r\n" .
                "Sender name: $name\r\n" .
                "Sender email: $email\r\n" . $message
        ;
        mail("tech@illinoismun.org,registration@illinoismun.org", "MUNI XXII Contact Form Submission", $body, "From: tech@illinoismun.org\r\n");
    }
}
?>
<?php require_once('../incl/header.php'); ?>

<header class="imageheader contactheader">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="main-heading"><span >Contact</span></h1>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact</h1>
                <?php if($displaySuccess) { ?>
                    Thank you for your message. We will be in touch soon.
                <?php }  else {?>
                <h5>Send any inquiries below, and we'll get back to you as soon as possible.</h5>
                <?php if($displayError) { ?>
                    <h5 style="color:red;">All fields must be filled out.</h5>
                <?php } ?>
                <form class="form-horizontal" method="post" action="">
                    <input type="hidden" value="mail" name="mail">
                    <div class="form-group">
                        <label for="input-name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="input-name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="input-email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea placeholder="Message" class="form-control" id="input-message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php require_once('../incl/footer.php'); ?>

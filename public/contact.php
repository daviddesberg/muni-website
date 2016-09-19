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
                <h5>Send any inquiries below, and we'll get back to you as soon as possible.</h5>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="input-name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-name" placeholder="Name">
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
            </div>
        </div>
    </div>
</section>

<?php require_once('../incl/footer.php'); ?>

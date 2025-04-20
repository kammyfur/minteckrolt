<?php $_TITLE = "Kartik"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<div style="margin-top: 56px;z-index: 5;background: #fff;padding-top: 20px;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('https://raw.githubusercontent.com/Minteck-Projects/Kartik-Core/44210691ee8444509ac466a362337af77f2bcd49/views/menu.jpg');"></div>

    <div class="container">
        <h2><?= l("Kartik, a relaxing and easy car racing game", "Kartik, un jeu de course de voiture facile et calme") ?></h2>

    <p><a href="https://kartik.hopto.org" target="_blank">→ Kartik's official website</a></p>

        <h3>Download Kartik</h3>
        <div class="card-group">
            <div class="card">
                <div class="card-body" style="text-align: center;">
                    <?php

                    $stable = file_get_contents("https://kartik.hopto.org/latest.php?v=stable");

                    ?>
                    <h3><?= $stable ?></h3>
                    <h5>Latest Stable Release</h5>
                    <p>Downstream from the older development version</p>
                    <div class="btn-group">
                        <a href="https://kartik.hopto.org/cdn/release/stable/0/windows" class="btn btn-primary">Download for Windows</a>
                        <a href="https://kartik.hopto.org/cdn/release/stable/0/linux" class="btn btn-outline-primary">... Linux</a>
                        <a href="https://kartik.hopto.org/cdn/release/stable/0/darwin" class="btn btn-outline-primary">... macOS</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="text-align: center;">
                    <?php

                    $eap = file_get_contents("https://kartik.hopto.org/latest.php?v=eap");

                    ?>
                    <h3><?= $eap ?></h3>
                    <h5>Latest Development Release</h5>
                    <p><span class="text-warning">Experimental release, use with caution.</span></p>
                    <div class="btn-group">
                        <a href="https://kartik.hopto.org/cdn/release/eap/0/windows" class="btn btn-primary">Download for Windows</a>
                        <a href="https://kartik.hopto.org/cdn/release/eap/0/linux" class="btn btn-outline-primary">... Linux</a>
                        <a href="https://kartik.hopto.org/cdn/release/eap/0/darwin" class="btn btn-outline-primary">... macOS</a>
                    </div>
                </div>
            </div>
        </div>
        <small><a href="https://kartik.hopto.org" target="_blank">Thanks, I'd rather download from the official website.</a></small>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

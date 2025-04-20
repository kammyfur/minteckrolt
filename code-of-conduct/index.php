<?php $_TITLE = "Code of Conduct"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div style="z-index: 5;background: #fff;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/code-of-conduct.jpg');"></div>

    <div class="container">
        <?= l(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/code/en.html"), file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/code/fr.html")); ?>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

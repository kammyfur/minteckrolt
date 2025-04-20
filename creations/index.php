<?php $_TITLE = "Creations"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<div style="z-index: 5;background: #fff;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/dev.jpg');"></div>

    <div class="container">
        <?php $_ACTIVE = "dev"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/categories.php"; ?>
        <h2><?= l("Creations", "Mes projets") ?></h2>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/projects/list.php"; ?><br>
        <p><a href="/archive"><?= l("More software on the archive page", "Plus de logiciels sur la page d'archives") ?></a></p>
        <small><p class="text-muted"><?= l("Some project links may redirect to GitHub or YouTube, which are external websites with their own policies.", "Certains liens de projets peuvent rediriger vers GitHub ou YouTube, qui sont des sites externes avec leurs propres politiques."); ?></p></small>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

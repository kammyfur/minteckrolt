<?php $_TITLE = "Projects Archives"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<div style="z-index: 5;background: #fff;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/archive.jpg');"></div>

    <div class="container">
        <?php $_ACTIVE = "archive"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/categories.php"; ?>
        <h2><?= l("Projects Archives", "Archives des projets") ?></h2>
        <div class="alert alert-secondary">
            <strong>Note<?= l("", " ") ?>: </strong><?= l("You may find more archived projects on", "Vous pourriez trouver plus de vieux projets dans") ?> <a href="https://github.com/Minteck-Archives"><?= l("Minteck's GitHub archives", "les archives GitHub de Minteck") ?></a>.
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/archive/main.php"; ?>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

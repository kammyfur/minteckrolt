<?php $_TITLE = "Not Found"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<div style="margin-top: 56px;z-index: 5;background: #fff;padding-top: 20px;min-height: calc(100vh - 57px);" id="main-box">
    <div class="container" style="text-align: center;">
        <p class="display-1">404</p>
        <h1><?= l("Stop messing with that!", "Arrêtez de jouer avec ça !") ?></h1>
        <h4><?= l("We couldn't find the content you asked for, sorry...", "Nous ne parvenons pas à trouver le contenu demandé, désolé...") ?></h4>
        <a href="/" class="btn btn-outline-light"><?= l("Go back home", "Retourner à la page d'accueil") ?></a>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
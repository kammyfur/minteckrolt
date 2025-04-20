<?php $_TITLE = "Blog"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div style="z-index: 5;background: #fff;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/blog.jpg');"></div>

    <div class="container">
        <h2><?= l("All blog articles", "Tous les articles du blog") ?></h2>
        <div class="alert alert-secondary">
            <strong>Note<?= l("", " "); ?>:</strong> <?= l("If you want a more generally tech-centric blog that doesn't necessarily talk about me, you should check out", "Si vous voulez un blog plus centré sur la technologie qui ne parle pas nécessairement de moi, vous devriez regarder") ?> <a target="_blank" href="https://unchainedtech.minteck.ro.lt">UnchainedTech</a><?= l(", ", " (en anglais), ") ?><?= l("that is also available", "qui est aussi disponible") ?> <a href="http://blgchnxuwuxqwclt247g6d4sxun4w3cqohkwgtjmckb6nbzu2pfssvyd.onion/"><?=  l("here", "ici"); ?></a> <?= l("if you are using the Tor network.", "si vous utilisez le réseau Tor.") ?>
        </div>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/blog/list.php"; ?>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

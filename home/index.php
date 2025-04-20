<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<a rel="me" href="https://mastodon.online/@minteck" style="display:none;">Mastodon</a>

<div style="margin-top:48px;"></div>

<div style="color: white;z-index: 1;text-align: center;left: 0;right: 0;position: absolute;top: 132px;" id="intro">
    <div class="container">
        <!--suppress CssInvalidPropertyValue -->
        <p class="display-4" id="intro-title"
           style="line-height:81px;font-weight: bold;background: radial-gradient(100% 100% at 100% 0%,#6f4cde 0%,#41d6d6 100%);background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><?= l("Heyo, I'm Minteck!", "Coucou, moi c'est Minteck !") ?>
            ⭐</p>
        <p id="intro-tagline"><?= l("I'm a person who likes messing with technology.", "Je suis une personne qui aime aussi bidouiller l'informatique.") ?></p>
    </div>
</div>

<style>

    #intro {
        position: initial !important;
        margin: 0 !important;
        color: white !important;
        background: #222;
        margin-top: -6px !important;
        padding-top: 18px !important;
    }

    #intro-tagline {
        margin-bottom: 0 !important;
        padding-bottom: 26px !important;
    }

    #intro-title {
        background-image: radial-gradient(100% 100% at 100% 0%, #fff 0%, #fff 100%) !important;
    }

</style>

<div style="background:white;padding-top:20px;z-index:5;" id="main-box">
    <div class="container">
        <div class="alert alert-success">
            <strong>Help shape the future of my website!</strong> Access <a href="https://staging.minteck.org">staging.minteck.org</a>
            to try out a new experience, and send your feedback to <a href="mailto:contact@minteck.org">contact@minteck.org</a>
        </div>
        <?php if (isset($_GET['admin'])): ?>
            <div class="alert alert-danger">
                <?= l("Your Minteck Hub account doesn't have access to the Cloud Admin Console. <a href='/contact'>Contact Minteck</a> if you think this is an error.", "Votre compte Minteck Hub n'a pas accès à Cloud Admin Console. <a href='/contact'>Contactez Minteck</a> si vous pensez qu'il s'agit d'une erreur.") ?>
            </div>
        <?php endif; ?>

        <div class="card-group">
            <div class="card <?= isset($_ACTIVE) && ($_ACTIVE === "dev" || $_ACTIVE === "video") ? "bg-dark text-white" : "" ?>"
                 style="text-align:center;padding-top:20px;padding-bottom:10px;">
                <div style="text-align:center;margin-left:auto;margin-right:auto;" class="card-img-top">
                    <img src="/static/icons/code<?= !isset($_ACTIVE) || ($_ACTIVE !== "dev" && $_ACTIVE !== "video") ? "" : "-dark" ?>.png"
                         alt="Card image"
                         style="width:64px;height:64px;text-align:center;margin-left:auto;margin-right:auto;">
                    <img src="/static/icons/media<?= !isset($_ACTIVE) || ($_ACTIVE !== "dev" && $_ACTIVE !== "video") ? "" : "-dark" ?>.png"
                         alt="Card image" style="width:64px;height:64px;">
                </div>
                <div class="card-body">
                    <h3><?= l("Projects", "Projets") ?></h3>
                    <p><?= l("Developing software and making multimedia stuff is my passion", "Mon passe-temps est de coder des logiciels et de créer du contenu multimedia") ?></p>

                    <a href="/creations" class="card-link"><?= l("Learn more...", "En savoir plus...") ?></a>
                </div>
            </div>
            <div class="card <?= isset($_ACTIVE) && $_ACTIVE === "archive" ? "bg-dark text-white" : "" ?>"
                 style="text-align:center;padding-top:20px;padding-bottom:10px;">
                <img class="card-img-top"
                     src="/static/icons/archive<?= !isset($_ACTIVE) || $_ACTIVE !== "archive" ? "" : "-dark" ?>.png"
                     alt="Card image"
                     style="width:64px;height:64px;text-align:center;margin-left:auto;margin-right:auto;">
                <div class="card-body">
                    <h3>Archives</h3>
                    <p><?= l("I give everyone the possibility to enjoy all my projects, from past to the future", "Je donne à tout le monde la possibilité d'apprécier mes projets, du passé au futur") ?></p>

                    <a href="/archive" class="card-link"><?= l("Learn more...", "En savoir plus...") ?></a>
                </div>
            </div>
        </div>
        <hr>

        <h2 style="margin-top:25px;"><?= l("100% Serious Projects", "Projets 100% sérieux") ?></h2>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/projects/home.php"; ?>
    </div>

    <div class="container">
        <?php $_ftww_SiteName = "https://minteck.ro.lt";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/webring/FtechWebring.php"; ?>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

<div class="card-group">
    <div class="card <?= isset($_ACTIVE) && ($_ACTIVE === "dev" || $_ACTIVE === "video") ? "bg-dark text-white" : "" ?>"
         style="text-align:center;padding-top:20px;padding-bottom:10px;">
        <div style="text-align:center;margin-left:auto;margin-right:auto;" class="card-img-top">
            <img src="/static/icons/code<?= !isset($_ACTIVE) || ($_ACTIVE !== "dev" && $_ACTIVE !== "video") ? "" : "-dark" ?>.png"
                 alt="Card image" style="width:64px;height:64px;text-align:center;margin-left:auto;margin-right:auto;">
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
             alt="Card image" style="width:64px;height:64px;text-align:center;margin-left:auto;margin-right:auto;">
        <div class="card-body">
            <h3>Archives</h3>
            <p><?= l("I give everyone the possibility to enjoy all my projects, from past to the future", "Je donne à tout le monde la possibilité d'apprécier mes projets, du passé au futur") ?></p>

            <a href="/archive" class="card-link"><?= l("Learn more...", "En savoir plus...") ?></a>
        </div>
    </div>
</div>
<hr>
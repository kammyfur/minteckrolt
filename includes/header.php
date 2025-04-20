<?php

if (explode(":", $_SERVER['HTTP_HOST'])[0] !== "legacy.minteck.org") {
    header("Location: https://legacy.minteck.org" . $_SERVER['REQUEST_URI']);
    die();
}
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? "en", 0, 2);

function l($en, $fr = null)
{
    global $lang;

    if ((($lang === "fr" && isset($fr)) || (isset($_GET['fr']) && isset($fr) || isset($_COOKIE['fr']))) && !isset($_GET['en']) && !isset($_COOKIE['en']) && isset($fr)) {
        setlocale(LC_TIME, array('fr_FR.UTF-8', 'fr_FR@euro', 'fr_FR', 'french'));
        return $fr;
    } else {
        return $en;
    }
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/telemetry.php";

function credit(string $name, string $description, string $image, bool $backwards)
{
    if ($backwards) {
        return "<div class='artwork-credits-box--back'><div><h3>{$name}</h3>{$description}</div></div><img class='artwork-credits-image--back' src='{$image}' alt='{$name}'>";
    } else {
        return "<img class='artwork-credits-image' src='{$image}' alt='{$name}'><div class='artwork-credits-box'><div><h3>{$name}</h3>{$description}</div></div>";
    }
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/markdown.php";
$Parsedown = new Parsedown();

?>
<!DOCTYPE html>
<html lang="<?= $lang === "fr" ? "fr" : "en" ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>

        if (location.hash.startsWith("#/") && location.pathname === "/legal/") {
            location.href = "https://staging.minteck.org" + location.pathname + location.hash;
        }

    </script>
    <link rel="icon" href="/logo.svg">
    <link href="/static/css/darktheme.css" rel="stylesheet">
    <link href="/static/css/fonts" rel="stylesheet">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php

        if (isset($_TITLE)) {
            echo($_TITLE . " — ");
        }

        ?><?= l("Minteck's space", "L'espace de Minteck") ?></title>
</head>
<body style="background-size: cover;background-position: center;background-repeat: no-repeat;background-attachment: fixed;">
<!--<div style="height:16px;background:orange;position:fixed;color:black;font-size:12px;font-weight:bold;text-align:center;z-index:999;top:0;left:0;right:0;">Private beta of Minteck's space. Please report all bugs, issues or design details at <a href="mailto:nekostarfan@gmail.com">nekostarfan@gmail.com</a> or <a href="https://account.minteck.org/youtrack/issues/MSS" target="_blank">on Minteck's YouTrack instance</a></div>-->
<nav style="z-index:99;" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/logo.svg" alt="" width="36px"> <span
                    style="vertical-align: middle;"><?= l("Minteck's space", "L'espace de Minteck") ?></span></a>
        <button class="navbar-toggler" style="filter:invert(1);" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/"><?= l("Home", "Accueil") ?></a></li>
                <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <?= l("Creations", "Mes créations") ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/creations"><?= l("My Projects", "Mes projets") ?></a></li>
                        <li><a class="dropdown-item"
                               href="/archive"><?= l("Software Archive", "Archive des logiciels") ?></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/about"><?= l("About me", "À propos de moi") ?></a></li>
                <li class="nav-item"><a class="nav-link" href="/contact"><?= l("Contact me", "Me contacter") ?></a></li>
            </ul>

            <div class="dropdown">
                <button id="apps_outer" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/static/apps.svg"); ?></button>
                <ul class="dropdown-menu" style="position:fixed;top:48px;left:initial;right:10px;"
                    aria-labelledby="apps_outer">
                    <li><a href="https://github.com/Minteck" class="dropdown-item"><img alt=""
                                                                                        src="/static/apps/github.png"
                                                                                        class="app-icon"> <span
                                    class="app-title">GitHub</span></a></li>
                    <li><a href="https://kartik.hopto.org/online" class="dropdown-item"><img alt=""
                                                                                             src="/static/apps/kartik.png"
                                                                                             class="app-icon"> <span
                                    class="app-title">Kartik Online</span></a></li>
                    <li><a href="/" class="dropdown-item"><span class="app-title"><img alt="" src="/logo.svg"
                                                                                       class="app-icon"> Minteck's Space</span></a>
                    </li>
                    <li><a href="https://unchainedtech.minteck.ro.lt" class="dropdown-item"><span class="app-title"><img
                                        alt="" src="/static/apps/unchainedtech.png"
                                        class="app-icon"> UnchainedTech</span></a></li>
                    <li><a href="https://jetbrains.minteck.ro.lt/hub" class="dropdown-item"><img alt=""
                                                                                                 src="/static/apps/hub.svg"
                                                                                                 class="app-icon"> <span
                                    class="app-title">Minteck's Hub</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php

if (!isset($_GET['i'])) {
    header("Location: /blog");
    die();
}
if (strpos($_GET['i'], "/") !== false && strpos($_GET['i'], ".") !== false && strpos($_GET['i'], "\\") !== false) {
    header("Location: /blog");
    die();
}
if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json") || !file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json.md")) {
    header("Location: /blog");
    die();
}

$data = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json"), true);
$article = $_GET['i'];
$_TITLE = $data["title"];
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";

?>
<div style="margin-top: 56px;z-index: 5;background: #fff;padding-top: 20px;min-height: calc(100vh - 57px);" id="main-box">
    <div class="container">
        <h2><?= l($data["title"], $data["title.fr"] ?? $data["title"]) ?></h2>
        <h6 class="text-muted"><?= l("Published", "Publié") ?> <?= strftime(l("%a %b %e, %Y", "%a %e %b %Y"), (int)DateTime::createFromFormat('Y-m-d', explode("@", $article)[0])->format("U")); ?></h6>

        <hr>
        <div>
            <?= /** @var mixed $Parsedown */ $Parsedown->text(l(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json.md"), file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json.fr.md") ? file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json.fr.md") : file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $_GET['i'] . ".json.md"))) ?>
        </div>

        <hr>
        <p><a href="/blog"><?= l("All blog articles", "Tous les articles de blog") ?></a></p>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

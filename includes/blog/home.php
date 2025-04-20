<div class="card-group">
    <?php

    $articles = scandir($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data");
    $i = 1;
    $articles = array_reverse($articles);
    foreach ($articles as $article):

    ?>
    <?php if ($i <= 3 && strpos($article, "@") !== false && strpos($article, ".html") === false && file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . substr($article, 0, -5) . ".json.md")): ?>
    <?php
        $data = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $article), true);
        if (l("a", "b") === "b" && file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $article . ".fr.md")) {
            $data['html'] = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $article . ".fr.md");
        } else {
            $data['html'] = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $article . ".md");
        }

        /** @var mixed $Parsedown */
        $data['html'] = $Parsedown->text($data['html']);
    ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= l($data["title"], $data["title.fr"] ?? $data["title"]) ?></h5>
            <p class="card-text"><?= strlen(strip_tags($data["html"])) > 150 ? substr(strip_tags($data["html"]), 0, 150) . "..." : strip_tags($data["html"]) ?></p>
            <p class="card-text"><small class="text-muted"><?= l("Published", "Publié") ?> <?= strftime(l("%a %b %e, %Y", "%a %e %b %Y"), (int)DateTime::createFromFormat('Y-m-d', explode("@", $article)[0])->format("U")); ?></small></p>
            <a href="/blog/article-<?= explode(".", $article)[0] ?>" class="card-link"><?= l("Read more...", "Lire plus...") ?></a>
        </div>
    </div>
    <?php $i++;endif; ?>
    <?php endforeach; ?>
</div>
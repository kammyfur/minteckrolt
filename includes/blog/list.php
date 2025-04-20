<div class="list-group">
    <?php

    $articles = scandir($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data");
    $i = 1;
    $articles = array_reverse($articles);
    foreach ($articles as $article):

    ?>
    <?php if (strpos($article, "@") !== false && strpos($article, ".html") === false && file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . substr($article, 0, -5) . ".json.md")): ?>
    <?php $data = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/blog/data/" . $article), true); ?>
        <a href="/blog/article-<?= explode(".", $article)[0] ?>" class="list-group-item list-group-item-action"><span class="text-muted"><?= strftime(l("%a %b %e, %Y", "%a %e %b %Y"), (int)DateTime::createFromFormat('Y-m-d', explode("@", $article)[0])->format("U")); ?></span> · <?= l($data["title"], $data["title.fr"] ?? $data["title"]) ?></a>
    <?php endif;$i++; ?>
    <?php endforeach; ?>
</div>
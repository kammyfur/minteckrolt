<div class="list-group">
    <?php

    $articles = scandir($_SERVER['DOCUMENT_ROOT'] . "/creations/video");
    $i = 1;
    foreach ($articles as $article):

    ?>
    <?php if (trim($article) !== "." && trim($article) !== ".." && is_dir($_SERVER['DOCUMENT_ROOT'] . "/creations/video/" . $article)): ?>
        <a href="/creations/video/<?= $article ?>" class="list-group-item list-group-item-action"><?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/creations/video/" . $article . "/title.txt") ?></a>
    <?php endif;$i++; ?>
    <?php endforeach; ?>
</div>
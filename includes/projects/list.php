<div class="list-group">
    <?php

    $articles = scandir($_SERVER['DOCUMENT_ROOT'] . "/creations");
    $i = 1;
    foreach ($articles as $article):

    ?>
    <?php if (trim($article) !== "." && trim($article) !== ".." && trim($article) !== "dev" && trim($article) !== "video" && is_dir($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article)): ?>
        <a href="/creations/<?= $article ?>" class="list-group-item list-group-item-action"><img src="<?= trim(file_exists($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/icon.txt") ? file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/icon.txt") : "/static/genericProjectIcon.png") ?>" width="24px" alt="">&nbsp;<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/title.txt") ?><span class="text-muted"> · <?= l(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/description.txt"), file_exists($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/description.fr.txt") ? file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/description.fr.txt") : file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/creations/" . $article . "/description.txt")) ?></span></a>
    <?php endif;$i++; ?>
    <?php endforeach; ?>
</div>
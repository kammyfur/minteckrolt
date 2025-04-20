<p><?= l("Download the old of the oldest software I made", "Téléchargez les plus vieux des vieux logiciels que j'ai créé") ?>. <?= l("Some of this software is", "Certains de ces logiciels sont") ?> <u><?= l("proprietary", "propriétaires") ?></u> <?= l("and you can't change or distribute it without my consent", "et vous ne pouvez pas les modifier ou les distribuer sans mon accord") ?>. <?= l("Active projects are not listed here and can be downloaded from their respective page", "Les projets en cours de développement ne sont pas listés ici et peuvent être téléchargés sur leur page respective") ?>.</p>

<div class="list-group">
    <?php

    $pfiles = scandir($_SERVER['DOCUMENT_ROOT'] . "/archive/get");
    $files = [];

    foreach ($pfiles as $file) {
        if ($file !== "." && $file !== ".." && substr($file, -5) === ".json") {
            $files[$file] = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/archive/get/" . $file), true);

            $parts = explode("/", $files[$file]["date"]);
            $files[$file]["rawdate"] = $parts[1] . "-" . $parts[0];
            $files[$file]["id"] = $file;
        }
    }

    usort($files, function($a, $b) {
        return strtoupper($a['rawdate']) <=> strtoupper($b['rawdate']);
    });

    foreach ($files as $data) {
        $file = $data["id"];

        if (substr($file, -5) === ".json" && file_exists($_SERVER['DOCUMENT_ROOT'] . "/archive/get/" . substr($file, 0, -5) . ".zip")) {
            echo('<a href="/archive/get/'.substr($file, 0, -5).'.zip" class="list-group-item list-group-item-action"><img src="'.(trim(file_exists($_SERVER['DOCUMENT_ROOT'] . "/static/archives/" . substr($file, 0, -5) . ".png") ? "/static/archives/" . substr($file, 0, -5) . ".png" : "/static/genericProjectIcon.png")).'" alt="" width="24px"> '.$data['title'] . ' ');
            if (isset($data["description"])) {
                echo('<span class="text-muted"> · ' . l($data["description"]["en"], $data["description"]["fr"]) . '</span>');
            }
            echo('<span class="badge bg-secondary rounded-pill" style="float:right;">'.$data['date'].'</span>');
            if ($data['unreleased']) {
                echo(' <span class="badge bg-warning">' . l("Unreleased", "Jamais sorti") . '</span>');
            }
            echo('</a>');
        }
    }

    ?>
</div>
<br>
<small><p class="text-muted"><?= l("Project start dates are estimated and cannot always be accurate", "Les dates de début des projets sont des estimations et ne peuvent pas être toujours précises") ?></p></small>
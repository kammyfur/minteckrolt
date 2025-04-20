<?php

header("Content-Type: application/json");

if (isset($_GET['t'])) {
    if ($_GET['t'] === "en") {
        $target = "en";
    } else {
        $target = "mt";
    }
} else {
    die();
}

if (isset($_GET['u'])) {
    $text = $_GET['u'];

    if (strlen($text) > 500) {
        die();
    }

    $text = str_replace("\"", "''", $text);
} else {
    die();
}

$raw = json_decode(exec("cd /mnt/metranslator-api && node index.js api {$target} \"{$text}\""), true);
$last = exec("cd /mnt/metranslator-api && git log -1 --pretty=format:'%an'");
$raw["system"]["version"] = $raw["system"]["version"] . "-" . substr(file_get_contents("/mnt/metranslator-api/.git/refs/heads/trunk"), 0, 8);
$raw["system"]["last_author"] = $last;
$raw["call"] = "cd /mnt/metranslator-api && node index.js api {$target} \"{$text}\"";

die(json_encode($raw));
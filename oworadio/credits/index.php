<?php

exec("mpc -p 6601 current", $song);
$db = json_decode(file_get_contents("/mnt/oworadio-backend/downloader/metadata/stats.json"), true);
$id = explode(".", $song[0])[0];

foreach ($db as $iid => $item) {
    if ($item["id"] === $id) {
        $cid = $iid;
    }
}

if (isset($db[$cid]["title"]) && trim($db[$cid]["title"]) !== "") {
    echo(implode(", ", $db[$cid]["artists"]) . " · " . $db[$cid]["title"]);
} else {
    echo("Unknown Song");
}
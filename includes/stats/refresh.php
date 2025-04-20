<?php

require_once "./apis.php";
$api = new API();
$data = [
    "github" => []
];

// ------------------------------------
// GitHub

$events = json_decode($api->GitHub("users/Minteck/events"), true);
$last = null;

foreach ($events as $event) {
    if ($event["type"] === "PushEvent") {
        $last = $event;
        break;
    }
}

$data["github"]["project"] = $last["repo"]["name"];
$data["github"]["sha"] = substr($last["payload"]["commits"][0]["sha"], 0, 7);
$data["github"]["message"] = $last["payload"]["commits"][0]["message"];

// ------------------------------------
// Reddit
$posts = json_decode($api->Reddit("user/Minteck"), true)["data"]["children"];
$last = null;

foreach ($posts as $post) {
    if (!$post["pinned"]) {
        $last = $post["data"];
        break;
    }
}

$data["reddit"]["sub"] = $last["subreddit"];
$data["reddit"]["title"] = $last["title"];
$data["reddit"]["score"] = $last["score"];

// ------------------------------------
// Neutron Releases
$neutron = json_decode($api->GitHub("repos/Minteck/Neutron/releases"), true);
file_put_contents("./neutron.json", json_encode($neutron, JSON_PRETTY_PRINT));
$neutron = json_decode($api->GitHub("repos/Minteck/Neutron/tags"), true);
file_put_contents("./neutron2.json", json_encode($neutron, JSON_PRETTY_PRINT));

// ------------------------------------
// Dump

file_put_contents("./stats.json", json_encode($data, JSON_PRETTY_PRINT));

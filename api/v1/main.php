<?php

$version = explode("/", $_SERVER['SCRIPT_NAME'])[2];

function init(bool $argEnabled = false) {
    global $obj;
    global $version;
    header("Content-Type: application/json");

    $obj = [];
    $obj["version"] = [
        "release" => $version,
        "point" => json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/api/{$version}/version.json"), true)["version"],
    ];
    $obj["warnings"] = [];

    if (json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/api/{$version}/version.json"), true)["status"] === "beta") {
        $obj["warnings"][] = "This API is unstable, and may change at any time without warning. Do not use this version in a production environment.";
    } else if (json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/api/{$version}/version.json"), true)["status"] === "deprecated") {
        $obj["warnings"][] = "This API is deprecated, has been superseeded by a newer version and can stop working at any time. Do not use this version in a production environment.";
    }

    $obj["error"] = null;
    $obj["data"] = null;
    $obj["request"] = [];
    $obj["request"]["address"] = $_SERVER['REMOTE_ADDR'];
    $obj["request"]["port"] = $_SERVER['REMOTE_PORT'];
    $obj["request"]["parameter"] = null;

    if ($argEnabled && (!isset($_GET['_']) || is_null($_GET['_']) || trim($_GET['_']) === "")) {
        error("Parameter missing or invalid");
    } else {
        $obj["request"]["parameter"] = $_GET['_'];
    }
}

function error(string $code) {
    global $obj;

    $obj["error"] = $code;
    header("HTTP/1.1 500 Internal Server Error");
    die(json_encode($obj));
}

function success() {
    global $obj;
    die(json_encode($obj));
}
<?php

header("Content-Type: text/plain");

if (isset($_GET['_'])) {
    setcookie("_session", $_GET['_']);
    header("Location: /mwspub");
    die();
} else {
    if (!isset($_COOKIE['_session'])) {
        header("Location: https://minteck.org");
        die();
    }
}

if (!isset($_COOKIE["mws_public_token"])) {
    header("Location: https://account.minteck.org/hub/hub/api/rest/oauth2/auth?client_id=f0972ed6-9b0b-4a56-b710-7bbf5e261785&response_type=code&redirect_uri=https://minteck.org/mwspub/callback&scope=hub&request_credentials=default&access_type=offline");
    die();
} else if (ctype_xdigit($_COOKIE["mws_public_token"]) && file_exists($_SERVER['DOCUMENT_ROOT'] . "/mwspub/private/tokens/" . $_COOKIE['mws_public_token'])) {
    $_DATA = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/mwspub/private/tokens/" . $_COOKIE['mws_public_token']), true);
} else {
    header("Location: https://account.minteck.org/hub/hub/api/rest/oauth2/auth?client_id=f0972ed6-9b0b-4a56-b710-7bbf5e261785&response_type=code&redirect_uri=https://minteck.org/mwspub/callback&scope=hub&request_credentials=default&access_type=offline");
    die();
}

if (isset($_COOKIE['_session'])) {
    if (strlen($_COOKIE['_session']) === 96 && !preg_match('/[^a-f_\-0-9]/i', $_COOKIE['_session'])) {
        if (file_exists("/mnt/public/temp/" . $_COOKIE['_session'])) {
            if (file_get_contents("/mnt/public/temp/" . $_COOKIE["_session"]) !== "==WAITING==") {
                die("Unable to login: this token has already been used");
            } else {
                file_put_contents("/mnt/public/temp/" . $_COOKIE['_session'], file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/mwspub/private/tokens/" . $_COOKIE['mws_public_token']));
                die("Log in successful, you may now close this browser window/tab and return to your terminal window.");
            }
        } else {
            die("Unable to login: this token does not exist");
        }
    } else {
        die("Unable to login: this token is invalid");
    }
}
<?php

// TODO: handle errors

if (!isset($_GET['code'])) {
    die();
}

$appdata = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/mwspub/private/app.json"), true);

$crl = curl_init('https://account.minteck.org/hub/hub/api/rest/oauth2/token');
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLINFO_HEADER_OUT, true);
curl_setopt($crl, CURLOPT_POST, true);
curl_setopt($crl, CURLOPT_HTTPHEADER, [
    "Authorization: Basic " . base64_encode($appdata["id"] . ":" . $appdata["secret"]),
    "Content-Type: application/x-www-form-urlencoded",
    "Accept: application/json"
]);
curl_setopt($crl, CURLOPT_POSTFIELDS, "grant_type=authorization_code&redirect_uri=" . urlencode("https://minteck.org/mwspub/callback") . "&code=" . $_GET['code']);

$result = curl_exec($crl);
$result = json_decode($result, true);

curl_close($crl);

if (isset($result["access_token"])) {
    $crl = curl_init('https://account.minteck.org/hub/hub/api/rest/users/me');
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($crl, CURLINFO_HEADER_OUT, true);
    curl_setopt($crl, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . $result["access_token"],
        "Accept: application/json"
    ]);

    $result = curl_exec($crl);
    $result = json_decode($result, true);

    $token = bin2hex(random_bytes(32));
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/mwspub/private/tokens/" . $token, json_encode($result));
    setcookie("mws_public_token", $token, strtotime('+365 days'), "/mwspub", "", true, true);

    header("Location: /mwspub");
}
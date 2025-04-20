<?php

$m3u = "https://minteck.ro.lt/oworadio/source/\n";

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers
header('Content-Type: application/pdf');

header('Content-Disposition: attachment; filename="oworadio.m3u";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . strlen($m3u));

die($m3u);
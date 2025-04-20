<?php

header("Content-Type: text/css");

/*
 * @font-face {
    src: url("/static/fonts/Jost-Black.ttf");
    font-family: "Jost";
    font-style: normal;
    font-weight: 900;
}
 */

function css($name, $weight, $weightId, $style) {
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/static/fonts/{$name}-{$weight}.ttf")) {
        return "\n@font-face {\n    src: url(\"/static/fonts/{$name}-{$weight}.ttf\");\n    font-family: \"{$name}\";\n    font-style: {$style};\n    font-weight: {$weightId};\n}\n";
    }
}

function font(string $name) {
    $txt = "";

    // 100 - Thin
    $txt .= css($name, "Thin", 100, "normal");
    $txt .= css($name, "ThinItalic", 100, "italic");

    // 200 - Extra Light
    $txt .= css($name, "ExtraLight", 200, "normal");
    $txt .= css($name, "ExtraLightItalic", 200, "italic");

    // 300 - Light
    $txt .= css($name, "Light", 300, "normal");
    $txt .= css($name, "LightItalic", 300, "italic");

    // 400 - Regular
    $txt .= css($name, "Italic", 400, "italic");
    $txt .= css($name, "Regular", 400, "normal");

    // 500 - Medium
    $txt .= css($name, "Medium", 500, "normal");
    $txt .= css($name, "MediumItalic", 500, "italic");

    // 600 - Semi-bold
    $txt .= css($name, "SemiBold", 600, "normal");
    $txt .= css($name, "SemiBoldItalic", 600, "italic");

    // 700 - Bold
    $txt .= css($name, "Bold", 700, "normal");
    $txt .= css($name, "BoldItalic", 700, "italic");

    // 800 - Extra Bold
    $txt .= css($name, "ExtraBold", 800, "normal");
    $txt .= css($name, "ExtraBoldItalic", 800, "italic");

    // 900 - Black
    $txt .= css($name, "Black", 900, "normal");
    $txt .= css($name, "BlackItalic", 900, "normal");

    return $txt;
}

?>

/* Generated on <?= date('r') ?> */
<?= font("Jost") ?>
<?= font("MavenPro") ?>
<?= font("Overpass") ?>

:root {
    --bs-font-sans-serif: "MavenPro","Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji",system-ui,-apple-system !important;
}

html, body {
    font-family: "MavenPro","Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji",system-ui,-apple-system !important;
}

body.admin {
    font-family: "Overpass","Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji",system-ui,-apple-system !important;
}

h1, h2, h3, h4, h5, h6, .display-1, .display-2, .display-3, .display-4, .display-5, .display-6 {
    font-family: "Jost","Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji",system-ui,-apple-system;
}
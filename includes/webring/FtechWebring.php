<?php

// Minteck's space uses a special function for i18n, so we check if it exists
function _ftww($message_en, $message_fr) {
    if (function_exists("l") && func_num_args() === 2) {
        return l($message_en, $message_fr);
    } else {
        return $message_en;
    }
}

// CSS to make the magic happen
echo("
<style>

ftww-base {
    display: block;
    border-radius: 10px;
    background-color: rgba(11, 11, 11, .25);
    padding: 10px 20px;
    margin: 10px 0;
    color: white;
}

ftww-title {
    display: block;
    font-weight: bold;
}

ftww-description a {
    color: white !important;
    text-decoration: underline;
}

ftww-actions {
    display: block;
    opacity: .5;
}

ftww-actions a {
    color: white !important;
    text-decoration: none;
}

ftww-disabled {
    opacity: .5;
    color: white !important;
    text-decoration: none;
    cursor: not-allowed;
}

ftww-notice {
    border-top: 1px solid rgba(17, 17, 17, .5);
    display: block;
    margin-top: 5px;
    padding-top: 5px;
    font-size: small;
    text-align: center;
}

</style>
");

// We fetch the API
$raw = @file_get_contents("https://jae.fi/webring/members");

// If it failed, we stop here
if ($raw !== false) {
    // We decode our JSON
    $sites = json_decode($raw, true)["members"];

    // We find the index corresponding to this website
    $thisSite = null;
    if (isset($_ftww_SiteName) && is_string($_ftww_SiteName)) { // Checking if the required variable is defined
        foreach ($sites as $index => $site) {
            if ($site["url"] === $_ftww_SiteName) {
                $thisSite = $index;
            }
        }

        if ($thisSite !== null) { // We check if it has found the site in the list
            $next = null;
            $previous = null;
            $random = $sites[rand(0, count($sites) - 1)]["url"]; // This simply selects a random item from the $sites array

            if (isset($sites[$thisSite - 1])) { // We check if there's a previous site in the list
                $previous = $sites[$thisSite - 1]["url"];
            } else {
                $previous = $sites[count($sites) - 1]["url"]; // If this is the first site, roll out to the last one
            }

            if (isset($sites[$thisSite + 1])) { // We check if there's a next site in the list
                $next = $sites[$thisSite + 1]["url"];
            } else {
                $next = $sites[0]["url"]; // If this is the last site, roll out to the first one
            }

            echo("
            <ftww-base>
                <ftww-title>"._ftww("Ftech webring", "Anneau Web Ftech")."</ftww-title>
                <ftww-description>"._ftww("This is ", "Il s'agit de ")."<a href=\"".$sites[$thisSite]["url"]."\">".$sites[$thisSite]["name"]."</a>"._ftww(", owned by ", ", possédé par ").$sites[$thisSite]["owner"]._ftww(". This website is part of the Ftech webring.", ". Ce site Web fait partie de l'anneau Web Ftech.")."</ftww-description>
                <ftww-actions>");

                    if (!is_null($previous)) echo("<a href=\"".$previous."\" target='_blank'>["._ftww("Prev", "Préc")."]</a>\n");
                    if (is_null($previous)) echo("<ftww-disabled>["._ftww("You're on the first site", "Vous êtes sur le premier site")."]</ftww-disabled>\n");
                    if (!is_null($next)) echo("<a href=\"".$next."\" target='_blank'>["._ftww("Next", "Suiv")."]</a>\n");
                    if (is_null($next)) echo("<ftww-disabled>["._ftww("You're on the last site", "Vous êtes sur le dernier site")."]</ftww-disabled>\n");
                    if (!is_null($random)) echo("<a href=\"".$random."\" target='_blank'>["._ftww("Random", "Aléatoire")."]</a>\n");

                    echo("
                </ftww-actions>
                <ftww-notice>"._ftww($sites[$thisSite]["owner"]." is warning you that other websites on the webring have their own policies that may or may not be the same as the policies from ".$sites[$thisSite]["name"].".", $sites[$thisSite]["owner"]." vous avertit que les autres sites présents sur l'anneau Web disposent de leurs propres politiques qui peuvent ou non être les mêmes que celles de ".$sites[$thisSite]["name"].".")."</ftww-notice>
            </ftww-base>
                ");
        } else {
            // We display an error message
            echo("
<ftww-base>
    "._ftww("The content that was supposed to appear here cannot be loaded due to an internal error. Please contact the website administrator. Error: ", "Le contenu qui était censé apparaître ici ne peut pas être chargé en raison d'une erreur interne. Merci de contacter l'administrateur de ce site Web. Erreur : ")."no such website"."
</ftww-base>
        ");
        }
    } else {
        // We display an error message
        echo("
<ftww-base>
    "._ftww("The content that was supposed to appear here cannot be loaded due to an internal error. Please contact the website administrator. Error: ", "Le contenu qui était censé apparaître ici ne peut pas être chargé en raison d'une erreur interne. Merci de contacter l'administrateur de ce site Web. Erreur : ")."_ftww_SiteName is not defined"."
</ftww-base>
        ");
    }
} else {
    // We display an error message
    echo("
<ftww-base>
    "._ftww("The content that was supposed to appear here cannot be loaded due to an internal error. Please contact the website administrator. Error: ", "Le contenu qui était censé apparaître ici ne peut pas être chargé en raison d'une erreur interne. Merci de contacter l'administrateur de ce site Web. Erreur : ")."file_get_contents returned false"."
</ftww-base>
    ");
}
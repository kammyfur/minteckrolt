<?php

require_once "../../main.php";
init(false);

$obj["data"]["versions"] = [];
$obj["data"]["versions"]["web"] = [];
$obj["data"]["versions"] = [];
$obj["data"]["versions"]["system"] = [];
$obj["data"]["versions"]["system"]["git"] = [];
exec("git --version", $res);
$p = explode(" ", $res[0]);
array_shift($p);
array_shift($p);
$obj["data"]["versions"]["system"]["git"]["version"] = implode(" ", $p);
$obj["data"]["versions"]["system"]["git"]["codename"] = null;
$obj["data"]["versions"]["system"]["kernel"] = [];
$obj["data"]["versions"]["system"]["kernel"]["version"] = php_uname('r') . " " . php_uname('v');
$obj["data"]["versions"]["system"]["kernel"]["codename"] = php_uname('s');
$obj["data"]["versions"]["web"]["php"] = [];
$obj["data"]["versions"]["web"]["php"]["version"] = PHP_VERSION;
$obj["data"]["versions"]["web"]["php"]["codename"] = null;
$obj["data"]["versions"]["web"]["server"] = [];
if (strpos(strtolower($_SERVER['SERVER_SOFTWARE']), "apache") !== false) {
    exec("apache2 -v", $res2);$p = explode(" ", $res2[0]);array_shift($p);array_shift($p);$p2 = explode("/", implode(" ", $p));array_shift($p2);
} else {
    exec("nginx -v", $res2);$p = explode(" ", $res2[0]);array_shift($p);array_shift($p);$p2 = explode("/", implode(" ", $p));array_shift($p2);
}
$obj["data"]["versions"]["web"]["server"]["version"] = implode(" ", $p2);
$obj["data"]["versions"]["web"]["server"]["codename"] = strpos(strtolower($_SERVER['SERVER_SOFTWARE']), "apache") !== false ? "Apache" : "nginx";
$obj["data"]["versions"]["services"] = [];
$obj["data"]["versions"]["services"]["Minteck.MinteckSpace"] = [];
$obj["data"]["versions"]["services"]["Minteck.MinteckSpace"]["version"] = trim(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/version.txt"));
$obj["data"]["versions"]["services"]["Minteck.MinteckSpace"]["codename"] = null;
$obj["data"]["versions"]["services"]["Minteck.UnchainedTech"] = [];
$obj["data"]["versions"]["services"]["Minteck.UnchainedTech"]["version"] = trim(file_get_contents("/mnt/blogchain/version.txt"));
$obj["data"]["versions"]["services"]["Minteck.UnchainedTech"]["codename"] = null;
$obj["data"]["versions"]["services"]["Neutron.Cloud"] = [];
$obj["data"]["versions"]["services"]["Neutron.Cloud"]["version"] = trim(file_get_contents("/mnt/minteckrolt-cloud/@BASE/source/api/version"));
$obj["data"]["versions"]["services"]["Neutron.Cloud"]["codename"] = trim(file_get_contents("/mnt/minteckrolt-cloud/@BASE/source/api/codename"));
$obj["data"]["versions"]["services"]["Neutron.CopperEngine"] = [];
$obj["data"]["versions"]["services"]["Neutron.CopperEngine"]["version"] = trim(file_get_contents("/mnt/minteckrolt-cloud/@BASE/source/api/cyclic_version"));
$obj["data"]["versions"]["services"]["Neutron.CopperEngine"]["codename"] = null;
$obj["data"]["versions"]["services"]["Neutron.TitaniumEngine"] = [];
$obj["data"]["versions"]["services"]["Neutron.TitaniumEngine"]["version"] = trim(file_get_contents("/mnt/minteckrolt-cloud/@BASE/source/api/jaw_version"));
$obj["data"]["versions"]["services"]["Neutron.TitaniumEngine"]["codename"] = null;

success(); // To succeed (code 200)
error("OwO"); // To fail (code 500)
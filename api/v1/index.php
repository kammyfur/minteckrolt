<?php

$version = explode("/", $_SERVER['SCRIPT_NAME'])[2];

if (!isset($_GET['_'])) {
    header("Location: ./?_=" . md5("/"));
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minteck API Reference</title>
    <script src="jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        :root {
            --font-family: "Arial", "Segoe UI", "Noto Sans", "Ubuntu", "Source Sans Pro", "Liberation Sans", sans-serif;
        }

        html, body {
            margin: 0;
            font-family: var(--font-family);
            height: 100%;
        }

        .splitter {
            width: 100%;
            height: 100%;
            display: flex;
            position: fixed;
            inset: 0;
        }

        #separator {
            cursor: col-resize;
            background-color: #aaa;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='30'><path d='M2 0 v30 M5 0 v30 M8 0 v30' fill='none' stroke='black'/></svg>");
            background-repeat: no-repeat;
            background-position: center;
            width: 5px;
            height: 100%;

            /* Prevent the browser's built-in drag from interfering */
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #first {
            background-color: #dde;
            width: 20%;
            font-family: monospace;
            height: 100%;
            padding: 20px;
            overflow: auto;
        }

        #first b a {
            background: yellow;
        }

        #second {
            background-color: #eee;
            width: 80%;
            height: calc(100% - 40px);
            overflow: auto;
            min-width: 100px;
            padding: 20px;
        }

        summary {
            cursor: pointer;
        }

        .details-contents {
            margin-left: 8px;
        }

        #warning, .warning {
            background: #ff8d0052;
            padding: 10px;
            border: 1px dashed #ff8d00;
        }

        #danger, .danger {
            background: rgba(255, 0, 0, 0.32);
            padding: 10px;
            border: 1px dashed #ff0000;
        }

        #api, #request {
            padding: 10px;
            border: 1px solid #222;
        }

        #request {
            margin-top: 20px;
        }

        #api-url {
            padding: 10px 20px;
            margin: 0;
            border: 1px solid #ccc;
            background: #ddd;
            font-family: monospace;
        }

        #api-description {
            padding: 25px 30px 20px;
            margin: -10px;
            border-bottom: 1px solid #222;
        }

        #api-requires, #api-return, #api-extend {
            display: block;
            margin-left: 20px;
            font-family: monospace;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .api-dependencies-inner {
            margin: 0;
        }

        #api-dependencies {
            margin-top: 25px;
        }

        #api-requires-description {
            font-family: var(--font-family);
        }

        #request-code {
            font-family: monospace;
            padding: 2px 5px;
            border-radius: 5px;
            background: red;
        }

        .rqc-neutral {
            background: #aaa !important;
        }

        .rqc-success {
            background: #68bb43 !important;
        }

        .rqc-server {
            background: #cb529a !important;
        }

        .rqc-client {
            background: #5254cb !important;
        }

        .rqc-info {
            background: #52cbbd !important;
        }

        .sending, .sending * {
            cursor: wait !important;
        }

    </style>
</head>
<body id="body">

    <div class="splitter">
        <div id="first">
            <details open id="<?= md5("/") ?>">
                <summary><?php if (!isset($_GET['_']) || $_GET['_'] !== md5("/")): ?><a href="./?_=<?= md5("/") ?>"><?= "/" ?></a><?php else: ?><b><a href="./?_=<?= md5("/") ?>"><?= "/" ?></a></b><?php endif; ?></summary>
                <div class="details-contents">
                    <?php foreach (scandir(".") as $el): if (is_dir($el) && $el !== "." && $el !== ".."): ?>
                    <details open id="<?= md5("/" . $el) ?>">
                        <summary><?php if (!isset($_GET['_']) || $_GET['_'] !== md5("/" . $el)): ?><a href="./?_=<?= md5("/" . $el) ?>"><?= "/" . $el ?></a><?php else: ?><b><a href="./?_=<?= md5("/" . $el) ?>"><?= "/" . $el ?></a></b><?php endif; ?></summary>
                        <div class="details-contents">
                            <?php foreach (scandir("./" . $el) as $el2): if (is_dir("./" . $el . "/" . $el2) && $el2 !== "." && $el2 !== ".."): ?>
                                <details open id="<?= md5("/" . $el . "/" . $el2) ?>">
                                    <summary><?php if (!isset($_GET['_']) || $_GET['_'] !== md5("/" . $el . "/" . $el2)): ?><a href="./?_=<?= md5("/" . $el . "/" . $el2) ?>"><?= "/" . $el . "/" . $el2 ?></a><?php else: ?><b><a href="./?_=<?= md5("/" . $el . "/" . $el2) ?>"><?= "/" . $el . "/" . $el2 ?></a></b><?php endif; ?></summary>
                                    <div class="details-contents"></div>
                                </details>
                            <?php endif; endforeach; ?>
                        </div>
                    </details>
                    <?php endif; endforeach; ?>
                </div>
            </details>
        </div>
        <div id="separator"></div>
        <div id="second">
            <?php if (json_decode(file_get_contents("version.json"), true)["status"] === "beta"): ?>
            <p id="warning"><b>Unstable API ahead!</b> This API is unstable, and may change at any time without warning. Do not use this version in a production environment.</p>
            <hr>
            <?php endif; ?>
            <?php if (json_decode(file_get_contents("version.json"), true)["status"] === "deprecated"): ?>
                <p id="danger"><b>Deprecated API ahead!</b> This API is deprecated, has been superseeded by a newer version and can stop working at any time. Do not use this version in a production environment.</p>
                <hr>
            <?php endif; ?>
            <?php if (isset($_GET['_']) && $_GET['_'] === md5("/")): ?>
            <?= str_replace("%%V2", $version, str_replace("%%V1", json_decode(file_get_contents("version.json"), true)["version"], file_get_contents("intro.html"))) ?>
            <?php else: ?>
                <?php foreach (scandir(".") as $el): if (is_dir($el) && $el !== "." && $el !== ".."): ?>
                    <?php if (isset($_GET['_']) && $_GET['_'] === md5("/" . $el)): ?>
                    <?php $name = "/" . $el; ?>
                    <?php endif; ?>
                    <?php foreach (scandir("./" . $el) as $el2): if (is_dir("./" . $el . "/" . $el2) && $el2 !== "." && $el2 !== ".."): ?>
                                <?php if (isset($_GET['_']) && $_GET['_'] === md5("/" . $el . "/" . $el2)): ?>

                            <?php $name = "/" . $el . "/" . $el2; ?>
                        <?php endif; ?>
                            <?php endif; endforeach; ?>
                <?php endif; endforeach; ?>

                <h1><code><?= $name ?></code></h1>
                <?php !strpos($name, ".") or die(); ?>
                <?php if (file_exists("./" . $name . "/api.json")): ?>
                <div id="api">
                    <p id="api-url">/api/<?= $version ?><?= $name ?><?php

                        $apidata = json_decode(file_get_contents("./" . $name . "/api.json"), true);
                        if ($apidata["argument"]["enable"]) {
                            echo("/?_=&lt;" . $apidata["argument"]["name"] . ": " . $apidata["argument"]["type"] . "&gt;");
                        }

                        ?></p>
                    <p id="api-description"><?php

                        if (isset($apidata["description"])) {
                            echo(str_replace(">", "&gt;", str_replace("<", "&lt;", $apidata["description"])));
                        } else {
                            echo("<i>No description</i>");
                        }

                        ?></p>
                    <div id="api-dependencies">
                        <div class="api-dependencies-inner">
                            <i>Extends:</i>
                            <div id="api-extend">
                                SystemAPI$<?= $version ?>.Call$<?php

                                $parts = explode("/", $name);
                                array_pop($parts);
                                array_shift($parts);
                                echo(implode(".", $parts));

                                ?><br>/api/<?= $version ?><?php

                                $parts = explode("/", $name);
                                array_pop($parts);
                                echo(implode("/", $parts));

                                ?><br><?php

                                $parts = explode("/", $name);
                                array_pop($parts);
                                echo(implode("/", $parts));

                                ?>
                            </div>
                        </div>
                        <div class="api-dependencies-inner">
                            <i>Returns:</i>
                            <div id="api-return">
                                <?= str_replace(">", "&gt;", str_replace("<", "&lt;", $apidata["returns"] ?? "JSON<*>")) ?><br>null
                            </div>
                        </div>
                        <div class="api-dependencies-inner">
                            <i>Requires:</i>
                            <div id="api-requires">
                                <?php

                                if ($apidata["argument"]["enable"]) {
                                    echo($apidata["argument"]["name"] . ": " . $apidata["argument"]["type"] . "<span id='api-requires-description'>: " . $apidata["argument"]["description"] . "</span>");
                                } else {
                                    echo("null");
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h2>Testing playground</h2>
                <p>
                    <?php

                    if ($apidata["argument"]["enable"]) {
                        echo("<code>" . $apidata["argument"]["name"] . "</code>: <input type='text' placeholder='Expects: " . $apidata["argument"]["type"] . "' id='api-argument-pgvalue'>");
                    } else {
                        echo("<i>No additional parameter required</i>");
                    }

                    ?>
                </p>
                <button onclick="request();" id="send">Send request</button>
                <details id="request">
                    <summary>
                        <span id="request-code" class="rqc-neutral">---</span> <code id="request-text">No request</code>
                    </summary>
                    <pre id="request-output">null</pre>
                    <p id="request-error" class="danger" style="display:none;"><b>Invalid data</b> The data returned by the server is not a valid JSON data. Use your browser's development console to access more details about what failed.</p>
                </details>
                <script>
                    function request() {
                        document.getElementById('send').disabled = true;
                        document.getElementById('body').classList.add("sending");
                        document.getElementById('request-code').className = "rqc-neutral";
                        document.getElementById('request-text').innerText = "Request in progress...";
                        document.getElementById('request-code').innerText = "---";
                        document.getElementById('request').open = false;
                        document.getElementById('request-output').style.display = "";
                        document.getElementById('request-error').style.display = "none";
                        document.getElementById('request-output').innerText = "null";
                        jQuery.ajax("<?= $apidata["argument"]["enable"] ? "/api/{$version}{$name}/?_=\" + document.getElementById('api-argument-pgvalue').value + \"" : "/api/{$version}{$name}" ?>", {
                            complete: (data, text) => {
                                console.log(data);

                                document.getElementById('request').open = true;
                                document.getElementById('request-text').innerText = data.statusText;
                                document.getElementById('request-code').innerText = data.status;

                                if (data.status >= 0 && data.status < 200) document.getElementById('request-code').className = "rqc-info";
                                if (data.status >= 200 && data.status < 300) document.getElementById('request-code').className = "rqc-success";
                                if (data.status >= 300 && data.status < 400) document.getElementById('request-code').className = "rqc-redirect";
                                if (data.status >= 400 && data.status < 500) document.getElementById('request-code').className = "rqc-client";
                                if (data.status >= 500 && data.status < 600) document.getElementById('request-code').className = "rqc-server";

                                if (typeof data.responseJSON === "object") {
                                    document.getElementById('request-output').style.display = "";
                                    document.getElementById('request-error').style.display = "none";
                                    document.getElementById('request-output').innerText = JSON.stringify(data.responseJSON, false, 4);
                                } else {
                                    document.getElementById('request-output').style.display = "none";
                                    document.getElementById('request-error').style.display = "";
                                }

                                document.getElementById('send').disabled = false;
                                document.getElementById('body').classList.remove("sending");
                            }
                        })
                    }
                </script>
                <?php else: ?>
                <i>This API has an endpoint, but it does not have any defined use. Please check the endpoints it contains, or <a href="/contact">contact an administrator</a> if you believe there is a problem here.</i>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <script>

        // A function is used for dragging and moving
        function dragElement(element, direction)
        {
            var   md; // remember mouse down info
            const first  = document.getElementById("first");
            const second = document.getElementById("second");

            element.onmousedown = onMouseDown;

            function onMouseDown(e)
            {
                //console.log("mouse down: " + e.clientX);
                md = {e,
                    offsetLeft:  element.offsetLeft,
                    offsetTop:   element.offsetTop,
                    firstWidth:  first.offsetWidth,
                    secondWidth: second.offsetWidth
                };

                document.onmousemove = onMouseMove;
                document.onmouseup = () => {
                    //console.log("mouse up");
                    document.onmousemove = document.onmouseup = null;
                }
            }

            function onMouseMove(e)
            {
                //console.log("mouse move: " + e.clientX);
                var delta = {x: e.clientX - md.e.clientX,
                    y: e.clientY - md.e.clientY};

                if (direction === "H" ) // Horizontal
                {
                    // Prevent negative-sized elements
                    delta.x = Math.min(Math.max(delta.x, -md.firstWidth),
                        md.secondWidth);

                    element.style.left = md.offsetLeft + delta.x + "px";
                    first.style.width = (md.firstWidth + delta.x) + "px";
                    second.style.width = (md.secondWidth - delta.x) + "px";
                }
            }
        }

        dragElement( document.getElementById("separator"), "H" );

    </script>

</body>
</html>
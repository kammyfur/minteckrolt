<?php $_TITLE = "Metroz Translate";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div class="container" style="min-height: 100vh;">
    <br>
    <br>
    <br>
    <br>
    <br>

    <style>
        mark {
            background: transparent;
            color: #ff6161;
            padding: 0;
            font-weight: bold;
        }
    </style>

    <h2 style="text-align:center;">Metroz Translate</h2>
    <p style="text-align:center;">💡 <i>Click one of the languages to invert</i></p>
    <div style="display:grid;grid-template-columns: 1fr 1fr;background:#111;padding-top:10px;border-radius:5px;">
        <div>
            <a style="cursor:pointer;color: white !important; text-decoration: none;" onclick="switchLangs();"><p
                        id="lang-source"
                        style="text-align:center;font-weight:bold;">
                    English</p></a>
            <textarea maxlength="500" placeholder="Start typing here..." onresize="resizeTarget();"
                      onchange="process();"
                      onkeydown="process();" onkeyup="process();"
                      id="text-source"
                      style="padding:20px;outline:none;overflow:hidden;resize:none;background: #222;border: none;width: 100%;margin-bottom: -3px;color: #eee;border-right:1px solid #151515;"></textarea>
            <script>document.getElementById('text-source').value = "";</script>
        </div>
        <div>
            <a style="cursor:pointer;color: white !important; text-decoration: none;" onclick="switchLangs();"><p
                        id="lang-target"
                        style="text-align:center;font-weight:bold;">
                    Metroz</p></a>
            <div id="text-target" disabled
                 style="padding:20px;outline:none;overflow:hidden;resize: none;background: #222;border: none;width: 100%;margin-bottom: -3px;color: #eee;"></div>
            <script>document.getElementById('text-target').innerText = "";</script>
        </div>
    </div>
    <div id="facts"
         style="background:#424242;padding: 3px 10px;width:100%;border-bottom-left-radius:5px;border-bottom-right-radius:5px;">
        <span id="facts-inner">No facts available about this text</span>
    </div>

    <details style="margin-top:20px;">
        <summary>Translator Insights</summary>
        <ul>
            <li>Database Name: <span id="insights-01">n/a</span></li>
            <li>Database Version: <span id="insights-02">n/a</span></li>
            <li>Database Size: <span id="insights-03">n/a</span></li>
            <li>Processing Time: <span id="insights-04">n/a</span></li>
        </ul>
    </details>
</div>

<script>

    function switchLangs() {
        if (document.getElementById("text-target").innerHTML === "...") return;

        tval = document.getElementById("text-target").innerText;
        sval = document.getElementById("text-source").value;

        document.getElementById("text-target").innerText = "...";
        document.getElementById("text-source").value = tval;

        if (document.getElementById("lang-target").innerText === "English") {
            document.getElementById("lang-target").innerText = "Metroz";
            document.getElementById("lang-source").innerText = "English";
        } else {
            document.getElementById("lang-source").innerText = "Metroz";
            document.getElementById("lang-target").innerText = "English";
        }

        translate();
    }

    typing = false;

    function startTyping() {
        typing = true;
        document.getElementById("facts-inner").innerText = "Waiting for end of input...";
        document.getElementById("text-target").innerText = "...";
    }

    function stopTyping() {
        typing = false;
        translate();
    }

    setInterval(() => {
        if (typing) stopTyping();
    }, 2000)

    function translate() {
        if (document.getElementById("text-source").value.trim() === "") {
            document.getElementById("facts-inner").innerText = "No facts available for this text";
            document.getElementById("text-target").innerText = "";
            return;
        }

        document.getElementById("facts-inner").innerText = "Translating...";
        document.getElementById("text-target").innerText = "...";

        if (document.getElementById("lang-target").innerText === "English") {
            target = "en";
        } else {
            target = "mt";
        }

        document.getElementById("insights-01").innerText = "n/a";
        document.getElementById("insights-02").innerText = "n/a";
        document.getElementById("insights-03").innerText = "n/a";
        document.getElementById("insights-04").innerText = "n/a";

        window.fetch("/metranslator/api.php?t=" + target + "&u=" + encodeURI(document.getElementById("text-source").value)).then((a) => {
            a.blob().then((b) => {
                b.text().then((c) => {
                    try {
                        data = JSON.parse(c);

                        words = data.output.split(" ");
                        newds = [];
                        initw = document.getElementById("text-source").value.toLowerCase().split(" ");

                        for (word of words) {
                            if (initw.includes(word)) {
                                newds.push("<mark>" + word + "</mark>");
                                data.facts.push("The word '" + word + "' does not have a translation in " + document.getElementById("lang-target").innerText)
                            } else {
                                newds.push(word);
                            }
                        }

                        if (data.facts.length > 0) {
                            document.getElementById("facts-inner").innerHTML = "<ul style='margin-bottom: 0;'><li>" + data.facts.join("</li><li>") + "</li></ul>";
                        } else {
                            document.getElementById("facts-inner").innerText = "No facts available for this text";
                        }

                        document.getElementById("text-target").innerHTML = newds.join(" ");
                    } catch (e) {
                        console.error(e);
                        document.getElementById("text-target").innerHTML = "<i>An error occurred, please try again later<ul><li>You are a developer? Additional details have been displayed in the console</li><li>You are a regular user? Contact the administrators so they fix the problem</li></ul></i>";
                        document.getElementById("facts-inner").innerText = "No facts available for this text";
                        document.getElementById("insights-01").innerText = "n/a";
                        document.getElementById("insights-02").innerText = "n/a";
                        document.getElementById("insights-03").innerText = "n/a";
                        document.getElementById("insights-04").innerText = "n/a";
                    }

                    if (data.system.version.startsWith("-")) {
                        document.getElementById("insights-01").innerText = "n/a";
                        document.getElementById("insights-02").innerText = "n/a";
                        document.getElementById("insights-03").innerText = "n/a";
                        document.getElementById("insights-04").innerText = "n/a";
                    } else {
                        document.getElementById("insights-01").innerText = data.system.name;
                        document.getElementById("insights-02").innerText = data.system.version + " (last update by " + data.system.last_author + ")";
                        document.getElementById("insights-03").innerText = data.system.length + " entries";
                        document.getElementById("insights-04").innerText = data.duration + " ms";
                    }
                    resizeTarget()

                    if (data.system.version.startsWith("-")) {
                        document.getElementById("insights-01").innerText = "n/a";
                        document.getElementById("insights-02").innerText = "n/a";
                        document.getElementById("insights-03").innerText = "n/a";
                        document.getElementById("insights-04").innerText = "n/a";
                    }
                })
            })
        })
    }

    function process() {
        resizeTarget()
        startTyping()
    }

    function resizeTarget() {
        if (document.getElementById("text-source").scrollHeight > document.getElementById("text-target").scrollHeight) {
            size = document.getElementById("text-source").scrollHeight;
        } else {
            size = document.getElementById("text-target").scrollHeight;
        }

        document.getElementById("text-source").style.height = size + "px";
        document.getElementById("text-target").style.height = size + "px";
    }

    resizeTarget()

</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

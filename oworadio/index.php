<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OwORadio</title>
    <link href="/static/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/gh/foobar404/wave.js/dist/bundle.iife.js"></script>
</head>
<body style="background:#111;">
<nav style="z-index:999;background-color: #2222228a !important;color:white !important;backdrop-filter: blur(10px);margin: 30px;border-radius: 999px;padding: 0 20px;justify-content: center;"
     class="navbar navbar-fixed navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand" style="text-align: center;" href="#">
        OwORadio
        <span class="badge bg-warning">Beta</span>
    </a>
</nav>

<audio id="audio" src="/oworadio/source"></audio>
<div style="text-align:center;display:flex;align-items:center;justify-content: center;position:fixed;inset:0;z-index:99;">
    <div class="text-white">
        <h1 id="title"></h1>
        <h2>by <span id="artist"></span></h2>
        <p>🎶 listening along with <span id="listenalong">Loading...</span> 🎶</p>
    </div>
</div>

<canvas id="visualizer" height="0" width="0" style="position:fixed;inset:0;z-index:0;"></canvas>

<div id="mininav" style="z-index:9999;position: fixed;bottom: 30px;left: 30px;right: 30px;text-align:center;">
    <span id="mininav-inner"
          style="border-radius: 999px;color: white;padding: 5px 20px;background:#2222228a;backdrop-filter: blur(10px);">
        <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8s8,3.59,8,8 S16.41,20,12,20z M9.5,16.5l7-4.5l-7-4.5V16.5z"/></g></svg>'
             alt="" style="vertical-align: middle;position:relative;top:-2px;filter:invert(1);cursor:pointer;"
             title="Play" id="playbtn" onclick="playpause();">
        <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>'
             alt="" style="vertical-align: middle;position:relative;top:-2px;filter:invert(1);cursor:pointer;"
             title="Open with native media player" id="playbtn" onclick="vlc();">
        <img
                src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,11c0-3.87-3.13-7-7-7C8.78,4,6.07,6.18,5.26,9.15C2.82,9.71,1,11.89,1,14.5C1,17.54,3.46,20,6.5,20 c1.76,0,10.25,0,12,0l0,0c2.49-0.01,4.5-2.03,4.5-4.52C23,13.15,21.25,11.26,19,11z M18.5,18c-0.82,0-10.41,0-12,0 C4.57,18,3,16.43,3,14.5S4.57,11,6.5,11C7,11,7,11,7,11c0-2.76,2.24-5,5-5s5,2.24,5,5v2c0,0,1.33,0,1.5,0c1.38,0,2.5,1.12,2.5,2.5 C21,16.88,19.88,18,18.5,18z"/></g></svg>'
                alt="" style="vertical-align: middle;position:relative;top:-2px;filter:invert(1);cursor:help;"
                title="Connection status is unknown" id="cloudstat">
        <img
                src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8 s8,3.59,8,8C20,16.41,16.41,20,12,20z M14,8h-4C9.45,8,9,8.45,9,9v6c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-2h-2v1h-2v-4h2v1h2V9 C15,8.45,14.55,8,14,8z"/></g></svg>'
                alt=""
                style="vertical-align: middle;position:relative;top:-2px;filter:invert(1);cursor:not-allowed;opacity:.5;"
                title="Report a copyright infringement (e.g. DMCA)" id="copyright" onclick="dmca();">
        <img
                src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/><path d="M20,6h-8l-2-2H4C2.9,4,2.01,4.9,2.01,6L2,18c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8C22,6.9,21.1,6,20,6z M20,18L4,18V6h5.17 l2,2H20V18z M18,12H6v-2h12V12z M14,16H6v-2h8V16z"/></g></svg>'
                alt=""
                style="vertical-align: middle;position:relative;top:-2px;filter:invert(1);cursor:not-allowed;opacity:.5;"
                title="View artist's page" id="source" onclick="credits();">
    </span>
</div>

<!--suppress JSUnresolvedVariable -->
<script>
    wsource = "";

    function credits() {
        window.open(wsource);
    }

    function s(item, artist, source) {
        if (item.includes(artist)) {
            wsource = source;
            wsenabled = true;
        }
    }

    function vlc() {
        location.href = "/oworadio/vlc";
    }

    function playpause() {
        if (document.getElementById("audio").paused) {
            document.getElementById("audio").play();
            return;
        }
        if (document.getElementById("audio").volume !== 0) {
            document.getElementById("audio").volume = 0;
        } else {
            document.getElementById("audio").volume = 1;
        }
    }

    document.getElementById("audio").addEventListener('complete', () => {
        location.reload();
    })

    document.getElementById("audio").addEventListener('durationchange', () => {
        document.getElementById("cloudstat").title = "Buffering data from the server";
        document.getElementById("cloudstat").src = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,11c0-3.87-3.13-7-7-7C8.78,4,6.07,6.18,5.26,9.15C2.82,9.71,1,11.89,1,14.5C1,17.54,3.46,20,6.5,20h12l0,0 c2.49-0.01,4.5-2.03,4.5-4.52C23,13.15,21.25,11.26,19,11z M18.5,18h-12C4.57,18,3,16.43,3,14.5S4.57,11,6.5,11C7,11,7,11,7,11 c0-2.76,2.24-5,5-5s5,2.24,5,5v2c0,0,1.33,0,1.5,0c1.38,0,2.5,1.12,2.5,2.5C21,16.88,19.88,18,18.5,18z M16,13l-1.41-1.41L13,13.17 V9h-2v4.17l-1.59-1.59L8,13l4,4L16,13z"/></g></svg>';
        setTimeout(() => {
            document.getElementById("cloudstat").title = "Sufficient data has been loaded";
            document.getElementById("cloudstat").src = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,11c0-3.87-3.13-7-7-7C8.78,4,6.07,6.18,5.26,9.15C2.82,9.71,1,11.89,1,14.5C1,17.54,3.46,20,6.5,20h12l0,0 c2.49-0.01,4.5-2.03,4.5-4.52C23,13.15,21.25,11.26,19,11z M18.5,18h-12C4.57,18,3,16.43,3,14.5S4.57,11,6.5,11C7,11,7,11,7,11 c0-2.76,2.24-5,5-5s5,2.24,5,5v2c0,0,1.33,0,1.5,0c1.38,0,2.5,1.12,2.5,2.5C21,16.88,19.88,18,18.5,18z M10.34,14.17l-2.12-2.12 l-1.41,1.41L10.34,17L16,11.34l-1.41-1.41L10.34,14.17z"/></g></svg>';
        }, 50)
    })

    document.getElementById("audio").addEventListener('timeupdate', () => {
        document.getElementById("cloudstat").title = "Sufficient data has been loaded";
        document.getElementById("cloudstat").src = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,11c0-3.87-3.13-7-7-7C8.78,4,6.07,6.18,5.26,9.15C2.82,9.71,1,11.89,1,14.5C1,17.54,3.46,20,6.5,20h12l0,0 c2.49-0.01,4.5-2.03,4.5-4.52C23,13.15,21.25,11.26,19,11z M18.5,18h-12C4.57,18,3,16.43,3,14.5S4.57,11,6.5,11C7,11,7,11,7,11 c0-2.76,2.24-5,5-5s5,2.24,5,5v2c0,0,1.33,0,1.5,0c1.38,0,2.5,1.12,2.5,2.5C21,16.88,19.88,18,18.5,18z M10.34,14.17l-2.12-2.12 l-1.41,1.41L10.34,17L16,11.34l-1.41-1.41L10.34,14.17z"/></g></svg>';
    })

    document.getElementById("audio").addEventListener('waiting', () => {
        document.getElementById("cloudstat").title = "Waiting for data from the server";
        document.getElementById("cloudstat").src = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,11c0-3.87-3.13-7-7-7c-1.47,0-2.81,0.47-3.93,1.24l1.45,1.45C10.25,6.26,11.09,6,12,6c2.76,0,5,2.24,5,5v2 c0,0,1.33,0,1.5,0c1.38,0,2.5,1.12,2.5,2.5c0,0.73-0.32,1.39-0.83,1.85l1.41,1.41c0.87-0.82,1.42-1.98,1.42-3.28 C23,13.15,21.25,11.26,19,11z M1.39,4.22l4.15,4.15c-0.1,0.26-0.21,0.51-0.28,0.78C2.82,9.71,1,11.89,1,14.5 C1,17.54,3.46,20,6.5,20h10.67l2.61,2.61l1.41-1.41L2.81,2.81L1.39,4.22z M7,11c0-0.36,0.04-0.71,0.12-1.06L15.17,18H6.5 C4.57,18,3,16.43,3,14.5S4.57,11,6.5,11C7,11,7,11,7,11z"/></g></svg>';
    })

    setInterval(() => {
        if (document.getElementById("audio").volume === 0 || document.getElementById("audio").paused) {
            document.getElementById("playbtn").title = "Play";
            document.getElementById("playbtn").src = "Play";
            document.getElementById("playbtn").src = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8s8,3.59,8,8 S16.41,20,12,20z M9.5,16.5l7-4.5l-7-4.5V16.5z"/></g></svg>';
        } else {
            document.getElementById("playbtn").title = "Pause";
            document.getElementById("playbtn").src = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M9,16h2V8H9V16z M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8 s3.59-8,8-8s8,3.59,8,8S16.41,20,12,20z M13,16h2V8h-2V16z"/></g></g></svg>';
        }

        document.getElementById("visualizer").width = window.innerWidth;
        document.getElementById("visualizer").height = window.innerHeight;
    }, 10)

    function reloadCredits() {
        window.fetch("https://minteck.ro.lt/oworadio/along/").then((raw) => {
            raw.blob().then((data) => {
                data.text().then((text) => {
                    count = text - 1 + 1;
                    if (count === 0) {
                        document.getElementById("listenalong").innerText = "nocreature";
                    } else if (count === 1) {
                        document.getElementById("listenalong").innerText = "somecreature";
                    } else if (count > 1) {
                        document.getElementById("listenalong").innerText = count + " other creatures";
                    } else if (count < 0) {
                        document.getElementById("listenalong").innerText = "you?!";
                    }
                })
            })
        })
        window.fetch("https://minteck.ro.lt/oworadio/credits/").then((raw) => {
            raw.blob().then((data) => {
                data.text().then((text) => {
                    document.getElementById("title").innerText = text.split(" · ")[1];
                    document.getElementById("artist").innerText = text.split(" · ")[0];
                    document.title = document.getElementById("artist").innerText + " · " + document.getElementById("title").innerText + " | OwORadio";
                    if (document.getElementById("artist").innerText.includes("Minteck") || document.getElementById("artist").innerText.includes("ExperiBass")) {
                        document.getElementById("copyright").style.cursor = "not-allowed";
                        document.getElementById("copyright").style.opacity = "0.5";
                    } else {
                        document.getElementById("copyright").style.cursor = "pointer";
                        document.getElementById("copyright").style.opacity = "1";
                    }

                    wsource = "";
                    wsenabled = false;
                    document.getElementById("source").style.cursor = "not-allowed";
                    document.getElementById("source").style.opacity = "0.5";
                    art = document.getElementById("artist").innerText;

                    s(art, "ExperiBass", "https://audius.co/freeusesounds/playlist/free-use-sounds-24560")
                    s(art, "Neyrax", "https://audius.co/freeusesounds/playlist/free-use-sounds-24560")
                    s(art, "RXPHY", "https://audius.co/freeusesounds/playlist/free-use-sounds-24560")
                    s(art, "Outer Mind", "https://audius.co/freeusesounds/playlist/free-use-sounds-24560")
                    s(art, "russelbuck", "https://www.youtube.com/c/russelbuck/videos")
                    s(art, "PrinceWhateverer", "https://www.youtube.com/user/princewhateverer/videos")
                    s(art, "Minteck", "https://soundcloud.com/minteck")
                    s(art, "kennyoung", "https://www.youtube.com/c/Kennyoung/videos")
                    s(art, "YonKaGor", "https://www.youtube.com/c/YonKaGor/videos")

                    if (wsenabled) {
                        document.getElementById("source").style.cursor = "pointer";
                        document.getElementById("source").style.opacity = "1";
                    }
                })
            })
        })
    }

    function dmca() {
        if (document.getElementById("artist").innerText.includes("Minteck") || document.getElementById("artist").innerText.includes("ExperiBass")) {
            return;
        }

        window.open("/oworadio/dmca");
    }

    setInterval(reloadCredits, 5000)
    reloadCredits();

    var wave = new Wave();
    wave.fromElement("audio", "visualizer", {
        type: "wave",
        colors: ["#151515", "#151515"]
    });
</script>
</body>
</html>
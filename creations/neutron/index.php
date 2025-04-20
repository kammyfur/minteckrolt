<?php $_TITLE = "Neutron";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<div style="margin-top: 56px;z-index: 5;background: #fff;padding-top: 20px;min-height: calc(100vh - 57px);"
     id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/neutron.jpg');"></div>

    <div class="container">
        <h2><?= l("Neutron, your future website designer", "Neutron, le futur designer de votre site Web") ?></h2>

        <p>Neutron is software created so that you can easily manage one or more websites without any required
            knowledge. Whether you are developer or not, Neutron is the best way to have a ready-to-go website.</p>
        <p>Neutron is released under the GNU General Public License version 3, which means you can contribute to the
            project and improve it.</p>

        <h3>Run Neutron on the cloud <span class="badge bg-secondary">New!</span></h3>
        Neutron 10 introduces support for a new much wanted technology: Neutron Cloud. The concept is simple: <b>you
            create, we host</b>. Here are the 5 top points for choosing Neutron Cloud instead of using Neutron
        on-premises:
        <ul>
            <li><b>it's free, and will be forever</b>. You don't have to buy/rent a server to use Neutron. We think
                everyone deserve the right to have a private place where they can share their life.
            </li>
            <li><b>forget the hassle</b>. You write your content, we take care of the rest.</li>
            <li><b>always fresh and secure</b>. Your Neutron Cloud is always up-to-date with the latest development
                version of Neutron.
            </li>
            <li><b>fast at large scales</b>. Neutron Cloud allows you to have at most 250 unique visitors per month, and
                they all will get the same level of performance.
            </li>
            <li><b>share it</b>. Your Neutron Cloud website can get a custom shortened URL that you can share
                everywhere.
            </li>
        </ul>

        <p>Neutron Cloud is currently available after registration on <b><a
                        href="https://docs.google.com/forms/d/1ozcKpET3U42ZHw-XolwNVTOseyhlVxxqG9EG8xrkyaU/viewform">HERE</a></b>.
            We limit registration to prevent abuse and know how you intend to use your Neutron Cloud website. If you
            already have a website running Neutron on your own server, you can send us the files and we migrate your
            website!</p>

        <details>
            <summary>Restrictions apply, click here to see</summary>
            <ul>
                <li>The Neutron Cloud service is reserved only for individuals and non-profit organizations. Select
                    professional and commercial users may get access to Neutron Cloud.
                </li>
                <li>Access to Neutron Cloud does not give additional support priority over regular Neutron users.</li>
                <li>Website traffic is limited to 250 unique users (counted using IP address) per month</li>
                <li>Website storage is soft-limited to 100 MiB; the website may be suspended if you exceed this limit
                </li>
                <li>Minimal uptime is guaranteed according to the following schedule:
                    <ul>
                        <li>25% uptime on July and August (due to yearly maintenances)</li>
                        <li>80% uptime from March to May (due to maintenances)</li>
                        <li>85% uptime in June (due to high temperatures)</li>
                        <li>99% uptime from September to February</li>
                        <li>In case of an extended maintenance period, you will be notified on the email address you
                            entered when you registered to Neutron Cloud.
                        </li>
                    </ul>
                </li>
            </ul>
        </details>

        <br>

        <h3>Run Neutron on your own hardware</h3>
        <p>Download the package and put it in your Web server's root. You will need the Apache HTTP Server with at least
            PHP 7.4 and the GD library.</p>
        <p style="text-align: center;">
            <a href="https://source.minteck.org/atomic-suite/neutron/releases" class="btn btn-primary"
               target="_blank">Download</a>
        </p>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

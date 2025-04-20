<?php $_TITLE = "About me"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div style="z-index: 5;background: #fff;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/about.jpg');"></div>

    <div class="container" style="margin-top: -100px;">
        <img src="data:image/png;base64,<?= base64_encode(file_get_contents("https://www.gravatar.com/avatar/1478a87e5f3741b04cf8ef616fba41f4.jpg?d=retro&s=128")) ?>" style="margin-top:10px;border-radius:9999px;width:128px;text-align:center;display:block;margin-left:auto;margin-right:auto;">
        <!--suppress CssInvalidPropertyValue -->
        <h2 style="font-weight: bold;background: radial-gradient(100% 100% at 100% 0%,#6f4cde 0%,#41d6d6 100%);background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;text-align: center;margin-top:10px;">Minteck ⭐</h2>
        <p style="text-align:center;"><?= l("it's mee!", "c'est moii !") ?></p>

        <h2><?= l("Languages", "Langues") ?></h2>
        <ul>
            <li><?= l("French is my mother language", "Le français est ma langue maternelle") ?></li>
            <li><?= l("I have (almost) near-native English level", "J'ai un niveau d'anglais (presque) proche d'un natif") ?></li>
            <li><?= l("I have some basic knowledge in Spanish", "J'ai quelques connaissances de base en espagnol") ?></li>
            <li><?= l("(and sometimes I say some words in other languages)", "(et parfois je dis des mots dans d'autres langues)") ?></li>
        </ul>

        <h2><?= l("What I do in IT", "Ce que je fais en informatique") ?></h2>
        <ul>
            <li>
                <?= l("Installing all major computer operating systems (Windows, Linux, macOS, FreeBSD, and even MS-DOS)", "Installation de tous les systèmes d'exploitation pour ordinateur majeurs (Windows, Linux, macOS, FreeBSD, et même MS-DOS)") ?>
                <ul>
                    <li>
                        <style>
                            .os-logo {
                                vertical-align: middle;
                                margin-right: 5px;
                                width: 24px;
                            }
                        </style>

                        <details>
                            <summary><?= l("Click here for full list", "Cliquez ici pour avoir la liste complète") ?></summary>
                            <ul>
                                <li><details>
                                        <summary><img alt="" src="/static/systems/windows.2021.11.svg" class="os-logo"> Windows</summary>
                                        <ul>
                                            <li><img alt="" src="/static/systems/windows.1983.1.svg" class="os-logo"> Windows 1.0</li>
                                            <li><img alt="" src="/static/systems/windows.1985.3.svg" class="os-logo"> Windows 3.1 "Janus"</li>
                                            <li><img alt="" src="/static/systems/windows.1985.3.svg" class="os-logo"> Windows 3.11 "Janus"</li>
                                            <li><img alt="" src="/static/systems/windows.1985.3.svg" class="os-logo"> Windows 3.11 for Workgroups "Snowball"</li>
                                            <li><img alt="" src="/static/systems/windows.1985.3.svg" class="os-logo"> Windows NT 3.1 Workstation "Razzle"</li>
                                            <li><img alt="" src="/static/systems/windows.1985.3.svg" class="os-logo"> Windows NT 3.5 Workstation "Daytona"</li>
                                            <li><img alt="" src="/static/systems/windows.1985.3.svg" class="os-logo"> Windows NT 3.51 Workstation "Daytona"</li>
                                            <li><img alt="" src="/static/systems/windows.1995.95.svg" class="os-logo"> Windows 95 OSR2 "Detroit"</li>
                                            <li><img alt="" src="/static/systems/windows.1995.95.svg" class="os-logo"> Windows 98 Second Edition "Memphis"</li>
                                            <li><img alt="" src="/static/systems/windows.1995.95.svg" class="os-logo"> Windows NT 4.0 Workstation "Shell Update Release"</li>
                                            <li><img alt="" src="/static/systems/windows.1995.95.svg" class="os-logo"> Windows Me "Millenium"</li>
                                            <li><img alt="" src="/static/systems/windows.1995.95.svg" class="os-logo"> Windows 2000 "NT 5.0"</li>
                                            <li><img alt="" src="/static/systems/windows.2001.xp.png" class="os-logo"> Windows XP "Whistler" (<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                            <li><img alt="" src="/static/systems/windows.2001.xp.png" class="os-logo"> Windows Compact Embedded (CE) 5.0 "Macallan" (<?= l("via Microsoft's device emulator", "via l'émulateur de périphérique de Microsoft") ?>)</li>
                                            <li><img alt="" src="/static/systems/windows.2006.vista.svg" class="os-logo"> Windows Vista "Longhorn"</li>
                                            <li><img alt="" src="/static/systems/windows.2006.vista.svg" class="os-logo"> Windows Server 2008 "Longhorn Server"</li>
                                            <li><img alt="" src="/static/systems/windows.2006.vista.svg" class="os-logo"> Windows 7 "Blackcomb"</li>
                                            <li><img alt="" src="/static/systems/windows.2006.vista.svg" class="os-logo"> Windows Server 2008 R2 "8"</li>
                                            <li><img alt="" src="/static/systems/windows.2012.8.svg" class="os-logo"> Windows 8</li>
                                            <li><img alt="" src="/static/systems/windows.2012.8.svg" class="os-logo"> Windows 8.1 "Blue"</li>
                                            <li><img alt="" src="/static/systems/windows.2012.8.svg" class="os-logo"> Windows Server 2012 R2 "8"</li>
                                            <li><img alt="" src="/static/systems/windows.2015.10.svg" class="os-logo"> Windows 10 "Threshold"</li>
                                            <li><img alt="" src="/static/systems/windows.2015.10.svg" class="os-logo"> Windows Server 2019</li>
                                            <li><img alt="" src="/static/systems/windows.2015.10.svg" class="os-logo"> Windows Server 2022 (<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                            <li><img alt="" src="/static/systems/windows.2021.11.svg" class="os-logo"> Windows 11 "Sun Valley"(<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                        </ul>
                                    </details></li>
                                <li><details>
                                        <summary><img alt="" src="/static/systems/linux.general.svg" class="os-logo"> Linux</summary>
                                        <ul>
                                            <li><img alt="" src="/static/systems/linux.alpine.svg" class="os-logo"> Alpine Linux</li>
                                            <li><img alt="" src="/static/systems/linux.arch.svg" class="os-logo"> Arch Linux</li>
                                            <li><img alt="" src="/static/systems/linux.manjaro.svg" class="os-logo"> Manjaro Linux</li>
                                            <li><img alt="" src="/static/systems/linux.debian.svg" class="os-logo"> Debian</li>
                                            <li><img alt="" src="/static/systems/linux.ubuntu.svg" class="os-logo"> Ubuntu Desktop (<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                            <li><img alt="" src="/static/systems/linux.lubuntu.svg" class="os-logo"> Lubuntu</li>
                                            <li><img alt="" src="/static/systems/linux.elementary.svg" class="os-logo"> elementary OS</li>
                                            <li><img alt="" src="/static/systems/linux.kubuntu.svg" class="os-logo"> Kubuntu</li>
                                            <li><img alt="" src="/static/systems/linux.xubuntu.svg" class="os-logo"> Xubuntu</li>
                                            <li><img alt="" src="/static/systems/linux.ubuntu.svg" class="os-logo"> Ubuntu Server (<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                            <li><img alt="" src="/static/systems/linux.neon.svg" class="os-logo"> KDE neon (<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                            <li><img alt="" src="/static/systems/linux.ubuntumate.svg" class="os-logo"> Ubuntu MATE</li>
                                            <li><img alt="" src="/static/systems/linux.fedora.svg" class="os-logo"> Fedora</li>
                                            <li><img alt="" src="/static/systems/linux.rhel.svg" class="os-logo"> Red Hat Enterprise Linux</li>
                                            <li><img alt="" src="/static/systems/linux.knoppix.svg" class="os-logo"> Knoppix</li>
                                            <li><img alt="" src="/static/systems/linux.raspberrypi.png" class="os-logo"> Raspberry Pi OS</li>
                                            <li><img alt="" src="/static/systems/linux.ubuntu.svg" class="os-logo"> Ubuntu Touch (<?= l("on ARM64-based Raspberry Pi 3", "sur l'ordinateur basé ARM64 Raspberry Pi 3") ?>)</li>
                                            <li><img alt="" src="/static/systems/linux.cloudready.svg" class="os-logo"> Chromium OS (<?= l("via Cloudready, an official Chrome OS version for regular PCs", "via Cloudready, une version officielle de Chrome OS pour les PC classiques") ?>)</li>
                                            <li>
                                                <details>
                                                    <summary><img alt="" src="/static/systems/linux.android.svg" class="os-logo"> Android</summary>
                                                    <ul>
                                                        <li><img alt="" src="/static/systems/android.1.svg" class="os-logo"> Android 1.5 "Cupcake"</li>
                                                        <li><img alt="" src="/static/systems/android.1.svg" class="os-logo"> Android 2.2 "Froyo" (<?= l("+ successful superuser privilege elevation", "+ élévation aux privilèges super-utilisateur réussie") ?>)</li>
                                                        <li><img alt="" src="/static/systems/android.1.svg" class="os-logo"> Android 2.3 "Gingerbread" (<?= l("+ successful superuser privilege elevation", "+ élévation aux privilèges super-utilisateur réussie") ?>)</li>
                                                        <li><img alt="" src="/static/systems/android.1.svg" class="os-logo"> Android 3.0 "Honeycomb"</li>
                                                        <li><img alt="" src="/static/systems/android.4-0.svg" class="os-logo"> Android 4.0 "Ice Cream Sandwich"</li>
                                                        <li><img alt="" src="/static/systems/android.4-2.svg" class="os-logo"> Android 4.2 "Jellybean"</li>
                                                        <li><img alt="" src="/static/systems/android.4-4.svg" class="os-logo"> Android 4.4.4 "KitKat"</li>
                                                        <li><img alt="" src="/static/systems/android.5.svg" class="os-logo"> Android 5.1 "Lollipop"</li>
                                                        <li><img alt="" src="/static/systems/android.7.svg" class="os-logo"> Android 7.0 "Nougat"</li>
                                                        <li><img alt="" src="/static/systems/android.8.svg" class="os-logo"> Android 8.1 "Oreo"</li>
                                                        <li><img alt="" src="/static/systems/android.9.svg" class="os-logo"> Android 9 "Pie"</li>
                                                        <li><img alt="" src="/static/systems/android.10.svg" class="os-logo"> Android 10 "Q"</li>
                                                        <li><img alt="" src="/static/systems/android.11.svg" class="os-logo"> Android 11 "R"</li>
                                                        <li><img alt="" src="/static/systems/android.12.svg" class="os-logo"> Android 12 "S" (<?= l("including pre-release versions", "dont certaines versions expérimentales") ?>)</li>
                                                    </ul>
                                                </details>
                                            </li>
                                            <li><img alt="" src="/static/systems/linux.fxos.svg" class="os-logo"> Firefox OS (<?= l("via Firefox's device emulator", "via l'émulateur de périphérique de Firefox") ?>)</li>
                                            <li><img alt="" src="/static/systems/linux.pmos.svg" class="os-logo"> postmarketOS (<?= l("via QEMU, provided by postmarketOS's pmboostrap utility", "via QEMU, fourni par l'utilitaire pmbootstrap de postmarketOS") ?>)</li>
                                        </ul>
                                    </details></li>
                                <li>
                                    <details>
                                        <summary><img alt="" src="/static/systems/mac.generic.svg" class="os-logo"> macOS</summary>
                                        <ul>
                                            <li><img alt="" src="/static/systems/mac.9.png" class="os-logo"> MacOS 9.2.2 "Moonlight/LU1"</li>
                                            <li><img alt="" src="/static/systems/mac.prex.png" class="os-logo"> MacOS X 10.5 "Leopard" (PowerPC, <?= l("via an emulator", "via un émulateur") ?>)</li>
                                            <li><img alt="" src="/static/systems/mac.prex.png" class="os-logo"> MacOS X 10.6 "Snow Leopard" (x86-64, <?= l("via late-2009 MacBook Air", "via un MacBook Air de fin 2009") ?>)</li>
                                            <li><img alt="" src="/static/systems/mac.10-11.png" class="os-logo"> OS X 10.11 "El Capitan" (x86-64, <?= l("via late-2009 MacBook Air and a virtual machine", "via un MacBook Air de fin 2009 et une machine virtuelle") ?>)</li>
                                            <li><img alt="" src="/static/systems/mac.11.png" class="os-logo"> macOS 11 "Big Sur" (x86-64, <?= l("via late-2016 MacBook Pro", "via un MacBook Pro de fin 2016") ?>)</li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary><img alt="" src="/static/systems/freebsd.png" class="os-logo"> FreeBSD</summary>
                                        <ul>
                                            <li><img alt="" src="/static/systems/freebsd.png" class="os-logo"> FreeBSD 11.x</li>
                                            <li><img alt="" src="/static/systems/freebsd.png" class="os-logo"> FreeBSD 12.x</li>
                                            <li><img alt="" src="/static/systems/freebsd.png" class="os-logo"> FreeBSD 13.x</li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary><img alt="" src="/static/systems/dos.msdos.svg" class="os-logo"> MS-DOS</summary>
                                        <ul>
                                            <li><img alt="" src="/static/systems/dos.msdos.svg" class="os-logo"> MS-DOS 6.22</li>
                                            <li><img alt="" src="/static/systems/dos.msdos.svg" class="os-logo"> MS-DOS 7.0 (<?= l("standalone", "sans Windows") ?>)</li>
                                            <li><img alt="" src="/static/systems/dos.msdos.svg" class="os-logo"> MS-DOS 7.1 (via Windows 98)</li>
                                            <li><img alt="" src="/static/systems/dos.msdos.svg" class="os-logo"> MS-DOS 8.0 (via Windows Me)</li>
                                            <li><img alt="" src="/static/systems/dos.freedos.svg" class="os-logo"> FreeDOS 1.x</li>
                                        </ul>
                                    </details>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </li>

            <li><?= l("Managing powerful infrastructures (with up to 5 machines) with specific software", "Gérer de puissantes infrastructures (comprenant jusqu'à 5 machines) avec des logiciels spécifiques") ?>
            <ul>
                <li>
                    <details>
                        <summary><?= l("Click here for full list", "Cliquez ici pour avoir la liste complète") ?></summary>
                        <ul>
                            <li>MediaWiki</li>
                            <li><a href="/creations/neutron">Neutron</a></li>
                            <li>Apache</li>
                            <li>Nginx</li>
                            <li>NodeJS</li>
                            <li>GitLab</li>
                            <li>JetBrains Hub</li>
                            <li>JetBrains YouTrack</li>
                            <li>JetBrains TeamCity</li>
                            <li>JetBrains Upsource</li>
                            <li>JetBrains Projector</li>
                            <li>JetBrains Space (in-Cloud)</li>
                            <li>OpenSSH</li>
                            <li>Samba</li>
                            <li><?= l("On-premises Active Directory Forest (with 1 domain controller)", "Forêt Active Directory auto-hébergée (avec 1 contrôleur de domaine)") ?></li>
                            <li>
                                <details>
                                    <summary>Minecraft</summary>
                                    <ul>
                                        <li>Paper</li>
                                        <li>Waterfall</li>
                                        <li>Spigot</li>
                                        <li>Forge</li>
                                        <li>Fabric</li>
                                        <li>Vanilla</li>
                                        <li>Sponge</li>
                                    </ul>
                                </details>
                            </li>
                            <li><a href="/creations/kartik"><?= l("Kartik Game Server", "Serveur de jeu Kartik") ?></a></li>
                            <li>MySQL/MariaDB</li>
                            <li>Nextcloud</li>
                            <li>VNC</li>
                            <li>Data Crow</li>
                            <li>PRONOTE</li>
                            <li>HYPERPLANNING</li>
                            <li>Syncthing</li>
                            <li>rclone</li>
                            <li>Matrix Chat (via Synapse)</li>
                            <li>libvirt (<?= l("as a host for virtual dedicated servers", "comme hôte pour des serveurs dédiés virtuels") ?>)</li>
                            <li>Docker (<?= l("as a host for virtual private servers", "comme hôte pour des serveurs privés virtuels") ?>)</li>
                        </ul>
                    </details>
                </li>
            </ul></li>
            <li><?= l("I sometimes have the chance to visit enterprise datacenters", "J'ai parfois la chance de visiter des centres de données dans les entreprises") ?></li>
            <li>
                <?= l("Programming. Lots of stuff, probably not all useful", "Programmation. Beaucoup de trucs, pas tous forcément utiles") ?>
                <ul>
                    <li>
                        <details>
                            <summary><?= l("Programming languages I know", "Langages de programmations que je connais") ?></summary>
                            <span class="text-muted">✞ = <?= l("language that I stopped learning/using", "langage que j'ai arrêté d'apprendre/d'utiliser") ?><br>✓ = <?= l("language that I still learn/use", "langage que j'apprends/j'utilise toujours") ?></span>
                            <ul>
                                <li>
                                    <details>
                                        <summary><?= l("Real programming languages", "Vrais langages de programmation") ?></summary>
                                        <ul>
                                            <li>Windows Batch <span class="text-warning">✞ 2014-2019</span></li>
                                            <li>Visual Basic <span class="text-warning">✞ 2016-2019</span></li>
                                            <li>POSIX Shell Script (<?= l("mainly Linux and macOS", "principalement Linux et macOS") ?>) <span class="text-success">✓ 2016-</span></li>
                                            <li>JavaScript <span class="text-success">✓ 2017-</span></li>
                                            <li>CSS <span class="text-success">✓ 2018-</span></li>
                                            <li>PHP <span class="text-success">✓ 2019-</span></li>
                                            <li>Kotlin <span class="text-success">✓ 2021-</span> <span class="text-danger">⚠ <?= l("early learning", "début d'apprentissage") ?></span></li>
                                            <li>Python <span class="text-success">✓ 2021-</span> <span class="text-danger">⚠ <?= l("early learning", "début d'apprentissage") ?></span></li>
                                            <li>TypeScript <span class="text-success">✓ 2017-</span></li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary><?= l("Markup languages", "Langages de balisage") ?></summary>
                                        <ul>
                                            <li>HTML <span class="text-success">✓ 2015-</span></li>
                                            <li>XML <span class="text-success">✓ 2016-</span></li>
                                            <li>YAML <span class="text-success">✓ 2018-</span></li>
                                            <li>INI <span class="text-success">✓ 2014-</span></li>
                                            <li>JSON <span class="text-success">✓ 2019-</span></li>
                                        </ul>
                                    </details>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </li>
            <li>
                <?= l("Technologies and frameworks I know and may use", "Des technologies et cadriciels que je connais et que j'utilise potentiellement") ?>
                <ul>
                    <li>
                        <details>
                            <summary><?= l("Show list", "Afficher la liste") ?></summary>

                            <ul>
                                <li>
                                    <details>
                                        <summary><?= l("Frameworks", "Cadriciels") ?></summary>
                                        <ul>
                                            <li>CKEditor 5</li>
                                            <li>Electron JS</li>
                                            <li>Discord.js</li>
                                            <li>VB.NET</li>
                                            <li>NodeJS</li>
                                            <li>jQuery</li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary>Technologies</summary>
                                        <ul>
                                            <li>TCP</li>
                                            <li><?= l("RSA Encryption", "Chiffrement par clé RSA") ?></li>
                                            <li>PGP</li>
                                            <li>cURL</li>
                                            <li>RTP/VoIP</li>
                                            <li>IPv4</li>
                                            <li>IPv6 (<?= l("not completely", "pas totalement") ?>)</li>
                                            <li><?= l("Tor network", "Réseau Tor") ?></li>
                                            <li><?= l("Virtualization", "Virtualisation") ?></li>
                                            <li><?= l("WebSocket", "WebSocket") ?></li>
                                            <li><?= l("CI/CD", "CI/CD") ?></li>
                                            <li><?= l("Version Control System (I mainly use Git and Subversion)", "Systèmes de contrôle de versions (j'utilise principalement Git et Subversion)") ?></li>
                                            <li><i><?= l("I probably omitted some other cool stuff that I know about...", "j'ai probablement oublié quelques trucs géniaux que je connais...") ?></i></li>
                                        </ul>
                                    </details>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </li>
        </ul>

        <h2><?= l("Prove my identity", "Prouver mon identité") ?></h2>
        <blockquote>
            <?= l("You might have or find some other keys I used but for which I've lost the private key so I cannot use those anymore.", "Vous pourriez avoir ou trouver d'autres clés que j'ai utilisé mais dont j'ai perdu la clé privée et que je ne peux donc plus utiliser maintenant.") ?>
        </blockquote>
        <ul>
            <li>
                <details>
                    <summary><?= l("SSH public key", "Clé publique SSH") ?></summary>
                    <?= l("<b>Primary</b> (recommended):", "<b>Primaire</b> (recommandé) :") ?>
                    <div class="code">
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQC77FlV9TKAOZB1v8tUVdit11noSQhfRVke6Hiw8etvCqTThUF9FufkbuQbo5L2Ri1C5hgnBH3giSIbgR1EydOz9dkq0bGw/4Hrze1tA8RDu5APDzviPTjqai/5Nd/nabxESrviC69EFbZl6H1FBrYeDPbCNw3JjxFhbBMEouZ8CAwDdfx0CiOzzvATL4oyqbJts4eaZNdpC+j03Z5pIfW737ec3yL4lkSKN36QrbFUyQogcJpgpuFRCixx1cs+yD9D2ssBVV2bs/o97UFwvWAiYluR6MlmDNzhbCTkXRGpm/02DsjxvjU8BkqxbS7UOoE/0k7l2bIxiFgm05ZGscS1XbiyejFoPTF95+8babSN4Mfj6mkzALxcC8CIgWMy0oqUAuENMtPDAgWgeLGnh0bLV/ETTsqUjgZl1siOqLjifXX/7fW2xmkQtmdvLyNiV8BvBxq9CnzeovRrjXCqOVXctASQBGUcogOB0WVjXgGSREFjUggGRlHTRCWxZTUkzjc= minteck ⭐@DESKTOP-QBKDTCH
                    </div>
                    <?= l("<b>Primary</b> (legacy):", "<b>Primaire</b> (ancienne) :") ?>
                    <div class="code">
                        ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCsQFXfZUN/jlEk0SaJ7RO/68JuLrVPA3lxkRWkmsMm+bcAljCLhEmDzOeH+k56qp33uopM6B/KfZ6kEj8jw80QZe3mpZJ5HU2xI6lu14emXb5TY2J/A0hmiP4LrRxkoWjX/rzVA7WALi2D6WjmAWgkXdNgyz4lCgX5eQsYmdWLBFBFhCNJBJy//EPVdSNTjWeJcNGIM5uOIyyGJSnQ3u+2Z2WzRJ/uRvCEIj1DZ3mOON8NvFV7Kfi7lemDT0gybTO3tDmpuIUDFr2jFueKkgeME5f48GXz4uBFRXTzStq/NVbDswkjoizoHay60EGysCZzvCDs6WzLYzBZ8iS85AAcIeKyt3tBR47IpdHk/ko5hPNNl7YeW4hSJgL+utjw1VBnCqGqYctiEsusmre+c2/yRZHpb8xkmpU9XpEa9Af2mboZrUc6KIttUDZp8Dg2vpFoX4JvoPzgamhyaIwZxcwRTqBX8STaSyf68+sghyyKdN/QWmfuM/767hGkI08s8mc= minteck@Mintecks-Laptop
                    </div>
                    <?= l("<b>Secondary</b>:", "<b>Secondaire</b> :") ?>
                    <div class="code">
                        ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDQHDZ1EfavdLe4kFCAGiXVMlceA+I8EgGZNKSgSpi/ojrsKIZX/HrcUFdttCG18KAWcMzgjn8znMkCIspsdxquFJBNwj8yqKooP9GO02THgVeGQBtH8SnnyFafakfhMPd+WEP9VVuz2EjroxUCvM8VDMg3UDjD7VX1eXp6PB+qYRJTmeUpS+BkwH3gI1tJNJfETR9JAt/GhVVPkD8xV1CJrSWXgmuj0i8YChEEgQQUTT2QRA2JnMzJmx50m41aIMFdoOAck/bun8ePGVUfKQVjAC6gQ4/EAgvbaD5xmiy1i1hXcB4U0NoWhP5YfTtIcoSNmjDDxhBM6M3fACMswqzMy1d+z7CSN+VYgHPl7USK5tGYwL3pGHFAjmcWCFKftVWB/v0/RVH3828WeceXh1IbPyG6sACbG6t9PttDDAYFaiBXp2Ybk6U+uRN1ZkwaCY9yf9TPVc3+VSjC2m/+n7nF3QxI5M7YY6h+inTOJYHRVPssPpVOUQr3FH5kwuS3ORE= minteck@kde-neon
                    </div>
                </details>
            </li>
        </ul>

        <h2><?= l("Website credits", "Crédits du site") ?></h2>
        <ul>
            <li><?= l("Some icons are from", "Certaines icônes sont fournies par") ?> <a href="https://icons8.com">Icons8</a></li>
        </ul>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

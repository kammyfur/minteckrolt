<?php $_TITLE = "Contact me";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div style="z-index: 5;background: #fff;min-height: calc(100vh - 57px);" id="main-box">
    <div id="project-hero" style="background-image:url('/static/hero/contact.jpg');"></div>

    <div class="container">
        <h2><?= l("Contact me", "Me contacter"); ?></h2>
        <p><?= l("Email and Twitter are privileged methods, but you can use any other one you want.", "Le courrier électronique ainsi que Twitter sont les moyens de contact privilégiés, mais vous pouvez utiliser celui que vous voulez.") ?></p>

        <style>
            .os-logo {
                vertical-align: middle;
                margin-right: 5px;
                width: 24px;
            }
        </style>

        <ul>
            <li><b><img alt="" src="/static/contacts/email.png" class="os-logo"> Email</b> — <a
                        href="mailto:contact@minteck.org" target="_blank">contact@minteck.org</a></li>
            <li><b><img alt="" src="/static/contacts/twitter.png" class="os-logo"> Twitter</b> — <a
                        href="https://twitter.com/MinteckPony" target="_blank">@MinteckPony</a> — DMs open!
            </li>
            <li><b><img alt="" src="/static/contacts/reddit.png" class="os-logo"> Reddit</b> — <a
                        href="https://reddit.com/u/Minteck" target="_blank">u/Minteck</a> — DMs open!
            </li>
            <li><b><img alt="" src="/static/contacts/discord.png" class="os-logo"> Discord</b> — @Minteck#2245
                — <?= l("please contact only if we're friends", "merci de me contacter uniquement si nous sommes amis") ?>
            </li>
            <li><b><img alt="" src="/static/contacts/youtube.png" class="os-logo"> YouTube</b> — <a
                        href="https://www.youtube.com/channel/UCfjxe9cs-ovoP1rBVwdMq0Q" target="_blank">Minteck</a></li>
            <li><b><img alt="" src="/static/contacts/music.png" class="os-logo"> YouTube Music</b> — <a
                        href="https://music.youtube.com/channel/UCfjxe9cs-ovoP1rBVwdMq0Q" target="_blank">Minteck</a>
            </li>
            <li><b><img alt="" src="/static/contacts/soundcloud.png" class="os-logo"> SoundCloud</b> — <a
                        href="https://soundcloud.com/minteck" target="_blank">Minteck</a></li>
            <li><b><img alt="" src="/static/contacts/github.png" class="os-logo"> GitHub</b> — <a
                        href="https://github.com/Minteck" target="_blank">Minteck</a></li>
            <li><b><img alt="" src="/static/contacts/kde.png" class="os-logo"> MyKDE</b> — <a
                        href="https://my.kde.org/user/minteck/" target="_blank">Minteck</a></li>
            <li><b><img alt="" src="/static/contacts/matrix.png" class="os-logo"> Matrix</b> — <a
                        href="https://matrix.to/#/@minteck:jae.fi" target="_blank">@minteck:jae.fi</a></li>
            <li><b><img alt="" src="/static/contacts/gravatar.png" class="os-logo"> Gravatar</b> — <a
                        href="https://gravatar.com/minteck" target="_blank">Minteck</a></li>
        </ul>
    </div>

    <br>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

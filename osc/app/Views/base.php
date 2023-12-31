<?php helper('html'); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= link_tag("css/uikit.css"); ?>
    <?= script_tag("js/uikit.js"); ?>
    <?= script_tag("js/uikit-icons.min.js"); ?>
    <?= link_tag("style.css"); ?>
    <?= script_tag("script.js"); ?>
    <meta name="author" content="RAMIRO KAFFO" />
    <meta name="copyright" content="RAMIRO KAFFO" />
    <meta name="description" content="Ceci est un site internet d'une annuaire des Organismes de la société civile" />
    <link rel="icon" href="<?= base_url('file/image/yoonu_logo_frg_whhite.png'); ?>">
    <meta property="og:title" content='<?= esc($title) ?>' />
    <meta property="og:type" content="website" />
    <meta property="og:url" content='<?= esc(current_url()) ?>' />
    <meta property="og:image" content="<?= base_url('file/image/YOONU_LOGO.png'); ?>" />
    <meta property="og:image:secure_url" content="<?= base_url('file/image/YOONU_LOGO.png'); ?>" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <title><?= esc($title) ?></title>
</head>

<body>
    <?= $this->include('templates/header') ?>
    <div class="uk-section uk-light">
        <div class="main-content">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <?= $this->include('templates/footer') ?>
</body>

</html>
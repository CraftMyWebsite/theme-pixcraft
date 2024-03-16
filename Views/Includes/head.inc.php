<?php

use CMW\Controller\Core\CoreController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Uploads\ImagesManager;
use CMW\Manager\Views\View;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/* @var \CMW\Controller\Core\CoreController $core */
/* @var string $title */
/* @var string $description */
/* @var array $includes */

$siteName = Website::getWebsiteName();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:title" content=<?= $siteName ?>>
    <meta property="og:site_name" content="<?= $siteName ?>">
    <meta property="og:description" content="<?= Website::getDescription() ?>">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?= EnvManager::getInstance()->getValue('PATH_URL') ?>">

    <title><?= Website::getTitle() ?></title>
    <meta name="description" content="<?= Website::getDescription() ?>">

    <meta name="author" content="CraftMyWebsite, <?= $siteName ?>">
    <meta name="publisher" content="<?= $siteName ?>">
    <meta name="copyright" content="CraftMyWebsite, <?= $siteName ?>">
    <meta name="robots" content="follow, index, all"/>


    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Css/style.css">
    <link rel="stylesheet" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Admin/Resources/Vendors/Fontawesome-free/Css/fa-all.min.css">

    <?= ImagesManager::getFaviconInclude() ?>

    <?php
    View::loadInclude($includes, "styles");
    ?>


</head>

<script>let intervalCar = <?= ThemeModel::getInstance()->fetchConfigValue('slider_interval')?></script>

<style>
    @font-face {  font-family: angkor;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Angkor-Regular.ttf");  }
    @font-face {  font-family: ibmplexsans;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/IBMPlexSans-Regular.ttf");  }
    @font-face {  font-family: kanit;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Kanit-Regular.ttf");  }
    @font-face {  font-family: lora;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Lora-Regular.ttf");  }
    @font-face {  font-family: madimione;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/MadimiOne-Regular.ttf");  }
    @font-face {  font-family: ojuju;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Ojuju-Regular.ttf");  }
    @font-face {  font-family: opensans;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/OpenSans-Regular.ttf");  }
    @font-face {  font-family: playfairdisplay;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/PlayfairDisplay-Regular.ttf");  }
    @font-face {  font-family: robotocondensed;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/RobotoCondensed-Regular.ttf");  }
    @font-face {  font-family: robotomono;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/PixcraftAssets/Webfonts/RobotoMono-Regular.ttf");  }
    @font-face {  font-family: robotoslab;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/RobotoSlab-Regular.ttf");  }
    @font-face {  font-family: rubik;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Rubik-Regular.ttf");  }
    @font-face {  font-family: ubuntu;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Ubuntu-Regular.ttf");  }
    @font-face {  font-family: roboto;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Roboto-Regular.ttf");  }
    @font-face {  font-family: unbounded;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Unbounded-Regular.ttf");  }
    @font-face {  font-family: montserrat;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Montserrat-Regular.ttf");  }
    @font-face {  font-family: paytone;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/PaytoneOne-Regular.ttf");  }
    @font-face {  font-family: sora;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Sora-Regular.ttf");  }
    @font-face {  font-family: outfit;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Outfit-Regular.ttf");  }
    @font-face {  font-family: alata;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/Alata-Regular.ttf");  }
    @font-face {  font-family: titan;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/TitanOne-Regular.ttf");  }
    @font-face {  font-family: pressstart;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Webfonts/PressStart2P-Regular.ttf");  }

    :root {
        --bg-pixcraft: <?= ThemeModel::getInstance()->fetchConfigValue('main_color')?>;
        --bg-pixcraft-features: #fafafa;
        --color-pixcraft-features: #494949;
        --bg-pixcraft-head: #363232;
        --bg-pixcraft-nav: #f3f3f3;
        --bg-pixcraft-player: #807d7d;
        --nav-color-pixcraft-player: #ffffff;
        --nav-color-pixcraft-hover: #ffffff;
        --head-color-pixcraft: #ffffff;
        --nav-color-pixcraft: #262626;
        --title-color-pixcraft: #ffffff;
        --slider-duration: 1700ms;
        --slider-color: #ffffff;
        --flash-effect-color: #cbe722;
        --flash-effect-duration: 0.5s;
    }


    @keyframes flash {
        0%, 100% { border-color: transparent; }
        50% { border-color: var(--flash-effect-color); }
    }

    .flash-effect {
        padding: 2px;
        border-bottom: 2px solid transparent;
        border-top: 2px solid transparent;
        animation: flash var(--flash-effect-duration) infinite;
    }

    .a-hover:hover {
        color: var(--bg-pixcraft);
    }

    .input-focus:focus {
        border-color: var(--bg-pixcraft);
        box-shadow: 0 0 5px var(--bg-pixcraft);
    }

    .input-focus:checked {
        background-color: var(--bg-pixcraft);
    }

    .head-a:hover {
        color: #0c2136;
    }

    .title-color {
        color: var(--title-color-pixcraft);
    }

    .nav-a:hover {
        background-color: var(--bg-pixcraft);
        color: var(--nav-color-pixcraft-hover);
    }

    .nav-active-a {
        position: relative;
        display: inline-block;
        background-color: var(--bg-pixcraft);
        color: var(--nav-color-pixcraft-hover);
        z-index: 30;
    }

    .nav-active-a:after {
        content: '';
        position: absolute;
        bottom: -12.5px;
        left: 0;
        width: 100%;
        height: 13px;
        background-color: var(--bg-pixcraft);
        clip-path: polygon(0 0, 50% 100%, 100% 0);
        z-index: 50;
    }

    .nav-active-a:before {
        content: '';
        position: absolute;
        top: -5px;
        left: -6%;
        width: 112%;
        height: 5px;
        background-color: var(--bg-pixcraft);
        clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        z-index: 50;
    }

    .title-divider {
        position: relative;
        display: inline-block;
        background-color: var(--bg-pixcraft);
        color: var(--head-color-pixcraft)
        z-index: 30;
    }

    .title-divider:after {
        content: '';
        position: absolute;
        bottom: -12.5px;
        left: 0;
        width: 100%;
        height: 13px;
        background-color: var(--bg-pixcraft);
        z-index: 50;
        clip-path: polygon(0 0, 100% 0, 90% 100%, 80% 0, 70% 100%, 60% 0, 50% 100%, 40% 0, 30% 100%, 20% 0, 10% 100%);
    }

    .forum-title-divider {
        background-color: var(--bg-pixcraft);
    }

    .page-title-divider {
        position: relative;
        display: inline-block;
        background-color: var(--bg-pixcraft);
        color: var(--head-color-pixcraft)
        z-index: 30;
    }

    .page-title-divider:after {
        content: '';
        position: absolute;
        bottom: -12.5px;
        left: 0;
        width: 100%;
        height: 13px;
        background-color: var(--bg-pixcraft);
        z-index: 50;
        clip-path: polygon(100% 0, 50% 100%, 0 0);
    }

    .round-icon {
        width: 150px;
        height: 150px;
        font-size: 40px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .round-icon-step {
        width: 100px;
        height: 100px;
        font-size: 20px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hover-effect {
        transition: transform 0.3s ease-in-out;
        cursor: default;
    }

    .hover-effect:hover {
        transform: translateY(-10px);
    }

    @keyframes shake {
        0%, 100% {transform: translateX(0);}
        10%, 30%, 50%, 70%, 90% {transform: translateX(-5px);}
        20%, 40%, 60%, 80% {transform: translateX(5px);}
    }

    #copyIp:hover {
        animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
        transform: translate3d(0, 0, 0);
        backface-visibility: hidden;
        perspective: 1000px;
        color: var(--bg-pixcraft);
    }

    [data-carousel-item] img {
        filter: blur(3px);
    }

    @media (max-width: 768px) {
        .nav-active-a {
            position: relative;
            display: inline-block;
            background-color: var(--bg-pixcraft);
            color: var(--nav-color-pixcraft-hover);
            z-index: 1;
        }

        .nav-active-a:after {
            content: '';
            position: absolute;
            bottom: -13px;
            left: 0;
            width: 0;
            height: 0;
            background-color: var(--bg-pixcraft);
            clip-path: polygon(0 0, 0 0, 0 0);
            z-index: 2;
        }

        .nav-active-a:before {
            content: '';
            position: absolute;
            top: -5px;
            left: -6%;
            width: 112%;
            height: 15px;
            background-color: var(--bg-pixcraft);
            clip-path: polygon(0 0, 0 0, 0 0);
            z-index: 2;
        }
    }
</style>

<body class="bg-white text-gray-600 font-<?= ThemeModel::getInstance()->fetchConfigValue('website_font') ?> flex flex-col min-h-screen">

<?php
View::loadInclude($includes, "beforeScript");
echo CoreController::getInstance()->cmwWarn();
?>
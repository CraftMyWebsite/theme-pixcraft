<?php

/* @var \CMW\Entity\SimpleCookies\SimpleCookiesSettingsEntity $content */

use CMW\Utils\Website;

Website::setTitle('Cookies');
Website::setDescription('Découvrez pourquoi on à besoin de cookies !');
?>

<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <?= $content ?>
</section>
<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Erreur");
Website::setDescription("Erreur");
?>
<section class="py-8 px-8 md:px-36 2xl:px-96">
    <p class="text-center font-<?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') ?> text-6xl">{errorCode}</p>
    <div class="lg:grid grid-cols-2">
        <div class="flex flex-col justify-center items-center space-y-6 font-bold">
            <p>Il semblerais qu'il y ai un problème !</p>
            <p>Contactez l'administrateur du site pour lui indiquer cette erreur !</p>
            <p>Si vous êtes l'administrateur et que vous rencontrez des difficultés contactez le support de CraftMyWebsite.</p>
            <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Retourner à l'accueil</a>
        </div>
        <div class="flex justify-center">
            <img class="my-2" width="60%" alt="dead" src="<?= ThemeModel::getInstance()->fetchImageLink("404_img") ?>">
        </div>
    </div>
</section>
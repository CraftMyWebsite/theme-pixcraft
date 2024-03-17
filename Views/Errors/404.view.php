<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Page introuvable");
Website::setDescription("Erreur 404");

?>
<section class="py-8 px-8 md:px-36 2xl:px-96">
    <p class="text-center font-paytone text-6xl">404</p>
    <div class="lg:grid grid-cols-2">
        <div class="flex flex-col justify-center items-center space-y-6 font-bold">
            <p>La page que vous demandez n'existe pas ou n'existe plus !</p>
            <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Retourner à l'accueil</a>
        </div>
        <div class="flex justify-center">
            <img class="my-2" width="60%" alt="dead" src="<?= ThemeModel::getInstance()->fetchImageLink("404_img") ?>">
        </div>
    </div>
</section>
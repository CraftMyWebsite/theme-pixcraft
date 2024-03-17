<?php 

use CMW\Model\Contact\ContactModel;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;
/*TITRE ET DESCRIPTION*/

Website::setTitle("CGU");
Website::setDescription("Condition d'utilisation");
?>

<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)"
         class="shadow-xl h-fit">
        <div class="page-title-divider text-center pt-1 w-full">
            <h2 class="title-color font-semibold text-xl uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('footer_desc_condition_use') ?></h2>
        </div>
        <div class="p-4">
            <?= $cgu->getContent() ?>
            <hr class="mt-4">
            <p class="mt-4">Écrit par <b><?= $cgu->getLastEditor()->getPseudo() ?></b>, mis à jour le <?= $cgu->getUpdate() ?></p>
        </div>
    </div>
</section>
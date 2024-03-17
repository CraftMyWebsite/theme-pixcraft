<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Model\Support\SupportResponsesModel;
use CMW\Utils\Website;

/* @var CMW\Entity\Support\SupportEntity[] $privateSupport */

Website::setTitle("Support");
Website::setDescription("Consultez les réponses de nos experts.");
?>

<section class="py-8 px-8 md:px-28 2xl:px-72">
    <div class="mb-4 text-center">
        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>support" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium text-sm rounded px-2 py-1 mr-1 md:mr-2">Retourner au support</a>
    </div>
    <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl col-span-2 h-fit">
        <div class="page-title-divider text-center pt-1 w-full">
            <h2 class="title-color font-semibold text-xl uppercase">Mes demandes</h2>
        </div>
        <div class="p-6">
            <div class="lg:grid grid-cols-3 gap-6 lg:space-x-0 space-x-4">
                <?php foreach ($privateSupport as $support): ?>
                <a href="<?= $support->getUrl() ?>">
                    <div class="shadow-xl lg:mb-4">
                        <h6 class="p-1" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)"><?= mb_strimwidth($support->getQuestion(), 0, 30, '...') ?></h6>
                        <div class="px-4 py-2">
                            <p>Confidentialité : <?= $support->getIsPublicFormatted() ?></p>
                            <p>Statut : <?= $support->getStatusFormatted() ?></p>
                            <p>Date : <?= $support->getCreated() ?></p>
                            <p>Réponses : <?= SupportResponsesModel::getInstance()->countResponses($support->getId()) ?></p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
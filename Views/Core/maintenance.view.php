<?php

/* @var \CMW\Entity\Core\MaintenanceEntity $maintenance */

/*TITRE ET DESCRIPTION*/

use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Maintenance");
Website::setDescription("Maintenance en cours sur le site");
?>
<?php if($maintenance->isEnable()): ?>
<section class="py-8 px-8 md:px-36 2xl:px-96">
    <h1 class="text-center font-<?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') ?>"><?= $maintenance->getTitle() ?></h1>
    <div class="lg:grid grid-cols-2">
        <div class="flex justify-center">
            <img class="my-2" width="60%" alt="dead" src="<?= ThemeModel::getInstance()->fetchImageLink("maintenance_img") ?>">
        </div>
        <div class="flex flex-col justify-center items-center space-y-6 font-bold">
            <p><?= $maintenance->getDescription() ?></p>
            <p>Fin de la maintenance prévu le <?= $maintenance->getTargetDateFormatted() ?></p>
        </div>
    </div>
</section>
<?php endif; ?>

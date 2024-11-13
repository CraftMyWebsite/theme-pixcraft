<?php

use CMW\Controller\Core\SecurityController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Lang\LangManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle("Mot de passe oublié");
Website::setDescription("C'est pas très bien d'oublié son mot de passe ...");
?>

<div class="mx-auto relative p-4 w-full max-w-md h-full md:h-auto mb-6 mt-6">
    <div class="">
        <div class="py-6 px-6 lg:px-8">
            <form class="space-y-6" action="" method="post">
                <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Mail</label>
                    <input name="mail" type="email" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="mail@craftmywebsite.fr" required>
                </div>
                <div class="flex justify-center">
                    <?php SecurityController::getPublicData(); ?>
                </div>
                <button style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" type="submit" class="w-full rounded text-sm px-5 py-2.5 text-center">Réinitialiser mon mot de passe</button>
            </form>
            <label class="block text-sm text-gray-900 mt-4">Je l'ai ! <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login" class="text-blue-500">connexion</a></label>
        </div>
    </div>
</div>
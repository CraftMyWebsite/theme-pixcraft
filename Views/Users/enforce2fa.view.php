<?php

/* @var \CMW\Entity\Users\UserEntity $user */

use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Double facteur obligatoire");
Website::setDescription("Merci d'activer le 2fa !");
?>

<div class="mx-auto relative p-4 w-full max-w-md h-full md:h-auto mb-6 mt-6">
    <div class="">
        <div class="py-6 px-6 lg:px-8">
            <p class="mb-4 text-center"><b>Veuillez activer le double facteur pour pouvoir vous connecter</b></p>
            <div class="text-center">
                <img class="mx-auto" width="50%" src='<?= $user->get2Fa()->getQrCode(250) ?>'
                     alt="QR Code double authentification">
                <span><?= $user->get2Fa()->get2FaSecretDecoded() ?></span>
            </div>
            <form class="space-y-6" action="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>profile/2fa/toggle" method="post">
                <?php (new SecurityManager())->insertHiddenToken() ?>
                <input type="text" hidden="" name="enforce_mail" value="<?= $user->getMail() ?>">
                <div>
                    <label for="code" class="block mb-2 text-sm font-medium">Code d'authentification</label>
                    <input type="text" name="secret" id="secret" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <button style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" type="submit" class="w-full rounded text-sm px-5 py-2.5 text-center">Activer</button>
            </form>
        </div>
    </div>
</div>
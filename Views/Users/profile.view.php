<?php

/* @var \CMW\Entity\Users\UserEntity $user */

use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Votre profil");
Website::setDescription("Éditez votre profil");
?>

<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <div class="lg:grid grid-cols-2 gap-6">
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl h-fit">
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase">Informations personnelles</h2>
            </div>
            <div class="p-4">
                <form class="lg:space-y-6 mt-4" action="profile/update" method="post">
                    <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                    <div class="md:grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Votre mail</label>
                            <input type="email" name="email" id="email" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?= $user->getMail() ?>" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Pseudo minecraft</label>
                            <input type="text" name="pseudo" id="pseudo" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?= $user->getPseudo() ?>" required>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Mot de passe</label>
                            <input type="password" name="password" id="password" placeholder="********" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Confirmation</label>
                            <input type="password" name="passwordVerif" id="passwordVerif" placeholder="********" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" type="submit" class="w-full rounded text-sm px-5 py-2.5 text-center">Appliquer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl h-fit mt-4 lg:mt-0">
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase"><?= $user->getPseudo() ?></h2>
            </div>
            <div class="p-4 flex flex-wrap justify-center">
                <img class="my-2" width="18.5%" alt="player head" src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= $user->getPseudo() ?>&vr=-10&hr=20&vrll=25&vrrl=-25&vrla=-25&vrra=25&hrh=-20">
                <a href="https://www.minecraft.net/fr-fr/msaprofile/mygames/editskin" target="_blank" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="w-full rounded text-sm px-5 py-2.5 text-center">Changer de skin</a>
            </div>
        </div>
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl h-fit mt-4 lg:mt-0">
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase"><?php if ($user->get2Fa()->isEnabled()): ?><i class="fa-solid fa-check"></i><?php else: ?><i class="fa-solid fa-triangle-exclamation"></i><?php endif; ?> Sécurité</h2>
            </div>
            <div class="p-4">
                <?php if (!$user->get2Fa()->isEnabled()): ?>
                    <p class="block mb-2 text-sm font-medium text-gray-900">Pour activer l'authentification à double facteur scannez le QR code dans une application
                        d'authentification (GoogleAuthenticator, Aegis ...)</p>
                <?php else: ?>
                    <p class="block mb-2 text-sm font-medium text-gray-900 text-center">Tout est en règle votre compte est sécurisé.</p>
                <?php endif; ?>
                <div class="lg:grid grid-cols-2">
                    <div>
                        <img class="mx-auto" width="50%" alt="QR Code double authentification" src="<?= $user->get2Fa()->getQrCode(250) ?>">
                        <p class="text-center"><?= $user->get2Fa()->get2FaSecretDecoded() ?></p>
                    </div>
                    <div>
                        <form action="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>profile/2fa/toggle" method="post">
                            <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                            <div class="mt-2">
                                <label for="secret" class="block mb-2 text-sm font-medium text-gray-900">Code d'authentification</label>
                                <input type="text" name="secret" id="secret" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                            </div>
                            <div class="text-center mt-2">
                                <button style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" type="submit" class="w-full rounded text-sm px-5 py-2.5 text-center"><?= $user->get2Fa()->isEnabled() ? 'Désactiver' : 'Activer' ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl h-fit mt-4 lg:mt-0">
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase">Vous nous quittez ?</h2>
            </div>
            <div class="p-4 flex flex-col justify-center items-center">
                <img class="my-2" width="30%" alt="dead" data-cmw-attr="src:global:profile_broken">
                <p class="block mt-2 mb-2 text-sm font-medium text-gray-900">Nous sommes triste de vous voir partir !</p>
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>account/delete/<?= $user->getId() ?>" style="background-color: #e30d0d; color: white" class="w-full rounded text-sm px-5 py-2.5 text-center">Supprimer mon compte</a>
            </div>
        </div>
    </div>
</section>

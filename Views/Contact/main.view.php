<?php

use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Contactez-nous");
Website::setDescription("Contactez-nous dès maintenant");
?>

<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl h-fit">
        <div class="page-title-divider text-center pt-1 w-full">
            <h2 class="title-color font-semibold text-xl uppercase">Nous contacter</h2>
        </div>
        <div class="p-4">
            <form action="" method="post" class="rounded-md p-8">
                <?php (new SecurityManager())->insertHiddenToken() ?>
                <div class="lg:grid grid-cols-2">
                    <div class="px-4 w-full">
                        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900">Votre mail :</label>
                        <input type="email" name="email" id="email-address-icon" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="votre@mail.com" required>
                    </div>
                    <div class="px-4 w-full">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Votre pseudo :</label>
                        <input type="text" name="name" id="name" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="SuperGamer99" required>
                    </div>
                </div>
                <div class="px-4 w-full ">
                    <label for="object" class="block mb-2 text-sm font-medium text-gray-900">Sujet :</label>
                    <input type="text" name="object" id="object" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="J'aimerais voir avec vous ..." required>
                </div>
                <div class="px-4 w-full ">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Votre message :</label>
                    <textarea minlength="50"  id="message" name="content" rows="4" class="input-focus block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300" placeholder="Bonjour," required></textarea>
                </div>
                <div class="flex justify-center mt-4">
                    <?php SecurityController::getPublicData(); ?>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Soumettre <i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Utils\Website;

Website::setTitle("Connexion");
Website::setDescription("Connectez-vous sur " . Website::getWebsiteName());
?>

<div class="mx-auto relative p-4 w-full max-w-md h-full md:h-auto mb-6 mt-6">
    <div class="">
        <div class="py-6 px-6 lg:px-8">
            <form class="space-y-6" action="" method="post">
                <?php (new SecurityManager())->insertHiddenToken() ?>
                <input hidden name="previousRoute" type="text" value="<?= $_SERVER['HTTP_REFERER'] ?>">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Mail</label>
                    <input name="login_email" type="email" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="mail@craftmywebsite.fr" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Mot de passe</label>
                    <div class="flex">
                        <input type="password" name="login_password" id="passwordInput" placeholder="••••••••" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg block w-full p-2.5" required>
                        <div onclick="showPassword()" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="cursor-pointer p-2.5 text-sm font-medium rounded-r-lg"><i class="fa fa-eye-slash" aria-hidden="true"></i></div>
                    </div>

                </div>
                <div class="flex justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="login_keep_connect" name="login_keep_connect" type="checkbox" value="" class="input-focus w-4 h-4 bg-gray-50 rounded border border-gray-300">
                        </div>
                        <label for="login_keep_connect" class="ml-2 text-sm font-medium text-gray-900">Se souvenir de moi</label>
                    </div>
                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login/forgot" class="text-sm text-blue-700">Mot de passe oublié ?</a>
                </div>
                <div class="flex justify-center mt-2">
                    <?php SecurityController::getPublicData(); ?>
                </div>
                <button style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" type="submit" class="w-full rounded text-sm px-5 py-2.5 text-center">Connexion</button>
            </form>
            <label class="block text-sm text-gray-900 mt-4">Pas encore de comtpe, <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>register" class="text-blue-500">s'enregistrer</a></label>
        </div>
    </div>
</div>


<script>
function showPassword() {
  var x = document.getElementById("passwordInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
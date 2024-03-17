<?php

use CMW\Controller\Core\PackageController;
use CMW\Manager\Env\EnvManager;
use CMW\Controller\Users\UsersController;
use CMW\Model\Core\MenusModel;
use CMW\Model\Shop\Cart\ShopCartModel;
use CMW\Model\Shop\Cart\ShopCartItemModel;
use CMW\Model\Users\UsersModel;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

if (PackageController::isInstalled("Shop")) {
    $itemInCart = ShopCartItemModel::getInstance()->countItemsByUserId(UsersModel::getCurrentUser()?->getId(), session_id());
}

$menus = MenusModel::getInstance();
?>

<section style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)" class="py-2 px-2 md:px-24 2xl:px-72">
    <div class="flex justify-between">
        <p class="text-sm">
            <?php if (ThemeModel::getInstance()->fetchConfigValue('header_show_online')): ?>
            <i class="fa-solid fa-user mr-1"></i><span class="mr-1 md:mr-7">0 connectés</span>
            <?php endif; ?>
            <?php if (ThemeModel::getInstance()->fetchConfigValue('header_show_members')): ?>
                <span class="hidden md:inline"><?= UsersModel::getInstance()->countUsers() ?> inscrits</span>
            <?php endif; ?>
        </p>
        <?php if (!UsersController::isUserLogged()): ?>
            <p class="text-sm">
                <?php if (ThemeModel::getInstance()->fetchConfigValue('header_allow_login_button')): ?>
                <a class="head-a mr-1 md:mr-7" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login"><i class="fa-solid fa-lock mr-1"></i> Se connecter</a>
                <?php endif; ?>
                <?php if (ThemeModel::getInstance()->fetchConfigValue('header_allow_register_button')): ?>
                <a class="head-a" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>register">S'inscrire</a>
                <?php endif; ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<section style="background-color: var(--bg-pixcraft-head); color: var(--head-color-pixcraft)" class="py-8 px-8 md:px-36 2xl:px-96">
    <div class="flex justify-between items-center">
        <h3 class="font-paytone">
            <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>">
                <?php if (ThemeModel::getInstance()->fetchConfigValue('header_active_logo')): ?>
                    <img class="hidden md:inline mr-2" alt="logo" width="60px" src="<?= ThemeModel::getInstance()->fetchImageLink("header_img_logo") ?>">
                <?php endif; ?>
                <?php if (ThemeModel::getInstance()->fetchConfigValue('header_active_title')): ?>
                    <?= Website::getWebsiteName() ?>
                <?php endif; ?></a>
        </h3>
        <?php if (ThemeModel::getInstance()->fetchConfigValue('header_alert')): ?>
            <div class="px-16 hidden md:inline">
                <p class="flash-effect"><?= ThemeModel::getInstance()->fetchConfigValue('header_alert_text')?></p>
            </div>
        <?php endif; ?>
        <?php if (UsersController::isUserLogged()): ?>
        <button id="dropdownDelayButton" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" data-dropdown-delay="10" data-dropdown-trigger="hover" style="background-color: var(--bg-pixcraft-player); color: var(--nav-color-pixcraft-player)" class="py-2 px-4 rounded">
            <img class="inline mr-2" alt="player head" width="30px" src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= UsersModel::getCurrentUser()->getPseudo() ?>&headOnly=true"> <?= UsersModel::getCurrentUser()->getPseudo() ?>
        </button>
        <div id="dropdownPlayer" style="background-color: var(--bg-pixcraft-player); color: var(--nav-color-pixcraft-player); z-index: 500;" class="hidden shadow w-full md:w-52 rounded shadow">
            <div aria-labelledby="dropdownDelayButton" class="flex flex-col">
                <?php if (UsersController::isAdminLogged()) : ?>
                <a target="_blank" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>cmw-admin" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-solid fa-screwdriver-wrench"></i> Administration</a>
                <?php endif; ?>
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>profile" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-regular fa-address-card"></i> Profil</a>
                <?php if (PackageController::isInstalled("Shop")): ?>
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>shop/settings" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-solid fa-gears"></i> Paramètres</a>
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>shop/history" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-solid fa-clipboard-list"></i> Commandes</a>
                <?php endif; ?>
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>logout" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2 border-t"><i class="fa-solid fa-lock text-red-400"></i> Déconnexion</a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section style="background-color: var(--bg-pixcraft-nav); color: var(--nav-color-pixcraft)">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto">
        <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <i class="fa-solid fa-bars fa-xl"></i>
        </button>
        <div class="hidden w-full md:inline" id="navbar-multi-level">
            <nav class="flex flex-col md:flex-row items-center justify-center">
                <?php foreach ($menus->getMenus() as $menu): ?>
                    <?php if ($menu->isUserAllowed()): ?>
                        <a href="<?= $menu->getUrl() ?>" id="dropdownNavbarLink" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdown-<?= $menu->getId() ?>" <?= !$menu->isTargetBlank() ?: "target='_blank'" ?> class="<?php if ($menu->urlIsActive()) {echo "nav-active-a";} ?> cursor-pointer nav-a w-full md:w-auto text-center uppercase border-t py-2 md:px-8 md:py-6 md:border-r"><?= $menu->getName() ?></a>
                        <div id="dropdown-<?= $menu->getId() ?>" style="background-color: var(--bg-pixcraft-nav); color: var(--nav-color-pixcraft)" class="z-10 hidden shadow w-full md:w-44">
                            <?php foreach ($menus->getSubMenusByMenu($menu->getId()) as $subMenu): ?>
                                <?php if ($subMenu->isUserAllowed()): ?>
                                    <div aria-labelledby="multiLevelDropdownButton">
                                        <a href="<?= $subMenu->getUrl() ?>" id="doubleDropdownButton" data-dropdown-offset-distance=0 data-dropdown-toggle="doubleDropdown-<?= $subMenu->getId() ?>" class="block cursor-pointer nav-a text-center uppercase border-t py-2" <?= !$subMenu->isTargetBlank() ?: "target='_blank'" ?>><?= $subMenu->getName() ?></a>
                                        <?php foreach ($menus->getSubMenusByMenu($subMenu->getId()) as $subSubMenu): ?>
                                            <?php if ($subSubMenu->isUserAllowed()): ?>
                                                <div id="doubleDropdown-<?= $subMenu->getId() ?>" style="background-color: var(--bg-pixcraft-nav); color: var(--nav-color-pixcraft)" class="z-10 hidden shadow w-full md:w-44">
                                                    <div aria-labelledby="doubleDropdownButton">
                                                        <a href="<?= $subSubMenu->getUrl() ?>" class="block cursor-pointer nav-a text-center uppercase border-t py-2" <?= !$subSubMenu->isTargetBlank() ?: "target='_blank'" ?>><?= $subSubMenu->getName() ?></a>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>
</section>
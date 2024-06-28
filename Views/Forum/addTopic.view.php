<?php

use CMW\Controller\Forum\Admin\ForumPermissionController;
use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Manager\Security\SecurityManager;
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/** @var \CMW\Entity\Forum\ForumCategoryEntity $category */
/** @var \CMW\Entity\Forum\ForumEntity $forum */
/* @var CMW\Model\Forum\ForumModel $forumModel */
/* @var CMW\Controller\Forum\ForumSettingsController $iconNotRead */
/* @var CMW\Controller\Forum\ForumSettingsController $iconImportant */
/* @var CMW\Controller\Forum\ForumSettingsController $iconPin */
/* @var CMW\Controller\Forum\ForumSettingsController $iconClosed */
/* @var CMW\Controller\Forum\ForumSettingsController $iconNotReadColor */
/* @var CMW\Controller\Forum\ForumSettingsController $iconImportantColor */
/* @var CMW\Controller\Forum\ForumSettingsController $iconPinColor */
/* @var CMW\Controller\Forum\ForumSettingsController $iconClosedColor */

Website::setTitle("Forum");
Website::setDescription("Ajouter un sujet");
?>

<section class="lg:grid grid-cols-4 gap-6 sm:mx-12 2xl:mx-72 pt-8">
    <div class="col-span-3">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1">
                <li class="inline-flex items-center">
                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>forum" class="inline-flex items-center text-sm font-medium text-gray-700 a-hover">
                        <?= ThemeModel::getInstance()->fetchConfigValue('forum_breadcrumb_home') ?>
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="<?= $category->getLink() ?>"
                           class="ml-1 text-sm font-medium text-gray-700 a-hover"><?= $category->getName() ?></a>
                    </div>
                </li>
                <?php foreach ($forumModel->getParentByForumId($forum->getId()) as $parent): ?>
                    <li>
                        <div class="flex items-center">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="../../<?= $parent->getLink() ?>"
                               class="ml-1 text-sm font-medium text-gray-700 a-hover"><?= $parent->getName() ?></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </nav>
    </div>
</section>


<section class="my-8 sm:mx-12 2xl:mx-72">
    <div class="rounded-md shadow-lg p-8">

        <h4>Nouveau topic dans : <b><?= $forum->getName() ?></b></h4>
        <form action="" method="post">
            <?php (new SecurityManager())->insertHiddenToken() ?>
            <?php if (UsersController::isAdminLogged() || ForumPermissionController::getInstance()->hasPermission("operator")) : ?>
            <!--
            ADMINISTRATION
            -->
            <div class="border-b p-2">
                <div class="bg-gray-100 rounded-lg p-3">
                    <p class="font-semibold mt-2 text-center">Administration</p>
                    <div class="flex">
                        <div class="flex ml-3 space-x-4">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input name="important" value="1" id="important" type="checkbox" class="input-focus  w-4 h-4 border border-gray-300 rounded bg-gray-50" >
                                </div>
                                <label for="important" class="ml-2 text-sm font-medium text-gray-900"><i style='color: <?= $iconImportantColor?>' class="<?= $iconImportant ?> fa-sm"></i> Important</label>
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input name="pin" id="pin" type="checkbox" value="" class="input-focus  w-4 h-4 border border-gray-300 rounded bg-gray-50" >
                                </div>
                                <label for="pin" class="ml-2 text-sm font-medium text-gray-900"><i style='color: <?= $iconPinColor?>' class="<?= $iconPin ?> fa-sm"></i> Épingler</label>
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input name="disallow_replies" value="1" id="closed" type="checkbox" class="input-focus w-4 h-4 border border-gray-300 rounded bg-gray-50" >
                                </div>
                                <label for="closed" class="ml-2 text-sm font-medium text-gray-900"><i style='color: <?= $iconClosedColor?>' class="<?= $iconClosed ?> fa-sm"></i> Fermer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>


            <!--
            PUBLIC
            -->
            <div class="border-b p-2">
                <div class="bg-gray-100 rounded-lg p-3">
                    <p class="font-semibold mt-4 text-center">Topic<span class="text-red-500">*</span></p>
                <div class="grid gap-6 mb-4 md:grid-cols-2 mt-4">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre du topic<span class="text-red-500">*</span> :</label>
                        <input name="name" id="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg input-focus  block w-full p-2.5" placeholder="Titre du topic" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags : <small>Séparez vos tags par ','</small></label>
                        <input name="tags" type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg input-focus  block w-full p-2.5" placeholder="Tag1,Tag2,Tag3">
                    </div>
                </div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Options :</label>
                    <div class="flex mb-4 ">
                        <div class="flex ml-3 space-x-4">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="follow" type="checkbox" name="followTopic" class="input-focus  w-4 h-4 border border-gray-300 rounded bg-gray-50" checked>
                                </div>
                                <label for="follow" class="ml-2 text-sm font-medium">Suivre la discussion (alérter par mail)</label>
                            </div>
                        </div>
                    </div>
                    <label for="summernote-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenue<span class="text-red-500">*</span> :</label>
                    <textarea minlength="20" name="content"  class="input-focus  w-full tinymce"></textarea>
                </div>
            </div>

            <div class="text-center mt-2">
                <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="text-white font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center"><i class="fa-solid fa-pen-to-square"></i> Poster</button>
            </div>
        </form>
    </div>
</section>
<?php

use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Model\Users\UsersModel;
use CMW\Utils\Website;

/** @var \CMW\Model\Forum\ForumModel $forumModel */
/** @var \CMW\Entity\Forum\ForumCategoryEntity $category */

Website::setTitle("Forum");
Website::setDescription("Consulter les catégorie du Forum");
?>

<section class="lg:grid grid-cols-4 gap-6 sm:mx-12 2xl:mx-72 pt-8">
    <div class="col-span-3">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1">
                <li class="inline-flex items-center">
                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>forum"
                       class="inline-flex items-center text-sm font-medium text-gray-700 a-hover">
                        <?= ThemeModel::getInstance()->fetchConfigValue('forum_breadcrumb_home') ?>
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="<?= $category->getLink() ?>"
                           class="ml-1 text-sm font-medium text-gray-700 md:ml-2 a-hover"><?= $category->getName() ?></a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="flex">
        <div class="relative w-full">
            <form action="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER')?>forum/search" method="POST">
                <?php (new SecurityManager())->insertHiddenToken() ?>
                <input type="text" name="for"
                       class="block p-1 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-gray-100 border-l-2 border border-gray-300 input-focus"
                       placeholder="Rechercher">
                <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)"
                        class="absolute top-0 right-0 p-1 text-sm font-medium border rounded-r-lg">
                    <i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</section>


<section
    class="<?php if (ThemeModel::getInstance()->fetchConfigValue('forum_use_widgets')): ?>lg:grid <?php endif; ?> grid-cols-4 gap-6 my-8 sm:mx-12 2xl:mx-72 ">
    <div class="lg:col-span-3 h-fit">
        <?php if ($category->isUserAllowed()): ?>
            <div class="w-full shadow-md mb-10">
                <div class="flex py-4 title-color forum-title-divider">
                    <div
                        class="md:w-[55%] px-4 font-bold"><?= $category->getFontAwesomeIcon() ?> <?= $category->getName() ?></div>
                    <div
                        class="hidden md:block w-[10%] font-bold text-center"><?= ThemeModel::getInstance()->fetchConfigValue('forum_topics') ?></div>
                    <div
                        class="hidden md:block w-[10%] font-bold text-center"><?= ThemeModel::getInstance()->fetchConfigValue('forum_message') ?></div>
                    <div
                        class="hidden md:block w-[25%] font-bold text-center"><?= ThemeModel::getInstance()->fetchConfigValue('forum_last_message') ?></div>
                </div>
                <?php foreach ($forumModel->getForumByCat($category->getId()) as $forumObj): ?>
                    <?php if ($forumObj->isUserAllowed()): ?>
                        <div class="flex py-6 border-t  hover:bg-gray-50">
                            <div class="md:w-[55%] px-5">
                                <a class="flex"
                                   href="<?= $forumObj->getLink() ?>">
                                    <div
                                        class="py-2 px-2 rounded-xl shadow-connect w-fit h-fit">
                                        <?= $forumObj->getFontAwesomeIcon("fa-xl") ?>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-bold">
                                            <?= $forumObj->getName() ?>
                                        </div>
                                        <div>
                                            <?= $forumObj->getDescription() ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="hidden md:block w-[10%] text-center my-auto"><?= $forumModel->countTopicInForum($forumObj->getId()) ?></div>
                            <div
                                class="hidden md:inline-block w-[10%] text-center my-auto"><?= $forumModel->countMessagesInForum($forumObj->getId()) ?></div>
                            <!--Dernier message-->
                            <div class="hidden md:block w-[25%] my-auto">
                                <div class="flex text-sm">
                                    <?php if ($forumObj->getLastResponse() !== null) : ?>
                                    <a href="<?= $forumObj->getParent()->getLink() ?>/f/<?= $forumObj->getLastResponse()->getResponseTopic()->getForum()->getSlug() ?>/t/<?= $forumObj->getLastResponse()->getResponseTopic()->getSlug() ?>/p<?= $forumObj->getLastResponse()->getPageNumber() ?>/#<?= $forumObj->getLastResponse()?->getId() ?>">
                                        <?php endif; ?>
                                        <div tabindex="0" class="avatar w-10">
                                            <div class="w-fit rounded-full ">
                                                <img
                                                    src="<?= "https://apiv2.craftmywebsite.fr/skins/3d/user=".$forumObj->getLastResponse()?->getUser()->getPseudo()."&headOnly=true" ?? ThemeModel::getInstance()->fetchImageLink("forum_nobody_send_message_img") ?>"/>
                                            </div>
                                        </div>
                                    </a>
                                    <?php if ($forumObj->getLastResponse() !== null) : ?>
                                    <a href="<?= $forumObj->getParent()->getLink() ?>/f/<?= $forumObj->getLastResponse()->getResponseTopic()->getForum()->getSlug() ?>/t/<?= $forumObj->getLastResponse()->getResponseTopic()->getSlug() ?>/p<?= $forumObj->getLastResponse()->getPageNumber() ?>/#<?= $forumObj->getLastResponse()?->getId() ?>">
                                        <?php endif; ?>
                                        <div class="ml-2">
                                            <div
                                                class=""><?= $forumObj->getLastResponse()?->getUser()->getPseudo() ?? ThemeModel::getInstance()->fetchConfigValue('forum_nobody_send_message_text') ?></div>
                                            <div><?= $forumObj->getLastResponse()?->getCreated() ?? "" ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

    <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_use_widgets')): ?>
        <div class="h-fit">
            <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_stats')): ?>
                <div class="w-full shadow-md mb-6">
                    <div class="flex py-4 title-color forum-title-divider border-b">
                        <div class="px-4 font-bold">Stats forum</div>
                    </div>
                    <div class="px-2 py-4">
                        <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_member')): ?>
                            <p><?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_text_member') ?>
                            <b><?= UsersModel::getInstance()->countUsers() ?></b></p><?php endif; ?>
                        <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_messages')): ?>
                            <p><?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_text_messages') ?>
                            <b><?= $forumModel->countAllMessagesInAllForum() ?></b></p><?php endif; ?>
                        <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_topics')): ?>
                            <p><?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_text_topics') ?>
                            <b><?= $forumModel->countAllTopicsInAllForum() ?></b></p><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_discord')): ?>
                <div class="w-full shadow-md mb-6">
                    <div class="">
                        <iframe style="width: 100%"
                                src="https://discord.com/widget?id=<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_content') ?>&theme=light"
                                height="400" allowtransparency="true"
                                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_custom')): ?>
                <div class="w-full shadow-md mb-6">
                    <div class="flex py-4 title-color forum-title-divider border-b">
                        <div
                            class="px-4 font-bold"><?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_custom_title') ?></div>
                    </div>
                    <div class="px-2 py-4">
                        <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_custom_text') ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
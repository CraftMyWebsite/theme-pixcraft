<?php

use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Model\Users\UsersModel;
use CMW\Utils\Website;

/** @var \CMW\Entity\Forum\ForumTopicEntity[] $results */
/* @var CMW\Model\Forum\ForumResponseModel $responseModel */
/* @var CMW\Controller\Forum\ForumSettingsController $iconNotReadColor */
/* @var CMW\Controller\Forum\ForumSettingsController $iconImportantColor */
/* @var CMW\Controller\Forum\ForumSettingsController $iconPinColor */
/* @var CMW\Controller\Forum\ForumSettingsController $iconClosedColor */

Website::setTitle("Forum");
Website::setDescription("Recherchez un sujet dans le forum");
?>

    <section class="lg:grid grid-cols-4 gap-6 sm:mx-12 2xl:mx-72 pt-8">
        <div class="col-span-3">
            <p>Résultat pour : <span class="font-bold"><?= $for ?></span></p>
        </div>
        <div class="flex">
            <div class="relative w-full">
                <form action="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER')?>forum/search" method="POST">
                    <?php SecurityManager::getInstance()->insertHiddenToken() ?>
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
        class="<?php if (ThemeModel::getInstance()->fetchConfigValue('forum','forum_use_widgets')): ?>lg:grid <?php endif; ?> grid-cols-4 gap-6 my-8 sm:mx-12 2xl:mx-72 ">
        <div class="lg:col-span-3 h-fit">
            <?php if (empty($results)): ?>
                <div>
                    <h1 class="font-extrabold mb-4 text-xl md:text-6xl">Nous n'avons rien trouvé !</h1>
                </div>

            <?php else: ?>
            <div class="w-full shadow-md">
                <div class="flex py-4 title-color forum-title-divider">
                    <div class="md:w-[25%] px-4 font-bold">Topics</div>
                    <div class="hidden md:block w-[40%] font-bold text-center">Contenue</div>
                    <div class="hidden md:block w-[10%] font-bold text-center">Réponses</div>
                    <div class="hidden md:block w-[25%] font-bold text-center">Posté par</div>
                </div>
                <?php foreach ($results as $result): ?>
                <div class="relative flex py-2 border-t bg-gray-50 hover:bg-gray-100">
                    <div class="md:w-[25%] px-5 relative">
                        <a class="flex flex-wrap hover:text-blue-800" href="<?= $result->getLink() ?>">
                            <div class="">
                                <p><?php if ($result->getPrefixId()): ?><span class="px-2 text-white rounded-lg"
                                                                              style="color: <?= $result->getPrefixTextColor() ?>; background: <?= $result->getPrefixColor() ?>"><?= $result->getPrefixName() ?></span> <?php endif; ?>
                                    <?= mb_strimwidth($result->getName(), 0, 65, '...') ?>
                                    <?= $result->isImportant() ? "
                            <i data-tooltip-target='tooltip-important' style='color: $iconImportantColor' class='<?= $iconImportant ?> fa-sm'></i>
                            <span id='tooltip-important' role='tooltip' class='absolute z-10 invisible inline-block p-2 text-sm font-medium text-white bg-gray-700 rounded-lg'>
                                Important
                            </span>
                            " : "" ?>
                                    <?= $result->isPinned() ? "
                            <i data-tooltip-target='tooltip-pined' style='color: $iconPinColor' class='<?= $iconPin ?> fa-sm ml-2'></i>
                            <span id='tooltip-pined' role='tooltip' class='absolute z-10 invisible inline-block p-2 text-sm font-medium text-white bg-gray-700 rounded-lg'>
                                Épinglé
                            </span>
                             " : "" ?>
                                    <?= $result->isDisallowReplies() ? "
                            <i data-tooltip-target='tooltip-closed' style='color: $iconClosedColor' class='<?= $iconClosed ?> fa-sm ml-2'></i>
                            <span id='tooltip-closed' role='tooltip' class='absolute z-10 invisible inline-block p-2 text-sm font-medium text-white bg-gray-700 rounded-lg'>
                                Fermé
                            </span>
                             " : "" ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="hidden md:block w-[40%] text-center my-auto"><?= mb_strimwidth($result->getContent(), 0, 150, '...') ?></div>
                    <div class="hidden md:inline-block w-[10%] text-center my-auto"><?= $responseModel->countResponseInTopic($result->getId()) ?></div>
                    <div class="hidden md:block w-[25%] my-auto">
                        <div class="flex text-sm">
                            <a href="#">
                                <div tabindex="0" class="avatar w-10">
                                    <div class="w-fit">
                                        <img src="<?= $result->getUser()->getUserPicture()->getImage() ?>" />
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="ml-2">
                                    <div class=""><?= $result->getUser()->getPseudo() ?></div>
                                    <div><?= $result->getCreated() ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div>

        <div data-cmw-visible="forum:forum_use_widgets" class="h-fit">
            <div data-cmw-visible="forum:forum_widgets_show_stats" class="w-full shadow-md mb-6">
                <div class="flex py-4 title-color forum-title-divider border-b">
                    <div class="px-4 font-bold">Stats forum</div>
                </div>
                <div class="px-2 py-4">
                    <div data-cmw-visible="forum:forum_widgets_show_member">
                        <span data-cmw="forum:forum_widgets_text_member"></span>
                        <b><?= UsersModel::getInstance()->countUsers() ?></b>
                    </div>
                    <div data-cmw-visible="forum:forum_widgets_show_messages">
                        <span data-cmw="forum:forum_widgets_text_messages"></span>
                        <b><?= $forumModel->countAllMessagesInAllForum() ?></b>
                    </div>
                    <div data-cmw-visible="forum:forum_widgets_show_topics">
                        <span data-cmw="forum:forum_widgets_text_topics"></span>
                        <b><?= $forumModel->countAllTopicsInAllForum() ?></b>
                    </div>
                </div>
            </div>
            <div data-cmw-visible="forum:forum_widgets_show_discord" class="w-full shadow-md mb-6">
                <div class="">
                    <iframe style="width: 100%"
                            src="https://discord.com/widget?id=<?= ThemeModel::getInstance()->fetchConfigValue('forum','forum_widgets_content_id') ?>&theme=light"
                            height="400" allowtransparency="true"
                            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                </div>
            </div>
            <div data-cmw-visible="forum:forum_widgets_show_custom" class="w-full shadow-md mb-6">
                <div class="flex py-4 title-color forum-title-divider border-b">
                    <div
                        class="px-4 font-bold" data-cmw="forum:forum_widgets_custom_title"></div>
                </div>
                <div class="px-2 py-4" data-cmw="forum:forum_widgets_custom_text">
                </div>
            </div>
        </div>
    </section>
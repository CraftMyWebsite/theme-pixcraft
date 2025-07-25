<?php

use CMW\Controller\Users\UsersController;
use CMW\Controller\Users\UsersSettingsController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Model\Users\UsersModel;
use CMW\Utils\Website;

/** @var \CMW\Model\Forum\ForumModel $forumModel */
/** @var \CMW\Model\Forum\ForumCategoryModel $categoryModel */
Website::setTitle("Forum");
Website::setDescription("Consultez les sujets de discussion et répondez aux questions posées par les membres de votre communauté.");
?>

<?php if ($categoryModel->getCategories() == null): ?>
    <?php if (UsersController::isAdminLogged()): ?>
        <section class="py-8">
            <div class="container mx-auto px-4 relative">
                <div id="alert-additional-content-4"
                     class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
                     role="alert">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium">Vous n'avez pas encore créer de forum</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm">
                        Rendez-vous dans le panel d'administration pour commencer à l'utiliser<br>Seuls les
                        administrateurs voient ce message !
                    </div>
                    <div class="flex">
                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>cmw-admin/forum/manage"
                           target="_blank" type="button"
                           class="text-white bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-yellow-300 dark:text-gray-800 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">
                            <p><i class="fa-solid fa-gears"></i> Gestion du forum</p>
                        </a>
                        <button type="button"
                                class="text-yellow-800 bg-transparent border border-yellow-800 hover:bg-yellow-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-yellow-300 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-gray-800 dark:focus:ring-yellow-800"
                                data-dismiss-target="#alert-additional-content-4" aria-label="Close">
                            <p><i class="fa-solid fa-eye-slash"></i> Masquer</p>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="py-8">
            <div class="container mx-auto px-4 relative">
                <div id="alert-additional-content-4"
                     class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
                     role="alert">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium">Il n'existe pour le moment aucun forum</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm">
                        Revenez un peu plus tard nos administrateurs travaillent actuellement dessus !
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php else: ?>

    <section class="lg:grid grid-cols-4 gap-6 sm:mx-12 2xl:mx-72 pt-8">
        <div class="col-span-3">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1">
                    <li class="inline-flex items-center">
                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>forum"
                           class="inline-flex items-center text-sm font-medium text-gray-700 a-hover" data-cmw="forum:forum_breadcrumb_home">
                        </a>
                    </li>
                </ol>
            </nav>
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

            <?php foreach ($categoryModel->getCategories() as $category) : ?>
                <?php if ($category->isUserAllowed()): ?>
                    <div class="w-full shadow-md mb-10">
                        <div class="flex py-4 title-color forum-title-divider">
                            <a href="<?= $category->getLink() ?>"
                               class="md:w-[55%] px-4 font-bold"><?= $category->getFontAwesomeIcon() ?> <?= $category->getName() ?></a>
                            <div
                                class="hidden md:block w-[10%] font-bold text-center" data-cmw="forum:forum_topics"></div>
                            <div
                                class="hidden md:block w-[10%] font-bold text-center" data-cmw="forum:forum_message"></div>
                            <div
                                class="hidden md:block w-[25%] font-bold text-center" data-cmw="forum:forum_last_message"></div>
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
                                                        class=""><?= $forumObj->getLastResponse()?->getUser()->getPseudo() ?? ThemeModel::getInstance()->fetchConfigValue('forum','forum_nobody_send_message_text') ?></div>
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
            <?php endforeach; ?>
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
<?php endif; ?>
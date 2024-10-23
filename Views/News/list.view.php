<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
$newsList = \CMW\Model\News\NewsModel::getInstance()->getSomeNews(ThemeModel::getInstance()->fetchConfigValue('news_page_number_display'), 'DESC');
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle(ThemeModel::getInstance()->fetchConfigValue('news_title'));
Website::setDescription(ThemeModel::getInstance()->fetchConfigValue('news_description'));
?>

<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <div class="lg:grid xl:grid-cols-3 2xl:grid-cols-4 gap-16">
        <?php foreach ($newsList as $news): ?>
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl mb-8 lg:mb-0 h-fit">
            <div class="relative p-4" style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)">
                <img class="mx-auto" width="50%" height="50%" src="<?= $news->getImageLink() ?>" alt="news">
                <div class="absolute top-0 left-1">
                    <p class="text-sm"><?= $news->getAuthor()->getPseudo() ?></p>
                </div>
                <div class="absolute top-0 right-1">
                    <p class="text-sm"><?= $news->getDateCreated() ?></p>
                </div>
            </div>
            <div class="p-2">
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $news->getSlug() ?>"><h5 class="text-center font-bold"><?= $news->getTitle() ?></h5></a>
                <p class="text-justify text-sm"><?= $news->getDescription() ?></p>
                <div class="flex justify-between items-center mt-4">

                    <div class="cursor-pointer">
                        <?php if ($news->isLikesStatus()): ?>
                                <span data-tooltip-target="<?php if ($news->getLikes()->userCanLike()) {echo "tooltip-liked";} else {echo "tooltip-like";} ?>">
                                <span class="text-base"><?= $news->getLikes()->getTotal() ?>
                                    <?php if ($news->getLikes()->userCanLike()): ?>
                                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                                        <div id="tooltip-liked" role="tooltip" class="hidden lg:inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                                        <?php if(UsersController::isUserLogged()) {echo "Vous aimez déjà !";} else {echo "Connectez-vous pour aimé !";} ?>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <?php else: ?>
                                        <a href="<?= $news->getLikes()->getSendLike() ?>"><i class="fa-regular fa-heart"></i></a>
                                        <div id="tooltip-like" role="tooltip" class="hidden lg:inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                                        Merci pour votre soutien !
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <?php endif; ?>
                                </span>
                                </span>
                        <?php endif; ?>
                    </div>
                    <a style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="py-1 px-2 text-xs" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $news->getSlug() ?>">Lire la suite ></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
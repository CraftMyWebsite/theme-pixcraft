<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle(ThemeModel::getInstance()->fetchConfigValue('wiki_title'));
Website::setDescription(ThemeModel::getInstance()->fetchConfigValue('wiki_description'));
?>
<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <div class="lg:grid grid-cols-3 gap-6">
        <div class="shadow-xl h-fit">
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('wiki_menu_title') ?></h2>
            </div>
            <div class="px-4 pb-2">
                <?php foreach ($categories as $categorie): ?>
                    <div class="font-medium text-gray-500 mt-6 cursor-default text-center"><?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_categorie_icon')): ?><i class="<?= $categorie->getIcon() ?>"></i><?php endif; ?> <?= $categorie->getName() ?></div>
                    <?php foreach ($categorie?->getArticles() as $menuArticle): ?>
                        <a href="<?=   EnvManager::getInstance()->getValue("PATH_SUBFOLDER") . "wiki/" . $categorie->getSlug() . "/" . $menuArticle->getSlug() ?>">
                            <div class="px-2 py-2 cursor-pointer hover:bg-gray-200"><?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_article_categorie_icon')): ?><i class="<?= $menuArticle->getIcon() ?>"></i><?php endif; ?> <?= $menuArticle->getTitle() ?></div>
                        </a>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="shadow-xl col-span-2 h-fit">
            <?php if($article !== null): ?>
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase"><?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_article_icon')): ?><i class="<?= $article->getIcon() ?>"></i><?php endif; ?> <?= $article->getTitle() ?></h2>
            </div>
            <div class="p-4">
                <?= $article->getContent() ?>
                <hr>
                <div class="flex flex-wrap justify-between items-center mt-2">
                    <?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_creation_date')): ?><p class="text-xs">Crée le : <?= $article->getDateCreate() ?></p><?php endif; ?>
                    <?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_autor')): ?><p class="text-xs py-1 px-2 bg-gray-300"><?= $article->getAuthor()->getPseudo() ?></p><?php endif; ?>
                    <?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_edit_date')): ?><p class="text-xs">Modifié le : <?= $article->getDateUpdate() ?></p><?php endif; ?>
                </div>
            </div>
            <?php elseif($firstArticle === null && $article !== null): ?>
                <div class="page-title-divider text-center pt-1 w-full">
                    <h2 class="title-color font-semibold text-xl uppercase">Aucun article</h2>
                </div>
                <div class="p-4">
                    Nos administrateurs travaille dessus !
                    <hr>
                    <div class="flex flex-wrap justify-between items-center mt-2">
                        <p class="text-xs">Crée le : Jamasi</p>
                        <p class="text-xs py-1 px-2 bg-gray-300">Personne</p>
                        <p class="text-xs">Modifié le : Jamais</p>
                    </div>
                </div>
            <?php else: ?>
                <div class="page-title-divider text-center pt-1 w-full">
                    <h2 class="title-color font-semibold text-xl uppercase"><?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_article_icon')): ?><i class="<?= $firstArticle->getIcon() ?>"></i><?php endif; ?> <?= $firstArticle->getTitle() ?></h2>
                </div>
                <div class="p-4">
                    <?= $firstArticle->getContent() ?>
                    <hr>
                    <div class="flex flex-wrap justify-between items-center mt-2">
                        <?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_creation_date')): ?><p class="text-xs">Crée le : <?= $firstArticle->getDateCreate() ?></p><?php endif; ?>
                        <?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_autor')): ?><p class="text-xs py-1 px-2 bg-gray-300"><?= $firstArticle->getAuthor()->getPseudo() ?></p><?php endif; ?>
                        <?php if(ThemeModel::getInstance()->fetchConfigValue('wiki_display_edit_date')): ?><p class="text-xs">Modifié le : <?= $firstArticle->getDateUpdate() ?></p><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

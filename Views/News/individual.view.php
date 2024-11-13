<?php

use CMW\Manager\Env\EnvManager;
use CMW\Utils\Utils;
/* @var \CMW\Entity\News\NewsEntity $news */
use CMW\Model\Core\ThemeModel;
use CMW\Manager\Security\SecurityManager;
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle(ThemeModel::getInstance()->fetchConfigValue('news_title') . ' - '. $news->getTitle());
Website::setDescription(ThemeModel::getInstance()->fetchConfigValue('news_description'));
?>
<section class="pt-8 lg:pt-16 px-8 md:px-36 2xl:px-96">
    <div class="lg:grid grid-cols-4 gap-16">
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl mb-8 lg:mb-0 h-fit">
            <div class="relative p-4" style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)">
                <img class="mx-auto" width="50%" height="50%" src="<?= $news->getImageLink() ?>" alt="news">
            </div>
            <div class="text-center p-2">
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
                <a style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="py-1 px-2 text-xs" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news"> < Revenir au news</a>
            </div>
        </div>
        <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl col-span-3 h-fit">
            <div class="page-title-divider text-center pt-1 w-full">
                <h2 class="title-color font-semibold text-xl uppercase"><?= $news->getTitle() ?></h2>
            </div>
            <div class="p-4">
                <?= $news->getContent() ?>
                <hr>
                <div class="flex flex-wrap justify-between items-center mt-2">
                    <p class="text-xs">Crée le : <?= $news->getDateCreated() ?></p>
                    <p class="text-xs py-1 px-2 bg-gray-300"><?= $news->getAuthor()->getPseudo() ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($news->isCommentsStatus()): ?>
<section class="mt-8 pb-8 lg:pb-16 px-8 md:px-36 2xl:px-96">
    <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl col-span-3 h-fit">
        <div class="page-title-divider text-center pt-1 w-full">
            <h2 class="title-color font-semibold text-xl uppercase">Espace commentaire</h2>
        </div>
        <div class="p-4">
            <?php foreach ($news->getComments() as $comment): ?>
            <div class="rounded-lg shadow md:grid md:grid-cols-5 py-4 pr-4 mb-4">
                <div class="">
                    <img class="hidden lg:block mx-auto rounded-lg border border-gray-300 shadow-xl" height="50%" width="50%" src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= $comment->getUser()->getPseudo() ?>&headOnly=true" alt="...">
                </div>
                <div class="col-span-4 px-4 md:px-0">
                    <div class="flex justify-between">
                        <p class="font-bold"><?= $comment->getUser()->getPseudo() ?> :</p>
                        <p class="bg-gray-300 font-medium inline-block px-3 py-1 rounded-sm text-xs uppercase"><?= $comment->getDate() ?></p>
                    </div>
                    <div><?= $comment->getContent() ?></div>
                    <div class="flex justify-end">
                        <div class="cursor-pointer">
                                <span data-tooltip-target="<?php if ($comment->userCanLike()) {echo "tooltip-liked";} else {echo "tooltip-like";} ?>">
                                <span class="text-base"><?= $comment->getLikes()->getTotal() ?>
                                    <?php if ($comment->userCanLike()): ?>
                                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                                        <div id="tooltip-liked" role="tooltip" class="hidden lg:inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                                        <?php if(UsersController::isUserLogged()) {echo "Vous aimez déjà !";} else {echo "Connectez-vous pour aimé !";} ?>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <?php else: ?>
                                        <a href="<?= $comment->getSendLike() ?>"><i class="fa-regular fa-heart"></i></a>
                                        <div id="tooltip-like" role="tooltip" class="hidden lg:inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                                        Merci pour votre soutien !
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <?php endif; ?>
                                </span>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <hr>
            <div class="rounded-lg shadow mt-4 mb-4 pb-4">
                <form action="<?= $news->sendComments() ?>" method="post" class="rounded-md">
                    <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                    <div class="px-4 w-full mt-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Votre commentaire :</label>
                        <textarea minlength="20"  id="message" name="comments" rows="4" class="input-focus block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300" placeholder="Bonjour," required></textarea>
                    </div>
                    <div class="text-center mt-4">
                        <?php if(UsersController::isUserLogged()): ?>
                        <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Commenter <i class="fa-solid fa-comments"></i></button>
                        <?php else: ?>
                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login" type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Connexion <i class="fa-solid fa-user"></i></a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
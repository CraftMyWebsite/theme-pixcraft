<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Manager\Security\SecurityManager;
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/* @var \CMW\Entity\Forum\ForumCategoryEntity $category */
/* @var CMW\Entity\Forum\ForumEntity $forum */

Website::setTitle("Forum");
Website::setDescription("Éditez un topic");
?>

<section class="lg:grid grid-cols-4 gap-6 sm:mx-12 2xl:mx-72 pt-8">
    <div class="col-span-3">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1">
                <li class="inline-flex items-center">
                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>forum" class="inline-flex items-center text-sm font-medium text-gray-700 a-hover">
                        <?= ThemeModel::getInstance()->fetchConfigValue('forum','forum_breadcrumb_home') ?>
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="<?= $category->getLink() ?>"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 a-hover"><?= $category->getName() ?></a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="<?= $forum->getLink() ?>"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 a-hover"><?= $forum->getName() ?></a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="<?= $topic->getLink($category->getLink(), $forum->getSlug()) ?>"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 a-hover"><?= $topic->getName() ?></a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>


<?php if(UsersController::isUserLogged()): ?>
<section class="my-8 sm:mx-12 2xl:mx-72">
    <div class="rounded-md shadow-lg p-8">

        <h4>Edition du topic : <?= $topic->getName() ?></b></h4>
        <form action="" method="post">
            <?php SecurityManager::getInstance()->insertHiddenToken() ?>
            <div class="border-b p-2">
                <div class="bg-gray-100 rounded-lg p-3">
                    <p class="font-semibold mt-4 text-center">Topic<span class="text-red-500">*</span></p>
                <div class="grid gap-6 mb-4 md:grid-cols-2 mt-4">
                    <div>
                    	<input type="text" name="topicId" hidden value="<?= $topic->getId() ?>">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre du topic<span class="text-red-500">*</span> :</label>
                        <input name="name" id="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg input-focus block w-full p-2.5" placeholder="Titre du topic" required value="<?= $topic->getName() ?>">
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags : <small>Séparez vos tags par ','</small></label>
                        <input name="tags" type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg input-focus block w-full p-2.5" placeholder="Tag1,Tag2,Tag3" value="<?php foreach ($topic->getTags() as $tag) {echo "" . $tag->getContent() . ",";} ?>">
                    </div>
                </div>
                    <label for="summernote-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenue<span class="text-red-500">*</span> :</label>
                    <textarea name="content" class="w-full tinymce"><?= $topic->getContent() ?></textarea>
                </div>
            </div>

            <div class="text-center mt-2">
                <button style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" type="submit" class="text-white font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center"><i class="fa-solid fa-pen-to-square"></i> Éditer</button>
            </div>
        </form>
    </div>
</section>

<?php else: ?>
        <section class="py-8 ">
            <div class="container mx-auto px-4 relative">
                <div id="alert-additional-content-4" class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium">Oups !!</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm">
                        Vous devez vous connecter pour pouvoir poster un nouveau topic !
                        <div class="flex mt-2">
                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login" type="button" class="text-white bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center">
                            <p>Connexion</p>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </section>

<?php endif; ?>
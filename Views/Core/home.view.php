<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/*Check installed package*/
use CMW\Controller\Core\PackageController;
/*NEWS BASIC NEED*/
use CMW\Model\News\NewsModel;
if (PackageController::isInstalled("News")) {
    $newsLists = new newsModel;
    $newsList = $newsLists->getSomeNews( ThemeModel::getInstance()->fetchConfigValue('home-news','news_number_display'));
}

/*CONTACT BASIC NEDD*/
use CMW\Model\Contact\ContactModel;


/*TITRE ET DESCRIPTION*/
Website::setTitle(Website::getWebsiteDescription());
Website::setDescription(Website::getWebsiteDescription());
?>
    <!-- SLIDER -->
    <section data-cmw-visible="home-slider:home_use_slider">
        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
            <div class="relative h-56 sm:h-[20rem] overflow-hidden md:h-[30rem] lg:h-[37rem] xl:h-[38rem] 2xl:h-[42.5rem]" style="clip-path: polygon(0 90%, 0 0, 100% 0, 100% 90%, 90% 100%, 80% 100%, 50% 95%, 20% 100%, 10% 100%);">
                <div data-cmw-visible="home-slider:use_slide_1" style="transition-duration: var(--slider-duration)" class="hidden ease-in-out" data-carousel-item>
                    <img data-cmw-attr="src:home-slider:slider_img_1" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div style="color: var(--slider-color)" class="absolute w-full mt-8 space-y-4 md:mt-44 md:space-y-11 text-center">
                        <h1 data-cmw-class="global:website_secondary_font" class="text-2xl md:text-6xl font-thin" data-cmw="home-slider:slider_title_1"></h1>
                        <h1 data-cmw-class="global:website_secondary_font" class="font-bold text-base md:text-2xl" data-cmw="home-slider:slider_text_1"></h1>
                    </div>
                </div>
                <div data-cmw-visible="home-slider:use_slide_2" style="transition-duration: var(--slider-duration)" class="hidden ease-in-out" data-carousel-item>
                    <img data-cmw-attr="src:home-slider:slider_img_2" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div style="color: var(--slider-color)" class="absolute w-full mt-8 space-y-4 md:mt-44 md:space-y-11 text-center">
                        <h1 data-cmw-class="global:website_secondary_font" class="text-2xl md:text-6xl font-thin" data-cmw="home-slider:slider_title_2"></h1>
                        <h1 data-cmw-class="global:website_secondary_font" class="font-bold text-base md:text-2xl" data-cmw="home-slider:slider_text_2"></h1>
                    </div>
                </div>
                <div data-cmw-visible="home-slider:use_slide_3" style="transition-duration: var(--slider-duration)" class="hidden ease-in-out" data-carousel-item>
                    <img data-cmw-attr="src:home-slider:slider_img_3" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div style="color: var(--slider-color)" class="absolute w-full mt-8 space-y-4 md:mt-44 md:space-y-11 text-center">
                        <h1 data-cmw-class="global:website_secondary_font" class="text-2xl md:text-6xl font-thin" data-cmw="home-slider:slider_title_3"></h1>
                        <h1 data-cmw-class="global:website_secondary_font" class="font-bold text-base md:text-2xl" data-cmw="home-slider:slider_text_3"></h1>
                    </div>
                </div>
                <div data-cmw-visible="home-slider:use_slide_4" style="transition-duration: var(--slider-duration)" class="hidden ease-in-out" data-carousel-item>
                    <img data-cmw-attr="src:home-slider:slider_img_4" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div style="color: var(--slider-color)" class="absolute w-full mt-8 space-y-4 md:mt-44 md:space-y-11 text-center">
                        <h1 data-cmw-class="global:website_secondary_font" class="text-2xl md:text-6xl font-thin" data-cmw="home-slider:slider_title_4"></h1>
                        <h1 data-cmw-class="global:website_secondary_font" class="font-bold text-base md:text-2xl" data-cmw="home-slider:slider_text_4"></h1>
                    </div>
                </div>
                <div data-cmw-visible="home-slider:use_slide_5" style="transition-duration: var(--slider-duration)" class="hidden ease-in-out" data-carousel-item>
                    <img data-cmw-attr="src:home-slider:slider_img_5" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div style="color: var(--slider-color)" class="absolute w-full mt-8 space-y-4 md:mt-44 md:space-y-11 text-center">
                        <h1 data-cmw-class="global:website_secondary_font" class="text-2xl md:text-6xl font-thin" data-cmw="home-slider:slider_title_5"></h1>
                        <h1 data-cmw-class="global:website_secondary_font" class="font-bold text-base md:text-2xl" data-cmw="home-slider:slider_text_5"></h1>
                    </div>
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-8 md:bottom-14 left-1/2 space-x-2 md:space-x-6 rtl:space-x-reverse">
                <button data-cmw-visible="home-slider:use_slide_1" type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button data-cmw-visible="home-slider:use_slide_2" type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button data-cmw-visible="home-slider:use_slide_3" type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button data-cmw-visible="home-slider:use_slide_4" type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button data-cmw-visible="home-slider:use_slide_5" type="button" class="w-2 h-2 md:w-3 md:h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer" data-carousel-prev>
        <span class="inline-flex items-center justify-center">
            <i class="fa-solid fa-circle-chevron-left md:text-4xl text-white"></i>
        </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer" data-carousel-next>
        <span class="inline-flex items-center justify-center">
            <i class="fa-solid fa-circle-chevron-right md:text-4xl text-white"></i>
        </span>
            </button>
        </div>
    </section>

    <section data-cmw-visible="home-feature:feature_section_active" class="mt-9">
        <div class="title-divider text-center py-4 w-full">
            <h2 data-cmw-class="global:website_secondary_font" class=" font-semibold text-2xl uppercase text-white" data-cmw="home-feature:feature_section_title"></h2>
        </div>
        <div class="pt-16 lg:pb-8 px-8 md:px-36 2xl:px-96">
            <div class="lg:grid grid-cols-3 gap-32">
                <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl mb-8 lg:mb-0">
                    <div class="p-4" style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)">
                        <img class="mx-auto" width="50%" height="50%" data-cmw-attr="src:home-feature:feature_img_1" alt="feat1">
                    </div>
                    <div class="p-4">
                        <h4 class="text-center font-bold" data-cmw="home-feature:feature_title_1"></h4>
                        <p class="text-justify" data-cmw="home-feature:feature_description_1"></p>
                    </div>
                </div>
                <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl mb-8 lg:mb-0">
                    <div class="p-4" style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)">
                        <img class="mx-auto" width="50%" height="50%" data-cmw-attr="src:home-feature:feature_img_2" alt="feat1">
                    </div>
                    <div class="p-4">
                        <h4 class="text-center font-bold" data-cmw="home-feature:feature_title_2"></h4>
                        <p class="text-justify" data-cmw="home-feature:feature_description_2"></p>
                    </div>
                </div>
                <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl mb-8 lg:mb-0">
                    <div class="p-4" style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)">
                        <img class="mx-auto" width="50%" height="50%" data-cmw-attr="src:home-feature:feature_img_3" alt="feat1">
                    </div>
                    <div class="p-4">
                        <h4 class="text-center font-bold" data-cmw="home-feature:feature_title_3"></h4>
                        <p class="text-justify" data-cmw="home-feature:feature_description_3"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-cmw-visible="home-join:join_section_active" class="mt-9">
        <div class="title-divider text-center py-4 w-full">
            <h2 data-cmw-class="global:website_secondary_font" class=" font-semibold text-2xl uppercase text-white" data-cmw="home-join:join_title"></h2>
        </div>
        <div class="pt-16 lg:pb-8 px-8 md:px-36 2xl:px-96">
            <div class="lg:grid grid-cols-4 gap-8">
                <div class="text-center hover-effect">
                    <small data-cmw="home-join:join_step_1"></small>
                    <div style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)" class="round-icon-step mx-auto">
                        <i data-cmw-class="home-join:join_icon_1" class=" fa-2xl"></i>
                    </div>
                    <h4 class="mt-4 border-b py-1" data-cmw="home-join:join_title_1"></h4>
                    <span data-cmw="home-join:join_text_1"></span>
                </div>
                <div class="text-center hover-effect">
                    <small data-cmw="home-join:join_step_2"></small>
                    <div style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)" class="round-icon-step mx-auto">
                        <i data-cmw-class="home-join:join_icon_2" class=" fa-2xl"></i>
                    </div>
                    <h4 data-cmw="home-join:join_title_2" class="mt-4 border-b py-1"></h4>
                    <span data-cmw="home-join:join_text_2"></span>
                </div>
                <div class="text-center hover-effect">
                    <small data-cmw="home-join:join_step_3"></small>
                    <div style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)" class="round-icon-step mx-auto">
                        <i data-cmw-class="home-join:join_icon_3" class=" fa-2xl"></i>
                    </div>
                    <h4 data-cmw="home-join:join_title_3" class="mt-4 border-b py-1"></h4>
                    <span data-cmw="home-join:join_text_3"></span>
                </div>
                <div class="text-center hover-effect">
                    <small data-cmw="home-join:join_step_4"></small>
                    <div style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)" class="round-icon-step mx-auto">
                        <i data-cmw-class="home-join:join_icon_4" class=" fa-2xl"></i>
                    </div>
                    <h4 data-cmw="home-join:join_title_4" class="mt-4 border-b py-1"></h4>
                    <span data-cmw="home-join:join_text_4"></span>
                </div>
            </div>
            <div class="mt-8 w-fit mx-auto text-center">
                <small>Clique pour copier :</small>
                <h4 id="copyIp" onclick="copyURL('<?= ThemeModel::getInstance()->fetchConfigValue('home-join','join_ip') ?>')" data-cmw-class="global:website_secondary_font" class="w-fit mx-auto cursor-pointer uppercase " data-cmw="home-join:join_ip"></h4>
            </div>
        </div>
    </section>

<?php if (PackageController::isInstalled("News")): ?>
<section data-cmw-visible="home-news:news_section_active" class="mt-9">
    <div class="title-divider text-center py-4 w-full">
        <h2 data-cmw-class="global:website_secondary_font" class="font-semibold text-2xl uppercase text-white" data-cmw="home-news:news_section_title"></h2>
    </div>
    <div class="pt-16 lg:pb-8 px-8 md:px-36 2xl:px-96">
        <div class="lg:grid grid-cols-2 gap-16">
            <?php foreach ($newsList as $news): ?>
            <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)" class="shadow-xl mb-8 lg:mb-0">
                <div class="relative p-4" style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)">
                    <img class="mx-auto" width="50%" height="50%" src="<?= $news->getImageLink() ?>" alt="news">
                    <div class="absolute top-0 left-1">
                        <p class="text-sm"><?= $news->getAuthor()->getPseudo() ?></p>
                    </div>
                    <div class="absolute top-0 right-1">
                        <p class="text-sm"><?= $news->getDateCreated() ?></p>
                    </div>
                </div>
                <div class="p-4">
                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $news->getSlug() ?>"><h4 class="text-center font-bold"><?= $news->getTitle() ?></h4></a>
                    <p class="text-justify"><?= $news->getDescription() ?></p>
                    <div class="flex justify-between mt-4">
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
                        <a style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="py-1 px-4 text-xs" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $news->getSlug() ?>">Lire la suite ></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>



<!-- Personnalisé 1 -->
    <section data-cmw-visible="home-custom:custom_section_active_1" class="mt-9">
        <div class="title-divider text-center py-4 w-full">
            <h2 data-cmw-class="global:website_secondary_font" class=" font-semibold text-2xl uppercase text-white" data-cmw="home-custom:custom_section_title_1"></h2>
        </div>
        <div data-cmw="home-custom:custom_section_content_1" class="pt-16 lg:pb-8 px-8 md:px-36 2xl:px-96">
        </div>
    </section>

<!-- Personnalisé 2 -->
    <section data-cmw-visible="home-custom:custom_section_active_2" class="mt-9">
        <div class="title-divider text-center py-4 w-full">
            <h2 data-cmw-class="global:website_secondary_font" class="font-semibold text-2xl uppercase text-white" data-cmw="home-custom:custom_section_title_2"></h2>
        </div>
        <div data-cmw="home-custom:custom_section_content_2" class="pt-16 lg:pb-8 px-8 md:px-36 2xl:px-96">
        </div>
    </section>

<!-- Personnalisé 3 -->
    <section data-cmw-visible="home-custom:custom_section_active_3" class="mt-9">
        <div class="title-divider text-center py-4 w-full">
            <h2 data-cmw-class="global:website_secondary_font" class="font-semibold text-2xl uppercase text-white" data-cmw="home-custom:custom_section_title_3"></h2>
        </div>
        <div data-cmw="home-custom:custom_section_content_3" class="pt-16 lg:pb-8 px-8 md:px-36 2xl:px-96">
        </div>
    </section>

<!-- Contact -->
<?php if (PackageController::isInstalled("Contact")): ?>
<section data-cmw-visible="home-contact:contact_section_active" class="mt-9">
    <div class="title-divider text-center py-4 w-full">
        <h2 data-cmw-class="global:website_secondary_font" class="font-semibold text-2xl uppercase text-white" data-cmw="home-contact:contact_section_title"></h2>
    </div>
    <div class="lg:pb-8 px-8 md:px-36 2xl:px-96">
        <div class="mx-auto py-8 px-4">
            <form action="contact" method="post" class="rounded-md p-8">
                <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                <div class="lg:grid grid-cols-2">
                    <div class="px-4 w-full">
                        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900">Votre mail :</label>
                        <input type="email" name="email" id="email-address-icon" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="votre@mail.com" required>
                    </div>
                    <div class="px-4 w-full">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Votre pseudo :</label>
                        <input type="text" name="name" id="name" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="SuperGamer99" required>
                    </div>
                </div>
                <div class="px-4 w-full ">
                    <label for="object" class="block mb-2 text-sm font-medium text-gray-900">Sujet :</label>
                    <input type="text" name="object" id="object" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="J'aimerais voir avec vous ..." required>
                </div>
                <div class="px-4 w-full ">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Votre message :</label>
                    <textarea minlength="50"  id="message" name="content" rows="4" class="input-focus block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300" placeholder="Bonjour," required></textarea>
                </div>
                <div class="flex justify-center mt-4">
                    <?php SecurityController::getPublicData(); ?>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Soumettre <i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (PackageController::isInstalled('Newsletter')): ?>
<section data-cmw-visible="home-newsletter:newsletter_section_active" class="mt-9">
    <div class="title-divider text-center py-4 w-full">
        <h2 data-cmw-class="global:website_secondary_font" class="font-semibold text-2xl uppercase text-white" data-cmw="home-newsletter:newsletter_section_title"></h2>
    </div>
    <div class="lg:pb-8 px-8 md:px-36 2xl:px-96">
        <div class="mx-auto py-8 px-4">
            <form action="newsletter" method="post" class="rounded-md p-8">
                <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                <span data-cmw="home-newsletter:newsletter_section_description"></span>
                <div class="px-4 w-full">
                    <input type="email" name="newsletter_users_mail" id="email-address-icon" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="votre@mail.com" required>
                </div>
                <div class="flex justify-center mt-4">
                    <?php SecurityController::getPublicData(); ?>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2" data-cmw="home-newsletter:newsletter_section_button"></button>
                </div>
            </form>
        </div>
    </div>
</section>
    <?php endif; ?>


<link rel="stylesheet"
      href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') . 'Admin/Resources/Vendors/Izitoast/iziToast.min.css' ?>">
<script
    src="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') . 'Admin/Resources/Vendors/Izitoast/iziToast.min.js' ?>"></script>

<script>
    function copyURL(url) {
        navigator.clipboard.writeText(url)
        iziToast.show(
            {
                titleSize: '14',
                messageSize: '12',
                icon: 'fa-solid fa-check',
                title: "<?= Website::getWebsiteName() ?>",
                message: "Adresse du serveur copié !",
                color: "#20b23a",
                iconColor: '#ffffff',
                titleColor: '#ffffff',
                messageColor: '#ffffff',
                balloon: false,
                close: true,
                pauseOnHover: true,
                position: 'topCenter',
                timeout: 4000,
                animateInside: false,
                progressBar: true,
                transitionIn: 'fadeInDown',
                transitionOut: 'fadeOut',
            });
    }
</script>
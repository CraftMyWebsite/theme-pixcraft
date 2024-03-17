<?php

/* @var \CMW\Entity\Pages\PageEntity $page */
/* @var \CMW\Model\Pages\PagesModel $pages */
/* @var \CMW\Controller\CoreController $core */
/* @var \CMW\Controller\Menus\MenusController $menu */
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle(ucfirst($page->getTitle()));
Website::setDescription(ucfirst($page->getTitle()));
?>
<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <?= $page->getConverted() ?>
</section>


<?php use CMW\Controller\Core\CoreController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Views\View;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/** @var CoreController $core */
?>


</body>

<footer style="background-color: var(--bg-pixcraft); color: var(--head-color-pixcraft)" class="mt-auto footer pt-6 px-2 md:px-24 2xl:px-72">
    <div class="md:grid grid-cols-3 mb-4 items-center">
        <div>
            <h3 data-cmw-class="global:website_secondary_font">
                    <img data-cmw-visible="footer:footer_use_logo" class="hidden md:inline mr-2" alt="logo" width="120px" data-cmw-attr="src:header:header_img_logo" ">
                    <span data-cmw-visible="footer:footer_use_title"><?= Website::getWebsiteName() ?></span>
            </h3>
        </div>
            <div data-cmw-visible="footer:footer_active_condition" class="text-center">
                <p class="font-bold mb-2" data-cmw="footer:footer_title_condition"></p>
                <p><a class="head-a" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>all_terms" data-cmw="footer:footer_desc_condition_use"></a></p>
            </div>
        <div class="text-center">
            <p class="font-bold mb-2">Liens utiles</p>
            <div class="flex-wrap inline-flex space-x-3">
                <a data-cmw-visible="footer:footer_active_facebook" data-cmw-attr="href:footer:footer_link_facebook" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer','footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_facebook" class="fa-xl "></i>
                </a>
                <a data-cmw-visible="footer:footer_active_x" data-cmw-attr="href:footer:footer_link_x" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer','footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_x" class="fa-xl" </i>
                </a>
                <a data-cmw-visible="footer:footer_active_instagram" data-cmw-attr="href:footer:footer_link_instagram" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer','footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_instagram" class="fa-xl"></i>
                </a>
                <a data-cmw-visible="footer:footer_active_discord" data-cmw-attr="href:footer:footer_link_discord" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer', 'footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_discord" class="fa-xl"></i>
                </a>
            </div>
        </div>
    </div>
    <p class="text-xs text-center text-black">Copyright © <?= date("Y") ?> Par <a class="text-blue-900" href="https://craftmywebsite.fr" target="_blank">CraftMyWebsite</a> pour <span class="text-white"><?= Website::getWebsiteName() ?></span></p>
    <p class="hidden">Credit thème : Z0mblard</p>
</footer>
</html>

<script src="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Pixcraft/Assets/Js/flowbite.js"></script>
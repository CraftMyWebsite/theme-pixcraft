<?php use CMW\Controller\Core\PackageController; use CMW\Controller\Core\ThemeController; use CMW\Utils\Utils;use CMW\Manager\Lang\LangManager;use CMW\Model\Core\ThemeModel;use CMW\Utils\SecurityService;use CMW\Model\Votes\VotesConfigModel;use CMW\Model\Core\CoreModel;?>
<!-------------->
<!--Navigation-->
<!-------------->
<div class="tab-menu">
    <ul class="tab-horizontal" data-tabs-toggle="#tab-content-config">
        <li>
            <button type="button" data-tabs-target="#tab1" role="tab">Global</button>
        </li>
        <li>
            <button type="button" data-tabs-target="#tab11" role="tab">En tête</button>
        </li>
        <li>
            <button type="button" data-tabs-target="#tab2" role="tab">Accueil</button>
        </li>
        <?php if (PackageController::isInstalled("News")): ?>
            <li>
                <button type="button" data-tabs-target="#tab3" role="tab">News</button>
            </li>
        <?php endif; ?>
        <?php if (PackageController::isInstalled("Faq")): ?>
            <li>
                <button type="button" data-tabs-target="#tab4" role="tab">F.A.Q</button>
            </li>
        <?php endif; ?>
        <?php if (PackageController::isInstalled("Votes")): ?>
            <li>
                <button type="button" data-tabs-target="#tab5" role="tab">Votes</button>
            </li>
        <?php endif; ?>
        <?php if (PackageController::isInstalled("Wiki")): ?>
            <li>
                <button type="button" data-tabs-target="#tab6" role="tab">Wiki</button>
            </li>
        <?php endif; ?>
        <?php if (PackageController::isInstalled("Forum")): ?>
            <li>
                <button type="button" data-tabs-target="#tab7" role="tab">Forum</button>
            </li>
        <?php endif; ?>
        <li>
            <button type="button" data-tabs-target="#tab8" role="tab">Footer</button>
        </li>
    </ul>
</div>

<div id="tab-content-config">
    <!--
    En tête et Global
    -->
    <div class="tab-content" id="tab1">
        <div class="grid-2">
            <div>
                <div class="grid-2">
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="flex items-center">
                            <input type="color" id="main_color" name="main_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('main_color') ?>">
                            <label style="margin-left: 0.5rem" for="main_color">Couleur du site</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="flex items-center">
                            <input type="color" id="title_color" name="title_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('title_color') ?>">
                            <label style="margin-left: 0.5rem" for="title_color">Couleur des titres.</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="hero_button_link">Police d'écriture :</label>
                    <select class="form-select" name="main_font" required>
                        <option value="angkor" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "angkor" ? 'selected' : '' ?>>
                            Angkor
                        </option>
                        <option value="ibmplexsans" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "ibmplexsans" ? 'selected' : '' ?>>
                            ibmplexsans
                        </option>
                        <option value="kanit" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "kanit" ? 'selected' : '' ?>>
                            kanit
                        </option>
                        <option value="lora" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "lora" ? 'selected' : '' ?>>
                            lora
                        </option>
                        <option value="madimione" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "madimione" ? 'selected' : '' ?>>
                            madimione
                        </option>
                        <option value="ojuju" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "ojuju" ? 'selected' : '' ?>>
                            ojuju
                        </option>
                        <option value="opensans" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "opensans" ? 'selected' : '' ?>>
                            opensans
                        </option>
                        <option value="playfairdisplay" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "playfairdisplay" ? 'selected' : '' ?>>
                            playfairdisplay
                        </option>
                        <option value="robotocondensed" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "robotocondensed" ? 'selected' : '' ?>>
                            robotocondensed
                        </option>
                        <option value="robotomono" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "robotomono" ? 'selected' : '' ?>>
                            robotomono
                        </option>
                        <option value="robotoslab" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "robotoslab" ? 'selected' : '' ?>>
                            robotoslab
                        </option>
                        <option value="rubik" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "rubik" ? 'selected' : '' ?>>
                            rubik
                        </option>
                        <option value="ubuntu" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "ubuntu" ? 'selected' : '' ?>>
                            ubuntu
                        </option>
                        <option value="roboto" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "roboto" ? 'selected' : '' ?>>
                            roboto (par défaut)
                        </option>
                        <option value="unbounded" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "unbounded" ? 'selected' : '' ?>>
                            unbounded
                        </option>
                        <option value="montserrat" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "montserrat" ? 'selected' : '' ?>>
                            montserrat
                        </option>
                        <option value="paytone" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "paytone" ? 'selected' : '' ?>>
                            paytone
                        </option>
                        <option value="sora" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "sora" ? 'selected' : '' ?>>
                            sora
                        </option>
                        <option value="outfit" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "outfit" ? 'selected' : '' ?>>
                            outfit
                        </option>
                        <option value="alata" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "alata" ? 'selected' : '' ?>>
                            alata
                        </option>
                        <option value="titan" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "titan" ? 'selected' : '' ?>>
                            titan
                        </option>
                        <option value="pressstart" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "pressstart" ? 'selected' : '' ?>>
                            pressstart
                        </option>
                    </select>
                </div>
                <div class="col-12 col-lg-6 mt-4">
                    <div>
                        <label for="hero_button_link">Police d'écriture des titres :</label>
                        <select class="form-select" name="website_secondary_font" required>
                            <option value="angkor" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "angkor" ? 'selected' : '' ?>>
                                Angkor
                            </option>
                            <option value="ibmplexsans" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "ibmplexsans" ? 'selected' : '' ?>>
                                ibmplexsans
                            </option>
                            <option value="kanit" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "kanit" ? 'selected' : '' ?>>
                                kanit
                            </option>
                            <option value="lora" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "lora" ? 'selected' : '' ?>>
                                lora
                            </option>
                            <option value="madimione" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "madimione" ? 'selected' : '' ?>>
                                madimione
                            </option>
                            <option value="ojuju" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "ojuju" ? 'selected' : '' ?>>
                                ojuju
                            </option>
                            <option value="opensans" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "opensans" ? 'selected' : '' ?>>
                                opensans
                            </option>
                            <option value="playfairdisplay" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "playfairdisplay" ? 'selected' : '' ?>>
                                playfairdisplay
                            </option>
                            <option value="robotocondensed" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "robotocondensed" ? 'selected' : '' ?>>
                                robotocondensed
                            </option>
                            <option value="robotomono" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "robotomono" ? 'selected' : '' ?>>
                                robotomono
                            </option>
                            <option value="robotoslab" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "robotoslab" ? 'selected' : '' ?>>
                                robotoslab
                            </option>
                            <option value="rubik" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "rubik" ? 'selected' : '' ?>>
                                rubik
                            </option>
                            <option value="ubuntu" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "ubuntu" ? 'selected' : '' ?>>
                                ubuntu
                            </option>
                            <option value="roboto" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "roboto" ? 'selected' : '' ?>>
                                roboto
                            </option>
                            <option value="unbounded" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "unbounded" ? 'selected' : '' ?>>
                                unbounded
                            </option>
                            <option value="montserrat" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "montserrat" ? 'selected' : '' ?>>
                                montserrat
                            </option>
                            <option value="paytone" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "paytone" ? 'selected' : '' ?>>
                                paytone
                            </option>
                            <option value="sora" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "sora" ? 'selected' : '' ?>>
                                sora
                            </option>
                            <option value="outfit" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "outfit" ? 'selected' : '' ?>>
                                outfit
                            </option>
                            <option value="alata" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "alata" ? 'selected' : '' ?>>
                                alata
                            </option>
                            <option value="titan" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "titan" ? 'selected' : '' ?>>
                                titan
                            </option>
                            <option value="pressstart" <?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') === "pressstart" ? 'selected' : '' ?>>
                                pressstart
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div>

                <h6>Accès</h6>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Connexion <i data-bs-toggle="tooltip"
                                                             title="Désactive le bouton de connexion mais vous avez toujours accès à la page"
                                                             class="fa-sharp fa-solid fa-circle-question"></i></p>
                        <input type="checkbox" class="toggle-input" id="header_allow_login_button"
                               name="header_allow_login_button" <?= ThemeModel::getInstance()->fetchConfigValue('header_allow_login_button') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Inscription <i data-bs-toggle="tooltip"
                                                               title="Vous pouvez désactiver les inscriptions et afficher un message"
                                                               class="fa-sharp fa-solid fa-circle-question"></i></p>
                        <input type="checkbox" class="toggle-input" name="header_allow_register_button"
                               id="header_allow_register_button" <?= ThemeModel::getInstance()->fetchConfigValue('header_allow_register_button') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <label for="global_no_register_message">Message lorsque l'inscription est désactivée :</label>
                <input class="input" type="text" id="global_no_register_message" name="global_no_register_message"  value="<?= ThemeModel::getInstance()->fetchConfigValue('global_no_register_message') ?>">
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card-in-card p-4">
                <h4>Images</h4>
                <div class="grid-2">
                    <div>
                        <div>
                            <h6>Page d'erreur / 404 :</h6>
                            <img class="w-50 mx-auto" src="<?= ThemeModel::getInstance()->fetchImageLink("404_img") ?>" alt="Image introuvable !">
                            <div class="drop-img-area" data-input-name="404_img"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h6>Maintenance :</h6>
                            <img class="w-50 mx-auto" src="<?= ThemeModel::getInstance()->fetchImageLink("maintenance_img") ?>" alt="Image introuvable !">
                            <div class="drop-img-area" data-input-name="maintenance_img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="tab-content" id="tab11">
        <div class="grid-2">
            <div>
                <h6>En tête</h6>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Titre : <i data-bs-toggle="tooltip"
                                                           title="Vous pouvez l'afficher ou le masqué"
                                                           class="fa-sharp fa-solid fa-circle-question"></i></p>
                        <input type="checkbox" class="toggle-input" name="header_active_title"
                               id="header_active_title" <?= ThemeModel::getInstance()->fetchConfigValue('header_active_title') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Logo : <i data-bs-toggle="tooltip"
                                                          title="Vous pouvez l'afficher ou le masqué"
                                                          class="fa-sharp fa-solid fa-circle-question"></i></p>
                        <input type="checkbox" class="toggle-input" id="header_active_logo"
                               name="header_active_logo" <?= ThemeModel::getInstance()->fetchConfigValue('header_active_logo') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div class="grid-2">
                    <div class="flex justify-center">
                        <img class="w-25" src="<?= ThemeModel::getInstance()->fetchImageLink("header_img_logo") ?>"
                             alt="Image introuvable !">
                    </div>
                    <div class="drop-img-area mt-4" data-input-name="header_img_logo"></div>
                </div>
            </div>

            <div>
                <h6>Alerteur</h6>
                <div class="row">
                    <div>
                        <label class="toggle">
                            <h6 class="toggle-label">Alerteur dans l'en tête :</h6>
                            <input type="checkbox" class="toggle-input" id="header_alert" name="header_alert" <?= ThemeModel::getInstance()->fetchConfigValue('header_alert') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <input type="color" id="buttonColor" name="header_alert_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('header_alert_color') ?>">
                            <label style="margin-left: 0.5rem" for="buttonColor">Couleur de la bordure.</label>
                        </div>
                    </div>
                </div>
                <div class="grid-2">
                    <div class="">
                        <div>
                            <label for="header_alert_duration">Durée d'activation du flash (s):</label>
                            <input class="input" type="text" id="header_alert_duration" name="header_alert_duration" value="<?= ThemeModel::getInstance()->fetchConfigValue('header_alert_duration') ?>">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <label for="header_alert_text">Texte de l'alerte :</label>
                            <input class="input" type="text" id="header_alert_text" name="header_alert_text" value="<?= ThemeModel::getInstance()->fetchConfigValue('header_alert_text') ?>">
                        </div>
                    </div>
                </div>
                <div class="">
                    <h6>Couleurs</h6>
                    <div class="grid-2">
                        <div class="flex items-center">
                            <input type="color" id="nav_text_color" name="nav_text_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('nav_text_color') ?>">
                            <label style="margin-left: 0.5rem" for="nav_text_color">Texte dans la navigation.</label>
                        </div>
                        <div class="flex items-center">
                            <input type="color" id="nav_hover_text_color" name="nav_hover_text_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('nav_hover_text_color') ?>">
                            <label style="margin-left: 0.5rem" for="nav_hover_text_color">texte lors du survol dans la navigation.</label>
                        </div>
                        <div class="flex items-center">
                            <input type="color" id="nav_player_name_color" name="nav_player_name_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('nav_player_name_color') ?>">
                            <label style="margin-left: 0.5rem" for="nav_player_name_color">Texte dans le bouton utilisateur.</label>
                        </div>
                        <div class="flex items-center">
                            <input type="color" id="nav_player_name_background" name="nav_player_name_background" value="<?= ThemeModel::getInstance()->fetchConfigValue('nav_player_name_background') ?>">
                            <label style="margin-left: 0.5rem" for="nav_player_name_background">Fond dans le bouton utilisateur.</label>
                        </div>
                        <div class="flex items-center">
                            <input type="color" id="nav_background" name="nav_background" value="<?= ThemeModel::getInstance()->fetchConfigValue('nav_background') ?>">
                            <label style="margin-left: 0.5rem" for="nav_background">Fond de la navigation.</label>
                        </div>
                        <div class="flex items-center">
                            <input type="color" id="head_text_color" name="head_text_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('head_text_color') ?>">
                            <label style="margin-left: 0.5rem" for="head_text_color">Texte dans l'en tête.</label>
                        </div>
                        <div class="flex items-center">
                            <input type="color" id="head_background_color" name="head_background_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('head_background_color') ?>">
                            <label style="margin-left: 0.5rem" for="head_background_color">Fond de l'en tête.</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h6>Barre haute</h6>
                    <div class="grid-2">
                        <label class="toggle">
                            <p class="toggle-label">Afficher le nombre en ligne :</p>
                            <input type="checkbox" class="toggle-input" id="header_show_online" name="header_show_online" <?= ThemeModel::getInstance()->fetchConfigValue('header_show_online') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                        <label class="toggle">
                            <p class="toggle-label">Afficher le nombre d'inscrits</p>
                            <input type="checkbox" class="toggle-input" id="header_show_members" name="header_show_members" <?= ThemeModel::getInstance()->fetchConfigValue('header_show_members') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    Accueil
    -->
    <div class="tab-content" id="tab2">
        <h6>Indéxation de la page (meta) :</h6>
        <div class="alert-warning">
            <h6 class="alert-heading">Bien comprendre l'indéxation</h6>
            <p>Ces options changent le titre et la description de votre page dans l'onglet, mais également lors des
                affichages sur Discord, Twitter...<br>
                Ceci n'est aucunement lié au titre de la page en cours de modification. Cette option se trouve un peu
                plus bas (Si votre page est éligible à ce réglage).<br>
                Si vous avez besoin d'aide supplémentaire vous pouvez contacter le support CraftMyWebsite.</p>
        </div>
        <label for="home_title">Titre de la page :</label>
        <input type="text" id="home_title" name="home_title"
               value="<?= ThemeModel::getInstance()->fetchConfigValue('home_title') ?>" required class="input">
        <hr>
        <div class="card-in-card mt-4">
            <div class="card-body">
                <label class="toggle">
                    <h6 class="toggle-label">Slider :</h6>
                    <input type="checkbox" class="toggle-input" id="home_use_slider" name="home_use_slider" <?= ThemeModel::getInstance()->fetchConfigValue('home_use_slider') ? 'checked' : '' ?>>
                    <div class="toggle-slider"></div>
                </label>
                <div class="grid-4">
                    <div>
                        <div>
                            <label for="hero_button_link">Temps entre chaque image (ms):</label>
                            <input class="input" type="text" id="hero_button_link" name="slider_interval" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_interval') ?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="hero_button_link">Durée de la transition (ms):</label>
                            <input class="input" type="text" id="hero_button_link" name="slider_transition_duration" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_transition_duration') ?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="hero_button_link">Flou:</label>
                            <input class="input" type="text" id="slider_blur" name="slider_blur" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_blur') ?>">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <input type="color" id="slider_text_color" name="slider_text_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_text_color') ?>">
                            <label style="margin-left: 0.5rem" for="slider_text_color">Couleur du texte dans le slider.</label>
                        </div>
                    </div>
                </div>
                <div class="grid-3">
                    <div class="col-12 col-lg-6 card">
                        <div class="form-check form-switch">
                            <label class="toggle">
                                <p class="toggle-label">Slide 1</p>
                                <input type="checkbox" class="toggle-input" id="use_slide_1" name="use_slide_1" <?= ThemeModel::getInstance()->fetchConfigValue('use_slide_1') ? 'checked' : '' ?>>
                                <div class="toggle-slider"></div>
                            </label>
                        </div>
                        <div class="text-center">
                            <img width="100%" height="100%" src="<?= ThemeModel::getInstance()->fetchImageLink("slider_img_1") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature1.webp depuis votre panel !"/>
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="slider_img_1"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="slider_title_1" name="slider_title_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_title_1') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="slider_text_1" name="slider_text_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_text_1') ?>">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 card">
                        <div class="form-check form-switch">
                            <label class="toggle">
                                <p class="toggle-label">Slide 2</p>
                                <input type="checkbox" class="toggle-input" id="use_slide_2" name="use_slide_2" <?= ThemeModel::getInstance()->fetchConfigValue('use_slide_2') ? 'checked' : '' ?>>
                                <div class="toggle-slider"></div>
                            </label>
                        </div>
                        <div class="text-center">
                            <img width="100%" height="100%" src="<?= ThemeModel::getInstance()->fetchImageLink("slider_img_2") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature1.webp depuis votre panel !"/>
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="slider_img_2"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="slider_title_2" name="slider_title_2" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_title_2') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="slider_text_2" name="slider_text_2" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_text_2') ?>">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 card">
                        <div class="form-check form-switch">
                            <label class="toggle">
                                <p class="toggle-label">Slide 3</p>
                                <input type="checkbox" class="toggle-input" id="use_slide_3" name="use_slide_3" <?= ThemeModel::getInstance()->fetchConfigValue('use_slide_3') ? 'checked' : '' ?>>
                                <div class="toggle-slider"></div>
                            </label>
                        </div>
                        <div class="text-center">
                            <img width="100%" height="100%" src="<?= ThemeModel::getInstance()->fetchImageLink("slider_img_3") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature1.webp depuis votre panel !"/>
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="slider_img_3"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="slider_title_3" name="slider_title_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_title_3') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="slider_text_3" name="slider_text_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_text_3') ?>">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 card">
                        <div class="form-check form-switch">
                            <label class="toggle">
                                <p class="toggle-label">Slide 4</p>
                                <input type="checkbox" class="toggle-input" id="use_slide_4" name="use_slide_4" <?= ThemeModel::getInstance()->fetchConfigValue('use_slide_4') ? 'checked' : '' ?>>
                                <div class="toggle-slider"></div>
                            </label>
                        </div>
                        <div class="text-center">
                            <img width="100%" height="100%" src="<?= ThemeModel::getInstance()->fetchImageLink("slider_img_4") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature1.webp depuis votre panel !"/>
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="slider_img_4"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="slider_title_4" name="slider_title_4" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_title_4') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="slider_text_4" name="slider_text_4" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_text_4') ?>">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 card">
                        <div class="form-check form-switch">
                            <label class="toggle">
                                <p class="toggle-label">Slide 5</p>
                                <input type="checkbox" class="toggle-input" id="use_slide_5" name="use_slide_5" <?= ThemeModel::getInstance()->fetchConfigValue('use_slide_5') ? 'checked' : '' ?>>
                                <div class="toggle-slider"></div>
                            </label>
                        </div>
                        <div class="text-center">
                            <img width="100%" height="100%" src="<?= ThemeModel::getInstance()->fetchImageLink("slider_img_5") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature1.webp depuis votre panel !"/>
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="slider_img_5"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="slider_title_5" name="slider_title_5" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_title_5') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="slider_text_5" name="slider_text_5" value="<?= ThemeModel::getInstance()->fetchConfigValue('slider_text_5') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-in-card mt-4">
            <div class="card-body">
                <label class="toggle">
                    <h6 class="toggle-label">Fonctionnalités :</h6>
                    <input type="checkbox" class="toggle-input" id="feature_section_active" name="feature_section_active" <?= ThemeModel::getInstance()->fetchConfigValue('feature_section_active') ? 'checked' : '' ?>>
                    <div class="toggle-slider"></div>
                </label>
                <h6>Titre de la section :</h6>
                <input type="text" class="input" name="feature_section_title" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_section_title') ?>" required>
                <div class="grid-3">
                    <div class="col card me-2">
                        <label>Image :</label>
                        <div class="text-center">
                            <img src="<?= ThemeModel::getInstance()->fetchImageLink("feature_img_1") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature1.webp depuis votre panel !" width="160" height="160"/>
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="feature_img_1"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="feature_title_1" name="feature_title_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_title_1') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="feature_description_1" name="feature_description_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_description_1') ?>">
                        </div>
                    </div>
                    <div class="col card me-2">
                        <label>Image :</label>
                        <div class="text-center">
                            <img src="<?= ThemeModel::getInstance()->fetchImageLink("feature_img_2") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature2.webp depuis votre panel !" width="160" height="160">
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="feature_img_2"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="feature_title_2" name="feature_title_2" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_title_2') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="feature_description_2" name="feature_description_2" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_description_2') ?>">
                        </div>
                    </div>
                    <div class="col card me-2">
                        <label>Image :</label>
                        <div class="text-center">
                            <img src="<?= ThemeModel::getInstance()->fetchImageLink("feature_img_3") ?>" class="mb-3 mx-auto" alt="Vous devez upload feature3.webp depuis votre panel !" width="160" height="160">
                        </div>
                        <div class="form-group">
                            <div class="drop-img-area" data-input-name="feature_img_3"></div>
                        </div>
                        <div class="form-group">
                            <label>Titre :</label>
                            <input class="input text-center" type="text" id="feature_title_3" name="feature_title_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_title_3') ?>">
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input class="input text-center" type="text" id="feature_description_3" name="feature_description_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('feature_description_3') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-in-card mt-4">
            <div class="card-body">
                <div class="form-check form-switch">
                    <label class="toggle">
                        <h6 class="toggle-label">Nous rejoindre :</h6>
                        <input type="checkbox" class="toggle-input" id="join_section_active" name="join_section_active" <?= ThemeModel::getInstance()->fetchConfigValue('join_section_active') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div class="grid-2">
                    <div class="col-12 col-lg-6">
                        <label>Titre de la section :</label>
                        <input type="text" class="input" name="join_title" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_title') ?>" required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <label>Adresse sur serveur :</label>
                        <input type="text" class="input" name="join_ip" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_ip') ?>" required>
                    </div>
                </div>
                <div class="grid-4">
                    <div class="col-12 col-lg-3">
                        <div class="card me-2 p-3">
                            <h6>Étape 1</h6>
                            <div class="text-center">
                                <i style="font-size : 6rem;" class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_1') ?>"></i>
                            </div>
                            <label class="mt-2">Titre 1 :</label>
                            <input type="text" class="mt-1 input" id="join_step_1" name="join_step_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_step_1') ?>" required>
                            <div class="icon-picker" data-id="join_icon_1" data-name="join_icon_1" data-label="Icône :" data-placeholder="Sélectionner un icon" data-value="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_1') ?>"></div>
                            <label class="mt-2">Titre 2 :</label>
                            <input type="text" class="mt-1 input" id="join_title_1" name="join_title_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_title_1') ?>" required>
                            <label class="mt-2">Texte :</label>
                            <input type="text" class="mt-1 input" id="join_text_1" name="join_text_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_text_1') ?>" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card me-2 p-3">
                            <label>Étape 2</label>
                            <div class="text-center">
                                <i style="font-size : 6rem;" class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_2') ?>"></i>
                            </div>
                            <label class="mt-2">Titre 1 :</label>
                            <input type="text" class="mt-1 input" id="join_step_2" name="join_step_2" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_step_2') ?>" required>
                            <div class="icon-picker" data-id="join_icon_2" data-name="join_icon_2" data-label="Icône :" data-placeholder="Sélectionner un icon" data-value="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_2') ?>"></div>
                            <label class="mt-2">Titre 2 :</label>
                            <input type="text" class="mt-1 input" id="join_title_2" name="join_title_2" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_title_2') ?>" required>
                            <label class="mt-2">Texte :</label>
                            <input type="text" class="mt-1 input" id="join_text_2" name="join_text_1" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_text_2') ?>" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card me-2 p-3">
                            <label>Étape 3</label>
                            <div class="text-center">
                                <i style="font-size : 6rem;" class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_3') ?>"></i>
                            </div>
                            <label class="mt-2">Titre 1 :</label>
                            <input type="text" class="mt-1 input" id="join_step_3" name="join_step_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_step_3') ?>" required>
                            <div class="icon-picker" data-id="join_icon_3" data-name="join_icon_3" data-label="Icône :" data-placeholder="Sélectionner un icon" data-value="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_3') ?>"></div>
                            <label class="mt-2">Titre 2 :</label>
                            <input type="text" class="mt-1 input" id="join_title_3" name="join_title_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_title_3') ?>" required>
                            <label class="mt-2">Texte :</label>
                            <input type="text" class="mt-1 input" id="join_text_3" name="join_text_3" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_text_3') ?>" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card me-2 p-3">
                            <h6>Étape 4</h6>
                            <div class="text-center">
                                <i style="font-size : 6rem;" class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_4') ?>"></i>
                            </div>
                            <label class="mt-2">Titre 1 :</label>
                            <input type="text" class="mt-1 input" id="join_step_4" name="join_step_4" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_step_4') ?>" required>
                            <div class="icon-picker" data-id="join_icon_4" data-name="join_icon_4" data-label="Icône :" data-placeholder="Sélectionner un icon" data-value="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_4') ?>"></div>
                            <label class="mt-2">Titre 2 :</label>
                            <input type="text" class="mt-1 input" id="join_title_4" name="join_title_4" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_title_4') ?>" required>
                            <label class="mt-2">Texte :</label>
                            <input type="text" class="mt-1 input" id="join_text_4" name="join_text_4" value="<?= ThemeModel::getInstance()->fetchConfigValue('join_text_4') ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!--NEWS-->
        <?php if (PackageController::isInstalled("News")): ?>
            <div class="card-in-card mt-4">
                <div class="card-body">
                    <label class="toggle">
                        <h6 class="toggle-label">Nouveautés : </h6>
                        <input type="checkbox" class="toggle-input" id="news_section_active" name="news_section_active" <?= ThemeModel::getInstance()->fetchConfigValue('news_section_active') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                    <label>Titre de la section :</label>
                    <input type="text" class="input" name="news_section_title" value="<?= ThemeModel::getInstance()->fetchConfigValue('news_section_title') ?>" required>
                    <div class="form-group">
                        <label>Nombre de news à afficher :</label>
                        <input class="input" type="number" id="news_number_display" name="news_number_display" value="<?= ThemeModel::getInstance()->fetchConfigValue('news_number_display') ?>">
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <hr>
        <hr>
        <!--CUSTOM 1-->
        <div>
            <label class="toggle">
                <h5 class="toggle-label">Personnalisable 1 : <i data-bs-toggle="tooltip"
                                                                title="Vous pouvez activer ou non cette section."
                                                                class="fa-sharp fa-solid fa-circle-question"></i></h5>
                <input type="checkbox" class="toggle-input" id="custom_section_active_1"
                       name="custom_section_active_1" <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_active_1') ? 'checked' : '' ?>>
                <div class="toggle-slider"></div>
            </label>
        </div>
        <label for="custom_section_title_1">Titre de la section :</label>
        <input type="text" class="input" id="custom_section_title_1" name="custom_section_title_1"
               value="<?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_1') ?>" required>
        <label for="custom_section_content_1">Contenu :</label>
        <textarea id="custom_section_content_1" name="custom_section_content_1"
                  class="tinymce"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_1') ?></textarea>
        <hr>
        <!--CUSTOM 2-->
        <div>
            <label class="toggle">
                <h5 class="toggle-label">Personnalisable 2 : <i data-bs-toggle="tooltip"
                                                                title="Vous pouvez activer ou non cette section."
                                                                class="fa-sharp fa-solid fa-circle-question"></i></h5>
                <input type="checkbox" class="toggle-input" id="custom_section_active_2"
                       name="custom_section_active_2" <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_active_2') ? 'checked' : '' ?>>
                <div class="toggle-slider"></div>
            </label>
        </div>
        <label for="custom_section_title_2">Titre de la section :</label>
        <input type="text" class="input" id="custom_section_title_2" name="custom_section_title_2"
               value="<?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_2') ?>" required>
        <label for="custom_section_content_2">Contenu :</label>
        <textarea name="custom_section_content_2" id="custom_section_content_2"
                  class="tinymce"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_2') ?></textarea>
        <hr>
        <!--CUSTOM 3-->
        <div>
            <label class="toggle">
                <h5 class="toggle-label">Personnalisable 3 : <i data-bs-toggle="tooltip"
                                                                title="Vous pouvez activer ou non cette section."
                                                                class="fa-sharp fa-solid fa-circle-question"></i></h5>
                <input type="checkbox" class="toggle-input" id="custom_section_active_3"
                       name="custom_section_active_3" <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_active_3') ? 'checked' : '' ?>>
                <div class="toggle-slider"></div>
            </label>
        </div>
        <label for="custom_section_title_3">Titre de la section :</label>
        <input type="text" class="input" id="custom_section_title_3" name="custom_section_title_3"
               value="<?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_3') ?>" required>
        <label for="custom_section_content_3">Contenu :</label>
        <textarea name="custom_section_content_3" id="custom_section_content_3"
                  class="tinymce"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_3') ?></textarea>
        <hr>
        <div class="card-in-card mt-4">
            <div class="card-body">
                <label class="toggle">
                    <h6 class="toggle-label">Contact :</h6>
                    <input type="checkbox" class="toggle-input" id="contact_section_active" name="contact_section_active" <?= ThemeModel::getInstance()->fetchConfigValue('contact_section_active') ? 'checked' : '' ?>>
                    <div class="toggle-slider"></div>
                </label>
                <label>Titre de la section :</label>
                <input type="text" class="input" name="contact_section_title" value="<?= ThemeModel::getInstance()->fetchConfigValue('contact_section_title') ?>" required>
            </div>
        </div>
    </div>
    <div class="tab-content" id="tab3">
        <!---NEWS---->
        <?php if (PackageController::isInstalled("News")): ?>
            <h6>Indéxation de la page (meta) :</h6>
            <div class="alert alert-warning">
                <h6 class="alert-heading">Bien comprendre l'indéxation</h6>
                <p>Ces options changent le titre et la description de votre page dans l'onglet, mais également lors des
                    affichages sur Discord, Twitter...<br>
                    Ceci n'est aucunement lié au titre de la page en cours de modification. Cette option se trouve un
                    peu plus bas (Si votre page est éligible à ce réglage).<br>
                    Si vous avez besoin d'aide supplémentaire vous pouvez contacter le support CraftMyWebsite.</p>
            </div>
            <div class="grid-2">
                <div>
                    <label for="news_title">Titre de la page :</label>
                    <input type="text" class="input" id="news_title" name="news_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('news_title') ?>" required>
                </div>
                <div>
                    <label for="news_description">Description de la page :</label>
                    <input type="text" class="input" id="news_description" name="news_description"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('news_description') ?>" required>
                </div>
            </div>
            <hr>
            <h6>Réglages :</h6>
            <div class="grid-2">
                <div>
                    <label for="news_page_title">Titre :</label>
                    <input type="text" class="input" id="news_page_title" name="news_page_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('news_page_title') ?>" required>
                </div>
                <div>
                    <label for="news_page_number_display">Nombre de news à afficher:</label>
                    <input class="input" type="number" id="news_page_number_display" name="news_page_number_display"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('news_page_number_display') ?>">
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="tab-content" id="tab4">
        <!---FAQ---->
        <?php if (PackageController::isInstalled("Faq")): ?>
            <h6>Indéxation de la page (meta) :</h6>
            <div class="alert alert-warning">
                <h6 class="alert-heading">Bien comprendre l'indéxation</h6>
                <p>Ces options changent le titre et la description de votre page dans l'onglet, mais également lors des
                    affichages sur Discord, Twitter...<br>
                    Ceci n'est aucunement lié au titre de la page en cours de modification. Cette option se trouve un
                    peu plus bas (Si votre page est éligible à ce réglage).<br>
                    Si vous avez besoin d'aide supplémentaire vous pouvez contacter le support CraftMyWebsite.</p>
            </div>
            <div class="grid-2">
                <div>
                    <label for="faq_title">Titre de la page :</label>
                    <input type="text" class="input" id="faq_title" name="faq_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('faq_title') ?>" required>
                </div>
                <div>
                    <label for="faq_description">Description de la page :</label>
                    <input type="text" class="input" id="faq_description" name="faq_description"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('faq_description') ?>" required>
                </div>
            </div>
            <hr>
            <h6>Réglages :</h6>
            <div class="grid-2">
                <div>
                    <label for="faq_page_title">Titre :</label>
                    <input type="text" class="input" id="faq_page_title" name="faq_page_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('faq_page_title') ?>" required>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher l'auteur</p>
                            <input type="checkbox" class="toggle-input" id="faq_display_autor"
                                   name="faq_display_autor" <?= ThemeModel::getInstance()->fetchConfigValue('faq_display_autor') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Formulaire de contact</p>
                            <input type="checkbox" class="toggle-input" id="faq_display_form"
                                   name="faq_display_form" <?= ThemeModel::getInstance()->fetchConfigValue('faq_display_form') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                </div>
                <div>
                    <label for="faq_question_title">Titre section formulaire :</label>
                    <input type="text" class="input" id="faq_question_title" name="faq_question_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('faq_question_title') ?>" required>
                    <label for="faq_answer_title">Titre section réponse :</label>
                    <input type="text" class="input" id="faq_answer_title" name="faq_answer_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('faq_answer_title') ?>" required>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!---VOTES---->
    <div class="tab-content" id="tab5">
        <?php if (PackageController::isInstalled("Votes")): ?>
            <h6>Indéxation de la page (meta) :</h6>
            <div class="alert alert-warning">
                <h6 class="alert-heading">Bien comprendre l'indéxation</h6>
                <p>Ces options changent le titre et la description de votre page dans l'onglet, mais également lors des
                    affichages sur Discord, Twitter...<br>
                    Ceci n'est aucunement lié au titre de la page en cours de modification. Cette option se trouve un
                    peu plus bas (Si votre page est éligible à ce réglage).<br>
                    Si vous avez besoin d'aide supplémentaire vous pouvez contacter le support CraftMyWebsite.</p>
            </div>
            <div class="grid-2">
                <div class="col-12 col-lg-6">
                    <label for="vote_title">Titre de la page :</label>
                    <input type="text" class="input" id="vote_title" name="vote_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('vote_title') ?>" required>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="vote_description">Description de la page :</label>
                    <input type="text" class="input" id="vote_description" name="vote_description"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('vote_description') ?>" required>
                </div>
            </div>
            <hr>
            <h4>Réglages :</h4>
            <div class="grid-3">
                <div>
                    <label for="votes_page_title">Titre :</label>
                    <input type="text" class="input" id="votes_page_title" name="votes_page_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('votes_page_title') ?>" required>
                    <label for="votes_participate_title">Participation :</label>
                    <input type="text" class="input" id="votes_participate_title" name="votes_participate_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('votes_participate_title') ?>"
                           required>
                </div>
                <div>
                    <label for="votes_top_10_title">Top <?= (new VotesConfigModel())->getConfig()->getTopShow() ?> du
                        mois :</label>
                    <input type="text" class="input" id="votes_top_10_title" name="votes_top_10_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('votes_top_10_title') ?>" required>
                    <label
                        for="votes_top_10_global_title">Top <?= (new VotesConfigModel())->getConfig()->getTopShow() ?>
                        Global :</label>
                    <input type="text" class="input" id="votes_top_10_global_title" name="votes_top_10_global_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('votes_top_10_global_title') ?>"
                           required>
                </div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Top global</p>
                        <input type="checkbox" class="toggle-input" id="votes_display_global"
                               name="votes_display_global" <?= ThemeModel::getInstance()->fetchConfigValue('votes_display_global') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="tab-content" id="tab6">
        <!---WIKI---->
        <?php if (PackageController::isInstalled("Wiki")): ?>
            <h6>Indéxation de la page (meta) :</h6>
            <div class="alert alert-warning">
                <h6 class="alert-heading">Bien comprendre l'indéxation</h6>
                <p>Ces options changent le titre et la description de votre page dans l'onglet, mais également lors des
                    affichages sur Discord, Twitter...<br>
                    Ceci n'est aucunement lié au titre de la page en cours de modification. Cette option se trouve un
                    peu plus bas (Si votre page est éligible à ce réglage).<br>
                    Si vous avez besoin d'aide supplémentaire vous pouvez contacter le support CraftMyWebsite.</p>
            </div>
            <div class="grid-2">
                <div class="col-12 col-lg-6">
                    <label for="wiki_title">Titre de la page :</label>
                    <input type="text" class="input" id="wiki_title" name="wiki_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('wiki_title') ?>" required>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="wiki_description">Description de la page :</label>
                    <input type="text" class="input" id="wiki_description" name="wiki_description"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('wiki_description') ?>" required>
                </div>
            </div>
            <hr>
            <h6>Réglages :</h6>
            <div class="grid-3">
                <div>
                    <label for="wiki_page_title">Titre :</label>
                    <input type="text" class="input" id="wiki_page_title" name="wiki_page_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('wiki_page_title') ?>" required>
                    <label for="wiki_menu_title">Menu :</label>
                    <input type="text" class="input" id="wiki_menu_title" name="wiki_menu_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('wiki_menu_title') ?>" required>
                </div>
                <div>
                    <h6>Icônes :</h6>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher les icons des catégorie (menu)</p>
                            <input type="checkbox" class="toggle-input" id="wiki_display_categorie_icon"
                                   name="wiki_display_categorie_icon" <?= ThemeModel::getInstance()->fetchConfigValue('wiki_display_categorie_icon') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher les icons des articles (menu)</p>
                            <input type="checkbox" class="toggle-input" id="wiki_display_article_categorie_icon"
                                   name="wiki_display_article_categorie_icon" <?= ThemeModel::getInstance()->fetchConfigValue('wiki_display_article_categorie_icon') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher les icons des articles (articles)</p>
                            <input type="checkbox" class="toggle-input" id="wiki_display_article_icon"
                                   name="wiki_display_article_icon" <?= ThemeModel::getInstance()->fetchConfigValue('wiki_display_article_icon') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                </div>
                <div>
                    <h6>Autres :</h6>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher la date de création</p>
                            <input type="checkbox" class="toggle-input" id="wiki_display_creation_date"
                                   name="wiki_display_creation_date" <?= ThemeModel::getInstance()->fetchConfigValue('wiki_display_creation_date') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher la date d'édition</p>
                            <input type="checkbox" class="toggle-input" id="wiki_display_edit_date"
                                   name="wiki_display_edit_date" <?= ThemeModel::getInstance()->fetchConfigValue('wiki_display_edit_date') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Afficher l'auteur</p>
                            <input type="checkbox" class="toggle-input" id="wiki_display_autor"
                                   name="wiki_display_autor" <?= ThemeModel::getInstance()->fetchConfigValue('wiki_display_autor') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="tab-content" id="tab7">
        <!---FORUM---->
        <?php if (PackageController::isInstalled("Forum")): ?>

            <h6>Indéxation de la page (meta) :</h6>
            <div class="alert alert-warning">
                <h6 class="alert-heading">Bien comprendre l'indéxation</h6>
                <p>Ces options changent le titre et la description de votre page dans l'onglet, mais également lors des
                    affichages sur Discord, Twitter...<br>
                    Ceci n'est aucunement lié au titre de la page en cours de modification. Cette option se trouve un
                    peu plus bas (Si votre page est éligible à ce réglage).<br>
                    Si vous avez besoin d'aide supplémentaire vous pouvez contacter le support CraftMyWebsite.</p>
            </div>
            <div class="grid-2">
                <div>
                    <label for="forum_title">Titre de la page :</label>
                    <input type="text" class="input" id="forum_title" name="forum_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_title') ?>" required>
                </div>
                <div>
                    <label for="forum_description">Description de la page :</label>
                    <input type="text" class="input" id="forum_description" name="forum_description"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_description') ?>" required>
                </div>
            </div>
            <hr>
            <h6>Réglages :</h6>
            <div class="grid-4">
                <div>
                    <h6>Titres :</h6>
                    <label for="forum_sub_forum">Sous-Forums :</label>
                    <input type="text" class="input" id="forum_sub_forum" name="forum_sub_forum"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_sub_forum') ?>" required>
                    <label for="forum_topics">Topics :</label>
                    <input type="text" class="input" id="forum_topics" name="forum_topics"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_topics') ?>" required>
                    <label for="forum_message">Messages :</label>
                    <input type="text" class="input" id="forum_message" name="forum_message"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_message') ?>" required>
                    <label for="forum_last_message">Dernier messages :</label>
                    <input type="text" class="input" id="forum_last_message" name="forum_last_message"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_last_message') ?>" required>
                    <label for="forum_display">Affichages :</label>
                    <input type="text" class="input" id="forum_display" name="forum_display"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_display') ?>" required>
                    <label for="forum_response">Réponses :</label>
                    <input type="text" class="input" id="forum_response" name="forum_response"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_response') ?>" required>

                </div>
                <div>

                    <h6>Topic sans message :</h6>
                    <div class="form-group">
                        <label for="forum_nobody_send_message_text">Texte :</label>
                        <input type="text" class="input" id="forum_nobody_send_message_text"
                               name="forum_nobody_send_message_text"
                               value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_nobody_send_message_text') ?>"
                               required>
                    </div>
                    <div class="form-group">
                        <h6>Image :</h6>
                        <div class="flex justify-center">
                            <img class="w-24"
                                 src="<?= ThemeModel::getInstance()->fetchImageLink("forum_nobody_send_message_img") ?>"
                                 alt="Image introuvable !">
                        </div>
                        <div class="drop-img-area" data-input-name="forum_nobody_send_message_img"></div>
                    </div>
                </div>
                <div>

                    <h6>Bouton :</h6>
                    <div class="form-group">
                        <label for="forum_btn_create_topic">Texte :</label>
                        <input type="text" class="input" id="forum_btn_create_topic" name="forum_btn_create_topic"
                               value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_btn_create_topic') ?>"
                               required>
                    </div>
                    <div class="form-group">
                        <div class="icon-picker" data-id="forum_btn_create_topic_icon"
                             data-name="forum_btn_create_topic_icon" data-label="Icône :"
                             data-placeholder="Sélectionner un icon"
                             data-value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_btn_create_topic_icon') ?>"></div>
                    </div>
                </div>

                <div>
                    <label for="forum_breadcrumb_home">Navigation rapide <small>(accueil)</small> :</label>
                    <input type="text" class="input" id="forum_breadcrumb_home" name="forum_breadcrumb_home"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_breadcrumb_home') ?>" required>
                </div>
            </div>
            <hr>
            <div>
                <label class="toggle">
                    <h6 class="toggle-label">Widgets :</h6>
                    <input type="checkbox" class="toggle-input" id="forum_use_widgets"
                           name="forum_use_widgets" <?= ThemeModel::getInstance()->fetchConfigValue('forum_use_widgets') ? 'checked' : '' ?>>
                    <div class="toggle-slider"></div>
                </label>
            </div>
            <div class="grid-3">
                <div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Statistiques :</p>
                            <input type="checkbox" class="toggle-input" id="forum_widgets_show_stats"
                                   name="forum_widgets_show_stats" <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_stats') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <label for="forum_widgets_title_stats">Titre du widget :</label>
                    <input type="text" class="input" id="forum_widgets_title_stats" name="forum_widgets_title_stats"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_title_stats') ?>"
                           required>
                    <hr>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Nombre de membres :</p>
                            <input type="checkbox" class="toggle-input" id="forum_widgets_show_member"
                                   name="forum_widgets_show_member" <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_member') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <input type="text" class="input" id="forum_widgets_text_member" name="forum_widgets_text_member"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_text_member') ?>"
                           required>
                    <hr>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Nombre de messages</p>
                            <input type="checkbox" class="toggle-input" id="forum_widgets_show_messages"
                                   name="forum_widgets_show_messages" <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_messages') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <input type="text" class="input" id="forum_widgets_text_messages" name="forum_widgets_text_messages"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_text_messages') ?>"
                           required>
                    <hr>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Nombre de topics :</p>
                            <input type="checkbox" class="toggle-input" id="forum_widgets_show_topics"
                                   name="forum_widgets_show_topics" <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_topics') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <input type="text" class="input" id="forum_widgets_text_topics" name="forum_widgets_text_topics"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_text_topics') ?>"
                           required>
                </div>
                <div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Discord</p>
                            <input type="checkbox" class="toggle-input" id="forum_widgets_show_discord"
                                   name="forum_widgets_show_discord" <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_discord') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <label for="forum_widgets_content_id">Id Discord :</label>
                    <input type="text" class="input" id="forum_widgets_content_id" name="forum_widgets_content_id"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_content_id') ?>"
                           required>
                </div>
                <div>
                    <div>
                        <label class="toggle">
                            <p class="toggle-label">Widget personnalisé</p>
                            <input type="checkbox" class="toggle-input" id="forum_widgets_show_custom"
                                   name="forum_widgets_show_custom" <?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_show_custom') ? 'checked' : '' ?>>
                            <div class="toggle-slider"></div>
                        </label>
                    </div>
                    <label for="forum_widgets_custom_title">Titre du widget :</label>
                    <input type="text" class="input" id="forum_widgets_custom_title" name="forum_widgets_custom_title"
                           value="<?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_custom_title') ?>"
                           required>
                    <label for="forum_widgets_custom_text">Contenu :</label>
                    <textarea name="forum_widgets_custom_text" id="forum_widgets_custom_text"
                              class="tinymce"><?= ThemeModel::getInstance()->fetchConfigValue('forum_widgets_custom_text') ?></textarea>

                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="tab-content" id="tab8">
        <!---FOOTER---->
        <h6>Réglages :</h6>
        <div class="grid-2">
            <div>
                <label for="footer_year">Année :</label>
                <input type="text" class="input" id="footer_year" name="footer_year"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_year') ?>" required>
            </div>
            <div>
                <label class="toggle">
                    <p class="toggle-label">Ouvrir les liens dans un nouvel onglet</p>
                    <input type="checkbox" class="toggle-input" id="footer_open_link_new_tab"
                           name="footer_open_link_new_tab" <?= ThemeModel::getInstance()->fetchConfigValue('footer_open_link_new_tab') ? 'checked' : '' ?>>
                    <div class="toggle-slider"></div>
                </label>
            </div>
        </div>
        <hr>
        <h4>Conditions générales :</h4>
        <div>
            <label class="toggle">
                <p class="toggle-label">Afficher dans le footer</p>
                <input type="checkbox" class="toggle-input" id="footer_active_condition"
                       name="footer_active_condition" <?= ThemeModel::getInstance()->fetchConfigValue('footer_active_condition') ? 'checked' : '' ?>>
                <div class="toggle-slider"></div>
            </label>
        </div>
        <div class="grid-3">
            <div>
                <label for="footer_title_condition">Titre de section :</label>
                <input type="text" class="input" id="footer_title_condition" name="footer_title_condition"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_title_condition') ?>" required>
            </div>
            <div>
                <label for="footer_desc_condition_use">Condition General d'Utilisation :</label>
                <input type="text" class="input" id="footer_desc_condition_use" name="footer_desc_condition_use"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_desc_condition_use') ?>" required>
            </div>
            <div>
                <label for="footer_desc_condition_sale">Condition General de Vente :</label>
                <input type="text" class="input" id="footer_desc_condition_sale" name="footer_desc_condition_sale"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_desc_condition_sale') ?>"
                       required>
            </div>
        </div>
        <hr>
        <h4>Icônes :</h4>
        <p>Retrouvez les icônes ici : <a href="https://fontawesome.com/search?o=r&m=free" target="_blank">FontAwesome
                (gratuit)</a></p>
        <div class="grid-4">
            <div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Icône 1 :</p>
                        <input type="checkbox" class="toggle-input" id="footer_active_facebook"
                               name="footer_active_facebook" <?= ThemeModel::getInstance()->fetchConfigValue('footer_active_facebook') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div class="text-center">
                    <i style="font-size : 6rem;"
                       class="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_facebook') ?>"></i>
                </div>
                <label for="footer_link_facebook">Lien :</label>
                <input type="text" class="mt-1 input" id="footer_link_facebook" name="footer_link_facebook"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_facebook') ?>" required>
                <div class="icon-picker" data-id="footer_icon_facebook" data-name="footer_icon_facebook"
                     data-label="Icône :" data-placeholder="Sélectionner un icon"
                     data-value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_facebook') ?>"></div>
            </div>
            <div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Icône 2 :</p>
                        <input type="checkbox" class="toggle-input" id="footer_active_twitter"
                               name="footer_active_twitter" <?= ThemeModel::getInstance()->fetchConfigValue('footer_active_twitter') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div class="text-center">
                    <i style="font-size : 6rem;"
                       class="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_twitter') ?>"></i>
                </div>
                <label for="footer_link_twitter">Lien :</label>
                <input type="text" class="mt-1 input" id="footer_link_twitter" name="footer_link_twitter"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_twitter') ?>" required>
                <div class="icon-picker" data-id="footer_icon_twitter" data-name="footer_icon_twitter"
                     data-label="Icône :" data-placeholder="Sélectionner un icon"
                     data-value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_twitter') ?>"></div>
            </div>
            <div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Icône 3 :</p>
                        <input type="checkbox" class="toggle-input" id="footer_active_instagram"
                               name="footer_active_instagram" <?= ThemeModel::getInstance()->fetchConfigValue('footer_active_instagram') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div class="text-center">
                    <i style="font-size : 6rem;"
                       class="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_instagram') ?>"></i>
                </div>
                <label for="footer_link_instagram">Lien :</label>
                <input type="text" class="mt-1 input" id="footer_link_instagram" name="footer_link_instagram"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_instagram') ?>" required>
                <div class="icon-picker" data-id="footer_icon_instagram" data-name="footer_icon_instagram"
                     data-label="Icône :" data-placeholder="Sélectionner un icon"
                     data-value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_instagram') ?>"></div>
            </div>
            <div>
                <div>
                    <label class="toggle">
                        <p class="toggle-label">Icône 4 :</p>
                        <input type="checkbox" class="toggle-input" id="footer_active_discord"
                               name="footer_active_discord" <?= ThemeModel::getInstance()->fetchConfigValue('footer_active_discord') ? 'checked' : '' ?>>
                        <div class="toggle-slider"></div>
                    </label>
                </div>
                <div class="text-center">
                    <i style="font-size : 6rem;"
                       class="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_discord') ?>"></i>
                </div>
                <label for="footer_link_discord">Lien :</label>
                <input type="text" class="mt-1 input" id="footer_link_discord" name="footer_link_discord"
                       value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_discord') ?>" required>
                <div class="icon-picker" data-id="footer_icon_discord" data-name="footer_icon_discord"
                     data-label="Icône :" data-placeholder="Sélectionner un icon"
                     data-value="<?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_discord') ?>"></div>
            </div>
        </div>
    </div>
</div>

<style>
    input[type='color'] {
        -webkit-appearance: none;
        border: black solid 1px;
        width: 20px;
        height: 20px;
        cursor: pointer;
        padding: 0;
    }

    input[type='color']::-webkit-color-swatch-wrapper {
        padding: 0;
    }
    input[type='color']::-webkit-color-swatch {
        border: none;
    }
    input[type='color']::-moz-color-swatch {
        border: none;
    }
</style>

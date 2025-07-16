<?php

use CMW\Manager\Theme\Editor\Entities\EditorMenu;
use CMW\Manager\Theme\Editor\Entities\EditorRangeOptions;
use CMW\Manager\Theme\Editor\Entities\EditorSelectOptions;
use CMW\Manager\Theme\Editor\Entities\EditorType;
use CMW\Manager\Theme\Editor\Entities\EditorValue;

return [
    new EditorMenu(
        title: 'En tête',
        key: 'header',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Afficher les titre',
                themeKey: 'header_active_title',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher le logo',
                themeKey: 'header_active_logo',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher les membres',
                themeKey: 'header_show_members',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Autoriser les connectés',
                themeKey: 'header_show_online',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Logo',
                themeKey: 'header_img_logo',
                defaultValue: 'Config/Default/logo.png',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Autoriser les enregistrement',
                themeKey: 'header_allow_register_button',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Autoriser les connexions',
                themeKey: 'header_allow_login_button',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Message d\'enregistrement interdit',
                themeKey: 'global_no_register_message',
                defaultValue: 'Nous somme désolé mais les inscriptions sont pour le moment désactiver.',
                type: EditorType::TEXT
            ),
        ]
    ),
    new EditorMenu(
        title: 'Bandeau d\'alerte',
        key: 'alert',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'header_alert',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Contenue',
                themeKey: 'header_alert_text',
                defaultValue: 'PixCraft est vraiment un super thème <3',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Couleur du bandeau',
                themeKey: 'header_alert_color',
                defaultValue: '#cbe722',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Durée du flash',
                themeKey: 'header_alert_duration',
                defaultValue: '0.5',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 1,step: 0.1)
                ]
            ),
        ]
    ),
    new EditorMenu(
        title: 'Globaux',
        key: 'global',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Police d\'écriture',
                themeKey: 'website_font',
                defaultValue: 'font-roboto',
                type: EditorType::SELECT,
                selectOptions: [
                    new EditorSelectOptions(value: 'font-angkor', text: 'Angkor'),
                    new EditorSelectOptions(value: 'font-ibmplexsans', text: 'ibmplexsans'),
                    new EditorSelectOptions(value: 'font-kanit', text: 'kanit'),
                    new EditorSelectOptions(value: 'font-lora', text: 'lora'),
                    new EditorSelectOptions(value: 'font-madimione', text: 'madimione'),
                    new EditorSelectOptions(value: 'font-ojuju', text: 'ojuju'),
                    new EditorSelectOptions(value: 'font-opensans', text: 'opensans'),
                    new EditorSelectOptions(value: 'font-playfairdisplay', text: 'playfairdisplay'),
                    new EditorSelectOptions(value: 'font-robotocondensed', text: 'robotocondensed'),
                    new EditorSelectOptions(value: 'font-robotomono', text: 'robotomono'),
                    new EditorSelectOptions(value: 'font-robotoslab', text: 'robotoslab'),
                    new EditorSelectOptions(value: 'font-rubik', text: 'rubik'),
                    new EditorSelectOptions(value: 'font-ubuntu', text: 'ubuntu'),
                    new EditorSelectOptions(value: 'font-roboto', text: 'roboto'),
                    new EditorSelectOptions(value: 'font-unbounded', text: 'unbounded'),
                    new EditorSelectOptions(value: 'font-montserrat', text: 'montserrat'),
                    new EditorSelectOptions(value: 'font-paytone', text: 'paytone'),
                    new EditorSelectOptions(value: 'font-sora', text: 'sora'),
                    new EditorSelectOptions(value: 'font-outfit', text: 'outfit'),
                    new EditorSelectOptions(value: 'font-alata', text: 'alata'),
                    new EditorSelectOptions(value: 'font-titan', text: 'titan'),
                    new EditorSelectOptions(value: 'font-pressstart', text: 'pressstart'),
                    new EditorSelectOptions(value: 'font-abrilfatface', text: 'abrilfatface'),
                    new EditorSelectOptions(value: 'font-afacadflux', text: 'afacadflux'),
                    new EditorSelectOptions(value: 'font-amaticsc', text: 'amaticsc'),
                    new EditorSelectOptions(value: 'font-archivo', text: 'archivo'),
                    new EditorSelectOptions(value: 'font-cabin', text: 'cabin'),
                    new EditorSelectOptions(value: 'font-caveat', text: 'caveat'),
                    new EditorSelectOptions(value: 'font-concretone', text: 'concretone'),
                    new EditorSelectOptions(value: 'font-crimsonpro', text: 'crimsonpro'),
                    new EditorSelectOptions(value: 'font-exo2', text: 'exo2'),
                    new EditorSelectOptions(value: 'font-lato', text: 'lato'),
                    new EditorSelectOptions(value: 'font-lobster', text: 'lobster'),
                    new EditorSelectOptions(value: 'font-marcellus', text: 'marcellus'),
                    new EditorSelectOptions(value: 'font-merriweather', text: 'merriweather'),
                    new EditorSelectOptions(value: 'font-noto', text: 'noto'),
                    new EditorSelectOptions(value: 'font-oleo', text: 'oleo'),
                    new EditorSelectOptions(value: 'font-playwriteausa', text: 'playwriteausa'),
                    new EditorSelectOptions(value: 'font-playwrite', text: 'playwrite'),
                    new EditorSelectOptions(value: 'font-pt', text: 'pt'),
                    new EditorSelectOptions(value: 'font-quicksand', text: 'quicksand'),
                    new EditorSelectOptions(value: 'font-satisfy', text: 'satisfy'),
                    new EditorSelectOptions(value: 'font-silkscreen', text: 'silkscreen'),
                ]
            ),
            new EditorValue(
                title: 'Police d\'écriture secondaire',
                themeKey: 'website_secondary_font',
                defaultValue: 'font-paytone',
                type: EditorType::SELECT,
                selectOptions: [
                    new EditorSelectOptions(value: 'font-angkor', text: 'Angkor'),
                    new EditorSelectOptions(value: 'font-ibmplexsans', text: 'ibmplexsans'),
                    new EditorSelectOptions(value: 'font-kanit', text: 'kanit'),
                    new EditorSelectOptions(value: 'font-lora', text: 'lora'),
                    new EditorSelectOptions(value: 'font-madimione', text: 'madimione'),
                    new EditorSelectOptions(value: 'font-ojuju', text: 'ojuju'),
                    new EditorSelectOptions(value: 'font-opensans', text: 'opensans'),
                    new EditorSelectOptions(value: 'font-playfairdisplay', text: 'playfairdisplay'),
                    new EditorSelectOptions(value: 'font-robotocondensed', text: 'robotocondensed'),
                    new EditorSelectOptions(value: 'font-robotomono', text: 'robotomono'),
                    new EditorSelectOptions(value: 'font-robotoslab', text: 'robotoslab'),
                    new EditorSelectOptions(value: 'font-rubik', text: 'rubik'),
                    new EditorSelectOptions(value: 'font-ubuntu', text: 'ubuntu'),
                    new EditorSelectOptions(value: 'font-roboto', text: 'roboto'),
                    new EditorSelectOptions(value: 'font-unbounded', text: 'unbounded'),
                    new EditorSelectOptions(value: 'font-montserrat', text: 'montserrat'),
                    new EditorSelectOptions(value: 'font-paytone', text: 'paytone'),
                    new EditorSelectOptions(value: 'font-sora', text: 'sora'),
                    new EditorSelectOptions(value: 'font-outfit', text: 'outfit'),
                    new EditorSelectOptions(value: 'font-alata', text: 'alata'),
                    new EditorSelectOptions(value: 'font-titan', text: 'titan'),
                    new EditorSelectOptions(value: 'font-pressstart', text: 'pressstart'),
                    new EditorSelectOptions(value: 'font-abrilfatface', text: 'abrilfatface'),
                    new EditorSelectOptions(value: 'font-afacadflux', text: 'afacadflux'),
                    new EditorSelectOptions(value: 'font-amaticsc', text: 'amaticsc'),
                    new EditorSelectOptions(value: 'font-archivo', text: 'archivo'),
                    new EditorSelectOptions(value: 'font-cabin', text: 'cabin'),
                    new EditorSelectOptions(value: 'font-caveat', text: 'caveat'),
                    new EditorSelectOptions(value: 'font-concretone', text: 'concretone'),
                    new EditorSelectOptions(value: 'font-crimsonpro', text: 'crimsonpro'),
                    new EditorSelectOptions(value: 'font-exo2', text: 'exo2'),
                    new EditorSelectOptions(value: 'font-lato', text: 'lato'),
                    new EditorSelectOptions(value: 'font-lobster', text: 'lobster'),
                    new EditorSelectOptions(value: 'font-marcellus', text: 'marcellus'),
                    new EditorSelectOptions(value: 'font-merriweather', text: 'merriweather'),
                    new EditorSelectOptions(value: 'font-noto', text: 'noto'),
                    new EditorSelectOptions(value: 'font-oleo', text: 'oleo'),
                    new EditorSelectOptions(value: 'font-playwriteausa', text: 'playwriteausa'),
                    new EditorSelectOptions(value: 'font-playwrite', text: 'playwrite'),
                    new EditorSelectOptions(value: 'font-pt', text: 'pt'),
                    new EditorSelectOptions(value: 'font-quicksand', text: 'quicksand'),
                    new EditorSelectOptions(value: 'font-satisfy', text: 'satisfy'),
                    new EditorSelectOptions(value: 'font-silkscreen', text: 'silkscreen'),
                ]
            ),
            new EditorValue(
                title: 'Couleur principale',
                themeKey: 'main_color',
                defaultValue: '#A32E34',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des titres',
                themeKey: 'title_color',
                defaultValue: '#ffffff',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des textes de nav',
                themeKey: 'nav_text_color',
                defaultValue: '#262626',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur (hover) des textes de nav',
                themeKey: 'nav_hover_text_color',
                defaultValue: '#ffffff',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des joueurs',
                themeKey: 'nav_player_name_color',
                defaultValue: '#363232',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des joueurs (background)',
                themeKey: 'nav_player_name_background',
                defaultValue: '#c4c4c4',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du navigateur',
                themeKey: 'nav_background',
                defaultValue: '#f3f3f3',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du texte (en tête)',
                themeKey: 'head_text_color',
                defaultValue: '#ffffff',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur (en tête)',
                themeKey: 'head_background_color',
                defaultValue: '#363232',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Image du profile (vous ne quittez)',
                themeKey: 'profile_broken',
                defaultValue: 'Config/Default/broken.png',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Image page maintenance',
                themeKey: 'maintenance_img',
                defaultValue: 'Config/Default/maintenance.png',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Image page 404',
                themeKey: '404_img',
                defaultValue: 'Config/Default/404.png',
                type: EditorType::IMAGE
            ),
        ]
    ),
    new EditorMenu(
        title: 'Home : Slider',
        key: 'home-slider',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'home_use_slider',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Interval entre les images',
                themeKey: 'slider_interval',
                defaultValue: '5000',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 500, max: 20000,step: 50)
                ]
            ),
            new EditorValue(
                title: 'Durée de la transition',
                themeKey: 'slider_transition_duration',
                defaultValue: '1700',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 500, max: 20000,step: 50)
                ]
            ),
            new EditorValue(
                title: 'Fou de l\'arrière plan',
                themeKey: 'slider_blur',
                defaultValue: '3',
                type: EditorType::NUMBER,
            ),
            new EditorValue(
                title: 'Couleur des textes',
                themeKey: 'slider_text_color',
                defaultValue: '#ffffff',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Activer le slide 1',
                themeKey: 'use_slide_1',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Image du slide 1',
                themeKey: 'slider_img_1',
                defaultValue: 'Config/Default/bg-1.jpg',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Titre du slide 1',
                themeKey: 'slider_title_1',
                defaultValue: 'Bienvenue',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Texte du slide 1',
                themeKey: 'slider_text_1',
                defaultValue: 'Découvrez PixCraft dès maintenant !',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer le slide 2',
                themeKey: 'use_slide_2',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Image du slide 2',
                themeKey: 'slider_img_2',
                defaultValue: 'Config/Default/bg-2.jpg',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Titre du slide 2',
                themeKey: 'slider_title_2',
                defaultValue: 'Explorez le Monde',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Texte du slide 2',
                themeKey: 'slider_text_2',
                defaultValue: 'Partez à la découverte, où chaque coin du monde révèle un trésor caché.',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer le slide 3',
                themeKey: 'use_slide_3',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Image du slide 3',
                themeKey: 'slider_img_3',
                defaultValue: 'Config/Default/bg-3.jpg',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Titre du slide 3',
                themeKey: 'slider_title_3',
                defaultValue: 'Harmonie',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Texte du slide 3',
                themeKey: 'slider_text_3',
                defaultValue: 'Bâtissez votre monde en harmonie, bloc par bloc, aventure après aventure.',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer le slide 4',
                themeKey: 'use_slide_4',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Image du slide 4',
                themeKey: 'slider_img_4',
                defaultValue: 'Config/Default/bg-4.jpg',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Titre du slide 4',
                themeKey: 'slider_title_4',
                defaultValue: 'Design et Créativité',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Texte du slide 4',
                themeKey: 'slider_text_4',
                defaultValue: 'Concevez, créez, et partagez : un monde où chaque bloc est une idée.',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer le slide 5',
                themeKey: 'use_slide_5',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Image du slide 5',
                themeKey: 'slider_img_5',
                defaultValue: 'Config/Default/bg-5.jpg',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Titre du slide 5',
                themeKey: 'slider_title_5',
                defaultValue: 'Hier, Aujourd\'hui, Demain',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Texte du slide 5',
                themeKey: 'slider_text_5',
                defaultValue: 'De pierre en pixel, façonnez hier, explorez aujourd\'hui, rêvez demain.',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Home : Fonctionnalité',
        key: 'home-feature',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'feature_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section',
                themeKey: 'feature_section_title',
                defaultValue: 'Fonctionnalités',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Feature 1 : Image',
                themeKey: 'feature_img_1',
                defaultValue: 'Config/Default/feature1.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Feature 1 : Titre',
                themeKey: 'feature_title_1',
                defaultValue: 'Communauté',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Feature 1 : Description',
                themeKey: 'feature_description_1',
                defaultValue: 'Amet minim mollit non deserunt ullamco est sit aliqua',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Feature 2 : Image',
                themeKey: 'feature_img_2',
                defaultValue: 'Config/Default/feature2.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Feature 2 : Titre',
                themeKey: 'feature_title_2',
                defaultValue: 'Savoir faire',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Feature 2 : Description',
                themeKey: 'feature_description_2',
                defaultValue: 'Amet minim mollit non deserunt ullamco est sit aliqua',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Feature 3 : Image',
                themeKey: 'feature_img_3',
                defaultValue: 'Config/Default/feature3.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Feature 3 : Titre',
                themeKey: 'feature_title_3',
                defaultValue: 'Réactif',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Feature 3 : Description',
                themeKey: 'feature_description_3',
                defaultValue: 'Amet minim mollit non deserunt ullamco est sit aliqua',
                type: EditorType::TEXT
            ),
        ]
    ),
    new EditorMenu(
        title: 'Home : Rejoindre',
        key: 'home-join',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'join_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section',
                themeKey: 'join_title',
                defaultValue: 'Nous rejoindre',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'IP du serveur',
                themeKey: 'join_ip',
                defaultValue: 'play.pixcraft.fr',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Étape',
                themeKey: 'join_step_1',
                defaultValue: 'Étape 1',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Icon',
                themeKey: 'join_icon_1',
                defaultValue: 'fa-solid fa-cube',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Titre',
                themeKey: 'join_title_1',
                defaultValue: 'Lance ton jeu',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Text',
                themeKey: 'join_text_1',
                defaultValue: 'Nous autorisons les versions premium de la <b>1.18</b> à la <b>1.21</b>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Étape',
                themeKey: 'join_step_2',
                defaultValue: 'Étape 2',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Icon',
                themeKey: 'join_icon_2',
                defaultValue: 'fa-solid fa-plus',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Titre',
                themeKey: 'join_title_2',
                defaultValue: 'Ajoute le serveur',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Text',
                themeKey: 'join_text_2',
                defaultValue: 'Rends-toi dans <b>Multijoueur</b> puis clique sur <b>Nouveau serveur</b>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Étape',
                themeKey: 'join_step_3',
                defaultValue: 'Étape 3',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Icon',
                themeKey: 'join_icon_3',
                defaultValue: 'fa-solid fa-keyboard',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Titre',
                themeKey: 'join_title_3',
                defaultValue: 'Saisis l\'adresse',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Text',
                themeKey: 'join_text_3',
                defaultValue: "Ajoute play.pixcraft.fr",
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Étape',
                themeKey: 'join_step_4',
                defaultValue: 'Étape 4',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Icon',
                themeKey: 'join_icon_4',
                defaultValue: 'fa-solid fa-hand-holding-heart',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Titre',
                themeKey: 'join_title_4',
                defaultValue: 'Rejoins-Nous',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Text',
                themeKey: 'join_text_4',
                defaultValue: 'Rejoins-nous et passe un bon moment sur PixCraft',
                type: EditorType::HTML,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - News',
        key: 'home-news',
        scope: null,
        requiredPackage: 'news',
        values: [
            new EditorValue(
                title: 'Activer la section',
                themeKey: 'news_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre',
                themeKey: 'news_section_title',
                defaultValue: 'Nouveautés',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'News à afficher',
                themeKey: 'news_number_display',
                defaultValue: '4',
                type: EditorType::NUMBER,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Newsletter',
        key: 'home-newsletter',
        scope: null,
        requiredPackage: 'newsletter',
        values: [
            new EditorValue(
                title: 'Activer la section',
                themeKey: 'newsletter_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre',
                themeKey: 'newsletter_section_title',
                defaultValue: 'NewsLetter',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Description',
                themeKey: 'newsletter_section_description',
                defaultValue: 'Abonnez-vous à notre newsletter pour ne louper aucune news !',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Bouton',
                themeKey: 'newsletter_section_button',
                defaultValue: 'S\'abonner !',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Contact',
        key: 'home-contact',
        scope: null,
        requiredPackage: 'contact',
        values: [
            new EditorValue(
                title: 'Activer la section',
                themeKey: 'contact_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre',
                themeKey: 'contact_section_title',
                defaultValue: 'Nous contacter',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Custom',
        key: 'home-custom',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer la section 1',
                themeKey: 'custom_section_active_1',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 1',
                themeKey: 'custom_section_title_1',
                defaultValue: 'Titre personnalisé 1',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 1',
                themeKey: 'custom_section_content_1',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Activer la section 2',
                themeKey: 'custom_section_active_2',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 2',
                themeKey: 'custom_section_title_2',
                defaultValue: 'Titre personnalisé 2',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 2',
                themeKey: 'custom_section_content_2',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Activer la section 3',
                themeKey: 'custom_section_active_3',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 3',
                themeKey: 'custom_section_title_3',
                defaultValue: 'Titre personnalisé 3',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 3',
                themeKey: 'custom_section_content_3',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Nouveautés',
        key: 'news',
        scope: 'news',
        requiredPackage: 'news',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'news_page_title',
                defaultValue: 'Les dernières actus !',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'News à afficher',
                themeKey: 'news_page_number_display',
                defaultValue: '20',
                type: EditorType::NUMBER,
            ),
        ]
    ),
    new EditorMenu(
        title: 'F.A.Q',
        key: 'faq',
        scope: 'faq',
        requiredPackage: 'faq',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'faq_page_title',
                defaultValue: 'F.A.Q',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Questions',
                themeKey: 'faq_question_title',
                defaultValue: 'Une question ?',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Réponses',
                themeKey: 'faq_answer_title',
                defaultValue: 'Des réponses',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Afficher l\'auteur',
                themeKey: 'faq_display_autor',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher le formulaire de contact',
                themeKey: 'faq_display_form',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Votes',
        key: 'votes',
        scope: 'vote',
        requiredPackage: 'votes',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'votes_page_title',
                defaultValue: 'Voter',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Participer',
                themeKey: 'votes_participate_title',
                defaultValue: 'Participer',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Afficher les votes globaux',
                themeKey: 'votes_display_global',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Wiki',
        key: 'wiki',
        scope: 'wiki',
        requiredPackage: 'wiki',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'wiki_page_title',
                defaultValue: 'Wiki',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Participer',
                themeKey: 'wiki_menu_title',
                defaultValue: 'Navigation',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Afficher les icons des cats',
                themeKey: 'wiki_display_categorie_icon',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher les icons des articles',
                themeKey: 'wiki_display_article_categorie_icon',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher les icons des articles',
                themeKey: 'wiki_display_article_icon',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher la date du wiki',
                themeKey: 'wiki_display_creation_date',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher la date d\'édition',
                themeKey: 'wiki_display_edit_date',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher l\'auteur',
                themeKey: 'wiki_display_autor',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Forum',
        key: 'forum',
        scope: 'forum',
        requiredPackage: 'forum',
        values: [
            new EditorValue(
                title: 'Activer le widget',
                themeKey: 'forum_use_widgets',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Stats',
                themeKey: 'forum_widgets_show_stats',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Stats : Titre',
                themeKey: 'forum_widgets_title_stats',
                defaultValue: 'Stats du forum',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Membres',
                themeKey: 'forum_widgets_show_member',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Membres : Titre',
                themeKey: 'forum_widgets_text_member',
                defaultValue: 'Membres totaux :',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Messages',
                themeKey: 'forum_widgets_show_messages',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Messages : Titre',
                themeKey: 'forum_widgets_text_messages',
                defaultValue: 'Messages totaux :',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Topics',
                themeKey: 'forum_widgets_show_topics',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Topics : Titre',
                themeKey: 'forum_widgets_text_topics',
                defaultValue: 'Nombres de topics :',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Discord',
                themeKey: 'forum_widgets_show_discord',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Discord : API',
                themeKey: 'forum_widgets_content_id',
                defaultValue: '(Paramètres serveur > Widget > ID serveur)',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Custom',
                themeKey: 'forum_widgets_show_custom',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Custom : Titre',
                themeKey: 'forum_widgets_custom_title',
                defaultValue: 'Widget personnaliser',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Custom : Contenue',
                themeKey: 'forum_widgets_custom_text',
                defaultValue: '<p>Bonjour !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Menu Accueil',
                themeKey: 'forum_breadcrumb_home',
                defaultValue: 'Accueil',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Icon bouton création topic',
                themeKey: 'forum_btn_create_topic_icon',
                defaultValue: 'fa-solid fa-pen-to-square',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Texte bouton création topic',
                themeKey: 'forum_btn_create_topic',
                defaultValue: 'Créer un topic',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre page sous-forum',
                themeKey: 'forum_sub_forum',
                defaultValue: 'Sous-Forums',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre page topics',
                themeKey: 'forum_topics',
                defaultValue: 'Topics',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre page message',
                themeKey: 'forum_message',
                defaultValue: 'Messages',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Dernier messages',
                themeKey: 'forum_last_message',
                defaultValue: 'Dernier messages',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Affichages',
                themeKey: 'forum_display',
                defaultValue: 'Affichages',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Réponses',
                themeKey: 'forum_response',
                defaultValue: 'Réponses',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Forum vide : Message',
                themeKey: 'forum_nobody_send_message_text',
                defaultValue: 'Aucun message',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Footer',
        key: 'footer',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Liens dans un nouvel onglet',
                themeKey: 'footer_open_link_new_tab',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Facebook : Activer',
                themeKey: 'footer_active_facebook',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Facebook : Url',
                themeKey: 'footer_link_facebook',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Facebook : Icon',
                themeKey: 'footer_icon_facebook',
                defaultValue: 'fa-brands fa-facebook',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'X : Activer',
                themeKey: 'footer_active_x',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'X : Url',
                themeKey: 'footer_link_x',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'X : Icon',
                themeKey: 'footer_icon_x',
                defaultValue: 'fa-brands fa-square-x-twitter',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Instagram : Activer',
                themeKey: 'footer_active_instagram',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Instagram : Url',
                themeKey: 'footer_link_instagram',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Instagram : Icon',
                themeKey: 'footer_icon_instagram',
                defaultValue: 'fa-brands fa-instagram',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Discord : Activer',
                themeKey: 'footer_active_discord',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Discord : Url',
                themeKey: 'footer_link_discord',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Discord : Icon',
                themeKey: 'footer_icon_discord',
                defaultValue: 'fa-brands fa-discord',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Afficher les CGU/CGV',
                themeKey: 'footer_active_condition',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre conditions',
                themeKey: 'footer_title_condition',
                defaultValue: 'Conditions',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'CGU',
                themeKey: 'footer_desc_condition_use',
                defaultValue: 'CGU',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'CGV',
                themeKey: 'footer_desc_condition_sale',
                defaultValue: 'CGV',
                type: EditorType::TEXT,
            ),
        ]
    ),
];
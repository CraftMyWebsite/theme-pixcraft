<?php

use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Calendrier");
Website::setDescription("Découvrez nos futur événements");
?>

<section class="py-8 lg:py-16 px-8 md:px-36 2xl:px-96">
    <div style="background-color: var(--bg-pixcraft-features); color: var(--color-pixcraft-features)"
         class="shadow-xl h-fit">
        <div class="page-title-divider text-center pt-1 w-full">
            <h2 class="title-color font-semibold text-xl uppercase">Nos évenements</h2>
        </div>
        <div class="p-4">
            <div id='calendar'></div>
        </div>
    </div>
</section>
<?php
/*
Template Name: Used Truck Tires
*/
?>

<?php get_header(); ?>

<!-- ============================================ -->
<!--                   Banner                     -->
<!-- ============================================ -->

<div id="banner-715">
    <div class="cs-container">
        <span class="cs-int-title"><?php echo wp_title(""); ?></span>
    </div>
    <!--Background Image-->
    <picture class="cs-background">
        <!--Mobile Image-->
        <source media="(max-width: 600px)" srcset="
            <?php echo get_theme_file_uri(
                "img/trailer-tires-stacked_AdobeStock_605804772_Preview.jpeg"
            ); ?>
        ">
        <!--Tablet and above Image-->
        <source media="(min-width: 601px)" srcset="
            <?php echo get_theme_file_uri(
                "img/trailer-tires-stacked_AdobeStock_605804772_Preview.jpeg"
            ); ?>
        ">
        <img loading="lazy" decoding="async" src="
            <?php echo get_theme_file_uri(
                "img/trailer-tires-stacked_AdobeStock_605804772_Preview.jpeg"
            ); ?>
        " alt="pills" width="1280" height="568" aria-hidden="true">
    </picture>
</div>         

<section id="content-page-715">
    <div class="cs-container">
        <div class="cs-content">
            <h1 class="cs-title">
        <span class="cs-int-title cs-color" ><?php echo wp_title(
            ""
        ); ?><br></span>
           <span >in Weslaco, Tx.</span></h1>
            <p>
                <?php echo the_content(); ?>
            </p>
        </div>
        <div class="cs-image-group">
            <picture class="cs-picture">
                <!--Mobile Image-->
                <source media="(max-width: 600px)" srcset="
                    <?php echo get_theme_file_uri(
                        "img/AdobeStock_622815830_Preview.jpeg"
                    ); ?>
                ">
                <!--Tablet and above Image-->
                <source media="(min-width: 601px)" srcset="
                    <?php echo get_theme_file_uri(
                        "img/AdobeStock_622815830_Preview.jpeg"
                    ); ?>
                ">
                <img loading="lazy" decoding="async" src="
                    <?php echo get_theme_file_uri(
                        "img/AdobeStock_622815830_Preview.jpeg"
                    ); ?>
                " alt="person" width="570" height="680">
            </picture>
        </div>
    </div>
    <!--Waves Graphic-->
    <picture class="cs-background">
        <img src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FGraphics%2Flarge-waves.svg" alt="waves" decoding="async" aria-hidden="true" width="625" height="952">
    </picture>
</section>
                                

<?php get_footer(); ?>

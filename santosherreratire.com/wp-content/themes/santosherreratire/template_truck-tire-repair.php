<?php
/*
Template Name: Truck Tire Repair
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
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4-6</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laboriosam eum quae in temporibus cumque tempora expedita mollitia nostrum adipisci, ipsum commodi, cupiditate, sequi quos enim! Quaerat esse non sunt! Lorem ipsum dolor sit amet <a href="">link example</a>. Est, quis!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laboriosam eum quae in temporibus cumque tempora expedita mollitia nostrum <strong>adipisci, ipsum commodi</strong>, cupiditate, sequi quos enim! 
            </p>
            <h3>Heading 3</h3>
            <ol>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            </ol>
            <h4>Heading 4-6</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            </ul>
        </div>
        <div class="cs-image-group">
            <picture class="cs-picture">
                <!--Mobile Image-->
                <source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FPeople%2Fperson7.jpg">
                <!--Tablet and above Image-->
                <source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FPeople%2Fperson7.jpg">
                <img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FPeople%2Fperson7.jpg" alt="person" width="570" height="680">
            </picture>

            <!--Flower Graphic-->
            <img class="cs-flower" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FGraphics%2Fbig-abstract-flower.svg" alt="flower graphic" width="362" height="350" aria-hidden="true">

            <!--Spidey Sense Graphic-->
            <img class="cs-sense" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FGraphics%2Fspider-sense.svg" alt="spidey sense graphic" width="80" height="89" aria-hidden="true">
        </div>
    </div>
    <!--Waves Graphic-->
    <picture class="cs-background">
        <img src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images%2FGraphics%2Flarge-waves.svg" alt="waves" decoding="async" aria-hidden="true" width="625" height="952">
    </picture>
</section>
                                

<?php get_footer(); ?>

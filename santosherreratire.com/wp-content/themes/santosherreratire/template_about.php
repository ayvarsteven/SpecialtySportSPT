<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<!-- ------------------------------ ABOUT HEADER ------------------------------ -->

<section id="content-1450">
    <div class="cs-container">
        <div class="cs-content">
            <span class="cs-topper">Learn More About Santos & Herrera Tire Shop</span>
            <h2 class="cs-title">
                SEE WHY MORE DRIVERS TURN TO OUR TEAM
            </h2>
            <p class="cs-text">
                We offer quality tires for less from the brands you trust and road-worthy used tires. No matter what style of truck you drive, we have your perfect set of tires.
            </p>
            <p class="cs-text">
                One of the hardest things about your vehicle is keeping it rolling all day long. When you need the best services for truck tires, more area drivers prefer our store. From new tire sales to pre-used tires, repairs, and more services, visit Truck Tire Depot.
            </p>
            <a href="
                <?php echo site_url("/contact"); ?>
            " class="cs-button-solid">Speak to An Expert</a>
        </div>
    </div>
</section>
                                
<!-- ------------------------------ ABOUT CONTENT ------------------------------ -->

<section id="sbsr-1207">
    <div class="cs-container">
        <!-- Left Image Section -->
        <div class="cs-image-group">
            <!--To make your own PNG cropped people, use https://www.remove.bg/ to remove the background of any image-->
            <!--Main Image-->
            <picture class="cs-picture">
                <source media="(max-width: 600px)" srcset="
                    <?php echo get_theme_file_uri(
                        "img/AdobeStock_332201184_Preview.jpeg"
                    ); ?>
                ">
                <source media="(min-width: 601px)" srcset="
                    <?php echo get_theme_file_uri(
                        "img/AdobeStock_332201184_Preview.jpeg"
                    ); ?>
                ">
                <img loading="lazy" decoding="async" src="
                    <?php echo get_theme_file_uri(
                        "img/AdobeStock_332201184_Preview.jpeg"
                    ); ?>
                " alt="tires" width="522" height="793"  aria-hidden="true">
            </picture>
        </div>
        <!-- Right Content Section-->
        <div class="cs-content">
            <span class="cs-topper">
                SEE WHY MORE DRIVERS TURN TO OUR TEAM
            </span>
            <h2 class="cs-title">Learn More About Santos & Herrera Tire Shop</h2>
            <h3 class="cs-h3">
                We offer quality tires for less from the brands you trust and road-worthy used tires. No matter what style of truck you drive, we have your perfect set of tires.
            </h3>
            <p class="cs-text">
                One of the hardest things about your vehicle is keeping it rolling all day long. When you need the best services for truck tires, more area drivers prefer our store. From new tire sales to pre-used tires, repairs, and more services, visit Truck Tire Depot.
            </p>
            <div class="cs-content-flair">
                <ul class="cs-ul">
                    <li class="cs-li">Affordable Pricing</li>
                    <li class="cs-li">Quality Name-Brand Tires</li>
                    <li class="cs-li">Certified Safe Used Tires</li>
                    <li class="cs-li">Experienced Repair Staff</li>
                    <li class="cs-li">Friendly Sales Team</li>
                    <li class="cs-li">Professional Tools and Equipment</li>
                    <li class="cs-li">Convenient Store Location</li>
                    <li class="cs-li">Tires for Trailers and More</li>
                </ul>
            </div>
        </div>
    </div>
</section>
                                

<?php get_footer(); ?>

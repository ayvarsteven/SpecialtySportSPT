<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<!-- ============================================ -->
<!--             Side By Side Reverse             -->
<!-- ============================================ -->

<section id="sbsr-1207">
    <div class="cs-container">
        <!-- Left Image Section -->
        <div class="cs-image-group">
            <!--To make your own PNG cropped people, use https://www.remove.bg/ to remove the background of any image-->
            <!--Main Image-->
            <picture class="cs-picture">
                <source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/accountant2.png">
                <source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/accountant2.png">
                <img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/accountant2.png" alt="person with box" width="522" height="793"  aria-hidden="true">
            </picture>
            <!--Small Image-->
            <div class="cs-box">
                <img class="cs-box-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/growth.svg" alt="icon" width="40" height="40" aria-hidden="true">
                <span class="cs-box-header">Business Growth</span>
                <ul class="cs-box-ul">
                    <li class="cs-box-li">Global Industry</li>
                    <li class="cs-box-li">Smart Solution</li>
                    <li class="cs-box-li">Fast Process</li>
                </ul>
            </div>
            <div class="cs-stat">
                <div class="cs-ring-wrapper">
                    <span class="cs-number">90%</span>
                    <!--Change the --ratio to the decimal percentage of this circle-->
                    <svg class="cs-ring" style="--ratio: 0.90">
                        <circle cx="50%" cy="50%" r="50%"/>
                        <circle cx="50%" cy="50%" r="50%"/>
                    </svg>
                </div>
                <span class="cs-header">Project Success</span>
                <span class="cs-desc">by assisted startup</span>
            </div>
            <!--Circle Graphic-->
            <img class="cs-graphic" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/swirl.svg" alt="graphic" width="950" height="950" aria-hidden="true">
        </div>
        <!-- Right Content Section-->
        <div class="cs-content">
            <span class="cs-topper">About Us</span>
            <h2 class="cs-title">Always Ready to Invest in Any Business</h2>
            <h3 class="cs-h3">We consider all the drivers of change gives you the blocks pride for our components you need to change to create.</h3>
            <p class="cs-text">
                In the new era of technology we look in the future with certainty and pride for our company and business. consider all the drivers of change gives you the blocks & pride for our components you need to change to create a truly professional website In the new era.
            </p>
            <div class="cs-content-flair">
                <ul class="cs-ul">
                    <li class="cs-li">Stage-focused investing.</li>
                    <li class="cs-li">Sector specialization.</li>
                    <li class="cs-li">Active involvement.</li>
                    <li class="cs-li">Portfolio diversification.</li>
                    <li class="cs-li">Achieving a return.</li>
                </ul>
                <a href="" class="cs-video-link">
                    <!--BG Image-->
                    <img class="cs-video-bg" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/video-bg.jpg" alt="people" width="280" height="160" aria-hidden="true">
                    <!--Play Icon-->
                    <picture class="cs-wrapper">
                        <img class="cs-link-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/play-sharp2.svg" alt="graphic" width="24" height="24" aria-hidden="true">
                    </picture>
                </a>
            </div>
            <a class="cs-button-solid" aria-label="learn more about our programs" href="">Learn More</a>
        </div>
    </div>
</section>
                                

<?php get_footer(); ?>

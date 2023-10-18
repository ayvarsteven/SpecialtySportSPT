<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="main-nav-container">

            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_theme_file_uri('/images/png/apple-dental-cosmetics-logo.png') ?>" alt="apple-dental-cosmetics-logo">
            </a>

            <ul class="office-info-container">
                <li class="office-info-container__subcontainer">
                    <img src="<?php echo get_theme_file_uri( '/images/svg/phone-icon@2x.svg' ) ?>" alt="phone icon">
                    <span>
                        Book A Consultation<br>
                        <span class="bold">
                            USA (956) 246-4100<br>
                            Mexico 011 52 899 937 0723
                        </span>
                    </span>
                </li>

                <li class="office-info-container__subcontainer">
                    <img src="<?php echo get_theme_file_uri( '/images/svg/clock-icon@2x.svg' ) ?>" alt="clock icon">
                    <span>
                        Monday - Friday | 8:00 AM - 4:00 PM <br>
                        <span class="bold">Saturday By Appointment Only</span>
                    </span>
                </li>

                <li class="office-info-container__subcontainer">
                    <img src="<?php echo get_theme_file_uri( '/images/svg/maps-icon.svg' ) ?>" alt="maps icon">
                    <span>
                        Coahuila No. 221, Suite 5 <br>
                        <span class="bold">Nuevo Progreso, Mexico</span>
                    </span>
                </li>
            </ul>
        </div>

        <ul class="links-menu">
            <li><a href="<?php echo get_page_uri() ?>/home">Home</a></li>
            <li><a href="<?php echo get_page_uri() ?>/about-the-doctors">About The Doctors</a></li>
            <li><a href="<?php echo get_page_uri() ?>/services">Services</a></li>
            <li><a href="<?php echo get_page_uri() ?>/contact">Contact</a></li>
        </ul>
    </header>

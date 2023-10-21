<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<!-- ============================================ -->
<!--                Contact Form                  -->
<!-- ============================================ -->

<section id="cs-contact-490">
    <div class="cs-container">
        <!-- Contact Info -->
        <div class="cs-content">
            <span class="cs-topper">Contact Us</span>
            <h2 class="cs-title">Contact Information</h2>
            <p class="cs-text">
                Got questions?  Feel free to drop your details and we will get back to you as soon as possible. You can also contact us with the details below.
            </p>
            
            <!--Address-->
            <span class="cs-header">Address</span>
            <a href="" class="cs-link">
                706 W Railroad St,  
                <br>Weslaco, TX 78596
            </a>
            <!--Email-->
            <span class="cs-header">Email</span>
            <a href="mailtp:info@iabuyer.com" class="cs-link">ed@cleardesigngraphics.com</a>
            <!--Phone-->
            <span class="cs-header">Phone</span>
            <a href="tel:425-686-9566" class="cs-link">(956) 968-9093</a>

        </div>
        <!-- Form -->
        <form id="cs-form-490" name="Contact Form" method="post">
            <label class="cs-label">
                Name
                <input class="cs-input" required type="text" id="name-490" name="name" placeholder="John/Jane Doe">
            </label>
            <label class="cs-label">
                Email
                <input class="cs-input" required type="text" id="email-490" name="email" placeholder="name@company.com">
            </label>
            <label class="cs-label">
                Phone
                <input class="cs-input" required type="text" id="phone-490" name="phone" placeholder="+1 (206) 987-6543">
            </label>
            <label class="cs-label">
                How Did You Find Us
                <input class="cs-input" type="text" id="find-490" name="find-us" placeholder="Social Media, Family, Friend...">
            </label>
            <label class="cs-label -label-message">
                Message
                <textarea class="cs-input" required name="Message" id="message-490" placeholder="Hello, I’m interested in..."></textarea>
            </label>
            <button class="cs-button-solid" type="submit">Submit Message Now</button>
        </form>
    </div>
</section>
                                

<?php get_footer(); ?>


<footer>
    <!-- ----------------------------------------------------------------------- -->
    <!--                                 FOOTER                                  -->
    <!-- ----------------------------------------------------------------------- -->

    <section id="cs-footer-710">
      <div class="cs-container">
        <!--Top Section-->
        <div class="cs-top">
          <!--Warpped logo in wrapper div so that div can be 100% width to force the lists below it to stay in their line.  The cs-logo can maintain its' max width. we didn't want it 100% width becuase then the blank area to the right of the logo will also result in a click and hover event. -->
          <div class="cs-logo-wrapper">
            <a href="" class="cs-logo">
              <img
                src="
                  <?php echo get_theme_file_uri(
                      "img/santos-and-herrera-logo_solid.png"
                  ); ?>
                "
                alt="logo"
                aria-hidden="true"
                loading="lazy"
                decoding="async"
                width="210"
                height="80"
              />
            </a>
          </div>
          <ul class="cs-ul">
            <li class="cs-li">
              <span class="cs-header">Quick Links</span>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/home"); ?>
              " class="cs-link">Home</a>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/about"); ?>
              " class="cs-link">About</a>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/contact"); ?>
              " class="cs-link">Contact us</a>
            </li>
          </ul>
          <ul class="cs-ul">
            <li class="cs-li">
              <span class="cs-header">Services</span>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/truck-tire-sales"); ?>
              " class="cs-link">Truck Tire Sales</a>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/truck-tire-repair"); ?>
              " class="cs-link">Truck Tire Repair</a>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/new-truck-tires"); ?>
              " class="cs-link">New Truck Tires</a>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/used-truck-tires"); ?>
              " class="cs-link">Used Truck Tires</a>
            </li>
            <li class="cs-li">
              <a href="
                  <?php echo site_url("/trailer-tires"); ?>
              " class="cs-link">Trailer Tires</a>
            </li>
          </ul>
          <ul class="cs-ul cs-contact-ul">
            <li class="cs-li">
              <span class="cs-header">Contact</span>
            </li>
            <li class="cs-li">
              <a href="tel:956-968-9093" class="cs-link">
                <img
                  class="cs-icon"
                  src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fphone-stroke.svg"
                  alt="icon"
                  loading="lazy"
                  decoding="async"
                  width="24"
                  height="24"
                  aria-hidden="true"
                />
                +1 (956) 968-9093
              </a>
            </li>
            <li class="cs-li">
              <a href="mailto:ed@cleardesigngraphics.com" class="cs-link">
                <img
                  class="cs-icon"
                  src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fmail-stroke.svg"
                  alt="icon"
                  loading="lazy"
                  decoding="async"
                  width="24"
                  height="24"
                  aria-hidden="true"
                />
                info@santosherreratire.com
              </a>
            </li>
            <li class="cs-li">
              <a href="" class="cs-link" target="_blank" rel="noopener">
                <img
                  class="cs-icon"
                  src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fpin-stroke.svg"
                  alt="icon"
                  loading="lazy"
                  decoding="async"
                  width="24"
                  height="24"
                  aria-hidden="true"
                />
                706 W Railroad St, Weslaco, TX 78596
              </a>
            </li>
          </ul>
        </div>
        <!--Middle Section-->
        <div class="cs-middle">
          <!--Navigation-->
          <ul class="cs-nav">
            <li class="cs-nav-li">
              <a href="
                  <?php echo site_url("/home"); ?>
              " class="cs-nav-link">Home</a>
            </li>
            <li class="cs-nav-li">
              <a href="
                  <?php echo site_url("/about"); ?>
              " class="cs-nav-link">About</a>
            </li>
            <li class="cs-nav-li">
              <a href="
                  <?php echo site_url("/services"); ?>
              " class="cs-nav-link">Services</a>
            </li>
            <li class="cs-nav-li">
              <a href="
                  <?php echo site_url("/contact"); ?>
              " class="cs-nav-link">Contact</a>
            </li>
          </ul>
          <!--Social-->
        </div>
        <!--Bottom Section-->
        <div class="cs-bottom">
          <span class="cs-copyright">
            © Copyright 2023 -
            <a href="" class="cs-copyright-link" target="_blank" rel="noopener"
              >Santos & Herrera Tire Shop</a
            >
          </span>
        </div>
      </div>
      <!--SVG Waves-->
      <img
        class="cs-graphic"
        src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Ffooter-waves.svg"
        alt="waves"
        aria-hidden="true"
        loading="lazy"
        decoding="async"
        width="1920"
        height="616"
      />
    </section>
</footer>


<?php wp_footer(); ?>
</body>
</html>
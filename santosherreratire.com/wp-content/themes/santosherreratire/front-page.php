
<?php get_header(); ?>


    <!-- ----------------------------------------------------------------------- -->
    <!--                                  HERO                                   -->
    <!-- ----------------------------------------------------------------------- -->

<section id="hero-143">
    <div class="cs-container">
        <h1 class="cs-title">Truck Tire Sales & Services in Weslaco, TX</h1>
        <p class="cs-text">
          Santos & Herrera offers the best services for truck tires throughout the Weslaco, Texas. Save more on new and used tires and repairs today.
        </p>
          <a href="<?php echo site_url(
              "/contact"
          ); ?>" class="cs-button-solid">Contact Us</a>
    </div>

    <!-- Background Image -->
    <picture class="cs-background">
        <source media="(max-width: 600px)" srcset="<?php echo get_theme_file_uri(
            "img/trailer-tire-close-up_221049051_Preview.jpeg"
        ); ?>">
        <source media="(min-width: 601px)" srcset="<?php echo get_theme_file_uri(
            "img/trailer-tire-close-up_221049051_Preview.jpeg"
        ); ?>">
        <img loading="lazy" decoding="async" src="<?php echo get_theme_file_uri(
            "img/trailer-tire-close-up_221049051_Preview.jpeg"
        ); ?>" alt="trailer tires" width="2250" height="1500" aria-hidden="true">
    </picture>
</section>

                                

    <!-- ------------------------------ HERO-CARD ------------------------------ -->

    <section id="h-services-143">
      <ul class="cs-card-group">
        <li class="cs-item">
          <picture class="cs-icon">
            <img
              loading="lazy"
              decoding="async"
              src="<?php echo get_theme_file_uri("img/money-saving.png"); ?>"
              alt="icon"
              width="52"
              height="52"
              aria-hidden="true"
            />
          </picture>
          <h2 class="cs-title">Truck Tire Sales</h2>
          <p class="cs-text">
            Top brands at affordable prices. Our helpful sales staff will walk you through any questions or concerns that you have.
          </p>
        </li>
        <li class="cs-item">
          <picture class="cs-icon">
            <img
              loading="lazy"
              decoding="async"
              src="<?php echo get_theme_file_uri("img/spare-tire.png"); ?>"
              alt="icon"
              width="52"
              height="52"
              aria-hidden="true"
            />
          </picture>
          <h2 class="cs-title">Truck Tire Repair</h2>
          <p class="cs-text">
            We offer a broad range of truck tire repairs that last, offering you better solutions. 
          </p>
        </li>
        <li class="cs-item">
          <picture class="cs-icon">
            <img
              loading="lazy"
              decoding="async"
              src="<?php echo get_theme_file_uri("img/wheel.png"); ?>"
              alt="icon"
              width="52"
              height="52"
              aria-hidden="true"
            />
          </picture>
          <h2 class="cs-title">New Truck Tires</h2>
          <p class="cs-text">
            Visit us today for your affordable selection of new truck tires in Weslaco, TX.
          </p>
        </li>
        <li class="cs-item">
          <picture class="cs-icon">
            <img
              loading="lazy"
              decoding="async"
              src="<?php echo get_theme_file_uri("img/stacked-tires.png"); ?>"
              alt="icon"
              width="52"
              height="52"
              aria-hidden="true"
            />
          </picture>
          <h2 class="cs-title">Used Truck Tires</h2>
          <p class="cs-text">
            Santos & Herrera Tire Shop only sells tires that you can trust. We inspect each one for safety concerns before you buy
          </p>
        </li>
        <li class="cs-item">
          <picture class="cs-icon">
            <img
              loading="lazy"
              decoding="async"
              src="<?php echo get_theme_file_uri("img/tire.png"); ?>"
              alt="icon"
              width="52"
              height="52"
              aria-hidden="true"
            />
          </picture>
          <h2 class="cs-title">Trailer Tires</h2>
          <p class="cs-text">
            We carry an extensive range of quality tires, including medium and heavy duty trailer, truck, and RV tires.
          </p>
        </li>
      </ul>
    </section>

    <!-- ============================================ -->
    <!--                Contact Form                  -->
    <!-- ============================================ -->

    <section id="cs-contact-490">
      <div class="cs-container">
        <!-- Contact Info -->
        <div class="cs-content">
          <span class="cs-topper">Request a Quote</span>
          <h2 class="cs-title">Available Services</h2>
          <p class="cs-text">
            Sanchez & Herrera offers the best services for truck tires
            throughout the Weslaco, Texas, community. Save more on new and used
            tires and repairs today.
          </p>

          <span class="cs-topper__black">Passenger Vehicles</span>
          <ul>
            <li>Tire Repair</li>
            <li>Rotation</li>
            <li>Balance</li>
            <li>Same day service for most repairs</li>
          </ul>

          <span class="cs-topper__black">Trucks</span>
          <ul>
            <li>Alignments</li>
            <li>Suspension Work</li>
            <li>Breaks</li>
            <li>Field Service</li>
          </ul>

          <!--Social Buttons-->
        </div>
        <!-- Form -->
        <form id="cs-form-490" name="Contact Form" method="post">
          <label class="cs-label">
            Name
            <input
              class="cs-input"
              required
              type="text"
              id="name-490"
              name="name"
              placeholder="John/Jane Doe"
            />
          </label>
          <label class="cs-label">
            Email
            <input
              class="cs-input"
              required
              type="text"
              id="email-490"
              name="email"
              placeholder="name@company.com"
            />
          </label>
          <label class="cs-label">
            Phone
            <input
              class="cs-input"
              required
              type="text"
              id="phone-490"
              name="phone"
              placeholder="+1 (206) 987-6543"
            />
          </label>
          <label class="cs-label">
            How Did You Find Us
            <input
              class="cs-input"
              type="text"
              id="find-490"
              name="find-us"
              placeholder="Social Media, Family, Friend..."
            />
          </label>
          <label class="cs-label -label-message">
            Message
            <textarea
              class="cs-input"
              required
              name="Message"
              id="message-490"
              placeholder="Hello, I’m interested in..."
            ></textarea>
          </label>
          <button class="cs-button-solid" type="submit">Get Your Quote</button>
        </form>
      </div>
    </section>

    <!-- ----------------------------------------------------------------------- -->
    <!--                            VALUE PROPOSITION                            -->
    <!-- ----------------------------------------------------------------------- -->

    <!-- ============================================ -->
    <!--                Side By Side                  -->
    <!-- ============================================ -->

    <section id="sbs-1073">
      <div class="cs-container">
        <div class="cs-image-group">
          <!--Top left image-->
          <picture class="cs-picture cs-picture1">
            <!--Mobile Image-->
            <source
              media="(max-width: 600px)"
              srcset="
                https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic4.jpg
              "
            />
            <!--Tablet and above Image-->
            <source
              media="(min-width: 601px)"
              srcset="
                https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic4.jpg
              "
            />
            <img
              loading="lazy"
              decoding="async"
              src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic4.jpg"
              alt="mechanic"
              width="217"
              height="440"
            />
          </picture>
          <!--Middle image-->
          <picture class="cs-picture cs-picture2">
            <!--Mobile Image-->
            <source
              media="(max-width: 600px)"
              srcset="
                https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic5.jpg
              "
            />
            <!--Tablet and above Image-->
            <source
              media="(min-width: 601px)"
              srcset="
                https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic5.jpg
              "
            />
            <img
              loading="lazy"
              decoding="async"
              src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic5.jpg"
              alt="mechanic"
              width="305"
              height="600"
            />
          </picture>
          <!--Bottom right image-->
          <picture class="cs-picture cs-picture3">
            <!--Mobile Image-->
            <source
              media="(max-width: 600px)"
              srcset="
                https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic6.jpg
              "
            />
            <!--Tablet and above Image-->
            <source
              media="(min-width: 601px)"
              srcset="
                https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic6.jpg
              "
            />
            <img
              loading="lazy"
              decoding="async"
              src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechanic6.jpg"
              alt="mechanic"
              width="216"
              height="440"
            />
          </picture>
          <!--Stripe background-->
          <img
            class="cs-stripes"
            loading="lazy"
            decoding="async"
            src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/stripes.svg"
            alt="stripes"
            width="509"
            height="535"
            aria-hidden="true"
          />
        </div>
        <div class="cs-content">
          <span class="cs-topper">Why Choose Us</span>
          <h2 class="cs-title">New and Used Truck Tires in Weslaco, TX</h2>
          <p class="cs-text">
          Some drivers prefer to buy a set of new tires and forget about maintenance needs. Others want a more affordable price upfront until they can replace them with brand-new tires. <br></br>

          Before you pay more at a franchised tire retailer, see our best selection and save. We carry only the best new and used truck tires around, all at lower costs. <br></br>

          No matter what type of tire buyer you are, we can help you save more on services. Visit our store today and find the best selection of new and used tires, including:
          </p>
          <ul class="cs-list">
            <li class="cs-li">Uniroyal</li>
            <li class="cs-li">Firestone</li>
            <li class="cs-li">Fallen</li>
            <li class="cs-li">Koryo</li>
            <li class="cs-li">Inspect Used Tires</li>
            <li class="cs-li">Flat Tire Replacements</li>
            <li class="cs-li">Large Brand Selection</li>
          </ul>
          <a class="cs-link" href="tel:956-968-9093">
            <picture class="cs-wrapper">
              <img
                class="cs-icon"
                loading="lazy"
                decoding="async"
                src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/white-phone.svg"
                alt="icon"
                width="24"
                height="24"
              />
            </picture>
            <div class="cs-info">
              <span class="cs-header">Call Anytime</span>
              <span class="cs-link-content">(956) 968-9093</span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!--              Side By Side Reverse            -->
    <!-- ============================================ -->

    <section id="sbsr-1279">
      <div class="cs-container">
        <picture class="cs-picture">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_432237425_Preview.jpeg"
              ); ?>
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_432237425_Preview.jpeg"
              ); ?>
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_432237425_Preview.jpeg"
              ); ?>
            "
            alt="construction"
            width="738"
            height="598"
          />
        </picture>
        <div class="cs-content">
          <div class="cs-flex">
            <span class="cs-topper">Our Company</span>
            <h2 class="cs-title">Why Choose Us for Services for Truck Tires?</h2>
          </div>
          <p class="cs-text">
            You have many choices for your truck’s tires, so why choose us for your needs? Visiting our store means an affordable and convenient experience for any services you need most. <br></br>

            Buying your tires online usually still means you have to take a trip to a garage for installation. Even with the expense of purchasing the equipment, you need an experienced truck tire mechanic for help. <br></br>

            Our staff offers the best value possible on new and used tire sales. Plus, our expert team of repair contractors keeps your truck running better all year. <br></br>
          </p>
          <a href="<?php echo site_url(
              "/contact"
          ); ?>" class="cs-button-solid">Contact</a>
        </div>
      </div>
      <picture class="cs-background">
        <!--Mobile Image-->
        <source
          media="(max-width: 600px)"
          srcset="
            https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/white-waves-m.svg
          "
        />
        <!--Tablet and above Image-->
        <source
          media="(min-width: 601px)"
          srcset="
            https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/white-waves.svg
          "
        />
        <img
          loading="lazy"
          decoding="async"
          src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/white-waves.svg"
          alt="waves"
          width="960"
          height="839"
        />
      </picture>
    </section>

    <!-- ----------------------------------------------------------------------- -->
    <!--                                SERVICES                                 -->
    <!-- ----------------------------------------------------------------------- -->

    <!-- ============================================ -->
    <!--                 Side By Side                 -->
    <!-- ============================================ -->

    <section id="RPsbs-580">
      <div class="cs-container">
        <picture class="cs-picture">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/trailer-tires-stacked_AdobeStock_605804772_Preview.jpeg"
              ); ?>
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/trailer-tires-stacked_AdobeStock_605804772_Preview.jpeg"
              ); ?>
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="
              <?php echo get_theme_file_uri(
                  "img/trailer-tires-stacked_AdobeStock_605804772_Preview.jpeg"
              ); ?>
            "
            alt="room"
            width="494"
            height="700"
          />
        </picture>
        <div class="cs-content">
          <span class="cs-topper">Read About</span>
          <h2 class="cs-title">Truck Tire Sales</h2>
          <p class="cs-text">
            You thought you were getting your new truck tires for a steal online, but at check out you find out it’s not that great. Taxes, shipping costs, disposal fees, and more, make online tire purchases not worth the hassle. <br></br>Instead, we carry the top brands at affordable prices, as well as used truck tires. Whatever set of Tires you prefer, you can count on us for better sales experiences. We understand shopping for new tires isn’t the most enjoyable thing, but we can help. Our helpful sales staff will walk you through any questions or concerns that you have. <br></br>When you need a better option for buying truck tires, visit our store for savings. Find your quality selection of new and used tires from trusted brands at lower costs.
          </p>
          <p class="cs-text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum
          </p>
          <a href="<?php echo site_url(
              "/truck-tire-sales"
          ); ?>" class="cs-button-solid">Read More</a>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!--             Side By Side Reverse             -->
    <!-- ============================================ -->

    <section id="RPsbsr-580">
      <div class="cs-container">
        <picture class="cs-picture">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_555057175_Preview.jpeg"
              ); ?> 
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_555057175_Preview.jpeg"
              ); ?> 
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_555057175_Preview.jpeg"
              ); ?> 
            "
            alt="room"
            width="494"
            height="700"
          />
        </picture>
        <div class="cs-content">
          <span class="cs-topper">Read About</span>
          <h2 class="cs-title">Truck Tire Repair</h2>
          <p class="cs-text">
            Many drivers replace a tire that could have otherwise been repaired for less. Unfortunately, when your nearest service shop doesn’t offer many options, you end up paying more.We offer a broad range of truck tire repairs that last, offering you better solutions. Contact us today to hear more about your maintenance options.
          </p>

          <p class="cs-text">
            Even a small puncture can sideline an entire vehicle, and we are here for you. When you need more truck tire repairs for less each time, you need our store.From flats and punctures to machining and balancing needs, we offer plenty of maintenance options. Avoid costly rubber tire replacements with our affordable truck tire repairs and experienced service technicians.
          </p>
          <a href="<?php echo site_url(
              "/truck-tire-repair"
          ); ?>" class="cs-button-solid">Read More</a>
        </div>
      </div>
    </section>
    <!-- ============================================ -->
    <!--                 Side By Side                 -->
    <!-- ============================================ -->

    <section id="RPsbs-580">
      <div class="cs-container">
        <picture class="cs-picture">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_518044474_Preview.jpeg"
              ); ?>
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_518044474_Preview.jpeg"
              ); ?>
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_518044474_Preview.jpeg"
              ); ?>
            "
            alt="room"
            width="494"
            height="700"
          />
        </picture>
        <div class="cs-content">
          <span class="cs-topper">Read About</span>
          <h2 class="cs-title">Used Truck Tires</h2>
          <p class="cs-text">
            You know that buying used truck tires can save you more, but what about safety? When you don’t know who you buy your tires from, you can’t guarantee their reliability.
          </p>
          <p class="cs-text">
            When you choose us at Santos & Herrera Tire Shop, it means you get used tires that you can trust. We inspect each one for safety concerns before you buy.
          </p>
          <p class="cs-text">
            When you need an affordable selection of used truck tires, we always save you more. Don’t settle for pre-owned tires that quickly fail. Choose our store for reliable tires.
          </p>
          <a href="<?php echo site_url(
              "used-truck-tires"
          ); ?>" class="cs-button-solid">Read More</a>
        </div>
      </div>
    </section>

    <!-- ============================================ -->
    <!--             Side By Side Reverse             -->
    <!-- ============================================ -->

    <section id="RPsbsr-580">
      <div class="cs-container">
        <picture class="cs-picture">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_407340916_Preview.jpeg"
              ); ?>  
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_407340916_Preview.jpeg"
              ); ?>  
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="
              <?php echo get_theme_file_uri(
                  "img/AdobeStock_407340916_Preview.jpeg"
              ); ?>  
            "
            alt="room"
            width="494"
            height="700"
          />
        </picture>
        <div class="cs-content">
          <span class="cs-topper">Read About</span>
          <h2 class="cs-title">New Truck Tires</h2>
          <p class="cs-text">
            Today’s consumers have too many options available when they need new truck tires and parts. Not only is it more challenging to size them correctly, but savings aren’t always accurate.
          </p>
          <p class="cs-text">
            An online store may offer a lower price up front, but then other fees add up. Instead, you can visit us today for your affordable selection of new truck tires, and:
          </p>
          <p class="cs-text">
            Buying new tires doesn’t have to mean going to the same store that you dislike. When trying to shop online becomes too challenging, we make the process simple again.
          </p>
          <p class="cs-text">
            When your truck deserves the best new set of tires around, choose our local store. We can help you keep your vehicle safer for less with trusted brands and more.
          </p>
          <a href="<?php echo site_url(
              "/new-truck-tires"
          ); ?>" class="cs-button-solid">Read More</a>
        </div>
      </div>
    </section>
    
    <!-- ------------------------------ TRAILER TIRES ----------------------------- -->

    <section id="RPsbs-580">
      <div class="cs-container">
        <picture class="cs-picture">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
             <?php echo get_theme_file_uri(
                 "img/tire-service_292977732_Preview.jpeg"
             ); ?>
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
             <?php echo get_theme_file_uri(
                 "img/tire-service_292977732_Preview.jpeg"
             ); ?>
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="
             <?php echo get_theme_file_uri(
                 "img/tire-service_292977732_Preview.jpeg"
             ); ?>
            "
            alt="room"
            width="494"
            height="700"
          />
        </picture>
        <div class="cs-content">
          <span class="cs-topper">Read About</span>
          <h2 class="cs-title">Trailer Tires</h2>
          <p class="cs-text">
            Trailers can take on many different functions and forms, but they all need tires eventually. No matter what type of trailer you drive, haul or use daily, shop with us.
          </p>
          <p class="cs-text">
            We carry a wide selection of trailer tires that keep you working. From efficient hauling to offering contractor services to others.
          </p>
          <p class="cs-text">
            Even the most expensive trailer won’t go anywhere without the right set of quality tires. Save more on the tires you need the most with our affordable selection for trailers.
          </p>
          <a href="<?php echo site_url(
              "/trailer-tires"
          ); ?>" class="cs-button-solid">Read More</a>
        </div>
      </div>
    </section>

    <!-- ----------------------------------------------------------------------- -->
    <!--                                  LOGOS                                  -->
    <!-- ----------------------------------------------------------------------- -->

    <section id="logos-572">
      <div class="cs-container">
        <!--Ideally you want to use svg's for the file path image, which is why these aren't wrapped in picture elements for different screen sizes-->
        <img
          class="cs-logo"
          src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Logos/logo1.png"
          alt="logo"
          width="287"
          height="65"
          loading="lazy"
          decoding="async"
        />
        <img
          class="cs-logo"
          src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Logos/logo2.png"
          alt="logo"
          width="229"
          height="55"
          loading="lazy"
          decoding="async"
        />
        <img
          class="cs-logo"
          src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Logos/logo3.png"
          alt="logo"
          width="235"
          height="53"
          loading="lazy"
          decoding="async"
        />
        <img
          class="cs-logo"
          src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Logos/logo4.png"
          alt="logo"
          width="228"
          height="61"
          loading="lazy"
          decoding="async"
        />
      </div>
    </section>

    <!-- ----------------------------------------------------------------------- -->
    <!--                               GOOGLE MAPS                               -->
    <!-- ----------------------------------------------------------------------- -->

    <div class="google-maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.095693422269!2d-97.99781392401714!3d26.16101279198885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866577ae30483189%3A0x615c132617d2b48c!2sSantos%20Herrera%20Tire%20Service!5e0!3m2!1sen!2sus!4v1697856318031!5m2!1sen!2sus"
        width="600"
        height="200"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>

    <!-- ----------------------------------------------------------------------- -->
    <!--                              CONTACT FORM                               -->
    <!-- ----------------------------------------------------------------------- -->

    <section id="contact-1184">
      <div class="cs-container">
        <picture class="cs-background">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/tools.jpg
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/tools.jpg
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/tools.jpg"
            alt="tools"
            width="637"
            height="726"
          />
        </picture>
        <div class="cs-content">
          <span class="cs-topper">Contact Us</span>
          <h2 class="cs-title">Make An Appointment</h2>
          <!--Form-->
          <form
            class="cs-form"
            id="cs-form-1184"
            name="Contact Form"
            method="post"
          >
            <label class="cs-label">
              Name
              <input
                class="cs-input"
                required
                type="text"
                id="name-1184"
                name="name"
                placeholder="Name"
              />
            </label>
            <label class="cs-label cs-email">
              Email
              <input
                class="cs-input"
                required
                type="email"
                id="email-1184"
                name="email"
                placeholder="Email"
              />
            </label>
            <label class="cs-label cs-phone">
              Phone
              <input
                class="cs-input"
                required
                type="phone"
                id="phone-1184"
                name="phone"
                placeholder="Phone"
              />
            </label>
            <label class="cs-label">
              Message
              <textarea
                class="cs-input cs-textarea"
                required
                name="Message"
                id="message-1184"
                placeholder="Write message..."
              ></textarea>
            </label>
            <button class="cs-button-solid cs-submit" type="submit">
              Make an Appointment
            </button>
          </form>
        </div>
        <picture class="cs-background">
          <!--Mobile Image-->
          <source
            media="(max-width: 600px)"
            srcset="
              https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechaninc29.jpg
            "
          />
          <!--Tablet and above Image-->
          <source
            media="(min-width: 601px)"
            srcset="
              https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechaninc29.jpg
            "
          />
          <img
            loading="lazy"
            decoding="async"
            src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/mechaninc29.jpg"
            alt=",mechanic"
            width="637"
            height="726"
          />
        </picture>
      </div>
    </section>


<?php get_footer(); ?>

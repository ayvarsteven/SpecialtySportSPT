<?php

$boldthemes_options = get_option( BoldThemesPFX . '_theme_options' );
if ( is_product() && isset( $boldthemes_options['shop_settings_page_slug'] ) && $boldthemes_options['shop_settings_page_slug'] != '' ) {
	MedicareTheme::$boldthemes_page_for_header_id = boldthemes_get_id_by_slug( $boldthemes_options['shop_settings_page_slug'] );
} else if ( ( is_shop() || is_product_category() || is_product_taxonomy() ) && get_option( 'woocommerce_shop_page_id' ) ) {
	MedicareTheme::$boldthemes_page_for_header_id = get_option( 'woocommerce_shop_page_id' );
}

MedicareTheme::$what = 'woocommerce';

get_header();

// the_content();

$extra_class = '';

if ( is_product() && ( comments_open() || get_comments_number() ) ) {
	$extra_class =  'bottomSpaced';
}

echo '<section class="boldSection gutter btWooCommerce' . esc_attr( $extra_class ) . '">';
	echo '<div class="port">';
		echo '<div class="boldCell">';
			echo '<div class="boldRow">';
				echo '<div class="rowItem col-md-12 col-ms-12">';
					woocommerce_content();
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
echo '</section>';

if ( is_product() && ( comments_open() || get_comments_number() ) ) {
	echo '<section class="boldSection btComments gutter topSmallSpaced bottomSpaced">';
		echo '<div class="port">';
			echo '<div class="boldCell">';
				echo '<div class="boldRow">';
					echo '<div class="rowItem col-md-12 col-ms-12  btTextLeft animate-fadein animate">';
						comments_template();
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</section>';
}

get_footer(); 
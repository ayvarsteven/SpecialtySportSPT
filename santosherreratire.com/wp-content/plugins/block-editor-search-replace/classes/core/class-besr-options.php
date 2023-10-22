<?php

namespace BESR\Block_Editor_Search_Replace;

! defined( ABSPATH ) || exit;

if ( ! class_exists( 'BESR_Options' ) ) {

	class BESR_Options extends Block_Editor_Search_Replace {

		public function __construct() {
			parent::__construct();
		}

		public function add_plugin_options() {
			$types = array_merge(
				array(
					'post' => 'post',
					'page' => 'page',
				),
				get_post_types(
					array(
						'public'   => true,
						'_builtin' => false,
					),
					'names',
					'and'
				)
			);

			add_settings_section(
				'besr_section',
				'',
				function() {
					?>
						<h2 class="title" id="block-editor-search-replace">
							Block Editor Search &amp; Replace
						</h2>
						<p>
							For the price of a cup of coffee per month, you can <a href="https://patreon.com/krasenslavov" target="_blank"><strong>help and support me on Patreon</strong></a> in continuing to develop and maintain all of my free WordPress plugins, every little bit helps and is greatly appreciated!
						</p>
						<div class="besr-notice">
							<p>
								<strong>Please rate us</strong>
								<a href="<?php echo esc_url( $this->settings['plugin_wporgrate'] ); ?>" target="_blank"><img src="<?php echo esc_url( $this->settings['plugin_url'] ); ?>assets/img/rate.png" alt="Rate us @ WordPress.org" /></a>
							</p>
							<p>
								<strong>Having issues?</strong>
								<a href="<?php echo esc_url( $this->settings['plugin_wporgurl'] ); ?>" target="_blank">Create a Support Ticket</a>
							</p>
							<p>
								<strong>Developed by</strong>
								<a href="https://krasenslavov.com/" target="_blank">Krasen Slavov @ Developry</a>
							</p>
						</div>
						<hr />
						<ul>
							<li>&bullet; Display Search &amp; Replace for Classic and/or Block editors.</li>
							<li>&bullet; Add Block Editor Search &amp; Replace for posts and pages.</li>
							<li>&bullet; Support all available CPTs and WooCommerce Products (<em>if they are enabled</em>).</li>
							<li>&bullet; Add full-text support for search and replace.</li>
						</ul>
					<?php
				},
				'writing'
			);

			register_setting(
				'writing',
				'besr_full_text_support',
				function( $input ) {
					if ( is_array( $input ) ) {
						$input = array_map( 'sanitize_text_field', $input );
					}
					return $input;
				}
			);

			add_settings_field(
				'besr_full_text_support',
				'Full-Text Support',
				function() {
					$options = get_option( 'besr_full_text_support' );
					?>
						<div class="ben">
							<div class="ben-editors">
								<p>
									<label for="besr_full_text_support[selected]">
										<input type="checkbox" id="besr_full_text_support[selected]" name="besr_full_text_support[selected]" onclick="this.value = !(this.value != 'false');" value="<?php echo ( ! empty( $options['selected'] ) ) ? esc_attr( $options['selected'] ) : 'false'; ?>" <?php echo ( ! empty( $options['selected'] ) && esc_attr( $options['selected'] ) === 'true' ) ? 'checked' : ''; ?> />
										<strong>Enable/disable full-text search &amp; replace.</strong>
									</label>
								</p>
							</div>
						</div>
					<?php
				},
				'writing',
				'besr_section'
			);

			register_setting(
				'writing',
				'besr_editor_support',
				function( $input ) {
					if ( is_array( $input ) ) {
						$input = array_map( 'sanitize_text_field', $input );
					}
					return $input;
				}
			);

			add_settings_field(
				'besr_editor_support',
				'Supported Editors',
				function() {
					$options = get_option( 'besr_editor_support' );
					?>
						<div class="ben">
							<div class="ben-editors">
								<p>
									<label for="besr_editor_support[block_editor]">
										<input type="checkbox" id="besr_editor_support[block_editor]" name="besr_editor_support[block_editor]" onclick="this.value = !(this.value != 'false');" value="<?php echo ( ! empty( $options['block_editor'] ) ) ? esc_attr( $options['block_editor'] ) : 'false'; ?>" <?php echo ( ! empty( $options['block_editor'] ) && esc_attr( $options['block_editor'] ) === 'true' ) ? 'checked' : ''; ?> />
										Block Editor (Gutenberg)
									</label>
								</p>
								<p>
									<label for="besr_editor_support[classic]">
										<input type="checkbox" id="besr_editor_support[classic]" name="besr_editor_support[classic]" onclick="this.value = !(this.value != 'false');" value="<?php echo ( ! empty( $options['classic'] ) ) ? esc_attr( $options['classic'] ) : 'false'; ?>" <?php echo ( ! empty( $options['classic'] ) && esc_attr( $options['classic'] ) === 'true' ) ? 'checked' : ''; ?> />
										Classic Editor
									</label>
								</p>
							</div>
						</div>
					<?php
				},
				'writing',
				'besr_section'
			);

			register_setting(
				'writing',
				'besr_post_types',
				function( $input ) {
					if ( is_array( $input ) ) {
						$input = array_map( 'sanitize_text_field', $input );
					}
					return $input;
				}
			);

			add_settings_field(
				'besr_post_types',
				'Supported Types',
				function ( $types ) {
					foreach ( $types as $type ) {
						$options = get_option( 'besr_post_types' );

						switch ( $type ) {
							case 'post':
								$label = 'Posts';
								break;
							case 'page':
								$label = 'Pages';
								break;
							case 'product':
								$label = 'WooCommerce Products';
								break;
							default:
								$label = 'Custom Post Type (<em>' . $type . '</em>)';
								break;
						}
						?>
							<div class="ben">
								<div class="ben-post-types">
									<p>
										<label for="besr_post_types[<?php echo esc_attr( $type ); ?>]">
											<input type="checkbox" id="besr_post_types[<?php echo esc_attr( $type ); ?>]" name="besr_post_types[<?php echo esc_attr( $type ); ?>]" onclick="this.value = !(this.value != 'false');" value="<?php echo ( ! empty( $options[ $type ] ) ) ? esc_attr( $options[ $type ] ) : 'false'; ?>" <?php echo ( ! empty( $options[ $type ] ) && esc_attr( $options[ $type ] ) === 'true' ) ? 'checked' : ''; ?> />
											<?php echo $label; ?>
										</label>
									</p>
								</div>
							</div>
						<?php
					}
				},
				'writing',
				'besr_section',
				$types
			);
		}
	}
}

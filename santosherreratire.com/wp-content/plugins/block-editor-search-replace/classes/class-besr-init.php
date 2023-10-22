<?php

namespace BESR\Block_Editor_Search_Replace;

! defined( ABSPATH ) || exit;

if ( ! class_exists( 'BESR_Init' ) ) {

	class BESR_Init extends Block_Editor_Search_Replace {

		public function __construct() {
			parent::__construct();
			$this->opt = new BESR_Options;
		}

		public function init() {
			add_action( 'activated_plugin', array( $this, 'activate_plugin' ) );
			add_action( 'deactivated_plugin', array( $this, 'deactivate_plugin' ) );
			add_action( 'wp_loaded', array( $this, 'on_loaded' ) );
		}

		public function on_loaded() {
			// Rating notices
			add_action( 'admin_notices', array( $this, 'rating_notice_display' ) );
			add_action( 'admin_init', array( $this, 'rating_notice_dismiss' ) );

			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'localize_plugin_urls' ) );
			add_action( 'admin_init', array( $this, 'add_plugin_links' ) );
			add_action( 'admin_init', array( $this->opt, 'add_plugin_options' ) );
			add_filter( 'add_meta_boxes', array( $this, 'add_classic_editor_support' ) );
		}

		public function activate_plugin( $plugin ) {
			if ( $plugin === $this->settings['plugin_basename'] ) {
				$this->activate_block_editor_search_replace();
			}
		}

		public function deactivate_plugin( $plugin ) {
			if ( $plugin === $this->settings['plugin_basename'] ) {
				$this->deactivate_block_editor_search_replace();
			}
		}

		public function enqueue_admin_scripts() {
			if ( true === $this->settings['dev_mode'] ) {
				wp_register_script(
					'block-editor-search-replace',
					$this->settings['plugin_url'] . 'assets/js/block-editor-search-replace-init.js',
					array(
						'jquery',
						'wp-plugins',
						'wp-edit-post',
						'wp-element',
						'wp-data',
					),
					'1.0',
					true
				);
				wp_register_style(
					'block-editor-search-replace',
					$this->settings['plugin_url'] . 'assets/css/block-editor-search-replace.css',
					array(),
					'1.0',
					'all'
				);
			} else {
				wp_register_script(
					'block-editor-search-replace',
					$this->settings['plugin_url'] . 'assets/build/js/block-editor-search-replace.min.js',
					array(
						'jquery',
						'wp-plugins',
						'wp-edit-post',
						'wp-element',
						'wp-data',
					),
					'1.0',
					true
				);
				wp_register_style(
					'block-editor-search-replace',
					$this->settings['plugin_url'] . 'assets/build/css/block-editor-search-replace.min.css',
					array(),
					'1.0',
					'all'
				);
			}
			wp_enqueue_script( 'block-editor-search-replace' );
			wp_enqueue_style( 'block-editor-search-replace' );
		}

		public function localize_plugin_urls() {
			wp_localize_script(
				'block-editor-search-replace',
				'besr',
				array(
					'plugin_url' => $this->settings['plugin_url'],
					'ajax_url'   => admin_url( 'admin-ajax.php' ),
				),
			);
		}

		public function add_plugin_links() {
			add_action( 'plugin_action_links', array( $this, 'add_action_links' ), 10, 2 );
			add_action( 'plugin_row_meta', array( $this, 'add_meta_links' ), 10, 2 );
		}

		public function add_action_links( $links, $file_path ) {
			if ( $file_path === $this->settings['plugin_basename'] ) {
				$links['settings'] = '<a href="' . esc_url( admin_url( 'options-writing.php#block-editor-search-replace' ) ) . '">Settings</a>';
				return array_reverse( $links );
			}
			return $links;
		}

		public function add_meta_links( $links, $file_path ) {
			if ( $file_path === $this->settings['plugin_basename'] ) {
				$links['docmentation'] = '<a href="' . esc_url( $this->settings['plugin_docurl'] ) . '" target="_blank">Documentation</a>';
			}
			return $links;
		}

		function add_classic_editor_support() {
			global $post;
			$post_types      = get_option( 'besr_post_types' );
			$editor_support  = get_option( 'besr_editor_support' );
			$enabled_screens = array();

			// Don't want to add the meta box for Block Editor, if both Block and Classic editors are enabled.
			// We have duplicate meta boxes it is already loaded via assets/js/block-editor-search-replace.mjs
			if ( ! isset( $_GET['classic-editor'] )
				&& isset( $_GET['classic-editor__forget'] ) ) {
				return false;
			}

			if ( ! $this->is_classic_editor_active() ) {
				return false;
			}

			if ( ! is_array( $post_types ) ) {
				$post_types = array();
			}

			if ( ! is_array( $editor_support ) ) {
				$editor_support = array();
			}

			// Create an array with enabled screens to show the Navigato Controls.
			// Available for Posts, Pages, WooCommerce Products & Custom Post Types.
			foreach ( $post_types as $post_type => $enabled ) {
				array_push( $enabled_screens, $post_type );
			}

			if ( key_exists( 'classic', $editor_support )
				&& 'true' === $editor_support['classic']
				&& key_exists( $post->post_type, $post_types )
				&& 'true' === $post_types[ $post->post_type ] ) {
				add_meta_box(
					'classic_search_replace_metabox',
					'Search & Replace',
					function() {
						global $post;
						?>
							<div class="besr">
								<div class="besr-block-editor-ui">
									<p>Block Editor search and replace will help you to find any text inside the Block Editor content area and replace with another one.</p>
									<form name="besr-block-editor" id="besr-block-editor" type="post">
										<input type="hidden" name="besr-current-post-type" id="besr-current-post-type" value="<?php echo esc_attr( $post->post_type ); ?>">
										<input type="hidden" name="besr-current-post-id" id="besr-current-post-id" value="<?php echo esc_attr( $post->ID ); ?>">
										<input type="hidden" name="besr-classic-editor" id="besr-classic-editor" value="1">
										<div class="search-replace-group">
											<p>
												<input type="text" name="besr-search" id="besr-search" class="besr-search" value="" placeholder="Enter you search phrase..." />
											</p>
											<p>
												<input type="text" name="besr-replace-with" id="besr-replace-with" class="besr-replace-with" value="" placeholder="Enter your replace with phrase..." />
											</p>
											<p>
												<label for="besr-highlight-search">
													<input type="checkbox" name="besr-highlight-search" id="besr-highlight-search" checked />
													<span>Highlight text on search</span>
												</label>
											</p>
											<p>
												<label for="besr-case-sensitive">
													<input type="checkbox" name="besr-case-sensitive" id="besr-case-sensitive" checked />
													<span>Case sensitive search & replace</span>
												</label>
											</p>
											<p class="button-group">
												<button name="besr-search-replace" class="button button-primary besr-search-replace">
													<i class="dashicons dashicons-randomize"></i>
													Replace
												</button>
												<button name="besr-clean-tags" class="button button-primary besr-clean-tags">
													<i class="dashicons dashicons-trash"></i>
													Reset
												</button>
											</p>
											<div class="besr-search-replace-output d-none"></div>
										</div>
									</form>
								</div>
							</div>
						<?php
					},
					$enabled_screens,
					'side',
					'high'
				);
			}
		}

		// Add temporary plugin options.
		public function activate_block_editor_search_replace() {
			// Activate plugin for the first time add default permanent options.
			if ( false === get_option( 'block_editor_search_replace' ) ) {
				add_option( 'block_editor_search_replace', 1 );
				add_option(
					'besr_editor_support',
					array(
						'block_editor' => 'true',
						'classic'      => 'true',
					)
				);
				add_option(
					'besr_post_types',
					array(
						'page' => 'true',
						'post' => 'true',
					)
				);
			}
		}

		// Remove temporary plugin options.
		public function deactivate_block_editor_search_replace() {
			if ( get_option( 'besr_rating_notice' ) ) {
				delete_option( 'besr_rating_notice' );
			}
		}

		private function is_classic_editor_active() {
			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			if ( is_plugin_active( 'classic-editor/classic-editor.php' ) ) {
				return true;
			}

			return false;
		}
	}

	$besr = new BESR_Init;
	$besr->init();
}

<?php

namespace BESR\Block_Editor_Search_Replace;

! defined( ABSPATH ) || exit;

if ( ! class_exists( 'BESR_Search_Replace' ) ) {

	class BESR_Search_Replace extends Block_Editor_Search_Replace {

		public function __construct() {
			parent::__construct();
		}

		public function init() {
			add_action( 'wp_loaded', array( $this, 'on_loaded' ) );
		}

		public function on_loaded() {
			add_action( 'wp_ajax_highlight_search', array( $this, 'highlight_search' ) );
			add_action( 'wp_ajax_search_and_replace', array( $this, 'search_and_replace' ) );
			add_action( 'wp_ajax_clean_besr_tags', array( $this, 'clean_besr_tags' ) );
			add_action( 'wp_ajax_update_block_editor_content', array( $this, 'update_block_editor_content' ) );
		}

		public function update_block_editor_content() {
			global $post;

			$current_post_id = sanitize_text_field( $_REQUEST['current_post_id'] );
			$post            = get_post( $current_post_id );

			echo json_encode( $post->post_content );
			exit;
		}

		public function highlight_search() {
			global $post;

			$search_input_text = sanitize_text_field( $_REQUEST['search_input_text'] );
			$current_post_id   = sanitize_text_field( $_REQUEST['current_post_id'] );
			$is_highlighted    = sanitize_text_field( $_REQUEST['is_highlighted'] );
			$is_case_sensitive = sanitize_text_field( $_REQUEST['is_case_sensitive'] );
			$is_classic_editor = sanitize_text_field( $_REQUEST['is_classic_editor'] );
			$post              = get_post( $current_post_id );

			// Clean-up the custom tags.
			$content_cleaned = str_replace( array( '<besr-highlight>', '</besr-highlight>' ), array( '', '' ), $post->post_content );
			$this->update_post( $post, $content_cleaned );

			// Set minimum 3 characters before we start the search
			if ( strlen( $search_input_text ) < 3 ) {
				echo json_encode(
					array(
						array(
							'id'      => 0,
							'message' => 'Minimum 3 characters!',
						),
					),
				);
				exit;
			}

			if ( $is_highlighted ) {
				$content_text_only = strip_tags( $post->post_content );
				$search_text_count = substr_count( $content_text_only, $search_input_text );

				// Case sensitive
				if ( $is_case_sensitive ) {
					$content_highlighted = str_ireplace( $search_input_text, '<besr-highlight>' . $search_input_text . '</besr-highlight>', $post->post_content );
				} else {
					$content_highlighted = str_replace( $search_input_text, '<besr-highlight>' . $search_input_text . '</besr-highlight>', $post->post_content );
				}

				if ( $search_text_count > 0 ) {
					echo json_encode(
						array(
							array(
								'id'          => 0,
								'message'     => $search_text_count . ' results found for <strong>' . $search_input_text . '</strong>!',
								'highlighted' => $content_highlighted,
							),
						),
					);

					$this->update_post( $post, $content_highlighted );
					exit;
				}

				echo json_encode(
					array(
						array(
							'id'      => 0,
							'message' => 'No results for <strong>' . $search_input_text . '</strong>!',
						),
					),
				);
				exit;
			}

			echo json_encode(
				array(
					array(
						'id'      => 0,
						'message' => '',
					),
				),
			);
			exit;
		}

		public function search_and_replace() {
			global $post;

			$search_input_text  = sanitize_text_field( $_REQUEST['search_input_text'] );
			$replace_input_text = sanitize_text_field( $_REQUEST['replace_input_text'] );
			$current_post_id    = sanitize_text_field( $_REQUEST['current_post_id'] );
			$is_case_sensitive  = sanitize_text_field( $_REQUEST['is_case_sensitive'] );
			$is_classic_editor  = sanitize_text_field( $_REQUEST['is_classic_editor'] );
			$post               = get_post( $current_post_id );

			// Set minimum 3 characters before we start the search
			if ( strlen( $search_input_text ) < 3 || strlen( $replace_input_text ) < 3 ) {
				echo json_encode(
					array(
						array(
							'id'      => 0,
							'message' => 'Minimum 3 characters!',
						),
					),
				);
				exit;
			}

			// Case sensitive
			if ( $is_case_sensitive ) {
				$new_post_content = str_ireplace( '<besr-highlight>' . $search_input_text . '</besr-highlight>', $replace_input_text, $post->post_content );
			} else {
				$new_post_content = str_replace( '<besr-highlight>' . $search_input_text . '</besr-highlight>', $replace_input_text, $post->post_content );
			}

			$this->update_post( $post, $new_post_content );

			echo json_encode(
				array(
					array(
						'id'      => 0,
						'message' => '<strong>' . $search_input_text . '</strong> replaced with <strong>' . $replace_input_text . '</strong> succesffully!',
					),
				),
			);
			exit;
		}

		public function clean_besr_tags() {
			global $post;

			$current_post_id   = sanitize_text_field( $_REQUEST['current_post_id'] );
			$is_classic_editor = sanitize_text_field( $_REQUEST['is_classic_editor'] );
			$post              = get_post( $current_post_id );

			// Clean-up the custom tags.
			$content_cleaned = str_replace( array( '<besr-highlight>', '</besr-highlight>' ), array( '', '' ), $post->post_content );
			$this->update_post( $post, $content_cleaned );

			echo json_encode(
				array(
					array(
						'id'      => 0,
						'message' => 'Reset and all BESR tags were removed successfully!',
					),
				),
			);
			exit;
		}

		private function update_post( $post, $new_content ) {
			remove_action( 'post_updated', 'wp_save_post_revision' );
			$post->post_content = preg_replace( '/\R/', '', $new_content );
			wp_update_post( $post );
			add_action( 'post_updated', 'wp_save_post_revision' );
		}
	}

	$besr = new BESR_Search_Replace();
	$besr->init();
}

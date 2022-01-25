<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION



/****************Add/Remove Meta Tags****************/
remove_action( "wp_head", 'king_meta', 0 );
/*add_action( "wp_head", 'king_meta_new', 0 );
function king_meta_new(){
	
	global $post, $king;

	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<?php if( isset($king->cfg['responsive']) && $king->cfg['responsive'] == 1 ){ ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
	<?php } ?>
	<?php
	if(!isset($king->cfg['metatag']) || $king->cfg['metatag'] == 1){
	/*if( is_home() || is_front_page() ){ ?>
		<meta name="description" content="<?php echo esc_attr( $king->cfg['homeMetaDescription'] ); ?>" />
		<meta name="keywords" content="<?php echo esc_attr( $king->cfg['homeMetaKeywords'] ); ?>" />
	<?php }else{ ?>
		<meta name="description" content="<?php echo esc_attr( $king->cfg['otherMetaDescription'] ); ?>" />
		<meta name="keywords" content="<?php echo esc_attr( $king->cfg['otherMetaKeywords'] ); ?>" />
	<?php }*/
	/*?>
	<meta name="generator" content="king-theme" />
	<?php
	}

	if( isset($king->cfg['ogmeta']) && $king->cfg['ogmeta'] == 1 && ( is_page() || is_single() ) ){

		?>
		<meta property="og:type" content="king:photo" />
		<meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>" />
		<meta property="og:title" content="<?php echo esc_attr( $post->post_title ); ?>" />
		<meta property="og:description" content="<?php

			if( is_front_page() || is_home() ){
				echo esc_attr( bloginfo( 'description' ) );
			}else {

				if( !empty( $post->ID ) ){

					$pagedes = get_post_meta( $post->ID, '_king_page_description', true );

					if( !empty( $pagedes ) ){
						echo esc_attr( $pagedes );
					}else if( !empty( $post->post_excerpt ) ){
						echo esc_attr( wp_trim_words( $post->post_excerpt, 50 ) );
					}else if( strpos( $post->post_content, '[vc_row') === false ){
						echo esc_attr( wp_trim_words( $post->post_content, 50 ) );
					}else{
						echo esc_attr( $post->post_title );
					}
				}

			}

		echo '" />';

		$meta_image = $king->get_featured_image( $post );
		if( !empty( $king->cfg['logo'] ) && strpos( $meta_image, 'default.jpg') ){
			$meta_image = $king->cfg['logo'];
		}

		echo '<meta property="og:image" content="'.esc_url( $meta_image ).'" />';

	}// End If

	if( !empty( $king->cfg['authorMetaKeywords'] ) ){
		echo '<meta name="author" content="'.esc_attr( $king->cfg['authorMetaKeywords'] ).'" />';
	}

	if( !empty( $king->cfg['contactMetaKeywords'] ) ){
		echo '<meta name="contact" content="'.esc_attr( $king->cfg['contactMetaKeywords'] ).'" />';
	}

	echo '<link rel="pingback" href="'.get_bloginfo( 'pingback_url' ).'" />';

	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
		if( !empty( $king->cfg['favicon'] ) ){
			echo '<link rel="shortcut icon" href="'.esc_url( $king->cfg['favicon'] ).'" type="image/x-icon" />';
		}
	}else{
		wp_site_icon();
	}

}
*/

add_action( 'add_meta_boxes', 'keywords_meta_box_add' );
function keywords_meta_box_add()
{
    add_meta_box( 'keywords-meta-box-id', 'Keywords First Meta Box', 'keywords_meta_box_cb', array('post','page'), 'normal', 'high' );
}

function keywords_meta_box_cb()
{
	global $post;
	$val = get_post_meta($post->ID,'_meta_keywords',true);
	$text = isset( $val ) ? esc_attr( $val ) : '';
	wp_nonce_field( 'my_meta_keywords_box_nonce', 'my_meta_keywords_box_nonce' );
  
  ?>
  
    <label>Meta Keywords</label>
	
    <input type="text" name="_meta_keywords" id="_meta_keywords" value="<?php echo $text;?>" />
    <?php    
}

add_action( 'save_post', 'meta_keywords_box_save' );
function meta_keywords_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['my_meta_keywords_box_nonce'] ) || !wp_verify_nonce( $_POST['my_meta_keywords_box_nonce'], 'my_meta_keywords_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
	
	if( isset( $_POST['_meta_keywords'] ) )
        update_post_meta( $post_id, '_meta_keywords',  $_POST['_meta_keywords'] );
	
}

add_action( "wp_head", 'king_meta_keywords', 0 );
function king_meta_keywords(){
	global $post;
	$meta_keywords_value = get_post_meta($post->ID,'_meta_keywords',true);
	$meta_keywords = isset( $meta_keywords_value ) ? esc_attr( $meta_keywords_value ) : '';
	?>
	<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
	<?php 
}
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tomek
 */

get_header();
?>
    
<div class="galeria">
    <?php 

    $gallery_id = 13;

    // next, do a check to make sure FooGallery is loaded
    if ( function_exists( 'foogallery_render_gallery' ) ) {

        //render the gallery!
        foogallery_render_gallery( $gallery_id );

    }

    ?>
</div>

    <div class="wrapper">
        
        <?php echo do_shortcode('[ajax_load_more id="4652267974" container_type="div" post_type="post" posts_per_page="4"  images_loaded="true" button_label="Pokaż więcej"]'); ?>
        
    </div>

<?php
get_footer();

<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
<?php endif; // end sidebar widget area ?>

<?php get_search_form(); ?>

<?php wp_get_archives('type=monthly&limit=12'); ?>

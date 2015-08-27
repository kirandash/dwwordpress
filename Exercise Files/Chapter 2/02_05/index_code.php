<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php else : ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; ?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
</article>

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="meta">
    <em>Posted on:</em> <?php the_time('F jS, Y') ?>
    <em>by</em> <?php the_author() ?>
</div>

<div class="entry">
    <?php the_content(); ?>
</div>

<div class="postmetadata">
    <?php the_tags('Tags: ', ', ', '<br />'); ?>
    Posted in <?php the_category(', ') ?> | 
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php if (is_category()) { ?>
	<h2 id="archiveTitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

<?php } elseif( is_tag() ) { ?>
	<h2 id="archiveTitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

<?php } elseif (is_day()) { ?>
	<h2 id="archiveTitle">Archive for <?php the_time('F jS, Y'); ?></h2>

<?php } elseif (is_month()) { ?>
	<h2 id="archiveTitle">Archive for <?php the_time('F, Y'); ?></h2>

<?php } elseif (is_year()) { ?>
	<h2 id="archiveTitle">Archive for <?php the_time('Y'); ?></h2>

<?php } elseif (is_author()) { ?>
	<h2 id="archiveTitle">Author Archive</h2>

<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2 id="archiveTitle">Archives</h2>
<?php } ?>

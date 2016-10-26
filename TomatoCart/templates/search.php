<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="byline"><?php the_time('l, F jS, Y') ?></p>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				<div class="meta">
					<p class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></p>
					<p class="links">Posted in <?php the_category(', ') ?>
						&nbsp;&bull;&nbsp;
						<?php edit_post_link('Edit', '', ' &nbsp;&bull;&nbsp; '); ?>
						<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>

	<?php endif; ?>

	</div>
	<!-- end #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
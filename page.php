<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<!-- <article class="post" id="post-<?php the_ID(); ?>"> -->

		<div class="row" id="blog">
			<!-- Media -->
			<div class="span12">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div><!-- span8 -->
		</div><!-- row -->

			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>

		<!-- </article> -->
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>

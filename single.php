<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

  	<!-- #blog -->
	<div class="row" id="blog">

		<!-- posts -->
		<div class="span8"> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div class="entry-body">
					  foo <h2 class="entry-title"><?php the_title(); ?></h2>
					</div>

					<div class="entry-content">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
						
						<?php the_tags( __('Tags: '), ', ', ''); ?>
					
						<?php posted_on(); ?>

					</div>
					
					<?php edit_post_link(__('Edit this entry'),'','.'); ?>
					
				</article>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>
		</div>

		<div class="span4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php post_navigation(); ?>

<?php get_footer(); ?>
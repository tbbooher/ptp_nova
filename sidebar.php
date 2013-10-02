<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */
?>

    <?php if (!function_exists('dynamic_sidebar') && !dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

        <div class="widget">
        	<?php get_search_form(); ?>
        </div>

        <div class="widget">
            <h4><?php _e('Categories','html5reset'); ?></h4>
            <ul class="tags">
                <?php wp_list_categories( array('title_li' => '') ); ?> 
            </ul>
        </div>
    
        <div class="widget">        
    	<h4><?php _e('Archives','html5reset'); ?></h4>
        	<ul class="icons-ul list-style">
                <?php wp_get_archives( array('format' => 'custom', 'before' => '<li class="icon-li icon-chevron-right">', 'after' => '</li>')); ?>
        	</ul>
        </div>

        <div class="widget">            
    	<h4><?php _e('Meta','html5reset'); ?></h4>
        	<ul>
        		<?php wp_register(); ?>
        		<li><?php wp_loginout(); ?></li>
        		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.','html5reset'); ?>"><?php _e('WordPress','html5reset'); ?></a></li>
        		<?php wp_meta(); ?>
        	</ul>
        </div>
    	
        <div class="widget">        
        	<h4><?php _e('Subscribe','html5reset'); ?></h4>
        	<ul>
        		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','html5reset'); ?></a></li>
        		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','html5reset'); ?></a></li>
        	</ul>
        </div>
	
	<?php endif; ?>
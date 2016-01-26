<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="row full-width">
				<div class="span10 offset1">
					<?php /*
						$ancestors = array_reverse(get_ancestors(get_the_id(), 'page'));
						if (!empty($ancestors)) {
							echo "<ul class=\"breadcrumb\">";
						}
						foreach($ancestors as $id) {
						echo "<li><a href=\"".esc_url(get_permalink(get_page($id)))."\">".get_the_title(get_page($id))."</a>";
							echo "<span class=\"divider\">&#187;</span></li>";
						}		
						if (!empty($ancestors)) {
							echo "<li class=\"active\">".get_the_title()."</li>";
							echo "</ul>";
						}
					*/ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
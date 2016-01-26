<?php
/**
 * Template Name: Three Column Alignment
 *
 * Description: A custom template that displays content in three columns.
 */

get_header(); ?>

	<div id="primary" class="site-content three-column-content">
		<div class="row three-col" style="">
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
				<h1><?php the_title(); ?></h1>
				<div id="content" role="main">
					<div class="entry-content">
						<?php the_post(); ?>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row three-col" style="">
		<div class="span3 offset1">
			<?php the_block("Left Column"); ?>
		</div>
		<div class="span3">
			<?php the_block("Middle Column"); ?>		
		</div>
		<div class="span3">
			<?php the_block("Right Column"); ?>		
		</div>
		</div>
	</div>

<?php get_footer(); ?>
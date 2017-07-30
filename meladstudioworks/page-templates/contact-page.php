<?php
/**
 * Template Name: Contact Page
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
		</div><!-- #content -->
		<div class="row">
			<div class="span6 left-contact-div">
				<div class="row contact-row">
					<div class="span1 offset1 contact-label">
						<i class="general general foundicon-mail"></i>
					</div>
					<div class="span4 contact-info">
						<a href="mailto:ethan@meladstudioworks.com">info@meladstudioworks.com</a>
					</div>
				</div>
				<div class="row contact-row">
					<div class="span1 offset1 contact-label">
						<i class="general general foundicon-phone"></i>
					</div>
					<div class="span4 contact-info">
						774.922.9912
					</div>
				</div>
				<div class="row contact-row">
					<div class="span1 offset1 contact-label">
						<i class="general general foundicon-address-book"></i>
					</div>
					<div class="span4 contact-info">
						Melad StudioWorks<br/>
						17 Ashley Road<br/>
						North Brookfield, MA 01535
					</div>
				</div>
				<br/><br/>
				<div class="row contact-row">
					<div class="span5 offset1 map-div">
						<div class="well">
						<iframe width="360" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Melad+StudioWorks+17+Ashley+Rd,+North+Brookfield,+MA&amp;aq=&amp;sll=42.264531,-72.049041&amp;sspn=0.008059,0.016512&amp;ie=UTF8&amp;hq=Melad+StudioWorks&amp;hnear=17+Ashley+Rd,+North+Brookfield,+Massachusetts+01535&amp;t=m&amp;cid=12129013856561910095&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
						<br />
						<a target="_blank" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Melad+StudioWorks+17+Ashley+Rd,+North+Brookfield,+MA&amp;aq=&amp;sll=42.264531,-72.049041&amp;sspn=0.008059,0.016512&amp;ie=UTF8&amp;hq=Melad+StudioWorks&amp;hnear=17+Ashley+Rd,+North+Brookfield,+Massachusetts+01535&amp;t=m&amp;cid=12129013856561910095&amp;z=16&amp;iwloc=A">
							View Larger Map
						</a>
						</div>
					</div>
				</div>
			</div>
			<div class="span5">
				<!--<?php if (isset($_GET['contact_sent'])) { ?>
					<h1>Thank you!</h1>
					<p>
						I'll get back to you as soon as possible.
					</p>
				<?php } else { ?>
					<form method="post" action="/wp-content/themes/meladstudioworks/contact-me.php">
					  <fieldset>
						<h1>Contact me</h1>
						<label>your name</label>
						<input type="text" name="name"/>
						<label>email where I can reach you</label>
						<input type="text" name="email" placeholder="you@example.com"/>
						<label>What do you want to know?</label>
						<textarea rows="5" name="message"></textarea>
						<br/><br/>
						<button type="submit" class="btn">Submit</button>
					  </fieldset>
					</form>
				<?php } ?>-->
			
<script type="text/javascript" src="https://form.jotform.com/jsform/53497922755166"></script>
</div>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>

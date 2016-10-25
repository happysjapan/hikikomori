<?php
/*
  Template Name: Checker
*/
get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<main class="section_main columns small-12 medium-9">
				<div class="section_page">

					<div class="columns social--buttons">
						<?php get_template_part( 'includes/social-buttons' ); ?>
					</div>

					<h1 class="section_page--title has_icon"><i class="section_page--title--sprite" aria-hidden="true"><span class="sprite icon_checker"></span></i><?php the_title(); ?></h1>

					<div class="section_page--edition">
						<h3 class="sub_title"><?php echo get_field('checker_sub_title'); ?></h3>
					</div>
					<div class="section_page--edition">
						<?php the_content(); ?>
					</div>

					<?php get_template_part( 'includes/checker' ); ?>
				</div>
		 	</main>

			<aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
	      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
	    </aside>
		</div>

		<div id="js_checker" class="checker--result">
			<div class="checker--result--holder">
				<button id="js_checker--close" class="checker--close" type="button" name="button"><i class="fa fa-times" aria-hidden="true"></i></button>
				<div id="js_checker--inner" class="checker--result--inner"></div>
			</div>

			<div id="js_checker--over" class="checker--overlay"></div>
		</div>
	<?php endwhile; ?>

	<div class="row breadcrumbs--bottom">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<?php
/*
  Template Name: Page with aside
*/
get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
	<div class="columns shrink social--buttons">
		<?php get_template_part( 'includes/social-buttons' ); ?>
	</div>
</div>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<main class="section_main columns small-12 medium-9">
				<div class="section_page">
					<h1 class="section_page--title"><?php the_title(); ?></h1>
					<div class="section_page--edition">
						<?php the_content(); ?>
					</div>
				</div>
		 	</main>

			<aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
	      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
	    </aside>
		</div>
	<?php endwhile; ?>

	<div class="row breadcrumbs--bottom">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

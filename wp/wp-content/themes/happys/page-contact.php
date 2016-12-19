<?php
/*
  Template Name: Page Contact
*/
get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<!-- [ #content ] -->
<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<main class="row">
			<section class="section_form columns medium-10 medium-offset-1">
				<h1 class="section_form--title"><?php the_title(); ?></h1>
				<div class="row">
					<div class="section_form--main columns small-12 medium-10 medium-offset-1 large-8 large-offset-2">
						<?php the_content(); ?>
					</div>
				</div>
		 	</section>
		</main>
	<?php endwhile; ?>

	<div class="row breadcrumbs--bottom">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>

	<div class="row">
		<aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns is_mobile">
			<?php dynamic_sidebar( 'aside-widget-area' ); ?>
		</aside>
	</div>

</div>

<?php get_footer(); ?>

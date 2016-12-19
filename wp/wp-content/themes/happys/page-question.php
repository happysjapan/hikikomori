<?php
/*
  Template Name: Page Question
*/
get_header(); ?>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<main class="wrapper__question row">

			<div class="columns small-12 breadcrumbs--top">
				<?php custom_breadcrumbs(); ?>
			</div>

			<section class="section_main small-12 medium-9 columns">
				<h1 class="main_title"><i class="main_title--sprite" aria-hidden="true"><span class="sprite icon_main_quetion"></span></i><?php the_title(); ?></h1>
				<div class="main_edition">
					<?php the_content(); ?>
				</div>
		 	</section>

			<aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
				<?php dynamic_sidebar( 'aside-widget-area' ); ?>
			</aside>

			<div class="columns small-12  breadcrumbs--bottom">
				<?php custom_breadcrumbs(); ?>
			</div>
		</main>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>

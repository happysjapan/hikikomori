<?php
/*
  Template Name: Ask Question
*/
get_header(); ?>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="wrapper__question row">

			<div class="columns small-12 breadcrumbs--top">
				<?php custom_breadcrumbs(); ?>
			</div>

			<div class="section_main small-12 columns">
				<h1 class="main_title"><i class="main_title--sprite" aria-hidden="true"><span class="sprite icon_main_quetion"></span></i><?php the_title(); ?></h1>
				<div class="main_edition">
					<?php the_content(); ?>
				</div>
		 	</div>

			<div class="columns small-12 breadcrumbs--bottom">
				<?php custom_breadcrumbs(); ?>
			</div>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>

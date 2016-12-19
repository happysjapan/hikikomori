<?php get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<div class="wrapper">
	<div class="row">
		<main class="section_main columns small-12 medium-9">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="section_main columns">
						<section class="section_page">
							<h1 class="columns section_page--title"><?php the_title(); ?></h1>
							<?php
			        if (have_rows("page_content")) {
			        while ( have_rows("page_content") ) : the_row(); ?>
			          <div class="columns section_page--edition">
			            <article>
			               <h4 class="sub_title"><?php the_sub_field('page_sub_title'); ?></h4>
			               <div class="detail--text"><?php the_sub_field('page_description'); ?></div>
			             </article>
			          </div>
			        <?php endwhile; } ?>
						</section>
				 	</div>
				</div>
			<?php endwhile; ?>
		</main>

		<aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
			<?php dynamic_sidebar( 'aside-widget-area' ); ?>
		</aside>
	</div>

	<div class="row breadcrumbs--bottom">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

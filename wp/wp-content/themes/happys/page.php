<?php get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<main class="row">
			<div class="section_main columns">
				<section class="section_page">
					<h1 class="columns section_page--title"><?php the_title(); ?></h1>
					<?php
	        if (have_rows("page_content")) {
	        while ( have_rows("page_content") ) : the_row(); ?>
	          <div class="columns section_page--edition">
	            <article>
              	<h2 class="sub_title"><?php the_sub_field('page_sub_title'); ?></h2>
              	<div class="detail--text"><?php the_sub_field('page_description'); ?></div>
	             </article>
	          </div>
	        <?php endwhile; } ?>
				</section>
		 	</div>
		</main>
	<?php endwhile; ?>

	<div class="row breadcrumbs--bottom">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="row">
	<div class="columns breadcrumbs--top">
		<?php custom_breadcrumbs(); ?>
	</div>
</div>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="section_main columns">
				<div class="section_page">
					<h1 class="columns section_page--title"><?php the_title(); ?></h1>
						<!-- <?php the_content(); ?> -->
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
				</div>
		 	</div>
		</div>
	<?php endwhile; ?>

	<div class="row breadcrumbs--bottom">
		<div class="columns">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

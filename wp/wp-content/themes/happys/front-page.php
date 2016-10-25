<?php
/* Template Name: Front page */
get_header();
?>

<main role="main" class="wrapper">

  <?php get_template_part( 'includes/front/banner' ); ?>
  <?php get_template_part( 'includes/front/search' ); ?>

  <div class="row">
  	<div class="section_main columns small-12 medium-8 large-9">
  		<div class="section_main--block">
        <h3 class="section_main--block--title"><?php echo get_field('front_title'); ?></h3>
        <div class="section_main--block--content">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          	<?php the_content(); ?>
          <?php endwhile; ?>
        </div>
  		</div>

      <div class="section_widget">
        <?php dynamic_sidebar( 'home-front-widget-area' ); ?>

        <?php get_template_part( 'includes/front/block-1' ); ?>
        <?php get_template_part( 'includes/front/block-2' ); ?>

      </div>
  	</div>

    <aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
    </aside>
  </div>

</main>


<?php get_footer(); ?>

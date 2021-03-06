<?php get_header();
  global $query_string;

  $queried_object = get_queried_object();
  $args = array( 'parent' => $queried_object->term_id );
  $cat_list = get_categories( $args );

  foreach ($cat_list as $cat) {
    if( $cat->slug != $queried_object->slug) {
      $cat_description = $cat->category_description;
    }
  }

  $tags = get_the_tags();
?>

<div class="wrapper">

  <div class="row">
    <div class="columns">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="row">
    <main class="section_main small-12 medium-9 columns">
      <section class="section_header">
        <h1 class="main_title">
          <i class="main_title--sprite" aria-hidden="true"><span class="sprite icon_post"></span></i><?php echo $queried_object->name; ?>
        </h1>
      </section>

      <div class="row">
        <div class="list_tags--holder columns small-12">
          <!-- [ #search ] -->
          <div class="searchArea">
            <?php get_template_part( 'includes/searchbox-clinic' ); ?>
          </div>
          <!-- [ /#search ] -->
        </div>
      </div>

      <ul class="row">
      <?php
        if ( $wp_query->have_posts() ) {
        	while ( $wp_query->have_posts() ) {
        		the_post(); ?>
            <li class="columns small-12">
              <?php get_template_part( 'includes/panel', 'clinic' ); ?>
            </li>
          <?php } // end while
        } // end if ?>
      </ul>

      <?php
        if (function_exists(custom_pagination)) {
          custom_pagination($custom_query->max_num_pages,"",$paged);
        }
      ?>
    </main>

    <aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
    </aside>

  </div>
</div>
<?php get_footer();

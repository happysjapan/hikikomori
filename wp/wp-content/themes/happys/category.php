<?php get_header();
  global $query_string;

  $queried_object = get_queried_object();
  $args = array( 'parent' => $queried_object->term_id );
  $cat_list = get_categories( $args );
  $current_cat = null;

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
    <main role="main" class="section_main small-12 medium-9 columns">
      <div class="row">
        <section class="section_header columns small-12">
          <h1 class="main_title">
            <i class="main_title--sprite" aria-hidden="true"><span class="sprite icon_post"></span></i><?php echo $queried_object->name; ?>
          </h1>
        </section>
      </div>

      <div class="row">
        <div class="list_tags--holder columns small-12">
          <ul class="list_tag clearfix">
            <?php foreach ($tags as $tag) { ?>
              <li class="list_tag--item">
                <a class="list_tag--link" href="<?php echo get_term_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
              </li>
            <?php } ?>
          </ul>
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

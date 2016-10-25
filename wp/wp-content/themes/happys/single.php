<?php get_header();
$post_type = get_post_type();
$post_type_tax = $post_type.'_tag';
$post_type_cat = $post_type.'-cat';
$queried_object = get_queried_object();
$current_id = $queried_object->ID;
$categories = wp_get_post_terms( $current_id, $post_type_cat );
$tags_post = wp_get_post_terms( $current_id, $post_type_tax );
$category = $categories[0];
$tag_list = get_the_term_list($post->ID,$post_type_tax);

foreach ($categories as $cat) {
  $cat_map[$cat->slug] = $cat->term_id;
}
foreach ($tags_post as $tag) {
  $tax_map[$tag->slug] = $tag->term_id;
}
?>

<div class="wrapper">
  <div class="row">
    <div class="columns breadcrumbs--top">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="row">
    <main role="main" class="section_main columns small-12 medium-9">
      <div class="detail">
        <div class="detail--content">
          <div class="columns">
            <h3 class=detail--single_title><?php the_title(); ?></h3>
            <div class="detail--tag">
              <?php echo $tag_list; ?>
            </div>
            <section>
              <?php $topimage = get_field('violence_top_image'); ?>
              <?php if( !$topimage ){
                $topimage_url = get_template_directory_uri().'/images/ad_thumbnail.png';
              } else {
                $topimage_url = $topimage['sizes']['large'];
              } ?>

              <img class="detail--img" src="<?php echo $topimage_url; ?>" alt="<?php the_title(); ?>" />
            </section>
          </div>
        </div>

        <?php
        if (have_rows("default_details")) {
        while ( have_rows("default_details") ) : the_row(); ?>
          <div class="columns">
            <article>
               <h4 class="sub_title"><?php the_sub_field('default_details_sub_title'); ?></h4>
               <div class="detail--text"><?php the_sub_field('default_details_sub_contents'); ?></div>
             </article>
          </div>
        <?php endwhile; } ?>
      </div>

      <div class="row">
        <div class="columns">
          <div class="detail related">
            <h3 class="related--title">
              <i class="related--sprite" aria-hidden="true"><span class="sprite icon_link"></span></i>
              関連記事新着
            </h3>
            <?php
            $custom_args = array(
              'post_type' => $post_type,
              'post_status' => 'publish',
              'has_password' => false,
              'posts_per_page' => 5,
              'exclude' => $current_id,
              'tax_query' => array(
                array(
                  'taxonomy' => $post_type_cat,
                  'field' => term_id,
                  'terms' => $cat_map,
                ),
                array(
                  'taxonomy' => $post_type_tax,
                  'field' => term_id,
                  'terms' => $tax_map,
                )
              )
            );
            $related_posts = get_posts( $custom_args ); ?>
            <ul class="related--list row">
              <?php foreach ($related_posts as $related) { ?>
                <li class="related--item small-12 columns">
                  <a class="related--link" href="<?php echo get_the_permalink($related->ID); ?>" title="<?php the_title(); ?>">
                    <h4 class="related--item--title"><?php echo $related->post_title; ?></h4>
                  </a>
                </li>
              <?php } ?>
            </ul>

            <div class="button__new-article--holder">
              <a class="aside--more button button__more" href="<?php echo get_term_link($category->term_id); ?>" title="もっと見る"><i class="fa fa-chevron-right" aria-hidden="true"></i>もっと見る</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <aside class="section_aside small-12 medium-3 columns">
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

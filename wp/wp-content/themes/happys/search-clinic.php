<?php
$post_search = $_GET['s'];
$post_category_slug = $_GET['category_name'];
$post_tag_slug = $_GET['tag'];

global $query_string;
parse_str($query_string, $query_array);

if( isset($post_search)) {
  $post_args = array(
    's'             => $post_search,
    'post_type'     => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'category_name' => $post_category_slug,
    'tag'              => $post_tag_slug,
    'posts_per_page'   => 5,
    'has_password' => false,
    'paged' => $paged,
  );
}
else {
  $post_args = array(
  	'post_type'        => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'category_name' => $post_category_slug,
    'posts_per_page'   => 5,
    'has_password' => false,
    'paged' => $paged
  );
}

$merged_args = array_merge($query_array, $post_args);
$custom_query = new WP_Query( $merged_args );
?>
<?php get_header(); ?>


<div class="wrapper">
  <div class="row">

    <?php
    $page_title = 'Clinic';

    if( (isset($post_search) && $post_search != '') || (isset($post_category_slug) && $post_category_slug != '') || (isset($post_tag_slug) && $post_tag_slug != '') ){
      $page_title = '検索結果：';
      if( isset($post_category_slug) && $post_category_slug != '') {
        $post_category = get_category_by_slug( $post_category_slug );
        $page_title .= $post_category->cat_name;
      }
      if( isset($post_tag_slug) && $post_tag_slug != '') {
        $post_term = get_terms( $taxonomy, 'slug='.$post_tag_slug);
        $post_term_name = $post_term[0]->name;

        if( isset($post_category_slug) && $post_category_slug != '') {
          $page_title .= ' × '. $post_term_name;
        }
        else {
          $page_title .= $post_term_name;
        }
      }

      if( isset($post_search) && $post_search != '') {
        if( (isset($post_category_slug) && $post_category_slug != '') || (isset($post_tag_slug) && $post_tag_slug != '') ){
          $page_title .= ' × '. $post_search;
        }
        else {
          $page_title .= $post_search;
        }
      }
    } ?>

    <main class="section_main columns small-12 medium-9">
      <h2 class="main_title"><i class="main_title--sprite" aria-hidden="true"><span class="sprite icon_08"></span></i><?php echo $page_title; ?></h2>

      <div class="row">
        <div class="section_search columns small-12">
          <?php get_template_part( 'includes/searchbox', 'clinic' ); ?>
        </div>
      </div>

      <?php if ( $custom_query->have_posts() ) { ?>

        <ul class="row">
        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
          <li class="columns small-12">
            <?php get_template_part( 'includes/panel', 'clinic' ); ?>
          </li>
        <?php endwhile; ?>
        </ul>

        <?php if (function_exists(custom_pagination)) {
          custom_pagination($custom_query->max_num_pages,"",$paged);
        } ?>
      <?php
      }
      else {
        echo 'お探しの検索は該当がありません。';
      }
      ?>
    </main>

    <aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
    </aside>

  </div>
</div>

<?php get_footer(); ?>

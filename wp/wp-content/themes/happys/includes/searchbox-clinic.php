<?php
$queried_object = get_queried_object();

$categories_parent = get_category_by_slug('clinic');
$categories_parent_id = $categories_parent->term_id;


$args = array(
  'parent' => $categories_parent_id,
  'orderby' => 'menu_order'
);
$categories = get_categories( $args );
$tags = get_tags();
?>

<div class="search_box front_search">
  <div class="row front_search--left">

    <!-- Map -->
    <div class="columns small-12 medium-6 front_search--map">
      <img src="<?php echo get_template_directory_uri(); ?>/images/search-map.png" alt="全国ひきこもり/家庭内暴力相談窓口を探す" />
    </div>

    <!-- Search box -->
    <div class="columns small--12 medium-6 ">
      <form method="get" id="search_form" class="form__search" action="<?php echo home_url(); ?>/clinic">
        <div class="select-box">
          <label for ="searchCat" class="search--form--label">▼ 選択してください
          <select id="searchCat" name="category_name" class="search--form--select">
            <option value="">お住まいの地域</option>
            <?php

              foreach ($categories as $category_elem) {
                if( wp_specialchars($category_name, 1) == $category_elem->slug ) {
                  echo '<option value="'.$category_elem->slug.'" selected>'.$category_elem->name.'</option>';
                }
                else {
                  echo '<option value="'.$category_elem->slug.'">'.$category_elem->name.'</option>';
                }
              }
            ?>
          </select>
          </label>
        </div>

        <div class="select-box">
          <label for ="searchTag" class="search--form--label">▼ 選択してください
          <select id="searchTag" name="tag" class="search--form--select">
            <option value="">ご相談の種類</option>
            <?php

              foreach ($tags as $tag_elem) {
                if( wp_specialchars($tag, 1) == $tag_elem->slug ) {
                  echo '<option value="'.$tag_elem->slug.'" selected>'.$tag_elem->name.'</option>';
                }
                else {
                  echo '<option value="'.$tag_elem->slug.'">'.$tag_elem->name.'</option>';
                }
              }
            ?>
          </select>
          </label>
        </div>

        <input type="hidden" name="post_type" value="clinic" />

        <label class="search--form--label">▼ フリーワード検索
          <input class="topSearch" type="search" placeholder="地域など" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
        </label>

        <div class="button__form--holder">
          <input class="button button__form" id="searchsubmit"  type="submit" value="検索">
        </div>
      </form>
    </div>

  </div>
</div>

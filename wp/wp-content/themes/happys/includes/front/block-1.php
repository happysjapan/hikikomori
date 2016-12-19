<?php
$hikikomori_link = get_term_link('hikikomori', 'knowledge-cat');
$domestic_link = get_term_link('domestic-violence', 'knowledge-cat');
?>


<section class="front-widget">
  <h2 class="aside--title">
    <i class="aside--sprite" aria-hidden="true"><span class="sprite icon_menu_3"></span></i>
    原因と解決策
  </h2>
  <ul class="aside--list row">
    <li class="aside--item columns small-12 medium-6">
      <article>
        <a class="front-widget" href="<?php echo $hikikomori_link; ?>">
          <?php $hikimkomori_args = array(
            'post_type'=> 'knowledge',
            'post_status' => 'publish',
            'has_password' => false,
            'posts_per_page' => 1,
            'tax_query' => array(
              array(
                'taxonomy' => 'knowledge-cat',
                'field' => 'slug',
                'terms' => 'hikikomori',
              )
            )
          );
          $hikikomori_posts = get_posts( $hikimkomori_args ); ?>
          <?php if ($hikikomori_posts) {
            foreach ($hikikomori_posts as $hikikomori) { ?>
            <?php if( get_field('default_thumbnail', $hikikomori->ID) ){ ?>
              <img class="aside--item--image" src="<?php echo get_field('default_thumbnail', $hikikomori->ID)["sizes"]["thumbnail"]; ?>" alt="<?php echo $hikikomori->post_title; ?>" />
            <?php } else { ?>
              <img class="aside--item--image" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php echo $hikikomori->post_title; ?>" />
            <?php } ?>
            <h3 class="aside--item--title"><?php echo $hikikomori->post_title; ?></h3>
            <div class="button__in_widget--holder">
              <button class="button button__in_widget" type="button" name="button">▶ 詳細</button>
            </div>
          <?php }
          } ?>
        </a>
      </article>
    </li>
    <li class="aside--item columns small-12 medium-6">
      <article>
        <a class="front-widget" href="<?php echo $domestic_link; ?>">
          <?php $domestic_args = array(
            'post_type'=> 'knowledge',
            'post_status' => 'publish',
            'has_password' => false,
            'posts_per_page' => 1,
            'tax_query' => array(
              array(
                'taxonomy' => 'knowledge-cat',
                'field' => 'slug',
                'terms' => 'domestic-violence',
              )
            )
          );
          $domestic_posts = get_posts( $domestic_args ); ?>

          <?php if ($domestic_posts) {
            foreach ($domestic_posts as $domestic) { ?>
            <?php if( get_field('default_thumbnail', $domestic->ID) ){ ?>
              <img class="aside--item--image" src="<?php echo get_field('default_thumbnail', $domestic->ID)["sizes"]["thumbnail"]; ?>" alt="<?php echo $domestic->post_title; ?>" />
            <?php } else { ?>
              <img class="aside--item--image" src="<?php echo get_template_directory_uri(); ?>/images/noimage_sq.jpg" alt="<?php echo $domestic->post_title; ?>" />
            <?php } ?>
            <h3 class="aside--item--title"><?php echo $domestic->post_title; ?></h3>
            <div class="button__in_widget--holder">
              <span class="button button__in_widget">▶ 詳細</span>
            </div>
          <?php }
          } ?>
        </a>
      </article>
    </li>
  </ul>
</section>

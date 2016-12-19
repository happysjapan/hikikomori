<?php get_header();?>

<div class="row">
  <div class="columns breadcrumbs--top">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>

<div class="row">
  <section class="columns">
    <h2>ページが見つかりませんでした。</h2>
    <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
  </section>
</div>

<?php get_footer(); ?>

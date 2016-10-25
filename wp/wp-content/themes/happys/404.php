<?php get_header();?>

<div class="row">
  <div class="columns breadcrumbs--top">
    <?php custom_breadcrumbs(); ?>
  </div>
</div>

<div class="row">
  <div class="columns">
    <h4>ページが見つかりませんでした。</h4>
    <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
  </div>
</div>

<?php get_footer(); ?>

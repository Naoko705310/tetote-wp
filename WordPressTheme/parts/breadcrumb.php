<!-- パンくずリスト -->
<div class="breadcrumb <?php 
  if (is_page('entry')) {
    echo 'page-entry__breadcrumb';
  } elseif (is_page('entry-thanks')) {
    echo 'page-entry-thanks__breadcrumb';
  } elseif (is_single() && get_post_type() == 'post') {
    echo 'page-blog-details__breadcrumb';
  } elseif (is_page('about-us')) {
    echo 'page-about__breadcrumb';
  } elseif (is_page('benefits')) {
    echo 'page-benefits__breadcrumb';
  }
?>">
  <div class="breadcrumb__inner inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>
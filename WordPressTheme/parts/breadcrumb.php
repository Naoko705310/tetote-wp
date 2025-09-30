<!-- パンくずリスト -->
<div class="breadcrumb <?php 
  if (is_page('entry')) {
    echo 'page-entry__breadcrumb';
  } elseif (is_page('entry-thanks')) {
    echo 'page-entry-thanks__breadcrumb';
  }
?>">
  <div class="breadcrumb__inner inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>
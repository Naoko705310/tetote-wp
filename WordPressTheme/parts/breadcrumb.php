<!-- パンくずリスト -->
<div class="breadcrumb <?php echo is_page('entry') ? 'page-entry__breadcrumb' : ''; ?>">
  <div class="breadcrumb__inner inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>
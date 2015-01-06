<div class="sidebar">
      <div class="latestNews">
        <div class="widget-area">
          <?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
          <aside id="archives" class="widgets">
          <ul>
            <?php wp_get_archives('type=monthly&limit=12'); ?>
          </ul>
          <?php endif; // end sidebar widget area ?>
        </div>
      </div>
</div>

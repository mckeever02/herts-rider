    <div class="drawer-header">
        <button type="button" class="drawer-toggle drawer-hamburger">
          <span class="sr-only">toggle navigation</span>
          <span class="drawer-hamburger-icon"></span>
        </button>
      </div>

      <div class="drawer-main drawer-default">
        <nav class="drawer-nav" role="navigation">
          <div class="drawer-brand"></div>

          <ul class="drawer-menu">
            <?php foreach($page as $item) {
                echo "<li class=\"drawer-menu-item {$item['id']} {$item['type']}\"><a href=\"../../articles{$item['type']}/{$item['id']}\">{$item['title']}</a></li>";
                } ?>
          </ul>
        </nav>
      </div>
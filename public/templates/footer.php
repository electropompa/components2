<?php
function render_footer(  ){
  ob_start();
  echo '
  <footer>
    <div class="container">';
      echo render_menu();
echo '</div>
  </footer>
</body>
</html>';
  $footer = ob_get_contents();
  ob_clean();
  return $footer;
}
echo render_footer(  );

<?php
require header_route;
require footer_route;
?>

<?= template_header('404', file_get_contents(css_route)) ?>

<div class="container">
  <div class="container row d-flex align-items-center">
    <div class="container">
      <h2>ERROR</h2>
      <h1>404</h1>
      <h4>Page not found</h4>
    </div>
  </div>
</div>

<?= template_footer(file_get_contents(js_route)) ?>
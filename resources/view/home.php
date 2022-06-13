<?php
require header_route;
require footer_route;
?>

<?= template_header('Home', file_get_contents(css_route)) ?>

<div class="container">
  <h2>Home</h2>
  <p>Welcome to the home page!</p>
</div>

<?= template_footer(file_get_contents(js_route)) ?>
<?php
function template_footer($js)
{
  echo <<<EOT
  <script type='text/javascript'>$js</script>
  </body>
</html>
EOT;
}

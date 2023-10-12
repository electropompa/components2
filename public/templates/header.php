<?php
function render_header( $page_options ){
  ob_start();
  echo'
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../styles.css">
  <title>' . $page_options['title'] . '</title>
</head>
<body>

<header>
  <div class="container">';

  echo render_menu();

  echo '</div>
</header>';
  $header = ob_get_contents();
  ob_clean();
  return $header;

}
echo render_header( $page_options );

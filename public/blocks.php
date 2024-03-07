<?php
$page_options = [
  'title' => 'Компоненты - Блоки',
];

require "templates/menu.php";
?>
<!doctype html>
<html lang="ru">
<?php require_once "templates/header.php"; ?>

<aside>
  <h4>Оглавление</h4>
  <ol>
    <li><a href="#block-shift" title="Reset">Block Shift</a></li>
    <li><a href="#articles-list-small" title="Reset">Articles List Small</a></li>
  </ol>
</aside>

<h1 class="text-center">Примеры блоков</h1>

<h2 class="text-center my-5" id="block-shift">Block Shift</h2>
<?php require "src/blocks/block-shift/block-img-shift.php"?>

  <h2 class="text-center my-5" id="articles-list-small">Articles List Small</h2>
<div class="container">
<?php require "src/blocks/articles-list/articles-list.php"; ?>
</div>

<?php require_once "templates/footer.php";

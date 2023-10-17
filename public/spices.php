<?php
$page_options = [
  'title' => 'Компоненты - UI',
];

require "templates/menu.php";
?>
  <!doctype html>
  <html lang="ru">
<?php require "templates/header.php"; ?>

<div class="container">
  <h1 class="text-center">Доп. функционал для UI компонентов</h1>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-3">
      <ul>
        <li><a href="#" class="link-underline">.link-underline 1</a></li>
        <li><a href="#" class="link-underline">.link-underline 2</a></li>
        <li><a href="#" class="link-underline">.link-underline 3</a></li>
        <li><a href="#" class="link-white-underline">.link-underline 4</a></li>
        <li><a href="#" class="link-white-underline">.link-underline 5</a></li>
      </ul>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <ul>
        <li><a href="#" class="link-highlight">.link-underline 1</a></li>
        <li><a href="#" class="link-highlight">.link-underline 2</a></li>
        <li><a href="#" class="link-highlight">.link-underline 3</a></li>
        <li><a href="#" class="link-highlight">.link-underline 4</a></li>
        <li><a href="#" class="link-highlight">.link-underline 5</a></li>
      </ul>
    </div>
  </div>

</div>

<?php require_once "templates/footer.php"; ?>

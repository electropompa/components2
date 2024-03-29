<?php
$page_options = [
    'title' => 'Компоненты - UI',
];

require "templates/menu.php";
?>
<!doctype html>
<html lang="ru">
<?php require "templates/header.php"; ?>

<aside>
  <h4>Оглавление</h4>
  <ol>
    <li><a href="#reset" title="Reset">Reset</a></li>
    <li><a href="#variables" title="variables">Variables</a></li>
    <li><a href="#theme-variables" title="Theme variables">Theme variables</a></li>
    <li><a href="#icons" title="Icons">Icons</a></li>
    <li><a href="#colors" title="Colors">Colors</a></li>
    <li><a href="#grid" title="Grid">Grid</a></li>
    <li><a href="#typography" title="Typography">Typography</a></li>
    <li><a href="#badges" title="Badges">Badges</a></li>
    <li><a href="#alerts" title="Alerts">Alerts</a></li>
    <li><a href="#typography-utilities" title="Typography utilities">Typography utilities</a></li>
    <li><a href="#utilities" title="Utilities">Utilities</a></li>
  </ol>
</aside>

<h1 class="text-center">Документация по компонентам</h1>

<div class="container">
  <p>Все файлы подключаются в style.sass</p>

  <div class="row">
    <div class="col-12 col-xl-4">
      <h2 id="reset">Reset</h2>
      <p>Самый простой Reset. Добавлены миксины:</p>
      <ul>
        <li>=reset-buttons</li>
        <li>=reset-list</li>
      </ul>
      <p><b>Сброшены маркеры у ul</b></p>
    </div>
    <div class="col-12 col-xl-2">
      <h2 id="variables">Variables</h2>
      <ul>
        <li>Breakpoints</li>
        <li>Shadows
          <ul>
            <li>=shadow</li>
            <li>=shadowHover</li>
          </ul>
        </li>
        <li>Transition</li>
        <li>Spacers</li>
      </ul>
    </div>
    <div class="col-12 col-xl-3">
      <h2 id="theme-variables">Theme Variables</h2>
      <ul>
        <li>Theme colors ($accent)</li>
        <li>Theme fonts
          <ol>
            <li>$heading-font</li>
            <li>$text-font</li>
          </ol>
        </li>
      </ul>
    </div>
    <div class="col-12 col-xl-3">
      <h2 id="icons">Icons</h2>
      <p>Подключает Bootstrap Icons через миксин <b>=bs-font</b></p>
    </div>
  </div>

  <h2 id="colors" class="my-5">Colors</h2>
  <div class="row">
    <div class="col-4 col-md-1"><div class="color-block-wrapper black">$black</div></div>
    <div class="col-4 col-md-1"><div class="color-block-wrapper white">$white</div></div>
    <div class="col-4 col-md-1"><div class="color-block-wrapper accent">$accnet</div></div>
  </div>

  <h2 class="mt-5">Color Palette</h2>

  <?php $colors = [ 'slate', 'gray', 'zinc', 'neutral', 'stone', 'red', 'orange', 'amber', 'yellow', 'lime', 'green', 'emerald', 'teal', 'cyan', 'sky', 'blue', 'indigo', 'violet', 'purple', 'fuchsia', 'pink', 'rose' ];

    foreach( $colors as $color ) { ?>

      <div class="row no-gutters">
        <div class="col-4 col-md-2">
          <h3 class="text-capitalize"><?=$color ?></h3>
        </div>
        <div class="col-4 col-md-1 mb-2"><div class="md-text-normal color-block-wrapper <?=$color?>-50"><?=$color?>-50</div></div>
        <?php
          for( $i = 1; $i < 10; $i++ ) { ?>

            <div class="col-4 col-md-1 mb-2"><div class="sm-text-normal color-block-wrapper <?=$color?>-<?=$i?>00"><?=$color?>-<?=$i?>00</div></div>

          <?php } ?>
      </div>
    <?php }
  ?>

  <h2 id="grid" class="my-5">Grid</h2>
  <div class="row">
    <div class="col-12 col-md-4">
      <p>Сетка отличается от Bootstrap, в первую очередь, тем, что от Breakpoins меняется Gutters</p>
      <p>Как и в Bootstrap, сетка на flexbox</p>
      <ul class="list-unstyled">
        <li>.no-gutters</li>
        <li>.g-0</li>
        <li>.col</li>
        <li>.col-* col-sm-* col-md-* .col-lg-* .col-xl-* .col-xxl-*</li>
        <li>.offset-*</li>
        <li>.order[-breakpoint]-(first|0|1|2|3|4|5|last)</li>
      </ul>
    </div>
    <div class="col-12 col-md-2">
      <h3>Breakpoints</h3>
      <ul class="list-unstyled">
        <li>$xs: 480px</li>
        <li>$sm: 576px</li>
        <li>$md: 768px</li>
        <li>$lg: 1024px</li>
        <li>$xl: 1400px</li>
        <li>$xxl: 1500px</li>
      </ul>
    </div>
    <div class="col-12 col-md-2">
      <h3>Gutters</h3>
      <ul class="list-unstyled">
        <li>"xs": 20px</li>
        <li>"sm": 24px</li>
        <li>"md": 30px</li>
        <li>"lg": 32px</li>
        <li>"xl": 34px</li>
        <li>"xxl": 36px</li>
      </ul>
    </div>
    <div class="col-12 col-md-4">
      <h3>Размеры</h3>
      <ul class="list-unstyled">
        <li><b>$sm диапазон</b>: 576px - 767px</li>
        <li><b>$sm-container</b>: 552px = 528px - padding 12px * 2</li>
      </ul>
      <ul class="list-unstyled">
        <li><b>$md диапазон</b>: 768px - 1023px</li>
        <li><b>$md-container</b>: 708px = 738px - padding 15px * 2</li>
      </ul>
      <ul class="list-unstyled">
        <li><b>$lg диапазон</b>: 1024px - 1399px</li>
        <li><b>$lg-container</b>: 960px = 992px - padding 16px * 2</li>
      </ul>
      <ul class="list-unstyled">
        <li><b>$xl диапазон</b>: 1400px - 1499px</li>
        <li><b>$xl-container</b>: 1332px = 1366px - padding 17px * 2</li>
      </ul>
      <ul class="list-unstyled">
        <li><b>$xxl-container</b>: 1428px = 1464px - padding 18px * 2</li>
      </ul>
    </div>
  </div>
  <div class="row my-3">
    <div class="col-6"><div class="bg-primary p-3">col-6</div></div>
    <div class="col-6"><div class="bg-success p-3">col-6</div></div>
  </div>
  <div class="row my-3">
    <div class="col-5"><div class="bg-primary p-3">col-5</div></div>
    <div class="col-7"><div class="bg-success p-3">col-7</div></div>
  </div>
  <div class="row my-3">
    <div class="col-4"><div class="bg-primary p-3">col-4</div></div>
    <div class="col-8"><div class="bg-success p-3">col-8</div></div>
  </div>
  <div class="row my-3">
    <div class="col-3"><div class="bg-primary p-3">col-3</div></div>
    <div class="col-9"><div class="bg-success p-3">col-9</div></div>
  </div>
  <div class="row my-3">
    <div class="col-2"><div class="bg-primary p-3">col-2</div></div>
    <div class="col-10"><div class="bg-success p-3">col-10</div></div>
  </div>
  <div class="row my-3">
    <div class="col-1"><div class="bg-primary p-3">col-1</div></div>
    <div class="col-11"><div class="bg-success p-3">col-11</div></div>
  </div>
  <div class="row my-3">
    <div class="col-five"><div class="bg-primary p-3">col-five</div></div>
    <div class="col-five"><div class="bg-success p-3">col-five</div></div>
    <div class="col-five"><div class="bg-primary p-3">col-five</div></div>
    <div class="col-five"><div class="bg-success p-3">col-five</div></div>
    <div class="col-five"><div class="bg-primary p-3">col-five</div></div>
  </div>

  <h2 id="typography" class="my-5">Typography</h2>
  <div class="row">
    <div class="col-12 col-lg-7">
      <h1>Пример заголовка H1 <span class="badge bg-primary ">Badges</span></h1>
      <h2>Пример заголовка H2 <span class="badge bg-primary">Badges</span></h2>
      <h3>Пример заголовка H3 <span class="badge bg-primary">Badges</span></h3>
      <h4>Пример заголовка H4 <span class="badge bg-primary">Badges</span></h4>
      <h5>Пример заголовка H5 <span class="badge bg-primary">Badges</span></h5>
      <h6>Пример заголовка H6 <span class="badge bg-primary">Badges</span></h6>

      <h3 class="mb-4 mt-5">lg-text-normal</h3>
      <p class="lg-text-normal"><b>Paragraph</b>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad assumenda atque, dignissimos earum harum itaque mollitia nesciunt nihil perspiciatis, saepe tempora temporibus. Autem consectetur, debitis dolore iste quisquam voluptatem. Aliquam dolore in molestiae temporibus. Hic modi non numquam! Ab atque deserunt dicta eaque eos harum inventore iure, maxime minima mollitia, obcaecati pariatur quae saepe sint suscipit totam ut veritatis.</p>

      <h3 class="my-4">md-text-normal - по-умолчанию</h3>
      <p class="md-text-normal"><b>Paragraph</b>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad assumenda atque, dignissimos earum harum itaque mollitia nesciunt nihil perspiciatis, saepe tempora temporibus. Autem consectetur, debitis dolore iste quisquam voluptatem. Aliquam dolore in molestiae temporibus. Hic modi non numquam! Ab atque deserunt dicta eaque eos harum inventore iure, maxime minima mollitia, obcaecati pariatur quae saepe sint suscipit totam ut veritatis.</p>

      <h3 class="my-4">sm-text-normal</h3>
      <p class="sm-text-normal"><b>Paragraph</b>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad assumenda atque, dignissimos earum harum itaque mollitia nesciunt nihil perspiciatis, saepe tempora temporibus. Autem consectetur, debitis dolore iste quisquam voluptatem. Aliquam dolore in molestiae temporibus. Hic modi non numquam! Ab atque deserunt dicta eaque eos harum inventore iure, maxime minima mollitia, obcaecati pariatur quae saepe sint suscipit totam ut veritatis.</p>

      <h3 class="my-4">xs-text-normal</h3>
      <p class="xs-text-normal"><b>Paragraph</b>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad assumenda atque, dignissimos earum harum itaque mollitia nesciunt nihil perspiciatis, saepe tempora temporibus. Autem consectetur, debitis dolore iste quisquam voluptatem. Aliquam dolore in molestiae temporibus. Hic modi non numquam! Ab atque deserunt dicta eaque eos harum inventore iure, maxime minima mollitia, obcaecati pariatur quae saepe sint suscipit totam ut veritatis.</p>

      <button class="mb-3 btn btn-primary">.btn.btn-primary</button>
      <button class="mb-3 btn btn-secondary">.btn.btn-secondary</button>
      <button class="mb-3 btn btn-success">.btn.btn-success</button>
      <button class="mb-3 btn btn-warning">.btn.btn-warning</button>
      <button class="mb-3 btn btn-light">.btn.btn-light</button>
      <button class="mb-3 btn btn-info">.btn.btn-info</button>
      <button class="mb-3 btn btn-danger">.btn.btn-danger</button>
      <button class="mb-3 btn btn-dark">.btn.btn-dark</button>

    </div>
    <div class="col-12 col-lg-5">

      <h3 id="badges" class="mb-3 text-center">Badges</h3>

      <span class="badge mb-2 bg-primary">Primary</span>
      <span class="badge mb-2 bg-secondary">Secondary</span>
      <span class="badge mb-2 bg-success">Success</span>
      <span class="badge mb-2 bg-danger">Danger</span>
      <span class="badge mb-2 bg-warning text-dark">Warning</span>
      <span class="badge mb-2 bg-info text-dark">Info</span>
      <span class="badge mb-2 bg-light text-dark">Light</span>
      <span class="badge mb-2 bg-dark">Dark</span>

      <p>Цвет меняется в _colors.sass</p>

      <h3 id="alerts" class="mt-5 text-center">Alrets</h3>
      <div class="alert alert-primary">background-color: sky-200, border-color: sky-300, color: blue-900</div>
      <div class="alert alert-secondary">background-color: gray-200, border-color: gray-300, color: gray-900</div>
      <div class="alert alert-success">background-color: emerald-200, border-color: green-300, color: green-900</div>
      <div class="alert alert-danger">background-color: rose-200, border-color: rose-400, color: rose-900</div>
      <div class="alert alert-warning">background-color: emerald-200, border-color: green-300, color: green-900</div>
      <div class="alert alert-info">background-color: cyan-200, border-color: cyan-300, color: cyan-900</div>
      <div class="alert alert-light">background-color: gray-100, border-color: gray-200, color: gray-500</div>
      <div class="alert alert-dark">background-color: slate-400, border-color: green-300, color: green-900</div>

      <h3 class="text-center my-5">BG Classes</h3>
      <div class="row">
        <div class="col-6"><div class="bg-primary p-3">.bg-primary</div></div>
        <div class="col-6"><div class="bg-secondary p-3">.bg-secondary</div></div>
        <div class="col-6"><div class="bg-success p-3">.bg-success</div></div>
        <div class="col-6"><div class="bg-info p-3">.bg-info</div></div>
        <div class="col-6"><div class="bg-warning p-3">.bg-warning</div></div>
        <div class="col-6"><div class="bg-danger p-3">.bg-danger</div></div>
        <div class="col-6"><div class="bg-light p-3">.bg-light</div></div>
        <div class="col-6"><div class="bg-dark p-3">.bg-dark</div></div>
      </div>

    </div>
  </div>

  <h2 id="typography-utilities" class="my-5">Typography utilities</h2>
  <div class="row">
    <div class="col-12 col-md-2">
      <ul>
        <li>.fw-bold</li>
        <li>.nowrap</li>
        <li>small, .small</li>
        <li>.text-dark</li>
      </ul>
    </div>
    <div class="col-12 col-md-3">
      <ul>
        <li>.uppercase - UPPERCASE</li>
        <li>.text-capitalize - Capitalize</li>
        <li>.text-lowercase - lowercase</li>
      </ul>
    </div>
    <div class="col-12 col-md-3">
      <ul>
        <li>.text-left (.text-*-left)</li>
        <li>.text-right (.text-*-right)</li>
        <li>.text-center (.text-*-center)</li>
      </ul>
    </div>
    <div class="col-12 col-md-4">
      <div class="row">
        <div class="col-6">
          <div class="p-3 border">.border</div>
          <div class="p-3 border-start">.border-start</div>
          <div class="p-3 border-bottom">.border-bottom</div>
        </div>
        <div class="col-6">
          <div class="p-3 border-top">.border-top</div>
          <div class="p-3 border-end">.border-end</div>
        </div>
      </div>
    </div>
  </div>

  <h2 id="utilities" class="my-5">Utilities</h2>
  <div class="row">
    <div class="col-12 col-xl-4">
      <ul>
        <li>.white-bg-wrapper - padding 40/60 для больших блоков</li>
        <li class="bg-black">.bg-black</li>
        <li class="bg-white">.bg-white</li>
        <li class="bg-accent">.bg-accent</li>
        <li class="border-top">.border-top - gray-500</li>
      </ul>
    </div>
    <div class="col-12 col-xl-4">
      <h4>Стандартные Bootstrap отступы</h4>
      <p>.(m|p)[-(t|r|b|l|y|x)]-*</p>
      <ul>
        <li>.position-(static|relative|absolute|fixed|sticky)</li>
        <li>.hidden</li>
        <li>.rounded-2</li>
        <li>.w-100</li>
        <li>.h-100</li>
      </ul>
    </div>
    <div class="col-12 col-xl-4">
      <h4>Стандартные Bootstrap Displays</h4>
      <ul>
        <li>.d[-breakpoint]-block</li>
        <li>.d[-breakpoint]-inline-block</li>
        <li>.d[-breakpoint]-inline</li>
        <li>.d[-breakpoint]-flex</li>
        <li>.d[-breakpoint]-none</li>
      </ul>
    </div>
  </div>

  <h3 class="my-3">Flexbox Utilities</h3>
  <div class="row">
    <div class="col-12 col-xl-2">
      <ul>
        <li>.flex-center</li>
        <li>.flex-row-aic</li>
        <li>.flex-row-sb</li>
        <li>.flex-row-sb-aic</li>
        <li>.flex-row-sa</li>
        <li>.flex-row-sa-aic</li>
        <li>.flex-row-start</li>
        <li>.flex-row-end</li>
        <li>.flex-column-aic</li>
        <li>.flex-column-sb</li>
        <li>.flex-column-start</li>
        <li>.flex-column-end</li>
      </ul>
    </div>
    <div class="col-12 col-xl-2">
      <ul>
        <li>.justify-content-start</li>
        <li>.justify-content-end</li>
        <li>.justify-content-center</li>
        <li>.justify-content-between</li>
        <li>.justify-content-around</li>
      </ul>
    </div>
    <div class="col-12 col-xl-2">
      <ul>
        <li>.align-items-start</li>
        <li>.align-items-end</li>
        <li>.align-items-center</li>
        <li>.align-items-baseline</li>
        <li>.align-items-stretch</li>
      </ul>
    </div>
    <div class="col-12 col-xl-2">
      <ul>
        <li>.align-content-start</li>
        <li>.align-content-end</li>
        <li>.align-content-center</li>
        <li>.align-content-between</li>
        <li>.align-content-around</li>
        <li>.align-content-stretch</li>
      </ul>
    </div>
    <div class="col-12 col-xl-2">
      <ul>
        <li>.align-self-auto</li>
        <li>.align-self-start</li>
        <li>.align-self-end</li>
        <li>.align-self-center</li>
        <li>.align-self-baseline</li>
        <li>.align-self-stretch</li>
      </ul>
    </div>
    <div class="col-12 col-xl-2">
      <ul>
        <li>.align-baseline</li>
        <li>.align-top</li>
        <li>.align-middle</li>
        <li>.align-bottom</li>
        <li>.align-text-bottom</li>
        <li>.align-text-top</li>
      </ul>
    </div>
  </div>

  <h3 class="my-5">Forms</h3>
  <div class="row">
    <div class="col-xl-3">
      <label for="text-input" class="component__input__name__label">
        Text input
        <input id="text-input" type="text" placeholder="Введите текст">
      </label>
    </div>
    <div class="col-xl-3">
      <label for="email-input">
        Email input
        <input id="email-input"  type="email" placeholder="test@test.ru">
      </label>
    </div>
    <div class="col-xl-6"></div>
  </div>

  <h3 class="my-5">Tables</h3>
  <h4 class="my-5">.table-bordered</h4>
  <table class="table-bordered">
    <thead>
    <tr>
      <th>Стрижка (мытье + укладка включены в стоимость)</th>
      <th>Мастер</th>
      <th>Топ-мастер</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Короткие (до 10см)</td>
      <td>1500 руб.</td>
      <td>1700 руб.</td>
    </tr>
    <tr>
      <td>Средние (до 20см)</td>
      <td>1700 руб.</td>
      <td>1900 руб.</td>
    </tr>
    <tr>
      <td>Длинные (до 40см)</td>
      <td>2000 руб.</td>
      <td>2200 руб.</td>
    </tr>
    <tr>
      <td data-title="Стрижка кончиков волос одним срезом">Стрижка кончиков волос одним срезом</td>
      <td>1500 руб.</td>
      <td>1700 руб.</td>
    </tr>
    </tbody>
  </table>

  <table>
    <thead>
    <tr>
      <th>Стрижка (мытье + укладка включены в стоимость)</th>
      <th>Мастер</th>
      <th>Топ-мастер</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Короткие (до 10см)</td>
      <td>1500 руб.</td>
      <td>1700 руб.</td>
    </tr>
    <tr>
      <td>Средние (до 20см)</td>
      <td>1700 руб.</td>
      <td>1900 руб.</td>
    </tr>
    <tr>
      <td>Длинные (до 40см)</td>
      <td>2000 руб.</td>
      <td>2200 руб.</td>
    </tr>
    <tr>
      <td data-title="Стрижка кончиков волос одним срезом">Стрижка кончиков волос одним срезом</td>
      <td>1500 руб.</td>
      <td>1700 руб.</td>
    </tr>
    </tbody>
  </table>

  <table class="table-horizontal-bordered table-striped">
    <thead>
    <tr>
      <th>Стрижка (мытье + укладка включены в стоимость)</th>
      <th>Мастер</th>
      <th>Топ-мастер</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Короткие (до 10см)</td>
      <td>1500 руб.</td>
      <td>1700 руб.</td>
    </tr>
    <tr>
      <td>Средние (до 20см)</td>
      <td>1700 руб.</td>
      <td>1900 руб.</td>
    </tr>
    <tr>
      <td>Длинные (до 40см)</td>
      <td>2000 руб.</td>
      <td>2200 руб.</td>
    </tr>
    <tr>
      <td data-title="Стрижка кончиков волос одним срезом">Стрижка кончиков волос одним срезом</td>
      <td>1500 руб.</td>
      <td>1700 руб.</td>
    </tr>
    </tbody>
  </table>
</div>

<?php require_once "templates/footer.php"; ?>

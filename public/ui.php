<?php
$page_options = [
  'title' => 'Компоненты - UI/UX',
];

require "templates/menu.php";

$pdf_icon = '<svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1H17.1075L23 7.85638V25H1V1Z" stroke="#004C95" stroke-width="2"/>
<path d="M4.5552 20.856C4.4016 21.0096 4.2216 21.0864 4.0152 21.0864C3.8088 21.0864 3.6288 21.0096 3.4752 20.856C3.3216 20.7024 3.2448 20.5224 3.2448 20.316C3.2448 20.1096 3.3216 19.9296 3.4752 19.776C3.6288 19.6224 3.8088 19.5456 4.0152 19.5456C4.2216 19.5456 4.4016 19.6224 4.5552 19.776C4.7088 19.9296 4.7856 20.1096 4.7856 20.316C4.7856 20.5224 4.7088 20.7024 4.5552 20.856ZM7.17026 21H5.71586V16.1976H8.27906C8.82146 16.1976 9.24386 16.356 9.54626 16.6728C9.85346 16.9848 10.0071 17.376 10.0071 17.8464C10.0071 18.312 9.85346 18.7032 9.54626 19.02C9.24386 19.332 8.82146 19.488 8.27906 19.488H7.17026V21ZM8.09186 18.2208C8.22146 18.2208 8.32706 18.1896 8.40866 18.1272C8.49026 18.06 8.53106 17.9664 8.53106 17.8464C8.53106 17.7216 8.49026 17.628 8.40866 17.5656C8.32706 17.4984 8.22146 17.4648 8.09186 17.4648H7.17026V18.2208H8.09186ZM12.9238 21H10.771V16.1976H12.9166C13.6942 16.1976 14.3278 16.4112 14.8175 16.8384C15.3071 17.2608 15.5519 17.8464 15.5519 18.5952C15.5519 19.344 15.3071 19.932 14.8175 20.3592C14.3278 20.7864 13.6966 21 12.9238 21ZM12.9166 19.7328C13.267 19.7328 13.5478 19.6224 13.759 19.4016C13.9702 19.1808 14.0758 18.912 14.0758 18.5952C14.0758 18.2544 13.9774 17.9808 13.7806 17.7744C13.5838 17.568 13.2982 17.4648 12.9238 17.4648H12.2254V19.7328H12.9166ZM17.815 21H16.3606V16.1976H20.0038V17.4648H17.815V17.94H19.9534V19.2072H17.815V21Z" fill="#004C95"/>
</svg>';
?>
<!doctype html>
<html lang="ru">
<?php require "templates/header.php"; ?>

<div class="container">
  <h1 class="text-center">UI компоненты</h1>
  <h2>Download block</h2>

  <div class="row my-5">
    <div class="col-12 col-sm-3">
      <a class="c-download__link" href="#">
        <div class="c-download__desc">Скачать каталог Dreno Compatta</div>
        <div class="c-download__divider"></div>
        <div class="c-download__icon"><?=$pdf_icon?></div>
      </a>
    </div>
    <div class="col-12 col-sm-3">
      <a class="c-download__link white" href="#">
        <div class="c-download__desc">Скачать каталог</div>
        <div class="c-download__divider"></div>
        <div class="c-download__icon"><?=$pdf_icon?></div>
      </a>
    </div>
    <div class="col-12 col-sm-1">
      <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
    </div>
    <div class="col-12 col-sm-5"></div>
  </div>

  <h2 class="mt-5">Product cards .с-product-card__row</h2>
  <p>Если использовать карточки внутри .с-product-card__row, то уменьшатся поля между крточками и они вытянутся по общей высоте </p>
  <div class="с-product-card__row">
    <div class="c-product-card">
      <a href="#" title="Насосы Calpeda серии A AM">
        <div class="product-card__img">
          <img src="/img-examples/calpeda/image_A_02_350px.jpg" alt="Насосы Calpeda серии A AM">
        </div>
        <div class="product-card__content">
          <ul class="product-card__feat__list">
            <li class="product-card__feat_item">Расход 3,6-66 м<sup>3</sup>/ч</li>
            <li class="product-card__feat_item">Напор 3,3-33 м</li>
            <li class="product-card__feat_item">Мощность 0,55-7,5 кВт</li>
          </ul>
          <div class="product-card__title">Самовсасывающие насосы</div>
          <div class="product-card__desc">Самовсасывающие центробежные насосы с открытым рабочим колесом.</div>
          <div class="product-card__desc__bottom">
            <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
            <div class="product-card__membrane">Серия A</div>
          </div>
        </div>
      </a>
    </div>
    <div class="c-product-card">
      <a href="#" title="Насосы Calpeda серии NM">
        <div class="product-card__img">
          <img src="/img-examples/calpeda/image_NM-NMS_04_350px.jpg" alt="Насосы Calpeda серии NM">
        </div>
        <div class="product-card__content">
          <ul class="product-card__feat__list">
            <li class="product-card__feat_item">Расход 1-480 м<sup>3</sup>/ч</li>
            <li class="product-card__feat_item">Напор 3-95 м</li>
            <li class="product-card__feat_item">Мощность 0,25-75 кВт</li>
          </ul>
          <div class="product-card__title">Центробежные<br>насосы</div>
          <div class="product-card__desc">Моноблочные центробежные насосы.</div>
          <div class="product-card__desc__bottom">
            <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
            <div class="product-card__membrane">Серия NM</div>
          </div>
        </div>
      </a>
    </div>

    <div class="c-product-card">
      <a href="#" title="Насосы Calpeda серии MHX">
        <div class="product-card__img">
          <img src="/img-examples/calpeda/image_MXH_02_350px.jpg" alt="Насосы Calpeda серии A AM">
        </div>
        <div class="product-card__content">
          <ul class="product-card__feat__list">
            <li class="product-card__feat_item">Расход 1-66 м<sup>3</sup>/ч</li>
            <li class="product-card__feat_item">Напор 5,5-68 м</li>
            <li class="product-card__feat_item">Мощность 0,33-7,5 кВт</li>
          </ul>
          <div class="product-card__title">Многоступенчатые<br>насосы</div>
          <div class="product-card__desc">Горизонтальные моноблочные многоступенчатые насосы из хромникелевой стали.</div>
          <div class="product-card__desc__bottom">
            <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
            <div class="product-card__membrane">Серия MHX</div>
          </div>
        </div>
      </a>
    </div>

    <div class="c-product-card">
      <a href="#" title="Насосы Calpeda серии NR">
        <div class="product-card__img">
          <img src="/img-examples/calpeda/image_NR-NR4_02_350px.jpg" alt="Насосы Calpeda серии NR">
        </div>
        <div class="product-card__content">
          <ul class="product-card__feat__list">
            <li class="product-card__feat_item">Расход 2-110 м<sup>3</sup>/ч</li>
            <li class="product-card__feat_item">Напор 3-39 м</li>
            <li class="product-card__feat_item">Мощность 0,25-7,5 кВт</li>
          </ul>
          <div class="product-card__title">Многорядные<br>насосы</div>
          <div class="product-card__desc">Центробежные насосы с одним рабочим колесом.</div>
          <div class="product-card__desc__bottom">
            <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
            <div class="product-card__membrane">Серия NR</div>
          </div>
        </div>
      </a>
    </div>
  </div>


  <h2 class="mt-5">Product cards <code>.row>.col-*</code></h2>
  <p>Можно использовать внутри .row>.col-*, тогда карточки будут разные по высоте и отступы в соответстии с отступами сетки. Зато можно вставить с любое место макета</p>
  <div class="row">

    <div class="col-12 col-sm-3">
      <!-- PRODUCT-CARD -->
      <div class="c-product-card">
        <a href="#">
          <div class="product-card__img">
            <img src="/img-examples/ERD_9046_NM 1.jpg" alt="">
          </div>
          <div class="product-card__content">
            <div class="product-card__title">Центробежные насосы консольного типа</div>
            <div class="product-card__desc__bottom">
              <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
              <div class="product-card__membrane">Серия NM</div>
            </div>
          </div>
        </a>
      </div><!-- !PRODUCT-CARD -->
    </div>

    <div class="col-12 col-sm-3">
      <!-- PRODUCT-CARD -->
      <div class="c-product-card">
        <a href="#">
          <div class="product-card__img"><img src="/img-examples/ERD_9046_NM 1.jpg" alt=""></div>
          <div class="product-card__content">
            <ul class="product-card__feat__list">
              <li class="product-card__feat_item">Расход 3-1060 м<sup>3</sup>/ч</li>
              <li class="product-card__feat_item">Напор 4-158 м</li>
              <li class="product-card__feat_item">Мощность 0,37-132 кВт</li>
            </ul>
            <div class="product-card__title">Центробежные насосы консольного типа</div>
            <div class="product-card__desc__bottom">
              <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
              <div class="product-card__membrane">Серия NM</div>
            </div>
          </div>
        </a>
      </div><!-- !PRODUCT-CARD -->
    </div>

    <div class="col-12 col-sm-3">
      <!-- PRODUCT-CARD -->
      <div class="c-product-card">
        <a href="#">
          <div class="product-card__img"><img src="//img.electropompa.ru/logos/saer.svg" alt="" width="210"></div>
          <div class="product-card__content">
            <div class="product-card__title">Центробежные насосы консольного типа</div>
            <div class="product-card__desc">Центробежные насосы консольного типа</div>
            <div class="product-card__desc__bottom">
              <div class="product-card__desc__read_more"><button><img src="/img/icons/icon-arrow-read-more.svg" alt="->"></button></div>
              <div class="product-card__membrane">Серия NM</div>
            </div>
          </div>
        </a>
      </div><!-- !PRODUCT-CARD -->
    </div>
  </div>
</div>

<?php require_once "templates/footer.php"; ?>

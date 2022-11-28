<?php
/* Smarty version 3.1.43, created on 2022-11-28 15:54:46
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6384cbb65989e6_01833673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1658334665,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6384cbb65989e6_01833673 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Pokaz slajdów">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/5519651ee5e48909dfdecd78395b29c61eac2230_nowy-sample3.jpg" alt="Nowe klosze" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Klosze</h2>
                  <div class="caption-description"><p>Nowe klosze Modern Glass stworzone z rewolucyjnego materiału zwiększającego odporność na kurz i wilgoć. 10 lat gwarancji.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/81289f414ed52e6739a4308803b42a13c147c2b2_nowy-sample1.jpg" alt="SHILO" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Shilo</h2>
                  <div class="caption-description"><p>Profesjonalne systemy oświetleniowe. Proudly made in Poland. Posiadają czujniki ruchu oparte na najnowszych technologiach.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/72c7229cb04310403d917c33339b7cd638bab98c_nowy-sample4.jpg" alt="Loft" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Loft</h2>
                  <div class="caption-description"><p>Nowy Design by Loft. Profesjonalne lampy pasujące do każdego pomieszczenia. Uniwersalny industrialny design cieszy oko nawet wymagających projektantów wnętrz. 20 lat gwarancji.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/801853e504a9a65a37d41f71ce7062d226e1c1ab_nowy-sample2.jpg" alt="Tkanina BOUCLE" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Tkanina</h2>
                  <div class="caption-description"><p>Najmodniejsza w tym roku tkanina BOUCLE. Teraz w naszej nowej serii FABIOLA.</p>
<p>Sprawdź teraz!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}

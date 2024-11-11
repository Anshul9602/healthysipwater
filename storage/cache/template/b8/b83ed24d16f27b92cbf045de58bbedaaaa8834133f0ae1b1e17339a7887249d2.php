<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/home.twig */
class __TwigTemplate_4521f7c1f1135e2a9c368cbd8ad283825ab4219fb46ced5463f722d329351523 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<link href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\" rel=\"stylesheet\" />

<!-- Splidejs CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css\" />

<!-- Swiper Slider CSS-->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
<!-- Swiper JS -->
<script src=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js\"></script>
<!-- Splidejs JS -->
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js\"></script>

<style>
  @media screen and (max-width: 650px) {
    .desk-banner {
      display: none !important;
    }

    .mob-banner {
      display: inline !important;
    }
  }

  @media screen and (min-width: 651px) {
    .desk-banner {
      display: inline !important;
    }

    .mob-banner {
      display: none !important;
    }
  }

  .separation {
    margin-top: 100px;
  }

  .holder:hover .btn {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: Black;
    margin-top: -150px;
    font-size: 20px;
    font-weight: bold;
    pointer-events: none;
  }

  .containers:hover>.button {
    display: block;
  }

  .product_name {
    font-size: 12px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-top: 10px;
  }

  .product-card .price-new {
    font-weight: 600;
    color: darkred;
    font-size: 16px;
  }

  .product-card .price-old {
    color: #999;
    text-decoration: line-through;
    margin-left: 10px;
  }

  /* Service-Categories */
  .service-categories .line {
    display: block;
    background-color: #a5abb7;
    height: 2px;
    width: 100%;
    font-size: 24px;
  }

  .service-categories .heading .col p {
    font-size: 18px !important;
  }

  @media screen and (max-width: 768px) {
    .service-categories .heading .col p {
      font-size: 13px !important;
    }
  }

  .service-categories .our-serv {
    margin-top: 30px;
    margin-bottom: 45px;
  }

  .service-categories .our-serv .serv {
    flex-basis: 19%;
    padding: 3px;
    border-radius: 5px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
    border: 1px solid #ddd;
  }

  .service-categories .our-serv .serv img {
    max-width: 100%;
  }

  .service-categories .our-serv .serv .serv-name {
    margin-left: 1px;
    font-weight: 700 !important;
    padding: 5px;
  }

  .service-categories .our-serv .serv .book-now-btns {
    /* padding-top: 8px; */
    padding: 6px 8px 5px 5px;
    border-top: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
  }

  .service-categories .our-serv .serv .book-now-btns p {
    margin-bottom: 0px !important;
  }

  .service-categories .our-serv .serv .book-now-btns p span {
    font-weight: 800;
  }

  .service-categories .our-serv .serv .book-now-btns .book-btn {
    background-color: #1677bc;
    padding: 2px 4px;
    border-radius: 3px;
    color: #fff;
    font-size: 14px !important;
  }

  .book-btn {
    background-color: #1677bc;
    padding: 2px 4px;
    border-radius: 3px;
    color: #fff;
    font-size: 14px !important;
  }

  .service-categories .servi-wrap {
    margin-bottom: 30px;
  }

  .service-categories .servi {
    padding: 14px 4px;
    text-align: center;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 10%) !important;
    transition: transform 300ms ease-in-out;
  }

  .service-categories .servi img {
    max-width: 72px;
    margin: auto;
  }

  .service-categories .servi p {
    font-size: 12px !important;
    padding: 4px 0 0;
  }

  .service-categories .servi:hover {
    transform: scale(1.1);
    box-shadow: 0 0.2rem 0.9rem rgb(0 0 0 / 10%) !important;
  }

  .none {
    display: none !important;
  }

  .show {
    display: flex !important;
  }

  .popup {
    box-sizing: border-box;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 99999;
    background-color: rgba(0, 0, 0, 0.1);
    animation: showUp 500ms ease-in-out forwards;
    justify-content: center;
    align-items: center;
    /* pointer-events: none; */
  }

  .popup_content {
    background-color: #fff;
    border-radius: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 65%;
  }

  .fade {
    animation: fadeUp 500ms ease-in-out forwards;
  }

  @keyframes showUp {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeUp {
    from {
      opacity: 1;
    }

    to {
      opacity: 0;
    }
  }

  #laterPopup {
    cursor: pointer;
    color: #1677bc !important;
  }

  .close-btn {
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  .close-btn i {
    color: black;
    font-size: 30px;
    cursor: pointer;
  }

  .popup_image img {
    width: 250px;
  }

  @media screen and (max-width: 764px) {
    .topc {
      text-align: center;
    }

    .popup_image {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .popup_image img {
      width: 120px;
    }
  }

  @media screen and (max-width: 576px) {
    .popup_content {
      margin-left: 20px;
      margin-right: 20px;
    }
  }
</style>
<section class=\"popup none\" id=\"popup\">
  <div class=\"container popup_content\">
    <div class=\"close-btn\">
      <i class=\"bx bx-x\"></i>
    </div>
    <div class=\"row\">
      <div class=\"col-md-5 col-12 popup_image d-flex justify-content-center align-items-center\">
        <img src=\"https://i.pinimg.com/564x/e5/35/6e/e5356e17c0e5859ca4209dd488f83af4.jpg\" alt=\"RO Image\"
          class=\"img-fluid\" />
      </div>
      <div class=\"col-md-6 col-12 d-flex flex-column align-items-start justify-content-center pop_content\"
        style=\"gap: 50px\">
        <div class=\"topc\">
          <h3>
            Want to Book a visit <br />
            OR <br />
            Enquire about the products
          </h3>
        </div>
        <div class=\"midc\">
          <form action=\"\">
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Add your contact number here and we'll call you back
                soon</label>
              <input type=\"tel\" class=\"form-control\" id=\"phone\" aria-describedby=\"emailHelp\" placeholder=\"Enter Contact\"
                name=\"phone\" />
            </div>
            <div class=\"d-flex justify-content-between align-items-center\">
              <a href=\"index.php?route=information/contact\"><button class=\"book-btn\">Please Call Me</button></a>
              <p id=\"laterPopup\" class=\"form-text text-muted\">Later</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"slider\">
  <div class=\"desk-banner\">
    <div class=\"row new-font\">
      <video style=\"width: 100%\" autoplay muted loop src=\"assets/cover1.mp4\"></video>
    </div>
  </div>

  <div class=\"mob-banner\">
    <div class=\"row\">
      <div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
          
          <div class=\"swiper-slide\">
            <img src=\"assets/img/banner_mob.jpg\" alt=\"\" srcset=\"\" style=\"width: 100%\" />
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>



<section class=\"service-categories separation\">
  <div class=\"container new-font\">
    <div class=\"row align-items-center heading\">
      <div class=\"col\">
        <h2 class=\"text-center\">GET WATER PURIFIER SERVICE IN 2 HOURS</h2>
      </div>
    </div>
    <div class=\"our-serv splide\" aria-label=\"Splide Basic HTML Example\" id=\"serv-slider\">
      <div class=\"splide__track\">
        <ul class=\"splide__list\" style=\"height: auto;\">
          ";
        // line 347
        if (($context["two_hr"] ?? null)) {
            // line 348
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["two_hr"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 349
                echo "          <li class=\"splide__slide\">
            <div class=\"serv\">
              <a href=\"";
                // line 351
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 351);
                echo "\">
                <img src=\"";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 352);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 352);
                echo "\" class=\"serv-img\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 352);
                echo "\" />
              </a>
              <p class=\"serv-name\">
                ";
                // line 355
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 355);
                echo "
              </p>
              <div class=\"book-now-btns\">
                ";
                // line 358
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 358)) {
                    // line 359
                    echo "                <p>

                  ";
                    // line 361
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 361)) {
                        // line 362
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 362);
                        echo "
                  ";
                    } else {
                        // line 363
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 363);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 364
$context["product"], "price", [], "any", false, false, false, 364);
                        echo "</span> ";
                    }
                    // line 365
                    echo "                </p>
                ";
                }
                // line 367
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 367);
                echo "\" class=\"book-btn\">Book Now</a>

              </div>

            </div>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "          ";
        }
        // line 375
        echo "
        </ul>
      </div>
    </div>


    <div class=\"row justify-content-around\">

      <div class=\"col-xl-2 col-lg-4 col-6 servi-wrap\">
        <div class=\"servi\">
          <img src=\"assets/img/services_icons/free-install.png\" alt=\"Free Install\" />
          <p>Free Installation</p>
        </div>
      </div>
      <div class=\"col-xl-2 col-lg-4 col-6 servi-wrap\">
        <div class=\"servi\">
          <img src=\"assets/img/services_icons/free-shipping.png\" alt=\"Free Shipping\" />
          <p>Free Shipping</p>
        </div>
      </div>
      <div class=\"col-xl-2 col-lg-4 col-6 servi-wrap\">
        <div class=\"servi\">
          <img src=\"assets/img/services_icons/money-back.png\" alt=\"Money Back\" />
          <p>Money Back Guarantee</p>
        </div>
      </div>
      <div class=\"col-xl-2 col-lg-4 col-6 servi-wrap\">
        <div class=\"servi\">
          <img src=\"assets/img/services_icons/order-tracking.png\" alt=\"Order Tracking\" />
          <p>Online Order Tracking</p>
        </div>
      </div>
      <div class=\"col-xl-2 col-lg-4 col-6 servi-wrap\">
        <div class=\"servi\">
          <img src=\"assets/img/services_icons/service24.png\" alt=\"Service 24\" />
          <p>Service within 24 hour</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class=\"service-categories\"></div>

<section class=\"cares separation\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">Best Selling</h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 427
        if (($context["products"] ?? null)) {
            // line 428
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 429
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 432
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 432);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 433
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 433);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 433);
                echo "\"
                      title=\"";
                // line 434
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 434);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 437
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 437);
                echo "\">
                  <h6 class=\"product_name\" style=\"color: black\">
                    ";
                // line 439
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 439);
                echo "
                  </h6>
                </a>
                ";
                // line 442
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 442)) {
                    // line 443
                    echo "                <p class=\"price\">
                  ";
                    // line 444
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 444)) {
                        // line 445
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 445);
                        echo "
                  ";
                    } else {
                        // line 447
                        echo "
                  <span style=\"white-space: nowrap\" class=\"price-new\">
                    ";
                        // line 449
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 449);
                        echo "
                  </span><span style=\"text-decoration:none; color: #1677BC\">";
                        // line 450
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 450);
                        echo "% OFF</span>
                  </span>
                  <span style=\"white-space: nowrap\" class=\"price-old\">
                    ";
                        // line 453
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 453);
                        echo "
                  </span>
                  ";
                    }
                    // line 456
                    echo "                </p>
                ";
                }
                // line 458
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 461
            echo "            ";
        }
        // line 462
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"cares separation\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">BUY WATER PURIFIER</h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 477
        if (($context["products"] ?? null)) {
            // line 478
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 479
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 482
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 482);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 483
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 483);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 483);
                echo "\"
                      title=\"";
                // line 484
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 484);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 487
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 487);
                echo "\">
                  <h6 class=\"product_name\" style=\"color: black\">
                    ";
                // line 489
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 489);
                echo "
                  </h6>
                </a>
                ";
                // line 492
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 492)) {
                    // line 493
                    echo "                <p class=\"price\">
                  ";
                    // line 494
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 494)) {
                        // line 495
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 495);
                        echo "
                  ";
                    } else {
                        // line 497
                        echo "
                  <span style=\"white-space: nowrap\" class=\"price-new\">
                    ";
                        // line 499
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 499);
                        echo "
                  </span><span style=\"text-decoration:none; color: #1677BC\">";
                        // line 500
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 500);
                        echo "% OFF</span>
                  </span>
                  <span style=\"white-space: nowrap\" class=\"price-old\">
                    ";
                        // line 503
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 503);
                        echo "
                  </span>
                  ";
                    }
                    // line 506
                    echo "                </p>
                ";
                }
                // line 508
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "            ";
        }
        // line 512
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>




<section class=\"cares separation\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse align-items-center\">
      <div class=\"col-12 col-sm-6 col-push-12\">
        <h2>Switch To A healthy Life</h2>
        <br />
        <p>
          Healthysips offers complete service for any brand uv water
          purifier/RO. We take complete 1 year AMC for UV purifier, Under this
          maintenance contract we take care of servicing, repair and replacement
          of spare parts if required. Contact us for best and reliable
          maintenance and repair service for your uv water purifier.
        </p>
      </div>
      <div class=\"col-12 col-sm-6 col-pull-12\">
        <img src=\"assets/abbanners.png\" alt=\"\" class=\"img-fluid\" />
      </div>
    </div>
  </div>
</section>
<section style=\"margin: 20px 0\">
  <div class=\"container\"></div>

  <div></div>
</section>

<section>
  <img src=\"assets/banner.jpeg\" alt=\"\" class=\"img-fluid\" />
</section>

<!-- ----------------------------------------BEST_SELLER_SECTION-END---------------------------------------------- -->

<script>
  function showPopup() {
    const popup = document.getElementById(\"popup\");
    popup.classList.remove(\"none\");
    popup.classList.add(\"show\");
  }

  function closePopup() {
    const popup = document.getElementById(\"popup\");
    popup.classList.remove(\"show\");
    popup.classList.add(\"fade\");
    popup.classList.add(\"none\");
  }

  window.onload = function () {
    if (sessionStorage.getItem(\"popState\") !== \"shown\") {
      setTimeout(() => {
        showPopup();
      }, 5000);
      sessionStorage.setItem(\"popState\", \"shown\");
    }
  };

  function closingCode() {
    if (sessionStorage.getItem(\"popState\")) {
      sessionStorage.removeItem(\"popItem\");
    }
  }

  window.onbeforeunload = closingCode;

  document.getElementById(\"laterPopup\").addEventListener(\"click\", closePopup);

  document.querySelector(\".close-btn\").addEventListener(\"click\", closePopup);

  document.addEventListener(\"click\", (e) => {
    const Pop = document.getElementById(\"popup\");
    if (e.target.classList.contains(\"popup\")) {
      closePopup();
    }
  });

  // Swiper Slider

  var swiper = new Swiper(\".mySwiper\", {
    pagination: {
      el: \".swiper-pagination\",
      clickable: true,
    },
    autoplay: true,
  });

  var swiper = new Swiper(\".topSwiper\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true,
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\",
    },
    autoplay: true,
    // Default parameters
    slidesPerView: 2,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });

  var splider = new Splide(\"#serv-slider\", {
    type: \"slide\",
    pagination: false,
    perPage: 5,
    gap: \"15px\",
    breakpoints: {
      992: {
        perPage: 4,
      },
      768: {
        perPage: 3,
      },
      552: {
        perPage: 2,
      },
    },
  }).mount();

  var serviSlider = new Splide(\"#servi-slider\", {
    type: \"slide\",
    pagination: false,
    perPage: 6,
    gap: \"15px\",
  }).mount();
</script>

";
        // line 666
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 666,  705 => 512,  702 => 511,  694 => 508,  690 => 506,  684 => 503,  678 => 500,  674 => 499,  670 => 497,  664 => 495,  662 => 494,  659 => 493,  657 => 492,  651 => 489,  646 => 487,  640 => 484,  634 => 483,  630 => 482,  625 => 479,  620 => 478,  618 => 477,  601 => 462,  598 => 461,  590 => 458,  586 => 456,  580 => 453,  574 => 450,  570 => 449,  566 => 447,  560 => 445,  558 => 444,  555 => 443,  553 => 442,  547 => 439,  542 => 437,  536 => 434,  530 => 433,  526 => 432,  521 => 429,  516 => 428,  514 => 427,  460 => 375,  457 => 374,  443 => 367,  439 => 365,  435 => 364,  431 => 363,  425 => 362,  423 => 361,  419 => 359,  417 => 358,  411 => 355,  401 => 352,  397 => 351,  393 => 349,  388 => 348,  386 => 347,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}

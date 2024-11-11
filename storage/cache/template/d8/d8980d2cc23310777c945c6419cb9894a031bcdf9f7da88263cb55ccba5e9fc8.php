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

/* default/template/common/header.twig */
class __TwigTemplate_9bfce451846252968a243fb3054d5c4fc995339b631cb1b511cb85c6c48a9c9c extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
  <!--<![endif]-->

  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 13
        echo ($context["title"] ?? null);
        echo "</title>
    <base href=\"";
        // line 14
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 15
        if (($context["description"] ?? null)) {
            // line 16
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 17
        echo " ";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 20
        echo "    <!-- Bootstrap CSS -->
    <!-- google fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
    <!-- Pe-icon-7-stroke CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\" />
    <!-- Font-awesome CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\" />
    <!-- Slick slider css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/plugins/slick-theme.css\" />

    <!-- animate css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/animate.css\" />
    <!-- Nice Select css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\" />
    <!-- jquery UI css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\" />
    <!-- main style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css?v1.1\" />

    <!-- jQuery JS -->
    <script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
    <script src=\"assets/js/plugins/slick.min.js\"></script>

    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 53
            echo "    <link
      href=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 54);
            echo "\"
      type=\"text/css\"
      rel=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 56);
            echo "\"
      media=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 57);
            echo "\"
    />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 60
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    <script
      src=\"catalog/view/javascript/common.js\"
      type=\"text/javascript\"
    ></script>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 67
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 67);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 67);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 69
            echo "    ";
            echo             // line 70
$context["analytic"];
            // line 71
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
    <style>
      .navbar-header {
        display: none;
      }

      @media (min-width: 600px) {
        .navbar-header {
          display: none;
        }
      }

      .btn-primary {
        color: #ffffff;
        text-shadow: 0 -1px 0 rgb(0 0 0 / 25%);
        background-color: #229ac8;
        background-image: linear-gradient(to bottom, #23a1d1, #1f90bb);
        background-repeat: repeat-x;
        border-color: #1f90bb #1f90bb #145e7a;
      }

      .btn {
        padding: 7.5px 12px;
        font-size: 12px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        box-shadow: inset 0 1px 0 rgb(255 255 255 / 20%),
          0 1px 2px rgb(0 0 0 / 5%);
      }

      .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
      }

      .btn-primary:hover {
        color: #fff;
        background-color: #1f90bb !important;
        border-color: #1f90bb !important;
      }

      .navbar-collapse.collapse {
        display: flex !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important;
        justify-content: center;
      }

      @media (min-width: 768px) {
        .navbar-collapse {
          width: auto;
          border-top: 0;
          -webkit-box-shadow: none;
          box-shadow: none;
        }

        .navbar-nav {
          float: left;
          margin: 0;
        }
      }

      .navbar-collapse {
        padding-right: 15px;
        padding-left: 15px;
        overflow-x: visible;
        -webkit-overflow-scrolling: touch;
        border-top: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 10%);
        box-shadow: inset 0 1px 0 rgb(255 255 255 / 10%);
      }

      .navbar-nav {
        margin: 7.5px -15px;
      }

      .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
        display: -webkit-inline-box;
      }

      ol,
      ul {
        margin-top: 0;
        margin-bottom: 10px;
      }
    </style>
    <style>
      .none {
        display: none !important;
      }

      .show {
        display: flex !important;
      }
      .logo a img {
        width: 90px;
        margin-bottom: 10px;
      }

      .divider {
        margin: 10px 0px 0px 0px;
        position: absolute;
        left: 0px;

        width: 100%;
      }

      .desktop-menu {
        padding-top: 10px;
      }

      .is-sticky .desktop-menu {
        padding-top: 0px;
      }

      @font-face {
        font-family: \"newfont\";
        src: url(\"assets/fonts/New-font/brandon_med-webfont.woff\");
      }

      body,
      h1,
      h2,
      h3,
      h6 p,
      a {
        font-family: \"Poppins\", sans-serif !important;
      }

      .minicart-inner.show {
        z-index: 999999999999999;
      }

      .posters {
        width: 100%;
      }

      .top-strip {
        text-align: center;
        background: #1677bc;
        color: #fff;
        font-size: 12px;
        margin-top: -2px;
        margin-bottom: 0px;
        width: 100%;
      }

      .top-strip p {
        font-size: 12px;
      }

      .sticky.is-sticky {
        background-color: #e3eef9;
      }

      .nav-book-btn {
        background-color: #1677bc;
        padding: 2px 4px;
        border-radius: 3px;
        color: #fff !important;
        font-size: 14px !important;
        align-self: center;
        margin-left: 50px !important;
      }
    </style>
  </head>
  <script
    async
    src=\"https://www.googletagmanager.com/gtag/js?id=G-GJDFL166FZ\"
  ></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag(\"js\", new Date());

    gtag(\"config\", \"G-GJDFL166FZ\");
  </script>

  <body>
    <!-- Start Header Area -->
    <header style=\"border-bottom: thin solid #f1f1f1\" class=\"header-area\">
      <div class=\"top-strip\">
        <p>
          Shop Now and Get Flat 10% Off on all Orders! &nbsp;&nbsp;&nbsp;
          healthysip01@gmail.com &nbsp;&nbsp;&nbsp; +91 88755 22522
        </p>
      </div>
      <!-- main header start -->
      <div class=\"main-header d-none d-lg-block\">
        <!-- header middle area start -->
        <div class=\"header-main-area\">
          <div class=\"row align-items-center ptb-10\">
            <!-- start logo area -->
            <div class=\"col-lg-12 d-flex\">
              <div class=\"logo text-center\">
                ";
        // line 275
        if (($context["logo"] ?? null)) {
            // line 276
            echo "                <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
                  <img
                    src=\"";
            // line 278
            echo ($context["logo"] ?? null);
            echo "\"
                    title=\"";
            // line 279
            echo ($context["name"] ?? null);
            echo "\"
                    alt=\"";
            // line 280
            echo ($context["name"] ?? null);
            echo "\"
                    class=\"img-responsive\"
                  /> </a
                >";
        } else {
            // line 284
            echo "                <h1>
                  <a href=\"";
            // line 285
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
                </h1>
                ";
        }
        // line 288
        echo "              </div>
              <div class=\"row\">
                <!-- main menu area start -->
                <div class=\"col-12\">
                  <div class=\"main-menu-area sticky new-font\">
                    <div class=\"main-menu\">
                      <!-- main menu navbar start -->
                      <!-- main menu navbar start -->
                      <nav class=\"desktop-menu\">
                        <ul
                          style=\"margin-top: 10px\"
                          class=\"justify-content-center header-style-4\"
                        >
                          <style>
                            .sticky-logo {
                              display: none;
                            }

                            .is-sticky .sticky-logo {
                              display: inline;
                            }
                          </style>
                          <li>
                            <img
                              src=\"";
        // line 312
        echo ($context["logo"] ?? null);
        echo "\"
                              title=\"";
        // line 313
        echo ($context["name"] ?? null);
        echo "\"
                              alt=\"";
        // line 314
        echo ($context["name"] ?? null);
        echo "\"
                              class=\"sticky-logo\"
                              style=\"width: 40px\"
                            />
                          </li>
                          ";
        // line 319
        echo         // line 320
($context["menu"] ?? null);
        // line 321
        echo "
                          <li style=\"display:none\">
                            <a
                              style=\"font-family: newfont\"
                              href=\"index.php?route=information/Ionizer\"
                            >
                              Water Ionizer
                            </a>
                          </li>
                          <li style=\"display:none\">
                            <a
                              style=\"font-family: newfont\"
                              href=\"index.php?route=information/Kangen\"
                            >
                              Kangen Water
                            </a>
                          </li>
                          <li>
                            <a
                              style=\"font-family: newfont\"
                              href=\"index.php?route=information/Query\"
                            >
                              Query
                            </a>
                          </li>

                          <a
                            type=\"button\"
                            class=\"nav-book-btn\"
                            href=\"index.php?route=information/contact\"
                            >Book Now</a
                          >
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <!-- main menu area end -->
              </div>
            </div>

            <!-- start logo area -->

            <!-- mini cart area start -->
            <div style=\"position: absolute; right: 20px; top: 20px\">
              <div
                class=\"header-right d-flex align-items-center justify-content-end\"
              >
                <div class=\"header-configure-area\">
                  <ul style=\"margin-top: 25px\" class=\"nav justify-content-end\">
                    <li class=\"header-search-container mr-0\">
                      <button class=\"search-trigger d-block\">
                        <i class=\"pe-7s-search\"></i>
                      </button>
                      <div class=\"header-search-box d-none animated fadeInLeft\">
                        <input
                          type=\"text\"
                          id=\"search_top\"
                          placeholder=\"Search\"
                          class=\"header-search-field\"
                        />
                        <button class=\"search_icon_top header-search-btn\">
                          <i class=\"pe-7s-search\"></i>
                        </button>
                      </div>
                    </li>
                    <li class=\"user-hover\">
                      <a href=\"#\">
                        <i class=\"pe-7s-user\"></i>
                      </a>
                      <ul class=\"dropdown-list new-font\">
                        ";
        // line 392
        if (($context["logged"] ?? null)) {
            // line 393
            echo "                        <li>
                          <a href=\"";
            // line 394
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 397
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 400
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 403
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 406
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                        </li>
                        ";
        } else {
            // line 409
            echo "                        <li>
                          <a href=\"";
            // line 410
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 413
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
                        </li>
                        ";
        }
        // line 416
        echo "                      </ul>
                    </li>
                    <li>
                      <a
                        href=\"";
        // line 420
        echo ($context["wishlist"] ?? null);
        echo "\"
                        id=\"wishlist-total\"
                        title=\"";
        // line 422
        echo ($context["text_wishlist"] ?? null);
        echo "\"
                      >
                        <i class=\"pe-7s-like\"></i>
                      </a>
                    </li>
                    <li>
                      <a
                        href=\"";
        // line 429
        echo ($context["shopping_cart"] ?? null);
        echo "\"
                        title=\"";
        // line 430
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"
                        class=\"minicart-btn\"
                      >
                        <i class=\"pe-7s-shopbag\"></i>
                        <div id=\"cart_count\" class=\"notification\">
                          ";
        // line 435
        echo ($context["text_items"] ?? null);
        echo "
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- mini cart area end -->
          </div>
        </div>
        <!-- header middle area end -->
      </div>
      <!-- main header start -->

      <!-- mobile header start -->
      <!-- mobile header start -->
      <div
        style=\"padding: 0px\"
        class=\"mobile-header d-lg-none d-md-block sticky\"
      >
        <!--mobile header top start -->

        <div class=\"row align-items-center\">
          <div class=\"col-12\">
            <div class=\"mobile-main-header\">
              <div class=\"mobile-logo\">
                ";
        // line 462
        if (($context["logo"] ?? null)) {
            // line 463
            echo "
                <a href=\"";
            // line 464
            echo ($context["home"] ?? null);
            echo "\">
                  <img
                    src=\"";
            // line 466
            echo ($context["logo"] ?? null);
            echo "\"
                    title=\"";
            // line 467
            echo ($context["name"] ?? null);
            echo "\"
                    alt=\"";
            // line 468
            echo ($context["name"] ?? null);
            echo "\"
                    class=\"img-responsive\"
                    style=\"max-width: 45%\"
                  />
                </a>
                ";
        }
        // line 474
        echo "              </div>
              <div class=\"mobile-menu-toggler\">
                <div class=\"mini-cart-wrap\">
                  <a
                    href=\"";
        // line 478
        echo ($context["shopping_cart"] ?? null);
        echo "\"
                    title=\"";
        // line 479
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"
                    class=\"minicart-btn\"
                  >
                    <i class=\"pe-7s-shopbag\"></i>
                    <div class=\"notification\">0</div>
                  </a>
                </div>
                <button class=\"mobile-menu-btn\">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- mobile header top start -->
      </div>
      <!-- mobile header end -->
      <!-- mobile header end -->

      <!-- offcanvas mobile menu start -->
      <!-- off-canvas menu start -->
      <aside class=\"off-canvas-wrapper\">
        <div class=\"off-canvas-overlay\"></div>
        <div class=\"off-canvas-inner-content\">
          <div class=\"btn-close-off-canvas\">
            <i class=\"pe-7s-close\"></i>
          </div>

          <div class=\"off-canvas-inner\">
            <!-- search box start -->
            <div class=\"search-box-offcanvas\">
              <input
                type=\"text\"
                id=\"search_top1\"
                placeholder=\"Search\"
                class=\"header-search-field\"
              />
            </div>
            <!-- search box end -->

            <!-- mobile menu start -->
            <div class=\"mobile-navigation\">
              <!-- mobile menu navigation start -->
              <nav>
                <ul class=\"mobile-menu\">
                  <li>
                    <a
                      href=\"index.php?route=common/home\"
                      class=\"new-font\"
                      style=\"text-transform: uppercase\"
                      >Home</a
                    >
                  </li>

                  ";
        // line 536
        echo         // line 537
($context["menu"] ?? null);
        // line 538
        echo "
                  <li style=\"display:none\">
                    <a
                      style=\"font-family: newfont\"
                      href=\"index.php?route=information/Kangen\"
                    >
                      Kangen Water
                    </a>
                  </li>
                  <li>
                    <a
                      style=\"font-family: newfont\"
                      href=\"index.php?route=information/Query\"
                    >
                      Query
                    </a>
                  </li>
                  <li>
                    <a href=\"index.php?route=information/contact\">Contact</a>
                  </li>
                </ul>
              </nav>
              <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->

            <div class=\"mobile-settings\">
              <ul class=\"nav\">
                <li>
                  <div class=\"dropdown mobile-top-dropdown\">
                    <a
                      href=\"#\"
                      class=\"dropdown-toggle\"
                      id=\"currency\"
                      data-toggle=\"dropdown\"
                      aria-haspopup=\"true\"
                      aria-expanded=\"false\"
                    >
                      Currency
                      <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"currency\">
                      ";
        // line 580
        echo ($context["currency"] ?? null);
        echo "
                    </div>
                  </div>
                </li>
                <li>
                  <div class=\"dropdown mobile-top-dropdown\">
                    <a
                      href=\"#\"
                      class=\"dropdown-toggle\"
                      id=\"myaccount\"
                      data-toggle=\"dropdown\"
                      aria-haspopup=\"true\"
                      aria-expanded=\"false\"
                    >
                      My Account
                      <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"myaccount\">
                      ";
        // line 598
        if (($context["logged"] ?? null)) {
            // line 599
            echo "                      <li>
                        <a href=\"";
            // line 600
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                      </li>
                      <li>
                        <a href=\"";
            // line 603
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                      </li>
                      <li>
                        <a href=\"";
            // line 606
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a>
                      </li>
                      <li>
                        <a href=\"";
            // line 609
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a>
                      </li>
                      <li>
                        <a href=\"";
            // line 612
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                      </li>
                      ";
        } else {
            // line 615
            echo "                      <li>
                        <a href=\"";
            // line 616
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                      </li>
                      <li>
                        <a href=\"";
            // line 619
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
                      </li>
                      ";
        }
        // line 622
        echo "                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <!-- offcanvas widget area start -->
            <div class=\"offcanvas-widget-area\">
              <div class=\"off-canvas-contact-widget\">
                <ul>
                  <li>
                    <i class=\"fa fa-mobile\"></i>
                    <a href=\"#\">0123456789</a>
                  </li>
                  <li>
                    <i class=\"fa fa-envelope-o\"></i>
                    <a href=\"#\">Info@.co.in</a>
                  </li>
                </ul>
              </div>
              <div class=\"off-canvas-social-widget\">
                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
              </div>
            </div>
            <!-- offcanvas widget area end -->
          </div>
        </div>
      </aside>

      <!-- off-canvas menu end -->
      <!-- offcanvas mobile menu end -->
    </header>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  913 => 622,  905 => 619,  897 => 616,  894 => 615,  886 => 612,  878 => 609,  870 => 606,  862 => 603,  854 => 600,  851 => 599,  849 => 598,  828 => 580,  784 => 538,  782 => 537,  781 => 536,  721 => 479,  717 => 478,  711 => 474,  702 => 468,  698 => 467,  694 => 466,  689 => 464,  686 => 463,  684 => 462,  654 => 435,  646 => 430,  642 => 429,  632 => 422,  627 => 420,  621 => 416,  613 => 413,  605 => 410,  602 => 409,  594 => 406,  586 => 403,  578 => 400,  570 => 397,  562 => 394,  559 => 393,  557 => 392,  484 => 321,  482 => 320,  481 => 319,  473 => 314,  469 => 313,  465 => 312,  439 => 288,  431 => 285,  428 => 284,  421 => 280,  417 => 279,  413 => 278,  407 => 276,  405 => 275,  201 => 73,  194 => 71,  192 => 70,  190 => 69,  185 => 68,  174 => 67,  170 => 66,  164 => 62,  155 => 60,  150 => 59,  141 => 57,  137 => 56,  132 => 54,  129 => 53,  125 => 52,  91 => 20,  85 => 18,  82 => 17,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}

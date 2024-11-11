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

/* default/template/product/category.twig */
class __TwigTemplate_35aea563958a1bd585a4b073b629038958743630e22ae8961e5a83651a939af1 extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
<style>
  @media screen and (max-width:750px) {
    .container {
      padding: 0px;
    }

    .breadcrumb-area {
      display: none;
    }
  }
</style>
<style>
  .product-thumb .price-new {
    font-weight: 600;
    color: darkred;
    font-size: 16px;
  }

  .product-thumb .price-old {
    color: #999;
    text-decoration: line-through;
    margin-left: 10px;
  }

  .flair-badge:after {
    content: \"\";
    position: absolute;
    top: 10px;
    left: 0;
    float: left;
    width: 4px;
    height: 4px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    background: #fff;
    -moz-box-shadow: -1px -1px 2px #f64d84;
    -webkit-box-shadow: -1px -1px 2px #f64d84;
    box-shadow: -1px -1px 2px #f64d84;
  }

  .size-strip {
    width: 100%;
    position: absolute;
    left: 0px;
    border: 0px;
    bottom: 70px;
    text-align: center;
    color: #fff;
    padding: 5px;
  }

  .row {
    margin: 0px;
  }

  .size-strip p {
    float: left;

  }

  .size-list {
    list-style: none;
    margin: 0;
    padding: 0;
    overflow: auto;
    opacity: 0;
  }

  .size-list li {
    display: inline-block;
    letter-spacing: normal;
    margin: 0 2.5px 0;
    background: #fff;
    width: 25px;
    height: 25px;
    color: #333;
    border-radius: 50%;
    text-align: center;
    line-height: 27.5px;

  }

  @media(hover: hover) and (pointer: fine) {
    .foo:hover img:last-child {
      display: inline-block
    }

  }

  .product-thumb:hover .size-list {
    opacity: 1;
  }



  .cate-caption {
    text-align: center;
    margin-top: -60px;
    text-transform: uppercase;
    font-family: 'brandon_grotesquemedium!important';
    color: #fff;
    letter-spacing: 1px;
  }

  .cate-caption {
    font-size: 42px;
    text-transform: uppercase;
    position: absolute;
    width: 100%;
    margin-top: -210px;
  }

  .sold-out {
    font-size: 12px;
  }

  @media screen and (max-width:750px) {
    .sold-out {
      font-size: 10px;
    }

    .cate-wrapper {
      margin-top: 100px;
    }

    .cate-caption {
      font-size: 18px;
      text-transform: uppercase;
      position: absolute;
      width: 100%;
      margin-top: -115px;
      font-family: 'brandon_grotesquemedium!important';
    }



    .size-strip {
      display: none !important;
    }
  }

  .product_name {
    font-size: 18px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-top: 10px;
  }

  .foo img:last-child {
    display: none
  }

  .foo:hover img:first-child,
  .foo:active img:first-child,
  .foo:focus img:first-child {
    display: none
  }

  .foo:hover img:last-child,
  .foo:active img:last-child,
  .foo:focus img:last-child {
    display: inline-block
  }

  @media only screen and (max-width: 600px) {

    .product_name {
      font-size: 10px;
      margin-top: 10px;
    }

    .price-new {
      font-size: 10px !important;
    }

    .price-old {
      font-size: 8px;
    }
  }

  aside {
    max-width: 100% !important;
    background-color: #F9F9F9;
    padding: 20px 10px;
  }

  .catalog-category-view {
    width: 100%;
    text-align: center;
    background-image: url(cat-bcg-pattern.png);
    background-color: #fcfcfc;
    padding: 0px
  }

  body {
    background-color: #fff;
  }
</style>





<div style=\"padding: 0px; \" class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div class=\"breadcrumb-wrap\">
        <nav aria-label=\"breadcrumb\">
          <ul class=\"breadcrumb\">
            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 216
            echo "
            <li class=\"breadcrumb-item\"><a href=\"";
            // line 217
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 217);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 217);
            echo "</a></li>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "
             
          </ul>
        </nav>
        ";
        // line 224
        if (($context["products"] ?? null)) {
            // line 225
            echo "        <div style=\"max-width: 350px;float:right; margin-top:-25px \" class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\" style=\"margin-right:10px;font-size:16px;\">";
            // line 226
            echo ($context["text_limit"] ?? null);
            echo "</label>
          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\" style=\"margin-right: 10px;\">
            ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 229
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 229) == ($context["limit"] ?? null))) {
                    // line 230
                    echo "                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 230);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 230);
                    echo "</option>
                ";
                } else {
                    // line 232
                    echo "                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 232);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 232);
                    echo "</option>
                ";
                }
                // line 234
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "          </select>
          <a class=\"filter\" style=\"cursor:pointer\">
            <li class=\"fa fa-filter\"></li> Filters &nbsp;
          </a>

          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 242
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 242) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 243
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 243);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 243);
                    echo "</option>
            ";
                } else {
                    // line 245
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 245);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 245);
                    echo "</option>
            ";
                }
                // line 247
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "          </select>

        </div>
      </div>
    </div>

  </div>

 


<div class=\"row\">
  ";
            // line 260
            if (($context["column_left"] ?? null)) {
                // line 261
                echo "  <div class=\"col-3\">";
                echo ($context["column_left"] ?? null);
                echo "</div>
  <div class=\"col-9\"> <div class=\"row\">
    
    ";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 265
                    echo "    
    <div style=\"margin-bottom:20px\" id=\"product_box\" class=\"product-layout product-grid col-md-3 col-8 text-center\">
      <div class=\"product-thumb\">
        <div class=\"image\">
          <a onclick=\"\" href=\"";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 269);
                    echo "\">
            <img onclick=\"\" style=\"z-index:99999999\" src=\"";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 270);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 270);
                    echo "\"
              title=\"";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 271);
                    echo "\" class=\"img-responsive pthumb\" />
          </a>

        </div>
        <div>


          <div class=\"caption\">
            <a onclick=\"\" href=\"";
                    // line 279
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 279);
                    echo "\">
              <h2 class=\"product_name\" style=\"color:black;\">";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 280);
                    echo "</h2>
            </a>
            ";
                    // line 282
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 282)) {
                        // line 283
                        echo "            <p class=\"price\">
              ";
                        // line 284
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 284)) {
                            // line 285
                            echo "              ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 285);
                            echo "
              ";
                        } else {
                            // line 287
                            echo "

              <span style=\"white-space:nowrap\" class=\"price-new\">";
                            // line 289
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 289);
                            echo "&nbsp;<span
                  style=\"text-decoration:none; color: #1677BC\">";
                            // line 290
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 290);
                            echo "% OFF</span> </span>
              <span style=\"white-space:nowrap\" class=\"price-old\">";
                            // line 291
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 291);
                            echo "</span>
              ";
                        }
                        // line 293
                        echo "            </p>
            ";
                    }
                    // line 295
                    echo "          </div>

          ";
                    // line 300
                    echo "        </div>
      </div>
    </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                echo "  </div>
  ";
            } else {
                // line 306
                echo "  <div class=\"col-9\"> <div class=\"row\">
    
    ";
                // line 308
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 309
                    echo "    
    <div style=\"margin-bottom:20px\" id=\"product_box\" class=\"product-layout product-grid col-md-3 col-8 text-center\">
      <div class=\"product-thumb\">
        <div class=\"image\">
          <a onclick=\"\" href=\"";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 313);
                    echo "\">
            <img onclick=\"\" style=\"z-index:99999999\" src=\"";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 314);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314);
                    echo "\"
              title=\"";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 315);
                    echo "\" class=\"img-responsive pthumb\" />
          </a>

        </div>
        <div>


          <div class=\"caption\">
            <a onclick=\"\" href=\"";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 323);
                    echo "\">
              <h2 class=\"product_name\" style=\"color:black;\">";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 324);
                    echo "</h2>
            </a>
            ";
                    // line 326
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 326)) {
                        // line 327
                        echo "            <p class=\"price\">
              ";
                        // line 328
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 328)) {
                            // line 329
                            echo "              ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 329);
                            echo "
              ";
                        } else {
                            // line 331
                            echo "

              <span style=\"white-space:nowrap\" class=\"price-new\">";
                            // line 333
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 333);
                            echo "&nbsp;<span
                  style=\"text-decoration:none; color: #1677BC\">";
                            // line 334
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 334);
                            echo "% OFF</span> </span>
              <span style=\"white-space:nowrap\" class=\"price-old\">";
                            // line 335
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 335);
                            echo "</span>
              ";
                        }
                        // line 337
                        echo "            </p>
            ";
                    }
                    // line 339
                    echo "          </div>

          ";
                    // line 344
                    echo "        </div>
      </div>
    </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "  </div>
  ";
            }
            // line 350
            echo "  </div>
 
</div>
 


</div>
";
        }
        // line 358
        echo "

<script>
  \$(\".filter\").click(function () {
    \$(\".filter-opener\").slideToggle();
  })

  \$(\".filter-open\").click(function () {

    \$(\".filter-slider\").animate({
      'left': 0
    })
    \$(\".overlay\").fadeIn();
  })

  \$(\".overlay\").click(function () {
    \$(\".filter-slider\").animate({
      'left': -250
    })
    \$(\".overlay\").fadeOut();
  })
  \$(document).ready(function (e) {
    \$('.pagination li').each(function () {
      if (\$(this).text() == '>' || \$(this).text() == '<' || \$(this).text() == '>|' || \$(this).text() ==
        '|<') {
        \$(this).css('display', 'none');
      }
    });
    var start_point = 6;
    var chunk = 6;
    var product_data = ";
        // line 388
        echo ($context["product"] ?? null);
        echo ";
    var imgss = <? php print_r(json_encode(\$images)); ?>;



    \$(window).scroll(function () {
      if (\$('#reached').offset().top < \$(this).height() + \$(this).scrollTop()) {
        var i;
        console.log(start_point);
        if (start_point < product_data.length) {
          for (i = start_point; i < (start_point + chunk); i++) {
            if (typeof product_data[i] === 'undefined') {
              break;
            } else {
              var p =
                '  <div style=\"margin-bottom:20px\" class=\"product-layout product-grid col-md-3 col-sm-6 col-6 text-center\">';
              p += '<div class=\"product-thumb\">';
              p += ' <div class=\"image\"><a class=\"foo\" href=\"' + product_data[i]['href'] + '\">';
              p += ' <img style=\"z-index:99999999\" src=\"' + product_data[i]['thumb'] + '\" alt=\"' +
                product_data[i]['name'] + '\" title=\"' + product_data[i]['name'] +
                '\" class=\"img-responsive pthumb\" />';
              p += '<img src=\"' + imgss[product_data[i]['product_id']]['popup'] +
                '\" class=\"img-responsive\" /></a>';

              p += '<span class=\"size-strip\"><ul class=\"size-list\">';

              for (j = 0; j < product_data[i]['option'].length; j++) {
                if (product_data[i]['option'][j]['option_id'] == 13) {
                  for (k = 0; k < product_data[i]['option'][j]['product_option_value']
                    .length; k++) {
                    p += '<li>' + product_data[i]['option'][j]['product_option_value'][k][
                      'name'
                    ] + '</li>';
                  }
                }
              }


              p += '</ul></span></div>';
              p += '<div> <div class=\"caption\"><p class=\"product_name\">' + product_data[i]['name'] +
                '</p>';
              p += '<p class=\"price\">';

              if (!product_data[i]['special']) {
                p += product_data[i]['price'];
              } else {

                p += '<span style=\"white-space:nowrap\" class=\"price-new\">' + product_data[i][
                  'special'
                ] + '</span> <span style=\"white-space:nowrap\" class=\"price-old\">' + product_data[
                i]['price'] + '</span>';
              }
              p += '</p></div>';

              if (product_data[i]['quantity'] == 0) {
                p += '<p class=\"sold-out\">Sold Out</p>';
              }

              p += '</div>';
              \$(\"#product_box\").append(p);
            }

          }
        }

        start_point = start_point + chunk;
      }
    });

  });



  \$('body').on(\"mouseenter\", \".foo\", function () {
    \$(this).find('img').eq(0).css('display', \"none\");
    \$(this).find('img').eq(1).css('display', \"inline-block\");
  })

  \$('body').on(\"mouseleave\", \".foo\", function () {
    \$(this).find('img').eq(1).css('display', \"none\");
    \$(this).find('img').eq(0).css('display', \"inline-block\");
  })
</script>


";
        // line 473
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 473,  607 => 388,  575 => 358,  565 => 350,  561 => 348,  552 => 344,  548 => 339,  544 => 337,  539 => 335,  535 => 334,  531 => 333,  527 => 331,  521 => 329,  519 => 328,  516 => 327,  514 => 326,  509 => 324,  505 => 323,  494 => 315,  488 => 314,  484 => 313,  478 => 309,  474 => 308,  470 => 306,  466 => 304,  457 => 300,  453 => 295,  449 => 293,  444 => 291,  440 => 290,  436 => 289,  432 => 287,  426 => 285,  424 => 284,  421 => 283,  419 => 282,  414 => 280,  410 => 279,  399 => 271,  393 => 270,  389 => 269,  383 => 265,  379 => 264,  372 => 261,  370 => 260,  356 => 248,  350 => 247,  342 => 245,  334 => 243,  331 => 242,  327 => 241,  319 => 235,  313 => 234,  305 => 232,  297 => 230,  294 => 229,  290 => 228,  285 => 226,  282 => 225,  280 => 224,  274 => 220,  263 => 217,  260 => 216,  256 => 215,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}

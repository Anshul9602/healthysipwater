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

/* default/template/common/cart.twig */
class __TwigTemplate_416e7a4c1b16e7e4eae13644e3cf461ae1702277a25684acf661180ad6603260 extends \Twig\Template
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
        echo "  <!-- offcanvas mini cart start -->
  <div class=\"offcanvas-minicart-wrapper\">
    <div class=\"minicart-inner\">
      <div class=\"offcanvas-overlay\"></div>
      <div class=\"minicart-inner-content\">
        <div class=\"minicart-close\">
          <i class=\"pe-7s-close\"></i>

        </div>


        <div class=\"minicart-content-box\">
          <div class=\"minicart-item-wrapper\" id=\"cart\">
            ";
        // line 14
        if (twig_in_filter(($context["product"] ?? null), ($context["products"] ?? null))) {
            // line 15
            echo "              <ul>

                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "                  <li class=\"minicart-item\">
                    <div class=\"minicart-thumb\">
                      <a href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\">
                        <img src=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                    echo "\" alt=\"product\">
                      </a>
                    </div>
                    <div class=\"minicart-content\">
                      <h3 class=\"product-name\">
                        <a href=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                    echo "</a>
                      </h3>
                      ";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 31
                            echo "                          <br />
                          - <small> ";
                            // line 32
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 32);
                            echo ": ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 32);
                            echo "</small>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                          ";
                    }
                    // line 35
                    echo "                      <p>
                        <span class=\"cart-quantity\">";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36);
                    echo " <strong>&times;</strong></span>
                        <span class=\"cart-price\"> ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 37);
                    echo "</span>
                      </p>
                    </div>
                    <button onclick=\"cart.remove('";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 40);
                    echo "');\" class=\"minicart-remove\"><i class=\"pe-7s-close\"></i></button>
                  </li>
                  ";
                }
                // line 43
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                 
              </ul>
               ";
        }
        // line 47
        echo "          </div>

          <div style=\"position: absolute; width:80%; bottom:0px; border:none\" class=\"minicart-pricing-box\">
            <ul> ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 51
            echo "              <li class=\"total\">
                <span> ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 52);
            echo ":</span>
                <span><strong> ";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 53);
            echo "</strong></span>
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
            <hr />
            <div class=\"minicart-button\">
              <a href=\"";
        // line 59
        echo ($context["checkout"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> View Cart & Checkout</a>
            </div>
          </div>
        </div>
   
        <ul>
          <li>Cart Is Empty</li>
        </ul>
      </div>
      <div style=\"position: absolute; width:80%; bottom:120px\" class=\"minicart-pricing-box\">
        <ul>

        </ul>
      </div>
      <div style=\"display: none;\" class=\"minicart-button\">
        <div class=\"minicart-button\">
          <a href=\"";
        // line 75
        echo ($context["checkout"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> View Cart & Checkout</a>
        </div>
      </div>
  
    </div>
  </div>
  </div>
  <!-- offcanvas mini cart end -->";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 75,  171 => 59,  166 => 56,  157 => 53,  153 => 52,  150 => 51,  146 => 50,  141 => 47,  136 => 44,  130 => 43,  124 => 40,  118 => 37,  114 => 36,  111 => 35,  108 => 34,  98 => 32,  95 => 31,  90 => 30,  88 => 29,  81 => 27,  73 => 22,  69 => 21,  65 => 19,  62 => 18,  58 => 17,  54 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}

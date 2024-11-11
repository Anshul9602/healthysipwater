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

/* extension/payment/ccavenue.twig */
class __TwigTemplate_4bd81f42d3210e1b71684a875d5b7fae8cdcdf46d44fdbb3c70b825700b3af62 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
   <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-authorizenet-aim\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  ";
        // line 16
        echo ($context["getkeyform"] ?? null);
        echo "
<div class=\"container-fluid\">  
 ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "   <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "   <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
    </div>
   <div class=\"panel-body\">
      <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-authorizenet-aim\" class=\"form-horizontal\">
\t\t<div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-Merchant_Id\">";
        // line 30
        echo ($context["entry_Merchant_Id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_ccavenue_Merchant_Id\" value=\"";
        // line 32
        echo ($context["payment_ccavenue_Merchant_Id"] ?? null);
        echo "\" id=\"input-Merchant_Id\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_Merchant_Id"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_Merchant_Id"] ?? null);
            echo "</div>
             ";
        }
        // line 36
        echo "            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\"  title=\"";
        // line 40
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_ccavenue_total\" value=\"";
        // line 42
        echo ($context["payment_ccavenue_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
              ";
        // line 43
        if (($context["error_total"] ?? null)) {
            // line 44
            echo "              <div class=\"text-danger\">";
            echo ($context["error_total"] ?? null);
            echo "</div>
              ";
        }
        // line 46
        echo "            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-workingkey\"><span data-toggle=\"tooltip\"  title=\"";
        // line 50
        echo ($context["help_workingkey"] ?? null);
        echo "\">";
        echo ($context["entry_workingkey"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_ccavenue_workingkey\" value=\"";
        // line 52
        echo ($context["payment_ccavenue_workingkey"] ?? null);
        echo "\" id=\"input-workingkey\" class=\"form-control\" />
              ";
        // line 53
        if (($context["error_workingkey"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_workingkey"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-access_code\">";
        // line 60
        echo ($context["entry_access_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_ccavenue_access_code\" value=\"";
        // line 62
        echo ($context["payment_ccavenue_access_code"] ?? null);
        echo "\" id=\"input-access_code\" class=\"form-control\" />
              ";
        // line 63
        if (($context["error_access_code"] ?? null)) {
            // line 64
            echo "              <div class=\"text-danger\">";
            echo ($context["error_access_code"] ?? null);
            echo "</div>
             ";
        }
        // line 66
        echo "            </div>
          </div>
\t\t  
\t\t  
\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-completed_status_id\">";
        // line 71
        echo ($context["entry_completed_status"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <select name=\"payment_ccavenue_completed_status_id\" id=\"input-completed_status_id\" class=\"form-control\">
\t\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 75
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 75) == ($context["payment_ccavenue_completed_status_id"] ?? null))) {
                // line 76
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 76);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 76);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 78
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 78);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 78);
                echo "</option>
\t\t\t\t\t";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-failed_status_id\">";
        // line 86
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_ccavenue_failed_status_id\" id=\"input-failed_status_id\" class=\"form-control\">
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 90
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 90) == ($context["payment_ccavenue_failed_status_id"] ?? null))) {
                // line 91
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 91);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 91);
                echo "</option>
               ";
            } else {
                // line 93
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 93);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 93);
                echo "</option>
               ";
            }
            // line 95
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "              </select>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-pending_status_id\">";
        // line 102
        echo ($context["entry_pending_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> 
              <select name=\"payment_ccavenue_pending_status_id\" id=\"input-pending_status_id\" class=\"form-control\">
                 ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 106
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 106) == ($context["payment_ccavenue_pending_status_id"] ?? null))) {
                // line 107
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 107);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 107);
                echo "</option>
                ";
            } else {
                // line 109
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 109);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 109);
                echo "</option>
                 ";
            }
            // line 111
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "              </select>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-geo_zone_id\">";
        // line 117
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <select name=\"payment_ccavenue_geo_zone_id\" id=\"input-geo_zone_id\" class=\"form-control\">
\t\t\t\t\t<option value=\"0\">";
        // line 120
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
\t\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 122
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 122) == ($context["payment_ccavenue_geo_zone_id"] ?? null))) {
                // line 123
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 123);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 123);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 125
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 125);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 125);
                echo "</option>
\t\t\t\t\t";
            }
            // line 127
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-checkout_method\">";
        // line 133
        echo ($context["entry_checkout_method"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <select name=\"payment_ccavenue_checkout_method\" id=\"input-checkout_method\" class=\"form-control\">
\t\t\t\t\t";
        // line 136
        if ((($context["payment_ccavenue_checkout_method"] ?? null) == "iframe")) {
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<option value=\"iframe\" selected=\"selected\">";
            // line 137
            echo ($context["text_iframe"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"redirect\">";
            // line 138
            echo ($context["text_redirect"] ?? null);
            echo "</option>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t<option value=\"iframe\">";
            echo ($context["text_iframe"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"redirect\" selected=\"selected\">";
            // line 141
            echo ($context["text_redirect"] ?? null);
            echo "</option>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t ";
        }
        // line 143
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 148
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">\t
\t\t\t\t  <select name=\"payment_ccavenue_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t";
        // line 151
        if (($context["payment_ccavenue_status"] ?? null)) {
            // line 152
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 153
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 155
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 156
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort_order\">";
        // line 163
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_ccavenue_sort_order\" value=\"";
        // line 165
        echo ($context["payment_ccavenue_sort_order"] ?? null);
        echo "\" id=\"input-sort_order\" class=\"form-control\" />
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
";
        // line 173
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/ccavenue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 173,  457 => 165,  452 => 163,  445 => 158,  440 => 156,  435 => 155,  430 => 153,  425 => 152,  423 => 151,  417 => 148,  410 => 143,  405 => 141,  400 => 140,  395 => 138,  391 => 137,  387 => 136,  381 => 133,  374 => 128,  368 => 127,  360 => 125,  352 => 123,  349 => 122,  345 => 121,  341 => 120,  335 => 117,  328 => 112,  322 => 111,  314 => 109,  306 => 107,  303 => 106,  299 => 105,  293 => 102,  285 => 96,  279 => 95,  271 => 93,  263 => 91,  260 => 90,  256 => 89,  250 => 86,  243 => 81,  237 => 80,  229 => 78,  221 => 76,  218 => 75,  214 => 74,  208 => 71,  201 => 66,  195 => 64,  193 => 63,  189 => 62,  184 => 60,  178 => 56,  172 => 54,  170 => 53,  166 => 52,  159 => 50,  153 => 46,  147 => 44,  145 => 43,  141 => 42,  134 => 40,  128 => 36,  122 => 34,  120 => 33,  116 => 32,  111 => 30,  106 => 28,  100 => 25,  96 => 23,  88 => 19,  86 => 18,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/ccavenue.twig", "");
    }
}

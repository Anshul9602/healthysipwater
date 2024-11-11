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

/* default/template/extension/module/filter.twig */
class __TwigTemplate_defdc5a7f53020e9fd058aab09d2a08786ef0af45aa7b1bfd8d19f62467af492 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Filters</div>
  <div class=\"list-group\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 5
            echo "    <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 5);
            echo "</a>
    <div class=\"list-group-item\">
      <div id=\"filter-group";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 7);
            echo "\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 9
                echo "        <div class=\"checkbox\">
          <label
            >";
                // line 11
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 11), ($context["filter_category"] ?? null))) {
                    // line 12
                    echo "            <input
              type=\"checkbox\"
              style=\"cursor: pointer\"
              name=\"filter[]\"
              value=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 16);
                    echo "\"
              checked=\"checked\"
            />
            <span style=\"cursor: pointer\">";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 19);
                    echo "</span>
            ";
                } else {
                    // line 21
                    echo "            <input
              type=\"checkbox\"
              style=\"cursor: pointer\"
              name=\"filter[]\"
              value=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 25);
                    echo "\"
            />
            <span style=\"cursor: pointer\">";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 27);
                    echo "</span>
            ";
                }
                // line 28
                echo "</label
          >
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </div>
  <div class=\"panel-footer text-right\" style=\"display: none\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">
      ";
        // line 38
        echo ($context["button_filter"] ?? null);
        echo "
    </button>
  </div>
</div>

<script type=\"text/javascript\">
  \$(\"label\").click(function () {
    var checkBoxes = \$(this).find(\"input\");
    checkBoxes.prop(\"checked\", !checkBoxes.prop(\"checked\"));
    \$(\"#button-filter\").click();
  });

  \$(\"#button-filter\").on(\"click\", function () {
    filter = [];

    \$(\"input[name^='filter']:checked\").each(function (element) {
      filter.push(this.value);
    });

    location = \"";
        // line 57
        echo ($context["action"] ?? null);
        echo "&filter=\" + filter.join(\",\");
  });
  //
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  121 => 38,  116 => 35,  108 => 32,  99 => 28,  94 => 27,  89 => 25,  83 => 21,  78 => 19,  72 => 16,  66 => 12,  64 => 11,  60 => 9,  56 => 8,  52 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter.twig", "");
    }
}

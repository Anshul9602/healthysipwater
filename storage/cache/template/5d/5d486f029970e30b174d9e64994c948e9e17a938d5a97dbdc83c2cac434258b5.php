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

/* default/template/extension/total/coupon.twig */
class __TwigTemplate_5046b4265ab863e91e0a4bcfec67f02fac709b1d5c985961524bf8afc39f09ab extends \Twig\Template
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
\t<div class=\"panel-heading\">
\t\t<h4 class=\"panel-title\"><a href=\"#collapse-coupon\" class=\"accordion-toggle\" data-toggle=\"collapse\"
\t\t\t\tdata-parent=\"#accordion\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
\t</div>
\t<div id=\"collapse-coupon\" class=\"panel-collapse collapse mt-3\">
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" name=\"coupon\" value=\"";
        // line 9
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\"
\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 12
        echo ($context["button_coupon"] ?? null);
        echo "\" id=\"button-coupon\" style=\"margin-top:1px;
padding: 13px;margin-left: 5px;\" data-loading-text=\"";
        // line 13
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$('#button-coupon').on('click', function () {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\$('#button-coupon').button('loading');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\$('#button-coupon').button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
//--></script>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  58 => 12,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/total/coupon.twig", "");
    }
}

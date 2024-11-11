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

/* default/template/information/thankyou.twig */
class __TwigTemplate_1fdf1881e9d51fadd72b764a46f090cdf6cdf5aea33799d8153ee3ee4f048912 extends \Twig\Template
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
        echo "<style>
    .ls {
        background-color: #fff;
        color: #999;
    }

    .ls h2 {
        margin-top: 35px;
    }

    .ls h3 {
        margin-top: 35px;
    }

    .ls h5 span i {
        font-size: 30px;
    }

    .divider-35 {
        margin-top: 35px;
    }

    .divider--5 {
        margin-top: -5px;
    }

    .divider-30 {
        margin-top: 30px;
    }

    .cont_btn {
        background-color: #1677bc;
        padding: 5px 10px;
        border-radius: 3px;
        color: #fff !important;
        font-size: 14px !important;
        align-self: center;
        margin-left: 250px !important;
        transform: translateX(-130px);
    }

    @media (min-width: 992px) {
        .hidden-above-lg {
            display: none !important;
        }
    }
</style>


<link href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\" rel=\"stylesheet\" />

";
        // line 52
        echo ($context["header"] ?? null);
        echo "

<!-- Event snippet for Lead Generation conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof (url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-11110360898/tqoRCNvzkZUYEMLO6rEp',
            'event_callback': callback
        });
        return false;
    }
    \$(document).ready(function () {

        gtag_report_conversion();
    })

</script>

<!-- breadcrumb area start -->
<div class=\"breadcrumb-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-wrap\">
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <ul class=\"breadcrumb\">
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 86
            echo "                                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 86);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 86);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </ul>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- Thank You Area Start -->
<section class=\"ls\" style=\"padding: 30px 0 200px 0\">
    <div class=\"container\">
        <div class=\"row justify-content-around align-items-center\">
            <div class=\"col-12 text-center\">
                <div class=\"divider-35 hidden-above-lg\"></div>
                <div class=\"divider--5\"></div>
                <h2>Thank you for your message!</h2>
                <h3>We will get back to you shortly!</h3>
                <h5 style=\"margin-top: 30px\">
                    <span> <i class='bx bxs-phone-call'></i></i>+91 9251624080 </span>
                    <span> <i class='bx bxl-whatsapp'></i></i>+91-9251624081 </span>
                </h5>
            </div>
            <div class=\"d-flex justify-content-center align-items-center\" style=\"margin-top: 30px\">
                <a href=\"index.php?route=common/home\" class=\"cont_btn\">Continue</a>
            </div>
        </div>
    </div>
</section>
<!-- Thank You Area End -->
";
        // line 119
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/thankyou.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 119,  141 => 88,  130 => 86,  126 => 85,  90 => 52,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/thankyou.twig", "");
    }
}

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

/* default/template/information/contact.twig */
class __TwigTemplate_9d17a46dae73fef73d3ca63d0e456cef6c050532b97649bc03b8fc381ec96865 extends \Twig\Template
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
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "              </ul>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->
<div class=\"container\">
  <!-- contact area start -->
  <div class=\"contact-area section-padding pt-20\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"contact-message\">
            <h4 class=\"contact-title new-font\" style=\"color: black; font-family: 'newfont', sans-serif\">
             Tell us your requirement
            </h4>
            <form action=\"index.php?route=information/Thankyou\" method=\"post\" class=\"contact-form\">
              <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"first_name\" placeholder=\"Name *\" type=\"text\" required />
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"phone\" placeholder=\"Phone *\" type=\"tel\" required />
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"email_address\" placeholder=\"Email *\" type=\"email\" required />
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\" />
                </div>
                <div class=\"col-12\">
                  <div class=\"contact2-textarea text-center\">
                    <textarea placeholder=\"Message *\" name=\"message\" class=\"form-control2\" required=\"\"></textarea>
                  </div>
                  <div class=\"contact-btn\">
                    <button class=\"btn btn-sqr\" type=\"submit\" style=\"background-color: black\">
                      <a style=\"color: white\">Send Message</a>
                    </button>
                  </div>
                </div>
                <div class=\"col-12 d-flex justify-content-center\">
                  <p class=\"form-messege\"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"contact-info\">
            <h4 class=\"contact-title new-font\" style=\"color: black\">
              Contact Us
            </h4>
            <p class=\"new-font\">
              Need to get in touch with us? Fill out the <br />form with your
              inquiry .
            </p>
            <ul>
              <li class=\"row\">
              
                <div class=\"col-md-3 col-4\">
                <i class=\"fa fa-fax\"></i>
                 <span class=\"new-font pb-1\">Address :</span></div>
                <div class=\"col-md-9 col-8\">
               <p class=\"new-font pb-1\"> 493, 2nd Floor, Surya Nagar, Gopalpura bypass, Jaipur - 302019, Rajasthan</p></div>
              </li>
              <li class=\"row\">
              
                <div class=\"col-md-3 col-4\">
                <i class=\"fa fa-envelope-o\"> </i>
                 <span class=\"new-font pb-1\">Email:</span></div>
                <div class=\"col-md-9 col-4\">
               <p class=\"new-font pb-1\"> healthysip01@gmail.com</p></div>
              </li>
              <li class=\"row\">
              
                <div class=\"col-md-4 col-6\">
               <i class=\"fa fa-phone\"></i>
                 <span class=\"new-font pb-1\">Customer Care:</span></div>
                <div class=\"col-md-8 col-6\">
               <p class=\"new-font pb-1\"> +91-8875522522</p></div>
              </li>
              
             
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact area end -->
  <br /><br />
</div>
";
        // line 110
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 110,  65 => 14,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}

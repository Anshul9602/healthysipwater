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

/* default/template/common/footer.twig */
class __TwigTemplate_f4d51f796e5678239f593d1a5f77192b7b925e641d5dc3b5681c2aa7ff44a02b extends \Twig\Template
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
        echo "<link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
<style>
  .widget-title,
  .contact-block li,
  .info-list li a,
  .widget-title-text {
    color: #333;
  }


 .float1{
  
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 180px;
    right: 25px;
    background-color: rgb(42, 126, 204);
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 28px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
 }


  .newsletter-inner .news-field {
    padding-left: 10px;
  }

  .float {
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 115px;
    right: 25px !important;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 32px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
  }

  .img-s {
    max-width: 30%;
    margin-top: -50px;
  }

  @media only screen and (max-width: 786px) {
    .img-s {
      max-width: 20%;
      margin-bottom: 10px
    }
    .d-none-xs{
      display:none !important;
    }
  }

</style>
<!-- Scroll to top start -->
<div class=\"scroll-top not-visible\">
  <i class=\"fa fa-angle-up\"></i>
</div>
<!-- Scroll to Top End -->



<!-- footer area start -->
<footer class=\"footer-widget-area \" >
  <div style=\"padding-bottom:20px; padding-top:30px; \"
    class=\"footer-top section-padding\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-md-3 mt-4 d-none-xs\" style=\"align-items:center\">
          <img src=\"image/catalog/logo/New_Project__1_-removebg-preview.png\" alt=\"\" style=\"width:120px\" />
         
        </div>



        <div class=\"col-md-3 col-6 d-flex justify-content-center\">
          <div class=\"widget-item\">
            <h6 class=\"widget-title\">Shop</h6>
            <div class=\"widget-body\">
              <ul style=\"display: inline;\" class=\"info-list\">
                <li><a href=\"index.php?route=product/category&path=59_77\">RO / Water Purifier</a></li>
                <li><a href=\"index.php?route=product/category&path=59_71\">RO Service & Maintaince</a></li>


              
              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-md-3 col-6 d-flex justify-content-center\">
          <div class=\"widget-item\">
            <h6 class=\"widget-title\">Order Realted</h6>
            <div class=\"widget-body\">
              <ul style=\"display: inline;\" class=\"info-list\">
              
                ";
        // line 106
        if (($context["informations"] ?? null)) {
            // line 107
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 108
                echo "                <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 108);
                echo "\">
                  ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 109);
                echo "
                  </a></li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                  ";
        }
        // line 113
        echo "




                <li><a href=\"";
        // line 118
        echo ($context["contact"] ?? null);
        echo "\">contact us</a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-md-3 d-flex justify-content-center text-center\">
          <div class=\"widget-item\">
            <h6 class=\"widget-title\">Stay Connected</h6>
            <div class=\"widget-body\">
              <address class=\"contact-block\">
                <ul>
                  <li><i class=\"pe-7s-home\"></i><span >
493, 2nd Floor, Surya Nagar, Gopalpura bypass, Jaipur - 302019, Rajasthan</span></li>
                  <li><i class=\"pe-7s-mail\"></i> <a href=\"mailto:healthysip01@gmail.com.com\">healthysip01@gmail.com </a></li>
                  <li>
                    <i class=\"pe-7s-call\" style=\"padding:0px\"></i> 
                    <a href=\"tel:+918209322375\">+91-8209322375<br> 
                    </a>
                  </li>
                </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
      <br /> <br />
      <div class=\"row\">
        <div class=\"col-sm-4 offset-sm-4\">
          <div class=\"newsletter-wrapper text-center\">
            <h6 class=\"widget-title-text\">Signup for newsletter</h6>
            <form class=\"newsletter-inner\" id=\"mc-form\">
              <input style=\"border: 1px solid #bcbcbc;\" type=\"email\" class=\"news-field\" id=\"mc-email\" autocomplete=\"off\"
                placeholder=\"Enter your email address\">
              <button class=\"news-btn\" id=\"mc-submit\">Subscribe</button>
            </form>
            <!-- mailchimp-alerts Start -->
            <div class=\"mailchimp-alerts\">
              <div class=\"mailchimp-submitting\"></div><!-- mailchimp-submitting end -->
              <div class=\"mailchimp-success\"></div><!-- mailchimp-success end -->
              <div class=\"mailchimp-error\"></div><!-- mailchimp-error end -->
            </div>
            <!-- mailchimp-alerts end -->
          </div>
        </div>
      </div>

    </div>
  </div>
  

</footer>
<!-- footer area end -->
<a href=\"https://api.whatsapp.com/send?phone=+918209322375&amp;text=HELLO\" class=\"float\" style=\"bottom:115px;right:20px;\" target=\"_blank\">
  <i class=\"fa fa-whatsapp wp-button\"></i>
</a>
<a class=\"float1\"href=\"tel:+91 9251624080\">
<img src=\"assets/img/call.png\" alt=\"\"></a>



<!-- JS
============================================ -->
<!-- src update -->

<!-- Modernizer JS -->
<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>

<!-- Popper JS -->
<script src=\"assets/js/vendor/popper.min.js\"></script>


<!-- Countdown JS -->
<script src=\"assets/js/plugins/countdown.min.js\"></script>

<!-- jquery UI JS -->
<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
<!-- Image zoom JS -->
<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
<!-- Imagesloaded JS -->
<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
<!-- Instagram feed JS -->
<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
<!-- mailchimp active js -->
<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
<!-- contact form dynamic js -->
<script src=\"assets/js/plugins/ajax-mail.js?v1.1\"></script>
<!-- google map api -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
<!-- google map active js -->
<script src=\"assets/js/plugins/google-map.js\"></script>
<!-- Main JS -->
<script src=\"assets/js/main.js\"></script>
<!-- jquery UI JS -->
<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"assets/js/vendor/bootstrap.min.js\"></script>

<style type=\"text/css\">
  .product-layout .product-thumb .image {
    position: relative;
    overflow: hidden;
  }

  .jbuygetcombo-wrap .jbuygetcombo-ribbon {
    text-align: center;
    background: red;
    color: #fff;
    padding: 3px 10px;
    transform: rotate(50deg);
    font-size: 14px;
    font-weight: bold;
    width: 200px;
    position: absolute;
    right: -45px;
    top: 55px;
    white-space: nowrap;
  }

  html[data-jv] .jbuygetcombo-wrap {
    right: 0;
  }

</style>






  
";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 250
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 250);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 250);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 250);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 253
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "



</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 255,  330 => 253,  326 => 252,  313 => 250,  309 => 249,  175 => 118,  168 => 113,  165 => 112,  156 => 109,  151 => 108,  146 => 107,  144 => 106,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}

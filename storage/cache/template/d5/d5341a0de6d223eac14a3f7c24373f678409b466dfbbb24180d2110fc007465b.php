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

/* default/template/information/Query.twig */
class __TwigTemplate_789da26cab0f49969676c0be2d89858f3fc54f723322790c846f6bf15c09e8b0 extends \Twig\Template
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
<style>
  .column {
    /* display: block; */
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 1;
    padding: 0.75rem;
  }

  h3 {
    color: #4c565f;
    margin: 0 0 40px;
  }

  .section p {
    margin: 0 0 25px;
  }

  .headline-text {
    text-align: center;
    font-size: 18px;
    line-height: 1.2;
    font-weight: 300;
  }

  .tp {
    margin-top: 5%;
  }

  .button {
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #379dd8;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
  }

  .button:hover {
    background-color: #3e8e41
  }

  .button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }

  [type=radio]:checked~label {
    background: white;
    border-bottom: 2px solid #8bc34a;
    z-index: 2;
  }

  [type=radio]:checked~label~.season_content {
    z-index: 1;
  }
</style>
<style>
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 20px;
  left: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

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
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 137
            echo "                <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 137);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 137);
            echo "</a></li>&nbsp;/
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "              </ul>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->


<!-- contact area start -->
<div class=\"container mt-5\">
  <form  style=\"max-width:500px;margin:auto\" class=\"form-horizontal\" method=\"post\"action=\"index.php?route=information/Queryinfo\" onsubmit=\"return validateForm()\">
  <h2 class=\"mb-4 text-center\">Query Form</h2>
  <div class=\"input-container\">
    <i class=\"fa fa-user icon\"></i>
    <input class=\"input-field\" type=\"text\" placeholder=\"Name\"required=\"\" name=\"usrnm\">
  </div>

  <div class=\"input-container\">
    <i class=\"fa fa-envelope icon\"></i>
    <input class=\"input-field\" type=\"email\" placeholder=\"Email\" required=\"\"name=\"email\">
  </div>
  <div class=\"input-container\">
    <i class=\"fa fa-phone icon\"></i>
    <input class=\"input-field\" type=\"tel\" placeholder=\"Phone\" required=\"\"name=\"phone\">
  </div>
  <div class=\"input-container\">
    <i class=\"fa fa-map-marker icon\"></i>
    <input class=\"input-field\" type=\"text\" placeholder=\"Address 1\" required=\"\"name=\"Address1\">
  </div>
  <div class=\"input-container\">
    <i class=\"fa fa-map-marker icon\"></i>
    <input class=\"input-field\" type=\"text\" placeholder=\"Address 2\" name=\"Address2\">
  </div>
  <div class=\"d-flex\">
    <div class=\"input-container col-6\" style=\"padding-left:0px\">
      <i class=\"fa fa-map-marker icon\"></i>
      <input class=\"input-field\" type=\"text\" placeholder=\"City\"required=\"\" name=\"city\">
    </div>
    <div class=\"input-container col-6\" style=\"padding-right: 0px\">
      <i class=\"fa fa-map-marker icon\"></i>
      <input class=\"input-field\" type=\"text\" placeholder=\"State\" required=\"\"name=\"state\">
    </div>
  </div>
  <div class=\"d-flex\">
    <div class=\"input-container\">
      <i class=\"fa fa-map-marker icon\"></i>
      <select id=\"dd-country\" name=\"country\" style=\"width: 100%;\" data-name=\"Country\" required=\"\" class=\"form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a9829291-a9829288 w-select\">
        <option value=\"DE\" disabled=\"disabled\">Country*</option>
        <option value=\"India\">India</option>
        <option value=\"Afghanistan\">Afghanistan</option>
        <option value=\"AX\">Åland Islands</option>
        <option value=\"AL\">Albania</option>
        <option value=\"DZ\">Algeria</option>
        <option value=\"AS\">American Samoa</option>
        <option value=\"AD\">Andorra</option>
        <option value=\"AO\">Angola</option>
        <option value=\"AI\">Anguilla</option>
        <option value=\"AQ\">Antarctica</option>
        <option value=\"AG\">Antigua and Barbuda</option>
        <option value=\"AR\">Argentina</option>
        <option value=\"AM\">Armenia</option>
        <option value=\"AW\">Aruba</option>
        <option value=\"AU\">Australia</option>
        <option value=\"AT\">Austria</option>
        <option value=\"AZ\">Azerbaijan</option>
        <option value=\"BS\">Bahamas</option>
        <option value=\"BH\">Bahrain</option>
        <option value=\"BD\">Bangladesh</option>
        <option value=\"BB\">Barbados</option>
        <option value=\"BY\">Belarus</option>
        <option value=\"BE\">Belgium</option>
        <option value=\"BZ\">Belize</option>
        <option value=\"BJ\">Benin</option>
        <option value=\"BM\">Bermuda</option>
        <option value=\"BT\">Bhutan</option>
        <option value=\"BO\">Bolivia (Plurinational State of)</option>
        <option value=\"BQ\">Bonaire, Sint Eustatius and Saba</option>
        <option value=\"BA\">Bosnia and Herzegovina</option>
        <option value=\"BW\">Botswana</option>
        <option value=\"BV\">Bouvet Island</option>
        <option value=\"BR\">Brazil</option>
        <option value=\"IO\">British Indian Ocean Territory</option>
        <option value=\"UM\">United States Minor Outlying Islands</option>
        <option value=\"VG\">Virgin Islands (British)</option>
        <option value=\"VI\">Virgin Islands (U.S.)</option>
        <option value=\"BN\">Brunei Darussalam</option>
        <option value=\"BG\">Bulgaria</option>
        <option value=\"BF\">Burkina Faso</option>
        <option value=\"BI\">Burundi</option>
        <option value=\"KH\">Cambodia</option>
        <option value=\"CM\">Cameroon</option>
        <option value=\"CA\">Canada</option>
        <option value=\"CV\">Cabo Verde</option>
        <option value=\"KY\">Cayman Islands</option>
        <option value=\"CF\">Central African Republic</option>
        <option value=\"TD\">Chad</option>
        <option value=\"CL\">Chile</option>
        <option value=\"CN\">China</option>
        <option value=\"CX\">Christmas Island</option>
        <option value=\"CC\">Cocos (Keeling) Islands</option>
        <option value=\"CO\">Colombia</option>
        <option value=\"KM\">Comoros</option>
        <option value=\"CG\">Congo</option>
        <option value=\"CD\">Congo (Democratic Republic of the)</option>
        <option value=\"CK\">Cook Islands</option>
        <option value=\"CR\">Costa Rica</option>
        <option value=\"HR\">Croatia</option>
        <option value=\"CU\">Cuba</option>
        <option value=\"CW\">Curaçao</option>
        <option value=\"CY\">Cyprus</option>
        <option value=\"CZ\">Czech Republic</option>
        <option value=\"DK\">Denmark</option>
        <option value=\"DJ\">Djibouti</option>
        <option value=\"DM\">Dominica</option>
        <option value=\"DO\">Dominican Republic</option>
        <option value=\"EC\">Ecuador</option>
        <option value=\"EG\">Egypt</option>
        <option value=\"SV\">El Salvador</option>
        <option value=\"GQ\">Equatorial Guinea</option>
        <option value=\"ER\">Eritrea</option>
        <option value=\"EE\">Estonia</option>
        <option value=\"ET\">Ethiopia</option>
        <option value=\"FK\">Falkland Islands (Malvinas)</option>
        <option value=\"FO\">Faroe Islands</option>
        <option value=\"FJ\">Fiji</option>
        <option value=\"FI\">Finland</option>
        <option value=\"FR\">France</option>
        <option value=\"GF\">French Guiana</option>
        <option value=\"PF\">French Polynesia</option>
        <option value=\"TF\">French Southern Territories</option>
        <option value=\"GA\">Gabon</option>
        <option value=\"GM\">Gambia</option>
        <option value=\"GE\">Georgia</option>
        <option value=\"DE\">Germany</option>
        <option value=\"GH\">Ghana</option>
        <option value=\"GI\">Gibraltar</option>
        <option value=\"GR\">Greece</option>
        <option value=\"GL\">Greenland</option>
        <option value=\"GD\">Grenada</option>
        <option value=\"GP\">Guadeloupe</option>
        <option value=\"GU\">Guam</option>
        <option value=\"GT\">Guatemala</option>
        <option value=\"GG\">Guernsey</option>
        <option value=\"GN\">Guinea</option>
        <option value=\"GW\">Guinea-Bissau</option>
        <option value=\"GY\">Guyana</option>
        <option value=\"HT\">Haiti</option>
        <option value=\"HM\">Heard Island and McDonald Islands</option>
        <option value=\"VA\">Vatican City</option>
        <option value=\"HN\">Honduras</option>
        <option value=\"HK\">Hong Kong</option>
        <option value=\"HU\">Hungary</option>
        <option value=\"IS\">Iceland</option>
       
        <option value=\"ID\">Indonesia</option>
        <option value=\"CI\">Côte d'Ivoire</option>
        <option value=\"IR\">Iran (Islamic Republic of)</option>
        <option value=\"IQ\">Iraq</option>
        <option value=\"IE\">Ireland</option>
        <option value=\"IM\">Isle of Man</option>
        <option value=\"IL\">Israel</option>
        <option value=\"IT\">Italy</option>
        <option value=\"JM\">Jamaica</option>
        <option value=\"JP\">Japan</option>
        <option value=\"JE\">Jersey</option>
        <option value=\"JO\">Jordan</option>
        <option value=\"KZ\">Kazakhstan</option>
        <option value=\"KE\">Kenya</option>
        <option value=\"KI\">Kiribati</option>
        <option value=\"KW\">Kuwait</option>
        <option value=\"KG\">Kyrgyzstan</option>
        <option value=\"LA\">Lao People's Democratic Republic</option>
        <option value=\"LV\">Latvia</option>
        <option value=\"LB\">Lebanon</option>
        <option value=\"LS\">Lesotho</option>
        <option value=\"LR\">Liberia</option>
        <option value=\"LY\">Libya</option>
        <option value=\"LI\">Liechtenstein</option>
        <option value=\"LT\">Lithuania</option>
        <option value=\"LU\">Luxembourg</option>
        <option value=\"MO\">Macao</option>
        <option value=\"MK\">North Macedonia</option>
        <option value=\"MG\">Madagascar</option>
        <option value=\"MW\">Malawi</option>
        <option value=\"MY\">Malaysia</option>
        <option value=\"MV\">Maldives</option>
        <option value=\"ML\">Mali</option>
        <option value=\"MT\">Malta</option>
        <option value=\"MH\">Marshall Islands</option>
        <option value=\"MQ\">Martinique</option>
        <option value=\"MR\">Mauritania</option>
        <option value=\"MU\">Mauritius</option>
        <option value=\"YT\">Mayotte</option>
        <option value=\"MX\">Mexico</option>
        <option value=\"FM\">Micronesia (Federated States of)</option>
        <option value=\"MD\">Moldova (Republic of)</option>
        <option value=\"MC\">Monaco</option>
        <option value=\"MN\">Mongolia</option>
        <option value=\"ME\">Montenegro</option>
        <option value=\"MS\">Montserrat</option>
        <option value=\"MA\">Morocco</option>
        <option value=\"MZ\">Mozambique</option>
        <option value=\"MM\">Myanmar</option>
        <option value=\"NA\">Namibia</option>
        <option value=\"NR\">Nauru</option>
        <option value=\"NP\">Nepal</option>
        <option value=\"NL\">Netherlands</option>
        <option value=\"NC\">New Caledonia</option>
        <option value=\"NZ\">New Zealand</option>
        <option value=\"NI\">Nicaragua</option>
        <option value=\"NE\">Niger</option>
        <option value=\"NG\">Nigeria</option>
        <option value=\"NU\">Niue</option>
        <option value=\"NF\">Norfolk Island</option>
        <option value=\"KP\">
            Korea (Democratic People's Republic of)
        </option>
        <option value=\"MP\">Northern Mariana Islands</option>
        <option value=\"NO\">Norway</option>
        <option value=\"OM\">Oman</option>
        <option value=\"PK\">Pakistan</option>
        <option value=\"PW\">Palau</option>
        <option value=\"PS\">Palestine, State of</option>
        <option value=\"PA\">Panama</option>
        <option value=\"PG\">Papua New Guinea</option>
        <option value=\"PY\">Paraguay</option>
        <option value=\"PE\">Peru</option>
        <option value=\"PH\">Philippines</option>
        <option value=\"PN\">Pitcairn</option>
        <option value=\"PL\">Poland</option>
        <option value=\"PT\">Portugal</option>
        <option value=\"PR\">Puerto Rico</option>
        <option value=\"QA\">Qatar</option>
        <option value=\"XK\">Republic of Kosovo</option>
        <option value=\"RE\">Réunion</option>
        <option value=\"RO\">Romania</option>
        <option value=\"RU\">Russian Federation</option>
        <option value=\"RW\">Rwanda</option>
        <option value=\"BL\">Saint Barthélemy</option>
        <option value=\"SH\">
            Saint Helena, Ascension and Tristan da Cunha
        </option>
        <option value=\"KN\">Saint Kitts and Nevis</option>
        <option value=\"LC\">Saint Lucia</option>
        <option value=\"MF\">Saint Martin (French part)</option>
        <option value=\"PM\">Saint Pierre and Miquelon</option>
        <option value=\"VC\">Saint Vincent and the Grenadines</option>
        <option value=\"WS\">Samoa</option>
        <option value=\"SM\">San Marino</option>
        <option value=\"ST\">Sao Tome and Principe</option>
        <option value=\"SA\">Saudi Arabia</option>
        <option value=\"SN\">Senegal</option>
        <option value=\"RS\">Serbia</option>
        <option value=\"SC\">Seychelles</option>
        <option value=\"SL\">Sierra Leone</option>
        <option value=\"SG\">Singapore</option>
        <option value=\"SX\">Sint Maarten (Dutch part)</option>
        <option value=\"SK\">Slovakia</option>
        <option value=\"SI\">Slovenia</option>
        <option value=\"SB\">Solomon Islands</option>
        <option value=\"SO\">Somalia</option>
        <option value=\"ZA\">South Africa</option>
        <option value=\"GS\">
            South Georgia and the South Sandwich Islands
        </option>
        <option value=\"KR\">Korea (Republic of)</option>
        <option value=\"SS\">South Sudan</option>
        <option value=\"ES\">Spain</option>
        <option value=\"LK\">Sri Lanka</option>
        <option value=\"SD\">Sudan</option>
        <option value=\"SR\">Suriname</option>
        <option value=\"SJ\">Svalbard and Jan Mayen</option>
        <option value=\"SZ\">Eswatini</option>
        <option value=\"SE\">Sweden</option>
        <option value=\"CH\">Switzerland</option>
        <option value=\"SY\">Syrian Arab Republic</option>
        <option value=\"TW\">Taiwan</option>
        <option value=\"TJ\">Tajikistan</option>
        <option value=\"TZ\">Tanzania, United Republic of</option>
        <option value=\"TH\">Thailand</option>
        <option value=\"TL\">Timor-Leste</option>
        <option value=\"TG\">Togo</option>
        <option value=\"TK\">Tokelau</option>
        <option value=\"TO\">Tonga</option>
        <option value=\"TT\">Trinidad and Tobago</option>
        <option value=\"TN\">Tunisia</option>
        <option value=\"TR\">Turkey</option>
        <option value=\"TM\">Turkmenistan</option>
        <option value=\"TC\">Turks and Caicos Islands</option>
        <option value=\"TV\">Tuvalu</option>
        <option value=\"UG\">Uganda</option>
        <option value=\"UA\">Ukraine</option>
        <option value=\"AE\">United Arab Emirates</option>
        <option value=\"GB\">
            United Kingdom of Great Britain and Northern Ireland
        </option>
        <option value=\"US\">United States of America</option>
        <option value=\"UY\">Uruguay</option>
        <option value=\"UZ\">Uzbekistan</option>
        <option value=\"VU\">Vanuatu</option>
        <option value=\"VE\">Venezuela (Bolivarian Republic of)</option>
        <option value=\"VN\">Vietnam</option>
        <option value=\"WF\">Wallis and Futuna</option>
        <option value=\"EH\">Western Sahara</option>
        <option value=\"YE\">Yemen</option>
        <option value=\"ZM\">Zambia</option>
        <option value=\"ZW\">Zimbabwe</option>
    </select>
    </div>
    <div class=\"input-container col-6\" style=\"padding-right: 0px\">
      <i class=\"fa fa-map-marker icon\"></i>
      <input class=\"input-field\" type=\"text\"required=\"\" placeholder=\"Pin-Code\" name=\"pincode\">
    </div>
  </div>
  
  
  
  
  <div class=\"input-container d-flex align-items-center\" style=\"background-color: dodgerblue;\">
    <i class=\"fa fa-comment icon\"></i>
    <textarea class=\"input-field\" type=\"text\" row=\"3\"placeholder=\"Query\"required=\"\" name=\"query\"></textarea>
  </div>

  <button type=\"submit\" class=\"btn\">Submit</button>
</form>
</div>



<!-- contact area end -->
<br /><br />
</div>
";
        // line 474
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/Query.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 474,  190 => 139,  179 => 137,  175 => 136,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/Query.twig", "");
    }
}

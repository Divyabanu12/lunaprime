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

/* opc_electronic_electron_2501/template/common/header.twig */
class __TwigTemplate_ec29469545550493bb0db67c12e6bf9a754f6a8af723f667cfe72a7099490c11 extends \Twig\Template
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
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
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
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>";
        // line 13
        if (($context["title"] ?? null)) {
            echo ($context["title"] ?? null);
        } else {
            echo " title ";
        }
        echo "</title>
\t<base href=\"";
        // line 14
        echo ($context["base"] ?? null);
        echo "\" /> ";
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" /> ";
        }
        echo " ";
        if (($context["keywords"] ?? null)) {
            // line 16
            echo "\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" /> ";
        }
        // line 17
        echo "\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
\t<!-- font -->
\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/fonts/Poppins.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/fonts/Roboto.css\" rel=\"stylesheet\">
\t<!-- font -->
\t<!-- common CSS START-->
\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/owl.carousel.min.css\" rel=\"stylesheet\" />
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/nivo.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/jquery.fancybox.css\" rel=\"stylesheet\" />
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/jquery.minicolors.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/bootstrap-toggle.min.css\" rel=\"stylesheet\" />
        <link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/tvcmsmenu.css\" rel=\"stylesheet\" />


\t<!-- common CSS END -->
\t<!-- common JS START -->
\t<script src=\"catalog/view/javascript/common.js\" ></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/owl.js\"></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/nivo.js\"></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/jquery.fancybox.js\"></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/jquery.minicolors.js\"></script>
    <script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/bootstrap-toggle.min.js\"></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/jquery.storageapi.min.js\"></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/jquery.balance.js\"></script>
    <script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/tvcmsmenu.js\" ></script>
\t<!-- common JS END -->

\t";
        // line 47
        if (($context["theme_option_status"] ?? null)) {
            // line 48
            echo "\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/tvcmscustomsthemeoption.css\" rel=\"stylesheet\" />
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/tvcmscustomsthemeoption.js\"></script> 
\t";
        }
        // line 51
        echo "
\t<!-- themevolty custom Theme JS START -->
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/commonthemevolty.js\" ></script>
\t<script type=\"text/javascript\" src=\"catalog/view/theme/opc_electronic_electron_2501/assets/js/custom.js\" ></script>
\t<!-- themevolty custom Theme JS END -->
\t<!-- themevolty custom Theme CSS START -->
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/theme.css\" rel=\"stylesheet\" />
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/common.css\" rel=\"stylesheet\" />
\t<link href=\"catalog/view/theme/opc_electronic_electron_2501/assets/css/custom.css\" rel=\"stylesheet\" />
\t<!-- themevolty custom Theme CSS END -->
\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 62
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 62);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 62);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 62);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 65
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" ></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 68
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 68);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 68);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo " ";
            echo $context["analytic"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</head>

<body id=\"";
        // line 73
        if (($context["homeid"] ?? null)) {
            echo ($context["homeid"] ?? null);
        } else {
            echo "noid";
        }
        echo "\" class=\"lang-es ";
        if ((($context["direction"] ?? null) != "ltr")) {
            echo " lang-rtl ";
        }
        echo "  country-us currency-usd layout-full-width page-index tax-display-disabled\" data-menu-sticky='";
        echo ($context["mainmenustickystatus"] ?? null);
        echo "' ";
        echo ">
\t";
        // line 74
        echo ($context["themeoption"] ?? null);
        echo "
\t";
        // line 75
        if (($context["bottomoption"] ?? null)) {
            echo "<div class=\"bottomoption hidden\">";
            echo ($context["bottomoption"] ?? null);
            echo "</div>";
        }
        // line 76
        echo "\t";
        if (($context["mousehoverimage"] ?? null)) {
            echo "<div class=\"mousehoverimage hidden\">";
            echo ($context["mousehoverimage"] ?? null);
            echo "</div>";
        }
        // line 77
        echo "\t";
        if (($context["mainmenustickystatus"] ?? null)) {
            echo "<div class=\"mainmenustickystatus hidden\">";
            echo ($context["mainmenustickystatus"] ?? null);
            echo "</div>";
        }
        // line 78
        echo "\t\t\t";
        if (($context["pageloader"] ?? null)) {
            // line 79
            echo "\t\t\t<div class=\"ttvcms-loading-overlay\">
\t\t\t\t<div class=\"ttvcms-loading-inner\">
\t\t\t\t\t<img class=\"logo img-responsive\" src=\"";
            // line 81
            echo ($context["logo"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 82
            echo ($context["loader_img"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 86
        echo "\t\t\t<div class=\"ttv-main-div";
        if (($context["boxlayout"] ?? null)) {
            echo "ttv-box-layout container";
        }
        echo "\">
\t\t\t\t<header id=\"header\">
\t\t\t\t\t<div class=\"ttvcmsheader-banner\"></div>
\t\t\t\t\t<div class=\"ttvcmsdesktop-top-header-wrapper\">
\t\t\t\t\t\t<div class=\"container-fluid ttvcmsdesktop-top-header\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row ttvcmsdesktop-top-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<!-- begin modules/ttvcmsstoretime/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcmsstore-time\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 96
        if (($context["headeremail"] ?? null)) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvstore-email-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvstore-email-icon\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvstore-email-text\">";
            // line 99
            echo ($context["headeremail"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["headeropen"] ?? null)) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvstore-time-infowrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvstore-time-icon\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvstore-time-text\"> ";
            // line 105
            echo ($context["headeropen"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end modules/ttvcmsstoretime/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 111
        if (($context["custom_text"] ?? null)) {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t<div class=\"ttvheader-offer-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvheader-nav-offer-text\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tag\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 115
            echo ($context["custom_text"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-4 ttvcmsdesktop-language-selector\">
\t\t\t\t\t\t\t\t\t\t<!-- begin modules/ttvcmstags/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo ($context["headertab"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<!-- end modules/ttvcmstags/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ttvcmshesder-sticy\">
\t\t\t\t\t\t\t<div class=\"container-fluid ttvcmsdesktop-top-second hidden-md-down\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row ttvcmsdesktop-top-header-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-12 ttvcms-header-logo-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hidden-sm-down ttvcms-header-logo\" id=\"ttvcmsdesktop-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttv-header-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 134
        if (($context["logo"] ?? null)) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"ttvheader-top-logo-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"logo img-responsive\" src=\"";
            // line 136
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a> ";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"ttvheader-top-logo-wrapper\">";
            echo ($context["name"] ?? null);
            echo "</a></h1> ";
        }
        // line 139
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-lg-6 col-md-6 ttvcmsheader-search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcmssearch-wrapper\" id=\"_desktop_search\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\search.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 145
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\search.twig -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-lg-6 col-md-6 ttvcmsheader-nav-right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttv-contact-account-cart-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 151
        if (($context["headerphone"] ?? null)) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcontact-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcontect-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin module:ps_contactinfo/nav.tpl -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin D:\\xampp\\htdocs\\themevolty_ELECTRON\\ttv_electronic_electron_1_7_v1/themes/ttv_electronic_electron_1_7_v1/modules/ps_contactinfo/nav.tpl -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"_desktop_contact_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"contact-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 158
            echo ($context["headerphone"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end D:\\xampp\\htdocs\\themevolty_ELECTRON\\ttv_electronic_electron_1_7_v1/themes/ttv_electronic_electron_1_7_v1/modules/ps_contactinfo/nav.tpl -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end module:ps_contactinfo/nav.tpl -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin module:opc_electronic_electron_2501\\template\\common\\cart.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\cart.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 169
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\cart.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end module:opc_electronic_electron_2501\\template\\common\\cart.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcms-header-myaccount\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttv-header-account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttv-account-wrapper\"><button class=\"btn-unstyle ttv-myaccount-btn\"><span>Sign In</span> <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu ttv-account-dropdown ttv-dropdown\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin module:opc_electronic_electron_2501\\template\\common\\language.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\language.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 179
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\language.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end module:opc_electronic_electron_2501\\template\\common\\language.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin module:opc_electronic_electron_2501\\template\\common\\currency.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- begin  D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\currency.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 184
        echo ($context["currency"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end  D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\currency.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end module:opc_electronic_electron_2501\\template\\common\\currency.twig -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"ttvcmsdesktop-user-info\" class=\"ttvcms-header-sign\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-info ttvheader-sign\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 189
        if (($context["logged"] ?? null)) {
            // line 190
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"logout ttvhedaer-sign-btn\" href=\"";
            echo ($context["logout"] ?? null);
            echo "\"> ";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"account ttvhedaer-sign-btn\" href=\"";
            // line 191
            echo ($context["account"] ?? null);
            echo "\" title=\"View my customer account\"><span class=\"ttvhedaer-sign-span\">";
            echo ($context["text_account"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"ttvhedaer-sign-btn\" title=\"Log in to your customer account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ttvhedaer-sign-span\">";
            // line 194
            echo ($context["text_login"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ttvcms-header-menu-offer-wrapper hidden-md-down\">
\t\t\t\t\t\t\t\t<div class=\"position-static ttvcms-header-menu container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcmsmain-menu-wrapper col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t<!-- begin module:opc_electronic_electron_2501\\template\\common\\menu.twig -->
\t\t\t\t\t\t\t\t\t\t\t<!-- begin D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\menu.twig -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 214
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t<!-- end D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\menu.twig -->
\t\t\t\t\t\t\t\t\t\t\t<!-- end module:opc_electronic_electron_2501\\template\\common\\menu.twig -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 218
        if (($context["text_todayoffer"] ?? null)) {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcmsmain-offer-text-wrapper col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- begin modules/ttvcmsoffertext/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-percent\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-title\">";
            // line 226
            echo ($context["text_todayoffer"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end modules/ttvcmsoffertext/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"ttvcms-mobile-view-header\" class=\"hidden-lg-up\">
\t\t\t\t\t\t<div class=\"ttvcmsmobile-header-upper\">
\t\t\t\t\t\t\t<div class=\"ttvcmsmobile-header-logo-right-wrapper row\">
\t\t\t\t\t\t\t\t<div id=\"ttvcmsmobile-header-logo\" class=\"col-sm-3 col-xs-12\"></div>
\t\t\t\t\t\t\t\t<div id=\"ttvcmsmobile-header-right\" class=\"col-sm-9 col-xs-12\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row ttvcmsmobile-header-search-wrapper\">
\t\t\t\t\t\t\t<div class=\"ttvcmsmobile-header-search\">
\t\t\t\t\t\t\t\t<div id=\"ttvcmsmobile-search\">
\t\t\t\t\t\t\t\t\t<!-- begin catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\search.twig -->
\t\t\t\t\t\t\t\t\t";
        // line 248
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<!-- end catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\search.twig -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row ttvcmsmobile-header-menu-offer-text\">
\t\t\t\t\t\t\t<div class=\"ttvcmsmobile-header-menu col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t<div id=\"ttvcmsmobile-horizontal-menu\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 257
        if (($context["text_todayoffer"] ?? null)) {
            // line 258
            echo "\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t<!-- begin modules/ttvcmsoffertext/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-inner\">
\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-percent\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvoffer-text-title\">";
            // line 265
            echo ($context["text_todayoffer"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t<!-- end modules/ttvcmsoffertext/views/templates/front/display_home.tpl -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- <div class=\"ttvcmsmobile-header-right\"><div id='ttvcmsmobile-horizontal-menu-left'></div></div> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 271
        echo "\t\t\t\t</header>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 271,  554 => 265,  545 => 258,  543 => 257,  531 => 248,  513 => 232,  504 => 226,  495 => 219,  493 => 218,  486 => 214,  467 => 197,  461 => 194,  456 => 193,  449 => 191,  442 => 190,  440 => 189,  432 => 184,  424 => 179,  411 => 169,  407 => 167,  395 => 158,  387 => 152,  385 => 151,  376 => 145,  368 => 139,  361 => 138,  352 => 136,  347 => 135,  345 => 134,  329 => 121,  325 => 119,  318 => 115,  313 => 112,  311 => 111,  306 => 108,  300 => 105,  296 => 103,  293 => 102,  287 => 99,  283 => 97,  281 => 96,  265 => 86,  256 => 82,  250 => 81,  246 => 79,  243 => 78,  236 => 77,  229 => 76,  223 => 75,  219 => 74,  204 => 73,  200 => 71,  188 => 70,  177 => 68,  172 => 67,  163 => 65,  158 => 64,  145 => 62,  141 => 61,  129 => 51,  124 => 48,  122 => 47,  90 => 17,  85 => 16,  78 => 15,  74 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/header.twig", "");
    }
}

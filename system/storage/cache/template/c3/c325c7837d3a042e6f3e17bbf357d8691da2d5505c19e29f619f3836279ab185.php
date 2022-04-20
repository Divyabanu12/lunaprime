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

/* opc_electronic_electron_2501/template/common/footer.twig */
class __TwigTemplate_d74963149638dd39517b50632825141855ebd676e36d376b87c2afe105b5aff6 extends \Twig\Template
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
        echo "<footer id=\"footer\">
\t<!-- quick view -->
\t<!-- Trigger the modal with a button -->
\t<!-- quick view modal -->
\t<div id=\"quickviewdata\" class=\"modal fade quickview\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-body\"></div>
\t\t\t\t<button type=\"button\" class=\"close ttvquickview-close-btn\" data-dismiss=\"modal\">&times;</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- quick view modal -->
\t<div class=\"ttvfooter-before\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-container\">
\t\t<div class=\"container ttvfooter-logo-link-wrapper\">
\t\t\t<div class=\"ttvfooter-storelogo-weapper\">
\t\t\t\t<div class=\"ttvfooter-storelogo-inner clearfix\">
\t\t\t\t\t";
        // line 25
        echo ($context["footerlogo"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ttvfooter-storelogo-imformation row\">
\t\t\t\t<div class=\"links col-xl-3 col-lg-3 col-md-12\">
\t\t\t\t\t<div class=\"ttvfooter-address\">
\t\t\t\t\t\t";
        // line 31
        if (($context["text_contact_us"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t\t<div class=\"ttvfooter-title-wrapper\" data-target=\"#footer_sub_menu_store_info\" data-toggle=\"collapse\">
\t\t\t\t\t\t\t<span class=\"ttvfooter-title\">";
            // line 33
            echo ($context["text_contact_us"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"float-xs-right ttvfooter-toggle-icon-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler collapse-icons ttvfooter-toggle-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down add\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up remove\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t<div id=\"footer_sub_menu_store_info\" class=\"collapse\">
\t\t\t\t\t\t\t<div class=\"ttvfooter-addresses\">
\t\t\t\t\t\t\t\t<div class=\"ttvfooter-address-lable\">";
        // line 44
        echo ($context["text_address"] ?? null);
        echo "</div>";
        echo ($context["country_name"] ?? null);
        echo "<br>";
        echo ($context["country_name"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ttvfooter-store-link\"> ";
        // line 46
        echo ($context["text_email_us"] ?? null);
        echo " <a href=\"";
        echo ($context["email"] ?? null);
        echo "\" class=\"dropdown\">";
        echo ($context["email"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t\t<div class=\"ttvfooter-store-link-content\"> ";
        // line 47
        echo ($context["text_call_us"] ?? null);
        echo " <span>";
        echo ($context["telephone"] ?? null);
        echo "</span></div>
\t\t\t\t\t\t\t";
        // line 48
        if (($context["tvcmsstoretime_status"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t\t<div class=\"ttvfooter-column-wrapper ttvcmsfooter-store-time\">
\t\t\t\t\t\t\t\t<div class=\"ttvfooter-store-time-info-box\">
\t\t\t\t\t\t\t\t\t<div id=\"footer_sub_menu_store_time\" class=\"collapse ttvfooter-time-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvfooter-open-time-wrapper\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvfooter-opentime-lable\">";
            // line 53
            echo ($context["tvcmsstoretime_title"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvfooter-opentime-content\">";
            // line 54
            echo ($context["tvcmsstoretime_monday_friday"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-12 ttvfooter-account-link\">
\t\t\t\t\t<div class=\"ttvfooter-account-wrapper\">
\t\t\t\t\t\t<div class=\"ttvfooter-title-wrapper\" data-target=\"#footer_sub_menu_link\" data-toggle=\"collapse\">
\t\t\t\t\t\t\t";
        // line 66
        if (($context["text_cust_ser"] ?? null)) {
            echo "<span class=\"ttvfooter-title\">";
            echo ($context["text_cust_ser"] ?? null);
            echo "</span>";
        }
        // line 67
        echo "\t\t\t\t\t\t\t<span class=\"float-xs-right ttvfooter-toggle-icon-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler collapse-icons ttvfooter-toggle-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down add\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up remove\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul id=\"footer_sub_menu_link\" class=\"collapse ttvfooter-link-wrapper\">
\t\t\t\t\t\t\t";
        // line 75
        if (($context["text_account"] ?? null)) {
            // line 76
            echo "\t\t\t\t\t\t\t<li><a class=\"cms-page-link\" href=\"";
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t\t";
        if (($context["text_order"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t\t\t<li><a class=\"cms-page-link\" href=\"";
            echo ($context["order"] ?? null);
            echo "\" title=\"";
            echo ($context["text_order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t\t";
        if (($context["text_wishlist"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t\t\t<li><a class=\"cms-page-link\" href=\"";
            echo ($context["wishlist"] ?? null);
            echo "\" title=\"";
            echo ($context["text_wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t\t";
        if (($context["text_newsletter"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t\t\t<li><a class=\"cms-page-link\" href=\"";
            echo ($context["newsletter"] ?? null);
            echo "\" title=\"";
            echo ($context["text_newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t";
        if (($context["text_manufacturer"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t\t\t<li><a class=\"cms-page-link\" href=\"";
            echo ($context["manufacturer"] ?? null);
            echo "\" title=\"";
            echo ($context["text_manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-12 ttvfooter-account-link\">
\t\t\t\t\t<div class=\"ttvfooter-account-wrapper\">
\t\t\t\t\t\t<div class=\"ttvfooter-title-wrapper\" data-target=\"#footer_sub_menu_linksecond\" data-toggle=\"collapse\">
\t\t\t\t\t\t\t";
        // line 96
        if (($context["text_youraccount"] ?? null)) {
            echo "<span class=\"ttvfooter-title\">";
            echo ($context["text_youraccount"] ?? null);
            echo "</span>";
        }
        // line 97
        echo "\t\t\t\t\t\t\t<span class=\"float-xs-right ttvfooter-toggle-icon-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler collapse-icons ttvfooter-toggle-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down add\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up remove\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul id=\"footer_sub_menu_linksecond\" class=\"collapse ttvfooter-link-wrapper\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 106
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 109
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 112
        echo ($context["return"] ?? null);
        echo "\" title=\"";
        echo ($context["text_return"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_return"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 115
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 118
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"block_myaccount_infos\" class=\"col-xl-2 col-lg-2 col-md-12\">
\t\t\t\t\t<div class=\"ttvfooter-title-wrapper\" data-target=\"#footer_sub_menu_myaccount\" data-toggle=\"collapse\">
\t\t\t\t\t\t";
        // line 125
        if (($context["text_information"] ?? null)) {
            echo "<span class=\"ttvfooter-title\">";
            echo ($context["text_information"] ?? null);
            echo "</span>";
        }
        // line 126
        echo "\t\t\t\t\t\t<span class=\"float-xs-right ttvfooter-toggle-icon-wrapper\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler collapse-icons ttvfooter-toggle-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down add\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up remove\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 133
        if (($context["informations"] ?? null)) {
            // line 134
            echo "\t\t\t\t\t<ul id=\"footer_sub_menu_myaccount\" class=\"collapse account-list\">
\t\t\t\t\t\t";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 136
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"cms-page-link\" href=\"";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 137);
                echo "\" title=\"Our terms and conditions of delivery\">
\t\t\t\t\t\t\t\t";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 138);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 145
        echo ($context["newsletterdata"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 147
        if (($context["text_gotop"] ?? null)) {
            echo "<div class=\"ttvbottom-to-top\"><a href=\"javascript:\" class=\"ttvbottom-to-top-icon\"><span>";
            echo ($context["text_gotop"] ?? null);
            echo "</span><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a></div>";
        }
        // line 148
        echo "\t\t</div>
\t\t<div class=\"ttvfooter-copy-payment-icon-wrapper\">
\t\t\t<div class=\"container ttvfooter-copy-payment-icon-content\">
\t\t\t\t<div class=\"row ttvfooter-copy-payment-icon-inner\">
\t\t\t\t\t<div class=\"col-xl-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t";
        // line 153
        echo ($context["paymenticon"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ttvcopylink col-xl-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<p>";
        // line 157
        if (($context["customsetting_customtext"] ?? null)) {
            echo ($context["customsetting_customtext"] ?? null);
        }
        echo "</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t";
        // line 161
        echo ($context["socialicon"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
</div>
<div class=\"ttvcms-custom-theme\"></div>
";
        // line 170
        if (($context["tvcmscustomsetting_theme_css_path"] ?? null)) {
            // line 171
            echo "<link href=\"catalog/view/theme/opc_fashion_merci_701/assets/css/";
            echo ($context["tvcmscustomsetting_theme_css_path"] ?? null);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 174
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 176,  402 => 174,  398 => 173,  392 => 171,  390 => 170,  378 => 161,  369 => 157,  362 => 153,  355 => 148,  349 => 147,  344 => 145,  341 => 144,  337 => 142,  327 => 138,  323 => 137,  320 => 136,  316 => 135,  313 => 134,  311 => 133,  302 => 126,  296 => 125,  284 => 118,  276 => 115,  266 => 112,  258 => 109,  250 => 106,  239 => 97,  233 => 96,  225 => 90,  215 => 88,  212 => 87,  202 => 85,  199 => 84,  189 => 82,  186 => 81,  176 => 79,  173 => 78,  163 => 76,  161 => 75,  151 => 67,  145 => 66,  137 => 60,  128 => 54,  124 => 53,  118 => 49,  116 => 48,  110 => 47,  102 => 46,  93 => 44,  89 => 42,  77 => 33,  74 => 32,  72 => 31,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/footer.twig", "");
    }
}

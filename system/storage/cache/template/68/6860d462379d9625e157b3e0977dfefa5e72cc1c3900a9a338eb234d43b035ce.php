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

/* opc_electronic_electron_2501/template/extension/module/tvcmshelp_specialproduct_design.twig */
class __TwigTemplate_0aa7be5f4b0cf51699b425c1e710ca1b271f62c4be2f08c2195a94d6cba26a50 extends \Twig\Template
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
        echo "<article class=\"product-miniature js-product-miniature  ttvall-product-wrapper-info-box\">
\t<div class=\"thumbnail-container\">
\t\t<div class=\"ttvproduct-wrapper grid\">
\t\t\t<div class=\"ttvproduct-image\">
\t\t\t\t<a href=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 5);
        echo "\" class=\"product-thumbnail\">
\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 6);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
        echo "\">
\t\t\t\t\t<img class=\"ttvproduct-hover-img\" src=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hoverimage", [], "any", false, false, false, 7);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7);
        echo "\">
\t\t\t\t</a>
\t\t\t\t<div class=\"ttvproduct-hover-btn\">
\t\t\t\t\t<div class=\"ttvproduct-quick-btn quickview\" data-quickviewid=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 10);
        echo "\" title=\"";
        echo ($context["text_quickview"] ?? null);
        echo "\" data-link-action=\"";
        echo ($context["text_quickview"] ?? null);
        echo "\" data-toggle=\"ttvtooltip\" data-placement=\"top\" data-html=\"true\" data-original-title=\"";
        echo ($context["text_quickview"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"ttvproduct-quick-icon\"><i class=\"fa fa-search search\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"ttvproduct-quick-lable\">";
        // line 12
        echo ($context["text_quickview"] ?? null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ttvproduct-cart-btn\">
\t\t\t\t\t\t<div data-button-action=\"add-to-cart\" class=\"add-to-cart ttvproduct-add-to-cart\" onclick=\"cart.add1('";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 15);
        echo "');\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" data-link-action=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" data-toggle=\"ttvtooltip\" data-placement=\"top\" data-html=\"true\" data-original-title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"ttvproduct-add-to-cart-label\">";
        // line 17
        echo ($context["button_cart"] ?? null);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 20
        if (($context["comparedisplay"] ?? null)) {
            // line 21
            echo "\t\t\t\t\t<div class=\"ttvcompare-wrapper\">
\t\t\t\t\t\t<div class=\"ttvproduct-compare\">
\t\t\t\t\t\t\t<div onclick=\"compare.add1('";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 23);
            echo "');\" class=\"ttvcmsproduct-compare-btn ttvproduct-compare-icon\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\" data-link-action=\"";
            echo ($context["button_compare"] ?? null);
            echo "\" data-toggle=\"ttvtooltip\" data-placement=\"top\" data-html=\"true\" data-original-title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-ban remove hide\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange add\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span class=\"ttvproduct-add-to-compare-label\">";
            // line 26
            echo ($context["button_compare"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t";
        if (($context["wishlistdisplay"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t<div class=\"ttvproduct-wishlist\">
\t\t\t\t\t\t<div onclick=\"wishlist.add1('";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 33);
            echo "');\" class=\"ttvquick-view-popup-wishlist\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\" data-link-action=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\" data-toggle=\"ttvtooltip\" data-placement=\"top\" data-html=\"true\" data-original-title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<div class=\"panel-product-line panel-product-actions ttvproduct-wishlist-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t<span class=\"ttvproduct-add-to-wishlist-label\">";
            // line 36
            echo ($context["button_wishlist"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ttvproduct-info-box-wrapper\">
\t\t\t\t<div class=\"product-description\">
\t\t\t\t\t<div class=\"ttvproduct-name\">
\t\t\t\t\t\t<div class=\"product-title\"><a href=\"";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 46);
        echo "\">
\t\t\t\t\t\t\t\t<h6>";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 47);
        echo "</h6>
\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t<div class=\"ttvproduct-cat-name\">";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryname", [], "any", false, false, false, 49);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ttvall-product-star-icon\">
\t\t\t\t\t\t";
        // line 52
        $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_rating_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmshelp_specialproduct_design.twig", 52)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 52)]));
        // line 53
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ttv-product-price\">
\t\t\t\t\t\t<div class=\"ttvproduct-name-price-wrapper\">
\t\t\t\t\t\t\t";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 56)) {
            // line 57
            echo "\t\t\t\t\t\t\t<div class=\"product-price-and-shipping\">
\t\t\t\t\t\t\t\t";
            // line 58
            if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 58)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<span class=\"price\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 59);
                echo "</span>
\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t<span class=\"regular-price\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 61);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"price\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 62);
                echo "</span>
\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 64)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 65);
                echo "</span>
\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 71) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 71) != "0000-00-00"))) {
            echo " ";
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_timelimit_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmshelp_specialproduct_design.twig", 71)->display(twig_array_merge($context, ["productdate" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 71)]));
        }
        // line 72
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</article>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmshelp_specialproduct_design.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 72,  217 => 71,  213 => 69,  209 => 67,  202 => 65,  199 => 64,  194 => 62,  189 => 61,  183 => 59,  181 => 58,  178 => 57,  176 => 56,  171 => 53,  169 => 52,  163 => 49,  158 => 47,  154 => 46,  147 => 41,  139 => 36,  127 => 33,  124 => 32,  121 => 31,  113 => 26,  101 => 23,  97 => 21,  95 => 20,  89 => 17,  78 => 15,  72 => 12,  61 => 10,  53 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmshelp_specialproduct_design.twig", "C:\\xampp\\htdocs\\lunaprime\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\extension\\module\\tvcmshelp_specialproduct_design.twig");
    }
}

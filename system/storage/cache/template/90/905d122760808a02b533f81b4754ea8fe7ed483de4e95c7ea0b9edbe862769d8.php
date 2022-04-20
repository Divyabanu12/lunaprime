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

/* opc_electronic_electron_2501/template/common/cart.twig */
class __TwigTemplate_e2ee478f787536fb5498f4f293e0467bc7034668f4764d3edae7630bd0d86270 extends \Twig\Template
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
        echo "<div id=\"_desktop_cart\" class=\"ttvcms-header-cart\">
\t<div class=\"blockcart cart-preview inactive ttv-header-cart\">
\t\t<div id=\"cartdropdwon\" class=\"ttvheader-cart-wrapper\">
\t\t\t<div class=\"ttvheader-cart-btn-wrapper\">
\t\t\t\t<a href=\"JavaScript:void(0);\" title=\"Cart\">
\t\t\t\t\t<div class=\"ttvcart-icon-text-wrapper\">
\t\t\t\t\t\t<span class=\"ttvcart-lable\">Cart</span>
\t\t\t\t\t\t<div class=\"ttv-cart-icon\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart shopping-cart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ttv-cart-cart-inner\">
\t\t\t\t\t\t   <span class=\"cart-total cart-products-count\">";
        // line 12
        echo ($context["ttv_text_items"] ?? null);
        echo "</span>
\t\t\t\t\t   </div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<ul>
\t\t\t\t";
        // line 18
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 19
            echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"ttvcmscart-show-dropdown\">
\t\t\t\t\t\t<div class=\"ttvcart-product-list\">
\t\t\t\t\t\t\t<div class=\"ttvcart-product-content-box ttvscroll-container\">
\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-wrapper items\">
\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-img\">
\t\t\t\t\t\t\t\t\t\t";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26)) {
                    echo " <a class=\"ttvshoping-cart-dropdown-img-block\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "\" /></a> ";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-quentity\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvshoping-cart-dropdown-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                echo "\"><span class=\"product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-quentity\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ttvshopping-cart-quentity\">X</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-price\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 37);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-attribute\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 40)) {
                    echo " ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 40));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-attr\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 41);
                        echo "</span> <span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 41);
                        echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo " ";
                }
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-attr\"><span>";
                    echo ($context["text_recurring"] ?? null);
                    echo "</span> <span> ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 43);
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-remove\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"remove-from-cart ttvcmsremove-from-cart\" onclick=\"cart.remove1('";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 47);
                echo "');\" rel=\"nofollow\" data-link-action=\"delete-from-cart\" title=\"remove from cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-wrapper items\">
\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-quentity\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ttvshoping-cart-dropdown-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-quentity\">1</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ttvshopping-cart-quentity\">X</span> ";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 59);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-price\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 63);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-remove\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"remove-from-cart ttvcmsremove-from-cart\" rel=\"nofollow\" data-link-action=\"delete-from-cart\" onclick=\"voucher.remove1('";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 66);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-total-info\">
\t\t\t\t\t\t\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 76
                echo "\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-subtotal-prod\">
\t\t\t\t\t\t\t\t\t<span class=\"ttvshoping-cart-subtotal\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 77);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"ttvcart-product-price\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 78);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-btn\">
\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-checkout\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo ($context["checkout"] ?? null);
            echo "\" class=\"ttv-innerpage-button\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ttvcart-product-list-viewcart\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo ($context["cart"] ?? null);
            echo "\" class=\"ttv-innerpage-button\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"ttvcmscart-show-dropdown\">
\t\t\t\t\t\t<div class=\"ttvcart-no-product\">
\t\t\t\t\t\t\t<div class=\"ttvcart-no-product-label\">";
            // line 97
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 102
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 102,  254 => 97,  249 => 94,  236 => 86,  228 => 83,  224 => 81,  215 => 78,  211 => 77,  208 => 76,  204 => 75,  200 => 73,  185 => 66,  179 => 63,  172 => 59,  165 => 54,  160 => 53,  147 => 47,  143 => 45,  135 => 43,  130 => 42,  119 => 41,  113 => 40,  107 => 37,  102 => 35,  93 => 31,  87 => 27,  75 => 26,  71 => 24,  67 => 23,  61 => 19,  59 => 18,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/cart.twig", "");
    }
}

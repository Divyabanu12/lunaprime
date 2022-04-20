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

/* opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig */
class __TwigTemplate_9f065ad28d9bdbd796bccbefbdeccef44e7e568d59ad1b02c391101a80a20b6d extends \Twig\Template
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
        echo "<article class=\"ttvleft-right-product-slider\">
\t<div class=\"thumbnail-container\">
\t\t<div class=\"ttvproduct-wrapper\">
\t\t\t<div class=\"ttvproduct-image col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3\">
\t\t\t\t<a href=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 5);
        echo "\" class=\"thumbnail product-thumbnail\">
\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 6);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
        echo "\" data-full-size-image-url=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "smallimage", [], "any", false, false, false, 6);
        echo "\">
\t\t\t\t\t<img class=\"ttvproduct-hover-img\" src=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hoverimage", [], "any", false, false, false, 7);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7);
        echo "\" data-full-size-image-url=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "smallimage", [], "any", false, false, false, 7);
        echo "\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"product-description col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9\">
\t\t\t\t<div class=\"ttvproduct-name\">
\t\t\t\t\t<div class=\"product-title\"><a href=\"";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 12);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 12);
        echo "</a></div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"ttvall-product-star-icon\">
\t\t\t\t\t";
        // line 15
        $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_rating_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig", 15)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 15)]));
        // line 16
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t<div class=\"ttv-product-price\">
\t\t\t\t\t<div class=\"product-price-and-shipping\">
\t\t\t\t\t\t";
            // line 20
            if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 20)) {
                // line 21
                echo "\t\t\t\t\t\t<span class=\"price\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 21);
                echo "</span>
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t<span class=\"regular-price\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 23);
                echo "</span>
\t\t\t\t\t\t<span class=\"price\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 24);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</article>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  104 => 26,  99 => 24,  94 => 23,  88 => 21,  86 => 20,  82 => 18,  80 => 17,  77 => 16,  75 => 15,  67 => 12,  55 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig", "C:\\xampp\\htdocs\\lunaprime\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\extension\\module\\tvcmshelp_leftproduct_design.twig");
    }
}

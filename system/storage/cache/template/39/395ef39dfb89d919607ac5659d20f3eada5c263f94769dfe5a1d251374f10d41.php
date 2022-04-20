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

/* opc_electronic_electron_2501/template/common/menu.twig */
class __TwigTemplate_56f25de31e35f42338e3c6099472959cda08bca16b430f90badfbd2af17f8b2b extends \Twig\Template
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
        echo "<!-- begin module:opc_electronic_electron_2501\\template\\common\\menu.twig -->
<!-- begin D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\menu.twig -->
<div id=\"ttvcmsdesktop-main-menu\">
\t<div class=\"ttvcmsmain-menu-wrapper\">
\t\t";
        // line 5
        if (($context["categories"] ?? null)) {
            // line 6
            echo "\t\t<ul class=\"ttv-header-menu\" id=\"ttv-top-menu\" data-depth=\"0\">
\t\t\t<li class=\"category ttvmain-menu-wrapper ";
            // line 7
            echo ($context["menuhomeactive"] ?? null);
            echo "\">
\t\t\t\t<div class=\"ttvmenu-link-wrapper\"><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "href", [], "any", false, false, false, 8);
            echo "\" data-depth=\"0\" class=\"ttvmenu-link\"><span class=\"ttvmain-menu-text-box\">";
            echo ($context["text_home"] ?? null);
            echo "</span></a></div>
\t\t\t</li>
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "\t\t\t<li class=\"category ttvmain-menu-wrapper ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 11) == ($context["category_id"] ?? null))) {
                        echo " current ";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) {
                        echo " ttv-has-child ";
                    }
                    echo "\">
\t\t\t\t<div class=\"ttvmenu-link-wrapper\">
\t\t\t\t\t<a href=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                    echo "\" class=\"ttvmenu-link\" data-depth=\"0\"><span class=\"ttvmain-menu-text-box\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"ttvmenu-toggle-icon\"><i class=\"fa fa-angle-down ttvhorizontal-menu-drop-down-icon\" aria-hidden=\"true\"></i>\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"ttvmain-menu-dropdown ttvmain-menu-sub-menu ttvmain-menu-mobile-dropdown\">
\t\t\t\t\t";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 18), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "\t\t\t\t\t<ul class=\"ttv-header-menu clearfix\" data-depth=\"1\">
\t\t\t\t\t\t";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 21
                            echo "\t\t\t\t\t\t<li class=\"category ttvmain-menu-wrapper\">
\t\t\t\t\t\t\t<div class=\"ttvmenu-link-wrapper\">
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 23
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                            echo "\" data-depth=\"1\"><span class=\"ttvmain-menu-text-box\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                            echo "</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t<li class=\"category ttvmain-menu-wrapper ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 32) == ($context["category_id"] ?? null))) {
                        echo " current ";
                    }
                    echo "\">
\t\t\t\t<div class=\"ttvmenu-link-wrapper\"><a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                    echo "\" class=\"ttvmenu-link\" data-depth=\"0\"><span class=\"ttvmain-menu-text-box\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</span></a></div>
\t\t\t</li>
\t\t\t";
                }
                // line 35
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t</ul>
\t\t";
        }
        // line 37
        echo " <div class=\"clearfix\"></div>
\t\t<div class=\"ttvmenu-button-wrapper\">
\t\t\t<div class=\"ttvmenu-button\">
\t\t\t\t<span>";
        // line 40
        echo ($context["text_menu"] ?? null);
        echo "</span>
\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- end D:\\xampp\\htdocs\\opencart\\hrx\\hrx_101\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\common\\menu.twig -->
<!-- end module:opc_electronic_electron_2501\\template\\common\\menu.twig -->";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 40,  151 => 37,  147 => 36,  141 => 35,  133 => 33,  126 => 32,  121 => 29,  114 => 27,  102 => 23,  98 => 21,  94 => 20,  91 => 19,  87 => 18,  77 => 13,  65 => 11,  59 => 10,  52 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/menu.twig", "");
    }
}

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

/* opc_electronic_electron_2501/template/product/tvcmcategoryproduct.twig */
class __TwigTemplate_ae0fe7cd29686752b6a7b0d1ac48a979cec0e7d7d957f83fc93ceffc5bd8da0b extends \Twig\Template
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
        if (($context["empty"] ?? null)) {
            // line 2
            echo "\t<div class=\"ttvtabcategory-not-found\">
\t\t<div>";
            // line 3
            echo ($context["empty"] ?? null);
            echo "</div>
\t</div>
";
        } else {
            // line 6
            echo "\t<div class='ttvtabcategory-all-product-content-box'>
\t\t<div class='ttvtabcategory-all-product-slider owl-theme owl-carousel'>
\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " ";
                $this->loadTemplate("opc_electronic_electron_2501/template/extension/module/tvcmshelp_specialproduct_design.twig", "opc_electronic_electron_2501/template/product/tvcmcategoryproduct.twig", 8)->display(twig_array_merge($context, ["product" => $context["product"]]));
                echo " ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t</div>
\t</div>

\t<div class=\"ttvtabcategory-product-pagination\">
\t    <div class=\"ttvtabcategory-product-next-pre-btn\">
\t        <div class=\"ttvtabcategory-product-prev swiper-button-prev ttvcmsprev-btn\"><i class='material-icons'>&#xe314;</i></div>
\t        <div class=\"ttvtabcategory-product-next swiper-button-next ttvcmsnext-btn\"><i class='material-icons'>&#xe315;</i></div>
\t    </div>
\t</div>
";
        }
        // line 19
        echo "

";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/product/tvcmcategoryproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  84 => 9,  52 => 8,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/product/tvcmcategoryproduct.twig", "");
    }
}

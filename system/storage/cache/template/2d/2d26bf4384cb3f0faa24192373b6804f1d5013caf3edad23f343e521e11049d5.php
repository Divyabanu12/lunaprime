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

/* opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig */
class __TwigTemplate_9665d0dbde8201b4c9aa5b3196e534d9224d7eb16cf8a88061515aec5217d4d3 extends \Twig\Template
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
        if (($context["status_left_feature"] ?? null)) {
            // line 2
            echo "<div class=\"ttvcmsleft-featured-product ttvleft-right-penal-all-block ttvall-block-box-shadows\">
\t<div class=\"ttvleft-featured-product\">
\t\t";
            // line 4
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 4)->display(twig_array_merge($context, ["title" => ($context["left_feature_title"] ?? null)]));
            // line 5
            echo "\t\t<div class=\"ttvleft-product-wrapper-info clearfix\">
\t\t\t<div class=\"products ttvleft-product-wrapper\">
\t\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feature_tab_products"] ?? null));
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
                // line 8
                echo "\t\t\t\t";
                $this->loadTemplate("opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 8)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 9
                echo "\t\t\t\t";
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
            // line 10
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 15
        if (($context["status_left_best"] ?? null)) {
            // line 16
            echo "<div class=\"ttvcmsleft-best-seller-product  ttvleft-right-penal-all-block ttvall-block-box-shadows\">
\t<div class=\"ttvleft-best-seller-product\">
\t\t";
            // line 18
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 18)->display(twig_array_merge($context, ["title" => ($context["left_best_title"] ?? null)]));
            // line 19
            echo "\t\t<div class=\"ttvleft-product-wrapper-info clearfix\">
\t\t\t<div class=\"products ttvleft-product-wrapper\">
\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["best_products"] ?? null));
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
                // line 22
                echo "\t\t\t\t";
                $this->loadTemplate("opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 22)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 23
                echo "\t\t\t\t";
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
            // line 24
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 29
        if (($context["status_left_special"] ?? null)) {
            // line 30
            echo "<div class=\"ttvcmsleft-special-product ttvleft-right-penal-all-block ttvall-block-box-shadows\">
\t<div class=\"ttvleft-special-product\">
\t\t";
            // line 32
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 32)->display(twig_array_merge($context, ["title" => ($context["left_special_title"] ?? null)]));
            // line 33
            echo "\t\t<div class=\"ttvleft-product-wrapper-info clearfix\">
\t\t\t<div class=\"products ttvleft-product-wrapper\">
\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["special_products"] ?? null));
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
                // line 36
                echo "\t\t\t\t";
                $this->loadTemplate("opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 36)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 37
                echo "\t\t\t\t";
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
            // line 38
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 43
        if (($context["status_left_new"] ?? null)) {
            // line 44
            echo "<div class=\"ttvcmsleft-new-product  ttvleft-right-penal-all-block ttvall-block-box-shadows\">
\t<div class=\"ttvleft-new-product\">
\t\t";
            // line 46
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 46)->display(twig_array_merge($context, ["title" => ($context["left_new_title"] ?? null)]));
            // line 47
            echo "\t\t<div class=\"ttvleft-product-wrapper-info clearfix\">
\t\t\t<div class=\"products ttvleft-product-wrapper\">
\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
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
                // line 50
                echo "\t\t\t\t";
                $this->loadTemplate("opc_electronic_electron_2501/template/extension/module/tvcmshelp_leftproduct_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", 50)->display(twig_array_merge($context, ["product" => $context["product"]]));
                // line 51
                echo "\t\t\t\t";
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
            // line 52
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 57
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
\tvar mobileViewSize = 991;

\t/*************** Start left Right  Product Toggle in Mobile Size ***************************************************/
\tleftRightProductTitleToggle();
\t\$(window).resize(function() {
\t\t\$('.ttvleft-right-penal-all-block .ttvleft-right-title-toggle, .ttvleft-right-penal-all-block .ttvleft-product-wrapper-info').removeClass('open');
\t\tleftRightProductTitleToggle();
\t});

\tfunction leftRightProductTitleToggle() {
\t\t\$('.ttvleft-right-penal-all-block .ttvleft-right-title-toggle').on('click', function(e) {
\t\t\te.preventDefault();
\t\t\tif (document.body.clientWidth <= mobileViewSize) {
\t\t\t\tif (!\$(this).hasClass('open')) {
\t\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\t\$(this).parent().parent().find('.ttvleft-product-wrapper-info').removeClass('open').stop(false).slideUp(500, \"swing\");
\t\t\t\t} else {
\t\t\t\t\t\$(this).addClass('open');
\t\t\t\t\t\$(this).parent().parent().find('.ttvleft-product-wrapper-info').addClass('open').stop(false).slideDown(500, \"swing\");
\t\t\t\t}
\t\t\t}
\t\t\te.stopPropagation();
\t\t});
\t}
\t/*************** End left Right  Product Toggle in Mobile Size ***************************************************/
});
</script>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 57,  242 => 52,  228 => 51,  225 => 50,  208 => 49,  204 => 47,  202 => 46,  198 => 44,  196 => 43,  189 => 38,  175 => 37,  172 => 36,  155 => 35,  151 => 33,  149 => 32,  145 => 30,  143 => 29,  136 => 24,  122 => 23,  119 => 22,  102 => 21,  98 => 19,  96 => 18,  92 => 16,  90 => 15,  83 => 10,  69 => 9,  66 => 8,  49 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmsleftproduct.twig", "");
    }
}

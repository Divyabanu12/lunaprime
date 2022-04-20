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

/* opc_electronic_electron_2501/template/common/currency.twig */
class __TwigTemplate_514fcd5e37caac39fdca70d6c4278167e9d2c3d69a9af172859463e33cc9297c extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"ttvcmsdesktop-currency-selector\" class=\"ttvcms-header-currency\">
\t<form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"tvcmsform-currency\">
\t\t<div class=\"ttvheader-currency-wrapper\">
\t\t\t<button class=\"btn-unstyle ttv-currency-btn\" data-toggle=\"dropdown\">
\t\t\t\t<span class=\"ttv-currency-span\">";
            // line 6
            echo ($context["config_car_id"] ?? null);
            echo "</span><i class=\"fa fa-angle-down expand-more\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<ul class=\"ttv-currency-dropdown ttv-dropdown\">
\t\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 10
                echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"currency-select\" title=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 11);
                echo "</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t</ul>
\t\t</div>
\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 17
            echo ($context["redirect"] ?? null);
            echo "\" />
\t</form>
</div>
";
        }
        // line 21
        echo "<script type=\"text/javascript\">
// Currency
  \$('#tvcmsform-currency .currency-select').on('click', function(e) {
    e.preventDefault();

    \$('#tvcmsform-currency input[name=\\'code\\']').val(\$(this).attr('title'));

    \$('#tvcmsform-currency').submit();
  });
</script>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  77 => 17,  72 => 14,  61 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/currency.twig", "");
    }
}

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

/* opc_electronic_electron_2501/template/common/language.twig */
class __TwigTemplate_9afc4a41b172704e0ad1efaadfd7c87cf924e3ca35ccda90cc98b59305e0deb4 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"ttvcmsdesktop-language-selector\" class=\"ttvcms-header-language\">
\t<div class=\"ttvheader-language-wrapper\">
\t\t<form action=\"";
            // line 4
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"tvcmsform-language\">
\t\t\t<div class=\"ttvheader-language-btn-wrapper\">
\t\t\t\t<button class=\"btn-unstyle ttv-language-btn\" data-toggle=\"dropdown\">
\t\t\t\t\t<span class=\"ttv-language-span\">";
            // line 7
            echo ($context["confid_l_id"] ?? null);
            echo "</span><i class=\"fa fa-angle-down expand-more\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t\t<ul class=\"ttv-language-dropdown ttv-dropdown\">
\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 11
                echo "\t\t\t\t\t<li><a class=\"language-select\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11);
                echo "\" class=\"dropdown-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 11);
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 16
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
</div>
";
        }
        // line 21
        echo "<script type=\"text/javascript\">
// Language
\t\$('#tvcmsform-language .language-select').on('click', function(e) {
\t\te.preventDefault();
\t\t\$('#tvcmsform-language input[name=\\'code\\']').val(\$(this).attr('title'));
\t\t\$('#tvcmsform-language').submit();
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  75 => 16,  70 => 13,  59 => 11,  55 => 10,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/language.twig", "");
    }
}

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

/* opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig */
class __TwigTemplate_6f7043c494012f3054543e6cbcb8a2b0a82e7530213007d1e0598e364f867053 extends \Twig\Template
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
        echo "<div class=\"ttvleft-right-title-wrapper\">
\t<div class=\"ttvleft-right-title facet-label\">";
        // line 2
        echo ($context["title"] ?? null);
        echo "</div>
\t<a class='ttvleft-right-title-toggle'>
\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t</a>
</div>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/helpfile/tvcmshelp_left_column_title_design.twig", "C:\\xampp\\htdocs\\lunaprime\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\helpfile\\tvcmshelp_left_column_title_design.twig");
    }
}

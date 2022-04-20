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

/* opc_electronic_electron_2501/template/common/home.twig */
class __TwigTemplate_2a6b45c7035dc356b3bdb4a9223941d35a15ef2d65ab8dd6752fb15af147425a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"wrapper\">
\t<div class=\"container  ttv-left-layout\">
\t\t<div class=\"row\">
\t\t\t";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t";
        // line 6
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 7
            echo "\t\t\t";
            $context["class"] = "col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12";
            // line 8
            echo "\t\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 9
            echo "\t\t\t";
            $context["class"] = "col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12";
            // line 10
            echo "\t\t\t";
        } else {
            // line 11
            echo "\t\t\t";
            $context["class"] = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12";
            // line 12
            echo "\t\t\t";
        }
        // line 13
        echo "\t\t\t<div id=\"content-wrapper\" class=\"left-column ";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t<div id=\"content\" class=\"page-home\">
\t\t\t\t\t";
        // line 15
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 18
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</div>
\t<div>
\t\t";
        // line 22
        echo ($context["content_bottom"] ?? null);
        echo "
\t</div>
</div>
";
        // line 25
        echo ($context["footer"] ?? null);
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  87 => 22,  80 => 18,  74 => 15,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/home.twig", "");
    }
}

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

/* opc_electronic_electron_2501/template/helpfile/tvcmshelp_rating_design.twig */
class __TwigTemplate_68bc67a96a57603378dce92e5604d53adbc5d33cdc43fb7f47ab1ccd95477345 extends \Twig\Template
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
        echo "<div class=\"comments_note\">
\t<div class=\"star_content\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "\t\t\t";
            if ((($context["rating"] ?? null) < $context["i"])) {
                echo " <div class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></div>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<div class=\"star star_on\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></div>
\t\t";
            }
            // line 8
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/helpfile/tvcmshelp_rating_design.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  55 => 8,  51 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/helpfile/tvcmshelp_rating_design.twig", "C:\\xampp\\htdocs\\lunaprime\\catalog\\view\\theme\\opc_electronic_electron_2501\\template\\helpfile\\tvcmshelp_rating_design.twig");
    }
}

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

/* opc_electronic_electron_2501/template/extension/module/tvcmsfooterlogo.twig */
class __TwigTemplate_9dff1442cdeb948d18df03a903530fb9e441e0b1e2566fd48406654f0f4a151f extends \Twig\Template
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
        // line 8
        if (($context["status_main_form"] ?? null)) {
            // line 9
            echo "<div class=\"ttvfooter-about-logo-wrapper\">
\t<div class=\"ttvfooter-logo-block\">
\t\t";
            // line 11
            if (($context["status_main_image"] ?? null)) {
                // line 12
                echo "\t\t\t<div class=\"ttvfooter-img-block\">
\t\t\t\t<img src=\"";
                // line 13
                echo ($context["main_footer_img"] ?? null);
                echo "\" alt=\"footerimage\">
\t\t\t</div>
\t\t";
            }
            // line 16
            echo "\t\t";
            if (($context["status_main_short_description"] ?? null)) {
                echo " <div class=\"ttvfooter-logo-desc\">";
                echo ($context["main_footer_short_des"] ?? null);
                echo "</div> ";
            }
            // line 17
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmsfooterlogo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  54 => 16,  48 => 13,  45 => 12,  43 => 11,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmsfooterlogo.twig", "");
    }
}

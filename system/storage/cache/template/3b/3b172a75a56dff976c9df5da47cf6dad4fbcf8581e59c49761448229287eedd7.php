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

/* opc_electronic_electron_2501/template/extension/module/tvcmspaymenticon.twig */
class __TwigTemplate_21cf77f2f11aa2b32a2f0e7b66d21efeaf11f8d6e444dc40e0c0ca9152445cac extends \Twig\Template
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
        // line 15
        echo "<div class=\"ttvfooter-payment-icon-img-block\">
\t";
        // line 16
        if (($context["status_main_form"] ?? null)) {
            // line 17
            echo "\t";
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_maintitle_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmspaymenticon.twig", 17)->display(twig_array_merge($context, ["main_title" => ($context["main_title"] ?? null), "main_short_des" => ($context["main_short_description"] ?? null), "main_des" => ($context["main_description"] ?? null), "main_img" => ($context["main_image"] ?? null)]));
            // line 18
            echo "\t";
        }
        // line 19
        echo "\t<div class=\"ttvfooter-payment-icon-wrapper\">
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paymenticon_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payement_data"]) {
            // line 21
            echo "\t\t<div class=\"ttvfooter-payment-content-block\">
\t\t\t<div class=\"ttvfooter-payment-icon\"><a href=\"";
            // line 22
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["payement_data"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["tvcmspaymenticonmain_link"] ?? null) : null);
            echo "\"><img src=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["payement_data"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["tvcmspaymenticonmain_image"] ?? null) : null);
            echo "\" alt=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["payement_data"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["tvcmspaymenticonsub_title"] ?? null) : null);
            echo "\"></a></div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payement_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmspaymenticon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  58 => 22,  55 => 21,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  40 => 16,  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmspaymenticon.twig", "");
    }
}

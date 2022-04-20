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

/* opc_electronic_electron_2501/template/extension/module/tvcmsbrandlist.twig */
class __TwigTemplate_107c450c1012ac8a99ebe6473edb89e8cbf3a9c1ac505131ca29a4050be41a61 extends \Twig\Template
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
        // line 18
        echo "<div class=\"container-fluid ttvcmsbrandlist-slider\">
\t<div class=\"container ttvbrandlist-slider\">
\t\t";
        // line 20
        if (($context["status_main_form"] ?? null)) {
            // line 21
            echo "\t\t<div class=\"ttvcmsbrandlist-slider-main-title-wrapper\">
\t\t\t";
            // line 22
            $this->loadTemplate("opc_electronic_electron_2501/template/helpfile/tvcmshelp_maintitle_design.twig", "opc_electronic_electron_2501/template/extension/module/tvcmsbrandlist.twig", 22)->display(twig_array_merge($context, ["main_title" => ($context["main_title"] ?? null), "main_short_des" => ($context["main_short_description"] ?? null), "main_des" => ($context["main_description"] ?? null), "main_img" => ($context["main_img"] ?? null)]));
            // line 23
            echo "\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t";
        if (($context["status_record_form"] ?? null)) {
            // line 26
            echo "\t\t<div class=\"ttvbrandlist\">
\t\t\t<div class=\"ttvbrandlist-slider-content-box \">
\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["brandlist_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 29
                echo "\t\t\t\t<div class=\"item ttvbrandlist-slider-wrapper-info ttvall-block-box-shadows\">
\t\t\t\t\t<div class=\"ttvbrand-img-block\">
\t\t\t\t\t\t";
                // line 31
                if (($context["status_link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["data"], "tvcmsbrandlist_link", [], "any", false, false, false, 31);
                    echo "\" title=\"";
                    if (($context["status_title"] ?? null)) {
                        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["data"], "tvcmsbrandlist_lang", [], "any", false, false, false, 31)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null);
                    }
                    echo "\">";
                }
                // line 32
                echo "\t\t\t\t\t\t\t";
                if (($context["status_image"] ?? null)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["data"], "tvcmsbrandlist_img", [], "any", false, false, false, 33);
                    echo "\" alt=\"";
                    if (($context["status_title"] ?? null)) {
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["data"], "tvcmsbrandlist_lang", [], "any", false, false, false, 33)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null);
                    }
                    echo "\">
\t\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t\t";
                if (($context["status_link"] ?? null)) {
                    echo "</a>";
                }
                // line 36
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ttvbrandlist-slider-info-box\">
\t\t\t\t\t\t<div class=\"ttvbrandlist-slider-title\">";
                // line 38
                if (($context["status_title"] ?? null)) {
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["data"], "tvcmsbrandlist_lang", [], "any", false, false, false, 38)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null);
                }
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t</div>
\t\t\t
\t\t</div>
\t\t";
        }
        // line 46
        echo "\t</div>
</div>
<script type=\"text/javascript\">
/****************** Start Brand list Slider Js *******************************************/
\$(document).ready(function() {

\t\$('.ttvbrandlist-slider-prev').click(function(e) {
\t\te.preventDefault();
\t\t\$('.ttvcmsbrandlist-slider .owl-nav .owl-prev').trigger('click');
\t});

\t\$('.ttvbrandlist-slider-next').click(function(e) {
\t\te.preventDefault();
\t\t\$('.ttvcmsbrandlist-slider .owl-nav .owl-next').trigger('click');
\t});

\t\$('.ttvcmsbrandlist-slider .ttvcms-brandlist-pagination-wrapper').insertAfter('.ttvcmsbrandlist-slider .ttvbrandlist-slider-content-box');

});

/****************** End Brand list Slider Js *******************************************/
</script>

<style>
.ttvbrandlist-slider-content-box  {
    
    display: flex;
    flex-wrap: wrap;
    width: 73%;
  
}

.ttvbrandlist {
    padding-left: 24%;
    padding-top: 5%;
}

.ttvbrandlist-slider-wrapper-info {
    margin: 0px 0px;
    border-style: groove;
}

@media only screen and (min-width: 1328px) {
.ttvbrandlist-slider-wrapper-info:last-child{
\t
}
.ttvbrandlist-slider-content-box  {
   
    width: 82%;
  
}

}

</style>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmsbrandlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  111 => 42,  99 => 38,  95 => 36,  90 => 35,  80 => 33,  77 => 32,  67 => 31,  63 => 29,  59 => 28,  55 => 26,  52 => 25,  48 => 23,  46 => 22,  43 => 21,  41 => 20,  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmsbrandlist.twig", "");
    }
}

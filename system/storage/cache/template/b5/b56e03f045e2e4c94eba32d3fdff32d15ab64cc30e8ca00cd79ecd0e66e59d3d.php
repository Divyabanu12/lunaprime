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

/* extension/module/tvcmscategoryproduct_form.twig */
class __TwigTemplate_a5e202a19adb4ebe920cf050c783e167bd75c1647d49c47c374bd97014f03d8e extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-imageslider\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "
    <form action=\"";
        // line 23
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-imageslider\" class=\"form-horizontal\">

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_form"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-statusa";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 31);
        echo "\">";
        echo ($context["column_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tvcmscategoryproduct_status\" id=\"input-tvcmscategoryproduct_status\" class=\"form-control\">
                    ";
        // line 34
        if (($context["tvcmscategoryproduct_status"] ?? null)) {
            // line 35
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 36
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 38
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 39
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 41
        echo "                  </select>      
                </div>
            </div> 
            
             <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-link";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 46);
        echo "\">";
        echo ($context["entry_categoryname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">   
                  <select name=\"tvcmscategoryproduct_categoryselect\" id=\"input-tvcmscategoryproduct_categoryselect\" class=\"form-control\">
                      <option value=\"\">";
        // line 49
        echo ($context["text_select"] ?? null);
        echo "</option>                
                      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categor"]) {
            echo " 
                        <option  ";
            // line 51
            if ((($context["tvcmscategoryproduct_categoryselect"] ?? null) == twig_get_attribute($this->env, $this->source, $context["categor"], "category_id", [], "any", false, false, false, 51))) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["categor"], "category_id", [], "any", false, false, false, 51);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["categor"], "name", [], "any", false, false, false, 51);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                
                  </select>                
                </div>
            </div>
             <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-link";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 57);
        echo "\">";
        echo ($context["entry_noofproduct"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">               
                  <input type=\"text\" name=\"tvcmscategoryproduct_numberofproduct\" value=\"";
        // line 59
        echo ((($context["tvcmscategoryproduct_numberofproduct"] ?? null)) ? (($context["tvcmscategoryproduct_numberofproduct"] ?? null)) : (""));
        echo "\" id=\"input-image_main\" class=\"form-control\"/>
                </div>
            </div>

            <div class=\"form-group ";
        // line 63
        if (($context["image"] ?? null)) {
            echo " ";
        } else {
            echo " hidden ";
        }
        echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-link";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 64);
        echo "\">";
        echo ($context["entry_main_img"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">               
                  <a href=\"\" id=\"thumb-image_main\" data-toggle=\"image\" class=\"img-thumbnail\">
                    <img src=\"";
        // line 67
        echo ($context["sub_img1"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                  </a>
                  <input type=\"hidden\" name=\"tvcmscategoryproduct_img\" value=\"";
        // line 69
        echo ((($context["tvcmscategoryproduct_img"] ?? null)) ? (($context["tvcmscategoryproduct_img"] ?? null)) : (""));
        echo "\" id=\"input-image_main\" class=\"form-controller\"/>
                </div>
            </div>
           
           
          
          <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                ";
        // line 77
        if ((((($context["title"] ?? null) || ($context["category_title"] ?? null)) || ($context["short_description"] ?? null)) || ($context["description"] ?? null))) {
            // line 78
            echo "                  <ul class=\"nav nav-tabs\" id=\"language\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 80
                echo "                    <li><a href=\"#language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 80);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 80);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 80);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 80);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                  </ul>
                ";
        }
        // line 84
        echo "                <div class=\"tab-content\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 85
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "\">
                    ";
            // line 86
            if (($context["title"] ?? null)) {
                // line 87
                echo "                    <div class=\"form-group ";
                if (($context["title"] ?? null)) {
                    echo " ";
                } else {
                    echo " hidden ";
                }
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tvcmscategoryproduct_title";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
                echo "\">";
                echo ($context["column_title"] ?? null);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"tvcmscategoryproduct[";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                echo "][tvcmscategoryproduct_title]\" value=\"";
                echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tvcmscategoryproduct"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tvcmscategoryproduct"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null), "tvcmscategoryproduct_title", [], "any", false, false, false, 90)) : (""));
                echo "\" placeholder=\"";
                echo ($context["column_title"] ?? null);
                echo "\" id=\"input-name";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                echo "\" class=\"form-control\" />

                        <input type=\"hidden\" name=\"tvcmscategoryproduct[";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "][lang]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" placeholder=\"";
                echo ($context["column_title"] ?? null);
                echo "\" id=\"input-name";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
            }
            // line 96
            echo "                     
                      <div class=\"form-group ";
            // line 97
            if (($context["description"] ?? null)) {
                echo " ";
            } else {
                echo " hidden ";
            }
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-tvcmscategoryproductsub_description";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "\">";
            echo ($context["column_des"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"tvcmscategoryproduct[";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "][tvcmscategoryproductsub_description]\" value=\"";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tvcmscategoryproduct"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tvcmscategoryproduct"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null), "tvcmscategoryproductsub_description", [], "any", false, false, false, 100)) : (""));
            echo "\" placeholder=\"";
            echo ($context["column_des"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "</div>
              </div>
          </div>

        </div>
      </div>
    </form>
  </div>

  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
    \$('#language a:first').tab('show');
    \$('#languagew a:first').tab('show');
//--></script></div>
";
        // line 121
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmscategoryproduct_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 121,  352 => 104,  335 => 100,  328 => 98,  320 => 97,  317 => 96,  304 => 92,  293 => 90,  286 => 88,  277 => 87,  275 => 86,  270 => 85,  265 => 84,  261 => 82,  244 => 80,  240 => 79,  237 => 78,  235 => 77,  224 => 69,  217 => 67,  209 => 64,  201 => 63,  194 => 59,  187 => 57,  180 => 52,  166 => 51,  160 => 50,  156 => 49,  148 => 46,  141 => 41,  136 => 39,  131 => 38,  126 => 36,  121 => 35,  119 => 34,  111 => 31,  104 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  53 => 8,  49 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmscategoryproduct_form.twig", "");
    }
}

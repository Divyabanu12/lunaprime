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

/* extension/module/tvcmscategoryslider_list.twig */
class __TwigTemplate_12209430a137ac5c63aa4632ffcfebe627214c3512b03dbce57ec6f24dee7a36 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        ";
        // line 6
        if (($context["status_record_form"] ?? null)) {
            // line 7
            echo "          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_filter"] ?? null);
            echo "\" onclick=\"\$('#filter-cateimageslider').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
          <a href=\"";
            // line 8
            echo ($context["add"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          <button type=\"submit\" form=\"form-cateimageslider\" formaction=\"";
            // line 9
            echo ($context["copy"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_copy"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        ";
        }
        // line 11
        echo "        <button type=\"button\" form=\"form-cateimageslider\" formaction=\"";
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-cateimageslider').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div id=\"growls\" class=\"default\"></div>
    ";
        // line 27
        if (($context["success"] ?? null)) {
            // line 28
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 32
        echo "
    <form action=\"";
        // line 33
        echo ($context["mainaction"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-imageslider\" class=\"form-horizontal\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 36
        echo ($context["text_setting"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 39
        if (($context["status_title"] ?? null)) {
            // line 40
            echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 41
            echo ($context["entry_name"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
            // line 43
            echo ($context["name"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
                ";
            // line 44
            if (($context["error_name"] ?? null)) {
                // line 45
                echo "                <div class=\"text-danger\">";
                echo ($context["error_name"] ?? null);
                echo "</div>
                ";
            }
            // line 47
            echo "              </div>
            </div>
          ";
        }
        // line 50
        echo "          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 51
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 54
        if (($context["status"] ?? null)) {
            // line 55
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 56
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 58
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 59
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 61
        echo "              </select>
            </div>
          </div>
          
        </div>

        ";
        // line 67
        if (($context["status_main_form"] ?? null)) {
            // line 68
            echo "          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
                ";
            // line 70
            if ((((($context["status_main_title"] ?? null) || ($context["status_main_short_description"] ?? null)) || ($context["status_main_description"] ?? null)) || ($context["status_main_image"] ?? null))) {
                // line 71
                echo "                  <ul class=\"nav nav-tabs\" id=\"language\">
                    ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 73
                    echo "                    <li><a href=\"#language";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 73);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 73);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 73);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 73);
                    echo "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                  </ul>
                ";
            }
            // line 77
            echo "              <div class=\"tab-content\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 78
                echo "                <div class=\"tab-pane\" id=\"language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
                echo "\">

                  ";
                // line 80
                if (($context["status_main_title"] ?? null)) {
                    // line 81
                    echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tvcmscategoryslider_main_cat";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
                    echo "\">";
                    echo ($context["entry_main_cate"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"tvcmscategoryslider_main[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
                    echo "][tvcmscategoryslider_main_cat]\" value=\"";
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null), "tvcmscategoryslider_main_cat", [], "any", false, false, false, 84)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_main_cate"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-control\" />
                      </div>
                    </div>
                  ";
                }
                // line 88
                echo "
                  ";
                // line 89
                if (($context["status_main_short_description"] ?? null)) {
                    // line 90
                    echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tvcmscategoryslider_main_short";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                    echo "\">";
                    echo ($context["entry_main_short"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-10\">

                        <input type=\"hidden\" name=\"tvcmscategoryslider_main[";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                    echo "][lang_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                    echo "\" id=\"input-lang_id";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                    echo "\" class=\"form-control\" />

                        <input type=\"text\" name=\"tvcmscategoryslider_main[";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
                    echo "][tvcmscategoryslider_main_short]\" value=\"";
                    echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null), "tvcmscategoryslider_main_short", [], "any", false, false, false, 96)) : (""));
                    echo "\"
                         placeholder=\"";
                    // line 97
                    echo ($context["entry_main_short"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
                    echo "\" class=\"form-control\" />
                      </div>
                    </div>
                  ";
                }
                // line 101
                echo "
                  ";
                // line 102
                if (($context["status_main_description"] ?? null)) {
                    // line 103
                    echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tvcmscategoryslider_main_des";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
                    echo "\">";
                    echo ($context["entry_main_des"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"tvcmscategoryslider_main[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                    echo "][tvcmscategoryslider_main_des]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "tvcmscategoryslider_main_des", [], "any", false, false, false, 106)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_main_des"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-control\" />
                      </div>
                    </div>
                  ";
                }
                // line 110
                echo "
                  ";
                // line 111
                if (($context["status_main_image"] ?? null)) {
                    // line 112
                    echo "                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tvcmscategoryslider_main_img";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
                    echo "\">";
                    echo ($context["entry_main_titimg"] ?? null);
                    echo "</label>
                      <div class=\"col-sm-10\">
                        <a href=\"\" id=\"thumb-image";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                          <img src=\"";
                    // line 116
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["img_1"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116)] ?? null) : null);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" />
                        </a>
                          <input type=\"hidden\" name=\"tvcmscategoryslider_main[";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
                    echo "][tvcmscategoryslider_main_img]\" value=\"";
                    echo (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["tvcmscategoryslider_main"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null), "tvcmscategoryslider_main_img", [], "any", false, false, false, 118)) : (""));
                    echo "\" id=\"input-tvcmscategoryslider_main_img";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
                    echo "\" />
                          ";
                    // line 119
                    if ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_tvcmscategoryslider_main_img"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null)) {
                        // line 120
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_tvcmscategoryslider_main_img"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 122
                    echo "                      </div>
                    </div>                  
                  ";
                }
                // line 124
                echo "            
    
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 131
        echo "        <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-statuss\"></label>
            <div class=\"col-sm-10\">       
              <button type=\"submit\" form=\"form-imageslider\" data-toggle=\"tooltip\" title=\"";
        // line 134
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            </div>
          </div>
      </div>
    </form>
    ";
        // line 139
        if (($context["status_record_form"] ?? null)) {
            // line 140
            echo "      <div class=\"row\">
        <div id=\"filter-cateimageslider\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
            // line 144
            echo ($context["text_filter"] ?? null);
            echo "</h3>
            </div>
            <div class=\"panel-body\">
              ";
            // line 147
            if (($context["status_title"] ?? null)) {
                // line 148
                echo "              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
                // line 149
                echo ($context["column_link"] ?? null);
                echo "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
                // line 150
                echo ($context["filter_name"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["column_link"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
              ";
            }
            // line 153
            echo "              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
            // line 154
            echo ($context["column_status"] ?? null);
            echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
            // line 157
            if ((($context["filter_status"] ?? null) == "1")) {
                // line 158
                echo "                  <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                  ";
            } else {
                // line 160
                echo "                  <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                  ";
            }
            // line 162
            echo "                  ";
            if ((($context["filter_status"] ?? null) == "0")) {
                // line 163
                echo "                    <option value=\"0\" selected=\"selected\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                      ";
            } else {
                // line 165
                echo "                    <option value=\"0\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                  ";
            }
            // line 166
            echo "                    
                </select>
              </div>
              <div class=\"form-group text-right\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
            // line 170
            echo ($context["button_filter"] ?? null);
            echo "</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
            // line 178
            echo ($context["text_list"] ?? null);
            echo "</h3>
            </div>
            <div class=\"panel-body\">
              <form action=\"";
            // line 181
            echo ($context["delete"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cateimageslider\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-hover tvcatimageslider\">
                    <thead>
                      <tr>
                       
                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                        ";
            // line 188
            if (($context["status_image"] ?? null)) {
                echo " <td class=\"text-center\">";
                echo ($context["column_image"] ?? null);
                echo "</td> ";
            }
            // line 189
            echo "
                        ";
            // line 190
            if (($context["status_category_title"] ?? null)) {
                echo "<td class=\"text-left\">";
                echo ($context["column_title"] ?? null);
                echo "</td>";
            }
            // line 191
            echo "
                        ";
            // line 192
            if (($context["status_title"] ?? null)) {
                echo "<td class=\"text-left\">
                          ";
                // line 193
                if ((($context["sort"] ?? null) == "pd.tvcmscategoryslidersub_name")) {
                    // line 194
                    echo "                            <a href=\"";
                    echo ($context["sort_tvcmscategoryslidersub_name"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_link"] ?? null);
                    echo "</a>
                          ";
                } else {
                    // line 195
                    echo " 
                            <a href=\"";
                    // line 196
                    echo ($context["sort_tvcmscategoryslidersub_name"] ?? null);
                    echo "\" >";
                    echo ($context["column_link"] ?? null);
                    echo "</a> 
                          ";
                }
                // line 197
                echo "</td> ";
            }
            // line 198
            echo "
                        ";
            // line 199
            if (($context["status_short_description"] ?? null)) {
                echo "<td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "pd.tvcmscategoryslidersub_des")) {
                    echo " <a href=\"";
                    echo ($context["sort_tvcmscategoryslidersub_des"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_des"] ?? null);
                    echo "</a> ";
                } else {
                    echo " <a href=\"";
                    echo ($context["sort_tvcmscategoryslidersub_des"] ?? null);
                    echo "\">";
                    echo ($context["column_des"] ?? null);
                    echo "</a> ";
                }
                echo "</td>";
            }
            // line 200
            echo "
                        <td class=\"text-left\">";
            // line 201
            if ((($context["sort"] ?? null) == "p.tvcmscategoryslidermain_status")) {
                echo " <a href=\"";
                echo ($context["sort_tvcmscategoryslidermain_status"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_status"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_tvcmscategoryslidermain_status"] ?? null);
                echo "\">";
                echo ($context["column_status"] ?? null);
                echo "</a> ";
            }
            echo "</td>

                        <td class=\"text-left\">";
            // line 203
            echo ($context["column_action"] ?? null);
            echo "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 207
            if (($context["cateimagesliders"] ?? null)) {
                // line 208
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cateimagesliders"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cateimageslider"]) {
                    // line 209
                    echo "                        <tr id=\"recordsArray_";
                    echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "id", [], "any", false, false, false, 209);
                    echo "\">
                          <td class=\"text-center\">";
                    // line 210
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "id", [], "any", false, false, false, 210), ($context["selected"] ?? null))) {
                        // line 211
                        echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "id", [], "any", false, false, false, 211);
                        echo "\" checked=\"checked\" />
                            ";
                    } else {
                        // line 213
                        echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "id", [], "any", false, false, false, 213);
                        echo "\" />
                            ";
                    }
                    // line 214
                    echo "</td>

                           ";
                    // line 216
                    if (($context["status_image"] ?? null)) {
                        echo " <td class=\"text-center\">";
                        if (twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "image", [], "any", false, false, false, 216)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "image", [], "any", false, false, false, 216);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "title", [], "any", false, false, false, 216);
                            echo "\" class=\"img-thumbnail\" /> ";
                        } else {
                            echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                        }
                        echo "</td> ";
                    }
                    // line 217
                    echo "                          
                          ";
                    // line 218
                    if (($context["status_category_title"] ?? null)) {
                        echo " <td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "title", [], "any", false, false, false, 218);
                        echo "</td> ";
                    }
                    // line 219
                    echo "
                          ";
                    // line 220
                    if (($context["status_title"] ?? null)) {
                        echo "<td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "aling", [], "any", false, false, false, 220);
                        echo "</td> ";
                    }
                    // line 221
                    echo "                          
                          ";
                    // line 222
                    if (($context["status_short_description"] ?? null)) {
                        echo " <td class=\"text-left\"> ";
                        echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "des", [], "any", false, false, false, 222);
                        echo " </td> ";
                    }
                    // line 223
                    echo "
                          <td class=\"text-left\">";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "status", [], "any", false, false, false, 224);
                    echo "</td>
                          <td class=\"text-right\">
                            ";
                    // line 226
                    if (($context["status_record_form"] ?? null)) {
                        // line 227
                        echo "                              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["cateimageslider"], "edit", [], "any", false, false, false, 227);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_edit"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                            ";
                    }
                    // line 229
                    echo "                            </td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateimageslider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 232
                echo "                      ";
            } else {
                // line 233
                echo "                    <tr>
                      <td class=\"text-center\" colspan=\"10\">";
                // line 234
                echo ($context["text_no_results"] ?? null);
                echo "</td>
                    </tr>
                    ";
            }
            // line 237
            echo "                      </tbody>                  
                  </table>
                </div>
              </form>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 242
            echo ($context["pagination"] ?? null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 243
            echo ($context["results"] ?? null);
            echo "</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 249
        echo "  
  </div>
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.core.min.js
\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.widget.min.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.mouse.min.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.sortable.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery-ui.js\"></script> 

 
<script type=\"text/javascript\"><!--

\$('#language a:first').tab('show');
\$(document).ready(function(){
  

  function removeTags(){
      setTimeout(function() {
          \$(\".tvcatimageslider-position-update\").remove();
        }, 3000);
    }

  var urll = 'index.php?route=extension/module/tvcmscategoryslider/ajax&user_token=";
        // line 271
        echo ($context["user_token"] ?? null);
        echo "&action=update_position&';

  var obj  = \$(document).find('body');
      
  \$(\".tvcatimageslider tbody\").sortable({
      opacity: 0.6,
      cursor: 'move',
      update: function() {
          var order = \$(this).sortable(\"serialize\");
          var qq = urll + '' + order;
          console.log(qq);
          \$.post(qq, order, function(data) {
            console.log(data);
              var arr_data = data.split('##');

              var result = arr_data[0];

              var notic = 'Position is Updated.';
              if (result == 'right') {
                  var tags = '';

                  tags += '<div id=\"growls\" class=\"alert alert-success alert-dismissible default tvcatimageslider-position-update\"><i class=\"fa fa-check-circle\"></i> '+ notic +'<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>';
                  tags += '</div>';

                  obj.find('#growls').html(tags);
                  removeTags();
              }
          });
      }
  });
});




\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=extension/module/tvcmscategoryslider&user_token=";
        // line 321
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-cateimageslider\\']').on('click', function(e) {
\t\$('#form-cateimageslider').attr('action', \$(this).attr('formaction'));
});
  


//--></script></div>
";
        // line 333
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmscategoryslider_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  845 => 333,  830 => 321,  777 => 271,  753 => 249,  743 => 243,  739 => 242,  732 => 237,  726 => 234,  723 => 233,  720 => 232,  712 => 229,  704 => 227,  702 => 226,  697 => 224,  694 => 223,  688 => 222,  685 => 221,  679 => 220,  676 => 219,  670 => 218,  667 => 217,  653 => 216,  649 => 214,  643 => 213,  637 => 211,  635 => 210,  630 => 209,  625 => 208,  623 => 207,  616 => 203,  597 => 201,  594 => 200,  574 => 199,  571 => 198,  568 => 197,  561 => 196,  558 => 195,  548 => 194,  546 => 193,  542 => 192,  539 => 191,  533 => 190,  530 => 189,  524 => 188,  514 => 181,  508 => 178,  497 => 170,  491 => 166,  485 => 165,  479 => 163,  476 => 162,  470 => 160,  464 => 158,  462 => 157,  456 => 154,  453 => 153,  445 => 150,  441 => 149,  438 => 148,  436 => 147,  430 => 144,  424 => 140,  422 => 139,  414 => 134,  409 => 131,  403 => 127,  394 => 124,  389 => 122,  383 => 120,  381 => 119,  373 => 118,  366 => 116,  362 => 115,  355 => 113,  352 => 112,  350 => 111,  347 => 110,  334 => 106,  327 => 104,  324 => 103,  322 => 102,  319 => 101,  310 => 97,  304 => 96,  295 => 94,  287 => 91,  284 => 90,  282 => 89,  279 => 88,  266 => 84,  259 => 82,  256 => 81,  254 => 80,  248 => 78,  243 => 77,  239 => 75,  222 => 73,  218 => 72,  215 => 71,  213 => 70,  209 => 68,  207 => 67,  199 => 61,  194 => 59,  189 => 58,  184 => 56,  179 => 55,  177 => 54,  171 => 51,  168 => 50,  163 => 47,  157 => 45,  155 => 44,  149 => 43,  144 => 41,  141 => 40,  139 => 39,  133 => 36,  127 => 33,  124 => 32,  116 => 28,  114 => 27,  111 => 26,  103 => 22,  101 => 21,  96 => 18,  85 => 16,  81 => 15,  76 => 13,  66 => 11,  59 => 9,  53 => 8,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmscategoryslider_list.twig", "");
    }
}

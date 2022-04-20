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

/* extension/module/tvcmscategoryproduct_list.twig */
class __TwigTemplate_9e18911a21c646013a9f073e76466ffd7dd4c97fae2eeed2c7b78f9f1a9770ca extends \Twig\Template
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
      ";
        // line 5
        if (($context["record_form"] ?? null)) {
            // line 6
            echo "      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 7
            echo ($context["button_filter"] ?? null);
            echo "\" onclick=\"\$('#filter-imageslider').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
            // line 8
            echo ($context["add"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-tvcmscategoryproduct\" formaction=\"";
            // line 9
            echo ($context["copy"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_copy"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-tvcmscategoryproduct\" formaction=\"";
            // line 10
            echo ($context["delete"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_delete"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo ($context["text_confirm"] ?? null);
            echo "') ? \$('#form-tvcmscategoryproduct').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      ";
        }
        // line 13
        echo "      <h1>";
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
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 40
        echo ($context["entry_namee"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 42
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_namee"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 43
        if (($context["error_name"] ?? null)) {
            // line 44
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 46
        echo "            </div>
          </div>   
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 49
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 52
        if (($context["status"] ?? null)) {
            // line 53
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 54
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 56
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 57
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 59
        echo "              </select>
            </div>
          </div>

          ";
        // line 63
        if (($context["main_form"] ?? null)) {
            // line 64
            echo "            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">
                  <ul class=\"nav nav-tabs\" id=\"languagew\">
                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 68
                echo "                    <li><a href=\"#languagew";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 68);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 68);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 68);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 68);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                  </ul>
                  <div class=\"tab-content\">";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 72
                echo "                    <div class=\"tab-pane\" id=\"languagew";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
                echo "\">
                      ";
                // line 73
                if (($context["main_title"] ?? null)) {
                    // line 74
                    echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-maintitle";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
                    echo "\">";
                    echo ($context["column_main_title"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"tvcmscategoryproduct_main[";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                    echo "][maintitle]\" value=\"";
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null), "maintitle", [], "any", false, false, false, 77)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["column_main_title"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                    echo "\" class=\"form-control\" />
                          </div>
                        </div>
                      ";
                }
                // line 81
                echo "                      ";
                if (($context["main_sub_title"] ?? null)) {
                    // line 82
                    echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-main_short_des";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
                    echo "\">";
                    echo ($context["column_main_short_des"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"tvcmscategoryproduct_main[";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                    echo "][main_short_des]\" value=\"";
                    echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null), "main_short_des", [], "any", false, false, false, 85)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["column_main_short_des"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                    echo "\" class=\"form-control\" />
                          </div>
                        </div>
                      ";
                }
                // line 89
                echo "                      ";
                if (($context["main_description"] ?? null)) {
                    // line 90
                    echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-main_des";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                    echo "\">";
                    echo ($context["entry_main_des"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"tvcmscategoryproduct_main[";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
                    echo "][main_des]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null), "main_des", [], "any", false, false, false, 93)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_main_des"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-control\" />
                          </div>
                        </div>
                      ";
                }
                // line 97
                echo "                      ";
                if (($context["main_image"] ?? null)) {
                    // line 98
                    echo "                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-main_des";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
                    echo "\">";
                    echo ($context["entry_main_img"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                             <a href=\"\" id=\"thumb-image";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                            <img src=\"";
                    // line 102
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["img"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" />
                            </a>
                            <input type=\"hidden\" name=\"tvcmscategoryproduct_main[";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
                    echo "][main_img]\" value=\"";
                    echo (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["tvcmscategoryproduct_main"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null), "main_img", [], "any", false, false, false, 104)) : (""));
                    echo "\" id=\"input-tvcmsimageslidersub_image";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
                    echo "\" />
                          </div>
                        </div>
                      ";
                }
                // line 108
                echo "
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "</div>
                </div>
            </div>
          ";
        }
        // line 114
        echo "
          <div class=\"form-group\"> 
            <div class=\"col-sm-12\">       
              <button type=\"submit\" form=\"form-imageslider\" data-toggle=\"tooltip\" title=\"";
        // line 117
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
    ";
        // line 123
        if (($context["record_form"] ?? null)) {
            // line 124
            echo "      <div class=\"row\">
        <div id=\"filter-imageslider\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
            // line 128
            echo ($context["text_filter"] ?? null);
            echo "</h3>
            </div>
            <div class=\"panel-body\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
            // line 132
            echo ($context["column_title"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
            // line 133
            echo ($context["filter_name"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["column_title"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
              
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
            // line 137
            echo ($context["column_status"] ?? null);
            echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
            // line 140
            if ((($context["filter_status"] ?? null) == "1")) {
                // line 141
                echo "                  <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                  ";
            } else {
                // line 143
                echo "                  <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                  ";
            }
            // line 145
            echo "                  ";
            if ((($context["filter_status"] ?? null) == "0")) {
                // line 146
                echo "                    <option value=\"0\" selected=\"selected\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                      ";
            } else {
                // line 148
                echo "                    <option value=\"0\">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                  ";
            }
            // line 149
            echo "                    
                </select>
              </div>
              <div class=\"form-group text-right\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
            // line 153
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
            // line 161
            echo ($context["text_list"] ?? null);
            echo "</h3>
            </div>
            <div class=\"panel-body\">
              <form action=\"";
            // line 164
            echo ($context["delete"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-tvcmscategoryproduct\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-hover tvimageslider\">
                    <thead>
                      <tr>
                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>                
                        ";
            // line 170
            if (($context["image"] ?? null)) {
                echo "<td class=\"text-left\">";
                echo ($context["entry_main_img"] ?? null);
                echo "</td>";
            }
            // line 171
            echo "



                        ";
            // line 175
            if (($context["title"] ?? null)) {
                echo "<td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "pd.tvcmscategoryproduct_title")) {
                    echo " <a href=\"";
                    echo ($context["sort_tvcmscategoryproduct_title"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_title"] ?? null);
                    echo "</a> ";
                } else {
                    echo " <a href=\"";
                    echo ($context["sort_tvcmscategoryproduct_title"] ?? null);
                    echo "\">";
                    echo ($context["column_title"] ?? null);
                    echo "</a> ";
                }
                echo "</td>";
            }
            // line 176
            echo "
                       
                        
                     
                        ";
            // line 180
            if (($context["description"] ?? null)) {
                echo "<td class=\"text-left\">";
                if ((($context["sort"] ?? null) == "pd.tvcmscategoryproductsub_description")) {
                    echo " <a href=\"";
                    echo ($context["sort_tvcmscategoryproductsub_description"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order"] ?? null));
                    echo "\">";
                    echo ($context["column_des"] ?? null);
                    echo "</a> ";
                } else {
                    echo " <a href=\"";
                    echo ($context["sort_tvcmscategoryproductsub_description"] ?? null);
                    echo "\">";
                    echo ($context["column_des"] ?? null);
                    echo "</a> ";
                }
                echo "</td>";
            }
            // line 181
            echo "
                        <td class=\"text-left\">";
            // line 182
            echo ($context["entry_categoryname"] ?? null);
            echo "</td>
                        <td class=\"text-left\">";
            // line 183
            echo ($context["entry_noofproduct"] ?? null);
            echo "</td>

                        <td class=\"text-left\">";
            // line 185
            if ((($context["sort"] ?? null) == "p.tvcmscategoryproduct_status")) {
                echo " <a href=\"";
                echo ($context["sort_tvcmscategoryproduct_status"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_status"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_tvcmscategoryproduct_status"] ?? null);
                echo "\">";
                echo ($context["column_status"] ?? null);
                echo "</a> ";
            }
            echo "</td>

                        <td class=\"text-left\">";
            // line 187
            echo ($context["column_action"] ?? null);
            echo "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 191
            if (($context["imagesliders"] ?? null)) {
                // line 192
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["imagesliders"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["imageslider"]) {
                    // line 193
                    echo "                        <tr id=\"recordsArray_";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 193);
                    echo "\">
                          <td class=\"text-center\">";
                    // line 194
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 194), ($context["selected"] ?? null))) {
                        // line 195
                        echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 195);
                        echo "\" checked=\"checked\" />
                            ";
                    } else {
                        // line 197
                        echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 197);
                        echo "\" />
                            ";
                    }
                    // line 198
                    echo "</td>             
                          ";
                    // line 199
                    if (($context["image"] ?? null)) {
                        echo "<td class=\"text-left\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "img1", [], "any", false, false, false, 199);
                        echo "\"></td>";
                    }
                    // line 200
                    echo "                          ";
                    if (($context["title"] ?? null)) {
                        echo "<td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "title", [], "any", false, false, false, 200);
                        echo "</td>";
                    }
                    // line 201
                    echo "                          ";
                    if (($context["description"] ?? null)) {
                        echo "<td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "des", [], "any", false, false, false, 201);
                        echo "</td>";
                    }
                    // line 202
                    echo "                          <td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "categoryselect", [], "any", false, false, false, 202);
                    echo "</td>
                          <td class=\"text-left\">";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "totalproduct", [], "any", false, false, false, 203);
                    echo "</td>
                          <td class=\"text-left\">";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "status", [], "any", false, false, false, 204);
                    echo "</td>
                          <td class=\"text-right\"><a href=\"";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "edit", [], "any", false, false, false, 205);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageslider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                      ";
            } else {
                // line 209
                echo "                    <tr>
                      <td class=\"text-center\" colspan=\"10\">";
                // line 210
                echo ($context["text_no_results"] ?? null);
                echo "</td>
                    </tr>
                    ";
            }
            // line 213
            echo "                      </tbody>                  
                  </table>
                  
                </div>
              </form>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 219
            echo ($context["pagination"] ?? null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 220
            echo ($context["results"] ?? null);
            echo "</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 227
        echo "  </div>
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.core.min.js
\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.widget.min.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.mouse.min.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.sortable.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery-ui.js\"></script> 

  <script type=\"text/javascript\"><!--
    \$('#languagew a:first').tab('show');

\$(document).ready(function(){
  

  function removeTags(){
      setTimeout(function() {
          \$(\".tvimageslider-position-update\").remove();
        }, 3000);
    }

  var urll = 'index.php?route=extension/module/tvcmscategoryproduct/ajax&user_token=";
        // line 247
        echo ($context["user_token"] ?? null);
        echo "&action=update_position&';

  var obj  = \$(document).find('body');
      
  \$(\".tvimageslider tbody\").sortable({
      opacity: 0.6,
      cursor: 'move',
      update: function() {
          var order = \$(this).sortable(\"serialize\");
          var qq = urll + '' + order;
          console.log(qq);
          \$.post(qq, order, function(data) {
              var arr_data = data.split('##');

              var result = arr_data[0];

              var notic = 'Position is Updated.';
              if (result == 'right') {
                  var tags = '';

                  tags += '<div id=\"growls\" class=\"alert alert-success alert-dismissible default tvimageslider-position-update\"><i class=\"fa fa-check-circle\"></i> '+ notic +'<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>';
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

\tlocation = 'index.php?route=extension/module/tvcmscategoryproduct&user_token=";
        // line 296
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-tvcmscategoryproduct\\']').on('click', function(e) {
\t\$('#form-tvcmscategoryproduct').attr('action', \$(this).attr('formaction'));
});
  


//--></script></div>
";
        // line 308
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmscategoryproduct_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 308,  751 => 296,  699 => 247,  677 => 227,  667 => 220,  663 => 219,  655 => 213,  649 => 210,  646 => 209,  643 => 208,  632 => 205,  628 => 204,  624 => 203,  619 => 202,  612 => 201,  605 => 200,  599 => 199,  596 => 198,  590 => 197,  584 => 195,  582 => 194,  577 => 193,  572 => 192,  570 => 191,  563 => 187,  544 => 185,  539 => 183,  535 => 182,  532 => 181,  512 => 180,  506 => 176,  486 => 175,  480 => 171,  474 => 170,  465 => 164,  459 => 161,  448 => 153,  442 => 149,  436 => 148,  430 => 146,  427 => 145,  421 => 143,  415 => 141,  413 => 140,  407 => 137,  398 => 133,  394 => 132,  387 => 128,  381 => 124,  379 => 123,  370 => 117,  365 => 114,  359 => 110,  351 => 108,  340 => 104,  333 => 102,  329 => 101,  322 => 99,  319 => 98,  316 => 97,  303 => 93,  296 => 91,  293 => 90,  290 => 89,  277 => 85,  270 => 83,  267 => 82,  264 => 81,  251 => 77,  244 => 75,  241 => 74,  239 => 73,  234 => 72,  230 => 71,  227 => 70,  210 => 68,  206 => 67,  201 => 64,  199 => 63,  193 => 59,  188 => 57,  183 => 56,  178 => 54,  173 => 53,  171 => 52,  165 => 49,  160 => 46,  154 => 44,  152 => 43,  146 => 42,  141 => 40,  134 => 36,  128 => 33,  125 => 32,  117 => 28,  115 => 27,  112 => 26,  104 => 22,  102 => 21,  97 => 18,  86 => 16,  82 => 15,  76 => 13,  66 => 10,  60 => 9,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmscategoryproduct_list.twig", "");
    }
}

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

/* extension/module/tvcmsbanners.twig */
class __TwigTemplate_d313d1795d9cff206901b24fca8c80fc77f57cc1fdc8076c5aebbeb972aa8a74 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
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
        echo "    <div id=\"growls\" class=\"default\"></div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 31
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 34
        if (($context["status"] ?? null)) {
            // line 35
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 36
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 38
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 39
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 41
        echo "              </select>
            </div>         
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 45
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 47
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 48
        if (($context["error_name"] ?? null)) {
            // line 49
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 51
        echo "            </div>
          </div>
          ";
        // line 53
        if (($context["status_main_form"] ?? null)) {
            // line 54
            echo "            <div class=\"form-group\">
              <center><h1>";
            // line 55
            echo ($context["text_main"] ?? null);
            echo "</h1></center>
            </div>

            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                  <ul class=\"nav nav-tabs\" id=\"language\">
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 62
                echo "                    <li><a href=\"#language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 62);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 62);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 62);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 62);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                  </ul>
                  <div class=\"tab-content\">";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 66
                echo "                    <div class=\"tab-pane\" id=\"language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
                echo "\">
                        ";
                // line 67
                if (($context["status_main_title"] ?? null)) {
                    // line 68
                    echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-title";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
                    echo "\">";
                    echo ($context["entry_main_title"] ?? null);
                    echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"tvcmsbanners_main[";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
                    echo "][title]\" value=\"";
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null), "title", [], "any", false, false, false, 71)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_main_title"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
                    echo "\" class=\"form-control\" />
                            </div>
                          </div>
                        ";
                }
                // line 75
                echo "                        ";
                if (($context["status_main_description"] ?? null)) {
                    // line 76
                    echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-des";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                    echo "\">";
                    echo ($context["entry_des"] ?? null);
                    echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"tvcmsbanners_main[";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
                    echo "][des]\" value=\"";
                    echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null), "des", [], "any", false, false, false, 79)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_des"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
                    echo "\" class=\"form-control\" />
                            </div>
                          </div>
                        ";
                }
                // line 83
                echo "                        ";
                if (($context["status_main_short_description"] ?? null)) {
                    // line 84
                    echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-short";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                    echo "\">";
                    echo ($context["entry_main_des"] ?? null);
                    echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"tvcmsbanners_main[";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                    echo "][short]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null), "short", [], "any", false, false, false, 87)) : (""));
                    echo "\"
                               placeholder=\"";
                    // line 88
                    echo ($context["entry_main_des"] ?? null);
                    echo "\" id=\"input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
                    echo "\" class=\"form-control\" />
                            </div>    
                          </div>
                        ";
                }
                // line 92
                echo "                        ";
                if (($context["status_main_image"] ?? null)) {
                    // line 93
                    echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-tvcmsbanners_main_short";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                    echo "\">";
                    echo ($context["entry_main_ban"] ?? null);
                    echo "</label>
                            <div class=\"col-sm-10\">
                              <a href=\"\" id=\"thumb-image";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                              <img src=\"";
                    // line 97
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["img"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" />
                              </a>
                              <input type=\"hidden\" name=\"tvcmsbanners_main[";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
                    echo "][img]\" value=\"";
                    echo (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["tvcmsbanners_main"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null), "img", [], "any", false, false, false, 99)) : (""));
                    echo "\" id=\"input-tvcmsimageslidersub_image";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
                    echo "\" />
                            </div>
                          </div>
                        ";
                }
                // line 103
                echo "                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                  </div>
              </div>
            </div>
          ";
        }
        // line 109
        echo "          
          ";
        // line 110
        if (($context["status_record_form"] ?? null)) {
            // line 111
            echo "            <div class=\"form-group\">
              <center><h1>";
            // line 112
            echo ($context["entry_main_ban"] ?? null);
            echo "</h1></center>
            </div>

            <div class=\"table-responsive\">
              <table id=\"special\" class=\"table table-bordered table-hover tvcmsbanners\">
                <thead>
                  <tr>
                    ";
            // line 119
            if (($context["status_title"] ?? null)) {
                echo "<td class=\"text-left\">";
                echo ($context["entry_title"] ?? null);
                echo "</td>";
            }
            // line 120
            echo "                    ";
            if (($context["status_description"] ?? null)) {
                echo "<td class=\"text-left\">";
                echo ($context["entry_des"] ?? null);
                echo "</td>";
            }
            // line 121
            echo "                    ";
            if (($context["status_short_description"] ?? null)) {
                echo "<td class=\"text-center\">";
                echo ($context["entry_short"] ?? null);
                echo "</td>";
            }
            // line 122
            echo "                    <td class=\"text-center\">";
            echo ($context["entry_record_btncaption"] ?? null);
            echo "</td>

                    ";
            // line 124
            if (($context["status_image"] ?? null)) {
                echo "<td class=\"text-left\">";
                echo ($context["entry_image"] ?? null);
                echo "</td>";
            }
            // line 125
            echo "                    ";
            if (($context["status_link"] ?? null)) {
                echo "<td class=\"text-left\">";
                echo ($context["entry_link"] ?? null);
                echo "</td>";
            }
            // line 126
            echo "                    <td class=\"text-left\">";
            echo ($context["entry_grid"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 127
            echo ($context["entry_height"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 128
            echo ($context["entry_width"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 129
            echo ($context["entry_status"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 130
            echo ($context["entry_sort"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 131
            echo ($context["entry_action"] ?? null);
            echo "</td>
                  </tr>
                </thead>
                 <tbody>
                ";
            // line 135
            $context["tvcmsbanners_row"] = 0;
            // line 136
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tvcmsbanners_form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tvcmsbanners"]) {
                echo "     
                <tr id=\"recordsArray_";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_id", [], "any", false, false, false, 137);
                echo "\" class=\"special-row";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "\">

                  ";
                // line 139
                if (($context["status_title"] ?? null)) {
                    // line 140
                    echo "                    <td class=\"text-left\">
                      ";
                    // line 141
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 142
                        echo "                          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 142);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 142);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 142);
                        echo "\" /></span>
                            <input type=\"text\" name=\"tvcmsbanners_form[";
                        // line 143
                        echo ($context["tvcmsbanners_row"] ?? null);
                        echo "][language][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143);
                        echo "][title]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "language", [], "any", false, false, false, 143)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143)] ?? null) : null), "title", [], "any", false, false, false, 143);
                        echo "\" placeholder=\"";
                        echo ($context["entry_title"] ?? null);
                        echo "\" class=\"form-control\" />
                          </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                    </td>
                  ";
                }
                // line 148
                echo "                  ";
                if (($context["status_description"] ?? null)) {
                    // line 149
                    echo "                    <td class=\"text-left\">
                      ";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 151
                        echo "                          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 151);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 151);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 151);
                        echo "\" /></span>
                            <input type=\"text\" name=\"tvcmsbanners_form[";
                        // line 152
                        echo ($context["tvcmsbanners_row"] ?? null);
                        echo "][language][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                        echo "][des]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "language", [], "any", false, false, false, 152)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null), "des", [], "any", false, false, false, 152);
                        echo "\" placeholder=\"";
                        echo ($context["entry_title"] ?? null);
                        echo "\" class=\"form-control\" />
                          </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "                    </td>
                  ";
                }
                // line 157
                echo "                  ";
                if (($context["status_short_description"] ?? null)) {
                    // line 158
                    echo "                    <td class=\"text-left\">
                        ";
                    // line 159
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 160
                        echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 160);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 160);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 160);
                        echo "\" /></span>
                              <input type=\"text\" name=\"tvcmsbanners_form[";
                        // line 161
                        echo ($context["tvcmsbanners_row"] ?? null);
                        echo "][language][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161);
                        echo "][short]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "language", [], "any", false, false, false, 161)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161)] ?? null) : null), "short", [], "any", false, false, false, 161);
                        echo "\" placeholder=\"";
                        echo ($context["entry_title"] ?? null);
                        echo "\" class=\"form-control\" />
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 164
                    echo "                     </td>
                  ";
                }
                // line 166
                echo "                  <td class=\"text-left\">
                              <label class=\"radio-inline\">
                                <input type=\"radio\"  ";
                // line 168
                if ((twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "btncap", [], "any", false, false, false, 168) == "ttv-banner-contant-left")) {
                    echo " checked=\"checked\" ";
                }
                echo " name=\"tvcmsbanners_form[";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][btncap]\"  value=\"ttv-banner-contant-left\"/>
                                ";
                // line 169
                echo ($context["text_left"] ?? null);
                echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" ";
                // line 172
                if ((twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "btncap", [], "any", false, false, false, 172) == "ttv-banner-contant-center")) {
                    echo " checked=\"checked\" ";
                }
                echo " name=\"tvcmsbanners_form[";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][btncap]\" value=\"ttv-banner-contant-center\"/>
                                ";
                // line 173
                echo ($context["text_center"] ?? null);
                echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" ";
                // line 176
                if ((twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "btncap", [], "any", false, false, false, 176) == "ttv-banner-contant-right")) {
                    echo " checked=\"checked\" ";
                }
                echo " name=\"tvcmsbanners_form[";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][btncap]\" value=\"ttv-banner-contant-right\"/>
                                ";
                // line 177
                echo ($context["text_right"] ?? null);
                echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" ";
                // line 180
                if ((twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "btncap", [], "any", false, false, false, 180) == "ttv-banner-contant-none")) {
                    echo " checked=\"checked\" ";
                }
                echo " name=\"tvcmsbanners_form[";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][btncap]\" value=\"ttv-banner-contant-none\"/>
                                ";
                // line 181
                echo ($context["text_hide"] ?? null);
                echo "
                              </label>
               </td>
                  ";
                // line 184
                if (($context["status_image"] ?? null)) {
                    // line 185
                    echo "                      <td class=\"text-center\">
                        <a href=\"\" id=\"thumb-image";
                    // line 186
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "form_image", [], "any", false, false, false, 186);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
                        <input type=\"hidden\" name=\"tvcmsbanners_form[";
                    // line 187
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "][tvcmsbanners_img]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_img", [], "any", false, false, false, 187);
                    echo "\" id=\"input-image";
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_image"] ?? null);
                    echo "\" />
                        ";
                    // line 188
                    if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["tvcmsbanners_row"] ?? null)] ?? null) : null)) {
                        // line 189
                        echo "                          <div class=\"text-danger\">";
                        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["tvcmsbanners_row"] ?? null)] ?? null) : null);
                        echo "</div>
                        ";
                    }
                    // line 191
                    echo "
                      </td>
                  ";
                }
                // line 194
                echo "                  ";
                if (($context["status_link"] ?? null)) {
                    // line 195
                    echo "                    <td class=\"text-right\">
                      <input type=\"text\" name=\"tvcmsbanners_form[";
                    // line 196
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "][tvcmsbanners_link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_link", [], "any", false, false, false, 196);
                    echo "\" placeholder=\"";
                    echo ($context["entry_priority"] ?? null);
                    echo "\" class=\"form-control\" />
                    </td>
                  ";
                }
                // line 199
                echo "                  
                      <td class=\"text-center\">
                        <select name=\"tvcmsbanners_form[";
                // line 201
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][tvcmsbanners_grid]\" class=\"form-control\">
                          ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 203
                    echo "                            <option ";
                    if (($context["i"] == twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_grid", [], "any", false, false, false, 203))) {
                        echo " selected=\"selected\" ";
                    }
                    echo "value=\"";
                    echo $context["i"];
                    echo "\">";
                    echo $context["i"];
                    echo "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "                        </select>
                      </td>
                      <td class=\"text-center\">
                        <input type=\"text\" name=\"tvcmsbanners_form[";
                // line 208
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][tvcmsbanners_height]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_height", [], "any", false, false, false, 208);
                echo "\" id=\"input-image";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_image"] ?? null);
                echo "\" />
                      </td>
                      <td class=\"text-center\">
                        <input type=\"text\" name=\"tvcmsbanners_form[";
                // line 211
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][tvcmsbanners_width]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_width", [], "any", false, false, false, 211);
                echo "\" id=\"input-image";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_image"] ?? null);
                echo "\" />
                      </td>

                      <td class=\"text-left\">                      
                        <label class=\"radio-inline\"> ";
                // line 215
                if (twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_status", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                        <input type=\"radio\" name=\"tvcmsbanners_form[";
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "][tvcmsbanners_status]\" value=\"1\" checked=\"checked\" />
                        ";
                    // line 217
                    echo ($context["text_yes"] ?? null);
                    echo "
                        ";
                } else {
                    // line 219
                    echo "                        <input type=\"radio\" name=\"tvcmsbanners_form[";
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "][tvcmsbanners_status]\" value=\"1\" />
                        ";
                    // line 220
                    echo ($context["text_yes"] ?? null);
                    echo "
                        ";
                }
                // line 221
                echo " </label>
                        <label class=\"radio-inline\"> ";
                // line 222
                if ( !twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_status", [], "any", false, false, false, 222)) {
                    // line 223
                    echo "                        <input type=\"radio\" name=\"tvcmsbanners_form[";
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "][tvcmsbanners_status]\" value=\"0\" checked=\"checked\" />
                        ";
                    // line 224
                    echo ($context["text_no"] ?? null);
                    echo "
                        ";
                } else {
                    // line 226
                    echo "                        <input type=\"radio\" name=\"tvcmsbanners_form[";
                    echo ($context["tvcmsbanners_row"] ?? null);
                    echo "][tvcmsbanners_status]\" value=\"0\" />
                        ";
                    // line 227
                    echo ($context["text_no"] ?? null);
                    echo "
                        ";
                }
                // line 228
                echo " </label>
                      </td>
                      <td class=\"text-center\">
                        <input type=\"text\" name=\"tvcmsbanners_form[";
                // line 231
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "][tvcmsbanners_sort]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tvcmsbanners"], "tvcmsbanners_sort", [], "any", false, false, false, 231);
                echo "\" id=\"input-image";
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_sort"] ?? null);
                echo "\" />
                      </td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('.special-row";
                // line 233
                echo ($context["tvcmsbanners_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
                // line 235
                $context["tvcmsbanners_row"] = (($context["tvcmsbanners_row"] ?? null) + 1);
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvcmsbanners'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                  </tbody>
                
                <tfoot>
                  <tr>
                    <td colspan=\"11\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addrow();\" data-toggle=\"tooltip\" title=\"";
            // line 242
            echo ($context["button_special_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>       
              </table>
            </div>
          ";
        }
        // line 248
        echo "        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.core.min.js
\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.widget.min.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.ui.mouse.min.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery.sortable.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/themewebvolty/tvcmsjquery-ui.js\"></script> 

<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
var tvcmsbanners_row = ";
        // line 263
        echo ($context["tvcmsbanners_row"] ?? null);
        echo ";
function addrow() {
    html  = '<tr class=\"special-row' + tvcmsbanners_row + '\">';
    
    ";
        // line 267
        if (($context["status_title"] ?? null)) {
            // line 268
            echo "      html += '  <td class=\"text-left\">';
          ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 270
                echo "          html += '       <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 270);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 270);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 270);
                echo "\" /></span>\\
                              <input type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][language][";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 271);
                echo "][title]\" value=\"\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />\\
                            </div>';
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "          html += ' </td>';
    ";
        }
        // line 276
        echo "    ";
        if (($context["status_description"] ?? null)) {
            // line 277
            echo "          html += '  <td class=\"text-left\">';
          ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 279
                echo "          html += '       <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 279);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 279);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 279);
                echo "\" /></span>\\
                              <input type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][language][";
                // line 280
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 280);
                echo "][des]\" value=\"\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />\\
                            </div>';
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "          html += ' </td>';
    ";
        }
        // line 285
        echo "
    ";
        // line 286
        if (($context["status_short_description"] ?? null)) {
            // line 287
            echo "      html += '  <td class=\"text-left\">';
          ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 289
                echo "          html += '       <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 289);
                echo "\" /></span>\\
                              <input type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][language][";
                // line 290
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 290);
                echo "][short]\" value=\"\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />\\
                            </div>';
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "          html += ' </td>';
    ";
        }
        // line 295
        echo "           html += '  <td class=\"text-left\">\\
                              <label class=\"radio-inline\">\\
                                <input type=\"radio\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][btncap]\"  value=\"ttv-banner-contant-left\"/>\\
                                ";
        // line 298
        echo ($context["text_left"] ?? null);
        echo "\\
                              </label>\\
                              <label class=\"radio-inline\">\\
                                <input type=\"radio\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][btncap]\" value=\"ttv-banner-contant-center\"/>\\
                                ";
        // line 302
        echo ($context["text_center"] ?? null);
        echo "\\
                              </label>\\
                              <label class=\"radio-inline\">\\
                                <input type=\"radio\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][btncap]\" value=\"ttv-banner-contant-right\"/>\\
                                ";
        // line 306
        echo ($context["text_right"] ?? null);
        echo "\\
                              </label>\\
                              <label class=\"radio-inline\">\\
                                <input type=\"radio\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][btncap]\" value=\"ttv-banner-contant-none\"/>\\
                                ";
        // line 310
        echo ($context["text_hide"] ?? null);
        echo "\\
                    </label> </td>';

    ";
        // line 313
        if (($context["status_image"] ?? null)) {
            // line 314
            echo "      html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + tvcmsbanners_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a><input type=\"hidden\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_img]\" value=\"\" id=\"input-image' + tvcmsbanners_row + '\" /></td>';
      ";
        }
        // line 316
        echo "    ";
        if (($context["status_link"] ?? null)) {
            // line 317
            echo "      html += '  <td class=\"text-right\"><input type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_link]\" value=\"\" placeholder=\"";
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control\" /></td>';
    ";
        }
        // line 319
        echo "

      html += '  <td class=\"text-center\"><select name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_grid]\" class=\"form-control\">";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<option ";
            if (($context["i"] == twig_get_attribute($this->env, $this->source, ($context["tvcmsbanners_form"] ?? null), "tvcmsbanners_grid", [], "any", false, false, false, 321))) {
                echo " selected=\"selected\" ";
            }
            echo "value=\"";
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
      html += '  <td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_height]\" value=\"\" id=\"input-image' + tvcmsbanners_row + '\" placeholder=\"";
        // line 322
        echo ($context["entry_height"] ?? null);
        echo "\" /></td>';
      html += '  <td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_width]\" value=\"\" id=\"input-image' + tvcmsbanners_row + '\" placeholder=\"";
        // line 323
        echo ($context["entry_width"] ?? null);
        echo "\" /></td>';
   
      html += '  <td class=\"text-left\"><label class=\"radio-inline\"><input type=\"radio\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_status]\" value=\"1\" checked=\"checked\" /> ";
        // line 325
        echo ($context["text_yes"] ?? null);
        echo " </label><label class=\"radio-inline\"><input type=\"radio\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_status]\" value=\"1\" /> ";
        echo ($context["text_no"] ?? null);
        echo "</label></td>';
     html += '  <td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"tvcmsbanners_form[' + tvcmsbanners_row + '][tvcmsbanners_sort]\" value=\"\" id=\"input-image' + tvcmsbanners_row + '\" placeholder=\"";
        // line 326
        echo ($context["entry_sort"] ?? null);
        echo "\" /></td>';
    html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'.special-row' + tvcmsbanners_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 327
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';
    \$('#special tbody').append(html);
    tvcmsbanners_row++;
}
//--></script> 

";
        // line 334
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmsbanners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1047 => 334,  1037 => 327,  1033 => 326,  1027 => 325,  1022 => 323,  1018 => 322,  999 => 321,  995 => 319,  989 => 317,  986 => 316,  978 => 314,  976 => 313,  970 => 310,  963 => 306,  956 => 302,  949 => 298,  944 => 295,  940 => 293,  929 => 290,  920 => 289,  916 => 288,  913 => 287,  911 => 286,  908 => 285,  904 => 283,  893 => 280,  884 => 279,  880 => 278,  877 => 277,  874 => 276,  870 => 274,  859 => 271,  850 => 270,  846 => 269,  843 => 268,  841 => 267,  834 => 263,  817 => 248,  808 => 242,  801 => 237,  795 => 236,  793 => 235,  786 => 233,  775 => 231,  770 => 228,  765 => 227,  760 => 226,  755 => 224,  750 => 223,  748 => 222,  745 => 221,  740 => 220,  735 => 219,  730 => 217,  725 => 216,  723 => 215,  710 => 211,  698 => 208,  693 => 205,  678 => 203,  674 => 202,  670 => 201,  666 => 199,  656 => 196,  653 => 195,  650 => 194,  645 => 191,  639 => 189,  637 => 188,  627 => 187,  619 => 186,  616 => 185,  614 => 184,  608 => 181,  600 => 180,  594 => 177,  586 => 176,  580 => 173,  572 => 172,  566 => 169,  558 => 168,  554 => 166,  550 => 164,  535 => 161,  526 => 160,  522 => 159,  519 => 158,  516 => 157,  512 => 155,  497 => 152,  488 => 151,  484 => 150,  481 => 149,  478 => 148,  474 => 146,  459 => 143,  450 => 142,  446 => 141,  443 => 140,  441 => 139,  434 => 137,  427 => 136,  425 => 135,  418 => 131,  414 => 130,  410 => 129,  406 => 128,  402 => 127,  397 => 126,  390 => 125,  384 => 124,  378 => 122,  371 => 121,  364 => 120,  358 => 119,  348 => 112,  345 => 111,  343 => 110,  340 => 109,  334 => 105,  327 => 103,  316 => 99,  309 => 97,  305 => 96,  298 => 94,  295 => 93,  292 => 92,  283 => 88,  277 => 87,  270 => 85,  267 => 84,  264 => 83,  251 => 79,  244 => 77,  241 => 76,  238 => 75,  225 => 71,  218 => 69,  215 => 68,  213 => 67,  208 => 66,  204 => 65,  201 => 64,  184 => 62,  180 => 61,  171 => 55,  168 => 54,  166 => 53,  162 => 51,  156 => 49,  154 => 48,  148 => 47,  143 => 45,  137 => 41,  132 => 39,  127 => 38,  122 => 36,  117 => 35,  115 => 34,  109 => 31,  103 => 28,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmsbanners.twig", "");
    }
}

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

/* extension/module/tvcmsleftproduct.twig */
class __TwigTemplate_85672e61c0d01be923b9cedff43bdeaaf80dad1ee2e2818bddf6d262380c542b extends \Twig\Template
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
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 28
        echo ($context["entry_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"name\" value=\"";
        // line 30
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            ";
        // line 31
        if (($context["error_name"] ?? null)) {
            // line 32
            echo "            <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
            ";
        }
        // line 34
        echo "          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 37
        echo ($context["entry_status"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status\" id=\"input-status\" class=\"form-control\">
              ";
        // line 40
        if (($context["status"] ?? null)) {
            // line 41
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 42
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 44
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 45
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 47
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-left_feature_title\">";
        // line 51
        echo ($context["entry_left_featured_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"left_feature_title\" value=\"";
        // line 53
        echo ($context["left_feature_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["left_feature_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_left_feature\">";
        // line 57
        echo ($context["entry_left_featured"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_left_feature\" id=\"input-status_left_feature\" class=\"form-control\">
              ";
        // line 60
        if (($context["status_left_feature"] ?? null)) {
            // line 61
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 62
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 64
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 67
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-left_new_title\">";
        // line 71
        echo ($context["entry_left_new_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"left_new_title\" value=\"";
        // line 73
        echo ($context["left_new_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["left_new_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_left_new\">";
        // line 77
        echo ($context["entry_left_new"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_left_new\" id=\"input-status_left_new\" class=\"form-control\">
              ";
        // line 80
        if (($context["status_left_new"] ?? null)) {
            // line 81
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 82
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 84
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 85
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 87
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-left_best_title\">";
        // line 91
        echo ($context["entry_left_best_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"left_best_title\" value=\"";
        // line 93
        echo ($context["left_best_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["left_best_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_left_best\">";
        // line 97
        echo ($context["entry_left_best"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_left_best\" id=\"input-status_left_best\" class=\"form-control\">
              ";
        // line 100
        if (($context["status_left_best"] ?? null)) {
            // line 101
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 102
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 104
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 105
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 107
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-left_special_title\">";
        // line 111
        echo ($context["entry_left_special_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"left_special_title\" value=\"";
        // line 113
        echo ($context["left_special_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["left_special_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_left_special\">";
        // line 117
        echo ($context["entry_left_special"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_left_special\" id=\"input-status_left_special\" class=\"form-control\">
              ";
        // line 120
        if (($context["status_left_special"] ?? null)) {
            // line 121
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 122
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 124
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 125
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 127
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-right_feature_title\">";
        // line 131
        echo ($context["entry_right_featured_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"right_feature_title\" value=\"";
        // line 133
        echo ($context["right_feature_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["right_feature_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_right_feature\">";
        // line 137
        echo ($context["entry_right_featured"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_right_feature\" id=\"input-status_right_feature\" class=\"form-control\">
              ";
        // line 140
        if (($context["status_right_feature"] ?? null)) {
            // line 141
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 142
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 144
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 145
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 147
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-right_new_title\">";
        // line 151
        echo ($context["entry_right_new_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"right_new_title\" value=\"";
        // line 153
        echo ($context["right_new_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["right_new_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_right_new\">";
        // line 157
        echo ($context["entry_right_new"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_right_new\" id=\"input-status_right_new\" class=\"form-control\">
              ";
        // line 160
        if (($context["status_right_new"] ?? null)) {
            // line 161
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 162
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 164
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 165
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 167
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-right_best_title\">";
        // line 171
        echo ($context["entry_right_best_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"right_best_title\" value=\"";
        // line 173
        echo ($context["right_best_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["right_best_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_right_best\">";
        // line 177
        echo ($context["entry_right_best"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_right_best\" id=\"input-status_right_best\" class=\"form-control\">
              ";
        // line 180
        if (($context["status_right_best"] ?? null)) {
            // line 181
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 182
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 184
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 185
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 187
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-right_special_title\">";
        // line 191
        echo ($context["entry_right_special_title"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"right_special_title\" value=\"";
        // line 193
        echo ($context["right_special_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["right_special_title"] ?? null);
        echo "\" class=\"form-control\" />            
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"input-status_right_special\">";
        // line 197
        echo ($context["entry_right_special"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"status_right_special\" id=\"input-status_right_special\" class=\"form-control\">
              ";
        // line 200
        if (($context["status_right_special"] ?? null)) {
            // line 201
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 202
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 204
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 205
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 207
        echo "            </select>
          </div>
        </div>

      </div>
    </form>
  </div>
</div>
";
        // line 215
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmsleftproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 215,  541 => 207,  536 => 205,  531 => 204,  526 => 202,  521 => 201,  519 => 200,  513 => 197,  504 => 193,  499 => 191,  493 => 187,  488 => 185,  483 => 184,  478 => 182,  473 => 181,  471 => 180,  465 => 177,  456 => 173,  451 => 171,  445 => 167,  440 => 165,  435 => 164,  430 => 162,  425 => 161,  423 => 160,  417 => 157,  408 => 153,  403 => 151,  397 => 147,  392 => 145,  387 => 144,  382 => 142,  377 => 141,  375 => 140,  369 => 137,  360 => 133,  355 => 131,  349 => 127,  344 => 125,  339 => 124,  334 => 122,  329 => 121,  327 => 120,  321 => 117,  312 => 113,  307 => 111,  301 => 107,  296 => 105,  291 => 104,  286 => 102,  281 => 101,  279 => 100,  273 => 97,  264 => 93,  259 => 91,  253 => 87,  248 => 85,  243 => 84,  238 => 82,  233 => 81,  231 => 80,  225 => 77,  216 => 73,  211 => 71,  205 => 67,  200 => 65,  195 => 64,  190 => 62,  185 => 61,  183 => 60,  177 => 57,  168 => 53,  163 => 51,  157 => 47,  152 => 45,  147 => 44,  142 => 42,  137 => 41,  135 => 40,  129 => 37,  124 => 34,  118 => 32,  116 => 31,  110 => 30,  105 => 28,  99 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmsleftproduct.twig", "");
    }
}

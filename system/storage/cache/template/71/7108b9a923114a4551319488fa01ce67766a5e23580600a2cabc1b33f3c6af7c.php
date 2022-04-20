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

/* extension/module/tvcmsimageslider_list.twig */
class __TwigTemplate_d68fc0fcb14bedace5fe94857f71ccc23e5cb6b8cdf570d74ea8517bdb30c968 extends \Twig\Template
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
    
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
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
        <button type=\"button\" form=\"form-cateimageslider\" formaction=\"";
        // line 10
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
        echo "      <form action=\"";
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

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-speed\">";
        // line 64
        echo ($context["entry_main_speed"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"speed\" value=\"";
        // line 66
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_main_speed"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" /><span class=\"input-group-addon\">
                      milliseconds
                    </span>
              ";
        // line 69
        echo ($context["entry_main_speed_des"] ?? null);
        echo "
            </div>
          </div>   
          

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-hover\">";
        // line 75
        echo ($context["entry_main_hover"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"hover\" id=\"input-hover\" class=\"form-control\">
                ";
        // line 78
        if (($context["hover"] ?? null)) {
            // line 79
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 80
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 82
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 85
        echo "              </select>
              ";
        // line 86
        echo ($context["entry_main_hover_des"] ?? null);
        echo "
            </div>
          </div>

           <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-loop\">";
        // line 91
        echo ($context["entry_main_loop"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"loop\" id=\"input-loop\" class=\"form-control\">
                ";
        // line 94
        if (($context["loop"] ?? null)) {
            // line 95
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 96
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 98
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 99
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 101
        echo "              </select>
              ";
        // line 102
        echo ($context["entry_main_loop_des"] ?? null);
        echo "
            </div>
          </div>

          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-slider\">";
        // line 107
        echo ($context["entry_main_slider"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"slider\" id=\"input-slider\" class=\"form-control\">
                ";
        // line 110
        if (($context["slider"] ?? null)) {
            // line 111
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 112
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 114
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 117
        echo "              </select>
              ";
        // line 118
        echo ($context["entry_main_slider_des"] ?? null);
        echo "
            </div>
          </div>

          <div class=\"form-group\"> 
            <div class=\"col-sm-12\">    

              <button type=\"submit\" form=\"form-imageslider\" data-toggle=\"tooltip\" title=\"";
        // line 125
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class=\"row\">
      <div id=\"filter-cateimageslider\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 135
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 139
        echo ($context["column_title"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 140
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_title"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 144
        echo ($context["column_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 147
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 148
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 150
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 152
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 153
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 155
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 156
        echo "                    
              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 160
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
        // line 168
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 171
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cateimageslider\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover tvimageslider\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      ";
        // line 177
        if (($context["record_image"] ?? null)) {
            echo "<td class=\"text-center\">";
            echo ($context["column_image"] ?? null);
            echo "</td>";
        }
        // line 178
        echo "
                      ";
        // line 179
        if (($context["record_title"] ?? null)) {
            echo "<td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "pd.tvcmsimageslidersub_title")) {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_title"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_title"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_title"] ?? null);
                echo "\">";
                echo ($context["column_title"] ?? null);
                echo "</a> ";
            }
            echo "</td>";
        }
        // line 180
        echo "
                      ";
        // line 181
        if (($context["record_targeturl"] ?? null)) {
            echo "<td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "p.tvcmsimageslider_link")) {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_link"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_link"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_link"] ?? null);
                echo "\">";
                echo ($context["column_link"] ?? null);
                echo "</a> ";
            }
            echo "</td>";
        }
        // line 182
        echo "
                      ";
        // line 183
        if (($context["record_textalignment"] ?? null)) {
            echo "<td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "pd.tvcmsimageslider_textaligment")) {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_textaligment"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_txtali"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_textaligment"] ?? null);
                echo "\">";
                echo ($context["column_txtali"] ?? null);
                echo "</a> ";
            }
            echo "</td>";
        }
        // line 184
        echo "
                      ";
        // line 185
        if (($context["record_buttoncaption"] ?? null)) {
            echo "<td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "pd.tvcmsimageslider_buttoncaption")) {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_buttoncaption"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_btncap"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_tvcmsimageslider_buttoncaption"] ?? null);
                echo "\">";
                echo ($context["column_btncap"] ?? null);
                echo "</a> ";
            }
            echo "</td>";
        }
        // line 186
        echo "
                      ";
        // line 187
        if (($context["record_descriptionmain"] ?? null)) {
            echo "<td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "pd.sort_tvcmsimageslider_des_main")) {
                echo " <a href=\"";
                echo ($context["sort_sort_tvcmsimageslider_des_main"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_des_main"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_sort_tvcmsimageslider_des_main"] ?? null);
                echo "\">";
                echo ($context["column_des_main"] ?? null);
                echo "</a> ";
            }
            echo "</td>";
        }
        // line 188
        echo "
                       ";
        // line 189
        if (($context["record_descriptionsub"] ?? null)) {
            echo "<td class=\"text-left\">";
            if ((($context["sort"] ?? null) == "pd.sort_tvcmsimageslider_des_sub")) {
                echo " <a href=\"";
                echo ($context["sort_sort_tvcmsimageslider_des_sub"] ?? null);
                echo "\" class=\"";
                echo twig_lower_filter($this->env, ($context["order"] ?? null));
                echo "\">";
                echo ($context["column_des_sub"] ?? null);
                echo "</a> ";
            } else {
                echo " <a href=\"";
                echo ($context["sort_sort_tvcmsimageslider_des_sub"] ?? null);
                echo "\">";
                echo ($context["column_des_sub"] ?? null);
                echo "</a> ";
            }
            echo "</td>";
        }
        // line 190
        echo "
                      <td class=\"text-left\">";
        // line 191
        if ((($context["sort"] ?? null) == "pd.tvcmsimageslider_enable")) {
            echo " <a href=\"";
            echo ($context["sort_tvcmsimageslider_enable"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_tvcmsimageslider_enable"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>

                      <td class=\"text-left\">";
        // line 193
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 197
        if (($context["imagesliders"] ?? null)) {
            // line 198
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imagesliders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["imageslider"]) {
                // line 199
                echo "                      <tr id=\"recordsArray_";
                echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 199);
                echo "\">
                        <td class=\"text-center\">";
                // line 200
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 200), ($context["selected"] ?? null))) {
                    // line 201
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 201);
                    echo "\" checked=\"checked\" />
                          ";
                } else {
                    // line 203
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "id", [], "any", false, false, false, 203);
                    echo "\" />
                          ";
                }
                // line 204
                echo "</td>
                        ";
                // line 205
                if (($context["record_image"] ?? null)) {
                    echo "<td class=\"text-center\">";
                    if (twig_get_attribute($this->env, $this->source, $context["imageslider"], "image", [], "any", false, false, false, 205)) {
                        echo " <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "image", [], "any", false, false, false, 205);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "title", [], "any", false, false, false, 205);
                        echo "\" class=\"img-thumbnail\" /> ";
                    } else {
                        echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                    }
                    echo "</td>";
                }
                // line 206
                echo "                        ";
                if (($context["record_title"] ?? null)) {
                    echo "<td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "title", [], "any", false, false, false, 206);
                    echo "</td>";
                }
                // line 207
                echo "                        ";
                if (($context["record_targeturl"] ?? null)) {
                    echo "<td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "link", [], "any", false, false, false, 207);
                    echo "</td>";
                }
                // line 208
                echo "                        ";
                if (($context["record_textalignment"] ?? null)) {
                    echo "<td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "aling", [], "any", false, false, false, 208);
                    echo "</td>";
                }
                // line 209
                echo "                        ";
                if (($context["record_buttoncaption"] ?? null)) {
                    echo "<td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "btncap", [], "any", false, false, false, 209);
                    echo "</td>";
                }
                // line 210
                echo "                        ";
                if (($context["record_descriptionmain"] ?? null)) {
                    echo "<td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "des_main", [], "any", false, false, false, 210);
                    echo "</td>";
                }
                // line 211
                echo "                        ";
                if (($context["record_descriptionsub"] ?? null)) {
                    echo "<td class=\"text-left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "des_sub", [], "any", false, false, false, 211);
                    echo "</td>";
                }
                // line 212
                echo "                        <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "status", [], "any", false, false, false, 212);
                echo "</td>
                        <td class=\"text-right\"><a href=\"";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["imageslider"], "edit", [], "any", false, false, false, 213);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>

                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageslider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                    ";
        } else {
            // line 218
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"10\">";
            // line 219
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 222
        echo "                    </tbody>                  
                </table>
                
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 228
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 229
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
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

\$(document).ready(function(){
  

  function removeTags(){
      setTimeout(function() {
          \$(\".tvimageslider-position-update\").remove();
        }, 3000);
    }

  var urll = 'index.php?route=extension/module/tvcmsimageslider/ajax&user_token=";
        // line 254
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

\tlocation = 'index.php?route=extension/module/tvcmsimageslider&user_token=";
        // line 303
        echo ($context["user_token"] ?? null);
        echo "' + url;
});


 \$('button[form=\\'form-cateimageslider\\']').on('click', function(e) {
  \$('#form-cateimageslider').attr('action', \$(this).attr('formaction'));
});

  


//--></script></div>
";
        // line 315
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmsimageslider_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 315,  815 => 303,  763 => 254,  735 => 229,  731 => 228,  723 => 222,  717 => 219,  714 => 218,  711 => 217,  699 => 213,  694 => 212,  687 => 211,  680 => 210,  673 => 209,  666 => 208,  659 => 207,  652 => 206,  638 => 205,  635 => 204,  629 => 203,  623 => 201,  621 => 200,  616 => 199,  611 => 198,  609 => 197,  602 => 193,  583 => 191,  580 => 190,  560 => 189,  557 => 188,  537 => 187,  534 => 186,  514 => 185,  511 => 184,  491 => 183,  488 => 182,  468 => 181,  465 => 180,  445 => 179,  442 => 178,  436 => 177,  427 => 171,  421 => 168,  410 => 160,  404 => 156,  398 => 155,  392 => 153,  389 => 152,  383 => 150,  377 => 148,  375 => 147,  369 => 144,  360 => 140,  356 => 139,  349 => 135,  336 => 125,  326 => 118,  323 => 117,  318 => 115,  313 => 114,  308 => 112,  303 => 111,  301 => 110,  295 => 107,  287 => 102,  284 => 101,  279 => 99,  274 => 98,  269 => 96,  264 => 95,  262 => 94,  256 => 91,  248 => 86,  245 => 85,  240 => 83,  235 => 82,  230 => 80,  225 => 79,  223 => 78,  217 => 75,  208 => 69,  200 => 66,  195 => 64,  188 => 59,  183 => 57,  178 => 56,  173 => 54,  168 => 53,  166 => 52,  160 => 49,  155 => 46,  149 => 44,  147 => 43,  141 => 42,  136 => 40,  129 => 36,  121 => 32,  113 => 28,  111 => 27,  108 => 26,  100 => 22,  98 => 21,  93 => 18,  82 => 16,  78 => 15,  73 => 13,  63 => 10,  57 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmsimageslider_list.twig", "");
    }
}

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

/* extension/module/tvcmsblogcategory_list.twig */
class __TwigTemplate_590768cfb3aba30b3ad165675292a4e98ca1c3f5896c4508298ed7b0cd2f7caf extends \Twig\Template
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
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-blogpost').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
            <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          <button type=\"submit\" form=\"form-blogpost\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
          <button type=\"button\" form=\"form-blogpost\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-blogpost').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
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
        echo "        <form action=\"";
        echo ($context["mainaction"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-imageslider\" class=\"form-horizontal\">

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 36
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">

          <div class=\"form-group\">
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
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 47
        echo "            </div>
          </div>

          <div class=\"form-group\"> 
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

         

          
          <div class=\"form-group\"> 
            <div class=\"col-sm-12\">
              <button type=\"submit\" form=\"form-imageslider\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            </div>
          </div>

        </div>
      </div>
    </form>
      <div class=\"row\">

        <div id=\"filter-blogpost\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 82
        echo ($context["text_filter"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-name\">";
        // line 86
        echo ($context["entry_category_name"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 87
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 90
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"\">";
        // line 92
        echo ($context["text_select"] ?? null);
        echo "</option>
                  ";
        // line 93
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 94
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 96
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 98
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 99
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 101
            echo "                    <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 102
        echo "                    
                </select>
              </div>
              <div class=\"form-group text-right\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 106
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
        // line 114
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
              <form action=\"";
        // line 117
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogpost\">

                <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-hover tvblogpost\">
                    <thead>
                      <tr>
                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                        
                          <td class=\"text-left\">";
        // line 125
        if ((($context["sort"] ?? null) == "pd.tvcmsblog_sub_excerpt")) {
            echo " <a href=\"";
            echo ($context["sort_tvcmsblog_sub_excerpt"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_category_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_tvcmsblog_sub_excerpt"] ?? null);
            echo "\">";
            echo ($context["entry_category_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                       
                         <td class=\"text-left\">";
        // line 127
        if ((($context["sort"] ?? null) == "p.tvcmsblog_urlrewrite")) {
            echo " <a href=\"";
            echo ($context["sort_tvcmsblog_urlrewrite"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_url"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_tvcmsblog_urlrewrite"] ?? null);
            echo "\">";
            echo ($context["entry_url"] ?? null);
            echo "</a> ";
        }
        echo "</td>

                        <td class=\"text-left\">";
        // line 129
        if ((($context["sort"] ?? null) == "pd.sort_tvcmsblog_des_sub")) {
            echo " <a href=\"";
            echo ($context["sort_sort_tvcmsblog_des_sub"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_position"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_sort_tvcmsblog_des_sub"] ?? null);
            echo "\">";
            echo ($context["entry_position"] ?? null);
            echo "</a> ";
        }
        echo "</td>

                        <td class=\"text-left\">";
        // line 131
        if ((($context["sort"] ?? null) == "pd.sort_tvcmsblog_des_sub")) {
            echo " <a href=\"";
            echo ($context["sort_sort_tvcmsblog_des_sub"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_sort_tvcmsblog_des_sub"] ?? null);
            echo "\">";
            echo ($context["entry_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      
                         <td class=\"text-left\"> ";
        // line 133
        echo ($context["entry_status"] ?? null);
        echo "</td>
                        <td class=\"text-left\">";
        // line 134
        echo ($context["entry_action"] ?? null);
        echo "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 138
        if (($context["blogpostslist"] ?? null)) {
            // line 139
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogpostslist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blogpost_data"]) {
                // line 140
                echo "                        <tr id=\"recordsArray_";
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "id", [], "any", false, false, false, 140);
                echo "\">
                          <td class=\"text-center\">";
                // line 141
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "id", [], "any", false, false, false, 141), ($context["selected"] ?? null))) {
                    // line 142
                    echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "id", [], "any", false, false, false, 142);
                    echo "\" checked=\"checked\" />
                            ";
                } else {
                    // line 144
                    echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "id", [], "any", false, false, false, 144);
                    echo "\" />
                            ";
                }
                // line 145
                echo "</td>
                         
                          <td class=\"text-left\">";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "title", [], "any", false, false, false, 147);
                echo "</td>
                          <td class=\"text-left\">";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "excerpt", [], "any", false, false, false, 148);
                echo "</td>
                          <td class=\"text-left\">";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "url", [], "any", false, false, false, 149);
                echo "</td>
                          <td class=\"text-left\">";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "position", [], "any", false, false, false, 150);
                echo "</td>
                          <td class=\"text-left\">";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "status", [], "any", false, false, false, 151);
                echo "</td>
                          <td class=\"text-left\"><a href=\"";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["blogpost_data"], "edit", [], "any", false, false, false, 152);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                      ";
        } else {
            // line 156
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"10\">";
            // line 157
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 160
        echo "                      </tbody>                  
                  </table>
                  
                </div>
              </form>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
        // line 166
        echo ($context["pagination"] ?? null);
        echo "</div>
                <div class=\"col-sm-6 text-right\">";
        // line 167
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
              \$(\".tvblogpost-position-update\").remove();
            }, 3000);
        }

      var urll = 'index.php?route=extension/module/tvcmsblogcategory/ajax&user_token=";
        // line 193
        echo ($context["user_token"] ?? null);
        echo "&action=update_position&';

      var obj  = \$(document).find('body');
          
      \$(\".tvblogpost tbody\").sortable({
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

                    tags += '<div id=\"growls\" class=\"alert alert-success alert-dismissible default tvblogpost-position-update\"><i class=\"fa fa-check-circle\"></i> '+ notic +'<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>';
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

    \tlocation = 'index.php?route=extension/module/tvcmsblogcategory&user_token=";
        // line 239
        echo ($context["user_token"] ?? null);
        echo "' + url;
    });
    
  \$('button[form=\\'form-blogpost\\']').on('click', function(e) {
  \$('#form-blogpost').attr('action', \$(this).attr('formaction'));
});
    
    \$('#language a:first').tab('show');



//--></script></div>
";
        // line 251
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/tvcmsblogcategory_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 251,  557 => 239,  508 => 193,  479 => 167,  475 => 166,  467 => 160,  461 => 157,  458 => 156,  455 => 155,  444 => 152,  440 => 151,  436 => 150,  432 => 149,  428 => 148,  424 => 147,  420 => 145,  414 => 144,  408 => 142,  406 => 141,  401 => 140,  396 => 139,  394 => 138,  387 => 134,  383 => 133,  364 => 131,  345 => 129,  326 => 127,  307 => 125,  296 => 117,  290 => 114,  279 => 106,  273 => 102,  267 => 101,  261 => 99,  258 => 98,  252 => 96,  246 => 94,  244 => 93,  240 => 92,  235 => 90,  227 => 87,  223 => 86,  216 => 82,  201 => 70,  190 => 61,  185 => 59,  180 => 58,  175 => 56,  170 => 55,  168 => 54,  162 => 51,  156 => 47,  150 => 45,  148 => 44,  142 => 43,  137 => 41,  129 => 36,  121 => 32,  113 => 28,  111 => 27,  108 => 26,  100 => 22,  98 => 21,  91 => 16,  80 => 14,  76 => 13,  71 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tvcmsblogcategory_list.twig", "");
    }
}

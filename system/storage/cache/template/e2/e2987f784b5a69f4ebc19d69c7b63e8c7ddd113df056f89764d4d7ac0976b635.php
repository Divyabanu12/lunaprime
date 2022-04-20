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

/* opc_electronic_electron_2501/template/common/search.twig */
class __TwigTemplate_8c5f5535fbebcb55f552fccbe205eb668220068e540ce05462f7a544c4c3225a extends \Twig\Template
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
        echo "<div id=\"ttvsearch\" class=\"search-widget ttvcmsheader-search\">
\t<div class=\"ttvsearch-top-wrapper\">
\t\t<div class=\"ttvheader-sarch-display\">
\t\t\t<div class=\"ttvheader-search-display-icon\">
\t\t\t\t<div class=\"ttvsearch-open\"></div>
\t\t\t</div>
\t\t\t<div class=\"ttvsearch-close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
\t\t</div>
\t\t<div class=\"ttvsearch-header-display-full\">
\t\t\t<div class=\"ttvsearch-header-display-wrappper\">
\t\t\t\t<div class=\"ttvheader-search-main\">
\t\t\t\t\t<div class=\"ttvheader-top-search\">
\t\t\t\t\t\t<div class=\"ttvheader-top-search-wrapper-info-box\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 14
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["tv_lang_search_label"] ?? null);
        echo "\" class=\"ttvcmssearch-words\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ttvheader-top-search-wrapper\">
\t\t\t\t\t\t<button type=\"submit\" class=\"ttvheader-search-btn\" id=\"searchclick\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"ttvserach-name\">";
        // line 20
        echo ($context["tv_lang_search_text_label"] ?? null);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ttvsearch-result\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t/* Search  Click*/
\t\$(document).on(\"click\", \".ttvsearch-more-search ,#searchclick\", function() {
\t\tvar url \t= \$('base').attr('href') + 'index.php?route=product/search';
\t\tvar value \t= \$('#ttvsearch input[name=\\'search\\']').val();
\t\tif (value) {
\t\t\turl += '&search=' + encodeURIComponent(value);
\t\t}
\t\tlocation = url;
\t});
\t/* Search  Click*/

\t/* Search  enter*/
\t\t\$('.ttvheader-top-search-wrapper-info-box input[name=\\'search\\']').bind('keydown', function(e) {
\t\t\tif (e.keyCode == 13) {
\t\t\t\t\$('#searchclick').trigger('click');
\t\t\t}
\t\t});
\t/* Search  enter*/

\t/* Search Keyup*/
\t\$('input[name=\\'search\\']').keyup(function() {
\t\tvar obj = \$('.ttvsearch-header-display-wrappper').parent().find('.ttvsearch-result');
\t\tobj.html('');
\t\tobj.show();

\t\tvar search_words = \$(this).val();

\t\tif (search_words.length != 0) {
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: 'index.php?route=common/tvcmscustomlink/autocomplete&filter_name=' + encodeURIComponent(search_words),
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tobj.html('');
\t\t\t\t\tobj.append(data);
\t\t\t\t},
\t\t\t\terror: function(jqXHR, textStatus, errorThrown) {
\t\t\t\t\tconsole.log(textStatus, errorThrown);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t/* Search Keyup*/
});


/********************* Start Search DropDown js *****************************************/
\$(document).on('click', '#header .ttvsearch-top-wrapper .ttvsearch-open', function() {
\t// removeDefaultDropdown();    
\t\$('#header .ttvsearch-top-wrapper .ttvsearch-open').hide();
\t\$('#header .ttvsearch-top-wrapper .ttvsearch-close').show();
\t\$('#header .ttvsearch-header-display-wrappper').addClass('open');
});
\$(document).on('click', '#header .ttvsearch-dropdown-close-wrapper', function() {
\t\$('#header .ttvsearch-top-wrapper .ttvsearch-open').show();
\t\$('#header .ttvsearch-top-wrapper .ttvsearch-close').hide();

\t\$('#header .ttvcmssearch-words').val('');
\t\$(this).parent().parent().parent().find('.ttvsearch-result').html('');

\t\$('#header .ttvsearch-header-display-wrappper').removeClass('open');
});
/********************* End Search DropDown js *****************************************/
</script>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/common/search.twig", "");
    }
}

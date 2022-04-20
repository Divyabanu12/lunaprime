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

/* opc_electronic_electron_2501/template/extension/module/tvcmsnewsletter.twig */
class __TwigTemplate_486e9f0b6d1a333f429298f5d85f5308618e717ac27edd697025e0ab8bafaa88 extends \Twig\Template
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
        // line 11
        echo "<div class=\"ttvcms-newsletter-wrapper col-xl-3 col-lg-3 col-md-12\">
\t<div class=\"ttvcms-newsletter-inner\">
\t\t<div class=\"block_newsletter ttv-newsletter-wrapeer\">
\t\t\t<div class=\"ttvnewsletter-block\">
\t\t\t\t<div class=\"ttvnewsletter-lable-wrapper\">
\t\t\t\t\t<div class=\"ttvnewsletter-icon\"></div>
\t\t\t\t\t";
        // line 17
        if (($context["title"] ?? null)) {
            echo "<p id=\"block-newsletter-label\" class=\"ttvnewsletter-title\">";
            echo ($context["title"] ?? null);
            echo "</p>";
        }
        // line 18
        echo "\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t<div class=\"ttvnewsletter-input\">
\t\t\t\t\t<div class=\"ttvnewsleeter-input-button-wraper\">
\t\t\t\t\t\t<div class=\"input-wrapper\">
\t\t\t\t\t\t\t<input name=\"email\" id=\"homettvcmsnewsletterpopupnewsletter\" type=\"email\" value=\"\" placeholder=\"";
        // line 22
        echo ($context["text_place_enter"] ?? null);
        echo "\" aria-labelledby=\"block-newsletter-label\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ttvnewsleteer-btn-wrapper\">
\t\t\t\t\t\t\t<input class=\"submitNewsletter btn btn-primary hidden-xs-down homettvnewsletter-email-subscribe\" name=\"email\" type=\"submit\" value=\"";
        // line 25
        echo ($context["text_buttonSubscribe"] ?? null);
        echo "\">
\t\t\t\t\t\t\t<input class=\"submitNewsletter btn btn-primary hidden-sm-up homettvnewsletter-email-subscribe\" name=\"email\" type=\"submit\" value=\"";
        // line 26
        echo ($context["text_buttonok"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t";
        // line 29
        if (($context["subtitle"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t<div class=\"ttvnewsletter-description\">
\t\t\t\t\t\t<p class=\"alert-description\">";
            // line 31
            echo ($context["subtitle"] ?? null);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t<div id=\"homemsg\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 37
        echo ($context["socialicon"] ?? null);
        echo "
\t\t</div>
\t</div>\t\t
</div>
<script type=\"text/javascript\">
\t\$(document).on('click', '#closenewsletter', function() {
\t\t\$(this).parent().remove();
\t});
\t/* NEWSLETTER */
\t\t\$('.submitNewsletter').click(function() {
\t\t\tvar email = \$('#homettvcmsnewsletterpopupnewsletter').val();
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/tvcmsnewsletterpopup/ajaxdata&email=' + encodeURIComponent(email),
\t\t\t          type: 'post',
\t\t\t          dataType: 'json',
\t\t\t          cache: false,
\t\t\t          contentType: false,
\t\t\t          processData: false,
\t\t\t          beforeSend: function() {
\t\t\t            \$('.homettvnewsletter-email-subscrib').button('loading');
\t\t\t          },
\t\t\t          complete: function() {
\t\t\t            \$('.homettvnewsletter-email-subscrib').button('reset');
\t\t\t          },
\t\t\t          success: function(json) {
\t\t\t          \tconsole.log(json);
\t\t\t            if (json['text_error_email']) {
\t\t\t            \t\$('#homemsg').html(json['text_error_email']); 
\t\t\t            }
\t\t\t            if (json['text_repeat_email']) {
\t\t\t            \t\$('#homemsg').html(json['text_repeat_email']); 
\t\t\t            }
\t\t\t            if (json['text_enter_email']) {
\t\t\t            \t\$('#homemsg').html(json['text_enter_email']); 
\t\t\t            }
\t\t\t            if (json['text_success_email']) {
\t\t\t            \t\$('#homemsg').html(json['text_success_email']); 
\t\t\t            }
\t\t\t          },
\t\t\t          error: function(xhr, ajaxOptions, thrownError) {
\t\t\t            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t          }
\t\t\t    });

\t\t\t
\t\t});
\t/* NEWSLETTER */
\t</script>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmsnewsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  84 => 34,  78 => 31,  75 => 30,  73 => 29,  67 => 26,  63 => 25,  57 => 22,  51 => 18,  45 => 17,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmsnewsletter.twig", "");
    }
}

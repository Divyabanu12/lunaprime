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

/* opc_electronic_electron_2501/template/extension/module/tvcmscategoryproduct.twig */
class __TwigTemplate_66a8ab047aeab66f44a869ee9a6039e8af3b3d60241c77884b85a6175487113a extends \Twig\Template
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
        echo "<div class='container-fluid ttvcmstabcategory-product-slider'>
        <div class='container ttvtabcategory-product-slider'>
            <div class='ttvtabcategory-tab-product'>
                ";
        // line 4
        if (($context["maintitle"] ?? null)) {
            // line 5
            echo "                <div class='ttvtabcategory-all-tab ttvtabcategory-product-desktop-view'>
                        <div class=\"ttvcmsmain-title-wrapper\">
                            <div class=\"ttvcmsmain-title-wrapper clearfix\">
                                <div class=\"ttvcms-main-title\">
                                    <div class=\"ttvmain-title\">
                                        <h2>";
            // line 10
            echo ($context["maintitle"] ?? null);
            echo "</h2>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                </div>
                ";
        }
        // line 16
        echo "                    
                <div class=\"ttvtabcategory-product-tab-wrap\">
                    <div class=\"ttvtabcategory-product-tab-inner\">
                        ";
        // line 19
        if (($context["categoryproduct_data"] ?? null)) {
            // line 20
            echo "                            <div class=\"ttvtabcategory-product-sub-title-block\">
                                <div class=\"ttvtabcategory-product-inner\">
                                    ";
            // line 22
            $context["i"] = 1;
            // line 23
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoryproduct_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 24
                echo "                                        <div class=\"ttvtabcategory-product-li ";
                if ((($context["i"] ?? null) == "1")) {
                    echo "active";
                }
                echo "\">
                                            <div class=\"ttvtabcategory-product-icon\"></div>
                                            <a class=\"ttvtabcategory-tab-sub-title ";
                // line 26
                if ((($context["i"] ?? null) == "1")) {
                    echo "active";
                }
                echo "\" title='";
                echo twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 26);
                echo "' data-category-id='";
                echo twig_get_attribute($this->env, $this->source, $context["data"], "id_category", [], "any", false, false, false, 26);
                echo "' data-num-prod='";
                echo twig_get_attribute($this->env, $this->source, $context["data"], "num_of_prod", [], "any", false, false, false, 26);
                echo "'>
                                                ";
                // line 27
                if (($context["status_image"] ?? null)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["data"], "image", [], "any", false, false, false, 27);
                    echo "\">";
                }
                // line 28
                echo "                                                ";
                if (($context["status_title"] ?? null)) {
                    echo "<span>";
                    echo twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 28);
                    echo "</span>";
                }
                // line 29
                echo "                                            </a>
                                        </div>
                                        ";
                // line 31
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 32
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                </div>
                            </div>
                        ";
        }
        // line 36
        echo "                        <div class='ttvtabcategory-all-product'>
                            ";
        // line 38
        echo "                            <div class='ttvtabcategory-all-product-wrapper'>
                            </div>
                            ";
        // line 41
        echo "                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <style type=\"text/css\">

    </style>
    <script type=\"text/javascript\">
    \$(document).ready(function(){

    url = 'index.php?route=common/tvcmscategoryproduct/autocomplete';
    var category_id = \$('.ttvtabcategory-tab-product .ttvtabcategory-product-li a.ttvtabcategory-tab-sub-title.active').attr('data-category-id');
    var num_of_prod = \$('.ttvtabcategory-tab-product .ttvtabcategory-product-li a.ttvtabcategory-tab-sub-title.active').attr('data-num-prod');
    getDataUsingAjax(url, category_id, num_of_prod);
    \$(document).on('click','.ttvtabcategory-tab-product .ttvtabcategory-product-li a.ttvtabcategory-tab-sub-title', function(){
        url = 'index.php?route=common/tvcmscategoryproduct/autocomplete';
        \$('.ttvtabcategory-tab-product .ttvtabcategory-product-li, .ttvtabcategory-tab-product .ttvtabcategory-product-li a').removeClass('active');
        \$(this).addClass('active');
        \$(this).parent().addClass('active');
        var category_id = \$(this).attr('data-category-id');
        var num_of_prod = \$(this).attr('data-num-prod');
        getDataUsingAjax(url, category_id, num_of_prod);
    });

    function getDataUsingAjax(url, category_id, num_of_prod)
    {
        \$.ajax({
            type: 'POST',
            url: 'index.php?route=extension/module/tvcmscategoryproduct/autocomplete',
            data: 'category_id='+ category_id + '&num_of_prod=' + num_of_prod ,
            success: function(data)
            {
                \$('.ttvcmstabcategory-product-slider .ttvtabcategory-product-pagination').remove();
                \$('.ttvtabcategory-all-product-wrapper').html('');
                \$('.ttvtabcategory-all-product-wrapper').append(data);
                callSlider();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }


    /**************************** Start Slider ****************************************/
    function callSlider()
    {
          
        \$('.ttvtabcategory-all-product-content-box .ttvtabcategory-all-product-slider').owlCarousel({
          loop: false,
          dots: false,
          nav: false,
          responsive: {
            0: { items: 1},
            320:{ items: 1, slideBy: 1},
            576:{ items: 1, slideBy: 1},
            768:{ items: 2, slideBy: 1},
            992:{ items: 3, slideBy: 1},
            1200:{ items: 3, slideBy: 1},
            1400:{ items: 4, slideBy: 1},
            1600:{ items: 4, slideBy: 1},
            1800:{ items: 4, slideBy: 1}
          },
        });
        
        \$('.ttvtabcategory-product-prev').click(function(e){
          e.preventDefault();
          \$('.ttvtabcategory-all-product-content-box .ttvtabcategory-all-product-slider .owl-nav .owl-prev').trigger('click');
        });

        \$('.ttvtabcategory-product-next').click(function(e){
          e.preventDefault();
          \$('.ttvtabcategory-all-product-content-box .ttvtabcategory-all-product-slider .owl-nav .owl-next').trigger('click');
        });
          
        \$(\".ttvtabcategory-all-product-slider .ttvproduct-info-box-wrapper .product-description\").balance();
        \$(\".ttvcmstabcategory-product-slider .ttvtabcategory-product-pagination\").insertAfter('.ttvcmstabcategory-product-slider .ttvcmsmain-title-wrapper .ttvcms-main-title');
    }


    
        
    
    /**************************** End Slider ****************************************/

    /*********************** End Ajax And Slider *******************************/

});
    </script>";
    }

    public function getTemplateName()
    {
        return "opc_electronic_electron_2501/template/extension/module/tvcmscategoryproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  132 => 38,  129 => 36,  124 => 33,  118 => 32,  116 => 31,  112 => 29,  105 => 28,  99 => 27,  87 => 26,  79 => 24,  74 => 23,  72 => 22,  68 => 20,  66 => 19,  61 => 16,  51 => 10,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "opc_electronic_electron_2501/template/extension/module/tvcmscategoryproduct.twig", "");
    }
}

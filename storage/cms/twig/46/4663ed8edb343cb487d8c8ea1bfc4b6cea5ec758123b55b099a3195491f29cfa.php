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

/* D:\xampp\htdocs\Megapolis/themes/megapolis/partials/map.htm */
class __TwigTemplate_333d247009991185dec58fb040db2907d17819836ac752b9254c57d8feee441d extends \Twig\Template
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
        echo "<section class=\"section section--map \">
    <div class=\"container \">
        <div class=\"map \">
            ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/partials/map.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section section--map \">
    <div class=\"container \">
        <div class=\"map \">
            {% component 'googleMap' %}
        </div>
    </div>
</section>", "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/partials/map.htm", "");
    }
}

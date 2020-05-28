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

/* D:\xampp\htdocs\Megapolis/themes/megapolis/pages/catalog.htm */
class __TwigTemplate_c8ba5aa92a6ee2a3472c26f0092bfd99b43e61edf7743431c42ed77fd2609128 extends \Twig\Template
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
        echo "<!-- Map -->
<div class=\"intro \" id=\"intro \">
    <div class=\"container \">
        <div class=\"content bg\">
            <div class=\"row m-0 pt-5 \">
                <span></span> ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("map"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "            </div>

        </div>

    </div>
</div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/pages/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Map -->
<div class=\"intro \" id=\"intro \">
    <div class=\"container \">
        <div class=\"content bg\">
            <div class=\"row m-0 pt-5 \">
                <span></span> {% partial 'map' %}
            </div>

        </div>

    </div>
</div>
</div>

</div>", "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/pages/catalog.htm", "");
    }
}

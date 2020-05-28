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

/* D:\xampp\htdocs\Megapolis/themes/megapolis/pages/home.htm */
class __TwigTemplate_7ccbb9ded2f8bcc29293041eb9752f58a77cd147eda6ce4b0fea715e4a5d9dff extends \Twig\Template
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
        echo "<!-- Intro -->
<div class=\"intro \" id=\"intro \">
    <div class=\"container \">
        <div class=\"intro__inner \">
           ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "        </div>
    </div>

    
</div>

<!-- Footer -->

</div>
<!-- /.page -->";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Intro -->
<div class=\"intro \" id=\"intro \">
    <div class=\"container \">
        <div class=\"intro__inner \">
           {% partial 'slider' %}
        </div>
    </div>

    
</div>

<!-- Footer -->

</div>
<!-- /.page -->", "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/pages/home.htm", "");
    }
}

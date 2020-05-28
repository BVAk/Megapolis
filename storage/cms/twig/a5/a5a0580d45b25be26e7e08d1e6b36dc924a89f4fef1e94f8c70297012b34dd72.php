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

/* D:\xampp\htdocs\Megapolis/themes/megapolis/partials/site/header.htm */
class __TwigTemplate_4c840731262782c02896b9f8ac0ae97eafab30fe0651b4a01197aab20c3e491b extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"header__inner\">
        <div class=\"header__logo\" data-scroll=\"#intro\">Megapolis</div>

        <nav class=\"nav\" id=\"nav\">

            <a class=\"nav__link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo " \">Главная</a>
            <a class=\"nav__link \" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("catalog");
        echo " \">Каталог</a>
            <a class=\" nav__link \" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("info");
        echo " \">Контакты</a>
            <a class=\" nav__link \">";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</a>

        </nav>

        <button class=\"nav-toggle \" id=\"nav_toggle \" type=\"button \">
                <span class=\"nav-toggle__item \">Menu</span>
            </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"header__inner\">
        <div class=\"header__logo\" data-scroll=\"#intro\">Megapolis</div>

        <nav class=\"nav\" id=\"nav\">

            <a class=\"nav__link\" href=\"{{ 'home'|page }} \">Главная</a>
            <a class=\"nav__link \" href=\"{{ 'catalog'|page }} \">Каталог</a>
            <a class=\" nav__link \" href=\"{{ 'info'|page }} \">Контакты</a>
            <a class=\" nav__link \">{% component 'localePicker' %}</a>

        </nav>

        <button class=\"nav-toggle \" id=\"nav_toggle \" type=\"button \">
                <span class=\"nav-toggle__item \">Menu</span>
            </button>
    </div>
</div>", "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/partials/site/header.htm", "");
    }
}

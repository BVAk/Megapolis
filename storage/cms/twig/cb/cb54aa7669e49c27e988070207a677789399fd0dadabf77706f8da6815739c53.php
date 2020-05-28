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

/* D:\xampp\htdocs\Megapolis/themes/megapolis/partials/site/footer.htm */
class __TwigTemplate_60d48ff0f946df9cbc78e5b95330db0de4d39e64f403b078b8e2204a14822115 extends \Twig\Template
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
        echo "<footer class=\"footer \" id=\"footer \">
    <div class=\"container \">
        <div class=\"copyright \">
            © 2020 MoGo free PSD template by <span>Laaqiq</span>
        </div>

    </div>
    <!-- /.container -->
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer \" id=\"footer \">
    <div class=\"container \">
        <div class=\"copyright \">
            © 2020 MoGo free PSD template by <span>Laaqiq</span>
        </div>

    </div>
    <!-- /.container -->
</footer>", "D:\\xampp\\htdocs\\Megapolis/themes/megapolis/partials/site/footer.htm", "");
    }
}

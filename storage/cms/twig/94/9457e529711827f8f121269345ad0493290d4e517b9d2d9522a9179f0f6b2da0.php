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

/* D:\xampp\htdocs\Megapolis/plugins/jiri/map/components/googlemap/default.htm */
class __TwigTemplate_fea0a2d65a9796934fba5985d849c4dbd318e5151fdc42fe1ec1a5ab68e30843 extends \Twig\Template
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
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"google-map\" style=\"height: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "height"], "method", false, false, false, 2), "html", null, true);
        echo "; width: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "width"], "method", false, false, false, 2), "html", null, true);
        echo ";\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "apiKey"], "method", false, false, false, 4), "html", null, true);
        echo "\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng(";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "latitude"], "method", false, false, false, 9), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "longitude"], "method", false, false, false, 9), "html", null, true);
        echo ");
    
    var mapOptions = {
      zoom: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "zoom"], "method", false, false, false, 12), "html", null, true);
        echo ",
      center: center,
      mapTypeId: google.maps.MapTypeId.";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "mapTypeId"], "method", false, false, false, 14), "html", null, true);
        echo "
    }
    var map = new google.maps.Map(document.getElementById('";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "'),
                                    mapOptions);

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "showMarker"], "method", false, false, false, 19)) {
            // line 20
            echo "        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    ";
        }
        // line 25
        echo "}

google.maps.event.addDomListener(window, 'load', initialize);
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\Megapolis/plugins/jiri/map/components/googlemap/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  83 => 20,  81 => 19,  75 => 16,  70 => 14,  65 => 12,  57 => 9,  49 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Map -->
<div id=\"{{__SELF__.id}}\" class=\"google-map\" style=\"height: {{__SELF__.property('height')}}; width: {{__SELF__.property('width')}};\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key={{__SELF__.property('apiKey')}}\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng({{__SELF__.property('latitude')}}, {{__SELF__.property('longitude')}});
    
    var mapOptions = {
      zoom: {{__SELF__.property('zoom')}},
      center: center,
      mapTypeId: google.maps.MapTypeId.{{__SELF__.property('mapTypeId')}}
    }
    var map = new google.maps.Map(document.getElementById('{{__SELF__.id}}'),
                                    mapOptions);

    {% if (__SELF__.property('showMarker')) %}
        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    {% endif %}
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>", "D:\\xampp\\htdocs\\Megapolis/plugins/jiri/map/components/googlemap/default.htm", "");
    }
}

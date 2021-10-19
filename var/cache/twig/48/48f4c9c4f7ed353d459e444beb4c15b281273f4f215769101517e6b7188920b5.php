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

/* training.html.twig */
class __TwigTemplate_be0e97cde44e6b1646019d1010ca6c770a97ec5351e68aa67cecc65ca49254f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "training.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Formation";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid\" id=\"training\">
<h2> formations</h2>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>2020- à aujourd'hui</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Openclassrooms</h3>
                    <h4>Alternance<br /> Certification professionnelle de développeur d'application - PHP/symfony</h4>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>2019-2020</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Centre de Formation ADRAR</h3>
                    <h4>Titre professionnel développeur web et web mobile</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>1997-1999</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Lycée Dhuoda-Nîmes</h3>
                    <h4>Brevet de Technicien Supérieur en Bâtiment</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>1995-1997</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Lycée Ste louise de Marillac</h3>
                    <h4> Bac STI option Génie Civil</h4>
                </div>
            </div>
        </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}

{% block title %}Formation{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"training\">
<h2> formations</h2>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>2020- à aujourd'hui</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Openclassrooms</h3>
                    <h4>Alternance<br /> Certification professionnelle de développeur d'application - PHP/symfony</h4>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>2019-2020</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Centre de Formation ADRAR</h3>
                    <h4>Titre professionnel développeur web et web mobile</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>1997-1999</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Lycée Dhuoda-Nîmes</h3>
                    <h4>Brevet de Technicien Supérieur en Bâtiment</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"education-block\">
                    <h5>1995-1997</h5>
                    <span><img src=\"images/icon-education.png\" alt=\"icon-education\"></span>
                    <h3>Lycée Ste louise de Marillac</h3>
                    <h4> Bac STI option Génie Civil</h4>
                </div>
            </div>
        </div>

</div>
{% endblock %} ", "training.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\training.html.twig");
    }
}

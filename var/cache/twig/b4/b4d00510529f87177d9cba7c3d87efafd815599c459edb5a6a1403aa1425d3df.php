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

/* blog.html.twig */
class __TwigTemplate_fd27eda487bb8bd5a62e1491389eb15361bc30a32530f232145c9e1a67317b19 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Blog";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blog\">
    <div class=\"container-blog\">
            <div class=\"col-10 mx-auto my-3\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title_blog", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"row-blog-img\">
                <img src=\"..\\public\\uploads\\";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "image_blog", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"blog-img px-auto\" alt=\"img\">
            </div>
            <div class=\"content-blog row my-5\">
                <div class=\"col-10 mx-auto my-0\">
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "chapo_blog", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content_blog", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                    <p><bold>Dernière mise à jour: </bold><span>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "last_update_blog", [], "any", false, false, false, 16), "html", null, true);
        echo "</span></p>
                    <p><bold>Auteur: </bold><span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "pseudo_blog", [], "any", false, false, false, 17), "html", null, true);
        echo "</span></p>
                </div>
            </div>
    </div>
</div>   
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  84 => 16,  80 => 15,  76 => 14,  69 => 10,  63 => 7,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blog\">
    <div class=\"container-blog\">
            <div class=\"col-10 mx-auto my-3\">
                <h3>{{blog.title_blog}}</h3>
            </div>
            <div class=\"row-blog-img\">
                <img src=\"..\\public\\uploads\\{{blog.image_blog}}\" class=\"blog-img px-auto\" alt=\"img\">
            </div>
            <div class=\"content-blog row my-5\">
                <div class=\"col-10 mx-auto my-0\">
                    <p>{{blog.chapo_blog}}</p>
                    <p>{{blog.content_blog}}</p>
                    <p><bold>Dernière mise à jour: </bold><span>{{blog.last_update_blog}}</span></p>
                    <p><bold>Auteur: </bold><span>{{blog.pseudo_blog}}</span></p>
                </div>
            </div>
    </div>
</div>   
{% endblock %}", "blog.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\blog.html.twig");
    }
}

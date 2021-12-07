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

/* dashboardAdmin.html.twig */
class __TwigTemplate_f1401d0f3c03b6639038c15cf9f0e4a3b0c5babe43a0a1d33c858d5fbf0483c5 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "dashboardAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"dashboard\">
    <div class=\"heading\">
        <h2>Administration des blogs et commentaires</h2>
    </div>
    <div class=\"container-dashboard\">
        <div class=\"comment-list-block\">
            <ul class=\"nav nav-tabs\">
                <li class=\"nav-item\">
                <a class=\"nav-link active tab-text\" id=\"tab-blogs\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link tab-text\" id=\"tab-comment\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
                <a href=\"/blogs/admin/new\"><button class=\"btn btn-success btn-block mb-3 mx-auto new-blog-button\">Créer un nouveau blog</button></a>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 22
            echo "                    <div class=\"comment-line row\">
                        <div class=\" col-sm-12 col-md-10 col-lg-10 my-3\">
                            <div class=\"item-list \"><p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update_blog", [], "any", false, false, false, 24), "html", null, true);
            echo "</p></div>
                            <div class=\"item-list\"><p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title_blog", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></div>
                            <div class=\"item-list\"><p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo_blog", [], "any", false, false, false, 26), "html", null, true);
            echo "</p></div>
                        </div>
                        <div class=\" col-sm-12 col-md-2 col-lg-2\">
                            <div class=\"row option-button mx-auto\">
                                <div class=\"item-button\"><a href=";
            // line 30
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 30)), "html", null, true);
            echo "><button class=\"btn btn-lg btn-primary btn-block mx-auto my-2\"><i class=\"far fa-eye\"></i></button></a></div>
                                <div class=\"item-button\"><a href=";
            // line 31
            echo twig_escape_filter($this->env, (("/blogs/admin/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 31)) . "/edit"), "html", null, true);
            echo "><button class=\"btn btn-lg btn-warning btn-block mx-auto my-2\"><i class=\"fas fa-edit\"></i></button></a></div>
                                <div class=\"item-button\"><a href=";
            // line 32
            echo twig_escape_filter($this->env, (("/blogs/admin/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 32)) . "/delete"), "html", null, true);
            echo "><button class=\"btn btn-lg btn-danger btn-block mx-auto my-2\"><i class=\"fas fa-trash-alt\"></i></button></a></div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div>
            </div>
        </div>    
    </div>
</div>    
";
    }

    public function getTemplateName()
    {
        return "dashboardAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  108 => 32,  104 => 31,  100 => 30,  93 => 26,  89 => 25,  85 => 24,  81 => 22,  77 => 21,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Dashboard{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"dashboard\">
    <div class=\"heading\">
        <h2>Administration des blogs et commentaires</h2>
    </div>
    <div class=\"container-dashboard\">
        <div class=\"comment-list-block\">
            <ul class=\"nav nav-tabs\">
                <li class=\"nav-item\">
                <a class=\"nav-link active tab-text\" id=\"tab-blogs\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link tab-text\" id=\"tab-comment\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
                <a href=\"/blogs/admin/new\"><button class=\"btn btn-success btn-block mb-3 mx-auto new-blog-button\">Créer un nouveau blog</button></a>
                    {% for blog in blogs %}
                    <div class=\"comment-line row\">
                        <div class=\" col-sm-12 col-md-10 col-lg-10 my-3\">
                            <div class=\"item-list \"><p>{{blog.last_update_blog}}</p></div>
                            <div class=\"item-list\"><p>{{blog.title_blog}}</p></div>
                            <div class=\"item-list\"><p>{{blog.chapo_blog}}</p></div>
                        </div>
                        <div class=\" col-sm-12 col-md-2 col-lg-2\">
                            <div class=\"row option-button mx-auto\">
                                <div class=\"item-button\"><a href={{'/blogs/'~blog.id}}><button class=\"btn btn-lg btn-primary btn-block mx-auto my-2\"><i class=\"far fa-eye\"></i></button></a></div>
                                <div class=\"item-button\"><a href={{'/blogs/admin/'~blog.id~'/edit'}}><button class=\"btn btn-lg btn-warning btn-block mx-auto my-2\"><i class=\"fas fa-edit\"></i></button></a></div>
                                <div class=\"item-button\"><a href={{'/blogs/admin/'~blog.id~'/delete'}}><button class=\"btn btn-lg btn-danger btn-block mx-auto my-2\"><i class=\"fas fa-trash-alt\"></i></button></a></div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>    
    </div>
</div>    
{% endblock %} 
", "dashboardAdmin.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\dashboardAdmin.html.twig");
    }
}

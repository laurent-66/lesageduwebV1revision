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

/* skills.html.twig */
class __TwigTemplate_9f07537d0145775db87c4f9a9503266987e727d3eba2b9da1e2f7ee8f9713ac6 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "skills.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Compétences";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 

<div class=\"container-fluid\" id=\"skills\">
    <div class=\"container container-skills\">
        <h2>COMPETENCES</h2>
        <div class=\"divider\"></div>
            <div class=\"card-white-cms\">
                <div class=\"cms-content\">
                    <h3>Système de gestion de contenu (CMS)</h3>
                    <p><strong>Système de Gestion de contenu utilisé : Wordpress (thème Avada).</strong></p>
                </div>
                <div class=\"cms-logos\">
                    <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                        <div class=\"item-logolangage\"><a title=\"WordPress / GPL (http://www.gnu.org/licenses/gpl.html)\" href=\"https://commons.wikimedia.org/wiki/File:Wordpress-Logo.svg\"><img width=\"90\" alt=\"Wordpress-Logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/256px-Wordpress-Logo.svg.png\"></a></div>
                    </div>
                </div>
            </div>
        <div class=\"row-front-end\">
            <div class=\"card-white\">
                <div class=\"card-content\">
                    <h3>FRONT-END</h3>
                    <ul>
                        <li>Maquetter une application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                    <p><strong>Langages utilisés : HTML5, CSS3, Javascript ES6, TypeScript, Twig</strong></p>
                    <p><strong>Framework utilisés : Angular 12, Angular material, bootstrap, Sass </strong></p>
                </div>
            </div>
            <div class=\"front-logos\">
                <div class=\"card-logos-front\">
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"W3C / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:HTML5_logo_and_wordmark.svg\"><img width=\"128\" alt=\"HTML5 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/128px-HTML5_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:CSS3_logo_and_wordmark.svg\"><img width=\"90\" alt=\"CSS3 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/128px-CSS3_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Chris Williams / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Unofficial_JavaScript_logo_2.svg\"><img width=\"90\" alt=\"Unofficial JavaScript logo 2\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/128px-Unofficial_JavaScript_logo_2.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Bootstrap / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Bootstrap_logo.svg\"><img width=\"90\" alt=\"Bootstrap logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/128px-Bootstrap_logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Google, Public domain, via Wikimedia Commons\" href=\"https://commons.wikimedia.org/wiki/File:Angular_full_color_logo.svg\"><img width=\"128\" alt=\"Angular full color logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/128px-Angular_full_color_logo.svg.png\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row-back-end\">
            <div class=\"card-blue\">
                <div class=\"card-content\">
                    <h3>BACK-END</h3>
                    <ul>
                        <li>Créer une base de données.</li>
                        <li>Développer les composants d'accès aux données.</li>
                        <li>Développer la partie back-end d'une application web et web mobile.</li>
                        <li>Elaborer et mettre en oeuvre des composants dans une application de gestion de contenu ou e-commerce.</li>
                    </ul>
                    <ul>
                        <li><strong>Langages utilisés : POO, PHP, nestjs, SQL.</strong></li>
                        <li><strong>Système de gestion de bases de données relationnelles utilisés : phpmyadmin, mysql workbench, pgadmin.</strong></li>
                        <li><strong>Framework : symphony 5 en cours d'acquisition en alternance.</strong></li>
                        <li><strong>Conception : Diagramme UML, Conception SI (merise).</strong></li>
                        <li><strong>connaissances annexes : Git, Github, Jira, Docker.</strong></li>
                    </ul>

                </div>
            </div>
            <div class=\"back-logos\">
                <div class=\"card-logos-back\">
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px; \">
                            <div class=\"logolangage\"><a title=\"Colin Viebrock, CC BY-SA 4.0 &lt;https://creativecommons.org/licenses/by-sa/4.0&gt;, via Wikimedia Commons\" href=\"https://commons.wikimedia.org/wiki/File:PHP-logo.svg\"><img width=\"256\" alt=\"PHP-logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/256px-PHP-logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px; \">
                            <div class=\"logolangage\"><img src=\"../public/images/nestjs-100px.png\"/></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><img src=\"../public/images/SQL-logo.png\"/></div>
                        </div>
                    </div>
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><img src=\"../public/images/PhpMyAdmin_logo-150px.png\"/></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><img src=\"../public/images/MySQL-logo.png\"/></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"row-credit-logos\">
            <div class=\"credit-licence-logo\">
                <a href=\"/credits\">Crédits logos</a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Compétences{% endblock %}
{% block body %} 

<div class=\"container-fluid\" id=\"skills\">
    <div class=\"container container-skills\">
        <h2>COMPETENCES</h2>
        <div class=\"divider\"></div>
            <div class=\"card-white-cms\">
                <div class=\"cms-content\">
                    <h3>Système de gestion de contenu (CMS)</h3>
                    <p><strong>Système de Gestion de contenu utilisé : Wordpress (thème Avada).</strong></p>
                </div>
                <div class=\"cms-logos\">
                    <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                        <div class=\"item-logolangage\"><a title=\"WordPress / GPL (http://www.gnu.org/licenses/gpl.html)\" href=\"https://commons.wikimedia.org/wiki/File:Wordpress-Logo.svg\"><img width=\"90\" alt=\"Wordpress-Logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/256px-Wordpress-Logo.svg.png\"></a></div>
                    </div>
                </div>
            </div>
        <div class=\"row-front-end\">
            <div class=\"card-white\">
                <div class=\"card-content\">
                    <h3>FRONT-END</h3>
                    <ul>
                        <li>Maquetter une application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                    <p><strong>Langages utilisés : HTML5, CSS3, Javascript ES6, TypeScript, Twig</strong></p>
                    <p><strong>Framework utilisés : Angular 12, Angular material, bootstrap, Sass </strong></p>
                </div>
            </div>
            <div class=\"front-logos\">
                <div class=\"card-logos-front\">
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"W3C / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:HTML5_logo_and_wordmark.svg\"><img width=\"128\" alt=\"HTML5 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/128px-HTML5_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:CSS3_logo_and_wordmark.svg\"><img width=\"90\" alt=\"CSS3 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/128px-CSS3_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Chris Williams / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Unofficial_JavaScript_logo_2.svg\"><img width=\"90\" alt=\"Unofficial JavaScript logo 2\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/128px-Unofficial_JavaScript_logo_2.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Bootstrap / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Bootstrap_logo.svg\"><img width=\"90\" alt=\"Bootstrap logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/128px-Bootstrap_logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Google, Public domain, via Wikimedia Commons\" href=\"https://commons.wikimedia.org/wiki/File:Angular_full_color_logo.svg\"><img width=\"128\" alt=\"Angular full color logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/128px-Angular_full_color_logo.svg.png\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row-back-end\">
            <div class=\"card-blue\">
                <div class=\"card-content\">
                    <h3>BACK-END</h3>
                    <ul>
                        <li>Créer une base de données.</li>
                        <li>Développer les composants d'accès aux données.</li>
                        <li>Développer la partie back-end d'une application web et web mobile.</li>
                        <li>Elaborer et mettre en oeuvre des composants dans une application de gestion de contenu ou e-commerce.</li>
                    </ul>
                    <ul>
                        <li><strong>Langages utilisés : POO, PHP, nestjs, SQL.</strong></li>
                        <li><strong>Système de gestion de bases de données relationnelles utilisés : phpmyadmin, mysql workbench, pgadmin.</strong></li>
                        <li><strong>Framework : symphony 5 en cours d'acquisition en alternance.</strong></li>
                        <li><strong>Conception : Diagramme UML, Conception SI (merise).</strong></li>
                        <li><strong>connaissances annexes : Git, Github, Jira, Docker.</strong></li>
                    </ul>

                </div>
            </div>
            <div class=\"back-logos\">
                <div class=\"card-logos-back\">
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px; \">
                            <div class=\"logolangage\"><a title=\"Colin Viebrock, CC BY-SA 4.0 &lt;https://creativecommons.org/licenses/by-sa/4.0&gt;, via Wikimedia Commons\" href=\"https://commons.wikimedia.org/wiki/File:PHP-logo.svg\"><img width=\"256\" alt=\"PHP-logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/256px-PHP-logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:100px; height:150px; \">
                            <div class=\"logolangage\"><img src=\"../public/images/nestjs-100px.png\"/></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><img src=\"../public/images/SQL-logo.png\"/></div>
                        </div>
                    </div>
                    <div class=\"row-logos\">
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><img src=\"../public/images/PhpMyAdmin_logo-150px.png\"/></div>
                        </div>
                        <div class=\"item-logolangage\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><img src=\"../public/images/MySQL-logo.png\"/></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"row-credit-logos\">
            <div class=\"credit-licence-logo\">
                <a href=\"/credits\">Crédits logos</a>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "skills.html.twig", "C:\\Users\\laure\\Documents\\ProjectPhp\\Site_portfolio_laurent_V1\\templates\\skills.html.twig");
    }
}

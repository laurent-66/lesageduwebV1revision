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
class __TwigTemplate_dcd3dda1587c84fd33b363639cc3c6dd8eb4459f865be16594c01ce1a5b73048 extends Template
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

<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"skills\">
    <div class=\"container container-skills\">
        <h2>COMPETENCES</h2>
        <div class=\"divider\"></div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 card-white mt-5\">
                <div class=\"px-0 mx-3 py-0 my-3\">
                    <h3>FRONT-END</h3>
                    <ul>
                        <li>Maquetter une application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                    <p><strong>Langages utilisés : HTML5, CSS3, Javascript ES6.</strong></p>
                    <p><strong>Framework utilisés : Angular 12, Angular material, bootstrap, Sass </strong></p>
                    <p><strong>Système de Gestion de contenu utilisé : Wordpress (thème Avada)</strong></p> 
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 mt-5\">
                <div class=\"container mx-0 px-0 border border-danger\">
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"W3C / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:HTML5_logo_and_wordmark.svg\"><img width=\"128\" alt=\"HTML5 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/128px-HTML5_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:CSS3_logo_and_wordmark.svg\"><img width=\"90\" alt=\"CSS3 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/128px-CSS3_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Chris Williams / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Unofficial_JavaScript_logo_2.svg\"><img width=\"90\" alt=\"Unofficial JavaScript logo 2\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/128px-Unofficial_JavaScript_logo_2.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Bootstrap / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Bootstrap_logo.svg\"><img width=\"90\" alt=\"Bootstrap logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/128px-Bootstrap_logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Facebook / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:React-icon.svg\"><img width=\"128\" alt=\"React-icon\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/128px-React-icon.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"WordPress / GPL (http://www.gnu.org/licenses/gpl.html)\" href=\"https://commons.wikimedia.org/wiki/File:Wordpress-Logo.svg\"><img width=\"90\" alt=\"Wordpress-Logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/256px-Wordpress-Logo.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"block_copyright row mx-3\">
                        <div class=\"container mt-3\">
                            <div class=\"row credit-licence-logo\">
                                <p>Attribution licences logos : </p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>W3C / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 card-white mt-5\">
                <div class=\"px-0 mx-3 py-0 my-3\">
                    <h3>FRONT-END</h3>
                    <ul>
                        <li>Maquetter une application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                    <p><strong>Langages utilisés : HTML5, CSS3, Javascript ES6.</strong></p>
                    <p><strong>Framework utilisés : Angular 12, Angular material, bootstrap, Sass </strong></p>
                    <p><strong>Système de Gestion de contenu utilisé : Wordpress (thème Avada)</strong></p> 
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 mt-5\">
                <div class=\"container mx-0 px-0 border border-danger\">
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"W3C / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:HTML5_logo_and_wordmark.svg\"><img width=\"128\" alt=\"HTML5 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/128px-HTML5_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:CSS3_logo_and_wordmark.svg\"><img width=\"90\" alt=\"CSS3 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/128px-CSS3_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Chris Williams / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Unofficial_JavaScript_logo_2.svg\"><img width=\"90\" alt=\"Unofficial JavaScript logo 2\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/128px-Unofficial_JavaScript_logo_2.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Bootstrap / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Bootstrap_logo.svg\"><img width=\"90\" alt=\"Bootstrap logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/128px-Bootstrap_logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Facebook / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:React-icon.svg\"><img width=\"128\" alt=\"React-icon\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/128px-React-icon.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"WordPress / GPL (http://www.gnu.org/licenses/gpl.html)\" href=\"https://commons.wikimedia.org/wiki/File:Wordpress-Logo.svg\"><img width=\"90\" alt=\"Wordpress-Logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/256px-Wordpress-Logo.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"block_copyright row mx-3\">
                        <div class=\"container mt-3\">
                            <div class=\"row credit-licence-logo\">
                                <p>Attribution licences logos : </p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>W3C / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                        </div>
                    </div>
                </div>
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

<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"skills\">
    <div class=\"container container-skills\">
        <h2>COMPETENCES</h2>
        <div class=\"divider\"></div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 card-white mt-5\">
                <div class=\"px-0 mx-3 py-0 my-3\">
                    <h3>FRONT-END</h3>
                    <ul>
                        <li>Maquetter une application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                    <p><strong>Langages utilisés : HTML5, CSS3, Javascript ES6.</strong></p>
                    <p><strong>Framework utilisés : Angular 12, Angular material, bootstrap, Sass </strong></p>
                    <p><strong>Système de Gestion de contenu utilisé : Wordpress (thème Avada)</strong></p> 
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 mt-5\">
                <div class=\"container mx-0 px-0 border border-danger\">
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"W3C / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:HTML5_logo_and_wordmark.svg\"><img width=\"128\" alt=\"HTML5 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/128px-HTML5_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:CSS3_logo_and_wordmark.svg\"><img width=\"90\" alt=\"CSS3 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/128px-CSS3_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Chris Williams / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Unofficial_JavaScript_logo_2.svg\"><img width=\"90\" alt=\"Unofficial JavaScript logo 2\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/128px-Unofficial_JavaScript_logo_2.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Bootstrap / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Bootstrap_logo.svg\"><img width=\"90\" alt=\"Bootstrap logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/128px-Bootstrap_logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Facebook / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:React-icon.svg\"><img width=\"128\" alt=\"React-icon\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/128px-React-icon.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"WordPress / GPL (http://www.gnu.org/licenses/gpl.html)\" href=\"https://commons.wikimedia.org/wiki/File:Wordpress-Logo.svg\"><img width=\"90\" alt=\"Wordpress-Logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/256px-Wordpress-Logo.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"block_copyright row mx-3\">
                        <div class=\"container mt-3\">
                            <div class=\"row credit-licence-logo\">
                                <p>Attribution licences logos : </p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>W3C / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 card-white mt-5\">
                <div class=\"px-0 mx-3 py-0 my-3\">
                    <h3>FRONT-END</h3>
                    <ul>
                        <li>Maquetter une application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                    <p><strong>Langages utilisés : HTML5, CSS3, Javascript ES6.</strong></p>
                    <p><strong>Framework utilisés : Angular 12, Angular material, bootstrap, Sass </strong></p>
                    <p><strong>Système de Gestion de contenu utilisé : Wordpress (thème Avada)</strong></p> 
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 mx-0 px-0 mt-5\">
                <div class=\"container mx-0 px-0 border border-danger\">
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"W3C / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:HTML5_logo_and_wordmark.svg\"><img width=\"128\" alt=\"HTML5 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/128px-HTML5_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)\" href=\"https://commons.wikimedia.org/wiki/File:CSS3_logo_and_wordmark.svg\"><img width=\"90\" alt=\"CSS3 logo and wordmark\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/128px-CSS3_logo_and_wordmark.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"logolangage\"><a title=\"Chris Williams / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Unofficial_JavaScript_logo_2.svg\"><img width=\"90\" alt=\"Unofficial JavaScript logo 2\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/128px-Unofficial_JavaScript_logo_2.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"row border border-warning mx-0 px-0\">
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Bootstrap / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:Bootstrap_logo.svg\"><img width=\"90\" alt=\"Bootstrap logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/128px-Bootstrap_logo.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-6 col-sm-6 col-md-4 px-0\" style=\"width:100px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"Facebook / Public domain\" href=\"https://commons.wikimedia.org/wiki/File:React-icon.svg\"><img width=\"128\" alt=\"React-icon\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/128px-React-icon.svg.png\"></a></div>
                        </div>
                        <div class=\"item-logolangage col-12 col-sm-12 col-md-4 px-0\" style=\"width:150px; height:150px;\">
                            <div class=\"item-logolangage\"><a title=\"WordPress / GPL (http://www.gnu.org/licenses/gpl.html)\" href=\"https://commons.wikimedia.org/wiki/File:Wordpress-Logo.svg\"><img width=\"90\" alt=\"Wordpress-Logo\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/256px-Wordpress-Logo.svg.png\"></a></div>
                        </div>
                    </div>
                    <div class=\"block_copyright row mx-3\">
                        <div class=\"container mt-3\">
                            <div class=\"row credit-licence-logo\">
                                <p>Attribution licences logos : </p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>W3C / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                            <div class=\"row credit-licence-logo\">
                                <p>Rudloff / CC BY (https://creativecommons.org/licenses/by/3.0)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




















    </div>
</div>
{% endblock %} ", "skills.html.twig", "C:\\wamp64\\www\\Site_portfolio_laurent_V1\\templates\\skills.html.twig");
    }
}

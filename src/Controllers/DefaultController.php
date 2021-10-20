<?php

namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Helpers\Mailer;

class DefaultController extends AbstractController
{

    public function getHomePage(ServerRequestInterface $request, ParametersBag $bag)
    {
        return $this->renderHtml('home.html.twig');
    }
    public function getSkillsPage(ServerRequestInterface $request, ParametersBag $bag)
    {
        return $this->renderHtml('skills.html.twig');
    }
    public function getTrainingPage(ServerRequestInterface $request, ParametersBag $bag)
    {
        return $this->renderHtml('training.html.twig');
    }
    public function getAboutPage(ServerRequestInterface $request, ParametersBag $bag)
    {
        return $this->renderHtml('about.html.twig');
    }
    public function getBlogPage(ServerRequestInterface $request, ParametersBag $bag)
    {
        return $this->renderHtml('blog.html.twig');
    }












}

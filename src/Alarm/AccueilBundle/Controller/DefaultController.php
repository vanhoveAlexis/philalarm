<?php

namespace Alarm\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@AlarmAccueil/Default/index.html.twig');
    }
}

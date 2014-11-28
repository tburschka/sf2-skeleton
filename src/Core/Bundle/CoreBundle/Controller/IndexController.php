<?php


namespace Core\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        return $this->render('CoreBundle:Index:index.html.twig');
    }
}

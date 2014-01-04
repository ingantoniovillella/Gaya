<?php

namespace Gaya\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GayaShopBundle:Default:index.html.twig', array('name' => $name));
    }
}

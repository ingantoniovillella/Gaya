<?php

namespace Gaya\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $name = 'Admin';
        return $this->render('GayaShopBundle:Home:index.html.twig', array('name' => $name));
    }
}

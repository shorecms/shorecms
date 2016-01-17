<?php

namespace ShoreCms\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{

    /**
     * @Route("/", name="dashboard")
     * @Template
     * @return array
     */
    public function indexAction()
    {
        return [];
    }
}

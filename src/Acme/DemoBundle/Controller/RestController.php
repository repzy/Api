<?php

namespace Acme\DemoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class RestController extends FOSRestController
{
    /**
     * @return array
     */
    public function getPostsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AcmeDemoBundle:Post')->findAll();
        $view = $this->view($posts, 200);

        return $this->handleView($view);
    }
}
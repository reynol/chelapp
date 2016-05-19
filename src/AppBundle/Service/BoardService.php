<?php

/**
 * Created by PhpStorm.
 * User: reynol
 * Date: 17/05/16
 * Time: 10:32 PM
 */
class BoardService
{

    public function __construct($entityManager)
    {
        // do something awesome with entity manager
    }
    
    public function anotherMethodName($entityManager)
    {
        $entityManager->getDoctrine()
            ->getRepository('AppBundle:Board')
            ->findAll();
    }
}
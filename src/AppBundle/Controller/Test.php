<?php
/**
 * Created by PhpStorm.
 * User: reynol
 * Date: 17/05/16
 * Time: 8:55 PM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\BoardRepository;
use AppBundle\Service as Service;

use AppBundle\Entity as Entity;


class Test extends Controller
{
    /**
     * @Route("/test/number")
     */
    public function numberAction()
    {
        $number = rand(0, 100);

        $product = new Entity\Board();
        $product->setNombre('Keyboard');
        $product->setTotal(1);
        $product->setTipo('Ergonomic and stylish!');

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
//        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
  //      $em->flush();


        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Board')
            ->findAll();


        return $this->render('board/beerboard.html.twig', array(
            'row_count' => $product[0]->getId(),
        ));
    }

    /**
     * @Route("/test/get")
     */
    public function getAll()
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Board')
            ->findAll();

        $response = new Response(json_encode($product, true));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

    /**
     * @Route("/test/add/{id}/{valor}")
     */
    public function updateAction($id, $valor )
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Board')->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $product->setTotal($valor);
        $em->flush();

        $response = new Response(json_encode('success'));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


}
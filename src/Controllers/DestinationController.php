<?php

namespace App\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Destination;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Uid\Uuid;

class DestinationController extends AbstractController
{
    // #[Route('/destination', name: 'app_destination')]
    // public function testDestination(EntityManagerInterface $entityManager): Response
    // {
    //     $destination = new Destination();
    //     $destination->setCity('Dubai');
    //     $destination->setCountry('UAE');
    //     $destination->setSubtitle('TEST SUBTITLE');
    //     $destination->setAvgRating('3.8');
    //     $destination->setDescription('THIS IS JUST A TEST!');
        
    //     $entityManager->persist($destination);
    //     $entityManager->flush();

    //     // return $this->render('destination/index.html.twig', [
    //     //     'controller_name' => 'DestinationController',
    //     // ]);

    //     return new Response('Saved new product with id '.$destination->getId());
    // }

    #[Route('/destination/{id}', name: 'destination_show')]
    public function show(EntityManagerInterface $entityManager, Uuid $id): Response
    {
        // TEST: 0193b438-acba-748b-bf82-2a8d058da813
        $destination = $entityManager->getRepository(Destination::class)->find($id);

        if (!$destination) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return new Response('city: '.$destination->getCity()."<br>"."Country: ".$destination->getCountry()."<br>".$destination->getSubtitle()."<br>".$destination->getAvgRating()."<br>".$destination->getDescription()."<br>");

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index()
    {
	   $data= [
    [
      "name"=> "Dany",
      "age"=> 29,
      "secretIdentity"=> "Dan Jukes",
      "powers"=> [
        "Radiation resistance",
        "Turning tiny",
        "Radiation blast"
      ]
    ],
    [
      "name"=> "Alex",
      "age"=> 39,
      "secretIdentity"=> "Jane Wilson",
      "powers"=> [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    ],
    [
      "name"=> "Madame Uppercut",
      "age"=> 16,
      "secretIdentity"=> "Jane Wilson",
      "powers"=> [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    ]
  ];

	    return $this->render('index.html.twig',[
	   	"data" => $data, 
	    ]);
    }
}

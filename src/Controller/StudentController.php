<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle
\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @return string
     * @Route("/home/{classe}",name="home")
     */
  function index($classe){
      return new Response("Bonjour mes étudiants ".$classe);
  }
}
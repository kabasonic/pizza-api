<?php


namespace App\Controller;


use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends AbstractController{

    public function indexAction(Request $request): Response{
        $customers = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->json($customers);
    }
}
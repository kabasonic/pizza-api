<?php


namespace App\Controller;


use App\Entity\Product;
use App\Form\Type\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends AbstractApiController {

    private $em;

    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    public function indexAction(Request $request): Response
    {
//        dd($request);
        $products = $this->em->getRepository(Product::class)->findAll();

        return $this->respond($products);
    }

    public function createAction(Request $request): Response
    {
        $form = $this->buildForm(ProductType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            return $this->respond($form, Response::HTTP_BAD_REQUEST);
        }

        /** @var Product $product */
        $product = $form->getData();

        $this->em->persist($product);
        $this->em->flush();

        return $this->respond($product);
    }
}
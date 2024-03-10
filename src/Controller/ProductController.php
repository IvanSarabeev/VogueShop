<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    private $entityManager;
    private $productRepository;

    public function __construct(EntityManagerInterface $entityManager, ProductRepository $productRepository)
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
    }

    #[Route('/product', name: 'app_product', methods: ['GET'])]
    public function index(): Response
    {
//        $product = new Product();
//        $product->setTitle('Apple Iphone');
//        $product->setCategory('smartphones');
//        $product->setAvailable(true);
//        $product->setPrice(2999);
//        $product->setDescription('iPhone 15 Pro is the first iPhone with an aerospace-grade titanium design, using the same alloy used by spacecraft for missions to Mars');
//        $product->setColor('grey');
//        $product->setImagePath('https://cdn.technomarket.bg/ng/media/cache/mid_thumb/uploads/library/product/09216980/6502f13b95f80.png.webp');
//
//        $entityManager->persist($product);
//        $entityManager->flush();

        $product = $this->productRepository->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $product,
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_id', methods: ['GET'])]
    public function show(int $id = null): Response
    {
        $productId = $this->productRepository->find($id);

        return $this->render('product/show.html.twig', [
            'products' => $productId,
        ]);
    }
}

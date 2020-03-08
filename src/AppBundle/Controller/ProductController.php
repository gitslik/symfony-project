<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product-list")
     */
    public function indexAction(){
        return $this->render('@App/product/index.html.twig');
    }

    /**
     * @Route("/show", name="show-product")
     */
    public function showAction(){
        return $this->render('@App/product/show.html.twig');
    }

}
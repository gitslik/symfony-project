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
        $products = [];
        for($i=1; $i<=10; $i++){
            $products[]=rand(1,100);
        }
        return $this->render('@App/product/index.html.twig', ["products"=>$products]);
    }

    /**
     * @Route("/show/{id}", name="show-product", requirements={"id": "[0-9]+"})
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id){
        return $this->render('@App/product/show.html.twig', ["id"=>$id]);
    }

}
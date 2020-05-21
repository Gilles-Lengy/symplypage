<?php


namespace App\Controller;


use App\Model\Symplypage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SymplypageController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {

        $symplyPage = new Symplypage();

        $symplyPage->setPageTitle("Hello world from the controller !!!!");

        dump($symplyPage);

        $normalizer = new ObjectNormalizer();
        $encoder = new JsonEncoder();

        $serializer = new Serializer([$normalizer], [$encoder]);

        $json = $serializer->serialize($symplyPage, 'json');

        $symplyPageCopy = $serializer->deserialize($json, Symplypage::class, 'json');

        dump($symplyPageCopy);

        return $this->render('symplypage.html.twig',['symplyPageCopy' => $symplyPageCopy]);
    }

}
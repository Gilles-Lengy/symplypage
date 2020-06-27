<?php


namespace App\Controller;


use App\Model\Symplypage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class SymplypageController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage(CacheInterface $cache)
    {
        $package = new Package( new EmptyVersionStrategy());

        $urlSymplyPageJson = $package->getUrl('json/symplypage.json');
        $symplyPageJson = file_get_contents($urlSymplyPageJson);

        $normalizer = new ObjectNormalizer();
        $encoder = new JsonEncoder();

        $serializer = new Serializer([$normalizer], [$encoder]);
        //$cache->delete('symplyPage');
        $symplyPage = $cache->get('symplyPage', function (ItemInterface $item) use ($serializer,$symplyPageJson){
            $item->expiresAfter(60*60*24);//24 hours
            return $serializer->deserialize($symplyPageJson, Symplypage::class, 'json');
        });


        return $this->render('symplypage.html.twig',['symplyPage' => $symplyPage]);
    }

}
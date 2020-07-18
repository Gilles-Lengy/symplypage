<?php


namespace App\Controller;


use App\Model\Symplypage;
use App\Model\CssPreloader;
use App\Model\MainCss;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class SymplypageController extends AbstractController
{
    /**
     * @Route("/{emptySymplyPage}")
     */

    public function homepage(int $emptySymplyPage = 0, CacheInterface $cache)
    {
        $package = new Package(new EmptyVersionStrategy());

        //CssPreloader

        $urlCssPreloaderYaml = $package->getUrl('yaml/css_preloader.yaml');

        $cssPreloaderYaml = file_get_contents($urlCssPreloaderYaml);

        $normalizerCssPreloaderYaml = new ObjectNormalizer();
        $encoderCssPreloaderYaml = new YamlEncoder();

        $serializerCssPreloaderYaml = new Serializer([$normalizerCssPreloaderYaml], [$encoderCssPreloaderYaml]);

        if ($this->getParameter('kernel.debug') || $emptySymplyPage === 1) {
            $cache->delete('cssPreloader');
        }

        $cssPreloader = $cache->get('cssPreloader', function (ItemInterface $item) use ($serializerCssPreloaderYaml, $cssPreloaderYaml) {
            $item->expiresAfter(60 * 60 * 24);//24 hours
            return $serializerCssPreloaderYaml->deserialize($cssPreloaderYaml, CssPreloader::class, 'yaml');
        });


        // Symplypage Content

        $urlSymplyPageJson = $package->getUrl('json/symplypage.json');
        $symplyPageJson = file_get_contents($urlSymplyPageJson);

        $normalizerSymplyPageJson = new ObjectNormalizer();
        $encoderSymplyPageJson = new JsonEncoder();

        $serializerSymplyPageJson = new Serializer([$normalizerSymplyPageJson], [$encoderSymplyPageJson]);

        if ($this->getParameter('kernel.debug') || $emptySymplyPage === 1) {
            $cache->delete('symplyPage');
        }

        $symplyPage = $cache->get('symplyPage', function (ItemInterface $item) use ($serializerSymplyPageJson, $symplyPageJson) {
            $item->expiresAfter(60 * 60 * 24);//24 hours
            return $serializerSymplyPageJson->deserialize($symplyPageJson, Symplypage::class, 'json');
        });

        return $this->render('symplypage.html.twig', ['cssPreloader' => $cssPreloader, 'symplyPage' => $symplyPage, 'emptySymplyPage' => $emptySymplyPage]);
    }

    /**
     * @Route("/{emptySymplyPage}/main_css", name="main_css_route")
     */
    public function mainCss(int $emptySymplyPage = 0, CacheInterface $cache)
    {

        $package = new Package(new EmptyVersionStrategy());

        $urlMainCssYaml = $package->getUrl('yaml/main_css.yaml');

        $mainCssYaml = file_get_contents($urlMainCssYaml);

        $normalizerMainCssYaml = new ObjectNormalizer();
        $encoderMainCssYaml = new YamlEncoder();

        $serializerMainCssYaml = new Serializer([$normalizerMainCssYaml], [$encoderMainCssYaml]);

        if ($this->getParameter('kernel.debug') || $emptySymplyPage === 1) {
            $cache->delete('mainCss');
        }

        $mainCss = $cache->get('mainCss', function (ItemInterface $item) use ($serializerMainCssYaml, $mainCssYaml) {
            $item->expiresAfter(60 * 60 * 24);//24 hours
            return $serializerMainCssYaml->deserialize($mainCssYaml, MainCss::class, 'yaml');
        });

        $response = $this->render('css/main_css.css.twig', [
            'mainCss' => $mainCss,
        ]);

        $response->headers->set('Content-Type', 'text/css');

        return $response;

    }

}
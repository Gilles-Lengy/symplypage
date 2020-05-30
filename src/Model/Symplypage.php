<?php


namespace App\Model;


class Symplypage
{
    private $headTitle;
    private $headDescription;
    private $pageTitle;
    private $pageHeaderImageURL;
    private $pageHeaderImageAlt;
    private $pageSlogan;
    private $pageIntroTitle;
    private $pageIntro;
    private $pageIntroSignature;
    private $pageIntroSignatureURL;
    private $sectionVideoTitle;
    private $sectionVideoData;
    private $sectionVideoPlayerColor;
    private $sectionPhotoTitle;
    private $sectionPhotoData;
    private $sectionOnTheInternetTitle;
    private $sectionOnTheInternetData;
    private $footerSentence;
    private $footerUrl;
    private $footerUrlTile;

    /**
     * @return mixed
     */
    public function getHeadTitle()
    {
        return $this->headTitle;
    }

    /**
     * @param mixed $headTitle
     */
    public function setHeadTitle($headTitle): void
    {
        $this->headTitle = $headTitle;
    }

    /**
     * @return mixed
     */
    public function getHeadDescription()
    {
        return $this->headDescription;
    }

    /**
     * @param mixed $headDescription
     */
    public function setHeadDescription($headDescription): void
    {
        $this->headDescription = $headDescription;
    }



    /**
     * @return mixed
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * @param mixed $pageTitle
     */
    public function setPageTitle($pageTitle): void
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * @return mixed
     */
    public function getPageHeaderImageURL()
    {
        return $this->pageHeaderImageURL;
    }

    /**
     * @param mixed $pageHeaderImageURL
     */
    public function setPageHeaderImageURL($pageHeaderImageURL): void
    {
        $this->pageHeaderImageURL = $pageHeaderImageURL;
    }

    /**
     * @return mixed
     */
    public function getPageHeaderImageAlt()
    {
        return $this->pageHeaderImageAlt;
    }

    /**
     * @param mixed $pageHeaderImageAlt
     */
    public function setPageHeaderImageAlt($pageHeaderImageAlt): void
    {
        $this->pageHeaderImageAlt = $pageHeaderImageAlt;
    }

    /**
     * @return mixed
     */
    public function getPageSlogan()
    {
        return $this->pageSlogan;
    }

    /**
     * @param mixed $pageSlogan
     */
    public function setPageSlogan($pageSlogan): void
    {
        $this->pageSlogan = $pageSlogan;
    }

    /**
     * @return mixed
     */
    public function getPageIntroTitle()
    {
        return $this->pageIntroTitle;
    }

    /**
     * @param mixed $pageIntroTitle
     */
    public function setPageIntroTitle($pageIntroTitle): void
    {
        $this->pageIntroTitle = $pageIntroTitle;
    }

    /**
     * @return mixed
     */
    public function getPageIntro()
    {
        return $this->pageIntro;
    }

    /**
     * @param mixed $pageIntro
     */
    public function setPageIntro($pageIntro): void
    {
        $this->pageIntro = $pageIntro;
    }

    /**
     * @return mixed
     */
    public function getPageIntroSignature()
    {
        return $this->pageIntroSignature;
    }

    /**
     * @param mixed $pageIntroSignature
     */
    public function setPageIntroSignature($pageIntroSignature): void
    {
        $this->pageIntroSignature = $pageIntroSignature;
    }

    /**
     * @return mixed
     */
    public function getPageIntroSignatureURL()
    {
        return $this->pageIntroSignatureURL;
    }

    /**
     * @param mixed $pageIntroSignatureURL
     */
    public function setPageIntroSignatureURL($pageIntroSignatureURL): void
    {
        $this->pageIntroSignatureURL = $pageIntroSignatureURL;
    }


    /**
     * @return mixed
     */
    public function getSectionVideoTitle()
    {
        return $this->sectionVideoTitle;
    }

    /**
     * @param mixed $sectionVideoTitle
     */
    public function setSectionVideoTitle($sectionVideoTitle): void
    {
        $this->sectionVideoTitle = $sectionVideoTitle;
    }

    /**
     * @return mixed
     */
    public function getSectionVideoData()
    {
        return $this->sectionVideoData;
    }

    /**
     * @param mixed $sectionVideoData
     */
    public function setSectionVideoData($sectionVideoData): void
    {
        $this->sectionVideoData = $sectionVideoData;
    }

    /**
     * @return mixed
     */
    public function getSectionVideoPlayerColor()
    {
        return $this->sectionVideoPlayerColor;
    }

    /**
     * @param mixed $sectionVideoPlayerColor
     */
    public function setSectionVideoPlayerColor($sectionVideoPlayerColor): void
    {
        $this->sectionVideoPlayerColor = $sectionVideoPlayerColor;
    }


    /**
     * @return mixed
     */
    public function getSectionPhotoTitle()
    {
        return $this->sectionPhotoTitle;
    }

    /**
     * @param mixed $sectionPhotoTitle
     */
    public function setSectionPhotoTitle($sectionPhotoTitle): void
    {
        $this->sectionPhotoTitle = $sectionPhotoTitle;
    }

    /**
     * @return mixed
     */
    public function getSectionPhotoData()
    {
        return $this->sectionPhotoData;
    }

    /**
     * @param mixed $sectionPhotoData
     */
    public function setSectionPhotoData($sectionPhotoData): void
    {
        $this->sectionPhotoData = $sectionPhotoData;
    }

    /**
     * @return mixed
     */
    public function getSectionOnTheInternetTitle()
    {
        return $this->sectionOnTheInternetTitle;
    }

    /**
     * @param mixed $sectionOnTheInternetTitle
     */
    public function setSectionOnTheInternetTitle($sectionOnTheInternetTitle): void
    {
        $this->sectionOnTheInternetTitle = $sectionOnTheInternetTitle;
    }

    /**
     * @return mixed
     */
    public function getSectionOnTheInternetData()
    {
        return $this->sectionOnTheInternetData;
    }

    /**
     * @param mixed $sectionOnTheInternetData
     */
    public function setSectionOnTheInternetData($sectionOnTheInternetData): void
    {
        $this->sectionOnTheInternetData = $sectionOnTheInternetData;
    }


    /**
     * @return mixed
     */
    public function getFooterSentence()
    {
        return $this->footerSentence;
    }

    /**
     * @param mixed $footerSentence
     */
    public function setFooterSentence($footerSentence): void
    {
        $this->footerSentence = $footerSentence;
    }

    /**
     * @return mixed
     */
    public function getFooterUrl()
    {
        return $this->footerUrl;
    }

    /**
     * @param mixed $footerUrl
     */
    public function setFooterUrl($footerUrl): void
    {
        $this->footerUrl = $footerUrl;
    }

    /**
     * @return mixed
     */
    public function getFooterUrlTile()
    {
        return $this->footerUrlTile;
    }

    /**
     * @param mixed $footerUrlTile
     */
    public function setFooterUrlTile($footerUrlTile): void
    {
        $this->footerUrlTile = $footerUrlTile;
    }



}
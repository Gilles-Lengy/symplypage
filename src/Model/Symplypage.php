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
    private $sectionVideoTitle;
    private $sectionVideoIds;
    private $sectionPhotoTitle;
    private $sectionPhotoData;
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
    public function getSectionVideoIds()
    {
        return $this->sectionVideoIds;
    }

    /**
     * @param mixed $sectionVideoIds
     */
    public function setSectionVideoIds($sectionVideoIds): void
    {
        $this->sectionVideoIds = $sectionVideoIds;
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
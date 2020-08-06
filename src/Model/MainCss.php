<?php


namespace App\Model;


class MainCss
{
    private $body;
    private $link;
    private $paragraph;
    private $initSections;
    private $initCard;
    private $header;
    private $textSection;
    private $photoSection;
    private $videoSection;
    private $cardsSection;

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getParagraph()
    {
        return $this->paragraph;
    }

    /**
     * @param mixed $paragraph
     */
    public function setParagraph($paragraph): void
    {
        $this->paragraph = $paragraph;
    }

    /**
     * @return mixed
     */
    public function getInitSections()
    {
        return $this->initSections;
    }

    /**
     * @param mixed $initSections
     */
    public function setInitSections($initSections): void
    {
        $this->initSections = $initSections;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return mixed
     */
    public function getInitCard()
    {
        return $this->initCard;
    }

    /**
     * @param mixed $initCard
     */
    public function setInitCard($initCard): void
    {
        $this->initCard = $initCard;
    }


    /**
     * @param mixed $header
     */
    public function setHeader($header): void
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getTextSection()
    {
        return $this->textSection;
    }

    /**
     * @param mixed $textSection
     */
    public function setTextSection($textSection): void
    {
        $this->textSection = $textSection;
    }

    /**
     * @return mixed
     */
    public function getPhotoSection()
    {
        return $this->photoSection;
    }

    /**
     * @param mixed $photoSection
     */
    public function setPhotoSection($photoSection): void
    {
        $this->photoSection = $photoSection;
    }

    /**
     * @return mixed
     */
    public function getVideoSection()
    {
        return $this->videoSection;
    }

    /**
     * @param mixed $videoSection
     */
    public function setVideoSection($videoSection): void
    {
        $this->videoSection = $videoSection;
    }

    /**
     * @return mixed
     */
    public function getCardsSection()
    {
        return $this->cardsSection;
    }

    /**
     * @param mixed $cardsSection
     */
    public function setCardsSection($cardsSection): void
    {
        $this->cardsSection = $cardsSection;
    }

}
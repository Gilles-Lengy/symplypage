<?php


namespace App\Model;


class MainCss
{
    private $body;
    private $link;
    private $paragraph;
    private $initSections;
    private $initCard;
    private $initDefaultButton;

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
     * @return mixed
     */
    public function getInitDefaultButton()
    {
        return $this->initDefaultButton;
    }

    /**
     * @param mixed $initDefaultButton
     */
    public function setInitDefaultButton($initDefaultButton): void
    {
        $this->initDefaultButton = $initDefaultButton;
    }

}
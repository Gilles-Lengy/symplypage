<?php


namespace App\Model;


class MainCss
{
    private $body;
    private $link;
    private $paragraph;

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


}
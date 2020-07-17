<?php


namespace App\Model;


class CssPreloader
{
    private $backgroundColor;
    private $statusPositionTopLeft;
    private $statusMargin;
    private $statusBorder;
    private $statusWidth;
    private $statusHeight;

    /**
     * @return mixed
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param mixed $backgroundColor
     */
    public function setBackgroundColor($backgroundColor): void
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return mixed
     */
    public function getStatusPositionTopLeft()
    {
        return $this->statusPositionTopLeft;
    }

    /**
     * @param mixed $statusPositionTopLeft
     */
    public function setStatusPositionTopLeft($statusPositionTopLeft): void
    {
        $this->statusPositionTopLeft = $statusPositionTopLeft;
    }


    /**
     * @return mixed
     */
    public function getStatusMargin()
    {
        return $this->statusMargin;
    }

    /**
     * @param mixed $statusMargin
     */
    public function setStatusMargin($statusMargin): void
    {
        $this->statusMargin = $statusMargin;
    }

    /**
     * @return mixed
     */
    public function getStatusBorder()
    {
        return $this->statusBorder;
    }

    /**
     * @param mixed $statusBorder
     */
    public function setStatusBorder($statusBorder): void
    {
        $this->statusBorder = $statusBorder;
    }

    /**
     * @return mixed
     */
    public function getStatusWidth()
    {
        return $this->statusWidth;
    }

    /**
     * @param mixed $statusWidth
     */
    public function setStatusWidth($statusWidth): void
    {
        $this->statusWidth = $statusWidth;
    }

    /**
     * @return mixed
     */
    public function getStatusHeight()
    {
        return $this->statusHeight;
    }

    /**
     * @param mixed $statusHeight
     */
    public function setStatusHeight($statusHeight): void
    {
        $this->statusHeight = $statusHeight;
    }






}
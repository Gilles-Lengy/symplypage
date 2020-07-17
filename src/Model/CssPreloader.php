<?php


namespace App\Model;


class CssPreloader
{
    private $backgroundColor;
    private $statusPositionTopLeft;
    private $statusMargin;

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


}
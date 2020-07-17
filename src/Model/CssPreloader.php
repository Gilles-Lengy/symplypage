<?php


namespace App\Model;


class CssPreloader
{
    private $backgroundColor;
    private $positionStatusTopLeft;
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
    public function getPositionStatusTopLeft()
    {
        return $this->positionStatusTopLeft;
    }

    /**
     * @param mixed $positionStatusTopLeft
     */
    public function setPositionStatusTopLeft($positionStatusTopLeft): void
    {
        $this->positionStatusTopLeft = $positionStatusTopLeft;
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
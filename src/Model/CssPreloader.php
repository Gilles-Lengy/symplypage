<?php


namespace App\Model;


class CssPreloader
{
    private $backgroundColor;
    private $positionStatusTopLeft;

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
}
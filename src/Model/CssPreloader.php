<?php


namespace App\Model;


class CssPreloader
{
    private $backgroundColor;
    private $positionTopLeft;

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
    public function getPositionTopLeft()
    {
        return $this->positionTopLeft;
    }

    /**
     * @param mixed $positionTopLeft
     */
    public function setPositionTopLeft($positionTopLeft): void
    {
        $this->positionTopLeft = $positionTopLeft;
    }



}
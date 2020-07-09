<?php


namespace App\Model;


class CssPreloader
{
    private $bodyBackgroundColor;

    /**
     * @return mixed
     */
    public function getBodyBackgroundColor()
    {
        return $this->bodyBackgroundColor;
    }

    /**
     * @param mixed $bodyBackgroundColor
     */
    public function setBodyBackgroundColor($bodyBackgroundColor): void
    {
        $this->bodyBackgroundColor = $bodyBackgroundColor;
    }

}
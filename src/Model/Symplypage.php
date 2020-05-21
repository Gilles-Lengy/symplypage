<?php


namespace App\Model;


class Symplypage
{
    private $pageTitle;

    // Getters
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    // Setters
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }
}
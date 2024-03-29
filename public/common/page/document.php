<?php

use Core\Facade;
use Core\FacadeView;
use Core\Utils;

class Common_Page_Document_view extends FacadeView
{
    function Render(Facade $facade, $data)
    {
        return $this->CreateTemplate($facade, $data)
            ->Add('head.title', Utils::ArrayGet("head.title", $data, SYS_TITLE))
            ->Add('head.keywords', Utils::ArrayGet("head.keywords", $data, SYS_KEYWORDS))
            ->Add('head.description', Utils::ArrayGet("head.description", $data, SYS_DESCRIPTION))
            ->Add('head.logo', Utils::ArrayGet("head.logo", $data, SYS_LOGO))
            ->Add('copyright', Utils::ArrayGet("copyright", $data, SYS_COPYRIGHT))
            ->Execute();
    }
}
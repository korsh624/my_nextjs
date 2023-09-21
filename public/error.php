<?php

use Core\ClientException;
use Core\Facade;
use Core\FacadePage;
use Core\JsonResponse;
use Core\Utils;

class Error_view extends FacadePage
{
    function Execute(Facade $facade, $data)
    {
        $e = Utils::ArrayGet("error", $data);
        $message = null;
        $details = null;
        if($e instanceof Exception) {
            if (PRODUCTION) {
                if ($e instanceof ClientException) {
                    $message = $e->getMessage();
                } else {
                    $message = "При обработке запроса произошла непредвиденная ошибка сервера. Попробуйте перезапустить приложение и повторить запрос. Если ошибка повторяется - обратитесь к разработчикам.";
                }
            } else {
                $message = $e->getMessage();
                $details = "<pre>" . $e->getFile() . ":" . $e->getLine() . "<br/><hr/>" . $e->getTraceAsString() . "</pre>";
            }
        } else {
            $message = Utils::ArrayGet("message", $data);
            $details = Utils::ArrayGet("details", $data);
        }
        if(strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
            return JsonResponse::Error($message, $details);
        else
            return $this->CreateTemplate($facade, $data)
                ->Set("message", $message)
                ->Set("details", $details)
                ->Execute();
    }
}
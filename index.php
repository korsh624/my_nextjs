<?php

define("ROOT_PATH", __DIR__);

require_once join(DIRECTORY_SEPARATOR, [ROOT_PATH, 'classes', 'Core', 'loader.php']);

Core\FileCache::SetPath(PATH_CACHE . DIRECTORY_SEPARATOR . "data");
Core\FileCache::Enable();

try {
    $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'index';
    Core\Facade::Run($view, $_REQUEST, ROOT_PATH, ROOT_URL);
} catch (Exception $e) {
    Core\Facade::Run("error", ['error' => $e], ROOT_PATH, ROOT_URL);
}

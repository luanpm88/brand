<?php
namespace App\Helpers;

class General
{
    /**
     * Get controller action name
     **/
    public static function controllerAction()
    {
        // GET FROM SCREEN OPTION
        $controller = explode('\\', request()->route()->getAction()['controller']);
        return $controller[count($controller)-1];
    }

    /**
     * Get controller name
     **/
    public static function controllerName()
    {
        $controllerAction = controllerAction();
        return explode('@', $controllerAction)[0];
    }

    /**
     * Get action name
     **/
    public static function actionName()
    {
        $controllerAction = controllerAction();
        return explode('@', $controllerAction)[1];
    }
}
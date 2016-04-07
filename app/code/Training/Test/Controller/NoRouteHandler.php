<?php

namespace Training\Test\Controller;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface{
    
    public function process(\Magento\Framework\App\RequestInterface $request){
        
        $modulename = 'cms';
        $controllerName = 'index';
        $actionName   = 'index';
        
        $request->setModuleName($modulename)
                ->setControllerName($controllerName)
                ->setActionName($actionName);
        
        return true;
                
    }
}

?>

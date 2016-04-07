<?php

namespace Training\Test\App;

class FrontController extends \Magento\Framework\App\FrontController{
    
    protected $routeList;
    
    protected $response;
    
    protected $logger;
    
    public function __construct(
               \Magento\Framework\App\RouterList $routerList,
               \Magento\Framework\App\Response\Http $response,
               \Psr\Log\LoggerInterface $logger)
    {
        $this->routeList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }
    
    public function dispatch(\Magento\Framework\App\RequestInterface $request){
        
        foreach($this->routeList as $router){
            
            $this->logger->addDebug(get_class($router));
            return parent::dispatch($request);
        }
    }
    
    
}
?>
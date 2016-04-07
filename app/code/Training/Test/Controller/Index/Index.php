<?php

namespace   Training\Test\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Index extends \Magento\Framework\App\Action\Action{
    
    protected $pageFactory;
    
    
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
       
        return parent::__construct($context);
        
    }
 
    
    public function execute(){
       
        $page_object = $this->pageFactory->create();
        return $page_object;
    } 
}
<?php

namespace Training\Test\Model;

class Config extends \Magento\Framework\Config\Data Implements \Training\Test\Mode\Config\ConfigInterface{
    
    public function __construct(
            \Training\Test\Model\Config\Reader $reader,
            \Magento\Framework\Config\CacheInterface $cache,
            $cacheId = 'training_test_config'
           ){
        
        parent::__construct($reader,$cache,$cacheId);
    }
    
    public function getMyNodeInfo(){
        
        return $this->get();
    }
}

?>